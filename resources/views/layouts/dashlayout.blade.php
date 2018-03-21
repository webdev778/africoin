<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Africoin ICO AFT" />
	<meta name="author" content="" />

    <link rel="icon" href="{{ asset('landing/img/favicon/favicon.ico') }}">
    
    <!-- CSRF Token -->
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}">  --}}

	<title>Africoin | Dashboard</title>

	<link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic') }}">
    <link rel="stylesheet" href="{{ asset('css/font-icons/font-awesome/css/font-awesome.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pageloader-loading.css') }}">    

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body  page-fade">

    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">

            <div class="sidebar-menu-inner">
                
                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('logo/Brandmark/PNG, SVG/White/Asset 17L.png') }}" width="25" alt="" />
                            &nbspAFRICOIN
                        </a>
                    </div>

                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                                    
                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>
                
                                        
                <ul id="main-menu" class="main-menu">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="entypo-gauge"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('PurchaseCoins.index') }}">
                            <i class="fa fa-dollar"></i>
                            <span class="title">Purchase</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wallet') }}">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">Wallet</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('account') }}">
                            <i class="entypo-user"></i>
                            <span class="title">Account</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="{{ route('Retailers.index') }}">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="title">Retailers</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('Retailers.index' )}}">
                                    <span class="title">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Retailers.create' )}}">
                                    <span class="title">Registration</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('support') }}">
                            <i class="fa fa-support"></i>
                            <span class="title">Support</span>
                        </a>
                    </li>
                </ul>
                
            </div>

	    </div>

        <div class="main-content">

            <div class="row">
		
                <!-- Profile Info and Notifications -->
                <div class="col-md-6 col-sm-8 clearfix">
            
                    <ul class="user-info pull-left pull-none-xsm">
            
                        <!-- Profile Info -->
                        <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
            
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('images/1.png') }}" alt="" class="img-circle" width="44" />
                                {{ Auth::user()->name }}
                            </a>
            
                            <ul class="dropdown-menu">
            
                                <!-- Reverse Caret -->
                                <li class="caret"></li>
            
                                <!-- Profile sub-links -->
                                <li>
                                    <a href="extra-timeline.html">
                                        <i class="entypo-user"></i>
                                        Edit Profile
                                    </a>
                                </li>
                            </ul>
                        </li>
            
                    </ul>
            
                </div>
            
            
                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">
            
                    <ul class="list-inline links-list pull-right">
            
                        <li>
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                                Log Out <i class="entypo-logout right"></i>
                            </a>
                        </li>
                    </ul>
            
                </div>
            
            </div>
            
            <hr />
            
            @yield('content')

            <!-- Footer -->
            <footer class="main">
                
                &copy; 2018 <strong>Africoin</strong> by <a href="#" target="_blank">Anja Seric</a>

            </footer>

        </div>
    
    </div>

    <!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('js/rickshaw/rickshaw.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}">

	<!-- Bottom scripts (common) -->
	<script src="{{ asset('js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
    <script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>


    <!-- Imported scripts on this page -->    
    <script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>        
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	{{-- <script src="{{ asset('js/rickshaw/rickshaw.js') }}"></script> --}}
	<script src="{{ asset('js/rickshaw/vendor/d3.v3.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>    
    <script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('js/neon-chat.js') }}"></script>        
    {{--  <script src="{{ asset('js/morris.min.js') }}"></script>  --}}
    <script src="{{ asset('js/neon-charts.js') }}"></script>	    
	
    <script src="{{ asset('js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}"></script>       

    
	<!-- JavaScripts initializations and stuff -->
    <script src="{{ asset('js/neon-custom.js') }}"></script>
    
    <!-- Demo Settings -->
	<script src="{{ asset('js/neon-demo.js') }}"></script>

    <!-- customization -->
    <script src="{{ asset('js/customization/pageloader.js') }}"></script>
    <script src="{{ asset('js/customization/dashboard/token_transaction.js') }}"></script>


    <!-- web3 -->
    <script src="{{ asset('web3/web3.min.js') }}"></script>
	<script src="{{ asset('web3/lightwallet.min.js') }}"></script>
    <script src="{{ asset('web3/customization/wallet_info.js') }}"></script>
    <script src="{{ asset('web3/loading_wallet.js') }}"></script>

    <script>
        console.log('-----------------------main layout section---------------------------')
    </script>
</body>
</html>
