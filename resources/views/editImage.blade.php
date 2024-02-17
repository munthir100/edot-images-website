@extends('shared.layout')
@section('title', 'Edit Image')
@section('content')

<style>
    #imageDropzone {
        background-size: cover;
        background-position: center;
        height: 300px;
        /* Adjust the height as needed */
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Select your imag</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Select image from your device and click and select the <code>Edit type</code> then click the <code> Process </code> button ,
                    after process your image you can download the edited image
                </p>
                <label for="image_file">
                    <a type="button" id="select-files" class="text-primary btn btn-outline-primary mb-1">
                        <i data-feather="file"></i> Click me to select files
                    </a>
                </label>
                <button id="deleteBtn" style="display: none;" onclick="deleteImage()" class="btn btn-outline-danger mb-1">
                    <i data-feather="trash"></i> Remove
                </button>

                <div action="#" class="dropzone dropzone-area" id="imageDropzone" style="position: relative;">
                    <label for="image_file">
                        <div class="dz-message">
                            Select Image From Your Device.
                        </div>
                        <div id="spinner" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </label>
                </div>



                <div class="form-group mt-3">
                    <label for="editType">Select Edit Type:</label>
                    <select class="form-select" id="editType" name="edit_type">
                        <option value="estimate_portrait">Estimate Portrait</option>
                        <option value="reimagine">Reimagine</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="editImageForm" enctype="multipart/form-data">
    <div class="form-group">
        <input hidden type="file" class="form-control-file" id="image_file" name="image_file" onchange="displaySelectedImage()">
    </div>

    <div class="form-group">
        <button type="button" class="btn btn-primary" id="sendButton">Upload</button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../../../app-assets/js/scripts/extensions/ext-component-blockui.js"></script>

<script>
    function displaySelectedImage() {
        var input = document.getElementById('image_file');
        var imgContainer = document.getElementById('imageDropzone');
        var imgElement = document.getElementById('selectedImage');
        var dropzone = document.getElementById('imageDropzone');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imgContainer.style.backgroundImage = 'url("' + e.target.result + '")';
            };

            reader.readAsDataURL(input.files[0]);

            // Show delete button and hide upload button
            $("#deleteBtn").show();
            $("#uploadBtn").hide();

            // Hide the dropzone message
            dropzone.querySelector('.dz-message').style.display = 'none';
        }
    }

    function deleteImage() {
        // Reset file input
        $("#image_file").val('');

        // Reset the background image
        $("#imageDropzone").css('background-image', 'none');

        // Show upload button and hide delete button
        $("#uploadBtn").show();
        $("#deleteBtn").hide();
    }

    $('#sendButton').on('click', function() {
        var formData = new FormData($('#editImageForm')[0]);
        var csrfToken = '{{ csrf_token() }}';
        var editType = $('#editType').val();
        formData.append('edit_type', editType); // Append the edit_type to the form data

        response = $.ajax({
            url: '/editImage',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            beforeSend: function() {
                $('#spinner').show();
                // make the #sendButton is disabled
                $('#sendButton').prop("disabled", true);
            },
            success: function(response) {
                // Handle success
                if (xhr.responseJSON.hasOwnProperty('error')) {
                    apiError(xhr.responseJSON.error, xhr.statusText);
                }
                console.log(response);
            },
            error: function(xhr) {
                console.log(xhr);
                if (xhr.responseJSON.hasOwnProperty('error')) {
                    apiError(xhr.responseJSON.error, xhr.statusText);
                } else {
                    var errors = xhr.responseJSON.errors;
                    displayValidationErrors(errors);
                }
            },
            complete: function() {
                $('#spinner').hide();
                $('#sendButton').prop("disabled", false);
            }
        });
    });

    function displayValidationErrors(errors) {
        var errorMessages = [];
        $.each(errors, function(key, value) {
            errorMessages.push(value[0]);
        });

        // Display errors in an alert
        validationError(errorMessages);
    }
</script>

@endsection