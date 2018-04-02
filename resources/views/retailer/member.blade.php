@extends('layouts.dashboard')
@section('title', 'Retailer Memeber Registration')
@section('content')
<h2>Retailer Member Registration</h2>
<br />
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">				
            <div class="panel-heading">
                <div class="panel-title">
                    Please type information about retailer.
                </div>
                
                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                </div>
            </div>
            
            <div class="panel-body">
                
                <div class="col-xs-12 col-md-offset-4 col-md-4">
                    <form role="form" id="form_register" class="form-horizontal validate" action="{{route('RetailerMembers.register')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label">Select a retailer.</label>

                            <select id="select2_retailer" name="select2_retailer" class="select2" data-allow-clear="true" data-placeholder="Select one retailer...">
                                <option></option>
                                <optgroup label="South Africa">
                                    @foreach ($retailers as $retailer)
                                <option value="{{$retailer->id}}" data-logo-attribute="{{ asset('storage/'.$retailer->logo_file) }}">{{$retailer->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>

                        </div>
                            
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-user"></i>
                                    </div>
                                    
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Manager Name" value="{{ old('name') }}" autocomplete="off"/ required>
                                </div>
                                @if ($errors->has('name'))
                                    <div>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    </div>                                
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-mail"></i>
                                    </div>
                                    
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off"/ required>
                                </div>
                                @if ($errors->has('email'))
                                    <div>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    </div>                                
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-key"></i>
                                    </div>
                                    <input id="password" type="password" class="form-control"
                                            placeholder="Password" name="password" autocomplete="off" required>
                                </div>
                                @if ($errors->has('password'))
                                <div>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-keyboard"></i>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control"
                                            placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
                                </div>
                            </div>

                            <input type="hidden" id="addr" name="addr">
                            <input type="hidden" id="prev_key" name="prev_key">
                            <input type="hidden" id="keystorage" name="keystorage">
                            <input type="hidden" id="secretSeed" name="secretSeed">

                        <div class="form-group">
                            <div class="col-md-6 col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-lg btn-success btn-block" onclick="onsubmit_register()">
                                    <i class="entypo-right-open-mini"></i>
                                    register
                                </button>                                                        
                            </div>                        
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
    
    </div>
</div>
	
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}">	
@endsection
@section('scripts')
    <script src="{{ asset('js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>

    <script>
        $(function(){

            var $sel_retailer = $('#select2_retailer'),
            opts = {
                allowClear: attrDefault($sel_retailer, 'allowClear', false)
            };

            $sel_retailer.select2(opts);
            $sel_retailer.addClass('visible');   
        });     
    </script>

    <!-- web3 -->
    <script src="{{ asset('web3/web3.min.js') }}"></script>
    <script src="{{ asset('web3/lightwallet.min.js') }}"></script>
    <script src="{{ asset('js/customization/register_eth_key.js') }}"></script>    
@endsection
