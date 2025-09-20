            <form action="{{ route('enrollments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                @if (session('user'))

                    @if ($course->isEnrolled(session('user')->id) || $course->instructor_id == session('user')->id)
                        <a class="btn theme-btn" type="submit"
                            href="{{ route('courses.show', $course->id) }}">{{ __('site.watch') }} <i
                                class="la la-arrow-right icon ml-1"></i></a>
                    @elseif($course->seatsLeft > 0)
                        <button class="btn theme-btn" type="submit">{{ __('site.enroll') }} <i
                                class="la la-arrow-right icon ml-1"></i></button>
                    @else
                        <button class="btn theme-btn" type="submit" disabled>{{ __('site.enroll') }} <i
                                class="la la-arrow-right icon ml-1"></i></button>
                    @endif
                @else
                    <a class="btn theme-btn"  type="submit" href="{{ route('login') }}">{{ __('site.enroll') }} <i
                            class="la la-arrow-right icon ml-1"></i></a>
                @endif
            </form>
