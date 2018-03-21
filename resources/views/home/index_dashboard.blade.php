@extends('layouts.dashlayout')

@section('content')

<h1>Dashboard</h1>

<div class="dashboard-top-message">
    <span>JOIN THE DECENTRALIZED REVOLUTION</span>
    <img src="{{ asset('logo/Brandmark/PNG, SVG/White/Asset 17L.png') }}">
    <div class="first-back"><div></div></div>
    <div class="second-back"></div>
</div>

<br>

<div class="row">

    <div class="col-sm-12 col-xs-12">

        <div class="dashboard-balance-pannel dashboard-custom-pannel">

            <div>
                <number id="balance_eth"></number>
                <span>ETH Balance</span>
            </div>

            <div>
                <number id="balance_tokens"></number>
                <span>AFT Balance</span>
            </div>
            <i class="material-icons">account_balance_wallet</i>
        </div>

    </div>
</div>

<br />

<div class="row">
    <div class="col-sm-4">

        <div class="panel panel-primary" id="charts_env">

            <div class="panel-body">

                <h1>Step 1</h1>
                <span>Deposit ETH</span>
            </div>

        </div>
    </div>
    <div class="col-sm-4">

        <div class="panel panel-primary" id="charts_env">

            <div class="panel-body">

                <h1>Step 2</h1>
                <span>Exchange ETH for AFT</span>
            </div>

        </div>
    </div>
    <div class="col-sm-4">

        <div class="panel panel-primary" id="charts_env">
            
            <div class="panel-body">

                <h1>Step 3</h1>
                <span>Trade and join passive and earning income</span>
            </div>

        </div>
    </div>

</div>

<br />

<div class="row">

    <div class="col-sm-8">

        <div class="panel panel-primary" id="charts_env">

            <div class="panel-body">

                <p>Have the price in USD (would depend on ETH price) in the pesale each round</p>

                <div id="chart3" style="height: 250px"></div>
                
            </div>

        </div>

    </div>

    <div class="col-sm-4">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 style="padding-left: 20px;">Team</h2>
            </div>

            <div class="panel-body">
                
                <p style="color: grey">Referral Link</p>

                <div class="input-group minimal">
                    @if(Auth::user()->affiliate_id)
                        <input type="text" readonly="readonly" class="form-control input-transparent" style=""
                            value="{{url('/register'.'/ref/'.Auth::user()->affiliate_id)}}">
                    @endif
                    <span id="copy_btn" class="input-group-addon"><i class="fa fa-file-text"></i></span>
                </div>

                <div class="row">

                    <div class="col-xs-6">
                        <h1>5</h1>
                        <h4>Members</h4>
                    </div>

                    <div class="col-xs-6">
                        <h1>30</h1>
                        <h4>Bonus AFT</h4>
                    </div>
                    
                </div>

                <br/>

                <div class="user-pannel dashboard-custom-pannel">

                    <p>{{ Auth::user()->name }}</p>
                    <span>{{ Auth::user()->email }}</span>
                    <i class="entypo-users"></i>
                </div>

            </div>
            
        </div>

    </div>
</div>

<script src="{{ asset('js/customization/dashboard/time.js') }}"></script>
@endsection
