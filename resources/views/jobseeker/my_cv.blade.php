
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="hellojob">

    <link rel="shortcut icon" href="/sets/images/favicon_1.ico">

    <title>HelloJob | HandyMens web application</title>

    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="/sets/plugins/jquery.steps/css/jquery.steps.css" />

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
                        

                        <h4 class="page-title">MY PROFILE</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="form-wizard.html#">Profile Inforamtion</a>
                            </li>
                            <li>
                                <a href="#"</a>
                            </li>
                        </ol>
                    </div>
                </div>



                <!-- Basic Form Wizard -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>MY PROFLE</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                This  Where your put you profile information
                            </p>

                            <form  id="basic-form" role="form" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div>
                                    <h3>Personal Information</h3>
                                    <section>

                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" value="" class="form-control" placeholder="Enter first name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" value="" class="form-control" placeholder="Last name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Profile</label>
                                            <input type="file" name="profile" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" name="email" value="" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control" value="">
                                                <option>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>DOB</label>
                                            <input type="date" name="dob" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Martial Status</label>
                                            <select name="personal_status" class="form-control" value="">
                                                <option>Select Satus</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" name="telephone" value="" class="form-control" placeholder="Ex: +250 7--- ---">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Nationality</label>
                                            <input type="text" name="nationality" value="" class="form-control" placeholder="Enter Country name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>District </label>
                                            <select name="district" class="form-control" value="">
                                                <option >Current Location</option>
                                                <option value="Nyarugenge">Nyarugenge</option>
                                                <option value="Gasabo">Gasabo</option>
                                                <option value="Kicukiro">Kicukiro</option>
                                                <option value="Bugesera">Bugesera</option>
                                                <option value="Gatsibo">Gatsibo</option>
                                                <option value="Kayonza">Kayonza</option>
                                                <option value="Kirehe">Kirehe</option>
                                                <option value="Ngoma">Ngoma</option>
                                                <option value="Nyagatare">Nyagatare</option>
                                                <option value="Rwamagana">Rwamagana</option>
                                                <option value="Burera">Burera</option>
                                                <option value="Gasabo">Gasabo</option>
                                                <option value="Gicumbi">Gicumbi</option>
                                                <option value="Musanze">Musanze</option>
                                                <option value="Rulindo">Rulindo</option>
                                                <option value="Nyabihu">Nyabihu</option>
                                                <option value="Gisagara">Gisagara</option>
                                                <option value="Huye">Huye</option>
                                                <option value="Kamonyi">Kamonyi</option>
                                                <option value="Muhanga">Muhanga</option>
                                                <option value="Nyamagabe">Nyamagabe</option>
                                                <option value="Nyanza">Nyanza</option>
                                                <option value="Nyaruguru">Nyaruguru</option>
                                                <option value="Ruhango">Ruhango</option>
                                                <option value="Karongi">Karongi</option>
                                                <option value="Ngororero">Ngororero</option>
                                                <option value="Rubavu">Rubavu</option>
                                                <option value="Nyamasheke">Nyamasheke</option>
                                                <option value="Rusizi">Rusizi</option>
                                                <option value="Rutsiro">Rutsiro</option>
                                            </select>
                                        </div>

                                    </section>
                                    <h3>Academic Information</h3>
                                    <section>
                                        <div class="col-md-6">
                                            <label>Study Level</label>
                                            <select name="academic" value="" class="form-control">
                                                <option>Select academic level</option>
                                                <option value="Primary">Primary</option>
                                                <option value="Secondary">Secondary</option>
                                                <option value="Bacherol">Bacherol</option>
                                                <option value="Masters">Masters</option>
                                                <option value="PHP">PHP</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" class="form-control" placeholder="Enter Your Subject">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Start Date</label>
                                            <input type="date" name="start_date" value="" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>End Date</label>
                                            <input type="date" name="end_date" value="" class="form-control">
                                        </div>
                                    </section>
                                    <h3>Experience Information</h3>
                                    <section>
                                        <div class="col-md-6">
                                            <label>Position</label>
                                            <input type="text" name="position" class="form-control" value="" placeholder="Enter your latest position">
                                        </div>
                                        <div class="col-md-6">
                                            <label>institution/Organization</label>
                                            <input type="text" name="institution" class="form-control" value="" placeholder="Enter name of the company/Organization">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Country</label>
                                            <input type="text" name="personal_country" class="form-control" value="" placeholder="Enter Organization Country">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Location</label>
                                            <input type="text" name="personal_location" value="" class="form-control" placeholder="Enter Organization Location">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Duration</label>
                                            <input type="text" name="duration" class="form-control" value="" placeholder="Enter Years">
                                        </div>
                                        <div class="col-md-6">
                                            <label></label>
                                            <input type="text" name="duration" class="form-control" value="" placeholder="Enter Years">
                                        </div>
                                    </section>
                                    <h3 type="submit" value="submit" name="submit">Finish</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox-h" type="checkbox">
                                                    <label for="checkbox-h">
                                                        I agree with the Terms and Conditions.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- End row -->

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
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
                        <div class="avatar">
                            <img src="/sets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="form-wizard.html#">
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

<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Modal title</h4>
    <div class="custom-modal-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</div>
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

<!--Form Wizard-->
<script src="/sets/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/sets/plugins/jquery-validation/js/jquery.validate.min.js"></script>

<!--wizard initialization-->
<script src="/sets/pages/jquery.wizard-init.js" type="text/javascript"></script>

<!-- Modal-Effect -->
<script src="/sets//plugins/custombox/js/custombox.min.js"></script>
<script src="/sets/plugins/custombox/js/legacy.min.js"></script>
</body>
</html>