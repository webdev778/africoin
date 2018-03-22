<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Africoin ICO AFT" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('landing/img/favicon/favicon.ico') }}">

    <title>Africoin | Verification</title>

    <link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/neon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/neon-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/neon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
</head>
<body class="page-body login-page login-form-fall">


    <!-- This is needed when you send requests via Ajax -->
    <script type="text/javascript">
    var baseurl = '';
    </script>
        @yield('content')
	
</div>

    <script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Bottom scripts (common) -->
	<script src="{{ asset('js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/neon-login.js') }}"></script>
    
	<script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('js/neon-custom.js') }}"></script>


	<!-- Demo Settings -->
	<script src="{{ asset('js/neon-demo.js') }}"></script>
    <script src="{{ asset('js/customization/random_referral.js') }}"></script>
    <script src="{{ asset('js/customization/custom.js') }}"></script>

    <!-- web3 -->
    <script src="{{ asset('web3/web3.min.js') }}"></script>
	<script src="{{ asset('web3/lightwallet.min.js') }}"></script>
    <script src="{{ asset('js/customization/register_eth_key.js') }}"></script>
</body>
</html>
