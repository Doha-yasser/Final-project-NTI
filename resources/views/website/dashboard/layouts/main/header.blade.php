<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="logo-box logo--box">
                            <a href="welcome" class="logo"><img src="{{asset(" images/logo.png")}}" alt="logo"></a>
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
                        </div><!-- end logo-box -->
                        <div class="menu-wrapper">

                            <div class="nav-right-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">

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
                                                    <a href={{ route('wishlist.index') }} > <i class="la la-heart-o"></i></a>
                                                </p>
                                                
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->

                                    @include('website.layouts.navbar-component')
                                    <!-- end shop-cart -->
                                </div>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->


</header>