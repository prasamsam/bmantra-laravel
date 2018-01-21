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
                                <h2>User Settings</h2>
                                <div class="tg-eventscheduletabs">
                                    <div class="tab-content tg-eventschedulecontent">
                                        <div role="tabpanel" class="tab-pane active" id="dayone">
                                            <div class="tg-eventvenuetabs">
                                                <div class="tab-content tg-eventvenuecontent">
                                                    <div role="tabpanel" class="tab-pane active" id="halla">
                                                        <div>
                                                            <h3>Update Info</h3>
                                                        </div>
                                                        @include($appType.'.Page.Messages.validationMessage')
                                                        @include($appType.'.Page.Messages.sessionMessage')
                                                        <form action="{{route('client-setting')}}" method="post"
                                                              class="tg-formtheme ">
                                                            {{csrf_field()}}
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                               <div class="form-group">
                                                                <input type="hidden" name="id"
                                                                       value="{{$ClientData->id}}">
                                                               </div>
                                                                <div class="form-group">
                                                                    <input type="text" id="Firstname" name="Firstname"
                                                                           value="{{!empty(old('Firstname')) ? old('Firstname') : $ClientData->firstname}}"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="First Name">
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <div class="form-group">
                                                                    <input type="text" id="Middlename" name="Middlename"
                                                                           value="{{!empty(old('Middlename')) ? old('Middlename') : $ClientData->middlename}}"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Middle Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <div class="form-group">
                                                                    <input type="text" id="Lastname" name="Lastname"
                                                                           value="{{!empty(old('Lastname')) ? old('Lastname') : $ClientData->lastname}}"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <div class="form-group">
                                                                    <input type="email" id="Email" name="Email"
                                                                           value="{{!empty(old('Email')) ? old('Email') : $ClientData->email}}"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Enter Your Email Address">
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <button type="submit"
                                                                        class="tg-btnregular tg-btnregular-sm tg-active">
                                                                    Update User Info
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-eventscheduletabs">
                                    <div class="tab-content tg-eventschedulecontent">
                                        <div role="tabpanel" class="tab-pane active" id="dayone">
                                            <div class="tg-eventvenuetabs">
                                                <div class="tab-content tg-eventvenuecontent">
                                                    <div role="tabpanel" class="tab-pane active" id="halla">
                                                        <div>
                                                            <h3>Reset Password</h3>
                                                        </div>
                                                        <form action="{{route('client-update-password')}}" method="post"
                                                              class="tg-formtheme ">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="id" value="{{$ClientData->id}}">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <div class="form-group">
                                                                    <input type="password" id="OldPassword" name="OldPassword"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Old Password">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <div class="form-group">
                                                                    <input type="password" id="password" name="password"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <div class="form-group">
                                                                    <input type="password" id="cpassword"
                                                                           name="password_confirmation"
                                                                           class="form-control tg-plceholdercolor"
                                                                           placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                <button type="submit"
                                                                        class="tg-btnregular tg-btnregular-sm tg-active">
                                                                    Reset Password
                                                                </button>
                                                            </div>
                                                        </form>
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
                            <div class="tg-widget tg-widgettestimonials">
                                <div class="tg-widgettitle">
                                    <h3>Testimonials</h3>
                                </div>
                                <div class="tg-testimonial">
                                    <figure><img src="images/placeholder6.jpg"
                                                 alt="image description"></figure>
                                    <blockquote><q>Adipisicing elit sed eiusmod lota teapor
                                            intcididunt labore dolore
                                            magnatam aliqua enim minim.</q></blockquote>
                                    <div class="tg-reviewerinfo">
                                        <figure class="tg-reviewerdp"><a href="#"><img
                                                        src="images/authors/img-01.jpg"
                                                        alt="image description"></a>
                                        </figure>
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