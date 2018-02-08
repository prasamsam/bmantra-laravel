@extends($appType.'.Layouts.client_portal_master')

@section('content')

    <div class="clearfix"></div>
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-eventschedule">
                                <h1>Get Started!</h1>
                                @include($appType.'.Page.Messages.sessionMessage')
                                <div class="tg-eventscheduletabs">
                                    <div class="tab-content tg-eventschedulecontent">
                                        <div role="tabpanel" class="tab-pane active" id="dayone">
                                            <div class="tg-eventvenuetabs">
                                                <div class="tab-content tg-eventvenuecontent">
                                                    <div role="tabpanel" class="tab-pane active" id="halla">
                                                        <h3>We Offer</h3>
                                                        <div class="tg-description">
                                                            <p>Claritas est etiam processus dynamicus, qui sequitur
                                                                mutationem consuetudium lectorum. Mirum est notare
                                                                quamiat sitao littera gothica, quam nunc putamus parum
                                                                claram, anteposuerit litterarum formas humanitatis per
                                                                seacula quarta atiatia decima et quinta decima.</p>
                                                        </div>
                                                        <div class="tg-shortcode">
                                                            <div class="tg-shortcodetitle">
                                                                <h3>Service Packages</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="tg-packages" >
                                                                    @foreach($PackageData as $key => $package)
                                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="{{++$key}}">
                                                                        <div class="tg-package">
                                                                            <h3>{{$package->packagename}}</h3>
                                                                            <h4>from <span>${{$package->packageprice}}</span> per month</h4>
                                                                            <ul>
                                                                                <li>{{$package->packageservice1}}</li>
                                                                                <li>{{$package->packageservice2}}</li>
                                                                                <li>{{$package->packageservice3}}</li>
                                                                                <li>{{$package->packageservice4}}</li>
                                                                                <li>{{$package->packageservice5}}</li>
                                                                            </ul>
                                                                            <a class="tg-btnregular-sm" href="#">Buy
                                                                                Now</a>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tg-shortcodetitle">
                                                            <h3>Individual Services Offered</h3>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4>ABN Registration</h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li>
                                                                        <button class="tg-btnregular">Let's Go!</button>
                                                                    </li>
                                                                    <li id="userabn"><a href="#">I already have ABN</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description">
                                                                </a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">Business Name Search (Requires
                                                                            ABN)</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
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
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">Business Registration</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li>
                                                                        <button class="tg-btnregular">Let's Go!</button>
                                                                    </li>
                                                                    <!--<li id="userabn"><a href="#">I already have ABN</a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">Company Name Search</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li id="tg-bnamesearch"><input type="text"
                                                                                                   name="name"
                                                                                                   class="form-control tg-plceholdercolor"
                                                                                                   placeholder="Enter Company Name For Search">
                                                                    </li>
                                                                    <li>
                                                                        <button class="tg-btnregular">Search</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">Company Registration</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li>
                                                                        <button class="tg-btnregular">Let's Go!</button>
                                                                    </li>
                                                                    <!--<li id="userabn"><a href="#">I already have ABN</a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">NAB</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li>
                                                                        <button class="tg-btnregular">Let's Go!</button>
                                                                    </li>
                                                                    <!--<li id="userabn"><a href="#">I already have ABN</a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">Domain Registration</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li id="tg-bnamesearch"><input type="text"
                                                                                                   name="name"
                                                                                                   class="form-control tg-plceholdercolor"
                                                                                                   placeholder="Domain Name Search">
                                                                    </li>
                                                                    <li>
                                                                        <button class="tg-btnregular">Search</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tg-speaker">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="images/speaker/img-01.jpg"
                                                                            alt="image description"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4><a href="#">Web Development</a></h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li>
                                                                        <button class="tg-btnregular">Let's Go!</button>
                                                                    </li>
                                                                    <!--<li id="userabn"><a href="#">I already have ABN</a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        @foreach($ServiceData as $key => $service)
                                                        <div class="tg-speaker"
                                                        id="{{++$key}}">
                                                            <figure class="tg-speakerdp">
                                                                <a href="javascript:void(0);"><img
                                                                            src="{{asset('/images/services/'.$service->serviceimage)}}"
                                                                            alt="image description" style="width:150px; height:150px"></a>
                                                            </figure>
                                                            <div class="tg-speakercontent">
                                                                <div class="tg-speakerhead">
                                                                    <h4>ABN Registration</h4>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>Consectetur adipisicing elit sed do eiusmod
                                                                        tempor incididunt ut labore dolore magna aliqu
                                                                        enim ad minim veniam quis nostrud exercitation
                                                                        ullamco.</p>
                                                                </div>
                                                                <ul class="tg-serviceinfo">
                                                                    <li>
                                                                        <button class="tg-btnregular">Let's Go!</button>
                                                                    </li>
                                                                    <li id="userabn"><a href="#">I already have ABN</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                        <div class="tg-youmayalsolike">
                                                            <h3>Additional Services</h3>
                                                            <div class="tg-events">
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="tg-event">
                                                                            <figure class="tg-eventimg">
                                                                                <a href="#"><img
                                                                                            src="images/events/img-01.jpg"
                                                                                            alt="image description"></a>
                                                                                <span class="tg-themetag tg-tagbuynow">buy now</span>
                                                                            </figure>
                                                                            <div class="tg-eventcontent">
                                                                                <div class="tg-price">
                                                                                    <span>$42</span>
                                                                                    <span>Starting</span>
                                                                                </div>
                                                                                <div class="tg-eventinfo">
                                                                                    <div class="tg-title servicetitle">
                                                                                        <h3><a href="#">Get Best Web
                                                                                                Hosting
                                                                                                Service</a>
                                                                                        </h3>
                                                                                    </div>
                                                                                    <ul class="tg-metadata tg-eventmetadata">
                                                                                        <li>
                                                                                            <p>Lorem Ipsum is simply
                                                                                                dummy
                                                                                                text of the printing and
                                                                                                typesetting industry.
                                                                                                Lorem
                                                                                                Ipsum has been the
                                                                                                industry's standard
                                                                                                dummy
                                                                                                text ever since the
                                                                                                1500s,
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="tg-event">
                                                                            <figure class="tg-eventimg">
                                                                                <a href="#"><img
                                                                                            src="images/events/img-02.jpg"
                                                                                            alt="image description"></a>
                                                                                <span class="tg-themetag tg-tagbuynow">buy now</span>
                                                                            </figure>
                                                                            <div class="tg-eventcontent">
                                                                                <div class="tg-price">
                                                                                    <span>$42</span>
                                                                                    <span>Starting</span>
                                                                                </div>
                                                                                <div class="tg-eventinfo">
                                                                                    <div class="tg-title servicetitle">
                                                                                        <h3><a href="#">Graphic
                                                                                                Designing</a></h3>
                                                                                    </div>
                                                                                    <ul class="tg-metadata tg-eventmetadata">
                                                                                        <li>
                                                                                            <p>Lorem Ipsum is simply
                                                                                                dummy
                                                                                                text of the printing and
                                                                                                typesetting industry.
                                                                                                Lorem
                                                                                                Ipsum has been the
                                                                                                industry's standard
                                                                                                dummy
                                                                                                text ever since the
                                                                                                1500s, </p>
                                                                                        </li>
                                                                                    </ul>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">

                            <div class="tg-widget tg-widgetbrochure">
                                <a href="javascript:void(0);">Company Brochure</a>
                            </div>
                            <div class="tg-widget tg-widgetreadytohelp">
                                <h3>Always Ready To Help!</h3>
                                <div class="tg-description"><p>Consectetur adipisicing elit sed
                                        dotas eusmod @ <a
                                                href="query@domain.com">query@domain.com</a> OR call
                                        anytime 0800 12345 678.</p>
                                </div>
                                <a href="#">Contact Now!</a>
                            </div>
                            @foreach($TestimonyData as $key => $testimony)
                            <div class="tg-widget tg-widgettestimonials">
                                <div class="tg-widgettitle" id>
                                    <h3>Testimonials</h3>
                                </div>
                                <div class="tg-testimonial">
                                    <figure><img src="{{asset('/images/testimonials/'.$testimony->testheroimage)}}"
                                                 alt="image description" style="width:100%; height:auto;"></figure>
                                    <blockquote><q>{{$testimony->testimony}}</q></blockquote>
                                    <div class="tg-reviewerinfo">
                                        <figure class="tg-reviewerdp"><img src="{{asset('/images/testimonials/'.$testimony->testownerimage)}}"
                                                        alt="image description" style="width:50px; height:50px;">
                                        </figure>
                                        <div class="tg-nameanddesignation">
                                            <strong>{{$testimony->testowner}}</strong>
                                            <span>{{$testimony->testownerinfo}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
