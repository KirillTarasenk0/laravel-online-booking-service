<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views\MainPageController;
use App\Http\Controllers\Mails\NewsSenderController;
use App\Http\Controllers\Rooms\RoomSearchController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(MainPageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'toStoreEmail')->name('to-store-email');
});

Route::controller(NewsSenderController::class)->group(function () {
    Route::post('/createNewsEmail', 'create')->name('create-news-email');
    Route::get('/newsEmailSender', 'sendNewsEmails')->name('send-news-emails');
});

Route::controller(RoomSearchController::class)->group(function () {
    Route::get('/findRoom', 'findRoom')->name('find-room');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
