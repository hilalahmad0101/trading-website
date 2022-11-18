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

    <meta name="description" content="Income Gap,  A Modern Investmet Platform">
    <meta name="keywords" content="Income Gap best Earning Platform">
    <link rel="shortcut icon" href="https://al-safa-marwa.com/assets/uploads/logo/favicon.png" type="image/x-icon">

    <link rel="apple-touch-icon" href="https://al-safa-marwa.com/assets/uploads/logo/logo.png">
    <title>Income Gap | {{ $title }}</title>
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://al-safa-marwa.com/assets/uploads/logo/favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Income Gap | {{ $title }}">

    <meta itemprop="name" content="Income Gap | {{ $title }}">
    <meta itemprop="description" content="Income Gap,  A Modern Investmet Platform">
    <meta itemprop="image" content="https://al-safa-marwa.com/assets/uploads/logo/meta.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="*&quot;Income Gap&quot;*">
    <meta property="og:description" content="Income Gap best Earning Platform">
    <meta property="og:image" content="https://al-safa-marwa.com/assets/uploads/logo/meta.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="https://al-safa-marwa.com">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/radialprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flag-icon.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .home-banner {
            height: 105vh;
            background: url(https://al-safa-marwa.com/assets/uploads/content/62e7df341d6fe1659363124.jpg);
            background-size: cover;
            background-position: center top;
            padding-top: 40px;
            overflow: hidden;
        }
    </style>
