@section('header')

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <header id="tg-header" class="tg-header tg-haslayout">

            <div class="clearfix"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">

                        <div class="tg-navigationarea">
                            <strong class="tg-logo">
                                <a href="userportal.html"><img src="images/logo.png" alt="image description"></a>
                            </strong>
                            <nav id="tg-addnav" class="tg-addnav">
                                <ul>
                                    <li id="shoppingcart">
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
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" id="userdropdown"
                                           aria-haspopup="true" aria-expanded="false"><img class="img-thumbnail"
                                                                                           src="images/cartimg/img-02.png"></a>
                                        <ul class="dropdown-menu dropdown-menu-right userdropdown"
                                            aria-labelledby="userdropdown">
                                            <li class="col-lg-pull-1"><a href="#">Change Profile Picture</a></li>
                                            <li><a href="login.html">Log Out</a></li>
                                        </ul>
                                    </li>
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
                                <div id="tg-navigation"
                                     class="tg-widget tg-widgetmenu collapse navbar-collapse tg-navigation">
                                    <ul class="nav hidden-lg hidden-md hidden-sm">
                                        <li><a href="eventdetail.html">Profit Planning</a></li>
                                        <li><a href="eventdetail-v2.html">Mortgage Advisor</a></li>
                                        <li><a href="eventdetail.html">Thought Leadership</a></li>
                                        <li><a href="eventdetail-v2.html">Strategic Planning</a>
                                        </li>
                                        <li><a href="eventdetail.html">Financial Projections</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

@endsection