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

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/showlogin',[PageController::class,'showLogin'])->name('loginpage');
Route::get('/concert',[User\ConcertController::class,'showConcert'])->name('user.concert.list');


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
 Route::post('/organizer/artist/hire/{id}', [Organizer\ConcertController::class,'makeRequest'])->name('concert.makerequest');
 Route::get('/organizer/profile', [Organizer\OrganizerController::class,'profile'])->name('profile.view');
 Route::get('/organizer/profile/edit', [Organizer\OrganizerController::class,'editprofile'])->name('profile.edit');
 Route::post('/organizer/profile/edit', [Organizer\OrganizerController::class,'updateprofile'])->name('profile.update');
 Route::get('/organizer/venue', [Organizer\VenueController::class,'showVenue'])->name('venue.show');
 Route::get('/organizer/venue/{id}', [User\VenueController::class,'viewVenue'])->name('venue.view');

    Route::get('/organizer/wallet',[Organizer\PaymentController::class,'showWallet'])->name('wallet.show');
    Route::get('/organizer/wallet/withdraw',[Organizer\PaymentController::class,'showWithdraw'])->name('wallet.withdraw');
    Route::post('/organizer/wallet/withdraw',[Organizer\PaymentController::class,'storeWithdraw'])->name('wallet.storewithdraw');
});



Route::middleware('artist')->name('artist.')->group(function () {
    Route::get('/artist/profile', [Artist\ArtistController::class,'profile'])->name('profile.view');
    Route::get('/artist/profile/edit', [Artist\ArtistController::class,'editprofile'])->name('profile.edit');
    Route::post('/artist/profile/edit', [Artist\ArtistController::class,'updateprofile'])->name('profile.update');
    Route::get('/artist/concert', [Artist\ConcertController::class,'showConcert'])->name('concert.list');
    Route::get('/artist/concert/{id}', [Artist\ConcertController::class,'viewConcert'])->name('concert.view');
    Route::post('/artist/concert/{id}', [Artist\ConcertController::class,'approveConcert'])->name('concert.approve');
    Route::post('/artist/concert/delete/{id}', [Artist\ConcertController::class,'deleteConcert'])->name('concert.delete');

    Route::get('/artist/wallet',[Artist\PaymentController::class,'showWallet'])->name('wallet.show');
    Route::get('/artist/wallet/withdraw',[Artist\PaymentController::class,'showWithdraw'])->name('wallet.withdraw');
    Route::post('/artist/wallet/withdraw',[Artist\PaymentController::class,'storeWithdraw'])->name('wallet.storewithdraw');
});


Route::middleware('user')->name('user.')->group(function () {
    Route::get('/profile', [User\UserController::class,'profile'])->name('profile.view');
    Route::get('/profile/edit', [User\UserController::class,'editprofile'])->name('profile.edit');
    Route::post('/profile/edit', [User\UserController::class,'updateprofile'])->name('profile.update');
    Route::get('/concert/{id}',[User\ConcertController::class,'viewConcert'])->name('concert.view');
    Route::get('/concert/buy/{id}',[User\TicketController::class,'showTicket'])->name('ticket.class');
    Route::get('/ticket',[User\TicketController::class,'ownedTicket'])->name('ticket.booked');
    Route::post('/ticket/refund/{id}',[User\TicketController::class,'refundTicket'])->name('ticket.refund');
    Route::get('/ticket/buy/{id}/{class}',[User\TicketController::class,'buyTicket'])->name('ticket.buy');
    Route::post('/ticket/buy/{id}',[User\TicketController::class,'storeTicket'])->name('ticket.store');
    Route::get('/wallet',[User\PaymentController::class,'showWallet'])->name('wallet.show');
    Route::get('/wallet/withdraw',[User\PaymentController::class,'showWithdraw'])->name('wallet.withdraw');
    Route::post('/wallet/withdraw',[User\PaymentController::class,'storeWithdraw'])->name('wallet.storewithdraw');
    Route::get('/venue', [User\VenueController::class,'showVenue'])->name('venue.show');
    Route::get('/venue/{id}', [User\VenueController::class,'viewVenue'])->name('venue.view');
});

