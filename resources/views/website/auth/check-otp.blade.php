@extends('website.layouts.main.main')

@section('content')
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Recover Password</h2>
            </div>
            <ul
                class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Recover Password</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding position-relative">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-24 lh-35 pb-2">{{__("site.otp")}}</h3>
                        <div class="section-block"></div>
                        <form method="post" class="pt-4" action="{{ route('sendOtp') }}">
                            @csrf
                            <div class="input-box">
                                <label class="label-text">Email otp</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="otp"
                                        placeholder="Enter otp">
                                    <span class="la la-user input-icon"></span>
                                    @if($errors->has('otp'))
                                    <span class="text-danger">{{ $errors->first('otp') }}</span>
                                    @endif
                                    @if(session()->has('error'))
                                    <span class="text-danger">{{ session()->get('error') }}</span>
                                    @endif
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box">

                                <div class="btn-box">
                                    <button class="btn theme-btn" type="submit">Reset Password <i
                                            class="la la-arrow-right icon ml-1"></i></button>
                                    <div class="d-flex align-items-center justify-content-between fs-14 pt-2">
                                        <a href="login" class="text-color hover-underline">Login</a>
                                        <p><a href="signup" class="text-color hover-underline">Register</a></p>
                                    </div>
                                </div><!-- end btn-box -->
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
       END CONTACT AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
@endsection