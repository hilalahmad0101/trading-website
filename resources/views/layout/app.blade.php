<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Income Gap,  A Modern Investmet Platform">
    <meta name="keywords" content="Income Gap best Earning Platform">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">
    <title>Income Gap | {{ $title }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Income Gap | {{ $title }}">

    <meta itemprop="name" content="Income Gap | {{ $title }}">
    <meta itemprop="description" content="Income Gap,  A Modern Investmet Platform">
    <meta itemprop="image" content="{{ asset('img/meta.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="*&quot;Income Gap&quot;*">
    <meta property="og:description" content="Income Gap best Earning Platform">
    <meta property="og:image" content="{{ asset('img/meta.png') }}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="{{ $title }}">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />


    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/radialprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css//flags.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css//style.css') }}">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @livewireStyles

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!------ sidebar ------->
        <div id="sidebar">
            <a class="navbar-brand golden-text" href="{{ route('dashboard') }}">Income Gap</a>
            <ul class="pb-4">
                <!-- list item -->
                <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="sidebar-link">
                        <img src="{{ asset('img/layout.png') }}" alt="Dashboard" />Dashboard </a>
                </li>
                <li class="{{ Request::routeIs('invest-history') ? 'active' : '' }}">
                    <a href="{{ route('invest-history') }}" class="sidebar-link">
                        <img src="{{ asset('img/growth-graph.png') }}" alt="invest history" />invest history </a>
                </li>
                <li class="{{ Request::routeIs('add-fund') ? 'active' : '' }}">
                    <a href="{{ route('add-fund') }}" class="sidebar-link">
                        <img src="{{ asset('img/money-bag.png') }}" alt="Add Fund" />Add Fund </a>
                </li>
                <li class="{{ Request::routeIs('fund') ? 'active' : '' }}">
                    <a href="{{ route('fund') }}" class="sidebar-link">
                        <img src="{{ asset('img/fund.png') }}" alt="Fund History" />Fund History </a>
                </li>
                <li class="{{ Request::routeIs('money-transfer') ? 'active' : '' }}">
                    <a href="{{ route('money-transfer') }}" class="sidebar-link">
                        <img src="{{ asset('img/money-transfer.png') }}" alt="transfer" />transfer </a>
                </li>
                <li class="{{ Request::routeIs('transaction') ? 'active' : '' }}">
                    <a href="{{ route('transaction') }}" class="sidebar-link">
                        <img src="{{ asset('img/transaction.png') }}" alt="transaction" />transaction </a>
                </li>
                <li class="{{ Request::routeIs('payout') ? 'active' : '' }}">
                    <a href="{{ route('payout') }}" class="sidebar-link">
                        <img src="{{ asset('img/payout.png') }}" alt="payout" />payout </a>
                </li>
                <li class="{{ Request::routeIs('payout-history') ? 'active' : '' }}">
                    <a href="{{ route('payout-history') }}" class="sidebar-link">
                        <img src="{{ asset('img/pay-history.png') }}" alt="payout history" />payout history </a>
                </li>
                <li class="{{ Request::routeIs('referral') ? 'active' : '' }}">
                    <a href="{{ route('referral') }}" class="sidebar-link">
                        <img src="{{ asset('img/refferal.png') }}" alt="my referral" />my referral </a>
                </li>
                <li class="{{ Request::routeIs('referral-bonus') ? 'active' : '' }}">
                    <a href="{{ route('referral-bonus') }}" class="sidebar-link">
                        <img src="{{ asset('img/bonus.png') }}" alt="referral bonus" />referral bonus </a>
                </li>
                <li class="{{ Request::routeIs('profile') ? 'active' : '' }}">
                    <a href="{{ route('profile') }}" class="sidebar-link">
                        <img src="{{ asset('img/setting.png') }}" alt="profile settings" />profile settings </a>
                </li>
                {{-- <li class="{{ Request::routeIs('ticket') ? 'active':'' }}">
                    <a href="{{ route('ticket') }}" class="sidebar-link">
                        <img src="{{ asset('img/support.png')}}" alt="support ticket" />support ticket </a>
                </li> --}}
            </ul>
        </div>

        <!------- Nav + Content ---------->
        <div id="content">
            <div class="overlay">
                <!----- navbar ------>
                <nav class="navbar navbar-expand-lg fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand golden-text" href="https://income-gap.com">
                            <img src="{{ asset('img/logo1.png') }}" alt="Income Gap">
                        </a>
                        <button type="button" id="sidebarCollapse" class="sidebar-toggler p-0">
                            <img src="{{ asset('img/hamburger.png') }}" alt="hamburger image" />
                        </button>

                        <span class="navbar-text" id="pushNotificationArea">
                            <!---- notification panel ---->
                            <div class="notification-panel push-notification">
                                <button class="dropdown-toggle">
                                    <img src="{{ asset('img/notification.png') }}" alt="notification" />
                                    <span class="badge"></span>
                                </button>
                                <ul class="notification-dropdown">
                                    <div class="dropdown-box">
                                        <li v-for="(item, index) in items"
                                            @click.prevent="readAt(item.id, item.description.link)">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fas fa-bell"></i>
                                                <div>
                                                    <h4 class="golden-text">
                                                    </h4>
                                                    <p></p>
                                                </div>
                                            </a>
                                        </li>
                                    </div>
                                    <div class="clear-all fixed-bottom">
                                        <a href="javascript:void(0)" v-if="items.length == 0" class="golden-text">You
                                            have no notifications</a>
                                        <a href="javascript:void(0)" role="button" type="button"
                                            v-if="items.length > 0" @click.prevent="readAll"
                                            class="btn-clear golden-text">Clear All</a>
                                    </div>
                                </ul>
                            </div>



                            <!---- user panel ---->
                            <div class="notification-panel user-panel">
                                <button class="dropdown-toggle">
                                    <img src="{{ asset('img/default.png') }}" class="user-image" alt="user img" />
                                </button>
                                <ul class="notification-dropdown user-dropdown">
                                    <li>
                                        <a class="dropdown-item" href="dashboard">
                                            <img src="{{ asset('img/layout.png') }}" alt="Dashboard" />
                                            <span class="golden-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="profile">
                                            <img src="{{ asset('img/profile.png') }}" alt="My Profile" />
                                            <span class="golden-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="twostep-security">
                                            <img src="{{ asset('img/padlock.png') }}" alt="2FA Security" />
                                            <span class="golden-text">2FA Security</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://income-gap.com/logout"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            <img src="{{ asset('img/log-out.png') }}" alt="Logout" />
                                            <span class="golden-text">Logout</span>
                                        </a>
                                        <form id="logout-form" action="https://income-gap.com/logout" method="POST"
                                            class="d-none">
                                            <input type="hidden" name="_token"
                                                value="mKygfT4qjQGIlALVzNxAaqfkqF1u2a8nRtieBteM">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </nav>

                <!------------- others main dashboard body content ------------>
                {{-- 
                <!---- other balances ----->
                <section class="statistic-section mt-5 pt-5 pb-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="header-text-full">
                                    <h2>dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="box" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/fund.png')}}" alt="Main Balance" />
                                    </div>
                                    <h4>Main Balance</h4>
                                    <h2><small><sup>$</sup></small>5</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="box" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/money-bag.png')}}" alt="Interest Balance" />
                                    </div>
                                    <h4>Interest Balance</h4>
                                    <h2><small><sup>$</sup></small>0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                                <div class="box" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/invest.png')}}" alt="Total Deposit" />
                                    </div>
                                    <h4>Total Deposit</h4>
                                    <h2><small><sup>$</sup></small>0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="box" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/pay-history.png')}}" alt="Total Earn" />
                                    </div>
                                    <h4>Total Earn</h4>
                                    <h2><small><sup>$</sup></small>0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!---- charts ----->
                <section class="chart-information mt-5">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="progress-wrapper">
                                    <div id="container" class="apexcharts-canvas"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="progress-wrapper progress-wrapper-circle">
                                    <div
                                        class="progress-container d-flex flex-column flex-sm-row justify-content-around">
                                        <div class="circular-progress cp_1">
                                            <svg class="radial-progress" data-percentage="0" viewBox="0 0 80 80">
                                                <circle class="incomplete" cx="40" cy="40"
                                                    r="35"></circle>
                                                <circle class="complete" cx="40" cy="40"
                                                    r="35"
                                                    style="
                                    stroke-dashoffset: 39.58406743523136;
                                    ">
                                                </circle>
                                                <text class="percentage" x="50%" y="53%"
                                                    transform="matrix(0, 1, -1, 0, 80, 0)">
                                                    0 %
                                                </text>
                                            </svg>
                                            <h4 class="golden-text mt-4 text-center">
                                                Invest Completed </h4>
                                        </div>

                                        <div class="circular-progress cp_3">
                                            <svg class="radial-progress" data-percentage="100" viewBox="0 0 80 80">
                                                <circle class="incomplete" cx="40" cy="40"
                                                    r="35"></circle>
                                                <circle class="complete" cx="40" cy="40"
                                                    r="35"
                                                    style="
                                    stroke-dashoffset: 39.58406743523136;
                                    ">
                                                </circle>
                                                <text class="percentage" x="50%" y="53%"
                                                    transform="matrix(0, 1, -1, 0, 80, 0)">
                                                    100 %
                                                </text>
                                            </svg>

                                            <h4 class="golden-text mt-4 text-center">
                                                ROI Speed </h4>
                                        </div>

                                        <div class="circular-progress cp_2">
                                            <svg class="radial-progress" data-percentage="0" viewBox="0 0 80 80">
                                                <circle class="incomplete" cx="40" cy="40"
                                                    r="35"></circle>
                                                <circle class="complete" cx="40" cy="40"
                                                    r="35"
                                                    style="
                                    stroke-dashoffset: 147.3406954533613;
                                    ">
                                                </circle>
                                                <text class="percentage" x="50%" y="53%"
                                                    transform="matrix(0, 1, -1, 0, 80, 0)">
                                                    0 %
                                                </text>
                                            </svg>

                                            <h4 class="golden-text mt-4 text-center">
                                                ROI Redeemed </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!----- account balances ----->
                <section class="statistic-section mt-5 pt-5 pb-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="header-text-full">
                                    <h2 class="text-center">Account Statistics</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="box" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/money-bag.png')}}" alt="Total Invest" />
                                    </div>
                                    <h4>Total Invest</h4>
                                    <h2><small><sup>$</sup></small>0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="box" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/payout.png')}}" alt="Total Payout" />
                                    </div>
                                    <h4>Total Payout</h4>
                                    <h2><small><sup>$</sup></small>0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                                <div class="box" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/support.png')}}" alt="Total Ticket" />
                                    </div>
                                    <h4>Total Ticket</h4>
                                    <h2>0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="box" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-anchor-placement="center-bottom">
                                    <div class="img-box">
                                        <img src="{{ asset('img/bonus.png')}}" alt="Total Referral Bonus" />
                                    </div>
                                    <h4>Total Referral Bonus</h4>
                                    <h2><small><sup>$</sup></small>0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!----- refferal-information ----->
                <section class="refferal-link mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="box">
                                    <h4 class="golden-text">Referral Link</h4>
                                    <div class="input-group">
                                        <input type="text" value="https://income-gap.com/register/tojyvejo"
                                            class="form-control" id="sponsorURL" readonly />
                                        <button class="gold-btn copytext" id="copyBoard" onclick="copyFunction()"><i
                                                class="fa fa-copy mx-1"></i>copy link</button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 refferal-information ">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{ asset('img/deposit.png')}}" alt="Referral Bonus img" />
                                    </div>
                                    <div>
                                        <h4 class="golden-text">The last Referral Bonus</h4>
                                        <p>$ 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                {{ $slot }}


            </div>
        </div>
    </div>


    <!-- scroll top icon -->
    <a href="#" class="scroll-top">
        <img src="{{ asset('img/up-arrow2.png') }}" alt="scroll to top" />
    </a>

    <!-- start preloader -->
    <!-- end preloader -->



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/radialprogress.js') }}"></script>
    <script src="{{ asset('js/jquery.flagstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>


    <script src="{{ asset('js/notiflix-aio-2.7.0.min.js') }}"></script>
    <script src="{{ asset('js/pusher.min.js') }}"></script>
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        'use strict';
        let pushNotificationArea = new Vue({
            el: "#pushNotificationArea",
            data: {
                items: [],
            },
            beforeMount() {
                this.getNotifications();
                this.pushNewItem();
            },
            methods: {
                getNotifications() {
                    let app = this;
                    axios.get("push-notification-show")
                        .then(function(res) {
                            app.items = res.data;
                        })
                },
                readAt(id, link) {
                    let app = this;
                    let url = "push-notification-readAt/0";
                    url = url.replace(/.$/, id);
                    axios.get(url)
                        .then(function(res) {
                            if (res.status) {
                                app.getNotifications();
                                if (link != '#') {
                                    window.location.href = link
                                }
                            }
                        })
                },
                readAll() {
                    let app = this;
                    let url = "push.notification.readAll";
                    axios.get(url)
                        .then(function(res) {
                            if (res.status) {
                                app.items = [];
                            }
                        })
                },
                pushNewItem() {
                    let app = this;
                    // Pusher.logToConsole = true;
                    let pusher = new Pusher("4e562a249c39a1057d2e", {
                        encrypted: true,
                        cluster: "ap2"
                    });
                    let channel = pusher.subscribe('user-notification.' + "64");
                    channel.bind('App\\Events\\UserNotification', function(data) {
                        app.items.unshift(data.message);
                    });
                    channel.bind('App\\Events\\UpdateUserNotification', function(data) {
                        app.getNotifications();
                    });
                }
            }
        });
    </script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <script>
        "use strict";

        var options = {
            theme: {
                mode: 'dark',
            },

            series: [{
                    name: "Investment",
                    color: 'rgba(247, 147, 26, 1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                    name: "Payout",
                    color: 'rgba(240, 16, 16, 1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                    name: "Deposit",
                    color: 'rgba(255, 72, 0, 1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                    name: "Deposit Bonus",
                    color: 'rgba(39, 144, 195, 1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                    name: "Investment Bonus",
                    color: 'rgba(136, 203, 245, 1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                }
            ],
            chart: {
                type: 'bar',
                // height: ini,
                background: '#000',
                toolbar: {
                    show: false
                }

            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ],

            },
            yaxis: {
                title: {
                    text: "{{ Request::routeIs('dashboard') ? 'active' : '' }}"
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                colors: ['#000'],
                y: {
                    formatter: function(val) {
                        return "$" + val + "{{ Request::routeIs('dashboard') ? 'active' : '' }}"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#container"), options);
        chart.render();

        function copyFunction() {
            var copyText = document.getElementById("sponsorURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>

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
