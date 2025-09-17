<div class="text-center pt-3">
    {{ $courses->appends(request()->query())->links('pagination::bootstrap-5') }}

    <p class="fs-14 pt-2">Showing {{ $courses->firstItem() }}-{{ $courses->lastItem() }} of
        {{ $courses->total() }} results</p>
</div>