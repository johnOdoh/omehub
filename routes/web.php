<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PublicController;
use App\Livewire\Admin\Admins\AdminList;
use App\Livewire\Admin\Bulletin;
use App\Livewire\Admin\Users\UserInfo;
use App\Livewire\Admin\Users\UsersList;
use App\Livewire\Common\Blog\CreatePost;
use App\Livewire\Common\Blog\PostList;
use App\Livewire\Common\Blog\ViewPost;
use App\Livewire\Common\Dispute\CreateDispute;
use App\Livewire\Common\Dispute\DisputeList;
use App\Livewire\Common\Dispute\LegalAdvice;
use App\Livewire\Common\Documents\CommercialInvoice;
use App\Livewire\Common\Documents\PackingList;
use App\Livewire\Common\Financing\Request as FinancingRequest;
use App\Livewire\Common\Financing\RequestList;
use App\Livewire\Common\Profile\DocumentUpload;
use App\Livewire\Common\Profile\Main;
use App\Livewire\Common\Support\CreateTicket;
use App\Livewire\Common\Support\Tickets;
use App\Livewire\Common\Sustainability\Invoices;
use App\Livewire\Finance\Dashboard as FinanceDashboard;
use App\Livewire\Finance\Requests as FinanceRequests;
use App\Livewire\Logistics\Dashboard as LogisticsDashboard;
use App\Livewire\Logistics\Quotes\QuotesSent;
use App\Livewire\Logistics\Quotes\Requests;
use App\Livewire\Logistics\Shipments\Shipments;
use App\Livewire\Shipper\Dashboard;
use App\Livewire\Shipper\Quotes\QuoteRequests;
use App\Livewire\Shipper\Quotes\RequestQuote;
use App\Livewire\Shipper\Shipments\ShipmentList;
use App\Livewire\Sustainability\Dashboard as SustainabilityDashboard;
use App\Livewire\Sustainability\Offsets;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', [PublicController::class, 'index'])->name('home');
// Route::get('/about', [PublicController::class, 'about'])->name('about');
// Route::get('/stakeholders', [PublicController::class, 'stakeholders'])->name('stakeholders');
// Route::get('/services/{service}', [PublicController::class, 'service'])->name('service');
// Route::get('/blog', [PublicController::class, 'bulletin'])->name('bulletin');
// Route::get('/bulletin/search', [PublicController::class, 'bulletinSearch'])->name('search');
// Route::get('/bulletin/{post}', [PublicController::class, 'bulletinSingle'])->name('bulletin.single');
// Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicController::class, 'contactUs'])->name('contact-us');
// Route::get('/our-terms', [PublicController::class, 'terms'])->name('terms');
// Route::get('/privacy-policy', [PublicController::class, 'privacy'])->name('privacy');
// Route::get('/advert-and-blog-policy', [PublicController::class, 'advertPolicy'])->name('advert-policy');

Route::get('/', function () {
    return view('test.index');
})->name('public.index');

Route::get('/about', function () {
    return view('test.about');
})->name('public.about');

Route::get('/for-carriers', function () {
    return view('test.for-carriers');
})->name('public.for-carriers');

Route::get('/for-shippers', function () {
    return view('test.for-shippers');
})->name('public.for-shippers');

Route::get('/contact', function () {
    return view('test.contact');
})->name('public.contact');

Route::get('/platform', function () {
    return view('test.platform');
})->name('public.platform');

Route::get('/solutions', function () {
    return view('test.solutions');
})->name('public.solutions');

Route::get('/quotes', function () {
    return view('test.quote');
})->name('public.quote');

Route::get('/tracking', function (Request $request) {
    $code = $request->query('track');
    $shipment = $code ? Shipment::where('tracking_number', $code)->first() : null;;
    return view('test.tracking', compact('code', 'shipment'));
})->name('public.tracking');

Route::get('/blogs', function () {
    $posts = App\Models\Post::latest()->paginate(9);
    $ads   = App\Models\Ad::where('status', 'approved')->latest()->get();
    return view('test.blogs', compact('posts', 'ads'));
})->name('public.blogs');

