@extends('website.layouts.main.main')
@section('content')

<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START COURSE-DASHBOARD
======================================-->
<section class="course-dashboard">
    <div class="course-dashboard-wrap">
        <div class="course-dashboard-container d-flex">
            <div class="course-dashboard-column">
                <div class="lecture-viewer-container">
                    <div class="lecture-video-item">
                        <video controls crossorigin playsinline id="player" style="width:100%; max-height:500px;">
                            <source src="{{ asset($course->video) }}" type="video/mp4" />

                            <a href="{{ asset($course->video) }}" download>Download</a>
                        </video>

                    </div>
                    
                </div><!-- end lecture-viewer-container -->
                <div class="lecture-video-detail">

                    <div class="lecture-video-detail-body">
                        <div class="tab-content" id="myTabContent">
                            

                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <div class="lecture-overview-wrap">
                                    <div class="lecture-overview-item">
                                        <h3 class="fs-24 font-weight-semi-bold pb-2">{{__("site.Overview")}}</h3>
                                        <p>{{$course->description}}</p>
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="fs-16 font-weight-semi-bold pb-2">{{__("site.By the numbers")}}</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <ul class="generic-list-item">
                                                    <li><span>{{__("site.Students")}}:</span>{{$course->students->count()}}</li>
                                                </ul>
                                            </div><!-- end lecture-overview-stats-item -->
                                            
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    
                                    
                                    
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex ">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="fs-16 font-weight-semi-bold pb-2">{{__("site.Instructor")}}</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                <div class="media media-card align-items-center">
                                                    <a href="teacher-detail.html"
                                                        class="media-img d-block rounded-full avatar-md">
                                                        @if($course->instructor->image != null)
                                                        <img src="{{asset($course->instructor->image)}}" alt="Instructor avatar"
                                                            class="rounded-full">
                                                        @else
                                                        <img src="{{asset("images/small-avatar-1.jpg")}}" alt="Instructor avatar"
                                                            class="rounded-full">
                                                        @endif
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="teacher-detail.html">{{$course->instructor->name ?? ""}}</a></h5>
                                                        <span class="d-block lh-18 pt-2">{{$course->title}}</span>
                                                    </div>
                                                </div>
                                                
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                </div><!-- end lecture-overview-wrap -->
                            </div><!-- end tab-pane -->
                            
                        </div><!-- end tab-content -->
                    </div><!-- end lecture-video-detail-body -->
                </div><!-- end lecture-video-detail -->
            </div><!-- end course-dashboard-column -->

        </div><!-- end course-dashboard-container -->
    </div><!-- end course-dashboard-wrap -->
</section><!-- end course-dashboard -->
<!--======================================
        END COURSE-DASHBOARD
======================================-->



@endsection