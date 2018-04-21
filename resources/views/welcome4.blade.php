<!DOCTYPE html>
<html lang="en">
<head>
	<title>AFRICOIN</title>
	<meta name="robots" content="noindex">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="Anja Seric">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">    

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('new_landing/icon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('new_landing/icon/favicon-32x32.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('new_landing/icon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('new_landing/icon/apple-touch-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('new_landing/icon/apple-touch-icon-144x144.png') }}">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"> 

	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('new_landing/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('new_landing/css/font-awesome.min.css') }}">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('new_landing/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('new_landing/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('new_landing/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('new_landing/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('new_landing/css/main-custom.css') }}">

</head>
<body class="body" data-spy="scroll" data-target=".header" data-offset="60">
	<!-- header -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<!-- btn -->
					<button class="header__btn" type="button">
						<span class="lnr lnr-menu"></span>
						<span class="lnr lnr-cross"></span>
					</button>
					<!-- end btn -->

					<!-- logo -->
					<a data-scroll href="#home" class="header__logo">
						<img class="header__logo-white" src="{{ asset('new_landing/img/africoin-logo-light.svg') }}" alt="Logo">
						<img class="header__logo-dark" src="{{ asset('new_landing/img/africoin-logo-light.svg') }}" alt="Logo">
					</a>
					<!-- end logo -->

					<!-- tagline -->
					<span class="header__tagline" style="margin-top: 10px"></span>
					<!-- end tagline -->

					<!-- navigation -->
					<ul class="nav header__nav">
						<li>
							<a data-scroll href="#home">Home</a>
						</li>						
						<li>
							<a data-scroll href="#about">About Us</a>
						</li>
						<li>
							<a data-scroll href="#features">Features</a>
						</li>
						<li>
							<a data-scroll href="#contacts">Contacts</a>
						</li>
					</ul>
					<!-- end navigation -->

					<!-- sign in -->
					<a href="{{ route('login') }}" class="header__signin"><span class="lnr lnr-user"></span>&nbsp;<span class="hidden-xs">Sign In</span></a>
					<!-- end sign in -->
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- home -->
	<section id="home" class="home section--bg"data-bg="{{ asset('new_landing/img/home/particle_background.svg') }}">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<!-- home content -->
					<div class="home__content-wrap">
						<div class="home__content">
							<h1 class="home__title">A True African <br> Cryptocurrency</h1>
							<h2 class="home__text">For a united Africa</h2>
							<a data-scroll href="#ticker" ><span class="learn_more">Learn More</span></a>							
						</div>
					</div>
					<!-- end home content -->
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- ticker -->
	<section id="ticker">
		<div class="ticker">
			<!-- ticker list -->
			<ul class="ticker__list clearfix">
				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>GNT</b> / AFC</span>
					<span class="price">0.00002861</span>
					<span class="change change--red">-2.81%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>ITC</b> / AFC</span>
					<span class="price">0.00006148</span>
					<span class="change change--red">-1.85%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>QASH</b> / AFC</span>
					<span class="price">0.000010281</span>
					<span class="change change--green">+4.34%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>DGD</b> / AFC</span>
					<span class="price">0.009051</span>
					<span class="change change--red">-2.67%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>PAY</b> / AFC</span>
					<span class="price">0.000216</span>
					<span class="change change--red">-1.81%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>BCC</b> / AFC</span>
					<span class="price">0.130641</span>
					<span class="change change--red">-1.44%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>ETH</b> / AFC</span>
					<span class="price">0.0422283</span>
					<span class="change change--red">-1.02%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>ZAR</b> / AFC</span>
					<span class="price">1.000000</span>
					<span class="change change--green">+2.81%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>XRP</b> / AFC</span>
					<span class="price">0.00002266</span>
					<span class="change change--red">-3.49%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>LTC</b> / AFC</span>
					<span class="price">0.009269</span>
					<span class="change change--green">+6.54%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>BTG</b> / AFC</span>
					<span class="price">0.024681</span>
					<span class="change change--red">-2.78%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>DASH</b> / AFC</span>
					<span class="price">0.069507</span>
					<span class="change change--red">-3.52%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>ETC</b> / AFC</span>
					<span class="price">0.002737</span>
					<span class="change change--green">+0.81%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>EOS</b> / AFC</span>
					<span class="price">0.00032227</span>
					<span class="change change--green">+12.93%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>OMG</b> / AFC</span>
					<span class="price">0.000874</span>
					<span class="change change--green">+5.30%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>RDN</b> / AFC</span>
					<span class="price">0.00036004</span>
					<span class="change change--red">-4.62%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>SNT</b> / AFC</span>
					<span class="price">0.00000678</span>
					<span class="change change--green">+27.68%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>KNC</b> / AFC</span>
					<span class="price">0.00010116</span>
					<span class="change change--green">+0.59%</span>
				</li>
				<!-- end ticker item -->

				<!-- ticker item -->
				<li class="ticker__item">
					<span class="name"><b>ZRX</b> / AFC</span>
					<span class="price">0.00001867</span>
					<span class="change change--red">-2.35%</span>
				</li>
				<!-- end ticker item -->
			</ul>
			<!-- end ticker list -->
		</div>		
	</section>

	<!-- end ticker -->

	<!-- about -->
	<section id="about" class="about">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title section__title--margin">Putting Africa on the blockchain</h2>
				</div>
				<!-- end section title -->
				
				<div class="col-xs-12">
					<!-- about text -->
					<div class="about__text">
						<p>Africoin is an African  Cryptocurrency utilised for P2P transfers and is a reward ecosystem for large retailers to utilise Blockchain technology. </p>

					</div>
					<!-- end about text -->
				</div>

				<div class="col-xs-12" style="display:none">
					<!-- about quick info -->					
					<div class="col-xs-12 col-lg-6">
						<h2>Get a quick info about us</h2>
					</div>
					<div class="col-xs-12 col-lg-3">
						<div class="download_pdf">
							<div class="download_pdf_icon">
								<img src="img/new/down_pdf.png"/>
							</div>
							<div class="download_pdf_title">
								<h4>Company Profile</h3>
								<p>Download PDF</p>
							</div>
						</div>
					</div>		
					<div class="col-xs-3 col-lg-3">
						<div class="download_pdf">
							<div class="download_pdf_icon">
								<img src="img/new/down_pdf.png"/>
							</div>
							<div class="download_pdf_title">
								<h4>Company Profile</h3>
								<p>Download PDF</p>
							</div>
						</div>
					</div>																
					<!-- end quick info -->
				</div>				
			</div>
		</div>
	</section>
	<!-- end about -->

	<!-- features -->
	<section id="features" class="section section--grey">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title section__title--margin">Benifits of Africoin</h2>
	
				</div>
				<!-- end section title -->

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 1) -->
					<div class="box1">
						<!-- <span class="lnr lnr-diamond box1__icon"></span> -->
						<i class="fa fa-puzzle-piece box1__icon"></i>
						<h3 class="box1__title">Secure</h3>
						<p class="box1__text"> Utilising Blockchain technology and cryptocurrency.<br><br></p>
					</div>
					<!-- end box (style 1) -->
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 1) -->
					<div class="box1">
						<!-- <span class="lnr lnr-magic-wand box1__icon"></span> -->
						<i class="fa fa-usd box1__icon"></i>
						<h3 class="box1__title">Zero Volatility</h3>
						<p class="box1__text">As each Token is backed by a Rand in the bank there is no risk in exchange volatility.</p>
					</div>
					<!-- end box (style 1) -->
				</div>
				
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
					<!-- box (style 1) -->
					<div class="box1">
						<!-- <span class="lnr lnr-laptop-phone box1__icon"></span> -->
						<i class="fa fa-shopping-cart box1__icon"></i>
						<h3 class="box1__title">Ecosystem</h3>
						<p class="box1__text">Africoin offers a ecosystem for users to earn, spend and save with no bank fees or transfer costs.</p>
					</div>
					<!-- end box (style 1) -->
				</div>

				<!-- section button -->
				<div class="col-xs-12">
					<a href="#" class="section__btn1">purchase now</a>
				</div>
				<!-- end section button -->
			</div>
		</div>
	</section>
	<!-- end features -->

	<!-- safety -->
	<section class="section section--bg retailer_brands" data-bg="{{ asset('new_landing/img/section-bg/section-bg5.png') }}">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title section__title--margin">Retailers And Brands</h2>
				</div>
				<!-- end section title -->
				<div class="col-xs-12 col-md-6">					
					<div class="box7">
						<div class="box7__icon">
							<span class="lnr lnr-lock"></span>
						</div>
						<div class="box7__info">
							<h3 class="box7__title">Security</h3>
							<p class="box7__text">Offer Vouchers in africoins as a reward system.</p>
						</div>
					</div>
					<div class="box7">
						<div class="box7__icon">
							<span class="lnr lnr-license"></span>
						</div>
						<div class="box7__info">
							<h3 class="box7__title">License</h3>
							<p class="box7__text">Increase sales with bonus africoins.</p>
						</div>
					</div>
					<div class="box7">
						<div class="box7__icon">
							<span class="lnr lnr-thumbs-up"></span>
						</div>
						<div class="box7__info">
							<h3 class="box7__title">Result</h3>
							<p class="box7__text">Include your bands and stores in the Africoin ecosystem.</p>
						</div>
					</div>					
				</div>
												
				<!-- section button -->
				<div class="col-xs-12">
					<a href="#" class="section__btn1">purchase now</a>
				</div>
				<!-- end section button -->
			</div>
		</div>
	</section>
	<!-- end safety -->

	<!-- counter -->
	<!-- <div class="section counter" data-parallax="scroll" data-image-src="{{ asset('new_landing/img/section-bg/section-bg3.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-lg-3">
					<div class="counter__box">
						<span class="counter__value">5.7</span>
						<span class="counter__title">mln transactions</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-3 col-lg-3">
					<div class="counter__box">
						<span class="counter__value">70</span>
						<span class="counter__title">online consultants</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-3 col-lg-3">
					<div class="counter__box">
						<span class="counter__value">23</span>
						<span class="counter__title">countries served</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-3 col-lg-3">
					<div class="counter__box">
						<span class="counter__value">2.5</span>
						<span class="counter__title">mln bitcoin wallets</span>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end counter -->

	<!-- blog -->
	<section id="blog" class="section section--grey" style="display:none">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title">Blog</h2>
					<span class="section__tagline">Our publications</span>
				</div>
				<!-- end section title -->

				<!-- article -->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="article">
						<figure class="article__img">
							<a href="#">
								<img src="{{ asset('new_landing/img/blog/1.jpg') }}" alt="">
							</a>
						</figure>

						<header class="article__header">
							<h3 class="article__title">
								<a href="#">Blockchain</a>
							</h3>
						</header>

						<div class="article__content">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
						</div>
					</article>
				</div>
				<!-- end article -->

				<!-- article -->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="article">
						<figure class="article__img">
							<a href="#">
								<img src="{{ asset('new_landing/img/blog/2.jpg') }}" alt="">
							</a>
						</figure>

						<header class="article__header">
							<h3 class="article__title">
								<a href="#">Finance</a>
							</h3>
						</header>

						<div class="article__content">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
						</div>
					</article>
				</div>
				<!-- end article -->

				<!-- article -->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="article">
						<figure class="article__img">
							<a href="#">
								<img src="{{ asset('new_landing/img/blog/3.jpg') }}" alt="">
							</a>
						</figure>

						<header class="article__header">
							<h3 class="article__title">
								<a href="#">Business</a>
							</h3>
						</header>

						<div class="article__content">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
						</div>
					</article>
				</div>
				<!-- end article -->
			</div>
		</div>
	</section>
	<!-- end blog -->

	<!-- info -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title">Features</h2>
					<!-- <span class="section__tagline section__tagline--dark">Your tagline</span> -->
				</div>
				<!-- end section title -->

				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
					<!-- info content -->
					<div class="feature1__img">
						<img src="{{ asset('new_landing/img/section-bg/section-bg4.png') }}" style="width:100%" />
					</div>
					<!-- end info content -->
				</div>

				<!-- section button -->
				<div class="col-xs-12">
					<a href="#" class="section__btn1">purchase now</a>
				</div>
				<!-- end section button -->
			</div>
		</div>
	</section>
	<!-- end info -->

	<!-- team -->
	
	<!-- end team -->

	<!-- get in touch -->
	<section id="contacts" class="section section--grey">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title">Leave A Comment</h2>
					<!-- <p class="section__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p> -->
				</div>
				<!-- end section title -->

				<div class="col-xs-12 col-sm-6">
					<!-- contacts -->
					<div class="contacts">
						<ul class="contacts__list">
							<li>
								<span class="lnr lnr-map"></span>
								AFRICOIN &trade;								
							</li>
							<li>
								<span class="lnr lnr-calendar-full"></span>Mon - Fri 08:00 - 19:00
							</li>
							<li>
								<span class="lnr lnr-inbox"></span>
								<a href="mailto:support@africoinapp.com">support@africoinapp.com</a>
							</li>
							<li>
								<span class="lnr lnr-phone-handset"></span>
								<a href="tel:+18002345678"></a>
							</li>
						</ul>
					</div>
					<!-- end contacts -->
				</div>

				<div class="col-xs-12 col-sm-6">
					<!-- form -->
					<form action="#" class="form form--contacts">
						<input type="text" class="form__input" placeholder="Name">
						<input type="text" class="form__input" placeholder="Email">
						<textarea class="form__textarea" placeholder="Message"></textarea>
						<button class="form__btn" type="button">Send</button>
					</form>
					<!-- end form -->
				</div>
			</div>
		</div>
	</section>
	<!-- end get in touch -->
	
	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12">
					<h2 class="section__title section__title--white">subscribe for our newsletter</h2>
				</div>
				<!-- end section title -->

				<div class="col-xs-12">
					<form action="#" class="subscribe">
						<input type="text" class="subscribe__input" placeholder="Enter your Email">
						<button type="button" class="subscribe__btn"><i class="fa fa-paper-plane-o"></i></button>
					</form>
				</div>

				<div class="col-xs-12">
					<!-- social list -->
					<ul class="footer__social clearfix">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-skype"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
					</ul>
					<!-- end social list -->
				</div>

				<div class="col-xs-12">
					<!-- copyright -->
					<small class="footer__copyright">© 2018 <a href="#">AFRICOIN &trade;</a></small>
					<!-- end copyright -->
				</div>
			</div>
		</div>
			
		<div class="container">
			<hr>
			<div class="footer__logo">
				<div class="row" style="display:flex; align-items:center">
					<div class="col-xs-12 col-md-9">					
						<!-- <img src="{{ asset('new_landing/img/logo.png') }}"/> -->
						Terms & conditions | Privacy policy 
					</div>
					<div class="col-xs-12 col-md-3">
						
						<a data-scroll href="#home" class="back-to-top">
							<i class="fa fa-angle-up"></i>
						</a>
					</div>
				</div>			
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- sign in -->
	<div id="signin" class="mfp-hide modal">
		<button class="modal__close" type="button">
			<span class="lnr lnr-cross"></span>
		</button>

		<h6 class="modal__title">Sign In</h6>

		<form class="form form--modal" action="#">
			<input type="text" class="form__input" placeholder="Username">
			<input type="password" class="form__input" placeholder="Password">
			<button class="form__btn" type="button">Sign In</button>
		</form>

		<a href="#signup" class="modal__link modal-btn">Sign Up</a>
	</div>
	<!-- end sign in -->

	<!-- sign up -->
	<div id="signup" class="mfp-hide modal">
		<button class="modal__close" type="button">
			<span class="lnr lnr-cross"></span>
		</button>

		<h6 class="modal__title">Sign Up</h6>

		<form class="form form--modal" action="#">
			<input type="text" class="form__input" placeholder="Username">
			<input type="text" class="form__input" placeholder="Email">
			<input type="password" class="form__input" placeholder="Password">
			<button class="form__btn" type="button">Sign Up</button>
		</form>

		<a href="#signin" class="modal__link modal-btn">Sign In</a>
	</div>
	<!-- end sign up -->

	<!-- preloader -->
	<div class="preloader">
		<div class="preloader__logo">
			<img src="{{ asset('new_landing/img/logo--dark.png') }}" alt="">
		</div>
		<div class="preloader__spinner">
			<div class="preloader__bounce1"></div>
			<div class="preloader__bounce2"></div>
		</div>
	</div>
	<!-- end preloader -->

	<!-- JS -->
	<script src="{{ asset('new_landing/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.marquee.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/smooth-scroll.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/parallax.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/scrolla.jquery.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/main.js') }}"></script>
</body>
</html>