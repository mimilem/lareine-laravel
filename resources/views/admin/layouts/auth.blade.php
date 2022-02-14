<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>La Souveraine</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">


    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<link href="{{ asset('admin/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/icofont/css/icofont.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/Waves/dist/waves.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/color/color-1.min.css') }}" id="color"/>

</head>

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        @yield('content')
    </section>

    <script src="{{ asset('admin/plugins/Jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/Waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/pages/elements.js') }}"></script>

</body>

</html>