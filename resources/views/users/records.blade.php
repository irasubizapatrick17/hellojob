
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/sets/images/favicon_1.ico">

    <title>HelloJob | HandyMens web application</title>
    <link href="/sets/plugins/custombox/css/custombox.css" rel="stylesheet">
    <link href="/sets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/sets/css/responsive.css" rel="stylesheet" type="text/css" />


    <script src="assets/js/modernizr.min.js"></script>
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

    @include('layouts.employer-sidebar');
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">

                                <div class="col-lg-12">
                                    <h4 class="m-t-0 header-title"><b>JOB SEEKER HIRED</b></h4>
                                    <p class="text-muted font-13">
                                       This is the list of employee  we hire .
                                    </p>
                                    <!-- Full width modal -->
                                    @if (Session::has('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <a href="" class="close" data-dismiss="alert" aria-label="close">
                                                &times;
                                            </a>
                                            {{ Session::get('message') }}
                                        </div>

                                    @endif
                                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal"><i  class="fa fa-plus"></i> Hire</button>
                                    <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 class="panel-title">Hire</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                            <div class="col-md-12">
                                                                <label>Job Seeker</label>
                                                                <select name="job_seeker_id" id="job_seeker_id" value="" class="form-control" >
                                                                    @foreach($job_seeker AS $value)
                                                                        <option value="{{$value->id}}">{{$value->first_name}} {{$value->last_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div></br>
                                                            <br>
                                                            <div class="col-md-12">
                                                                <label></label>
                                                                <input type="hidden" class="form-control" value="pending" name="status" readonly>
                                                            </div>

                                                            <div class="col-md-12" align="center" style="margin-top: 9px;">
                                                                <input type="submit" name="submit" class="btn btn-primary" value="submit">
                                                                <input type="reset" name="reset" class="btn btn-danger" value="reset" data-dismiss="modal">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <div class="p-20">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
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
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-10.jpg" alt="">
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
<script src="sets/js/jquery.min.js"></script>
<script src="sets/js/bootstrap.min.js"></script>
<script src="sets/js/detect.js"></script>
<script src="sets/js/fastclick.js"></script>
<script src="sets/js/jquery.slimscroll.js"></script>
<script src="sets/js/jquery.blockUI.js"></script>
<script src="sets/js/waves.js"></script>
<script src="sets/js/wow.min.js"></script>
<script src="sets/js/jquery.nicescroll.js"></script>
<script src="sets/js/jquery.scrollTo.min.js"></script>

<script src="/sets/js/jquery.core.js"></script>
<script src="/sets/js/jquery.app.js"></script>

<!-- Modal-Effect -->
<script src="/sets/plugins/custombox/js/custombox.min.js"></script>
<script src="/sets/plugins/custombox/js/legacy.min.js"></script>
</body>
</html>