<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $documents = Document::latest()->get();
        return view('pages.downloads', compact('documents'));
    }
}
