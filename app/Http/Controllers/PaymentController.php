<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PaymentController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function PaypalPaymentLink()
    {
        $provider = new PaypalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $data = [
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.payment.success'),
                "cancel_url" => route('paypal.payment.cancel')
            ],
            "purchase_units" =>
                [
                    [
                        "amount" =>
                            [
                                "currency_code" => "USD",
                                "value" => request()->amount
                            ]
                    ]
                ]
        ];
        $order = $provider->createOrder($data);
        $url = collect($order['links'])->where('rel', 'approve')->first()['href'];
        return redirect()->away($url);
    }
    public function PaymentSuccess(){
        dd(request()->all());
    }
    public function PaymentCancel(){
        return view('cancel');
    }
}
