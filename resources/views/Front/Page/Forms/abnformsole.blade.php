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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="tg-breadcrumb">

                    </ol>
                </div>
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
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div class="tg-shortcodetitle">
                            <h2>Tabs Style</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-themetabs tg-themetabsstyleone">
                                    <ul class="tg-themetabnav" role="tablist">
                                        <li role="presentation" class="active"><a href="#abnsole" aria-controls="abnsole" role="tab" data-toggle="tab">Sole Trader</a></li>
                                        <li role="presentation"><a href="#abnpartnership" aria-controls="abnpartnership" role="tab" data-toggle="tab">Partnership</a></li>
                                        <li role="presentation"><a href="#abncompany" aria-controls="abncompany" role="tab" data-toggle="tab">Company</a></li>
                                    </ul>
                                    <div class="tab-content tg-themetabcontent">
                                        <div role="tabpanel" class="tab-pane active" id="abnsole">
                                                <form action="" method="">
                                                    <div class="row">
                                                        <div class="col-md-12 ">
                                                            <div class="form-group col-md-1">
                                                                <select  class="form-control" name="title" id="title">
                                                                    <option value="1">Mr</option>
                                                                    <option value="2">Miss</option>
                                                                    <option value="3">Mrs</option>
                                                                </select>
                                                            </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Your First Name">
                                                    </div>

                                                            <div class="form-group col-md-3">
                                                                <input type="text" class="form-control" id="name" name="middlename" placeholder="Enter Your Middle Name">
                                                            </div>

                                                            <div class="form-group col-md-3">
                                                                <input type="text" class="form-control" id="name" name="lastname" placeholder="Enter Your Last Name">
                                                            </div>
                                                    </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter Your Username">
                                                    </div>
                                                </form>
                                            </div>

                                        <div role="tabpanel" class="tab-pane" id="abnpartnership">

                                            </div>
                                        <div role="tabpanel" class="tab-pane" id="abncompany">

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
                                <div class="tg-description"><p>Consectetur adipisicing elit sed dotas eusmod @ <a href="query@domain.com">query@domain.com</a> OR call anytime 0800 12345 678.</p></div>
                                <a href="#">Contact Now!</a>
                            </div>
                            <div class="tg-widget tg-widgettestimonials">
                                <div class="tg-widgettitle">
                                    <h3>Testimonials</h3>
                                </div>
                                <div class="tg-testimonial">
                                    <figure><img src="images/placeholder6.jpg" alt="image description"></figure>
                                    <blockquote><q>Adipisicing elit sed eiusmod lota teapor intcididunt labore dolore magnatam aliqua enim minim.</q></blockquote>
                                    <div class="tg-reviewerinfo">
                                        <figure class="tg-reviewerdp"><a href="#"><img src="images/authors/img-01.jpg" alt="image description"></a></figure>
                                        <div class="tg-nameanddesignation">
                                            <strong>Mirian Worthey</strong>
                                            <span>C.E.O Loudmakers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection