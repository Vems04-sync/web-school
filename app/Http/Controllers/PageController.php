<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $heroSlides = \App\Models\HeroSlide::where('is_active', true)->orderBy('order', 'asc')->get();
        $latestArticles = Article::latest('published_at')->take(3)->get();
        $schoolVision = \App\Models\Setting::get('school_vision', 'Beriman dan bertaqwa kepada Allah SWT, Cerdas, Terampil, Kreatif, Mandiri, dan Berakhlakul Karimah.');
        $schoolMission = \App\Models\Setting::get('school_mission', "1. Meningkatkan iman dan taqwa kepada Allah SWT.\n2. Membudayakan kepribadian luhur yang berorientasi akhlakul karimah.\n3. Menerapkan budaya 5S (Salam, Senyum, Sapa, Sopan, Santun).\n4. Meningkatkan potensi, kreativitas, dan bakat sebagai bekal kecakapan hidup (lifeskill).\n5. Meningkatkan mutu akademik dan non akademik.\n6. Menyediakan pendidikan terpadu antara ilmu agama dan ilmu umum.");

        return view('home', compact('heroSlides', 'latestArticles', 'schoolVision', 'schoolMission'));
    }

    public function profile()
    {
        $organizations = \App\Models\Organization::orderBy('order')->get();
        $facilities = \App\Models\Facility::all();
        $teachers = \App\Models\Teacher::orderBy('name')->get();

        $schoolHistory = \App\Models\Setting::get('school_history', 'SMA AL-ISLAMI didirikan sebagai lembaga pendidikan...');
        $logoPhilosophy = \App\Models\Setting::get('logo_philosophy', 'Perisai melambangkan ketahanan moral...');
        $coreValues = \App\Models\Setting::get('core_values', 'Religius, Jujur, Disiplin...');
        $schoolVision = \App\Models\Setting::get('school_vision', 'Beriman dan bertaqwa kepada Allah SWT...');
        $schoolMission = \App\Models\Setting::get('school_mission', "1. Meningkatkan iman dan taqwa kepada Allah SWT...");

        return view('pages.profile', compact(
            'organizations', 
            'facilities', 
            'teachers',
            'schoolHistory',
            'logoPhilosophy',
            'coreValues',
            'schoolVision',
            'schoolMission'
        ));
    }

    public function academic()
    {
        $kalender = \App\Models\AcademicCalendar::orderBy('order', 'asc')->get();

        $curriculumTitle = \App\Models\Setting::get('curriculum_title', 'Kurikulum Merdeka');
        $curriculumDescription = \App\Models\Setting::get('curriculum_description', 'SMA AL-ISLAMI menerapkan Kurikulum Merdeka yang terintegrasi dengan kebutuhan kompetensi Industri & Dunia Kerja (IDUKA). Kurikulum ini dirancang fleksibel untuk memberi keleluasaan kepada pendidik dalam menciptakan pembelajaran berkualitas yang berfokus pada materi esensial, pengembangan karakter, serta minat peserta didik.');
        $academicYear = \App\Models\Setting::get('academic_year', '2026/2027');

        return view('pages.academic', compact(
            'kalender',
            'curriculumTitle',
            'curriculumDescription',
            'academicYear'
        ));
    }

    public function kesiswaan()
    {
        $extracurriculars = \App\Models\Extracurricular::all();
        $achievements = \App\Models\Achievement::orderByDesc('year')->get();
        
        $totalEkskul = $extracurriculars->count();
        $totalPrestasi = $achievements->count();
        $prestasiNasional = $achievements->where('level', 'Nasional')->count();
        $prestasiRegional = $achievements->whereIn('level', ['Kabupaten/Kota', 'Provinsi'])->count();
        $prestasiInternasional = $achievements->where('level', 'Internasional')->count();
        
        $extracurricularGformUrl = \App\Models\Setting::get('extracurricular_gform_url', 'https://forms.google.com');
        if (!empty($extracurricularGformUrl) && !str_starts_with($extracurricularGformUrl, 'http://') && !str_starts_with($extracurricularGformUrl, 'https://')) {
            $extracurricularGformUrl = 'https://' . $extracurricularGformUrl;
        }
        
        return view('pages.kesiswaan', compact(
            'extracurriculars', 
            'achievements', 
            'totalEkskul',
            'totalPrestasi',
            'prestasiNasional',
            'prestasiRegional',
            'prestasiInternasional',
            'extracurricularGformUrl'
        ));
    }

    public function contact()
    {
        $phone = \App\Models\Setting::get('school_phone', '0831-4947-3113');
        $rawWa = \App\Models\Setting::get('school_whatsapp');
        
        if (empty($rawWa) || str_contains($rawWa, '812-3456-7890') || str_contains($rawWa, '6281234567890')) {
            $rawWa = $phone;
        }

        $digits = preg_replace('/\D/', '', $rawWa);
        if (str_starts_with($digits, '0')) {
            $digits = '62' . substr($digits, 1);
        }
        $waLink = !empty($digits) ? 'https://wa.me/' . $digits : '#';

        $contact = [
            'address' => \App\Models\Setting::get('school_address', 'Jl. Raya Desa Kara, Kecamatan Torjun, Kabupaten Sampang, Jawa Timur 69271'),
            'phone' => $phone,
            'email' => \App\Models\Setting::get('school_email', 'smaalislamiofficial@gmail.com'),
            'work_hours' => \App\Models\Setting::get('school_work_hours', 'Senin - Sabtu: 07.30 - 15.00 WIB'),
            'whatsapp' => $waLink,
            'instagram' => \App\Models\Setting::get('school_instagram', 'https://www.instagram.com/smaalislamiofficial'),
            'facebook' => \App\Models\Setting::get('school_facebook', 'https://www.facebook.com/share/1E9FKd3Kz1/'),
            'youtube' => \App\Models\Setting::get('school_youtube', 'https://youtube.com/@smaalislamiofficial'),
            'tiktok' => \App\Models\Setting::get('school_tiktok', 'https://tiktok.com/@smaalislamiofficial'),
            'maps_embed' => \App\Models\Setting::get('school_maps_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0509927950907!2d113.19924487499836!3d-7.120089292883585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8294b789e85f1%3A0x28634fa48ceab6bd!2sSMA%20AL%20ISLAMI!5e0!3m2!1sid!2sid!4v1784737722383!5m2!1sid!2sid'),
        ];

        return view('pages.contact', compact('contact'));
    }
}
