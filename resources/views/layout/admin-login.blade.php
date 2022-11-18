<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content=",  A Modern Investmet Platform">
    <meta name="keywords" content=" best Earning Platform">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <link rel="apple-touch-icon" href="img/logo.png">
    <title>Admin | Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Login">

    <meta itemprop="name" content="Login">
    <meta itemprop="description" content=",  A Modern Investmet Platform">
    <meta itemprop="image" content="img/meta.png600x315">

    <meta property="og:type" content="website">
    <meta property="og:title" content="*&quot;&quot;*">
    <meta property="og:description" content=" best Earning Platform">
    <meta property="og:image" content="img/meta.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="https://al-safa-marwa.com/login">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />


    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/radialprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flag-icon.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/modernizr.custom.js') }} "></script>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @livewireStyles
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- PAGE-BANNER -->
    <style>
        .page-banner {
            background-image: url(img/banner.jpg);
        }
    </style>

    {{ $slot }}



    <!-- scroll top icon -->
    <a href="#" class="scroll-top" style="display: none;">
        <img src="{{ asset('img/up-arrow2.png') }}" alt="scroll to top" />
    </a>

    <!-- start preloader -->
    <div id="preloader" style="display: none;">
        <img src="{{ asset('img/bitcoin.gif') }}" alt="preloader" class="loader" />
    </div>
    <!-- end preloader -->


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/radialprogress.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>


    <script src="{{ asset('js/notiflix-aio-2.7.0.min.js') }}"></script>
    <script src="{{ asset('js/pusher.min.js') }}"></script>
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('js/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @livewireScripts
    <script>
        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script>
</body>

</html>
