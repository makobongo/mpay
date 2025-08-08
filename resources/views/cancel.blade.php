@extends('payment-status.app')
@section('body')
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F54927; margin:0 auto;">
            <i class="checkmark">✖</i>
        </div>
        <h1>Cancelled</h1>
        <p>Payment unsuccessful!</p>
        <hr>
        <a href="{{ route('paypal.payment.index') }}" target="_self">
            <button style="background: #F54927;border:1px solid black;border-radius:10px;font-weight:bolder;cursor: pointer;">Back to home
                page</button>
        </a>
    </div>
@endsection
