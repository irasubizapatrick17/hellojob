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

</head>
<body class="notransition black">
<div class="col-md-6 col-md-offset-3" style="padding-top: 130px;">
  <div class="panel panel-default">
    <div class="panel-body" style="width: 638px;margin-left: 28px;">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="col-md-6">
          <div class="form-group">
            <div class="btn-group-justified" style="margin-left: -11px;">
              <a href="explore.html" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign Up with Facebook</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="btn-group-justified" style="margin-left: 11px;">
              <a href="explore.html" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign Up with Google</a>
            </div>
          </div>
        </div>
        <div class="signOr">OR</div>

        <div class="form-group {{ $errors->has('permission') ? ' has-error' : '' }}">
          <select id="permission" type="text" name="permission" value="{{ old('permission') }}" required class="form-control" >
            <option class="">Select Title </option>
            <option value="employer">Employer</option>
            <option value="jobseeker">Job Seeker</option>
          </select>
          @if ($errors->has('permission'))
            <span class="help-block">
              <strong>{{ $errors->first('permission') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('function') ? ' has-error' : '' }}">
          <select id="function" type="text" name="function" value="{{ old('function') }}" required class="form-control" >
            <option>Select Type</option>
            <option value="Individual">Individual</option>
            <option value="Company">Company</option>

            @if ($errors->has('function'))
              <span class="help-block">
              <strong>{{ $errors->first('function') }}</strong>
            </span>
            @endif
          </select>
        </div>
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="form-control" placeholder="Username">
          @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="Email">
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}" >
          <input id="password" type="password"  name="password" required class="form-control" placeholder="Password">
          @if ($errors->has('password'))
            <span class="help-block">
           <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input id="password-confirm" type="password" name="password_confirmation" required class="form-control " placeholder="Confirm Password" style="width: 639px;margin-left: -12px;">
          </div>
          </div>

        <div class="form-group">
          <div class="btn-group-justified" style="width: 650px;margin-left: 22px;">
            <button type="submit" class="btn btn-lg btn-green" style="width: 638px;margin-left:-22px;">
              Register
            </button>
          </div>
        </div>
        <p class="help-block">Already a HelloJob member? <a href="{{ url('/login') }}" class="text-green">Sign In</a></p>
      </form>
    </div>
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
<script src="/assets/js/signup.js" type="text/javascript"></script>
</body>
</html>