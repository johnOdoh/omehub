<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    /**
     * Handle the payment verification.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    private function verifyPayment($amount, $transaction_id): bool
    {
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
            ->get("https://api.flutterwave.com/v3/transactions/$transaction_id/verify");
        $transaction = $response->json()['data'];
        if ($transaction['status'] === 'successful' && $transaction['charged_amount'] >= $amount && $transaction['currency'] === 'USD')
            return true;
        else
            return false;
    }

    public function verification(Request $request): RedirectResponse
    {
        $amount = $request->user()->role == 'Shipper' && $request->user()->profile->account_type == 'Personal' ? 1.00 : 5.00;
        if ($this->verifyPayment($amount, $request->transaction_id)) {
            $request->user()->update(['verification_payment' => true]);
            return redirect()->route('user.upload-document');
        } else {
            return back()->with('error', 'Payment verification failed. Please try again. If you have been charged, please contact support.');
        }
    }

    public function advert(Request $request): RedirectResponse
    {
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
        ->get("https://api.flutterwave.com/v3/transactions/$request->transaction_id/verify");
        $transaction = $response->json()['data'];
        $data = match($transaction['meta']['plan']) {
            'monthly' => ['amount' => 5, 'ends' => Carbon::now()->addMonth()],
            'biannual' => ['amount' => 28, 'ends' => Carbon::now()->addMonths(6)],
            'annual' => ['amount' => 50, 'ends' => Carbon::now()->addYear()],
            default => ['amount' => 100, 'ends' => Carbon::now()->addYear()]
        };
        if ($transaction['status'] === 'successful' && $transaction['charged_amount'] >= $data['amount'] && $transaction['currency'] === 'USD') {
            $request->user()->update([
                'bulletin_payment' => true,
                'bulletin_payment_ends' => $data['ends']
            ]);
            return redirect()->route('user.bulletin.create', [
                'loc' => $transaction['meta']['loc'],
                'p' => 1
            ]);
        } else {
            return back()->with('error', 'Payment verification failed. Please try again. If you have been charged, please contact support.');
        }
    }

    public function document(Request $request): RedirectResponse
    {
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
        ->get("https://api.flutterwave.com/v3/transactions/$request->transaction_id/verify");
        $transaction = $response->json()['data'];
        $data = match($transaction['meta']['plan']) {
            'monthly' => ['amount' => 5, 'ends' => Carbon::now()->addMonth()],
            'biannual' => ['amount' => 28, 'ends' => Carbon::now()->addMonths(6)],
            'annual' => ['amount' => 50, 'ends' => Carbon::now()->addYear()],
            default => ['amount' => 100, 'ends' => Carbon::now()->addYear()]
        };
        if ($transaction['status'] === 'successful' && $transaction['charged_amount'] >= $data['amount'] && $transaction['currency'] === 'USD') {
            $request->user()->update([
                'document_generation_payment_ends' => $data['ends'],
                'document_generation_payment' => true
            ]);
            if ($transaction['meta']['loc'] == 'commercial') {
                return redirect()->route('document.commercial');
            } else {
                return redirect()->route('document.packing-list');
            }
        } else {
            return back()->with('error', 'Payment verification failed. Please try again. If you have been charged, please contact support.');
        }
    }
}
