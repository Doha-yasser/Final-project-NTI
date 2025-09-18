<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{__("site.Aduca -  Education HTML Template") }} </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>
<body>

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
<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="logo-box logo--box">
                            <a href="welcome" class="logo"><img src="images/logo.png" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div><!-- end logo-box -->
                        <div class="menu-wrapper">
                            <form method="post" class="mr-auto ml-0">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <div class="nav-right-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">
                                    <div class="shop-cart course-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn d-flex align-items-center fs-16">
                                                    {{__("site.Aduca -  My Courses") }}
                                                    <span class="la la-angle-down fs-13 ml-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li class="media media-card">
                                                        <a href="#" class="media-img">
                                                            <img class="mr-3" src="images/small-img-3.jpg" alt="Course thumbnail image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="#">{{__("site.Aduca - The Complete JavaScript Course 2021: From Zero to Expert!") }}</a></h5>
                                                            <div class="skillbar-box pt-3">
                                                                <div class="skillbar skillbar-skillbar" data-percent="36%">
                                                                    <div class="skillbar-bar skillbar--bar bg-1"></div>
                                                                </div><!-- End Skill Bar -->
                                                            </div><!-- End skillbar-box -->
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <a href="#" class="media-img">
                                                            <img class="mr-3" src="images/small-img-4.jpg" alt="Course thumbnail image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="#">{{__("site.Aduca - The Complete JavaScript Course 2021: From Zero to Expert!") }}</a></h5>
                                                            <div class="skillbar-box pt-3">
                                                                <div class="skillbar skillbar-skillbar" data-percent="77%">
                                                                    <div class="skillbar-bar skillbar--bar bg-1"></div>
                                                                </div><!-- End Skill Bar -->
                                                            </div><!-- End skillbar-box -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="studentcourses" class="btn theme-btn w-100">{{__("site.Got to my course") }} <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end course-cart -->
                                    <div class="shop-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn d-flex align-items-center">
                                                    <i class="la la-shopping-cart fs-22"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li class="media media-card">
                                                        <a href="cart" class="media-img">
                                                            <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="cartl">{{__("site.The Complete JavaScript Course 2021: From Zero to Expert!") }}</a></h5>
                                                            <span class="d-block lh-18 py-1">{{__("site.Kamran Ahmed") }}</span>
                                                            <p class="text-black font-weight-semi-bold lh-18">{{__("site.$12.99") }} <span class="before-price fs-14">$129.99</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <a href="cart" class="media-img">
                                                            <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="cart">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                            <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                            <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <div class="media-body fs-16">
                                                            <p class="text-black font-weight-semi-bold lh-18">{{__("site.Total:") }} <span class="cart-total">$12.99</span> <span class="before-price fs-14">$129.99</span></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="cart" class="btn theme-btn w-100">{{__("site.Got to cart") }} <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                    <div class="shop-cart wishlist-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-heart-o"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li>
                                                        <div class="media media-card">
                                                            <a href="#" class="media-img">
                                                                <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">{{__("site.$129.99") }}</span></p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                    <li>
                                                        <div class="media media-card">
                                                            <a href="course-details.html" class="media-img">
                                                                <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="studentprofile" class="btn theme-btn w-100">{{__("site.Got to wishlist") }} <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                    <div class="shop-cart notification-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-bell"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center justify-content-between">
                                                        <h4>{{__("site.Notifications") }}</h4>
                                                        <span class="ribbon fs-14">{{__("site.18") }}</span>
                                                    </li>
                                                    <li>
                                                        <div class="notification-body">
                                                            <a href="#" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>{{__("site.Your resume updated!") }}</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">1 hour ago</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>{{__("site.You changed password") }}</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>Your account has been created successfully</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="menu-heading-block">
                                                        <a href="dashboard.html" class="btn theme-btn w-100">Show All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid" src="images/small-avatar-1.jpg" alt="Avatar image">
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="#" class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid" src="images/small-avatar-1.jpg" alt="Avatar image">
                                                        </a>
                                                        <div class="ml-2">
                                                            <h4><a href="#" class="text-black">Alex Smith</a></h4>
                                                            <span class="d-block fs-14 lh-20">alexsmith@example.com</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="theme-picker d-flex align-items-center justify-content-center lh-40">
                                                            <button class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center" title="Dark mode">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                </svg>
                                                                Dark Mode
                                                            </button>
                                                            <button class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center" title="Light mode">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                    <circle cx="12" cy="12" r="5"></circle>
                                                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                                                </svg>
                                                                Light Mode
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="generic-list-item">
                                                            <li>
                                                                <a href="studentcourses">
                                                                    <i class="la la-file-video-o mr-1"></i> My courses
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="cart">
                                                                    <i class="la la-shopping-basket mr-1"></i> My cart
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="studentcourses">
                                                                    <i class="la la-heart-o mr-1"></i> My wishlist
                                                                </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-bell mr-1"></i> Notifications
                                                                    <span class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-envelope mr-1"></i> Messages
                                                                    <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                </a>
                                                            </li>
                                                            <li><div class="#"></div></li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-gear mr-1"></i> Settings
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-history mr-1"></i> Purchase history
                                                                </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-user mr-1"></i> Public profile
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-edit mr-1"></i> Edit profile
                                                                </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-question mr-1"></i> Help
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/">
                                                                    <i class="la la-power-off mr-1"></i> Logout
                                                                </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="#" class="position-relative">
                                                                    <span class="fs-17 font-weight-semi-bold d-block">Aduca for Business</span>
                                                                    <span class="lh-20 d-block fs-14 text-gray">Bring learning to your company</span>
                                                                    <span class="position-absolute top-0 right-0 mt-3 mr-3 fs-18 text-gray">
                                                                    <i class="la la-external-link"></i>
                                                                </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                </div>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">Alerts</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="studentcourses">Wishlist</a></li>
            <li><a href="cart">My cart</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">Account</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="#">Account settings</a></li>
            <li><a href="#">Purchase history</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">Profile</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="#">Public profile</a></li>
            <li><a href="#l">Edit profile</a></li>
            <li><a href="/">Log out</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">More from Aduca</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li><a href="for-business.html">Aduca for Business</a></li>
            <li><a href="#">Get the app</a></li>
            <li><a href="#">Invite friends</a></li>
            <li><a href="#">Help</a></li>
        </ul>
        <div class="theme-picker d-flex align-items-center justify-content-center mt-4 px-3">
            <button class="theme-picker-btn dark-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center" title="Dark mode">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
                Dark Mode
            </button>
            <button class="theme-picker-btn light-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center" title="Light mode">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                Light Mode
            </button>
        </div>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">Learn</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="studentcourses">My learning</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">Categories</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li>
                <a href="#">Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Development</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Game Development</a></li>
                    <li><a href="#">Databases</a></li>
                    <li><a href="#">Programming Languages</a></li>
                    <li><a href="#">Software Testing</a></li>
                    <li><a href="#">Software Engineering</a></li>
                    <li><a href="#">E-Commerce</a></li>
                </ul>
            </li>
            <li>
                <a href="#">business</a>
                <ul class="sub-menu">
                    <li><a href="#">All Business</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Home Business</a></li>
                    <li><a href="#">Communications</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="#">IT & Software</a>
                <ul class="sub-menu">
                    <li><a href="#">All IT & Software</a></li>
                    <li><a href="#">IT Certification</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Network & Security</a></li>
                    <li><a href="#">Operating Systems</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Finance & Accounting</a>
                <ul class="sub-menu">
                    <li><a href="#"> All Finance & Accounting</a></li>
                    <li><a href="#">Accounting & Bookkeeping</a></li>
                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Investing & Trading</a></li>
                    <li><a href="#">Other Finance & Economics</a></li>
                </ul>
            </li>
            <li>
                <a href="#">design</a>
                <ul class="sub-menu">
                    <li><a href="#">All Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Design Tools</a></li>
                    <li><a href="#">3D & Animation</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Personal Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Personal Development</a></li>
                    <li><a href="#">Personal Transformation</a></li>
                    <li><a href="#">Productivity</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Personal Finance</a></li>
                    <li><a href="#">Career Development</a></li>
                    <li><a href="#">Parenting & Relationships</a></li>
                    <li><a href="#">Happiness</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Marketing</a>
                <ul class="sub-menu">
                    <li><a href="#">All Marketing</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video & Mobile Marketing</a></li>
                    <li><a href="#">Affiliate Marketing</a></li>
                    <li><a href="#">Growth Hacking</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Health & Fitness</a>
                <ul class="sub-menu">
                    <li><a href="#">All Health & Fitness</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Dieting</a></li>
                    <li><a href="#">Self Defense</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mental Health</a></li>
                    <li><a href="#">Yoga</a></li>
                    <li><a href="#">Dance</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Photography</a>
                <ul class="sub-menu">
                    <li><a href="#">All Photography</a></li>
                    <li><a href="#">Digital Photography</a></li>
                    <li><a href="#">Photography Fundamentals</a></li>
                    <li><a href="#">Commercial Photography</a></li>
                    <li><a href="#">Video Design</a></li>
                    <li><a href="#">Photography Tools</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
        <div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <div class="logo-box px-4">
            <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
        </div>
        <ul class="generic-list-item off-canvas-menu-list off--canvas-menu-list pt-35px">
            <li><a href="dashboardstudent"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg> Dashboard</a></li>
            <li><a href="dashboard-profile"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg> My Profile</a></li>
            <li class="page-active"><a href="dashboard-courses.html"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg> My Courses</a></li>
          
        
            <li><a href="/"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg>  Logout</a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg> Delete Account</a></li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="media media-card align-items-center">
                    <div class="media-img media--img media-img-md rounded-full">
                        <img class="rounded-full" src="images/small-avatar-1.jpg" alt="Student thumbnail image">
                    </div>
                    <div class="media-body">
                        <h2 class="section__title fs-30">Ahmed Mahmoud</h2>
                        
                    </div><!-- end media-body -->
                </div><!-- end media -->
                
            </div><!-- end breadcrumb-content -->
            <div class="section-block mb-5"></div>
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">My Courses</h3>
            </div>
            <div class="dashboard-cards mb-5">
                <div class="card card-item card-item-list-layout">
                    <div class="card-image">
                        <a href="course-details.html" class="d-block">
                            <img class="card-img-top" src="images/817ad1b23ccd08bd68d6b61a39a1310b.jpg" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">Bestseller</div>
                            <div class="course-badge blue">-39%</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                        <h5 class="card-title"><a href="#">The Business Intelligence Analyst Course 2021</a></h5>
                        <p class="card-text"><a href="#">Jose Portilla</a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            
                        </div><!-- end rating-wrap -->
                        <ul class="card-duration d-flex align-items-center fs-15 pb-2">
                            <li class="mr-2">
                                <span class="text-black">Status:</span>
                                <span class="badge badge-success text-white">Published</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Duration:</span>
                                <span>3 hours 20 min</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Students:</span>
                                <span>30,405</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price text-black font-weight-bold">129.99</p>
                            
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item card-item-list-layout">
                    <div class="card-image">
                        <a href="#" class="d-block">
                            <img class="card-img-top" src="images/d521695c1fa7b3883e5e07aaeef04c8e.jpg" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">Bestseller</div>
                            <div class="course-badge blue">-39%</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                        <h5 class="card-title"><a href="#">PYTHON</a></h5>
                        <p class="card-text"><a href="#">JoLLY</a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                        <ul class="card-duration d-flex align-items-center fs-15 pb-2">
                            <li class="mr-2">
                                <span class="text-black">Status:</span>
                                <span class="badge badge-danger text-white">Cancelled</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Duration:</span>
                                <span>3 hours 20 min</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Students:</span>
                                <span>30,405</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price text-black font-weight-bold">129.99</p>
                            
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item card-item-list-layout">
                    <div class="card-image">
                        <a href="#" class="d-block">
                            <img class="card-img-top" src="images/827f8c8170a5842d2560da75249117af.jpg" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">Bestseller</div>
                            <div class="course-badge blue">-39%</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                        <h5 class="card-title"><a href="#">UI/UX</a></h5>
                        <p class="card-text"><a href="#">Van </a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                        <ul class="card-duration d-flex align-items-center fs-15 pb-2">
                            <li class="mr-2">
                                <span class="text-black">Status:</span>
                                <span class="badge badge-success text-white">Published</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Duration:</span>
                                <span>3 hours 20 min</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Students:</span>
                                <span>30,405</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price text-black font-weight-bold">129.99</p>
                            
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
               
            <div class="text-center py-3">
                <nav aria-label="Page navigation example" class="pagination-box">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="fs-14 pt-2">Showing 1-4 of 16 results</p>
            </div>
            <div class="row align-items-center dashboard-copyright-content pb-4">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                        <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be deleted permanently!</h4>
                <p>Are you sure you want to delete your account?</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="itemDeleteModal" tabindex="-1" role="dialog" aria-labelledby="itemDeleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="itemDeleteModalTitle">Your item will be deleted permanently!</h4>
                <p>Are you sure you want to delete your item?</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/datedropper.min.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/jquery.MultiFile.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>