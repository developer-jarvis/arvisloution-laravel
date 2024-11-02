<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', function () {
    return view('about-us');
})->name('about');

route::get('/mission-vission', function () {
    return view('mission-vission');
})->name('mission-vission');

route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

route::get('/website-design', function () {
    return view('website-design');
})->name('website-design');

route::get('/software-development', function () {
    return view('software-development');
})->name('software-development');

route::get('/digital-marketing', function () {
    return view('digital-marketing');
})->name('digital-marketing');

route::get('/search-engine-optimization', function () {
    return view('search-engine-optimization');
})->name('search-engine-optimization');

route::get('/paid-ad-service', function () {
    return view('paid-ad-service');
})->name('paid-ad-service');

route::get('/social-media-marketing', function () {
    return view('social-media-marketing');
})->name('social-media-marketing');

route::get('/websecurity', function () {
    return view('websecurity');
})->name('websecurity');

route::get('/graphic-design', function () {
    return view('graphic-design');
})->name('graphic-design');

route::get('/mobile-app', function () {
    return view('mobile-app');
})->name('mobile-app');

route::get('/buisness-promotion', function () {
    return view('buisness-promotion');
})->name('buisness-promotion');

route::get('website-designs', function () {
    return view('website-designs');
})->name('website-designs');

route::get('/google-ads', function () {
    return view('google-ads');
})->name('google-ads');

route::get('/dashboard', function () {
    return view('dashboard/category');
})->name('dashboard/category');

route::get('/google-advertisement', function () {
    return view('google-advertisement');
})->name('google-advertisement');

route::get('/facebook-advertisement', function () {
    return view('facebook-advertisement');
})->name('facebook-advertisement');

route::get('/instagram-ads', function () {
    return view('instagram-ads');
})->name('instagram-ads');

route::get('/youtube-ads', function () {
    return view('youtube-ads');
})->name('youtube-ads');

route::get('/seo-services', function () {
    return view('seo-services');
})->name('seo-services');

Route::get('/software-developments', function () {
    return view('software-developments');
})->name('software-developments');

Route::get('/buisness-promotions', function () {
    return view('buisness-promotions');
})->name('buisness-promotions');

Route::get('/web-security', function () {
    return view('web-security');
})->name('web-security');

Route::get('/graphic-designs', function () {
    return view('graphic-designs');
})->name('graphic-designs');

Route::get('/on-demand-services', function () {
    return view('on-demand-services');
})->name('on-demand-services');

Route::get('/domain-hosting-services', function () {
    return view('domain-hosting-services');
})->name('domain-hosting-services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route to view the email (optional, for testing purposes)
Route::get('/emails.mail', function () {
    return view('emails.mail');
})->name('emails.mail');
// =====================================================================================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
