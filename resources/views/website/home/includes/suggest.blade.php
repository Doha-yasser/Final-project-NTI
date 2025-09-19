<div class="card card-item card-preview d-flex flex-column">
    <div class="card-image position-relative">
        <a href="{{ route('courses.show', $course->id) }}" class="d-block">
            <img class="card-img-top lazy" src="images/img-loading.png" data-src="{{ asset($course->image) }}"
                alt="{{ $course->title }}" style="width: 100%; height: 200px; object-fit: cover;">
        </a>

        <!-- زرار القلب -->
        <form action="{{ route('wishlists.toggle', $course->id) }}" method="POST"
            class="favorite-btn position-absolute top-0 right-0 m-2">
            @csrf
            <?php
            if (session('user')) {
                $user = App\Models\User::where('email', session('user')->email)->first();
            } else {
                $user = null;
            }
            ?>
            <button type="submit" class="border-0 bg-transparent p-0">
                <i class="la {{ $user && $user->wishlists->contains($course->id) ? 'la-heart text-danger' : 'la-heart-o text-dark' }}"
                    style="font-size: 28px;"></i>
            </button>
        </form>


    </div><!-- end card-image -->

    <div class="card-body d-flex flex-column justify-content-between" style="flex-grow: 1;">
        <div>
            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                {{ $course->level ?? 'All Levels' }}
            </h6>

            <h5 class="card-title">
                <a href="">
                    {{ $course->title }}
                </a>
            </h5>

            <p class="card-text">
                {{ $course->instructor->name }}
            </p>
        </div>

        <div class="text-center mt-3">
            @include('website.layouts.components.form.send-enrollment')
        </div>
    </div><!-- end card-body -->
</div><!-- end card -->
