<?php

use App\Livewire\Buku\DetailBuku;
use App\Livewire\Buku\ListBuku;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
})->name('home');

Route::get('/about', function () {
    return view('client.about');
})->name('about');

Route::get('/portfolio', function () {
    return view('client.portfolio');
})->name('portfolio');

Route::get('/portfolio-detail', function () {
    return view('client.portfolio-detail');
})->name('portfolio-detail');

Route::get('/faq', function () {
    return view('client.faq');
})->name('faq');

Route::get('/buku', ListBuku::class)->name('buku');

Route::get('/buku/{id}', DetailBuku::class)->name('buku.show');

Route::get('/blog-detail', function () {
    return view('client.blog-detail');
})->name('blog-detail');

Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');
