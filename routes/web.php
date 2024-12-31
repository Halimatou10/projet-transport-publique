<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\GeoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrainController;


Route::get('/', function () {
    return view('layouts.index');
})->name('index');

Route::get('reserver', function () {
    return view('layouts.components-carousel');
})->name('reserver');

Route::get('geolocaliser', function () {
    return view('layouts.geo');
})->name('geolocaliser');

Route::get('contact', function () {
    return view('layouts.pages-contact');
})->name('contact');

Route::get('profile', function () {
    return view('layouts.users-profile');
})->name('profile');

Route::get('login', function () {
    return view('layouts.pages-login');
})->name('login');

Route::get('register', function () {
    return view('layouts.pages-register');
})->name('register');

Route::get('agence', function () {
    return view('layouts.forms-agence');
})->name('agence');

Route::get('covoiturage', function () {
    return view('layouts.forms-covoiturage');
})->name('covoiturage');


Route::resource('/acceuil',IndexContoller::class)->except('create', 'update','edit','show','destroy');
