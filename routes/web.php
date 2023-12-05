<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TermsAndPoliticsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['env.auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //RESERVATION MAIL
    Route::post('/send-mail', [ReservationController::class, 'sendMail'])->name('send.mail');

    // EVENTS
    Route::get('/event/{event}', [EventsController::class, 'showEvent'])->name('event.show');

    //TERMS
    Route::get('/policy/dupa', [TermsAndPoliticsController::class, 'getPlPrivacyPolicyPdf'])->name('policy.show');
    Route::get('/policy/pl', [TermsAndPoliticsController::class, 'getPlPrivacyPolicyPdf'])->name('pl.policy.show');
    Route::get('/policy/eng', [TermsAndPoliticsController::class, 'getEngPrivacyPolicyPdf'])->name('eng.policy.show');

    Route::get('/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('locale');
});
