@extends($appType.'.Layouts.client_master')

@section('content')

<header>
    <div class="clearfix"></div>
    <div class="container-fluid tg-loginbanner">
        <div class="row ">
            <div class="col-sm-12 col-xs-12 ">
                <div class="tg-navigationarea tg-loginbanner">
                    <strong class="tg-logo">
                        <a href="index.html"><img src="images/logo.png" alt="image description"></a>
                    </strong>
                </div>
            </div>
        </div>
        @include($appType.'.Include.clientSessionMessage')
        <div class="container">
            <div id="tg-logintext">
                <h1 class="text-center">Welcome!</h1>
            </div>
            <div class="tg-logininfo">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                    <div class="row">
                        <form method="post" action="{{route('user-login')}}" class="tg-formtheme ">
                            {{csrf_field()}}
                            <fieldset>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control tg-plceholdercolor"
                                               placeholder="Enter Your Email Address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control tg-plceholdercolor"
                                               placeholder="Enter Your Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                    <div class="form-group">
                                        <label>
                                        <input type="checkbox" name="remember"
                                               > Remember Me</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="forgotpassword"
                                         class="col-xs-12 col-xs-push-5 col-sm-12 col-sm-push-5 col-md-12 col-md-push-5 col-lg-6  col-lg-push-5">
                                        <a href="">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                    <button type="submit" class="tg-btnregular tg-btnregular-md tg-active">Sign In</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection