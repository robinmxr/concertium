<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['user'])->name('userdashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['admin'])->name('admindashboard');

Route::get('/organizer/dashboard', function () {
    return view('organizer.dashboard');
})->middleware(['organizer'])->name('organizerdashboard');

Route::get('/artist/dashboard', function () {
    return view('artist.dashboard');
})->middleware(['artist'])->name('artistdashboard');


Route::middleware('organizer')->name('organizer.')->group(function () {
 Route::get('/organizer/artist', [Organizer\ArtistController::class,'showArtist'])->name('artist.show');
 Route::get('/organizer/artist/{id}', [Organizer\ArtistController::class,'viewArtist'])->name('artist.view');
 Route::get('/organizer/artist/hire/{id}', [Organizer\ConcertController::class,'showRequest'])->name('concert.showrequest');
 Route::get('/organizer/profile', [Organizer\OrganizerController::class,'profile'])->name('profile.view');
 Route::get('/organizer/profile/edit', [Organizer\OrganizerController::class,'editprofile'])->name('profile.edit');
 Route::post('/organizer/profile/edit', [Organizer\OrganizerController::class,'updateprofile'])->name('profile.update');
});



Route::middleware('artist')->name('artist.')->group(function () {
    Route::get('/artist/profile', [Artist\ArtistController::class,'profile'])->name('profile.view');
    Route::get('/artist/profile/edit', [Artist\ArtistController::class,'editprofile'])->name('profile.edit');
    Route::post('/artist/profile/edit', [Artist\ArtistController::class,'updateprofile'])->name('profile.update');
});


Route::middleware('user')->name('user.')->group(function () {
    Route::get('/profile', [User\UserController::class,'profile'])->name('profile.view');
    Route::get('/profile/edit', [User\UserController::class,'editprofile'])->name('profile.edit');
    Route::post('/profile/edit', [User\UserController::class,'updateprofile'])->name('profile.update');
});

Route::middleware('admin')->name('admin')->group(function () {
    Route::get('/admin/profile', [Admin\AdminController::class,'profile'])->name('profile.view');
    Route::get('/admin/profile/edit', [Admin\AdminController::class,'editprofile'])->name('profile.edit');
    Route::post('/admin/profile/edit', [Admin\AdminController::class,'updateprofile'])->name('profile.update');
});

require __DIR__.'/auth.php';
