<?php

namespace App\Http\Controllers;

use App\Models\SpmbApplicant;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SpmbController extends Controller
{
    public function index()
    {
        return view('pages.spmb');
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
