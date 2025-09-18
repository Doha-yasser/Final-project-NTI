<div class="form-group mb-4">
    <label class="form-label" for="{{ $idNameForjs}}">{{ __('site.course_picture') }}</label>
        <div class="dropzone" id="{{ $idNameForjs}}">
            <div class="dz-message needsclick">
                <i class="la la-cloud-upload mr-2 fs-18"></i>
                {{ __('site.Drag_file_here_to_upload') }}
            </div>
        </div>
        <input type="file" name="{{ $name}}" id="{{$idName}}" class="d-none" />

    @error('files')
    <span class="text-danger d-block mt-2">{{ $message }}</span>
    @enderror
</div>
