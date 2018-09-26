<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin"> Admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a href="/">Visit Site</a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="label label-danger pull-left">15</span>
                <i class="fa fa-bell fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li class="dropdown-header">Orders</li>
                <li><a href="" style="display: block; overflow: auto;">
                        <span class="label label-warning pull-right">0</span>Pending</a></li>
                <li><a href=""><span class="label label-success pull-right">0</span>Completed</a></li>
                <li><a href=""><span class="label label-danger pull-right">3</span>Returns</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Customers</li>
                <li><a href=""><span class="label label-success pull-right">0</span>Customers Online</a></li>
                <li><a href=""><span class="label label-danger pull-right">0</span>Pending approval</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Products</li>
                <li><a href=""><span class="label label-danger pull-right">1</span>Out of stock</a></li>
                <li><a href=""><span class="label label-danger pull-right">11</span>Reviews</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Affiliates</li>
                <li><a href=""><span class="label label-danger pull-right">0</span>Pending approval</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="label label-danger pull-left">1</span>
                <i class="fa fa-envelope fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">

                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ url('/profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav in" id="side-menu">
                <li>
                    <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-tags fa-fw"></i>Catalog <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="/admin/category">Categories</a>
                        </li>
                        <li>
                            <a href="/admin/product">Products</a>
                        </li>
                        <li>
                            <a href="/admin/user">Users</a>
                        </li>
                        <li>
                            <a href="/admin/order">Orders</a>
                        </li>
                        <li>
                            <a href="/admin/shipping">Shipping</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>

                    <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Sales <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="/admin/coupon">Coupons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/media"><i class="glyphicon glyphicon-picture"></i> Media</a>

                </li>
                <li>
                    <a href="#"><i class="fa fa-share-alt fa-fw"></i>Marketing
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="/admin/mail"><i class="fa fa-envelope fa-fw"></i> Mail</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog fa-fw"></i>System
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="/admin/settings">Settings</a>
                        </li>
                        <li>
                            <a href="/admin/settings/slider">Slider</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
