<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\SpmbApplicant;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SpmbController extends Controller
{
    public function index()
    {
        $gformUrl = Setting::get('spmb_gform_url', 'https://forms.google.com');
        if (!empty($gformUrl) && !str_starts_with($gformUrl, 'http://') && !str_starts_with($gformUrl, 'https://')) {
            $gformUrl = 'https://' . $gformUrl;
        }

        $spmbStatusText = Setting::get('spmb_status_text', 'PENDAFTARAN DIBUKA • TAHUN AJARAN 2026/2027');

        $rawInfo = Setting::get('spmb_info_items', "Pendaftaran dibuka mulai 1 Februari – 30 Juni 2026\nPendaftaran dilakukan online melalui portal ini\nTidak dipungut biaya pendaftaran (GRATIS)\nTersedia pilihan jurusan TKJ, Akuntansi, dan Administrasi Perkantoran\nInfo lebih lanjut hubungi: Tata Usaha (0831-4947-3113)");
        $spmbInfoItems = array_filter(array_map('trim', explode("\n", $rawInfo)));

        $rawReq = Setting::get('spmb_requirements_items', "Fotokopi Ijazah / SKHUN SD/MI yang telah dilegalisir\nFotokopi Kartu Keluarga (KK)\nAkta Kelahiran asli/fotokopi\nPas foto berwarna 3×4 sebanyak 4 lembar\nSurat Keterangan Sehat dari dokter\nRapor kelas 4, 5, dan 6 SD/MI (asli)");
        $spmbRequirementsItems = array_filter(array_map('trim', explode("\n", $rawReq)));

        $rawSchedule = Setting::get('spmb_schedule_items', "Buka Pendaftaran | 1 Feb – 30 Jun 2026\nTes Seleksi Tulis | 5 Jul 2026\nTes Wawancara | 8 Jul 2026\nPengumuman Hasil | 10 Jul 2026\nDaftar Ulang | 11–13 Jul 2026");
        $scheduleLines = array_filter(array_map('trim', explode("\n", $rawSchedule)));
        $spmbScheduleItems = [];
        foreach ($scheduleLines as $line) {
            $parts = explode('|', $line, 2);
            $spmbScheduleItems[] = [
                'label' => trim($parts[0] ?? ''),
                'time' => trim($parts[1] ?? ''),
            ];
        }

        return view('pages.spmb', compact(
            'gformUrl',
            'spmbStatusText',
            'spmbInfoItems',
            'spmbRequirementsItems',
            'spmbScheduleItems'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:spmb_applicants',
            'previous_school' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $registrationNumber = 'SPMB-' . date('Y') . '-' . strtoupper(substr(uniqid(), -5));
        $validated['registration_number'] = $registrationNumber;
        $validated['status'] = 'pending';

        $applicant = SpmbApplicant::create($validated);

        return redirect()->route('spmb.index')->with([
            'success' => 'Pendaftaran berhasil dikirim! Silakan cetak bukti pendaftaran Anda.',
            'registration_number' => $registrationNumber,
            'applicant_id' => $applicant->id
        ]);
    }

    public function printPdf($id)
    {
        $applicant = SpmbApplicant::findOrFail($id);
        
        $pdf = Pdf::loadView('pdf.spmb-card', compact('applicant'));
        return $pdf->download('KARTU-SPMB-'.$applicant->registration_number.'.pdf');
    }

    public function checkStatus()
    {
        return redirect(route('spmb.index') . '#alur-pendaftaran');
    }

    public function processCheckStatus(Request $request)
    {
        return redirect(route('spmb.index') . '#alur-pendaftaran');
    }
}
