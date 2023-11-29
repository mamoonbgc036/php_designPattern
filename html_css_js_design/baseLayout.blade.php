<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset( 'assets/vendors/core/core.css' ) }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <link rel="stylesheet" href="{{ asset( 'assets/vendors/flatpickr/flatpickr.min.css' ) }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset( 'assets/fonts/feather-font/css/iconfont.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'assets/vendors/flag-icon-css/css/flag-icon.min.css' ) }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset( 'assets/css/demo2/style.css' ) }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset( 'assets/images/favicon.png' ) }}" />
</head>

<body>

    @yield('base')
    <script src="{{ asset( 'assets/vendors/core/core.js' ) }}"></script>

    <!-- inject:js -->
    <script src="{{ asset( 'assets/vendors/feather-icons/feather.min.js' ) }}"></script>
    <script src="{{ asset( 'assets/js/template.js' ) }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

</body>

</html>