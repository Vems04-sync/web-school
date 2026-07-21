<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SpmbController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DownloadController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profile'])->name('profile');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

Route::get('/berita', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/berita/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/spmb', [SpmbController::class, 'index'])->name('spmb.index');
Route::post('/spmb', [SpmbController::class, 'store'])->name('spmb.store');
Route::get('/spmb/cetak/{id}', [SpmbController::class, 'printPdf'])->name('spmb.print');
Route::get('/spmb/cek-status', [SpmbController::class, 'checkStatus'])->name('spmb.check');
Route::post('/spmb/cek-status', [SpmbController::class, 'processCheckStatus'])->name('spmb.processCheck');

Route::get('/download', [DownloadController::class, 'index'])->name('downloads.index');
