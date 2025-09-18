<div class="card card-item card-preview">
    <div class="card-image position-relative">
        <a href="" class="d-block">
            <img class="card-img-top lazy"
                 src="images/img-loading.png"
                 data-src="{{ asset($course->image) }}"
                 alt="{{ $course->title }}">
        </a>

        <!-- زرار القلب -->
        <form action="{{ route('wishlists.toggle', $course->id) }}" method="POST"
              class="favorite-btn position-absolute top-0 right-0 m-2">
            @csrf
            <?php $user = App\Models\User::where('email', session('user')->email)->first(); ?>
            <button type="submit" class="border-0 bg-transparent p-0">
                <i class="la {{ $user && $user->wishlists->contains($course->id) ? 'la-heart text-danger' : 'la-heart-o text-dark' }}"
                   style="font-size: 28px;"></i>
            </button>
        </form>

        <!-- بادجات -->
        <div class="course-badge-labels">
            @if($course->is_bestseller)
                <div class="course-badge">{{__("site.Bestseller")}}</div>
            @endif
            @if($course->discount)
                <div class="course-badge blue">-{{ $course->discount }}%</div>
            @endif
        </div>
    </div><!-- end card-image -->

    <div class="card-body">
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
    </div><!-- end card-body -->
</div><!-- end card -->
