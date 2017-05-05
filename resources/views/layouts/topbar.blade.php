<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="/" class="logo"><i class="icon-magnet icon-c-logo"></i>HELLO JOB</a>
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">


                <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown top-menu-item-xs">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="/sets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li><!--
                                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li> -->
                                <!--  <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                 <li class="divider"></li> -->
                                <li>
                                    <a href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="font-family: sans-serif;"><i  class="zmdi zmdi-power"></i>Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    </form>
                                </li>
                            </ul>
                        </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>