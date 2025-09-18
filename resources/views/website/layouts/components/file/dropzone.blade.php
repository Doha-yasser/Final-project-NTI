<script>
Dropzone.autoDiscover = false;

function initDropzone(selector, hiddenInputId, acceptedFiles, maxFiles = 1, maxFilesize = 1000, existingFileUrl = null, existingFileName = null) {
    return new Dropzone(selector, {
        url: "/", // لا يتم الرفع مباشرة
        autoProcessQueue: false,
        paramName: hiddenInputId,
        maxFiles: maxFiles,
        maxFilesize: maxFilesize,
        acceptedFiles: acceptedFiles,
        addRemoveLinks: true,
        init: function () {
            const dz = this;

            // عرض الملف الحالي إذا موجود
            if (existingFileUrl) {
                const mockFile = { name: existingFileName || "Current File", size: 123456 };
                dz.emit("addedfile", mockFile);

                if (acceptedFiles.includes(".jpeg") || acceptedFiles.includes(".jpg") || acceptedFiles.includes(".png") || acceptedFiles.includes(".gif")) {
                    dz.emit("thumbnail", mockFile, existingFileUrl);
                }

                dz.emit("complete", mockFile);
                dz.files.push(mockFile);
            }

            dz.on("addedfile", function (file) {
                if (dz.files.length > maxFiles) {
                    dz.removeFile(dz.files[0]);
                }
                let fileInput = document.getElementById(hiddenInputId);
                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                fileInput.files = dataTransfer.files;
            });

            dz.on("removedfile", function () {
                document.getElementById(hiddenInputId).value = "";
            });
        }
    });
}

// تهيئة Dropzone للصورة
initDropzone(
    "#imageDropzone",
    "courseImage",
    ".jpeg,.jpg,.png,.gif",
    1,
    5,
    "{{ isset($course) && $course->image ? asset($course->image) : '' }}",
    "{{ isset($course) ? basename($course->image) : '' }}"
);

// تهيئة Dropzone للفيديو
initDropzone(
    "#videoDropzone",
    "courseVideo",
    ".mp4,.avi,.mov,.mkv",
    1,
    50,
    "{{ isset($course) && $course->video ? asset($course->video) : '' }}",
    "{{ isset($course) ? basename($course->video) : '' }}"
);

// Submit الفورم
$('#formSubmit').on('click', function(event) {
    event.preventDefault();
    var $this = $(this);

    $this.children('.spinner-border').removeClass('d-none');

    if ($('#formDropzone')[0].checkValidity() === false) {
        event.stopPropagation();
        $('#formDropzone').addClass('was-validated');
        $this.children('.spinner-border').addClass('d-none');
    } else {
        document.getElementById('formDropzone').submit();
    }
});
</script>