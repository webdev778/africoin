@extends('layouts.app')

@section('content')

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="{{ url('/') }}" class="logo">
				<img src="{{ asset('images/logo@2x.png') }}" width="120" alt="" />
			</a>
			
			<p class="description">Create an account, it's free and takes few moments only!</p>
			
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
			
			<form method="post" role="form" id="form_register">
				{{ csrf_field() }}
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>The Company informations has been successfully registered.</h3>
					<p>Please click <a href="{{route('home')}}" class="link" style="color:blue">here</a> to go dashboard<span id="timer">(10)</span></p>
				</div>
				
				<div class="form-steps">
					
					<div class="step current" id="step-1">
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="company-name" id="company-name" placeholder="Company Legal Name" autocomplete="off" />
							</div>
						</div>
						
						{{--  <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
										<img src="http://placehold.it/200x150"  alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Select image</span>
											<span class="fileinput-exists">Change</span>
											<input type="file" name="company-logo" accept="image/*">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div>
							</div>
						</div>  --}}
									
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="registration-no" id="registration-no" placeholder="Company Registration No" autocomplete="off" />
							</div>
						</div>							

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" />
							</div>
						</div>
												
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="street-address" id="street-address" placeholder="Street Address" autocomplete="off" />
							</div>
						</div>		
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="street-code" id="street-code" placeholder="Street Code" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="postal-address" id="postal-address" placeholder="Postal Address" autocomplete="off" />
							</div>
						</div>						
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="postal-code" id="postal-code" placeholder="Postal Code" autocomplete="off" />
							</div>
						</div>		

						
						<div class="form-group" style="display: none">
							<button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Next Step
							</button>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Complete Registration
							</button>
						</div>

						<div class="form-group" style="display:none">
							Step 1 of 2
						</div>
					
					</div>
					
					<div class="step" id="step-2">
										
						{{--  <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user-add"></i>
								</div>
								
								<input type="text" class="form-control" name="username" id="username" placeholder="Username" data-mask="[a-zA-Z0-1\.]+" data-is-regex="true" autocomplete="off" />
							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-mail"></i>
								</div>
								
								<input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" />
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-keyboard"></i>
								</div>
								
								<input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
							</div>
						</div>						  --}}
										
						<div class="form-group">
							Step 2 of 2
						</div>
						
					</div>
					
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
								
				<a href="javascript:document.getElementById('logout-form').submit()" class="link">
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
					Log Out <i class="entypo-logout right"></i>
				</a>
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection
@section('scripts')
<script src="{{ asset('js/fileinput.js') }}"></script>       

<script src="{{ asset('js/neon-register.js') }}"></script>
<script>
//   var count = 10; // Timer
//   var redirect = "{{url('home')}}"; // Target URL

//   function countDown() {
//     var $timer = $("#timer"); // Timer ID
//     if (count > 0) {
//       count--;
//       $timer.text("("+count+"s)"); // Timer Message
//       setTimeout("countDown()", 1000);
//     } else {
//       window.location.href = redirect;
//     }
//   }

//   $(function(){
// 	  countDown();
//   })
</script>
@endsection