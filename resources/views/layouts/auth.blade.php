<!doctype html>
<html {!!  langMeta() !!} dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@laravelPWA 
<link rel="manifest" href="/manifest.json">
@if(!empty(setting('image_icon')))
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('image_icon')) }}">
@endif
  
<title>@yield('page-title') - {{ setting('general_site_name') }}</title>


<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('be-layouts/assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/fontawesome/css/all.min.css') }}">

<!-- Core css -->
<link rel="stylesheet" href="{{ asset('be-layouts/assets/css/style.min.css') }}"/>
{!! setting('general_header_scripts') !!}
@yield('header')
</head>
<body class="font-muli theme-cyan gradient">
    @include('partials.flash_message')

    @yield('content')

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{{ asset('be-layouts/assets/bundles/lib.vendor.bundle.js') }}"></script>

<!-- Start project main js  and page js -->
<script src="{{ asset('be-layouts/assets/js/core.js') }}"></script>
{!! setting('general_foot_scripts') !!}
@yield('footer')
</body>
</html>