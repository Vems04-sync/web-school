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
        return view('pages.profile');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
