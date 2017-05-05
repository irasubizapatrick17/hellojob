
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="patrick">

    <link rel="shortcut icon" href="/sets/images/favicon_1.ico">

    <title>  @include('layouts.title');</title>
    <!--Form Wizard-->
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

    @include('layouts.employer-sidebar');


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
                        

                        <h4 class="page-title">COMPANY PROFILE</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Description </a>
                            </li>
                            <li>
                                <a href="#">OF The company</a>
                            </li>
                            <li class="active">

                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box" style="width: 1000px;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="m-t-0 header-title"><b>Company  Profile</b></h4>
                                    <p class="text-muted font-13">
                                    </p>
                                    <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 class="panel-title">Create Company Profile</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form  id="basic-form" role="form" action="" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                                            <div class="col-md-6">
                                                                <label>Company Logo</label>
                                                                <input type="file" name="company_profile" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Company Name</label>
                                                                <input type="text" name="company_name" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Telephone</label>
                                                                <input type="text" name="telephone" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                                <input type="text" name="email" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Location/Address</label>
                                                                <input type="text" name="location" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Company  Working Are</label>
                                                                <select name="working_area" class="form-control" value="">
                                                                    <option value="ICT" >ICT</option>
                                                                    <option value="ELECTRICITY" >ELECTRICITY</option>
                                                                    <option value="AGRICULTURE " >AGRICULTURE</option>
                                                                    <option value="CONSTRUCTION" >CONSTRUCTION</option>
                                                                    <option value="OTHER" >OTHER</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label>Company Description </label>
                                                                <textarea name="company_bio" value="" class="form-control">

                                                                </textarea>
                                                            </div>
                                                            <div class="col-md-12"  style="margin-left: 38%;margin-top: 28px;">
                                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                                                                <button type="reset" name="cancel" value="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <!-- Custom width modal -->
                                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal" style="margin-left: 750px;">CREATE COMPANY PROFILE</button>
                                    <!-- sample modal content -->
                                    <?php $i=0;?>
                                    @foreach($company AS $value)
                                    <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#editcompany_profile<?php echo $i;?>" style="margin-left: 750px; margin-top:20px;">UPDATE COMPANY PROFILE</button>
                                    <!-- sample modal content -->

                                        <div class="col-md-4">

                                            <center>
                                                <img src="./company/{{$value->company_profile}}" class="img-circle" style="margin-left: -207px;width: 100px;">
                                            </center>
                                            <h5 style="color: steelblue"> Company Name :{{$value->company_name}}</h5>
                                            <h5 style="color: steelblue">Email  : {{$value->email}}</h5>
                                            <h5 style="color: steelblue">Telephone : {{$value->telephone}}</h5>
                                            <h5 style="color: steelblue">Location : {{$value->location}}</h5>
                                            <h5 style="color: steelblue">Working_area : {{$value->working_area}}</h5>
                                            <h5  style="color: steelblue"> {{$value->company_bio}}</h5>
                                        </div>


                                    <div id="editcompany_profile<?php echo $i;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 class="panel-title">Edit Company Profile</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form  id="basic-form" role="form" action="/company_profile/{{$value->id}}" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="_method" value="PUT" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                                            <div class="col-md-6">
                                                                <label>Company Logo</label>
                                                                <input type="file" name="company_profile"  class="form-control" value="./company/{{$value->company_profile}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Company Name</label>
                                                                <input type="text" name="company_name"  class="form-control" value="{{$value->company_name}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Telephone</label>
                                                                <input type="text" name="telephone"  class="form-control" value="{{$value->telephone}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                                <input type="text" name="email" class="form-control" value="{{$value->email}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Location/Address</label>
                                                                <input type="text" name="location" class="form-control" value="{{$value->location}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Company  Working Are</label>
                                                                <select name="working_area" class="form-control" value="">
                                                                    <option value="ICT" >ICT</option>                                                                    <option value="ICT" >ICT</option>
                                                                    <option value="ELECTRICITY" >ELECTRICITY</option>
                                                                    <option value="AGRICULTURE " >AGRICULTURE</option>
                                                                    <option value="CONSTRUCTION" >CONSTRUCTION</option>
                                                                    <option value="OTHER" >OTHER</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label>Company Description </label>
                                                                <textarea name="company_bio" value="" class="form-control">
                                                                {{$value->company_bio}}
                                                                </textarea>
                                                            </div>
                                                            <div class="col-md-12"  style="margin-left: 38%;margin-top: 28px;">
                                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                                                                <button type="reset" name="cancel" value="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    @endforeach

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
                            <img src="/sets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="tables-basic.html#">
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


<script src="/sets/js/jquery.core.js"></script>
<script src="/sets/js/jquery.app.js"></script>


<!--wizard initialization-->
<script src="/sets/pages/jquery.wizard-init.js" type="text/javascript"></script>
<!-- Modal-Effect -->
<script src="/sets/plugins/custombox/js/custombox.min.js"></script>
<script src="/sets//plugins/custombox/js/legacy.min.js"></script>

</body>
</html>