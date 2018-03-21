<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Tradeum</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('landing/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('landing/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('landing/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('landing/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landing/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('landing/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('landing/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('landing/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('landing/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landing/img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('landing/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('landing/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('landing/img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700" rel="stylesheet">
    <script type="text/javascript"
            src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script>

    <style>
        body {
            opacity: 0;
            overflow-x: hidden;
        }

        html {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div id="particles-js"></div>
    
    <!-- ======================================
        == Start main header section ==
    ======================================= -->
    <section class="animated header animation-delay">
        <div class="logo">
            <a href="#0">
                <img class="img-responsive logo__image" src="{{ asset('landing/img/logo_navbar2.svg') }}" alt="Logo">
            </a>
        </div>
        <nav class="primary-nav">
            <a href="#navigation" class="nav-trigger">
                <span>
                    <em aria-hidden="true"></em>
                </span>
            </a>
            <ul id="navigation">
                <li><a href="#about" target="_self">About</a></li>
                <li><a href="#token-utility" target="_self">Token Utility</a></li>
                <li><a href="#roadmap" target="_self">Roadmap</a></li>
                <li><a href="#token-sale" target="_self">Token Sale</a></li>
                <li><a href="#faq" target="_self">FAQ</a></li>
                <li><a href="#contact" target="_self">Contact Us</a></li>
            </ul>
        </nav>
    </section>
    <!-- ======================================
        == End main header section ==
    ======================================= -->
    
    <!-- ======================================
        == Start hero section ==
    ======================================= -->
    <section class="hero-section">
        <section class="inner-hero-section">
            <div class="row hero-section__container">
                <div class="hero-section__left-block col-md-12 col-sm-12 col-xs-12">
                    <div class="hero-section__text-mask mask" style="text-align: center">
                        <h1 data-content="Tradeum" style="margin-top: 0">
                            <span>Tradeum</span>
                        </h1>
                        <div class="hero-section__action-wrapper">
                            <p>Join the Decentralized Revolution</p>
                            <div style="font-size: 1em;" class="col-md-6 col-md-offset-3 buttons-block">
                                <a class="button wayra" href="#white-paper" target="_self">
                                    <span>Whitepaper <i class="far fa-file"></i></span>
                                </a>
                                <a class="button wayra" href="{{ route('register') }}">
                                    <span>Sign Up&nbsp;&nbsp;<i class="fas fa-chevron-circle-down"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-section__right-block col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                    <div class="hero-section__social-area animated fadeIn">
                        <ul>
                            <li>
                                <a href="">
                                <span class="fa-layers fa-3x">
                                    <i class="fa fa-square"></i>
                                    <i class="fab fa-facebook fa-inverse"></i>
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <span class="fa-layers fa-3x">
                                    <i class="fa fa-square"></i>
                                    <i class="fab fa-twitter-square fa-inverse"></i>
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <span class="fa-layers fa-3x">
                                    <i class="fa fa-circle"></i>
                                    <i class="fab fa-telegram fa-inverse"></i>
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="hero-section__counter-area animated fadeIn">
                        <h3>Time until presale</h3>
                        <div id="hero-section__counter"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- ======================================
        == End hero section ==
    ======================================= -->
    
    <!-- ======================================
        == Start about section ==
    ======================================= -->
    <div class="two-wrappers">
        <section class="about" id="about">
            <div class="container container-padding">
                <div class="container_header">
                    <h1 class="section-header">
                        <span>About Tradeum</span>
                    </h1>
                </div>
                <div class="about__blockchain">
                    <img class="col-lg-5 col-md-6  col-xs-12" src="{{ asset('landing/img/blockchain.jpg') }}">
                    <p class="col-lg-7 col-md-6 col-sm-12">
                        Tradeum’s philosophy reflects that of cryptocurrencies. We focus on decentralization, peer-to-peer
                        transactions, trustless interaction, privacy, and financial freedom and control. As regulations and
                        tax codes on cryptocurrencies continue to accelerate worldwide, the need for decentralized trading
                        and passive income solutions has never been more apparent. By leveraging the 0x Protocol, Tradeum
                        will bring a user-friendly, decentralized exchange with a sustainable, passive token income program
                        to the Ethereum ecosystem.
                    </p>
                </div>
            </div>
            <div class="advantages-container container-padding">
                <div class="round-built-by hidden-sm hidden-xs">
                    <div class="round-animate">
                        <div class="round-1">
                            <span class="r-1"></span>
                            <span class="r-2"></span>
                        </div>
                        <div class="round-2">
                            <span class="r-1"></span>
                            <span class="r-2"></span>
                        </div>
                        <div class="round-3">
                            <span class="r-1"></span>
                            <span class="r-2"></span>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="head">
                        <h1 class="section-header white hidden-sm hidden-xs" data-content="Advantages"
                            style="margin-top: 0">
                            <span>Advantages</span>
                        </h1>
                    </div>
                    <div class="advantages hidden-xs hidden-sm call-to-action">
                        <div class="advantages__el ">
                            <div class="advantages__el-content">
                                <img src="{{ asset('landing/img/advantages/logo.svg') }}" style="height: 200px; ">
                            </div>
                        </div>
                        <div class="advantages__el" style="margin-top: 43px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/coins.svg') }}">
                                <h2>High-Utility Token</h2>
                                <p>The Tradeum AFT token allows users to trade with 60% less fees, have access to a unique
                                    passive income opportunity, and earn by providing predictions.
                                </p>
                            </div>
                        </div>
                        <div class="advantages__el " style="margin-top: 83px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/peer-to-peer.svg') }}">
                                <h2>Peer-to-Peer</h2>
                                <p>Trade directly from your wallet to another without working through a middle-man.
                                </p>
                            </div>
                        </div>
                        <div class="advantages__el " style="margin-top: 53px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/hand-shake.svg') }}">
                                <h2>Trustless</h2>
                                <p>There is no need to trust Tradeum, as we will never have custody of your funds.
                                </p></div>
                        </div>
                        <div class="advantages__el" style=" top: -20px;">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/0x-protocol.svg') }}" style="height: 80px;">
                                <h2>0x Protocol</h2>
                                <p>
                                    By relying on the 0x Protocol, Tradeum is able to reduce friction by doing off-chain
                                    order matching with on-chain settlement, all while having access to a large
                                    liquidity pool.
                                </p>
                            </div>
                        </div>
    
                        <div class="advantages__el" style="margin-left: 15px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/anonymous.svg') }}">
                                <h2>Anonymous</h2>
                                <p>
                                    Tradeum will never receive your personal information.
                                    You will be recognized by your wallet, which is not linked to your identity.
                                </p>
                            </div>
                        </div>
    
                        <div class="advantages__el" style="margin-right: 15px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/money%20(4).svg') }}">
                                <h2>Affiliate</h2>
                                <p>
                                    Earn 10% of the exchange fees of your friends who sign up using your referral link,
                                    as well as 3% of the amount they contribute to the Community Pool.
                                </p>
                            </div>
                        </div>
    
                        <div class="advantages__el">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/number-two-in-a-circle.svg') }}">
                                <h2>Two Version</h2>
                                <p>
                                    Tradeum offers a basic and advanced exchange version to bring the benefits of
                                    decentralized exchange to beginning and advanced traders alike.
                                </p>
                            </div>
                        </div>
                        <div class="advantages__el" style="margin-top: 53px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/freedom.svg') }}">
                                <h2>Freedom</h2>
                                <p>
                                    Tradeum will never limit the amount you want to trade, withdraw, or deposit.
                                </p>
                            </div>
                        </div>
                        <div class="advantages__el" style="margin-top: 83px">
                            <div class="advantages__el-content"><img src="{{ asset('landing/img/shield.svg') }}">
                                <h2>Security</h2>
                                <p>
                                    With the Tradeum exchange, your funds are protected against hackers and regulations
                                    because of the decentralized nature.
                                </p>
                            </div>
                        </div>
                    </div>
    
                    <h1 class="section-header white hidden-md hidden-lg" data-content="Advantages" style="margin-top: 0">
                        <span>Advantages</span>
                    </h1>
                    <div class="advantages-mob  hidden-md hidden-lg">
    
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/freedom.svg') }}">
                            <h2>Freedom</h2>
                            <p>Tradeum will never limit the amount you want to trade,
                                withdraw, or deposit.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/peer-to-peer.svg') }}">
                            <h2> Peer-to-Peer</h2>
                            <p>Trade directly from your wallet to another without
                                working through a middle-man.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/hand-shake.svg') }}">
                            <h2>Trustless</h2>
                            <p>There is no need to trust Tradeum as we will never have
                                custody of your funds.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/0x-protocol.svg') }}">
                            <h2>0x Protocol</h2>
                            <p>By relying on the 0x Protocol, Tradeum is able to
                                reduce friction by doing off-chain order matching with on-chain settlement while having
                                access to a
                                large
                                liquidity pool.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/number-two-in-a-circle.svg') }}">
                            <h2>Two Version</h2>
                            <p>Tradeum offers a basic and advanced exchange version to
                                bring the benefits of decentralized exchange to beginners and advanced traders alike.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/money%20(4).svg') }}">
                            <h2>Affiliate</h2>
                            <p>Earn 10% of the exchange fees of your friends who sign
                                up using your referral link and 3% of the amount they contribute to the Community Pool.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6 text-center">
                            <img src="{{ asset('landing/img/anonymous.svg') }}">
                            <h2>Anonymous</h2>
                            <p>Tradeum will never receive your personal information,
                                you will be recognized by your wallet which is not linked to your identity.</p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-6  text-center">
                            <img src="{{ asset('landing/img/coins.svg') }}">
                            <h2>High-Utility Token</h2>
                            <p>The Tradeum AFT token allows users to trade with 60% less fees, have access to a unique
                                passive income opportunity, and earn by providing predictions
                            </p>
                        </div>
                        <div class="advantages-mob__element col-xs-12 col-sm-12 text-center">
                            <img src="{{ asset('landing/img/shield.svg') }}">
                            <h2>Security</h2>
                            <p>With the Tradeum exchange, your funds are protected
                                against hackers and regulations because of the decentralized nature.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ======================================
        == End about section ==
    ======================================= -->
    
    <!-- ======================================
        == Start token-utility section ==
    ======================================= -->
    <section class="token-utility container-padding" id="token-utility">
        <div class="container">
            <h1 class="section-header">
                <span>Token Utility</span>
            </h1>
            <div class="col-md-8 col-sm-8 col-xs-12 view-fix">
                <p>
                    The AFT token plays an integral role on the Tradeum platform. You will benefit from 60% off of
                    transaction costs, access to a passive income opportunity, and earn the exchange fees by providing
                    predictions on market outcomes.
                </p>
            </div>
            <div class="col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-12 hidden-xs">
                <img src="{{ asset('landing/img/money-stacks-of-coins.svg') }}" class="img-responsive img-stacks-of-coins">
            </div>
        </div>
        <section id="services" class="section section-padded community">
            <div class="container">
                <div class="community__pool row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('landing/img/hands.png') }}">
                    </div>
                    <div class="col-md-8">
                        <h1>Stakeholder Pool</h1>
                        <p>
                            The goal of this program is to provide AFT holders a sustainable, passive income opportunity
                            that benefits from the knowledge and expertise of the community.
                        </p>
                        <p>
                            Your tokens will be locked and returned to your wallet after 60 days, with weekly bonuses. The
                            token release and bonuses will be secured by smart contracts. In addition to the guaranteed
                            bonuses, you will receive earnings from the Stakeholder Investment Fund which will be invested
                            based on the input from the Prediction Program.
                        </p>
                    </div>
                </div>
                <div class="time-line">
                    <ol>
                        <li>
                            <div>
                                <time>May 2018 - Aug 2018</time>
                                8% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>Sept - Dec 2018</time>
                                6% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>Jan - June 2019</time>
                                4% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>July - Dec 2019</time>
                                2% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>Jan - Dec 2020</time>
                                1% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>Jan - Dec 2021</time>
                                0.5% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>Jan - Dec 2023</time>
                                0.25% <span class="small-text">/ monthly</span>
                            </div>
                        </li>
                        <li></li>
                    </ol>
                </div>
                <div class="services row">
                    <h2 class="col-md-12 col-sm-12 col-xs-12">
                        The Stakeholder Investment Fund will be invested in three ways:
                    </h2>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service-item about__advantages-list__element">
                            <span class="top-border"></span>
                            <span class="right-border"></span>
                            <span class="bottom-border"></span>
                            <div class="service-icon">
                                <img src="{{ asset('landing/img/diagram.svg') }}">
                            </div>
                            <div class="service-text">
                                <p class="description">
                                    <b>Algorithmic Trading</b> based on the strategies and predictions contributed by the
                                    Community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service-item about__advantages-list__element">
                            <span class="top-border"></span>
                            <span class="right-border"></span>
                            <span class="bottom-border"></span>
                            <div class="service-icon">
                                <img src="{{ asset('landing/img/employees.svg') }}">
                            </div>
                            <div class="service-text">
                                <p class="description">
                                    <b>Arbitrage</b> between exchanges offering AFT by buying low and selling high.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-lg-offset-0 col-xs-12">
                        <div class="single-service-item about__advantages-list__element">
                            <span class="top-border"></span>
                            <span class="right-border"></span>
                            <span class="bottom-border"></span>
                            <div class="service-icon">
                                <img src="{{ asset('landing/img/dialog.svg') }}">
                            </div>
                            <div class="service-text">
                                <p class="description">
                                    <b>Market Making</b> to provide sufficient liquidity for traders and profit from the
                                    ‘bid-ask’ spread.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="community__score row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <h1>Prediction Program</h1>
                        <p>
                            AFT token holders can be rewarded for accurately predicting market outcomes or providing useful
                            trading strategies. The results will then be used as a powerful prediction tool aimed towards
                            allocating the Stakeholder Investment Fund to improve Stakeholder Pool returns.
                        </p>
                        <p>
                            You will gain a reputation score as you consistently provide accurate predictions. The rewards
                            for this program will be paid from exchange fees. They will be paid on a monthly basis, and will
                            be based off of the following factors:
                        </p>
                    </div>
                    <div class="community__score__list col-md-offset-1 col-md-6  col-sm-6 col-xs-12">
                        <div class="community__score__list-element">
                            <img class="img-responsive" src="{{ asset('landing/img/like.svg') }}">
                            <p class="contribution-program">
                                <b>Proof-of-Reputation:</b> Based on your reputation score.
                            </p>
                        </div>
                        <div class="community__score__list-element">
                            <img class="img-responsive" src="{{ asset('landing/img/desk.svg') }}">
                            <p class="contribution-program">
                                <b>Proof-of-Work:</b> Based on the total number of predictions made in a given month.
                            </p>
                        </div>
                        <div class="community__score__list-element">
                            <img class="img-responsive" src="{{ asset('landing/img/money-exchange.svg') }}">
                            <p class="contribution-program">
                                <b>Proof-of-Stake:</b> Based on the average amount of tokens held over the month.
                                More weight is given to tokens held in the Stakeholder Pool.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="community__score row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>Low-Cost Trading</h1>
                        <p>
                            While buying or selling AFT, you will save 60% off of transaction costs. The AFT market will
                            also support almost all ERC20 tokens available.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="round-built-by hidden-sm hidden-xs">
            <div class="round-animate">
                <div class="round-1">
                    <span class="r-1"></span>
                    <span class="r-2"></span>
                </div>
                <div class="round-2">
                    <span class="r-1"></span>
                    <span class="r-2"></span>
                </div>
                <div class="round-3">
                    <span class="r-1"></span>
                    <span class="r-2"></span>
                </div>
            </div>
        </div>
    
    </section>
    <!-- ======================================
        == End token-utility section ==
    ======================================= -->
    
    <!-- ======================================
        == Start roadmap section ==
    ======================================= -->
    <section class="cd-horizontal-timeline container-padding" id="roadmap">
        <h1 class="section-header white">
            <span>Roadmap</span>
        </h1>
        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="01/07/2017">Q3 2017</a></li>
                        <li><a href="#0" data-date="01/10/2017">Q4 2017</a></li>
                        <li><a href="#0" data-date="01/01/2018">Q1 2018</a></li>
                        <li><a href="#0" data-date="01/04/2018">Q2 2018</a></li>
                        <li><a href="#0" data-date="01/07/2018">Q3 2018</a></li>
                        <li><a href="#0" data-date="01/10/2018">Q4 2018</a></li>
                        <li><a href="#0" data-date="01/01/2019">2019 - 2020</a></li>
                    </ol>
    
                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->
    
            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->
    
        <div class="events-content">
            <ol>
                <li class="selected" data-date="01/07/2017">
                    <div class="item-list row">
                        <div class="item col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3"><img
                                src="{{ asset('landing/img/roadmap/magnifier.svg') }}">
                            <p>Market Research</p>
                        </div>
                        <div class="item col-md-3 col-sm-3"><img src="{{ asset('landing/img/roadmap/whitepaper-creating.svg') }}">
                            <p>Whitepaper Creation</p>
                        </div>
                    </div>
                </li>
    
                <li data-date="01/10/2017">
                    <div class="item-list row">
                        <div class="item col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3"><img
                                src="{{ asset('landing/img/roadmap/team-formation.svg') }}">
                            <p>Team Formation</p>
                        </div>
                        <div class="item col-md-3 col-sm-3"><img src="{{ asset('landing/img/roadmap/web-development.svg') }}">
                            <p>Website Development & Design</p></div>
                    </div>
                </li>
    
                <li data-date="01/01/2018">
                    <div class="item-list row">
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                            <img src="{{ asset('landing/img/roadmap/website-launch.svg') }}">
                            <p>Launch of tradeum.io Website</p>
                        </div>
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                            <img src="{{ asset('landing/img/roadmap/smart-contrect.svg') }}">
                            <p>AFT Smart Contract Creation</p>
                        </div>
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                            <img src="{{ asset('landing/img/roadmap/dev-exchange.svg') }}">
                            <p>Basic Exchange Development</p>
                        </div>
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                            <img src="{{ asset('landing/img/roadmap/token-sale.svg') }}">
                            <p>Token Sale</p>
                        </div>
                    </div>
                </li>
    
                <li data-date="01/04/2018">
                    <div class="item-list row">
                        <div class="item col-md-4 col-sm-4"><img src="{{ asset('landing/img/roadmap/advanced-exchange.svg') }}">
                            <p>
                                Development of:
                            <div class="sublist">- Advanced Exchange</div>
                            <div class="sublist">- Stakeholder Pool</div>
                            </p>
                        </div>
                        <div class="item col-md-4 col-sm-4"><img src="{{ asset('landing/img/roadmap/basic-exchange.svg') }}">
                            <p>Basic Exchange Launch</p></div>
                        <div class="item col-md-4 col-sm-4"><img src="{{ asset('landing/img/roadmap/contribution-program.svg') }}">
                            <p>Prediction Program Launch</p>
                        </div>
                    </div>
                </li>
    
                <li data-date="01/07/2018">
                    <div class="item-list row">
                        <div class="item col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2">
                            <img src="{{ asset('landing/img/roadmap/betta-launch.svg') }}">
                            <p>Beta Launch of:
                            <div class="sublist">- Advanced Exchange</div>
                            <div class="sublist">- Stakeholder Pool</div>
                            </p>
                        </div>
                        <div class="item col-md-4 col-sm-4">
                            <img src="{{ asset('landing/img/roadmap/international-marketing.svg') }}">
                            <p>International Marketing</p></div>
                    </div>
                </li>
    
                <li data-date="01/10/2018">
                    <div class="item-list row">
                        <div class="item col-md-4">
                            <img src="{{ asset('landing/img/roadmap/tradeum-launch.svg') }}">
                            <p>Tradeum Exchange Official Launch</p>
                        </div>
                        <div class="item col-md-4">
                            <img src="{{ asset('landing/img/roadmap/apple.svg') }}">
                            <img src="{{ asset('landing/img/roadmap/android-logo.svg') }}">
                            <p>IOS and Android Mobile Applications</p>
                        </div>
                        <div class="item col-md-4">
                            <img src="{{ asset('landing/img/roadmap/margin-trade.svg') }}">
                            <p>Margin Trading</p>
                        </div>
                    </div>
                </li>
    
                <li data-date="01/01/2019">
                    <div class="item-list row">
                        <div class="item-list row">
                            <div class="item col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3"><img
                                    src="{{ asset('landing/img/roadmap/cross-blockchain.svg') }}">
                                <p>Cross-blockchain Implementation</p>
                            </div>
                            <div class="item col-md-3 col-sm-3"><img src="{{ asset('landing/img/roadmap/target-of-audience.svg') }}">
                                <p>Global Expansion </p></div>
                        </div>
                    </div>
                </li>
            </ol>
        </div> <!-- .events-content -->
    </section>
    <!-- ======================================
        == End roadmap section ==
    ======================================= -->
    
    <!-- ======================================
        == Start Token Sale section ==
    ======================================= -->
    <section class="token-sale container-padding" id="token-sale">
        <div class="container">
            <h1 class="section-header">
                <span>Token Sale</span>
            </h1>
            <p>
                The presale will be held on March 1st. The token sale rounds will be held from March 10th to April 1st. A
                total of 19.5 million tokens will be sold. The minimum and maximum token sale purchase per round is 150 and
                10,000, respectively.
            </p>
            <div class="cards">
                <div class="card chart-wrap bg columns " style="flex-shrink: 0;">
                    <h3>Price (AFT per 1 ETH)</h3>
                    <div class="chart">
    
                        <div class="column-chart">
                            <div class="column" data-progress="80">
                                <div class="col-data">4K</div>
                            </div>
                            <div class="column" data-progress="70">
                                <div class="col-data">3.5K</div>
                            </div>
                            <div class="column" data-progress="60">
                                <div class="col-data">3K</div>
                            </div>
                            <div class="column" data-progress="50">
                                <div class="col-data">2.5K</div>
                            </div>
                            <div class="column" data-progress="40">
                                <div class="col-data">2K</div>
                            </div>
                        </div>
                    </div>
                    <div class="chart-legend invers">
                        <p>Presale, March 1st, 1.1M AFT</p>
                        <p>Round 1, March 10th, 3.8M AFT</p>
                        <p>Round 2, March 17th, 4.3M AFT</p>
                        <p>Round 3, March 24nd, 4.9M AFT</p>
                        <p>Round 4, April 1st, 5.4M AFT</p>
                    </div>
                </div>
                <div class="card chart-wrap bg ring" style="flex-shrink: 0;">
                    <h3>Use of Funds</h3>
                    <div class="chart">
    
                        <div id="piechart"></div>
    
                    </div>
                    <div class="chart-legend">
                        <p>40% Research & Development</p>
                        <p>35% Marketing</p>
                        <p>15% Team Expansion</p>
                        <p>7% Legal & Administrative</p>
                        <p>3% Team & Advisors</p>
                    </div>
                </div>
                <div class="card chart-wrap bg ring" style="flex-shrink: 0;">
                    <h3>Initial AFT Distribution</h3>
                    <div class="chart">
                        <div id="piechart1"></div>
    
                    </div>
                    <div class="chart-legend">
                        <p>75% Token Sale</p>
                        <p>15% Community Reserve</p>
                        <p>6% Partnerships & Strategic Investors</p>
                        <p>4% Team & Advisors</p>
                    </div>
                </div>
                <div class="card chart-wrap bg line-only" style="display: none">
                    <div class="chart">
                        <canvas id="line-graph-1" width="216" height="216"></canvas>
                    </div>
                </div>
            </div>
            <div class="token-sale__flex-content row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>
                        <span>Token Sale Referral Bonus</span>
                    </h1>
                    <p>
                        The token sale referral bonus is a great way to raise awareness on what Tradeum has to offer while
                        keeping marketing funds within the community. You can receive 8% of the amount raised directly under
                        your referral link.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================
        == End Token-Sale section ==
    ======================================= -->
    
    <!-- ======================================
        == Start white paper section ==
    ======================================= -->
    <section class="white-paper container-padding" id="white-paper">
        <div class="container">
            <h1 class="section-header white">
                <span>Whitepaper</span>
            </h1>
            <div class="row white-paper_item">
                <div class="col-md-12 col-sm-12 col-xs-12 white-paper-block">
                    <div class="pull-left">
                        <img src="{{ asset('landing/img/white-paper/flag-uk.png') }}" alt="flag">
                        English
                    </div>
                    <div class="pull-right">
                        <a class="button wayra pull-right" href="/download/white_paper_tradeum_EN">
                            <span>Download&nbsp;&nbsp; <i class="fas fa-cloud-download-alt"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row white-paper_item">
                <div class="col-md-12 col-sm-12 col-xs-12 white-paper-block">
                    <div class="pull-left">
                        <img src="{{ asset('landing/img/white-paper/flag-fr.png') }}" alt="flag">
                        French
                    </div>
                    <div class="pull-right">
                        <a class="button wayra pull-right" href="/download/white_paper_tradeum_FR">
                            <span>Download&nbsp;&nbsp; <i class="fas fa-cloud-download-alt"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row white-paper_item">
                <div class="col-md-12 col-sm-12 col-xs-12 white-paper-block">
                    <div class="pull-left">
                        <img src="{{ asset('landing/img/white-paper/flag-ch.png') }}" alt="flag">
                        Chinese
                    </div>
                    <div class="pull-right">
                        <a class="button wayra pull-right" href="/download/white_paper_tradeum_CN">
                            <span>Download&nbsp;&nbsp; <i class="fas fa-cloud-download-alt"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row white-paper_item">
                <div class="col-md-12 col-sm-12 col-xs-12 white-paper-block">
                    <div class="pull-left">
                        <img src="{{ asset('landing/img/white-paper/flag-ru.png') }}" alt="flag">
                        Russian
                    </div>
                    <div class="pull-right">
                        <a class="button wayra pull-right" href="/download/white_paper_tradeum_RU">
                            <span>Download&nbsp;&nbsp; <i class="fas fa-cloud-download-alt"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================
        == End white paper section ==
    ======================================= -->
    
    <!-- ======================================
        == Start FAQ section ==
    ======================================= -->
    <section class="overview-block-ptb white-bg iq-asked container-padding" id="faq">
        <div class="container">
            <h1 class="section-header">
                <span>Frequently Asked Questions</span>
            </h1>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="iq-accordion iq-mt-50">
                        <div class="ad-block ad-active"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What is
                            a Token Sale?</a>
                            <div class="ad-details">
                                A Token Sale is the first distribution of a token before it hits exchanges.
                                These tokens allow participants to use the products and/or services the platform
                                offers once it is launched.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What kind of return can
                            I expect from the Stakeholder Pool?</a>
                            <div class="ad-details">
                                The returns are dependent on the value of input from the Prediction Program, so we can’t
                                give an exact estimate. Individuals can benefit up to 8% extra tokens monthly from the max
                                supply, the potential appreciation of the AFT token during the Pooling term, and the profits
                                from the Stakeholder Investment Fund.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What are the goals
                            of the presale?</a>
                            <div class="ad-details">
                                The goals of the presale are to raise funds to market the Tradeum token sale
                                internationally, increase website security, and further develop the basic exchange version
                                that is planned for launch in the second quarter of 2018.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">Will the Tradeum token sale
                            be KYC compliant?</a>
                            <div class="ad-details">
                                Yes, it will. We plan to be KYC compliant in order to protect Tradeum, as well as our token
                                sale contributors. Fulfilling this process successfully will be required in order to
                                withdraw tokens after the completion of the token sale. Citizens from the United States,
                                China, and Singapore are prohibited from participating in the token sale.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What is the 0x protocol?</a>
                            <div class="ad-details">
                                The 0x protocol is an open source code that allows decentralized, peer-to-peer exchange
                                between ERC20 tokens. The order match is completed off-chain to vastly improve liquidity,
                                speed, and cost. The settlement is done on the Ethereum blockchain to ensure security,
                                trust, and efficiency. Many projects have been built on the 0x protocol, including Augur,
                                Radar, Ethfinex, and ParadeX.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What will bring people
                            to use the Tradeum exchange?</a>
                            <div class="ad-details">
                                Beyond the many benefits of decentralized exchange, we believe that the utility of the AFT
                                token within the Tradeum ecosystem will bring more users than any other decentralized
                                exchange. Traders and investors will be attracted to the Tradeum exchange because of the
                                lowest exchange fees in the marketplace with the AFT token and the high potential for reward
                                in the Stakeholder Pool and Prediction Program. We will also use aggressive marketing
                                strategies to show potential users what we have to offer.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">Why is the input from the
                            Prediction Program valuable?</a>
                            <div class="ad-details">
                                The predictions contributed by the community in the Prediction Program will be key to
                                accurately position our algorithmic trading software and make informed investment decisions.
                                The more quantity and quality of data we receive, the better returns we can realistically
                                provide. As the database grows, we can even use machine learning models to analyze the
                                correlation of the gathered information to real world outcomes to improve the powerful
                                predictive tool we aim to create. We are willing to reward participants of this program
                                generously because we believe the data will give us yet another competitive advantage over
                                the long term. Just like the enormous amount of data collected by Google, Amazon, Facebook,
                                and Microsoft that allowed them to be powerhouses in their industries.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="iq-accordion iq-mt-50">
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">Is the exchange only
                            for ERC20 tokens?</a>
                            <div class="ad-details">
                                Yes, but with advancements in the 0x protocol, we hope cross-blockchain communication
                                will be an option. Then, we can incorporate tokens and coins from all blockchains.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What are the benefits
                            of the AFT Token?</a>
                            <div class="ad-details">
                                The AFT token has many valuable functions and benefits on the Tradeum platform. These
                                include 60% off transactions fees, and access to the Stakeholder Pool and Prediction
                                Program.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">What happens to
                            the exchange fees?</a>
                            <div class="ad-details">
                                Exchange fees go to rewarded individuals in the Prediction Program and to the Tradeum team
                                to develop and maintain the Tradeum platform.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">How was the name
                            Tradeum established?</a>
                            <div class="ad-details">
                                The concept of this platform is to execute smart <b>Trad</b>es securely and
                                efficiently on the Ether<b>eum</b> blockchain. It is from this we establish the
                                name <b>Tradeum</b>.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">Where do the funds
                            go when they are sent to the Stakeholder Pool?</a>
                            <div class="ad-details">
                                The funds in the Stakeholder Pool are stored securely in a wallet during the Pooling term.
                                The funds will never be put at risk on the market to generate profits. There is no
                                involvement from a middle man. Smart contracts will be responsible for sending these funds
                                to wallets that they were sent from.
                            </div>
                        </div>
                        <div class="ad-block"><a href="#" class="ad-title iq-tw-6 iq-font-grey">How do you ensure
                            participants are providing honest input in the Prediction Program?</a>
                            <div class="ad-details">
                                Although we cannot guarantee individuals are contributing predictions in a honest manner, we
                                can reliably ensure we are acting off of top quality information by giving more weight to
                                individuals with a higher reputation score.. This is to make sure we are using information
                                from participants who are trustworthy and have a proven record of providing valuable
                                insight.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================
        == End FAQ section ==
    ======================================= -->
    
    <!-- ======================================
        == Start mailing list section ==
    ======================================= -->
    
    <!-- ======================================
        == End mailing list section ==
    ======================================= -->
    
    <!-- ======================================
        == Start contact us section ==
    ======================================= -->
    <section class="contact-us container-padding" id="contact">
        <div class="section-inner">
            <div class="container text-center">
                <h1 class="section-header white">
                    <span>Contact us</span>
                </h1>
                @if (session('status'))
                    <div class="alert alert-success" style="text-align: center; color: limegreen;">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="signup-form row" method="POST" action="{{ route('contact_email') }}">
                    {{ csrf_field() }}
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
                        <div class="form-group col-12 col-md-12">
                            <label for="firstname">Name</label>
                            <input type="text" class="form-control contact-us_input" id="firstname" name="name"
                                    placeholder="Your name here...">
                            @if ($errors->has('name'))
                            <div>
                                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            </div>                                
                            @endif
                        </div>
                        <div class="form-group col-12 col-md-12">
                            <label for="emailaddress">Email</label>
                            <input type="email" class="form-control contact-us_input" id="emailaddress" name="email"
                                    placeholder="Your email address here...">
                            @if ($errors->has('email'))
                            <div>
                                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            </div>                                
                            @endif
                        </div>
                        <div class="form-group col-12 col-md-12">
                            <label for="message">Message</label>
                            <textarea class="form-control message" id="message" name="message"
                                        placeholder="Your message here..."></textarea>
                            @if ($errors->has('message'))
                            <div>
                                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            </div>                                
                            @endif
                        </div>
                        <div class="form-group col-sm-offset-2 col-md-offset-2 col-12 col-md-12 recaptcha">
                                <div class="captcha" style="width: 50px;">
                                    {!! app('captcha')->display() !!}
                                </div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="row">
                            <div style="font-size: 1em; text-align: center;"
                                    class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-offset-1 col-xs-10 buttons-block">
                                <button type="submit" class="button wayra" href="#0" style=" padding: 1em 0.5em">
                                    <span>Send Message&nbsp;&nbsp; <i class="fas fa-paper-plane"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ======================================
        == End contact us section ==
    ======================================= -->
    
    <div class="copyright">
        <h4 class="text-center"> Copyright © 2018. All rights reserved.</h4>
    </div>
    
    <a class="btn-lg scrollup"><i class="fa fa-arrow-up"></i></a>

<link rel="stylesheet" href="{{ asset('landing/css/main.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ asset('landing/js/scripts.min.js') }}"></script>
<script src="{{ asset('landing/js/about.js') }}"></script>
<script src="{{ asset('landing/js/advantages.js') }}"></script>
<script src="{{ asset('landing/js/token-sale.js') }}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/packery/1.4.2/packery.pkgd.min.js'></script>
</body>
</html>
