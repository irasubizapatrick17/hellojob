
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Admin">

    <link rel="shortcut icon" href="/sets/images/favicon_1.ico">

    <title>HelloJob | HandyMens web application</title>

    <!-- Plugins css-->
    <link href="/sets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="/sets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="/sets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="/sets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/sets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="/sets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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

    @include('layouts.admin-sidebar');
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

                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box" style="margin-top: 31px;">
                            <h4 class="m-t-0 header-title"><b>All users</b></h4>


                            <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="7">
                                <thead>
                                <tr>
                                    <th data-toggle="true">#</th>
                                    <th>Username</th>
                                    <th data-hide="phone">Email</th>
                                    <th data-hide="phone, tablet">User Type</th>
                                    <th data-hide="phone, tablet">Status</th>
                                    <th data-hide="phone, tablet">Change Status</th>
                                    <!-- <th data-hide="phone, tablet">test</th> -->
                                </tr>
                                </thead>
                                <div class="form-inline m-b-20">
                                    <div class="row">
                                        <div class="col-sm-6 text-xs-center">
                                            <div class="form-group">
                                                <label class="control-label m-r-5">Status</label>
                                                <select id="demo-foo-filter-status" class="form-control input-sm">
                                                    <option value="">Show all</option>
                                                    <option value="active">Active</option>
                                                    <option value="deactive">Disabled</option>
                                                    <!-- <option value="suspended">Suspended</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-xs-center text-right">
                                            <div class="form-group">
                                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control input-sm" autocomplete="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <tbody>

                                <?php $i=0;?>
                                @foreach($user AS $value)
                                    <tr  id="userid" data-userid="{{$value->id}}">
                                        <td>{{++$i}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}} </td>
                                        <td>
                                            <?php if($value->permission =='admin'){ ?>
                                            <p><span class="label label-table label-primary">{{$value->permission}}</span></p>
                                            <?php }

                                            else if($value->permission =='employer'){?>
                                            <p><span class="label label-table label-warning">{{$value->permission}}</span></p>
                                            <?php }
                                            else { ?>
                                            <p><span class="label label-table label-info">{{$value->permission}}</span></p>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if($value->status =='active'){ ?>
                                            <p><span class="label label-table label-success">{{$value->status}}</span></p>
                                            <?php }

                                            else { ?>
                                            <p><span class="label label-table label-danger">{{$value->status}}</span></p>
                                            <?php } ?>
                                        </td>
                                        <td style="display: block !important">
                                            <?php if($value->status =='active'){ ?>
                                            <a href="" type="submit" onclick="deactivate({{$value->id}})"> <input type="checkbox"  data-plugin="switchery" data-color="#ED5565" data-secondary-color="#1AB394" />

                                            </a>
                                            <?php } else { ?>
                                            <a href=""   type="submit"  onclick="activate({{$value->id}})">  <input type="checkbox" data-plugin="switchery" data-color="#ED5565" data-secondary-color="#ED5565" /></a>
                                            <?php } ?>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
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


    


</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>
<script type="text/javascript">
    var token = '{{Session::token()}}';
    var url = '{{ route('deactivate')}}';
    var url1 = '{{ route('activate')}}';
</script>
<script type="text/javascript">
    function deactivate(userid) {
        var url             = "/deactivate";
        var $status         = {};
        $status.id          = userid;


        $.ajax({
            type: "POST",
            headers:{"X-CSRF-TOKEN":token},
            url: url,
            data: $status,
            cache: false,
            success: function(data){
                window.location.pathname = '/allusers';
            }
        });
        return false;
    };
</script>
<script type="text/javascript">
    function activate(userid) {
        var url             = "/activate";
        var $status         = {};
        $status.id          = userid;

        $.ajax({
            type: "POST",
            headers:{"X-CSRF-TOKEN":token},
            url: url1,
            data: $status,
            cache: false,
            success: function(data){
                window.location.pathname = '/allusers';
            }
        });
        return false;
    };
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


<script src="/sets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="/sets/plugins/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="/sets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="/sets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="/sets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="/sets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="/sets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="/sets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

<script type="text/javascript" src="/sets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="/sets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="/sets/plugins/autocomplete/countries.js"></script>
<script type="text/javascript" src="/sets/pages/autocomplete.js"></script>

<script type="text/javascript" src="/sets/pages/jquery.form-advanced.init.js"></script>


<script src="/sets/js/jquery.core.js"></script>
<script src="/sets/js/jquery.app.js"></script>

<!--FooTable Example-->
<script src="/sets/pages/jquery.footable.js"></script>



</body>
</html>