@livewireStyles
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

    <header id="header-section">
        <div class="overlay">
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid ">
                    <a class="navbar-brand golden-text" href="https://al-safa-marwa.com">
                        <img src="img/logo1.png" alt="Income Gap">
                    </a>
                    <button class="navbar-toggler p-0 " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <img src="img/hamburger.png" alt="hamburger image" />
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('home') ?'active' :'' }} " aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('plan') ?'active' :'' }} " href="{{ route('plan') }}">Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('about-us') ?'active' :'' }} " href="{{ route('about-us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('blog') ?'active' :'' }}" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('faq') ?'active' :'' }}" href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('contact-us') ?'active' :'' }}" href="{{ route('contact-us') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <span class="navbar-text" id="pushNotificationArea">
                        <div class="notification-panel push-notification">
                            <button class="dropdown-toggle">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/notification.png"
                                    alt="notification" />
                                <span class="badge"></span>
                            </button>
                            <ul class="notification-dropdown">
                                <div class="dropdown-box">
                                    <li v-for="(item, index) in items"
                                        @click.prevent="readAt(item.id, item.description.link)">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fas fa-bell"></i>
                                            <div>
                                                <h4 class="golden-text"></h4>
                                                <p></p>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="clear-all fixed-bottom">
                                    <a href="javascript:void(0)" v-if="items.length == 0" class="golden-text">You
                                        have
                                        no notifications</a>
                                    <a href="javascript:void(0)" role="button" type="button"
                                        v-if="items.length > 0" @click.prevent="readAll"
                                        class="btn-clear golden-text">Clear All</a>
                                </div>
                            </ul>
                        </div>



                        <!-- user panel -->
                        <div class="notification-panel user-panel">
                            <button class="dropdown-toggle">
                                <img src="https://al-safa-marwa.com/assets/admin/images/default.png"
                                    class="user-image" alt="user img" />
                            </button>
                            @if (Auth::user())
                            <ul class="notification-dropdown user-dropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/layout.png"
                                            alt="Dashboard" />
                                        <span class="golden-text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/profile.png"
                                            alt="My Profile" />
                                        <span class="golden-text">My Profile</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a class="dropdown-item" href="step-security">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack//img/icon/padlock.png"
                                            alt="2FA Security" />
                                        <span class="golden-text">2FA Security</span>
                                    </a>
                                </li> --}}
                               <livewire.logut />
                            </ul>
                            @else
                            <ul class="notification-dropdown user-dropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/layout.png"
                                            alt="Dashboard" />
                                        <span class="golden-text">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/profile.png"
                                            alt="My Profile" />
                                        <span class="golden-text">Register</span>
                                    </a>
                                </li>
                            </ul>
                            @endif
                           
                            
                        </div>
                    </span>
                </div>
            </nav>
            <!--/ NAVBAR -->
        </div>
    </header>


    {{ $slot }}

    <!-- footer -->
    <footer class="footer">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-box">
                            <a class="navbar-brand golden-text" href="https://al-safa-marwa.com">
                                Income Gap
                            </a>
                            <p>
                                Please Whatsapp for more infohttps://wa.me/message/A3MIF4TCCXTUA1 </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 ps-lg-5">
                        <div class="footer-box">
                            <h4 class="golden-text">Useful Links</h4>
                            <ul>
                                <li>
                                    <a href="https://al-safa-marwa.com">Home</a>
                                </li>
                                <li>
                                    <a href="https://al-safa-marwa.com/about">About</a>
                                </li>
                                <li>
                                    <a href="https://al-safa-marwa.com/plan">Plan</a>
                                </li>
                                <li>
                                    <a href="https://al-safa-marwa.com/blog">Blog</a>
                                </li>
                                <li>
                                    <a href="https://al-safa-marwa.com/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 ps-lg-5">
                        <div class="footer-box">
                            <h4 class="golden-text">Our Services</h4>
                            <ul>
                                <li>
                                    <a href="https://al-safa-marwa.com/terms-amp-conditions/33">Terms &amp;
                                        Conditions</a>
                                </li>
                                <li>
                                    <a href="https://al-safa-marwa.com/privacy-policy/34">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="https://al-safa-marwa.com/faq">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="footer-box">
                            <h4 class="golden-text">Contact Us</h4>

                            <ul>
                                <li>
                                    <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/calling.png"
                                        alt="phone" />
                                    <span>https://wa.me/message/A3MIF4TCCXTUA1</span>
                                </li>
                                <li>
                                    <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/email.png"
                                        alt="email" />
                                    <span>info@income-gap.com</span>
                                </li>
                                <li>
                                    <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/location.png"
                                        alt="address" />
                                    <span>More than 180+ Countries working</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-md-6">
                        <span>Copyright &copy; 2022 Income Gap All Rights Reserved</span>
                    </div>


                    <div class="col-md-6 language text-md-end">
                        <a href="https://al-safa-marwa.com/language/SA"><span class="flag-icon flag-icon-sa"></span>
                            Arabic</a>
                        <a href="https://al-safa-marwa.com/language/US"><span class="flag-icon flag-icon-us"></span>
                            English</a>
                        <a href="https://al-safa-marwa.com/language/IN"><span class="flag-icon flag-icon-in"></span>
                            Hindi</a>
                        <a href="https://al-safa-marwa.com/language/ES"><span class="flag-icon flag-icon-es"></span>
                            Spanish</a>
                        <a href="https://al-safa-marwa.com/language/PK"><span class="flag-icon flag-icon-pk"></span>
                            Urdu</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- scroll top icon -->
    <a href="#" class="scroll-top">
        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/up-arrow2.png" alt="scroll to top" />
    </a>

    <!-- start preloader -->
    <div id="preloader">
        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/bitcoin.gif" alt="preloader"
            class="loader" />
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
    <!-- custom script -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        "use strict";
        (function($) {
            $(document).on('click', '.investNow', function() {
                // $("#investNowModal").toggleClass("modal-open");
                var planModal = new bootstrap.Modal(document.getElementById('investNowModal'))
                planModal.show()
                let data = $(this).data('resource');
                let price = $(this).data('price');
                let symbol = "$";
                let currency = "USD";
                $('.price-range').text(`Invest: ${price}`);

                if (data.fixed_amount == '0') {
                    $('.invest-amount').val('');
                    $('#amount').attr('readonly', false);
                } else {
                    $('.invest-amount').val(data.fixed_amount);
                    $('#amount').attr('readonly', true);
                }

                $('.profit-details').html(
                    `Interest: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}`
                );
                $('.profit-validity').html(
                    `Per ${data.schedule} hours ,  ${(data.is_lifetime == '0') ? `${data.repeatable} times` : `Lifetime`}`
                );
                $('.plan-name').text(data.name);
                $('.plan-id').val(data.id);
                $('.show-currency').text("USD");
            });

        })(jQuery);

        // 

        // @if (Session::has('error'))
        //     toastr.options = {
        //         "closeButton": true,
        //         "progressBar": true
        //     }
        //     toastr.error("{{ session('error') }}");
        // @endif

        // @if (Session::has('info'))
        //     toastr.options = {
        //         "closeButton": true,
        //         "progressBar": true
        //     }
        //     toastr.info("{{ session('info') }}");
        // @endif

        // @if (Session::has('warning'))
        //     toastr.options = {
        //         "closeButton": true,
        //         "progressBar": true
        //     }
        //     toastr.warning("{{ session('warning') }}");
        // @endif
    </script>
<script>
    window.addEventListener('alert', event => {
    toastr[event.detail.type](event.detail.message,
    event.detail.title ?? ''), toastr.options = {
    "closeButton": true,
    "progressBar": true,
    }
    });
    </script>
    
@livewireScripts
</body>

</html>
