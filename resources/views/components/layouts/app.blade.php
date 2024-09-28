<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="keywords"
        content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
 ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
 ============================================ -->

    <link rel="shortcut icon" href="ico/favicon.png">

    <!-- Google web fonts
 ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
 ============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Theme CSS
 ============================================ -->
    <link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
    <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="css/themecss/just_purchased_notification.css" rel=stylesheet>

    <link href="css/footer1.css" rel="stylesheet">
    <link href="css/header1.css" rel="stylesheet">
    <link id="color_scheme" href="css/theme.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src='/app.js'></script>

    <title>{{ $title ?? 'Market' }}</title>
    @livewireStyles
</head>

<body class="common-home res layout-home1">

    <div id="wrapper" class="wrapper-full banners-effect-7">
        <header id="header" class=" variantleft type_1">
            @livewire('partials.navbar-top')
            @livewire('partials.navbar-mid')
            @livewire('partials.navbar-bottom')
        </header>
        <main>
            {{ $slot }}
        </main>
        @livewire('partials.footer')
    </div>
    @livewire('partials.vendor')
    @livewireScripts
</body>

</html>
