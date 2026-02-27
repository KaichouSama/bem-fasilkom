<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\LogoKabinetController;
use App\Http\Controllers\FilosofiNamaController;
use App\Http\Controllers\FilosofiLogoController;
use App\Http\Controllers\VimiController;
use App\Http\Controllers\BidangController;


use App\Models\Hero;
use App\Models\LogoKabinet;
use App\Models\FilosofiNama;
use App\Models\FilosofiLogo;
use App\Models\Vimi;
use App\Models\Bidang;

use Illuminate\Support\Facades\Route;





// publik-panel
Route::get('/', function () {
    $hero = Hero::first();
    $vimi = Vimi::first();
    $logo = LogoKabinet::first();
    $filosofiNama = FilosofiNama::all();
    $filosofiLogo = FilosofiLogo::all(); 


    return view('publik-panel.index', compact('hero', 'vimi', 'logo', 'filosofiNama', 'filosofiLogo'));
});


// admin-panel
Route::get('/admin-bem', function () {
    return view('admin-panel.dashboard.index');
});


// admin-panel 
Route::resource('admin-bem/hero', HeroController::class);

Route::resource('admin-bem/vimi', VimiController::class);

Route::resource('admin-bem/bidang', BidangController::class);

Route::resource('admin-bem/logo-kabinet', LogoKabinetController::class);

Route::resource('admin-bem/filosofi-nama', FilosofiNamaController::class);

Route::resource('admin-bem/filosofi-logo', FilosofiLogoController::class);
