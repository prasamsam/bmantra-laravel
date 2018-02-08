
@section('header')

    <div id="tg-wrapper" class="tg-wrapper tg-wrapper tg-haslayout">

        <header id="tg-header" class="tg-header tg-header tg-haslayout">
            <div class="tg-topbar tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="tg-addressbar">
                                <div class="tg-themedropdown tg-addressdropdown">
                                    <a href="javascript:void(0);" id="tg-officelocation" class="tg-btndropdown"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Select Your Region</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="tg-dropdownmenu" aria-labelledby="tg-officelocation">
                                        <li><a href="#">NSW</a></li>
                                        <li><a href="#">VIC</a></li>
                                        <li><a href="#">WA</a></li>
                                        <li><a href="#">SA</a></li>
                                        <li><a href="#">QLD</a></li>
                                        <li><a href="#">TAS</a></li>
                                        <li><a href="#">NT</a></li>
                                    </ul>
                                </div>
                                <ul class="tg-addressinfo">
                                    <li>
                                        <i class="lnr lnr-map-marker"></i>
                                        <address>14 Tottenham Court Road, Manchester</address>
                                    </li>
                                    <li>
                                        <i class="lnr lnr-clock"></i>
                                        <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                                    </li>
                                    <li>
                                        <i class="lnr lnr-phone-handset"></i>
                                        <span>+4 1234 567890</span>
                                    </li>
                                </ul>
                            </div>
                            <div id="loginbtn" class="tg-themedropdown tg-languagesdropdown">
                                <a href="{{route('user-login')}}" class="tg-btndropdown">
                                    <span>log In</span>
                                </a>
                            </div>
                            <div id="signupbtn" class="tg-themedropdown tg-languagesdropdown">
                                <a href="{{route('signup')}}" class="tg-btndropdown">
                                    <span>Sign Up</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="tg-navigationarea">
                            <strong class="tg-logo">
                                <a href="{{route('home')}}"><img src="images/logo.png" alt="image description"></a>
                            </strong>
                            <nav id="tg-addnav" class="tg-addnav">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);"><span class="tg-badge">3</span><i
                                                    class="lnr lnr-cart"></i></a>
                                        <div class="tg-cartitems">
                                            <div class="tg-cartgrandtotal">
                                                <h2>Your Grand Total: $260</h2>
                                            </div>
                                            <div class="tg-cartlistitems">
                                                <div class="tg-cartitem">
                                                    <figure class="tg-itemimg">
                                                        <img src="images/cartimg/img-01.png" alt="image description">
                                                    </figure>
                                                    <div class="tg-contentbox">
                                                        <a class="tg-btndel" href="#"><i class="lnr lnr-cross"></i></a>
                                                        <div class="tg-tagstock"><span>in stock</span></div>
                                                        <div class="tg-productname">
                                                            <h3><a href="#">2x Product Title Here</a></h3>
                                                        </div>
                                                        <span class="tg-price">$150</span>
                                                    </div>
                                                </div>
                                                <div class="tg-cartitem">
                                                    <figure class="tg-itemimg">
                                                        <img src="images/cartimg/img-02.png" alt="image description">
                                                    </figure>
                                                    <div class="tg-contentbox">
                                                        <a class="tg-btndel" href="#"><i class="lnr lnr-cross"></i></a>
                                                        <div class="tg-tagstock"><span>in stock</span></div>
                                                        <div class="tg-productname">
                                                            <h3><a href="#">2x Product Title Here</a></h3>
                                                        </div>
                                                        <span class="tg-price">$150</span>
                                                    </div>
                                                </div>
                                                <div class="tg-cartitem">
                                                    <figure class="tg-itemimg">
                                                        <img src="images/cartimg/img-03.png" alt="image description">
                                                    </figure>
                                                    <div class="tg-contentbox">
                                                        <a class="tg-btndel" href="#"><i class="lnr lnr-cross"></i></a>
                                                        <div class="tg-tagstock"><span>in stock</span></div>
                                                        <div class="tg-productname">
                                                            <h3><a href="#">2x Product Title Here</a></h3>
                                                        </div>
                                                        <span class="tg-price">$150</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-btnarea">
                                                <a class="tg-btn" href="#">Clear All</a>
                                                <a class="tg-btn tg-active" href="#">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a id="tg-btnsearch" class="tg-btnsearch" href="#tg-search"><i
                                                    class="lnr lnr-magnifier"></i></a></li>
                                </ul>
                            </nav>
                            <nav id="tg-nav" class="tg-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#tg-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                    <ul>
                                        <li class="current-menu-item">
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{route('cases')}}">cases</a>
                                        </li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li class="nav hidden-lg hidden-md hidden-sm"><a href="{{route('signup')}}">Sign Up</a></li>
                                        <li class="nav hidden-lg hidden-md hidden-sm"><a href="{{route('user-login')}}">Log In</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>


@endsection