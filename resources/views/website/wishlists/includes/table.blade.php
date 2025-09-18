<table class="table generic-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Product Details</th>
            <th>buy</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        @foreach($wishlists as $course)
        <tr>
            <th scope="row">
                <div class="media media-card">
                    <a href="{{route("courses.show", $course->id)}}" class="media-img mr-0">
                        <img src="images/img-loading.png" alt="Cart image">
                    </a>
                </div>
            </th>
            <td>
                <a href="" class="text-black font-weight-semi-bold">
                    {{ $course->title }}
                </a>
                <p class="fs-14 text-gray lh-20">
                    By

                    {{ $course->instructor->name }} :
                    {{ $course->description }}
                </p>
            </td>

            <td>
                <form action="{{route("enrollments.store")}}" method="POST">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    @if($course->isEnrolled(session('user')->id))

                    <button class="btn theme-btn" type="submit" disabled>{{__("site.you are enrolled")}} <i
                            class="la la-arrow-right icon ml-1"></i></button>
                    @elseif($course->seatsLeft > 0)
                    <button class="btn theme-btn" type="submit">{{__("site.enroll")}} <i
                            class="la la-arrow-right icon ml-1"></i></button>
                    @else
                    <button class="btn theme-btn" type="submit" disabled>{{__("site.enroll")}} <i
                            class="la la-arrow-right icon ml-1"></i></button>
                    @endif
                </form>
            </td>

            <td>
                <form action="{{ route('wishlists.toggle', $course->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="icon-element icon-element-xs shadow-sm border-0" data-toggle="tooltip"
                        data-placement="top" title="Remove">
                        <i class="la la-times"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>

    </tbody>
</table>