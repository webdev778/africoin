<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Africoin ICO AFT" />
	<meta name="author" content="Anja Seric" />

	<link rel="icon" href="{{ asset('landing/img/favicon/favicon.ico') }}">

    <title>Africoin Dashboard | @yield('title') </title>

	<link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('css/font-icons/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pageloader-loading.css') }}">    
	<link rel="stylesheet" href="{!! mix('css/app.css') !!}" />

	@section('styles')
	@show
		
	<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>

	<!--[if lt IE 9]><script src="{{ asset('js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body class="page-body page-fade">

    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        @include('layouts.sidebar')
        
        <div class="main-content">
           
            @include('layouts.topbar')

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

<!-- Bottom scripts (common) -->
<script src="{{ asset('js/gsap/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/joinable.js') }}"></script>
<script src="{{ asset('js/resizeable.js') }}"></script>
<script src="{{ asset('js/neon-api.js') }}"></script>
<script src="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>

@section('scripts')
@show  

<!-- JavaScripts initializations and stuff -->
<script src="{{ asset('js/neon-custom.js') }}"></script>


<!-- Demo Settings -->
<script src="{{ asset('js/neon-demo.js') }}"></script>
    
  
</body>
</html>