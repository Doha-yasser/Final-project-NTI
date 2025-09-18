@extends('website.dashboard.layouts.main.main')
@section('mid-css')
<link rel="stylesheet" href="{{asset("css/bootstrap-tagsinput.css")}}">

<link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{asset("css/emojionearea.css")}}">
<link rel="stylesheet" href="{{asset("css/jquery-te-1.4.0.css")}}">
@endsection
@section('content')

<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->

<div class="container-fluid">
    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
        <div class="media media-card align-items-center">

            <div class="media-body">
                <h2 class="section__title fs-30">{{session('user')->name}}</h2>

            </div><!-- end media-body -->
        </div><!-- end media -->

    </div><!-- end breadcrumb-content -->
    <div class="section-block mb-5"></div>
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">{{__("site.Submit Course")}}</h3>
    </div>
    @include("website.layouts.components.messages.displayErrors")
    @include("website.layouts.components.messages.Success")
    <form action="{{ route('mycourses.store') }}" method="post" enctype="multipart/form-data" id="formDropzone">
        @csrf
        <div class="card card-item">
            <div class="card-body">
                <div class="divider"><span></span></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label-text">{{__("site.Course Title")}}</label>
                            <input class="form-control form--control pl-3" type="text" name="title"
                                >
                        </div>
                    </div><!-- end col-lg-12 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label-text">{{__("site.date")}}</label>
                            <input class="form-control form--control pl-3" type="date" name="start_date"
                                value="{{ date('Y-m-d') }}" >
                        </div>
                    </div><!-- end col-lg-12 -->


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label-text">{{__("site.Max strudent")}}</label>
                            <input class="form-control form--control pl-3" type="number" name="max_students"
                                >
                        </div>
                    </div><!-- end col-lg-12 -->

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="label-text">{{__("site.Course Description")}}</label>
                            <textarea class="form-control form--control pl-3" name="description"></textarea>
                        </div>
                    </div><!-- end col-lg-12 -->
                    <div class="col-lg-12">
                        @include('website.layouts.components.file.dropzoneimage', [
                        'name' => 'image',
                        'idName' => 'courseImage',
                        'idNameForjs' => 'imageDropzone',
                        ])
                    </div><!-- end col-lg-12 -->
                    <div class="col-lg-12">
                        @include('website.layouts.components.file.dropzoneimage', [
                        'name' => 'video',
                        'idName' => 'courseVideo',
                        'idNameForjs' => 'videoDropzone',
                        ])
                    </div><!-- end col-lg-12 -->

                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->

        <div class="course-submit-btn-box pb-4">
            <button class="btn theme-btn" type="submit">{{__("site.Submit Course")}}</button>
        </div>
    </form>

</div><!-- end container-fluid -->

<!-- ================================
    END DASHBOARD AREA
================================= -->
@section('end-js')
<script src="{{asset("js/jquery-te-1.4.0.min.js")}}"></script>
<script src="{{asset("js/bootstrap-tagsinput.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

@include('website.layouts.components.file.dropzone')

@endsection
<!-- start scroll top -->
@endsection