<?php

use App\Livewire\Home;
use App\Livewire\Post\Show as PostShow;
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

Route::get('/blog', function () {
    return view('client.blog');
})->name('blog');

Route::get('/blog-detail', function () {
    return view('client.blog-detail');
})->name('blog-detail');

Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');

Route::get('/filament', Home::class)->name('filament');
Route::get('/article/{post:slug}', PostShow::class)->name('post.show');
