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

                @if (Auth::user()->user_type == "Supplier" || Auth::user()->user_type == "Admin")
                <li class="has-sub">
                    <a href="{{ route('PurchaseCoins.index') }}">
                        <i class="fa fa-dollar"></i>
                        <span class="title">Purchase</span>
                    </a>
                    <ul>
                        @if (Auth::user()->user_type == "Supplier")
                        <li>
                            <a href="{{ route('PurchaseCoins.create') }}">
                                <span class="title">Buy Token</span>
                            </a>
                        </li>        
                        @endif                
                        <li>
                            <a href="{{ route('PurchaseCoins.index' )}}">
                                <span class="title">Transactions</span>
                            </a>
                        </li>
                    </ul>
                </li> 
                @endif

                @if (Auth::user()->isAdmin() || Auth::user()->user_type == 'Retailer')
                <li>
                    <a href="{{ route('wallet') }}">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">Wallet</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->isAdmin())
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
                        <li>
                            <a href="{{ route('Retailers.member' )}}">
                                <span class="title">Member</span>
                            </a>
                        </li>                        
                    </ul>
                </li>
                @endif
                @if (Auth::user()->isAdmin())
                <li>
                    <a href="{{ route('Suppliers.index') }}">
                        <i class="fa fa-truck"></i>
                        <span class="title">Suppliers</span>
                    </a>
                </li>
                @endif    
                <li>
                    <a href="{{ route('account') }}">
                        <i class="entypo-user"></i>
                        <span class="title">Account</span>
                    </a>
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