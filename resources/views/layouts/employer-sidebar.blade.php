<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Welcome {{ Auth::user()->name }}</li>
                <li> <a href="/employer_dashboard"><i class="fa fa-home"></i>Dashboard</a></li>
                <li><a href="/company_jobseeker"> <i class="fa fa-user"></i> All Employee</a> </li>
                <li><a href="/company_profile"> <i class="fa fa-book"></i> Company Profile</a> </li>
                <li><a href="/records_for_hire"> <i class="fa fa-address-book"></i> Employee Hire</a> </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>