<?php
namespace App\Http\Controllers;



use Illuminate\Support\Facades\Route;

Route::middleware('guest')->name('user.')->group(function () {
    Route::get('register', [Auth\User\RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [Auth\User\RegisteredUserController::class, 'store']);

    Route::get('login', [Auth\User\AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [Auth\User\AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [Auth\User\PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [Auth\User\PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [Auth\User\NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [Auth\User\NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('guest')->name('admin.')->group(function () {
    Route::get('admin/register', [Auth\Admin\RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('admin/register', [Auth\Admin\RegisteredUserController::class, 'store']);

    Route::get('admin/login', [Auth\Admin\AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('admin/login', [Auth\Admin\AuthenticatedSessionController::class, 'store']);

    Route::get('admin/forgot-password', [Auth\Admin\PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('admin/forgot-password', [Auth\Admin\PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('admin/reset-password/{token}', [Auth\Admin\NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('admin/reset-password', [Auth\Admin\NewPasswordController::class, 'store'])
        ->name('password.update');
});


Route::middleware('guest')->name('artist.')->group(function () {
    Route::get('artist/register', [Auth\Artist\RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('artist/register', [Auth\Artist\RegisteredUserController::class, 'store']);

    Route::get('artist/login', [Auth\Artist\AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('artist/login', [Auth\Artist\AuthenticatedSessionController::class, 'store']);

    Route::get('artist/forgot-password', [Auth\Artist\PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('artist/forgot-password', [Auth\Artist\PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('artist/reset-password/{token}', [Auth\Artist\NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('artist/reset-password', [Auth\Artist\NewPasswordController::class, 'store'])
        ->name('password.update');
});


Route::middleware('guest')->name('organizer.')->group(function () {
    Route::get('organizer/register', [Auth\Organizer\RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('organizer/register', [Auth\Organizer\RegisteredUserController::class, 'store']);

    Route::get('organizer/login', [Auth\Organizer\AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('organizer/login', [Auth\Organizer\AuthenticatedSessionController::class, 'store']);

    Route::get('organizer/forgot-password', [Auth\Organizer\PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('organizer/forgot-password', [Auth\Organizer\PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('organizer/reset-password/{token}', [Auth\Organizer\NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('organizer/reset-password', [Auth\Organizer\NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

   
  
    
    
});

Route::post('logout', [Auth\User\AuthenticatedSessionController::class, 'destroy'])
->name('user.logout')->middleware('user');

Route::post('admin/logout', [Auth\Admin\AuthenticatedSessionController::class, 'destroy'])
->name('admin.logout')->middleware('admin');

Route::post('artist/logout', [Auth\Artist\AuthenticatedSessionController::class, 'destroy'])
        ->name('artist.logout')->middleware('artist');

Route::post('organizer/logout', [Auth\Organizer\AuthenticatedSessionController::class, 'destroy'])
        ->name('organizer.logout')->middleware('organizer');


