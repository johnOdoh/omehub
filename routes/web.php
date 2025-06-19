<?php

use App\Livewire\Logistics\Quotes\QuotesSent;
use App\Livewire\Shipper\Dashboard;
use App\Livewire\Logistics\Dashboard as LogisticsDashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Logistics\Profile\Main as LogisticsProfileMain;
use App\Livewire\Shipper\Profile\Main;
use App\Livewire\Logistics\Quotes\Requests;
use App\Livewire\Shipper\Quotes\QuoteRequests;
use App\Livewire\Shipper\Quotes\RequestQuote;

Route::get('/', function () {
    return view('public.index');
})->name('home');
Route::get('/about', function () {
    return view('public.about');
})->name('about');
Route::get('/services', function () {
    return view('public.services');
})->name('services');
Route::get('/services/{service}', function ($service) {
    return view("public.services.$service");
})->name('service');
Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('shipper/dashboard', Dashboard::class)->name('shipper.dashboard');
    Route::get('shipper/profile', Main::class)->name('shipper.profile');
    Route::get('shipper/get-quotes',RequestQuote::class)->name('shipper.get-quotes');
    Route::get('shipper/quote-requests', QuoteRequests::class)->name('shipper.quote-requests');

    Route::get('logistics/dashboard', LogisticsDashboard::class)->name('logistics.dashboard');
    Route::get('logistics/profile', LogisticsProfileMain::class)->name('logistics.profile');
    Route::get('logistics/quote-requests', Requests::class)->name('logistics.quote-requests');
    Route::get('logistics/quotes-sent', QuotesSent::class)->name('logistics.quotes-sent');
});

require __DIR__.'/auth.php';
