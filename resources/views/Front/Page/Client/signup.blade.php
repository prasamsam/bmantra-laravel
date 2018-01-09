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
            <div class="container">
                <div id="tg-signuptext">
                    <h1 class="text-center">Sign up!</h1>
                </div>
                <div class="tg-logininfo">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <div class="row">
                            <form class="tg-formtheme ">
                                <fieldset>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control tg-plceholdercolor"
                                                   placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control tg-plceholdercolor"
                                                   placeholder="Enter Your Email Address">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control tg-plceholdercolor"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control tg-plceholdercolor"
                                                   placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-4">
                                        <button type="submit" class="tg-btnregular tg-btnregular-sm tg-active">Sign Up
                                        </button>
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