<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/sets/images/favicon_1.ico">

    <title>HelloJob | HandyMens web application</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/sets/plugins/morris/morris.css">

    <link href="/sets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/responsive.css" rel="stylesheet" type="text/css" />


    <script src="/sets/js/modernizr.min.js"></script>
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-69506598-1', 'auto');
        ga('send', 'pageview');
    </script>


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include('layouts.topbar');
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include('layouts.jobseeker-sidebar');
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="crm-dashboard.html#">Action</a></li>
                                <li><a href="crm-dashboard.html#">Another action</a></li>
                                <li><a href="crm-dashboard.html#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="crm-dashboard.html#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="page-title">Dashboard</h4>
                        <p class="text-muted page-title-alt">Welcome to HandyMen  Job Seeker panel !</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-info">
                                            <i class="icon-layers"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                        <h4 class="m-t-0 m-b-5"><b>Active</b></h4>
                                        <h5 class="text-muted m-b-0 m-t-0">120 Deals</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-custom">
                                            <i class="icon-trophy"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                        <h4 class="m-t-0 m-b-5"><b>Won</b></h4>
                                        <h5 class="text-muted m-b-0 m-t-0">95 Deals</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">1/5</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-danger">
                                            <i class="icon-close"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                        <h4 class="m-t-0 m-b-5"><b>Lost</b></h4>
                                        <h5 class="text-muted m-b-0 m-t-0">85 Deals</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            © 2017. All rights reserved.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="crm-dashboard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-10.jpg" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/sets/js/jquery.min.js"></script>
<script src="/sets/js/bootstrap.min.js"></script>
<script src="/sets/js/detect.js"></script>
<script src="/sets/js/fastclick.js"></script>
<script src="/sets/js/jquery.slimscroll.js"></script>
<script src="/sets/js/jquery.blockUI.js"></script>
<script src="/sets/js/waves.js"></script>
<script src="/sets/js/wow.min.js"></script>
<script src="/sets/js/jquery.nicescroll.js"></script>
<script src="/sets/js/jquery.scrollTo.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script src="/sets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->

<script src="/sets/plugins/jquery-knob/jquery.knob.js"></script>

<!--Morris Chart-->
<script src="/sets/plugins/morris/morris.min.js"></script>
<script src="/sets/plugins/raphael/raphael-min.js"></script>

<script src="/sets/plugins/peity/jquery.peity.min.js"></script>

<script src="/sets/pages/jquery.dashboard_crm.js"></script>

<script src="/sets/js/jquery.core.js"></script>
<script src="/sets/js/jquery.app.js"></script>

<script>
    $(function() {
        $(".knob").knob();
    });
</script>



</body>
</html>