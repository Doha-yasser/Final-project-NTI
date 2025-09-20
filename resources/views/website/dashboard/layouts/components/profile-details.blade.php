<div class="media-img media--img media-img-md rounded-full">
    @if (session('user')->image != null)
        <img class="rounded-full" src="{{ asset(session('user')->image) }}" alt="Student thumbnail image">
    @else
        <img class="rounded-full" src="{{ asset('images/small-avatar-1.jpg') }}" alt="Student thumbnail image">
    @endif
</div>
<div class="media-body">
    <h2 class="section__title fs-30">{{ session('user')->name }}</h2>
    <div class="rating-wrap d-flex align-items-center pt-2">

    </div>
