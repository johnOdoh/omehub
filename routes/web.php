<?php

use App\Livewire\Common\Blog\CreatePost;
use App\Livewire\Common\Blog\PostList;
use App\Livewire\Common\Blog\ViewPost;
use App\Livewire\Shipper\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Shipper\Profile\Main;
use App\Livewire\Logistics\Quotes\Requests;
use App\Livewire\Logistics\Quotes\QuotesSent;
use App\Livewire\Insurance\Quotes\QuotesSent as InsuranceQuotesSent;
use App\Livewire\Shipper\Quotes\RequestQuote;
use App\Livewire\Shipper\Quotes\QuoteRequests;
use App\Livewire\Logistics\Dashboard as LogisticsDashboard;
use App\Livewire\Insurance\Dashboard as InsuranceDashboard;
use App\Livewire\Insurance\Quotes\Requests as InsuranceRequests;
use App\Livewire\Logistics\Profile\Main as LogisticsProfileMain;
use App\Livewire\Insurance\Profile\Main as InsuranceProfileMain;
use App\Livewire\Shipper\Shipments\ShipmentList;

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
    Route::get('shipper/shipments', ShipmentList::class)->name('shipper.shipments');

    Route::get('logistics/dashboard', LogisticsDashboard::class)->name('logistics.dashboard');
    Route::get('logistics/profile', LogisticsProfileMain::class)->name('logistics.profile');
    Route::get('logistics/quote-requests', Requests::class)->name('logistics.quote-requests');
    Route::get('logistics/quotes-sent', QuotesSent::class)->name('logistics.quotes-sent');

    Route::get('insurance/dashboard', InsuranceDashboard::class)->name('insurance.dashboard');
    Route::get('insurance/profile', InsuranceProfileMain::class)->name('insurance.profile');
    Route::get('insurance/quote-requests', InsuranceRequests::class)->name('insurance.quote-requests');
    Route::get('insurance/quotes-sent', InsuranceQuotesSent::class)->name('insurance.quotes-sent');

    Route::get('user/blog/create', CreatePost::class)->name('user.blog.create');
    Route::get('user/blog/{post}/edit', CreatePost::class)->name('user.blog.edit');
    Route::get('user/blog/posts', PostList::class)->name('user.blog.posts');
    Route::get('user/blog/{post}', ViewPost::class)->name('user.blog.post');
});

require __DIR__.'/auth.php';