Route::middleware('admin')->name('admin.')->group(function () {
    Route::get('/admin/profile', [Admin\AdminController::class,'profile'])->name('profile.view');
    Route::get('/admin/profile/edit', [Admin\AdminController::class,'editprofile'])->name('profile.edit');
    Route::post('/admin/profile/edit', [Admin\AdminController::class,'updateprofile'])->name('profile.update');
    Route::get('/admin/venue', [Admin\VenueController::class,'showVenue'])->name('venue.show');
    Route::get('/admin/venue/create', [Admin\VenueController::class,'createVenue'])->name('venue.create');
    Route::post('/admin/venue/create', [Admin\VenueController::class,'storeVenue'])->name('venue.store');
    Route::get('/admin/venue/{id}', [Admin\VenueController::class,'viewVenue'])->name('venue.view');
    Route::post('/admin/venue/{id}', [Admin\VenueController::class,'deleteVenue'])->name('venue.delete');
    Route::get('/admin/user', [Admin\MemberController::class,'showUser'])->name('user.show');
    Route::get('/admin/user/edit/{id}', [Admin\MemberController::class,'editUser'])->name('user.edit');
    Route::post('/admin/user/edit/{id}', [Admin\MemberController::class,'updateUser'])->name('user.update');
    Route::get('/admin/user/add', [Admin\MemberController::class,'addUser'])->name('user.add');
    Route::post('/admin/user/add', [Admin\MemberController::class,'storeUser'])->name('user.store');
    Route::post('/admin/user/{id}', [Admin\MemberController::class,'deleteUser'])->name('user.delete');
    Route::get('/admin/organizer', [Admin\MemberController::class,'showOrganizer'])->name('organizer.show');
    Route::get('/admin/organizer/edit/{id}', [Admin\MemberController::class,'editOrganizer'])->name('organizer.edit');
    Route::post('/admin/organizer/edit/{id}', [Admin\MemberController::class,'updateOrganizer'])->name('organizer.update');
    Route::get('/admin/organizer/add', [Admin\MemberController::class,'addOrganizer'])->name('organizer.add');
    Route::post('/admin/organizer/add', [Admin\MemberController::class,'storeOrganizer'])->name('organizer.store');
    Route::post('/admin/organizer/{id}', [Admin\MemberController::class,'deleteOrganizer'])->name('organizer.delete');
    Route::get('/admin/artist', [Admin\MemberController::class,'showArtist'])->name('artist.show');
    Route::get('/admin/artist/edit/{id}', [Admin\MemberController::class,'editArtist'])->name('artist.edit');
    Route::post('/admin/artist/edit/{id}', [Admin\MemberController::class,'updateartist'])->name('artist.update');
    Route::get('/admin/artist/add', [Admin\MemberController::class,'addArtist'])->name('artist.add');
    Route::post('/admin/artist/add', [Admin\MemberController::class,'storeArtist'])->name('artist.store');
    Route::post('/admin/artist/{id}', [Admin\MemberController::class,'deleteArtist'])->name('artist.delete');
    Route::get('/admin/ticket',[Admin\TicketController::class,'showTicket'])->name('ticket.show');
    Route::post('/admin/ticket/{id}',[Admin\TicketController::class,'deleteTicket'])->name('ticket.delete');
    Route::get('/admin/concert',[Admin\ConcertController::class,'showConcert'])->name('concert.show');
    Route::get('/admin/concert/{id}',[Admin\ConcertController::class,'viewConcert'])->name('concert.view');

    Route::get('/admin/wallet',[Admin\PaymentController::class,'showWallet'])->name('wallet.show');
    Route::get('/admin/wallet/withdraw',[Admin\PaymentController::class,'showWithdraw'])->name('wallet.withdraw');
    Route::post('/admin/wallet/withdraw',[Admin\PaymentController::class,'storeWithdraw'])->name('wallet.storewithdraw');
});

require __DIR__.'/auth.php';
