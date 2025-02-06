@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">

            <div class="card">
                <div class="card-header">{{ __('Congratulations') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                @if($trxInfo->bk_status=='Completed')
                        <h1 class="text-success">Your Payment and Registration is Successfully Complete.</h1>
                        <a href="{{ url($card_url->url ?? '') }}" class="btn btn-lg btn-success">Download Your Access Card</a>

                        <br>
                        <br>
                    <div class="fb-share-button"  data-href="{{ url($card_url->url) }}"  data-layout="button_count"></div>
                    <br>
                    <img src="{{ url($card_url->url) }}" class="dashboard_banner" class="pt-4 mt-4" alt="">
                @else
                    <h1>Your Registration is Now <br><b class="text-success">Pending for Payment</b>. </h1>


                    @if (auth()->user()->university == "Jahangirnagar University Alumni")
                    <br> <h3>Payable is <b>{{ $trxInfo->amount }}</b> taka or You can add more to support us</h3><br>
                    <form action="{{ route('url-create') }}" method="POST">
                        @csrf
                        <div style="padding: 0 35%; margin-bottom:24px; min-width:360px; font-size:36px">
                            <input class="form-control text-center" style="font-size:36px" type="text" name="amount" value="{{ $trxInfo->amount }}">
                        </div>
                        <input type="hidden" name="merchantInvoiceNumber" value="{{ $trxInfo->id }}">

                        <button type="submit" name="payment" class="btn btn-lg btn-success">CLICK HERE TO PAY</button>
                    </form>
                    @else
                    <br> <h3>Payable is <b>{{ $trxInfo->amount }}</b> taka</h3>
                    <form action="{{ route('url-create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="amount" value="{{ $trxInfo->amount }}">
                        <input type="hidden" name="merchantInvoiceNumber" value="{{ $trxInfo->id }}">

                        <button type="submit" name="payment" class="btn btn-lg btn-success">CLICK HERE TO PAY</button>
                    </form>
                    @endif
                @endif
                <br>


                </div>
            </div>

        </div>

    </div>
</div>
@endsection
