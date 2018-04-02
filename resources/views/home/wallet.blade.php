@extends('layouts.dashboard')
@section('title', 'Admin Wallet')
@section('content')
<h1>Wallet</h1>

<div class="wallet-top-message">
</div>

<br />

<div>
<div class="row">

    <div class="col-sm-12 col-xs-12">

        <div class="wallet-balance-pannel wallet-custom-pannel wallet-total-trm">

            <div>
                <span>Total AFT</span>
                <br />
                <number id="balance_tokens"></number>
            </div>
            <div class="icon"><img src="{{ asset('images/trm_icon_black.png') }}" /></div>
        </div>

    </div>

</div>

<br />
<br />
<div class="row">
    <div class="col-sm-6 col-xs-12">
        <h2>Your ETH and AFT Wallet Address</h2>
        <br />
        <br />
        <div style="width: 303px; margin: auto;">
            <h4>Public Address</h4>
            <input id="trm_addr" type="text" readonly="readonly" class="form-control input-transparent" style="">
        </div>
        <br />
        <br />
    </div>
    <div class="col-sm-6 col-xs-12">
            <img id="ethqr" src="https://chart.googleapis.com/chart?chs=180x180&amp;cht=qr&amp;chl=0xcefd33bf82b603d98fef874d149f5c2c89bbbfaa&amp;choe=UTF-8&amp;chld=L|0" width="180px" height="180px" style="display: block; margin: auto;" />
    </div>
</div>

<br />
<br />

</div>
{{--  <div class="row">
    <div class="col-sm-12 col-xs-12">
        <iframe src="http://192.168.0.116:9000/wallet" style="width:100%; height:1500px; border:none" ></iframe>
    </div>
</div>          --}}

@endsection
@section('styles')
	
@endsection
@section('scripts')
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('web3/web3.min.js') }}"></script>
    <script src="{{ asset('web3/lightwallet.min.js') }}"></script>
    <script src="{{ asset('web3/loading_wallet.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#send_token').submit(function(e){
                e.preventDefault();          
                var toAddr = $('#to-address').val();
                var m = $('#amount').val();
                
                if(!toAddr || !m)
                    return;

                $.post(
                    "{{route('send-token')}}",
                    $("#send_token").serialize(),
                    function(response){                        
                        console.log(response);
                        if(response.success){
                            alert('succesfully sent');
                            console.log(response.txHash)
                        }
                        
                    },
                    'json'
                ).fail(function(response){                    
                    console.log('send token failed');
                    alert(response.message);
                })
            });
            setInterval(rebalance, 10000);
        });
    </script>
@endsection