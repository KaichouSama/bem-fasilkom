<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// hero
use App\Http\Controllers\HeroController;
use App\Models\Hero;

// filosofi
use App\Http\Controllers\FilosofiController;
use App\Models\Filosofi;

// visi misi (vimi)
use App\Http\Controllers\VimiController;
use App\Models\Vimi;

// Bidang 
use App\Http\Controllers\BidangController;
use App\Models\Bidang;


// publik-panel
Route::get('/', function () {
    $hero = Hero::first();
    $filosofi = Filosofi::first();
    $vimi = Vimi::first();

    return view('publik-panel.index', compact('hero', 'filosofi', 'vimi'));
});


// admin-panel
Route::get('/admin-bem', function () {
    return view('admin-panel.dashboard.index');
});


// admin-panel (hero)
Route::resource('admin-bem/hero', HeroController::class)
    ->only(['index','edit','update']);

// admin-panel (filosofi)
Route::resource('admin-bem/filosofi', FilosofiController::class)
    ->only(['index','edit','update']);

// admin-panel (visi misi (vimi))
Route::resource('admin-bem/vimi', VimiController::class)
    ->only(['index','edit','update']);

Route::resource('admin-bem/bidang', BidangController::class);
