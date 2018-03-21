@extends('layouts.app')

@section('content')
<div class="login-container">
        
        <div class="login-header login-caret">
            <div class="login-content">
                
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('images/logo@2x.png') }}" width="120" alt="" />
                </a>
                
                <p class="description">Dear user, log in to access the admin area!</p>
                
                <!-- progress bar indicator -->
                <div class="login-progressbar-indicator">
                    <h3>43%</h3>
                    <span>logging in...</span>
                </div>
            </div>
            
        </div>
        
        <div class="login-progressbar">
            <div></div>
        </div>
        <div class="login-form">
            <div class="login-content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                <form role="form" id="form_login"
                    method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
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
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Login In
                            </button>
                        </div>
                </form>
                <div class="login-bottom-links">
                        
                    <a href="{{ route('password.request') }}" class="link">Forgot your password?</a>
                    
                    <br />
                    <a href="{{ route('register') }}" class="link">Create a new account</a>

                    <br />                   
                    
                    <a href="#">Africoin</a>  - <a href="#">Privacy Policy</a>
                    
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

