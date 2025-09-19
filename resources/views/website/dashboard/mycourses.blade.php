@extends('website.dashboard.layouts.main.main')
@section('content')



<div class="container-fluid">
    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
        <div class="media media-card align-items-center">
                                @include('website.dashboard.layouts.components.profile-details')

        </div><!-- end media-body -->
    </div><!-- end media -->
</div><!-- end breadcrumb-content -->
<div class="dashboard-heading mb-5">
    <h3 class="fs-22 font-weight-semi-bold">My Courses</h3>
</div>
@include("website.layouts.components.messages.displayErrors")
@include("website.layouts.components.messages.success")
@foreach ($courses as $course)
<div class="dashboard-cards mb-5">
    <div class="card card-item card-item-list-layout">
        <div class="card-image">
            <a href="course-details.html" class="d-block">
                <img class="card-img-top" src="{{ asset($course->image) }}" alt="Card image cap"
                    style="width: 100%; height: 200px; object-fit: cover; object-position: center;">
            </a>
            <div class="course-badge-labels">
            </div>
        </div><!-- end card-image -->
        <div class="card-body">
            <h5 class="card-title"><a href="#">{{ $course->title }}</a></h5>
            <p class="card-text"><a href="#">{{ $course->instructor->name }}</a></p>
            <div class="rating-wrap d-flex align-items-center py-2">

            </div><!-- end rating-wrap -->
            <ul class="card-duration d-flex align-items-center fs-15 pb-2">


                <li class="mr-2">
                    <span class="text-black">{{__("site.students")}}:</span>
                    <span>{{ $course->students->count() }}</span>
                </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
                <p class="card-price text-black font-weight-bold"></p>
                <div class="card-action-wrap pl-3">
                    <a href="{{ route('courses.show', $course->id) }}" class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 text-success"
                        data-toggle="tooltip" data-placement="top" data-title="View"><i class="la la-eye"></i></a>
                    <a href="{{ route('mycourses.edit', $course->id) }}" class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 text-success"
                        data-toggle="tooltip" data-placement="top" data-title="View">
                        <i class="la la-edit"></i>
                    </a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 text-danger"
                        data-toggle="tooltip" data-placement="top" title="Delete">
                        <span data-toggle="modal" data-target="#itemDeleteModal" class="w-100 h-100 d-inline-block"><i
                                class="la la-trash"></i></span>
                    </div>
                </div>
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->

</div><!-- end row -->

<div class="modal fade modal-container" id="itemDeleteModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be
                    deleted permanently!</h4>
                <p>Are you sure you want to delete your account?</p>
                <form action="{{ route('mycourses.destroy', $course->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div>
@endforeach
<!-- start scroll top -->
{{$courses->links("pagination::bootstrap-4")}}
@endsection