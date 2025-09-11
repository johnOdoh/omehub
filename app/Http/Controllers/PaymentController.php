<?php

namespace App\Http\Controllers;

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
        if ($transaction['status'] === 'successful' && $transaction['charged_amount'] == $amount && $transaction['currency'] === 'USD')
            return true;
        else
            return false;
    }

    public function verification(Request $request): RedirectResponse
    {
        $amount = $request->user()->role == 'Shipper' && $request->user()->profile()->account_type == 'Personal' ? 1 : 5;
        if ($this->verifyPayment($amount, $request->transaction_id)) {
            $request->user()->update(['verification_payment' => true]);
            return redirect()->route('user.upload-document');
        } else {
            return back();
        }
    }

    public function advert(Request $request): RedirectResponse
    {
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
        ->get("https://api.flutterwave.com/v3/transactions/$request->transaction_id/verify");
        $transaction = $response->json()['data'];
        $amount = match($transaction['meta']['plan']) {
            'monthly' => 5,
            'biannual' => 28,
            'annual' => 50,
            default => 100
        };
        if ($transaction['status'] === 'successful' && $transaction['charged_amount'] == $amount && $transaction['currency'] === 'USD') {
            $request->user()->update(['bulletin_payment' => true]);
            return redirect()->route('user.bulletin.create', [
                'loc' => $transaction['meta']['loc'],
                'p' => 1
            ]);
        } else {
            return back();
        }
    }
}
