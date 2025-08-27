<?php

use App\Livewire\Shipper\Dashboard;
use App\Livewire\Common\Profile\Main;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Users\UserInfo;
use App\Livewire\Common\Blog\PostList;
use App\Livewire\Common\Blog\ViewPost;
use App\Livewire\Admin\Users\UsersList;
use App\Livewire\Admin\Admins\AdminList;
use App\Livewire\Common\Blog\CreatePost;
use App\Livewire\Common\Support\Tickets;
use App\Http\Controllers\PublicController;
use App\Livewire\Common\Financing\Request;
use App\Http\Controllers\PaymentController;
use App\Livewire\Logistics\Quotes\Requests;
use App\Livewire\Common\Dispute\DisputeList;
use App\Livewire\Common\Dispute\LegalAdvice;
use App\Livewire\Common\Support\CreateTicket;
use App\Livewire\Logistics\Quotes\QuotesSent;
use App\Livewire\Shipper\Quotes\RequestQuote;
use App\Livewire\Common\Dispute\CreateDispute;
use App\Livewire\Common\Financing\RequestList;
use App\Livewire\Shipper\Quotes\QuoteRequests;
use App\Livewire\Common\Profile\DocumentUpload;
use App\Livewire\Logistics\Shipments\Shipments;
use App\Livewire\Shipper\Shipments\ShipmentList;
use App\Livewire\Insurance\Dashboard as InsuranceDashboard;
use App\Livewire\Logistics\Dashboard as LogisticsDashboard;
use App\Livewire\Insurance\Quotes\Requests as InsuranceRequests;
use App\Livewire\Insurance\Quotes\QuotesSent as InsuranceQuotesSent;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/stakeholders', [PublicController::class, 'stakeholders'])->name('stakeholders');
Route::get('/services/{service}', [PublicController::class, 'service'])->name('service');
Route::get('/blog', [PublicController::class, 'bulletin'])->name('bulletin');
Route::get('/bulletin/search', [PublicController::class, 'bulletinSearch'])->name('search');
Route::get('/bulletin/{post}', [PublicController::class, 'bulletinSingle'])->name('bulletin.single');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/our-terms', [PublicController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [PublicController::class, 'privacy'])->name('privacy');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', \App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('admin/profile', \App\Livewire\Admin\Profile\Main::class)->name('admin.profile');
    Route::get('admin/users', UsersList::class)->name('admin.users');
    Route::get('admin/users/{user}', UserInfo::class)->name('admin.user');
    Route::get('admin/admins/create', \App\Livewire\Admin\Admins\Create::class)->name('admin.create-admin');
    Route::get('admin/admins', AdminList::class)->name('admin.admins');
    Route::get('admin/shipments', \App\Livewire\Admin\Shipments\ShipmentList::class)->name('admin.shipments');
    Route::get('admin/disputes', DisputeList::class)->name('admin.disputes');
    Route::get('admin/tickets', Tickets::class)->name('admin.tickets');
    // Route::middleware(['role:admin'])->group(function () {
    // });

    Route::get('shipper/dashboard', Dashboard::class)->name('shipper.dashboard');
    Route::get('shipper/get-quotes',RequestQuote::class)->name('shipper.get-quotes');
    Route::get('shipper/quote-requests', QuoteRequests::class)->name('shipper.quote-requests');
    Route::get('shipper/shipments', ShipmentList::class)->name('shipper.shipments');

    Route::get('logistics/dashboard', LogisticsDashboard::class)->name('logistics.dashboard');
    Route::get('logistics/quote-requests', Requests::class)->name('logistics.quote-requests');
    Route::get('logistics/quotes-sent', QuotesSent::class)->name('logistics.quotes-sent');
    Route::get('logistics/shipments', Shipments::class)->name('logistics.shipments');

    Route::get('insurance/dashboard', InsuranceDashboard::class)->name('insurance.dashboard');
    Route::get('insurance/quote-requests', InsuranceRequests::class)->name('insurance.quote-requests');
    Route::get('insurance/quotes-sent', InsuranceQuotesSent::class)->name('insurance.quotes-sent');
    Route::get('insurance/shipments', \App\Livewire\Insurance\Shipments\ShipmentList::class)->name('insurance.shipments');

    Route::get('user/profile', Main::class)->name('user.profile');
    Route::get('user/profile/upload-document', DocumentUpload::class)->name('user.upload-document');

    Route::get('user/bulletin/create', CreatePost::class)->name('user.bulletin.create');
    Route::get('user/bulletin/{post}/edit', CreatePost::class)->name('user.bulletin.edit');
    Route::get('user/bulletin/posts', PostList::class)->name('user.bulletin.list');
    Route::get('user/bulletin/{post}', ViewPost::class)->name('user.bulletin.post');

    Route::get('user/disputes/create', CreateDispute::class)->name('user.dispute.create');
    Route::get('user/disputes/list', DisputeList::class)->name('user.dispute.list');
    Route::get('user/disputes/against', DisputeList::class)->name('user.dispute.against');
    Route::get('user/legal/advice', LegalAdvice::class)->name('user.legal.advice');

    Route::get('user/financing/request', Request::class)->name('user.financing.request');
    Route::get('user/financing/requests', RequestList::class)->name('user.financing.list');

    Route::get('user/ticket/create', CreateTicket::class)->name('user.ticket.create');
    Route::get('user/ticket/list', Tickets::class)->name('user.ticket.list');

    Route::get('payment/verification', [PaymentController::class, 'verification'])->name('payment.verification');
    Route::get('payment/advert', [PaymentController::class, 'advert'])->name('payment.advert');
});

require __DIR__.'/auth.php';
