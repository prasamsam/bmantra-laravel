@extends($appType.'.Layouts.master')

@section('content')

    <div id="tg-homeslidervtwo" class="tg-homeslider tg-homeslidervtwo">
        @foreach($SlideData as $key => $slider)
            <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" data-slide-to="{{$key}}"
                 style="background:url({{url('/images/slider/'.$slider->sliderimage)}}) no-repeat scroll 0 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                            <div class="tg-slidercontent">
                                <h1 class="pogoSlider-slide-element" data-in="flipX" data-out="flipX"
                                    data-duration="800">
                                    {{$slider->sliderdescription}}</h1>
                                <div class="tg-description pogoSlider-slide-element" data-in="slideLeft"
                                     data-out="slideRight" data-duration="1800">
                                    <p>{{$slider->slidesummary}}</p>
                                </div>
                                <div class="tg-btns pogoSlider-slide-element" data-in="slideUp" data-out="slideUp"
                                     data-duration="800">
                                    <a class="tg-btn" href="javascript:void(0);">Sign Up</a>
                                    <a class="tg-btn tg-active" href="javascript:void(0);">Log In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Reques A Call Back Start
        *************************************-->
        <section class="tg-main-section tg-haslayout tg-requescallarea" data-appear-top-offset="600"
                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <div class="tg-textshortcode">
                            <h3>Request A Call Back</h3>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elitia eiusmod tpor incididunt utnaitas labore etolore magna
                                    aliqua minim vam quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <div class="row">
                            <form class="tg-formtheme tg-formrequestacall">
                                <fieldset>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="form-group">
												<span class="tg-select">
													<select>
														<option value="none">I would like to discuss:</option>
														<option value="Bussiness">Bussiness</option>
														<option value="Investment">Investment</option>
													</select>
												</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="form-group tg-inputicon">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="Call Me on:">
                                            <i class="lnr lnr-calendar-full"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="form-group tg-inputicon">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="I’m Available After:">
                                            <i class="lnr lnr-clock"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <button type="submit" class="tg-btnregular tg-btnregular-lg tg-active">Looking
                                            For Response
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Request A Call Back End
        *************************************-->
        <!--************************************
                Services Section Starts
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
                <div class="tg-sectionhead">
                    <div class="tg-sectiontitle">
                        <h2>Your Business Always Need</h2>
                    </div>
                    <div class="tg-description">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt utnai labore et dolore magna
                            aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat aute irure.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
                <div id="tg-content" class="tg-content">
                    <div class="tg-plans tg-planslist">
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-10.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-pencil"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3>ABN Registration</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li>
                                                <button class="tg-btnregular">Let's Go!</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-11.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-magnifier"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3>Business Name Search (Requires ABN)</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li id="tg-bnamesearch"><input type="text"
                                                                           name="name"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Enter Business Name For Search">
                                            </li>
                                            <li>
                                                <button class="tg-btnregular">Search</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-12.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-pencil"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3>Business Name Registration</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li>
                                                <button class="tg-btnregular">Let's Go!</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-13.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-magnifier"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3>Company Name Search</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li id="tg-bnamesearch"><input type="text"
                                                                           name="name"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Enter Business Name For Search">
                                            </li>
                                            <li>
                                                <button class="tg-btnregular">Search</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-14.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-pencil"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3>Company Name Registration</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li>
                                                <button class="tg-btnregular">Let's Go!</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-14.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-link"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3><a href="#">Domain Registration</a></h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li>
                                                <button class="tg-btnregular">Let's Go!</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-14.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-laptop-phone"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3><a href="#">Website Development</a></h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li>
                                                <button class="tg-btnregular">Let's Go!</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-plan">
                            <figure class="tg-planimg"><a href="#"><img src="images/plans/img-14.jpg"
                                                                        alt="image description"></a></figure>
                            <div class="tg-plancontent">
                                <span class="tg-planicon lnr lnr-picture"></span>
                                <div class="tg-titledescription">
                                    <div class="tg-plantitle">
                                        <h3><a href="#">Graphic Design</a></h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit ado eiusmod tempor incididunt utnai labore
                                            dolore magna aliqua enim adminim veniam quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo.</p>
                                    </div>
                                    <div>
                                        <ul class="tg-serviceinfo searchservice">
                                            <li>
                                                <button class="tg-btnregular">Let's Go!</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($ServiceData  as $key => $service)
                            <div class="tg-plan" id="{{++$key}}">
                                <figure class="tg-planimg"><img
                                            src="{{asset('/images/services/'.$service->serviceimage)}}"
                                            alt="image-description" style="width:100%; height:250px"></figure>
                                <div class="tg-plancontent">
                                    <span class="tg-planicon lnr lnr-pointer-right"></span>
                                    <div class="tg-titledescription">
                                        <div class="tg-plantitle">
                                            <h3>{{$service->servicename}}</h3>
                                        </div>
                                        <div class="tg-description">
                                            <p>{{$service->servicedetail}}</p>
                                        </div>
                                        <div>
                                            <ul class="tg-serviceinfo searchservice">
                                                <li>
                                                    <button class="tg-btnregular">Let's Go!</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--Services Section Ends-->
        <!--Packages Section Starts-->
        <div class="container packagesection">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2 class="">We Also Provide Combo Service Packages</h2>
                        </div>
                        @foreach($PackageData as $key => $package)
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="{{++$key}}">
                                <div class="tg-package">
                                    <span class="tg-tagfeatured"></span>
                                    <h3>{{$package->packagename}}</h3>
                                    <h4>from <span> $ {{$package->packageprice}} </span> per month</h4>
                                    <ul>
                                        <li>{{$package->packageservice1}}</li>
                                        <li>{{$package->packageservice2}}</li>
                                        <li>{{$package->packageservice3}}</li>
                                        <li>{{$package->packageservice4}}</li>
                                        <li>{{$package->packageservice4}}</li>
                                    </ul>
                                    <a class="tg-btnregular" href="#">Buy Now</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <!--************************************
                Package Section Ends
        *************************************-->
        <!--************************************
                Consulting Start
        *************************************-->
        <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
                 data-image-src="images/parallax/bgparallax-02.jpg">
            <div class="container">
                <div class="row">
                    <div class="tg-services">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 tg-verticalmiddle">
                            <div class="tg-textshortcode">
                                <div class="tg-sectiontitle">
                                    <h2>We Serve Everywhere</h2>
                                </div>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor utnaitas labore etolore magna
                                        aliqua minim veniam quis nostrud exercitation ullamco laboris aliquip commodo
                                        consequat aute irure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 tg-verticalmiddle">
                            <div id="tg-servicesslider" class="tg-servicesslider">
                                <div class="item">
                                    <div class="row">
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-book"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Products Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-screen"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">E-Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-chart-bars"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Financial Services</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-rocket"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Aviation Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-book"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Products Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-screen"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">E-Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-chart-bars"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Financial Services</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-rocket"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Aviation Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-book"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Products Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-screen"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">E-Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-chart-bars"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Financial Services</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service">
                                            <div class="tg-serviceholder">
                                                <span class="tg-serviceicon lnr lnr-rocket"></span>
                                                <div class="tg-servicetitle">
                                                    <h3><a href="#">Aviation Consulting</a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit ado asmod tempor incididunt utnai
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--************************************
        Latest Cases Start
