<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $latestArticles = Article::latest('published_at')->take(3)->get();
        return view('home', compact('latestArticles'));
    }

    public function profile()
    {
        $organizations = \App\Models\Organization::orderBy('order')->get();
        $facilities = \App\Models\Facility::all();
        return view('pages.profile', compact('organizations', 'facilities'));
    }

    public function academic()
    {
        $teachers = \App\Models\Teacher::all();
        return view('pages.academic', compact('teachers'));
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
        return view('pages.contact');
    }
}
