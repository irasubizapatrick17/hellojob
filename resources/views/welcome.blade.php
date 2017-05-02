<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>HelloJob | HandyMens web application</title>
    <link rel="shortcut icon" href="/sets/images/favicon_1.ico">
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/assets/css/simple-line-icons.css" rel="stylesheet">
    <link href="/assets/css/fullscreen-slider.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">


</head>
<body class="notransition no-hidden">

<!-- Hero -->

<div id="hero-container">
    <ul class="cb-slideshow">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
    </ul>
    <div class="home-header">
        <a href="#">
            <a href="/">
                <div class="home-logo osLight">Hello Job</div>
            </a>
            <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
            <div class="home-nav">
                <ul>
                    <li><a href="{{ url('/register') }}">Sign Up</a></li>
                    <li><a href="{{ url('/login') }}">Sign In</a></li>
                </ul>
            </div>
    </div>
    <div class="home-caption">
        <div class="home-title">We got this for you</div>
        <div class="home-subtitle">A quick search of skilled handymen for a specific task</div>
        <a href="#" class="btn btn-lg btn-black">Learn More</a>
    </div>
    <div class="search-panel">
        <form class="form-inline" role="form">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-5">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="default">Job Type</option>
                            <option value="1">Electrician</option>
                            <option value="2">Plumber</option>
                            <option value="3">Cleaner</option>
                            <option value="4">Gardener</option>
                            <option value="5">tech company services</option>
                            <option value="6">House worker</option>
                            <option value="7">Baby sitter</option>
                            <option value="8">cleaner</option>
                            <option value="9">Gardeners</option>
                            <option value="10">Gatekeepers </option>
                            <option value="11">Mecanician</option>
                            <option value="12">Constructions</option>
                            <option value="13">Charpentier</option>
                            <option value="14">Painter</option>
                            <option value="15">Macon</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group hidden-xs adv">
                        <select class="form-control">
                            <option value="default">Location</option>
                            <option value="1">Nyarugenge</option>
                            <option value="2">Gasabo</option>
                            <option value="3">Kicukiro</option>
                            <option value="4">Bugesera</option>
                            <option value="5">Gatsibo</option>
                            <option value="6">Kayonza</option>
                            <option value="7">Kirehe</option>
                            <option value="8">Ngoma</option>
                            <option value="9">Nyagatare</option>
                            <option value="10">Rwamagana</option>
                            <option value="11">Burera</option>
                            <option value="12">Gasabo</option>
                            <option value="13">Gicumbi</option>
                            <option value="14">Musanze</option>
                            <option value="15">Rulindo</option>
                            <option value="16">Nyabihu</option>
                            <option value="17">Gisagara</option>
                            <option value="18">Huye</option>
                            <option value="19">Kamonyi</option>
                            <option value="20">Muhanga</option>
                            <option value="21">Nyamagabe</option>
                            <option value="22">Nyanza</option>
                            <option value="23">Nyaruguru</option>
                            <option value="24">Ruhango</option>
                            <option value="25">Karongi</option>
                            <option value="26">Ngororero</option>
                            <option value="27">Rubavu</option>
                            <option value="28">Nyamasheke</option>
                            <option value="29">Rusizi</option>
                            <option value="30">Rutsiro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <a href="/search_job_seeker"" class="btn btn-green btn-block">Search</a>
                        <a href="#" class="advanced_button btn-block btn btn-o btn-white pull-right visible-xs" id="advanced">Advanced Search <span class="fa fa-angle-up"></span></a>
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>
<div class="highlight">
    <div class="h-title osLight">Hire a Trusted HandyMan with HelloJob</div>
</div>

<!-- Content -->

