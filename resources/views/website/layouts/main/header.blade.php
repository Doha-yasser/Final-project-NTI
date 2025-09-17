<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area bg-white">
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">

                            <form method="GET" action="{{ route('courses.index') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-gray pl-3" type="text"
                                        name="search" placeholder="Search for anything" value="{{ request('search') }}">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <div class="nav-right-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">
                                    <div class="shop-cart course-cart pr-3 mr-3 border-right border-right-gray">

                                    </div><!-- end course-cart -->
                                    <div class="shop-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn d-flex align-items-center">
                                                    <a href="{{ route('home') }}"><i class="la la-home fs-22"></i></a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                    <div class="shop-cart wishlist-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-heart-o"></i>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li>
                                                        <div class="media media-card">
                                                            <a href="course-details.html" class="media-img">
                                                                <img class="mr-3" src="images/small-img.jpg"
                                                                    alt="Cart image">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="course-details.html">The Complete
                                                                        JavaScript Course 2021: From Zero to
                                                                        Expert!</a></h5>
                                                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">
                                                                    $12.99 <span
                                                                        class="before-price fs-14">$129.99</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add
                                                            to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                    <li>
                                                        <div class="media media-card">
                                                            <a href="#" class="media-img">
                                                                <img class="mr-3" src="images/small-img.jpg"
                                                                    alt="Cart image">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="#">The Complete JavaScript Course 2021:
                                                                        From Zero to Expert!</a></h5>
                                                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">
                                                                    $12.99 <span
                                                                        class="before-price fs-14">$129.99</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add
                                                            to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist" class="btn theme-btn w-100">Got to wishlist <i
                                                                class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                    @if(session('user'))
                                    @include("website.layouts.navbar-component")
                                    @else
                                    <div class="btn-box d-flex align-items-center">
                                        <a href="login" class="btn theme-btn theme-btn-sm mr-2">
                                            Login
                                        </a>
                                        <a href="signup" class="btn theme-btn theme-btn-sm theme-btn-transparent">
                                            Register
                                        </a>
                                    </div>
                                    @endif

                                    <!-- end shop-cart -->
                                </div>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->



    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->