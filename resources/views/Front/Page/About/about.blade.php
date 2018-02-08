@extends($appType.'.Layouts.master')

@section('content')

    <div class="tg-innerpagebanner tg-haslayout">
        <div class="tg-pagetitle tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
             data-image-src="images/parallax/bgparallax-07.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Main</a></li>
                        <li class="tg-active">Services</li>
                    </ol>
                </div>
            </div>
        </div>

        <!--************************************
                Inner Page Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->

        <main id="tg-main" class="tg-main tg-haslayout">
            @foreach($AboutData as $key => $about)
                <div class="container" id="{{++$key}}">
                    <div class="row">
                        <div id="tg-twocolumns" class="tg-twocolumns">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                                <div id="tg-content" class="tg-content">
                                    <div class="tg-companyoverview">
                                        <div class="tg-welcomeblink" style="background:  url({{url('/images/about/'.$about->firstimage)}}) #f7f7f7 no-repeat center right; width:100%; height:auto; float: left; padding:0 30px; margin:20px 0 30px; ">
                                            <div class="tg-textshortcode">
                                                <div class="tg-sectiontitle">
                                                    <h2><span>Welcome!</span>Blink Consulting</h2>
                                                </div>
                                                <div class="tg-description">
                                                    <p>{{$about->bannerinfo}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-box">
                                            <div class="tg-boxtitle">
                                                <h3>Company Overview</h3>
                                            </div>
                                            <div class="tg-description">
                                                <blockquote><q>{{$about->bloquote}}</q></blockquote>
                                                <p>{{$about->companyoverview}}</p>
                                            </div>
                                        </div>
                                        <div class="tg-box">
                                            <div class="tg-boxtitle">
                                                <h3>Our Skills</h3>
                                            </div>
                                            <div id="tg-skills" class="tg-skills">
                                                <div class="tg-skill">
                                                    <h4>Selling</h4>
                                                    <div class="tg-skillholder" data-percent="95%">
                                                        <div class="tg-skillbar">
                                                            <h5>95%</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <h4>Strategy</h4>
                                                    <div class="tg-skillholder" data-percent="85%">
                                                        <div class="tg-skillbar">
                                                            <h5>85%</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <h4>Smart Play</h4>
                                                    <div class="tg-skillholder" data-percent="75%">
                                                        <div class="tg-skillbar">
                                                            <h5>75%</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <h4>Future Oriented</h4>
                                                    <div class="tg-skillholder" data-percent="95%">
                                                        <div class="tg-skillbar">
                                                            <h5>95%</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <h4>Strong Planing</h4>
                                                    <div class="tg-skillholder" data-percent="85%">
                                                        <div class="tg-skillbar">
                                                            <h5>85%</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <h4>Low Risk</h4>
                                                    <div class="tg-skillholder" data-percent="45%">
                                                        <div class="tg-skillbar">
                                                            <h5>45%</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-box">
                                            <div class="tg-boxtitle">
                                                <h3>Our Mission</h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>{{$about->ourmission}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                                <aside id="tg-sidebar" class="tg-sidebar">
                                    <div class="tg-widget tg-widgetmenu">

                                    </div>
                                    <div class="tg-widget tg-widgetbrochure">
                                        <a href="javascript:void(0);">Company Brochure</a>
                                    </div>
                                    <div class="tg-widget tg-widgetreadytohelp">
                                        <h3>Always Ready To Help!</h3>
                                        <div class="tg-description"><p>Consectetur adipisicing elit sed dotas eusmod @
                                                <a href="query@domain.com">query@domain.com</a> OR call anytime 0800
                                                12345 678.</p></div>
                                        <a href="#">Contact Now!</a>
                                    </div>
                                    <div class="tg-widget tg-widgettestimonials">
                                        <div class="tg-widgettitle">
                                            <h3>Testimonials</h3>
                                        </div>
                                        @foreach($TestimonyData as $key => $testimony)
                                        <div class="tg-testimonial" id="{{++$key}}">
                                            <figure><img src="{{asset('/images/testimonials/'.$testimony->testheroimage)}}" alt="image description" style="width:100%; height:auto;"></figure>
                                            <blockquote><q>{{$testimony->testimony}}</q></blockquote>
                                            <div class="tg-reviewerinfo">
                                                <figure class="tg-reviewerdp"><img
                                                                src="{{asset('/images/testimonials/'.$testimony->testownerimage)}}" alt="image description" style="width:50px; height:50px;">
                                                </figure>
                                                <div class="tg-nameanddesignation">
                                                    <strong>{{$testimony->testowner}}</strong>
                                                    <span>{{$testimony->testownerinfo}}</span>
                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </main>



@endsection