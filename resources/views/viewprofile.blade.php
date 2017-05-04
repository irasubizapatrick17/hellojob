

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
            <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">



        </head>
        <body class="notransition no-hidden" >
        <div class="home-header" style="background-color: #1abc9c;">
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
        <div class="container">
            <div class="row" style="margin-top: 88px;">
                <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <div class="well profile" style="width: 900px;margin-left: -184px;">
                        <div class="col-sm-12">
                            @foreach($job_seeker AS $value)
                            <div class="col-xs-12 col-sm-8">
                                <h2>{{$value->first_name}}  {{$value->last_name}}</h2>
                                <h5> Gender :{{$value->gender}}  </h5>
                                <h5>Date of birth : {{$value->dob}} </h5>
                                <h5>Nationality :{{$value->nationality}} </h5>
                                <p><strong>About: </strong>  {{$value->Academic}} </p>
                                <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                                <p><strong>Skills: </strong>
                                    <span class="tags">{{$value->academic}} ,{{$value->subject}} </span>
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-4 text-center">
                                <figure>
                                    <img src="/jobseekers/{{$value->profile}}" alt="avatar"  class="img-circle img-responsive">
                                    <figcaption class="ratings">
                                        <p>Ratings
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star-o"></span>
                                            </a>
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-xs-12 divider text-center">
                            <div class="col-xs-12 col-sm-4 emphasis" style="margin-left: 35%;">
                                <p><small>Hire me </small></p>
                                {{--<button href="/login" class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Hire me  </button>--}}
                                <a  href="/register" class="btn btn-success btn-block" role="button"> <span class="fa fa-plus-circle"></span> Hire me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-footer" style=" margin-top: 40px;" >
            <div class="home-wrapper">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="osLight footer-header">Company</div>
                        <ul class="footer-nav pb20">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Blog</a></li>
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
        <style type="text/css">
            @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
            body
            {
                font-family: 'Lato', 'sans-serif';
            }
            .profile
            {
                min-height: 355px;
                display: inline-block;
            }
            figcaption.ratings
            {
                margin-top:20px;
            }
            figcaption.ratings a
            {
                color:#f1c40f;
                font-size:11px;
            }
            figcaption.ratings a:hover
            {
                color:#f39c12;
                text-decoration:none;
            }
            .divider
            {
                border-top:1px solid rgba(0,0,0,0.1);
            }
            .emphasis
            {
                border-top: 4px solid transparent;
            }
            .emphasis:hover
            {
                border-top: 4px solid #1abc9c;
            }
            .emphasis h2
            {
                margin-bottom:0;
            }
            span.tags
            {
                background: #1abc9c;
                border-radius: 2px;
                color: #f5f5f5;
                font-weight: bold;
                padding: 2px 4px;
            }
            .dropdown-menu
            {
                background-color: #34495e;
                box-shadow: none;
                -webkit-box-shadow: none;
                width: 250px;
                margin-left: -125px;
                left: 50%;
            }
            .dropdown-menu .divider
            {
                background:none;
            }
            .dropdown-menu>li>a
            {
                color:#f5f5f5;
            }
            .dropup .dropdown-menu
            {
                margin-bottom:10px;
            }
            .dropup .dropdown-menu:before
            {
                content: "";
                border-top: 10px solid #34495e;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                position: absolute;
                bottom: -10px;
                left: 50%;
                margin-left: -10px;
                z-index: 10;
            }
        </style>
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