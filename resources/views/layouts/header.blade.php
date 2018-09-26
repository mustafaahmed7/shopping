<div id="header">
    <header class="header-row">
        <div class="container">
            <div class="table-container">
                <!-- Top Bar
                  ============================================= -->
                <nav class="htop col-md-9 pull-right flip inner" id="top"><span
                            class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            @if(Route::has('login'))
                                @auth
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu"  type="button" aria-labelledby="navbarDropdown">
                                            <a href="{{ url('/profile') }}">Profile</a><br>
                                            @if(Auth::user()->roles->roleName == "Admin")
                                                <a href="{{ url('/admin') }}">Admin Panel</a><br>
                                            @endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a><br>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>

                                    </li>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        @endauth
                                    @endif
                        </ul>
                    </div>


                    <div class="pull-right flip left-top">
                        <div class="links">
                            <ul>
                                <!--<li><a href="#" target="_self">Custom Links</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><h3>Custom Block</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="image/banner/sb.jpg"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>This is a CMS block edited from theme admin panel. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p><a target="" href="#">Read More</a>
                                                            </p></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>-->
                                @guest
                                    @else
                                <li><a href="/wishlist" id="wishlist-total">Wish List (0)</a></li>
                                    @endguest
                            </ul>
                        </div>
                        <!--<div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span>
                                    <img src="image/flags/gb.png"
                                         alt="English" title="English">English
                                    <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select"
                                            type="button" name="GB"><img src="image/flags/gb.png"
                                            alt="English" title="English" /> English</button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select"
                                            type="button" name="GB"><img src="image/flags/ar.png"
                                            alt="Arabic" title="Arabic" /> Arabic</button>
                                </li>
                            </ul>
                        </div>-->
                        <!--<div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> $ USD <i
                                            class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">
                                        € Euro
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">
                                        £ Pound Sterling
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">
                                        $ US Dollar
                                    </button>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </nav><!-- Top Bar End -->

                <!-- Logo
                ============================================= -->
                <div class="col-table-cel col-md-3 col-sm-4 col-xs-12 inner">
                    <div id="logo"><a href="/"><img class="img-responsive"
                                                    src="{{ asset('img/logo.png')}}" title="Bigshop"
                                                    alt="Bigshop"/></a></div>
                </div><!-- Logo End -->

                <!-- Phone and Email
                ============================================= -->
                <div class="col-md-4 col-md-push-5 col-sm-8 col-xs-12 inner">
                    <div class="links_contact pull-right flip">
                        <ul>
                           <!-- <li class="mobile"><i class="fa fa-phone"></i>+91 98989898</li>
                            <li class="email"><a href="mailto:support@bigshop.com"><i class="fa fa-envelope"></i>support@bigshop.com</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <!-- Phone and Email End-->

                <div class="clearfix visible-sm-block visible-xs-block"></div>

                <!-- Search Bar
                ============================================= -->

                <div class="col-md-5 col-md-pull-4 col-sm-8 col-xs-12 inner2">
                    <div id="search" class="input-group">
                        <form method="GET" action="/search">
                        <input id="filter_name" type="text" name="search" value="" placeholder="Search"
                               class="form-control input-lg"/>
                        <button type="submit" class="button-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div><!-- Search Bar End-->

                <!-- Mini Cart
                ============================================= -->

                {{--@yield('minicart')--}}
                @include('layouts.minicart')

            <!-- Mini Cart End-->
            </div>
        </div>
    </header>

    <!-- Main Menu
    ============================================= -->
    <div class="container">
        @include('layouts.navbar')
    </div><!-- Main Menu End-->
</div><!-- Header End-->