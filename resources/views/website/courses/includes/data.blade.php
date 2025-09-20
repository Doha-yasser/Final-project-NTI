<div class="col-lg-4 responsive-column-half">
    <div class="card card-item d-flex flex-column">
        <div class="card-image position-relative">
            <a href="{{ route('courses.show', $course->id) }}" class="d-block">
                <img class="card-img-top lazy" src="images/img-loading.png" data-src="{{ asset($course->image) }}"
                    alt="{{ $course->title }}" style="width: 100%; height: 200px; object-fit: cover;">
            </a>

            <form action="{{ route('wishlists.toggle', $course->id) }}" method="POST"
                class="favorite-btn position-absolute top-0 right-0 m-2">
                @csrf
                <button type="submit" class="border-0 bg-transparent p-0">
                    <?php
                    if (session('user')) {
                        $user = App\Models\User::where('email', session('user')->email)->first();
                    } else {
                        $user = null;
                    }
                    ?>
                    <i class="la {{ $user && $user->wishlists->contains($course->id) ? 'la-heart text-danger' : 'la-heart-o text-dark' }}"
                        style="font-size: 40px;"></i>
                </button>
            </form>
        </div><!-- end card-image -->

        <div class="card-body d-flex flex-column justify-content-between" style="flex-grow: 1;">
            <div>
                <h5 class="card-title"><a href="">{{ $course->title }}</a></h5>
                <p class="card-text lh-22 pt-2">
                    <a href="#">{{ $course->instructor->name }}</a><span>, {{ $course->description }}</span>
                </p>
            </div>

            <div class="text-center mt-3">
                @include('website.layouts.components.form.send-enrollment')

            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
</div>
