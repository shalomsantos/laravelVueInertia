<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home',[
        'data' => [
            'item' => 'Pessoal',
            'subitem' => 'Apresentador',
            'fornec' => 'NdA',
            'ct_vlunit' => 1700,
            'ct_qunt' => 1,
            'ct_unid' => 2,
            'ct_total' => 7000,
            'ap_vlunit' => 1800,
            'ap_qunt' => 3,
            'ap_unid' => 1,
            'ap_total' => 150000,
        ]
    ]);
})->middleware(['auth', 'verified']);

Route::get('/login', function () {
    return Inertia::render('Login');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
