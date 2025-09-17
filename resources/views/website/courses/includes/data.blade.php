<div class="col-lg-4 responsive-column-half">
    <div class="card card-item">
        <div class="card-image position-relative">
            <a href="" class="d-block">
                <img class="card-img-top lazy" src="images/img-loading.png" data-src="{{ asset($course->image) }}"
                    alt="{{ $course->title }}">
            </a>

            <!-- زرار القلب -->
            <form action="{{ route('wishlists.toggle', $course->id) }}" method="POST"
                class="favorite-btn position-absolute top-0 right-0 m-2">
                @csrf
                <button type="submit" class="border-0 bg-transparent p-0">
                    <?php
                        $user=App\Models\User::where('email', session('user')->email)->first();
                        ?>
                    <i class="la {{ $user && $user->wishlists->contains($course->id) ? 'la-heart text-danger' : 'la-heart-o text-dark' }}"
                        style="font-size: 40px;"></i>
                </button>
            </form>

        </div><!-- end card-image -->

        <div class="card-body">
            <h5 class="card-title"><a href="">{{ $course->title }}</a></h5>
            <p class="card-text lh-22 pt-2">
                <a href="#">{{ $course->instructor->name }}</a><span>, {{ $course->description }}</span>
            </p>
            <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                <p class="skillbar-title">Complete:</p>
                <div class="skillbar-box">
                    <div class="skillbar skillbar-skillbar-2" data-percent="{{ $course->progress }}%">
                        <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                    </div>
                </div>
                <div class="skill-bar-percent">{{ $course->progress }}%</div>
            </div>
            <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                <div class="review-stars">
                    @for($i=1; $i<=5; $i++) <span class="la {{ $i <= $course->rating ? 'la-star' : 'la-star-o' }}">
                        </span>
                        @endfor
                </div>
                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal"
                    data-target="#ratingModal">Leave a rating</a>
            </div><!-- end rating-wrap -->
        </div><!-- end card-body -->
    </div><!-- end card -->
</div>