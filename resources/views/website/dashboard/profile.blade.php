@extends('website.dashboard.layouts.main.main')
<!--======================================
        END HEADER AREA
======================================-->
@section('mid-css')
<link rel="stylesheet" href="{{asset("css/bootstrap-tagsinput.css")}}">

<link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{asset("css/emojionearea.css")}}">
<link rel="stylesheet" href="{{asset("css/jquery-te-1.4.0.css")}}">
@endsection
@section('content')

<!-- ================================
    START DASHBOARD AREA
================================= -->

<div class="container-fluid">
    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
        <div class="media media-card align-items-center">
            <div class="media-img media--img media-img-md rounded-full">
                @if(session('user')->image != null)
                <img class="rounded-full" src="{{asset(session('user')->image)}}" alt="Student thumbnail image">
                @else
                <img class="rounded-full" src="{{asset("images/small-avatar-1.jpg")}}" alt="Student thumbnail image">
                @endif
            </div>
        </div><!-- end media -->
    </div><!-- end breadcrumb-content -->
    <div class="section-block mb-5"></div>
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">{{__("site.My Profile")}}</h3>
    </div>
    @include('website.layouts.components.messages.displayErrors')
    @include('website.layouts.components.messages.success')
    <div class="profile-detail ">
        <form action="{{ route('profile.update', session('user')->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-item">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label class="profile-name">{{__('site.created_at')}}</label>
                        <input type="text" class="form-control form--control pl-3"
                            value="{{ session('user')->created_at }}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label class="profile-name">{{__('site.name')}}:</label>
                        <input type="text" name="name" class="form-control form--control pl-3"
                            value="{{ session('user')->name }}">
                    </div>


                    <div class="form-group mb-3">
                        <label class="profile-name">{{__('site.email')}}:</label>
                        <input type="email" name="email" class="form-control form--control pl-3"
                            value="{{ session('user')->email }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="profile-name">{{__('site.password')}}:</label>
                        <input type="password" name="password" class="form-control form--control pl-3" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label class="profile-name">{{__('site.password_confirmation')}}:</label>
                        <input type="password" name="password-confirmation" class="form-control form--control pl-3"
                            value="">
                    </div>
                    <div class="form-group">
                        <label class="profile-name">{{__('site.lang')}}:</label>

                        <div class="select-container w-auto">

                            <div class="dropdown bootstrap-select select-container-select dropup"><select
                                    class="select-container-select" tabindex="-98" name="lang">
                                    <option value="en" @if(session('user')->lang == 'en') selected
                                        @endif>{{__("site.English") }}
                                    </option>
                                    <option value="ar" @if(session('user')->lang == 'ar') selected
                                        @endif>{{__("site.Arabic") }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        @include('website.layouts.components.file.dropzoneimage', [
                        'name' => 'image',
                        'idName' => 'courseImage',
                        'idNameForjs' => 'imageDropzone',
                        ])
                    </div><!-- end col-lg-12 -->
                    <button type="submit" class="btn btn-primary mb-5">{{__('site.update')}}</button>
                </div>
            </div>
        </form>
    </div>


</div><!-- end container-fluid -->
</div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
@section('end-js')
<script src="{{asset("js/jquery-te-1.4.0.min.js")}}"></script>
<script src="{{asset("js/bootstrap-tagsinput.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

@include('website.layouts.components.file.dropzone')

@endsection
@endsection