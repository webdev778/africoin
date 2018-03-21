@extends('layouts.dashlayout')

@section('content')
<h1>Token Sale</h1>

<div class="tokensale-top-message">
</div>

<br />

<div class="row">
    <div class="col-sm-6 col-xs-12">

        <div class="tokensale-time-pannel tokensale-custom-pannel">
            <p>Countdown Until Presale</p>
            <div id="round_time">
                {{-- <div>
                    <number>03</number>
                    <span>Days</span>
                </div>
                <div>
                    <number>02</number>
                    <span>Hours</span>
                </div>
                <div>
                    <number>36</number>
                    <span>Minutes</span>
                </div> --}}
            </div>
            <i class="entypo-clock"></i>
        </div>

    </div>

    <div class="col-sm-3 col-xs-12">

        <div class="tokensale-balance-pannel tokensale-custom-pannel tokensale-total-eth">
            <div>
                <span>Total ETH</span>
                <br />
                <number>2.0</number>
            </div>
            <div class="icon"><img src="{{ asset('images/ether_black.png') }}" /></div>
        </div>

    </div>

    <div class="col-sm-3 col-xs-12">

        <div class="tokensale-balance-pannel tokensale-custom-pannel tokensale-total-trm">

            <div>
                <span>Total AFT</span>
                <br />
                <number>2.0</number>
            </div>
            <div class="icon"><img src="{{ asset('images/trm_icon_black.png') }}" /></div>
        </div>

    </div>
</div>

<br />
<br />

<div class="row">
    
        <div class="col-sm-12 col-xs-12">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Round</th>
                        <th>Date</th>
                        <th>Price (AFT/TEH)</th>
                        <th>Available AFT</th>
                        <th>Sold AFT</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Presale</td>
                        <td>March 1st</td>
                        <td>4000</td>
                        <td>1,000,000</td>
                        <td>0</td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>March 10th</td>
                        <td>3500</td>
                        <td>3,5000,000</td>
                        <td>0</td>
                    </tr>
                
                    <tr>
                        <td>2</td>
                        <td>March 17th</td>
                        <td>3000</td>
                        <td>4,000,000</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>March 23rd</td>
                        <td>2500</td>
                        <td>4,500,000</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>April 1st</td>
                        <td>2000</td>
                        <td>5,000,000</td>
                        <td>0</td>
                    </tr>

                </tbody>
            </table>
            
        </div>

</div>
<br />

<div class="row">
    <div class="col-sm-12 col-xs-12">
        <h2>Token Sale Transactions</h2>
        <table class="table table-bordered datatable" id="token_transaction">
            <thead>
                <tr>
                    <th data-hide="phone">Transaction ID</th>
                    <th>Amount</th>
                    <th data-hide="phone">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>Das0df87a0sdf89agf0a77890987gsdf</td>
                    <td>300</td>
                    <td>07/03/2018</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<script src="{{ asset('js/customization/dashboard/time.js') }}"></script>
@endsection
