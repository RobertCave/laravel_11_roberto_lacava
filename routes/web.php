<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');;




// BLOG

// Leggere tutti gli articoli nel database
Route::get('/post/index', [PostsController::class, 'index'])->name('post.index');

//  per la pagina inserisci post
Route::get('/post/create', [PostsController::class, 'create'])->name('post.create')->middleware('auth');

// rotta per lo store in Database
Route::post('/post/store',[PostsController::class, 'store'])->name('post.store')->middleware('auth');