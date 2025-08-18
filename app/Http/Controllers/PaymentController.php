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
    public function verification(Request $request): RedirectResponse
    {
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
            ->get("https://api.flutterwave.com/v3/transactions/$request->transaction_id/verify");
        $transaction = $response->json()['data'];
        if ($transaction['status'] === 'successful' && $transaction['amount'] === 5 && $transaction['currency'] === 'USD') {
            $request->user()->update(['verification_payment' => true]);
            return redirect()->route('user.upload-document');
        } else {
            return back();
        }
    }
}
