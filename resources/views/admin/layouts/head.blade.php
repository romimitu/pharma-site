 <!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <h1><a href="/home">Medicon</a></h1>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="/admin/images/avatar9.jpg" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i> Log Out </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix"> </div>