*************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
                        <div class="tg-sectionhead">
                            <div class="tg-sectiontitle">
                                <h2>Our Latest Cases</h2>
                            </div>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt utnai labore et dolore
                                    magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat aute irure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tg-latestcases">
                        @foreach($CaseData as $key => $case)
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="{{++$key}}">
                                <div class="tg-case">
                                    <figure class="tg-caseimg">
                                        <a href="#"><img class="img-responsive" src="{{asset('/images/cases/'.$case->caseimage)}}"
                                                         style="width:100%; height:207px;" alt="image description"></a>
                                        <time datetime="2016-10-10"><span>22</span>May</time>
                                    </figure>
                                    <div class="tg-casecontent">
                                        <div class="tg-title">
                                            <h3>{{$case->casename}}</h3>
                                        </div>
                                        <span class="tg-category">{{$case->casecategory}}</span>
                                        <div class="tg-description">
                                            <p>{{$case->casedetail}}</p>
                                        </div>
                                        <div class="tg-btnreadmorebox">
                                            <a class="tg-readmore" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Cases End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class="tg-main-section tg-haslayout" data-appear-top-offset="600" data-parallax="scroll"
                 data-image-src="images/parallax/bgparallax-03.jpg">
            <div class="container">
                <div class="row">
                    <div class="tg-statisticscounters">
                        <div class="tg-counter">
                            <span class="tg-statisticicon lnr lnr-smile"></span>
                            <h2><span data-from="0" data-to="12036" data-speed="8000"
                                      data-refresh-interval="50">12036</span></h2>
                            <h3>Happy Customers</h3>
                        </div>
                        <div class="tg-counter">
                            <span class="tg-statisticicon lnr lnr-coffee-cup"></span>
                            <h2><span data-from="0" data-to="11089" data-speed="8000"
                                      data-refresh-interval="50">11089</span></h2>
                            <h3>cup of coffee</h3>
                        </div>
                        <div class="tg-counter">
                            <span class="tg-statisticicon lnr lnr-earth"></span>
                            <h2><span data-from="0" data-to="1034" data-speed="8000"
                                      data-refresh-interval="50">1034</span></h2>
                            <h3>Services Area</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->

        <!--************************************
                People Love Us Start
        *************************************-->
        <section class="tg-main-section tg-parallaximg tg-bglight tg-haslayout" data-appear-top-offset="600"
                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="tg-sectiontitle tg-smallsectiontitle">
                            <h2>People Love Us!</h2>
                        </div>
                    </div>
                    <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials">
                        @foreach($TestimonyData as $key => $testimony)
                            <div class="item tg-testimonial" id="{{++$key}}">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 tg-verticalmiddle">
                                        <blockquote>
                                            <q>{{$testimony->testimony}}</q>
                                        </blockquote>
                                        <div class="tg-clientinfo">
                                            <figure class="tg-companylogo"><a href="#"><img
                                                            src="{{asset('/images/testimonials/'.$testimony->clientcompanylogo)}}"
                                                            alt="image description"
                                                            style="width:100px; height:30px;"></a>
                                            </figure>
                                            <div class="tg-reviewerinfo">
                                                <figure class="tg-reviewerdp"><a href="#"><img
                                                                src="{{asset('/images/testimonials/'.$testimony->testownerimage)}}"
                                                                alt="image description"
                                                                style="width:50px; height:50px;"></a>
                                                </figure>
                                                <div class="tg-nameanddesignation">
                                                    <strong>{{$testimony->testowner}}</strong>
                                                    <span>{{$testimony->testownerinfo}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 tg-verticalmiddle">
                                        <div class="tg-videoshortcode">
                                            <figure><img
                                                        src="{{asset('/images/testimonials/'.$testimony->testheroimage)}}"
                                                        alt="image description" style="width:570px; height:321px;">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
         Trusted By Many Start
 *************************************-->
        <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
                 data-image-src="images/parallax/bgparallax-04.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
                        <div class="tg-sectionhead">
                            <div class="tg-sectiontitle">
                                <h2>Trusted By Many</h2>
                            </div>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt utnai labore et dolore
                                    magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat aute irure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tg-brands">
                        @foreach($TestimonyData as $key => $testimony)
                        <div class="tg-brand">
                            <figure>
                                <img src="{{asset('/images/testimonials/'.$testimony->clientcompanylogo)}}" alt="image description" style="width:63px; height:61px;">
                                <figcaption>{{$testimony->testownerinfo}}</figcaption>
                            </figure>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Trusted By Many End
        *************************************-->
        <!--************************************
                Latest News Start
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-blogposts">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="tg-textshortcode">
                                <div class="tg-sectiontitle">
                                    <h2>Latest News</h2>
                                </div>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elitia eiusmod tempor veniam quis incididunt utnaitas
                                        labore etolore magna aliqua minim nostrud exercitation ullamco.</p>
                                </div>
                                <a class="tg-btnregular" href="{{route('news')}}">View All</a>
                            </div>
                        </div>
                        @foreach($newses as $key => $news)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="{{++$key}}">
                            <article class="tg-post">
                                <figure><a href="{{route('single-news',$news->id)}}"><img src="{{asset('/images/news/'.$news->newsimage)}}" alt="image description" style="width:100%; height:201px;"></a>
                                </figure>
                                <div class="tg-postcontent">
                                    <div class="tg-authordp">
                                        <a href="#">
                                            <img src="{{asset('/images/news/'.$news->newsauthorimage)}}" alt="image description" style="width:50px;height:50px;" >
                                        </a>
                                    </div>
                                    <div class="tg-contentbox">
                                        <div class="tg-title">
                                            <h3><a href="{{route('single-news',$news->id)}}">{{$news->newsheading}}</a></h3>
                                        </div>
                                        <ul class="tg-metadata tg-postmetadata">
                                            <li>
                                                <i class="lnr lnr-user"></i>
                                                <span>Posted By: {{$news->newsauthor}} </span>
                                            </li>
                                        </ul>
                                        <div class="tg-description">
                                            <p>{{$news->newsdetail}}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest News End
        *************************************-->
    </main>


@endsection