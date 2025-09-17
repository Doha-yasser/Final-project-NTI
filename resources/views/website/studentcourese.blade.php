@extends('website.layouts.main.main')
@section('content')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area py-5 bg-white pattern-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="section-heading">
                <h2 class="section__title">My Courses</h2>
            </div><!-- end section-heading -->
            <ul class="nav nav-tabs generic-tab pt-30px" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="all-course-tab" data-toggle="tab" href="#all-course" role="tab" aria-controls="all-course" aria-selected="false">
                        All Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="false">
                        Wishlist
                    </a>
                </li>
                
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START MY COURSES
================================= -->
<section class="my-courses-area pt-30px pb-90px">
    <div class="container">
        <div class="my-course-content-wrap">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-course" role="tabpanel" aria-labelledby="all-course-tab">
                    <div class="my-course-body">

                        <div class="my-course-filter-wrap d-flex align-items-center pt-2">
                            <div class="my-course-filter-item my-course-sort-by-content">
                                <span class="fs-14 font-weight-semi-bold">Sort by</span>
                                <div class="select-container w-100 pt-2">
                                    <select class="select-container-select">
                                        <option value="0" selected>New</option>
                                        <option value="0" selected>Old</option>
                                    </select>
                                </div>
                            </div><!-- end my-course-filter-item -->
                            <div class="my-course-filter-item my-course-filter-by-content">
                                <span class="fs-14 font-weight-semi-bold">Filter by</span>
                                <div class="my-course-filter-by-content-inner d-flex align-items-center pt-2">

                                    <div class="reset-btn-box">
                                        <button class="btn text-gray" type="button">Reset</button>
                                    </div>
                                </div>
                            </div><!-- end my-course-filter-item -->
                            <div class="my-course-filter-item my-course-search-content">
                                <span class="fs-14 font-weight-semi-bold">Search</span>
                                <form method="post" class="pt-2">
                                    <div class="input-group mb-0">
                                        <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search courses">
                                        <div class="input-group-append">
                                            <button class="btn theme-btn shadow-none"><i class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end my-course-filter-item -->
                        </div>
                        <div class="my-course-cards pt-40px">
                            <div class="row">
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="#" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/8f5f14eaebc083eb5ad9706f0ca35094.jpg" alt="Card image cap">
                                                <div class="play-button">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                        <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                                </g>
                                                            </svg>
                                                </div>
                                            </a>
                                            
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">The Complete Full-Stack JavaScript Course!</a></h5>
                                            <p class="card-text lh-22 pt-2"><a href="#">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                <p class="skillbar-title">Complete:</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar skillbar-skillbar-2" data-percent="70%">
                                                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                    </div><!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">70%</div>
                                            </div><!-- end my-course-progress-bar-wrap -->
                                            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                <div class="review-stars">
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-o"></span>
                                                </div>
                                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                            </div><!-- end rating-wrap -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="#" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/42ec2702587601f4a560296e92414656.jpg" alt="Card image cap">
                                                <div class="play-button">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                        <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                                </g>
                                                            </svg>
                                                </div>
                                            </a>
                                            <div class="course-badge-labels course--badge-labels">
                                                <div class="generic-action-wrap generic--action-wrap generic--action-wrap-2">
                                                    <div class="dropdown">
                                                        <a class="action-btn bg-white text-gray dropdown-btn" href="#" role="button" id="allCourseMenuLinkTwo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="la la-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-wrap" aria-labelledby="allCourseMenuLinkTwo">
                                                            
                                                            
                                                            <a href="javascript:void(0)" class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="modal" data-target="#createNewCollectionModal">
                                                                <span>Create New Collection</span> <i class="ml-auto la la-plus"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="dropdown-item d-flex align-items-center justify-content-between">
                                                                <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                <i class="ml-auto la la-star"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="dropdown-item d-flex align-items-center justify-content-between">
                                                                <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                <i class="la la-archive"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">Microsoft SQL Server 2019 for Everyone</a></h5>
                                            <p class="card-text lh-22 pt-2"><a href="#">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                <p class="skillbar-title">Complete:</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar skillbar-skillbar-2" data-percent="0%">
                                                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                    </div><!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">0%</div>
                                            </div><!-- end my-course-progress-bar-wrap -->
                                            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                <div class="review-stars">
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                </div>
                                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                            </div><!-- end rating-wrap -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="#" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/505f41a1e6bea9236392fa26bb8b37c4.jpg" alt="Card image cap">
                                                <div class="play-button">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                        <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                                </g>
                                                            </svg>
                                                </div>
                                            </a>
                                            
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">WordPress for Beginners – Master WordPress</a></h5>
                                            <p class="card-text lh-22 pt-2"><a href="#">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                <p class="skillbar-title">Complete:</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar skillbar-skillbar-2" data-percent="0%">
                                                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                    </div><!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">0%</div>
                                            </div><!-- end my-course-progress-bar-wrap -->
                                            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                <div class="review-stars">
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                </div>
                                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                            </div><!-- end rating-wrap -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="#" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/e3d2f0bac1bbcb1e3e328d8685f071cb.jpg" alt="Card image cap">
                                                <div class="play-button">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                        <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                                </g>
                                                            </svg>
                                                </div>
                                            </a>
                                            
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">The Complete Full-Stack JavaScript Course!</a></h5>
                                            <p class="card-text lh-22 pt-2"><a href="#">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                <p class="skillbar-title">Complete:</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar skillbar-skillbar-2" data-percent="70%">
                                                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                    </div><!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">70%</div>
                                            </div><!-- end my-course-progress-bar-wrap -->
                                            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                <div class="review-stars">
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                </div>
                                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                            </div><!-- end rating-wrap -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="#" class="d-block">
                                                <img class="card-img-top lazy" src="images/31ecfe9f4081d9e887997550a4603094.jpg" data-src="31ecfe9f4081d9e887997550a4603094.jpg" alt="Card image cap">
                                                <div class="play-button">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                        <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                                </g>
                                                            </svg>
                                                </div>
                                            </a>
                                            <div class="course-badge-labels course--badge-labels">
                                                <div class="generic-action-wrap generic--action-wrap generic--action-wrap-2">
                                                    <div class="dropdown">
                                                        <a class="action-btn bg-white text-gray dropdown-btn" href="#" role="button" id="allCourseMenuLinkFive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="la la-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-wrap" aria-labelledby="allCourseMenuLinkFive">
                                                            <h6 class="dropdown-header text-black">Collections</h6>
                                                            <p class="dropdown-header">You have no collections</p>
                                                            <div class="section-block my-2"></div>
                                                            
                                                            <a href="javascript:void(0)" class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="modal" data-target="#createNewCollectionModal">
                                                                <span>Create New Collection</span> <i class="ml-auto la la-plus"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="dropdown-item d-flex align-items-center justify-content-between">
                                                                <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                <i class="ml-auto la la-star"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="dropdown-item d-flex align-items-center justify-content-between">
                                                                <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                <i class="la la-archive"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">java </a></h5>
                                            <p class="card-text lh-22 pt-2"><a href="#">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                <p class="skillbar-title">Complete:</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar skillbar-skillbar-2" data-percent="0%">
                                                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                    </div><!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">0%</div>
                                            </div><!-- end my-course-progress-bar-wrap -->
                                            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                <div class="review-stars">
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                </div>
                                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                            </div><!-- end rating-wrap -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="#" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img13.jpg" alt="Card image cap">
                                                <div class="play-button">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                        <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                                </g>
                                                            </svg>
                                                </div>
                                            </a>
                                            
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">WordPress for Beginners – Master WordPress</a></h5>
                                            <p class="card-text lh-22 pt-2"><a href="#">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                <p class="skillbar-title">Complete:</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar skillbar-skillbar-2" data-percent="0%">
                                                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                    </div><!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">0%</div>
                                            </div><!-- end my-course-progress-bar-wrap -->
                                            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                <div class="review-stars">
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                    <span class="la la-star-o"></span>
                                                </div>
                                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                            </div><!-- end rating-wrap -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end row -->
                            <div class="text-center pt-3">
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
                                <p class="fs-14 pt-2">Showing 1-6 of 56 results</p>
                            </div>
                        </div><!-- end my-course-cards -->
                    </div><!-- end my-course-body -->
                </div><!-- end tab-pane -->
                
                <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                    <div class="my-course-body">
                        <div class="my-course-info pb-40px d-flex flex-wrap align-items-center justify-content-between">
                            <h3 class="fs-22 font-weight-semi-bold">My wishlist</h3>
                            <form method="post">
                                <div class="input-group">
                                    <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search courses">
                                    <div class="input-group-append">
                                        <button class="btn theme-btn shadow-none"><i class="la la-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end my-course-info -->
                        <div class="my-course-cards">
                            <div class="row">
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="course-details.html" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="Card image cap">
                                            </a>
                                            <div class="course-badge-labels">
                                                <div class="course-badge">Bestseller</div>
                                                <div class="course-badge blue">-39%</div>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                                            <h5 class="card-title"><a href="course-details.html">The Business Intelligence Analyst Course 2021</a></h5>
                                            <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
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
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="card-price text-black font-weight-bold">12.99 <span class="before-price font-weight-medium">129.99</span></p>
                                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Remove from Wishlist"><i class="la la-heart"></i></div>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="course-details.html" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg" alt="Card image cap">
                                            </a>
                                            <div class="course-badge-labels">
                                                <div class="course-badge red">Featured</div>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                                            <h5 class="card-title"><a href="course-details.html">The Business Intelligence Analyst Course 2021</a></h5>
                                            <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
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
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="card-price text-black font-weight-bold">129.99</p>
                                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Remove from Wishlist"><i class="la la-heart"></i></div>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column-half">
                                    <div class="card card-item">
                                        <div class="card-image">
                                            <a href="course-details.html" class="d-block">
                                                <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg" alt="Card image cap">
                                            </a>
                                        </div><!-- end card-image -->
                                        <div class="card-body">
                                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                                            <h5 class="card-title"><a href="course-details.html">The Business Intelligence Analyst Course 2021</a></h5>
                                            <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
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
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="card-price text-black font-weight-bold">129.99</p>
                                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Remove from Wishlist"><i class="la la-heart"></i></div>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end row -->
                        </div><!-- end my-course-cards -->
                    </div><!-- end my-course-body -->
                </div><!-- end tab-pane -->
                
            </div><!-- end tab-content -->
        </div>
    </div><!-- end container -->
