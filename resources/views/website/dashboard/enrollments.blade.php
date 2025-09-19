@extends('website.dashboard.layouts.main.main')
<!--======================================
        END HEADER AREA
======================================-->
@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
            <div class="media media-card align-items-center">

                @include('website.dashboard.layouts.components.profile-details')

            </div><!-- end media -->
            <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">
            </div><!-- file-upload-wrap -->
        </div><!-- end breadcrumb-content -->
        @include('website.layouts.components.messages.displayErrors')
        @include('website.layouts.components.messages.success')
        <div class="dashboard-heading mb-5">
            <h3 class="fs-22 font-weight-semi-bold">{{ __('site.enrollments') }}</h3>
        </div>
        <div class="table-responsive pb-4">
            <table class="table generic-table">
                <thead>
                    <tr>
                        <th>{{ __('site.Student Name') }}</th>
                        <th>{{ __('site.course Name') }}</th>
                        <th>{{ __('site.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enrollments as $enrollment)
                        <tr>
                            <td scope="row">
                                {{ $enrollment->user->name }}
                            </td>
                            <td scope="row">
                                {{ $enrollment->course->title }}
                            </td>
                            <td scope="row">
                                <form action="{{ route('enrollments.destroy', $enrollment->course->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this enrollment?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="la la-trash"></i> {{ __('site.Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
