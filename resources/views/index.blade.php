@extends('shared.layout')
@section('title','Home')
@section('content')
<div id="app">

    <section class="main-section" id="banner">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6 image-banner">
                <img src="{{asset('assets/images/banner.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Edit Your Images with Ease</h1>
                <p class="lead">Effortlessly enhance your images using our intuitive image editing tools. Select files or drop them in the designated area. Choose from various edit types such as 'Estimate Portrait' or 'Reimagine' to bring your vision to life.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{route('editImage')}}" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Get Started For Free</a>
                </div>
            </div>
        </div>
    </section>


    <section class="main-section" id="features">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <h3 class="fs-2 text-body-emphasis">Intuitive Editing Tools</h3>
                <p>Effortlessly enhance your images with our user-friendly editing tools. Easily adjust colors, crop images, and apply filters to achieve the desired look.</p>
                <a href="{{route('editImage')}}" class="icon-link">
                    Start Now
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="feature col">
                <h3 class="fs-2 text-body-emphasis">Easy File Upload</h3>
                    <p>Quickly upload your images using our simple file upload feature. Drag and drop files or use the provided button to get started.</p>
                <a href="{{route('editImage')}}" class="icon-link">
                    Start Now
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="feature col">
                <h3 class="fs-2 text-body-emphasis">Customization Options</h3>
                <p>Explore various customization options such as adding text, adjusting brightness, and applying artistic effects. Personalize your images to match your creative vision.</p>
                <a href="{{route('editImage')}}" class="icon-link">
                    Start Now
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection