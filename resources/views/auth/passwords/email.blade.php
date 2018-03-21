@extends('layouts.app')

@section('content')
{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

<div class="login-container">
        
        <div class="login-header login-caret">
            <div class="login-content">
                
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('images/logo@2x.png') }}" width="120" alt="" />
                </a>
                
                <p class="description">Enter your email, and we will send the reset link.</p>
                
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
                <form role="form" id="form_login"
                    method="POST" action="{{ route('password.email') }}">
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-login">
                                <i class="entypo-right-open-mini"></i>
                                Complete Registration
                            </button>
                        </div>
                </form>
                <div class="login-bottom-links">
				
                    <a href="{{ route('login') }}" class="link">
                        <i class="entypo-lock"></i>
                        Return to Login Page
                    </a>
                    
                    <br />
                    
                    <a href="#">Africoin</a>  - <a href="#">Privacy Policy</a>
                    
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
