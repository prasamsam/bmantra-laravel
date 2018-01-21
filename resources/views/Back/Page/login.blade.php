<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/paper-dashboard.css')}}">


</head>
<body>

<div class="container">
    <div class="row">

    <div class="col-md-6 col-md-offset-3">
        <div class="jumbotron jumbotron-login">

            <div class="logo form-group">
                <h2>Login</h2>
                @if (session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
            </div>
            <form method="post" action="{{route('admin-login')}}" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter Your Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Your Password">
                </div>

                <div class="form-group">
                    <label for="remember">
                    <input type="checkbox" id="remember" name="remember" > Remember Me
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>

                <div class="form-group">
                    <a href="">Forgot Password?</a>
                </div>

            </form>

        </div>
    </div>
    </div>
</div>
</body>
</html>