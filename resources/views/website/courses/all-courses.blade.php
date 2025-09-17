@extends('website.layouts.main.main')
@section('content')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area py-5 bg-white pattern-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="section-heading">
                <h2 class="section__title">All Courses</h2>
            </div><!-- end section-heading -->

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
                @include('website.layouts.components.messages.success')
                @include('website.layouts.components.messages.displayErrors')
                <div class="tab-pane fade show active" id="all-course" role="tabpanel" aria-labelledby="all-course-tab">
                    <div class="my-course-body">

                        @include('website.courses.includes.filter')

                        <div class="my-course-cards pt-40px">
                            <div class="row">
                                @foreach($courses as $course)
                                @include('website.courses.includes.data')
                                @endforeach
                            </div><!-- end row -->

                            <!-- pagination -->
                            @include('website.courses.includes.paginate')
                        </div>

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


<!-- Modal -->
<!-- end modal -->

@include('website.courses.includes.modals.review')
@include('website.courses.includes.modals.share')




@endsection