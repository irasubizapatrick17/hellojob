
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>HelloJob | HandyMens web application</title>

    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/assets/css/simple-line-icons.css" rel="stylesheet">
    <link href="/assets/css/fullscreen-slider.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="notransition black">
<div class="col-md-4 col-md-offset-4" style="padding-top: 130px;">
    <div class="panel panel-default">
        <center>
          <img src="sets/images/logo.png" width="100px;" style="padding-top: 10px;padding-bottom: 10px;">
        </center>
        @if(count ($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                        <input  id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus class="form-control" placeholder="Your Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="password" type="password"  name="password" required  autofocus class="form-control" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Remember me</label></div>
                            </div>
                            <div class="col-xs-6 align-right">
                                <p class="help-block"><a href="{{ route('password.request') }}" class="text-green">Forgot password?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-green btn-block">
                            Login
                        </button>
                    </div>
                </div>
                <p class="help-block">Don't have an account? <a href="{{ url('/register') }}" class="text-green">Sign Up</a></p>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="signFooter">HandyMens web application<br>&copy; 2017</div>
</div>
<script src="/assets/js/jquery-2.1.1.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/jquery-ui-touch-punch.js"></script>
<script src="/assets/js/jquery.placeholder.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/jquery.touchSwipe.min.js"></script>
<script src="/assets/js/jquery.visible.js"></script>
<script src="/assets/js/signin.js" type="text/javascript"></script>
</body>
</html>