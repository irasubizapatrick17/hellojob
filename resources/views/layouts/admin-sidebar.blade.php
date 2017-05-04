<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Welcome {{ Auth::user()->name }}</li>

                <li> <a href="/admin_dashboard"><i class="fa fa-home"></i>Dashboard</a></li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-compass"></i> <span>Employers </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="employer_individual">Individual </a></li>
                        <li><a href="/employer_company">Company</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-vcard"></i> <span>Job seekers </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="job_seeker_individual">Individual </a></li>
                        <li><a href="/job_seeker_company">Company</a></li>
                    </ul>
                </li>
                <li> <a href="/allusers"><i class="fa fa-users"></i>All users</a></li>


            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>