
@extends('website.layouts.main.main')

@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Wishlist</h2>
            </div>
            
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="cart-area section-padding">
    <div class="container">
        <div class="table-responsive">
            @include('website.wishlists.includes.table')
        </div>
        
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->

@endsection
<!-- ================================
         END FOOTER AREA
================================= -->
