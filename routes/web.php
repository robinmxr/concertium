<?php

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
});

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
 Route::get('/organizer/artist', [\App\Http\Controllers\Auth\Organizer\ArtistController::class,'showartist'])->name('showartist');
});

require __DIR__.'/auth.php';