<div class="home-wrapper">
    <div class="home-content">
        <h4 class="text-left pt20 pb20">Top Handymens</h4>
        <div class="row pb40">
            <div class="col-md-9">
                <div class="notificationsWidget">
                    @foreach($job_seeker as $value)
                        <div class="notification">
                            <div class="notifyContent">
                                <div class="notifyBody">
                                    <img class="avatar pull-left" src="./jobseekers/{{$value->profile}}" alt="avatar">
                                    <div class="notify pull-left">
                                        <div class="name">{{$value->first_name}} {{$value->last_name}}</div>
                                        <div class="message">{{$value->subject}} {{$value->position}}</div>
                                        <div class="title">{{$value->nationality}}</div>
                                    </div>
                                    <div class="rating col-md-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        ({{$value->id}})
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-o btn-success">View Profile</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <h4 class="text-right pb20" style="margin-top: -50px;">Featured Company</h4>
            @foreach($company as $value)
                <div class="col-xs-12 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body" style="padding: 0px;">
                            <img src="./company/{{$value->company_profile}}" class="img-responsive">
                        </div>
                        <div class="panel-footer">
                            {{$value->company_name}} , {{$value->location}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="row pb40" style="margin-right: 0px;margin-left: 0px;">
    <div class="col-md-7 custom-how-bg" style="padding-left: 0px;padding-right: 0px;">
        <div class="p-custom">
            <h3>How its Works ?</h3>
            <p>
                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            </p>
        </div>
        <button class="btn btn-success btn-block">Find out More</button>
    </div>
    <div class="col-md-5" style="padding: 0px;">
        <img src="/assets/images/page.png" class="img-responsive">
    </div>
</div>
<div class="row pb40" style="margin-right: 0px;margin-left: 0px;">
    <h3 class="text-center" style="padding-top: 40px;padding-bottom: 40px;">Company we've Helped to get HandyMens</h3>
    <div class=" col-md-8 col-md-offset-2">
        <div class="row no-margins" style="margin-bottom:0px;">
            @foreach($company as $value)
                <div class="col-md-3">
                    <img src="./company/{{$value->company_profile}}" class="img-responsive client-logo">
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Footer -->

<div class="home-footer">
    <div class="home-wrapper">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <div class="osLight footer-header">Company</div>
                <ul class="footer-nav pb20">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <div class="osLight footer-header">Discover</div>
                <ul class="footer-nav pb20">
                    <li><a href="#">Become a Member</a></li>
                    <li><a href="#">Properties List</a></li>
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Widgets</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="osLight footer-header">Get in Touch</div>
                <ul class="footer-nav pb20">
                    <li class="footer-phone"><span class="fa fa-phone"></span> +250 782 031 200</li>
                    <li class="footer-address osLight">
                        <p>Kacyiru, KG 7 Ave</p>
                        <p>Telecom house,6floor</p>
                        <p>Rwanda</p>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="osLight footer-header">Subscribe to Our Newsletter</div>
                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <a href="#" class="btn btn-black btn-block">Subscribe</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="copyright">HandyMens web application<br> &copy; 2017</div>
    </div>
</div>

<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="signinLabel">Sign In</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="explore.html" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign In with Facebook</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="explore.html" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign In with Google</a>
                        </div>
                    </div>
                    <div class="signOr">OR</div>
                    <div class="form-group">
                        <input type="text" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Remember me</label></div>
                            </div>
                            <div class="col-xs-6 align-right">
                                <p class="help-block"><a href="#" class="text-green">Forgot password?</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="explore.html" class="btn btn-lg btn-green">Sign In</a>
                        </div>
                    </div>
                    <p class="help-block">Don't have an account? <a href="#" class="modal-su text-green">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="signupLabel">Sign Up</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="explore.html" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign Up with Facebook</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="explore.html" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign Up with Google</a>
                        </div>
                    </div>
                    <div class="signOr">OR</div>
                    <div class="form-group">
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="explore.html" class="btn btn-lg btn-green">Sign Up</a>
                        </div>
                    </div>
                    <p class="help-block">Already a HelloJob member? <a href="#" class="modal-si text-green">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery-2.1.1.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/jquery-ui-touch-punch.js"></script>
<script src="/assets/js/jquery.placeholder.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/jquery.touchSwipe.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
<script src="/assets/js/infobox.js"></script>
<script src="/assets/js/jquery.visible.js"></script>
<script src="/assets/js/home.js" type="text/javascript"></script>
</body>
</html>