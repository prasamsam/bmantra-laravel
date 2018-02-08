@extends($appType.'.Layouts.master')

@section('content')

    <div class="tg-innerpagebanner tg-haslayout">
        <div class="tg-pagetitle tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
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
                <br>
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
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">

                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right" >
                        <div id="tg-content" class="tg-content" >
                            @foreach($NewsData as $key => $news)
                            <div class="tg-case tg-casedetail" id="{{++$key}}">
                                <article class="tg-post">
                                    <figure><a href="#"><img src="{{asset('/images/news/'.$news->newsimage)}}" alt="image description" style="width:100%; height:auto;"></a>
                                    </figure>
                                    <div class="tg-postcontent">
                                        <div class="tg-authordp">
                                                <img src="{{asset('/images/news/'.$news->newsauthorimage)}}" alt="image description" style="width:50px;height:50px;" >
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
                                <br>
                    @endforeach
                </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <div class="tg-widget tg-widgetbrochure">
                                <a href="javascript:void(0);">Company Brochure</a>
                            </div>
                            <div class="tg-widget tg-widgetreadytohelp">
                                <h3>Always Ready To Help!</h3>
                                <div class="tg-description"><p>Consectetur adipisicing elit sed dotas eusmod @ <a href="query@domain.com">query@domain.com</a> OR call anytime 0800 12345 678.</p></div>
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