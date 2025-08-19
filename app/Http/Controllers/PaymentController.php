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
    private function verifyPayment($amount, $transaction_id)
    {
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
            ->get("https://api.flutterwave.com/v3/transactions/$transaction_id/verify");
        $transaction = $response->json()['data'];
        if ($transaction['status'] === 'successful' && $transaction['amount'] === $amount && $transaction['currency'] === 'USD') {
            return true;
        } else {
            return false;
        }
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
        if ($this->verifyPayment(10, $request->transaction_id)) {
            $request->user()->update(['blog_payment' => true]);
            return redirect()->route('user.blog.create');
        } else {
            return back();
        }
    }
}
