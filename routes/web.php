<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/landingPage', function () {
    return view('landingPage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function () {
    Mail::raw('Ini adalah test email dari Laravel', function ($message) {
        $message->to('puturahmaa7@gmail.com')
                ->subject('Test Koneksi Gmail dari Laravel');
    });

    return 'Email test sudah dikirim (kalau SMTP benar).';
});


require __DIR__.'/auth.php';
