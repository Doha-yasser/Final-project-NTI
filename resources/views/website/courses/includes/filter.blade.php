<form method="GET" action="{{ route('courses.index') }}" class="my-course-filter-wrap d-flex align-items-center pt-2">

    <!-- Sort By -->
    <div class="my-course-filter-item my-course-sort-by-content mr-3">
        <span class="fs-14 font-weight-semi-bold">Sort by</span>
        <div class="select-container w-100 pt-2">
            <select name="sort" class="select-container-select">
                <option value="new" @if(request('sort')=='new' ) selected @endif>New</option>
                <option value="old" @if(request('sort')=='old' ) selected @endif>Old</option>
            </select>
        </div>
    </div>

    <!-- Filter By (example placeholder, يمكن تضيف خيارات حقيقية) -->
    <div class="my-course-filter-item my-course-filter-by-content mr-3">
        <div class="my-course-filter-by-content-inner d-flex align-items-center pt-2">



        </div>
    </div>

    <!-- Search -->
    <div class="my-course-filter-item my-course-search-content">
        <span class="fs-14 font-weight-semi-bold">Search</span>
        <div class="input-group pt-2">
            <input class="form-control form--control form--control-gray pl-3" type="text" name="search"
                placeholder="Search courses" value="{{  request('search') }}">
            <div class="input-group-append">
                <button class="btn theme-btn shadow-none" type="submit"><i class="la la-search"></i></button>
            </div>
        </div>
    </div>

</form>