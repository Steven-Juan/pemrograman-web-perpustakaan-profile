<?php

use App\Livewire\Home;
use App\Livewire\Post\Show as PostShow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
})->name('home');
Route::get('/about', function () {
    return view('client.about');
})->name('home');

Route::get('/filament', Home::class)->name('filament');
Route::get('/article/{post:slug}', PostShow::class)->name('post.show');
