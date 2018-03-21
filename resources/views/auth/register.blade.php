@extends('layouts.app')

@section('content')


<div class="login-container">
        
    <div class="login-header login-caret">
        <div class="login-content">
            
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo@2x.png') }}" width="120" alt="" />
            </a>
            
            <p class="description">Create and account to Join the Decentralized Revolution!</p>
            
            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator">
                <h3>43%</h3>
                <span>Registering in...</span>
            </div>
        </div>
        
    </div>
    
    <div class="login-progressbar">
        <div></div>
    </div>
    <div class="login-form">
        <div class="login-content">
            <form role="form" id="form_register"
                method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-user"></i>
                            </div>
                            
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" autocomplete="off"/ required>
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
                            
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" autocomplete="off"/ required>
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
                                    placeholder="Your Password" name="password" autocomplete="off" required>
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
                    <div class="form-group">
                        <label for="password" >Affiliate link</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-link"></i>
                            </div>
                            <input id="referral_link" name="" type="text" readonly="readonly"  class="form-control"
                                    value="{{url('/register/'.'ref')}}">
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                        <div class="captcha">
                            {!! app('captcha')->display() !!}

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="condition_agree" class="" name="terms" value="1">
                                </label>
                                <span>&nbsp; I have read, understood and hereby accept the </br><a href="{{ asset('download/term_policy/term_condition.pdf') }}" style="color: mediumspringgreen;" target="_blank">Terms and Conditions</a>, and the <a href="{{ asset('download/term_policy/privacy_policy.pdf') }}" style="color: mediumspringgreen;" target="_blank">Privacy Policy</a></span>
                            </div>
                        </div>
                        <div class="">
                            @if ($errors->has('terms'))
                             <span class="help-block">
                               <strong>{{ $errors->first('terms') }}</strong>
                             </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="condition_person" class="" name="not_person" value="1">
                                </label>
                                <span>I hereby confirm that I am (a) not a US person: (b) not a Chinese person: (c) not a Singapore persons or (d) not a resident of any other country where it is illegal to participate in ICOs or Token Sales.</span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="referral_link_hidden" name="affiliate_id">
                    @if( ! empty($referred_by))
                        <input type="hidden" name="referred_by" value={{ $referred_by }}>
                    @else
                    <input type="hidden" name="referred_by" value="">
                    @endif
                    <input type="hidden" id="addr" name="addr">
                    <input type="hidden" id="prev_key" name="prev_key">
                    <input type="hidden" id="keystorage" name="keystorage">
                    <input type="hidden" id="secretSeed" name="secretSeed">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block btn-login" onclick="onsubmit_register()">
                            <i class="entypo-right-open-mini"></i>
                            Register
                        </button>
                    </div>
            </form>
            <div class="login-bottom-links">
            
                <a href="{{ route('login') }}" class="link">
                    <i class="entypo-lock"></i>
                    Return to Login Page
                </a>
                
                <br />
                
            </div>
        </div>
    </div>

</div>
@endsection