Route::get('/blog/{slug}', function ($slug) {
    $post  = App\Models\Post::where('slug', $slug)->firstOrFail();
    $posts = App\Models\Post::whereNot('id', $post->id)->latest()->limit(3)->get();
    $ads   = App\Models\Ad::where('status', 'approved')->latest()->get();
    return view('test.blog', compact('post', 'posts', 'ads'));
})->name('public.blog');

Route::get('/terms', function () {
    return view('test.terms');
})->name('public.terms');

Route::get('/privacy', function () {
    return view('test.privacy');
})->name('public.privacy');

Route::get('/advertising', function () {
    return view('test.advert-policy');
})->name('public.advertising');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('admin/dashboard', \App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('admin/profile', \App\Livewire\Admin\Profile\Main::class)->name('admin.profile');
    Route::get('admin/users/create', \App\Livewire\Admin\Users\Create::class)->name('admin.create-user');
    Route::get('admin/users', UsersList::class)->name('admin.users');
    Route::get('admin/users/{user}', UserInfo::class)->name('admin.user');
    Route::get('admin/admins/create', \App\Livewire\Admin\Admins\Create::class)->name('admin.create-admin');
    Route::get('admin/admins', AdminList::class)->name('admin.admins');
    Route::get('admin/shipments', \App\Livewire\Admin\Shipments\ShipmentList::class)->name('admin.shipments');
    Route::get('admin/disputes', DisputeList::class)->name('admin.disputes');
    Route::get('admin/tickets', Tickets::class)->name('admin.tickets');
    Route::get('admin/bulletin', Bulletin::class)->name('admin.bulletin');
    // Route::middleware(['role:admin'])->group(function () {
    // });

    Route::get('shipper/dashboard', Dashboard::class)->name('shipper.dashboard');
    Route::get('shipper/get-quotes', RequestQuote::class)->name('shipper.get-quotes');
    Route::get('shipper/quote-requests', QuoteRequests::class)->name('shipper.quote-requests');
    Route::get('shipper/shipments', ShipmentList::class)->name('shipper.shipments');

    Route::get('logistics/dashboard', LogisticsDashboard::class)->name('logistics.dashboard');
    Route::get('logistics/quote-requests', Requests::class)->name('logistics.quote-requests');
    Route::get('logistics/quotes-sent', QuotesSent::class)->name('logistics.quotes-sent');
    Route::get('logistics/shipments', Shipments::class)->name('logistics.shipments');

    // Route::get('insurance/dashboard', InsuranceDashboard::class)->name('insurance.dashboard');
    // Route::get('insurance/quote-requests', InsuranceRequests::class)->name('insurance.quote-requests');
    // Route::get('insurance/quotes-sent', InsuranceQuotesSent::class)->name('insurance.quotes-sent');
    // Route::get('insurance/shipments', \App\Livewire\Insurance\Shipments\ShipmentList::class)->name('insurance.shipments');

    Route::get('finance/dashboard', FinanceDashboard::class)->name('finance.dashboard');
    Route::get('finance/requests', FinanceRequests::class)->name('finance.requests');

    Route::get('sustainability/dashboard', SustainabilityDashboard::class)->name('sustainability.dashboard');
    Route::get('sustainability/offsets', Offsets::class)->name('sustainability.offsets');

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

    Route::get('user/financing/request', FinancingRequest::class)->name('user.financing.request');
    Route::get('user/financing/requests', RequestList::class)->name('user.financing.list');

    Route::get('user/offsets/invoices', Invoices::class)->name('user.offsets.invoices');

    Route::get('user/ticket/create', CreateTicket::class)->name('user.ticket.create');
    Route::get('user/ticket/list', Tickets::class)->name('user.ticket.list');

    Route::get('user/document/commercial', CommercialInvoice::class)->name('document.commercial');
    Route::get('user/document/packing-list', PackingList::class)->name('document.packing-list');

    Route::get('payment/verification', [PaymentController::class, 'verification'])->name('payment.verification');
    Route::get('payment/advert', [PaymentController::class, 'advert'])->name('payment.advert');
    Route::get('payment/document', [PaymentController::class, 'document'])->name('payment.document');
});

require __DIR__ . '/auth.php';