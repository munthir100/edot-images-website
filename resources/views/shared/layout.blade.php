<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/swiper.min.css">

    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/sweetalert2.min.css">

    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.min.css">

    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-swiper.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/form-file-uploader.css">

</head>

<body>

    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mt-0">
            <div class="col-md-3 mb-2 mb-md-0">
                <span class="d-inline-flex link-body-emphasis text-decoration-none" style='font-family: "Dancing Script", cursive; font-size:x-large'>

                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none" style='font-family: "Dancing Script", cursive; font-size:large'>
                        M
                    </a>
                    onzer Omer
                </span>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="/" class="nav-link px-2 {{ request()->is('/') ? 'link-secondary' : '' }}">Home</a>
                </li>
                <li><a href="/#features" class="nav-link px-2">Features</a></li>
                <li>
                    <a href="{{route('editImage')}}" class="nav-link px-2 {{ request()->is('editImage') ? 'link-secondary' : '' }}">Edit Image</a>
                </li>
            </ul>


        </header>


        @yield('content')



        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="d-inline-flex link-body-emphasis text-decoration-none" style='font-family: "Dancing Script", cursive; font-size:x-large'>

                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none" style='font-family: "Dancing Script", cursive; font-size:large'>
                        M
                    </a>
                    onzer Omer
                </span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-body-secondary" href="#">
                        <i style="font: 30px;" class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-body-secondary" href="#">
                        <i style="font: 30px;" class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-body-secondary" href="#">
                        <i style="font: 30px;" class="fab fa-facebook"></i>
                    </a>
                </li>
            </ul>
            <span class="mb-md-0 text-body-secondary"> © 2023 Company, Inc </span>

        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="/app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
    <!-- END: Page JS-->

    <script src="/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../../../app-assets/vendors/js/file-uploaders/dropzone.min.js"></script>
    <script src="../../../app-assets/js/scripts/forms/form-file-uploader.js"></script>

    <script>
        function apiError(error, statusText) {
            Swal.fire({
                title: statusText,
                text: error,
                icon: 'error',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                showCloseButton: true,
                showClass: {
                    popup: 'animate__animated animate__flipInX'
                },
                buttonsStyling: false
            });
        }

        function validationError(message) {
            toastr['error'](message, 'Error !', {
                positionClass: 'toast-top-left',
            });
        }
    </script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>
<style>
    body {
        background: #fff;
    }

    @media only screen and (max-width: 999px) {
        .image-banner {
            display: none;
        }
    }

    .main-section,
    header {
        border-bottom: 1px solid #eee;
    }

    .container-fluid {
        overflow: hidden;
    }
</style>