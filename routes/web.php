<?php

use Illuminate\Support\Facades\Route;

Route::get('/forgot-password', function () { return view('pages.admin.forgot-password'); })->name('forgot-password');
Route::get('/reset-password', function () { return view('pages.admin.reset-password'); })->name('reset-password');
Route::get('/', function () { return view('pages.web.home'); })->name('home');

Route::get('/login', function () { return view('pages.admin.login'); })->name('login');
Route::get('/register', function () { return view('pages.admin.register'); })->name('register');
Route::get('/change-password', function () { return view('pages.admin.change-password'); });
Route::get('/dashboard', function () { return view('pages.admin.dashboard'); });
Route::get('/dashboard/{pagename}', function () { return view('pages.admin.page'); });
Route::get('/dashboard/{pagename}/{id}', function () { return view('pages.admin.edit'); });
Route::get('/{pagename}', function () { return view('pages.web.page'); });
Route::get('/search/{searchSlug}', function () { return view('pages.web.search'); });
Route::get('/{pagename}/{pageSlug}', function () { return view('pages.web.post'); });