</section><!-- end my-courses-area -->
<!-- ================================
       START MY COURSES
================================= -->


<!--======================================
        END CTA AREA
======================================-->

<!-- ================================
         END FOOTER AREA
================================= -->

<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="ratingModalTitle">
                        How would you rate this course?
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body text-center py-5">
                <div class="leave-rating mt-5">
                    <input type="radio" name='rate' id="star5"/>
                    <label for="star5" class="fs-45"></label>
                    <input type="radio" name='rate' id="star4"/>
                    <label for="star4" class="fs-45"></label>
                    <input type="radio" name='rate' id="star3"/>
                    <label for="star3" class="fs-45"></label>
                    <input type="radio" name='rate' id="star2"/>
                    <label for="star2" class="fs-45"></label>
                    <input type="radio" name='rate' id="star1"/>
                    <label for="star1" class="fs-45"></label>
                    <div class="rating-result-text fs-20 pb-4"></div>
                </div><!-- end leave-rating -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <h5 class="modal-title fs-19 font-weight-semi-bold" id="shareModalTitle">Share this course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="copy-to-clipboard">
                    <span class="success-message">Copied!</span>
                    <div class="input-group">
                        <input type="text" class="form-control form--control copy-input pl-3" value="https://www.aduca.com/share/101WxMB0oac1hVQQ==/">
                        <div class="input-group-append">
                            <button class="btn theme-btn theme-btn-sm copy-btn shadow-none"><i class="la la-copy mr-1"></i> Copy</button>
                        </div>
                    </div>
                </div><!-- end copy-to-clipboard -->
            </div><!-- end modal-body -->
            
        </div><!-- end modal-content-->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->






@endsection