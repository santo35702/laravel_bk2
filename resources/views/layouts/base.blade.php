<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="description">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
        <!-- Bootstap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body class="belle template-index template-index-belle">
        <div id="pre-loader">
            <img src="{{ asset('assets/images/loader.gif') }}" alt="Loading..." />
        </div>
        <div class="pageWrapper">
            <!--Search Form Drawer-->
        	<div class="search">
                <div class="search__form">
                    <form class="search-bar__form" action="#">
                        <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                        <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                    </form>
                    <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
                </div>
            </div>
            <!--End Search Form Drawer-->
            <!--Top Header-->
            <div class="top-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                            <div class="currency-picker">
                                <span class="selected-currency">USD</span>
                                <ul id="currencies">
                                    <li data-currency="INR" class="">INR</li>
                                    <li data-currency="GBP" class="">GBP</li>
                                    <li data-currency="CAD" class="">CAD</li>
                                    <li data-currency="USD" class="selected">USD</li>
                                    <li data-currency="AUD" class="">AUD</li>
                                    <li data-currency="EUR" class="">EUR</li>
                                    <li data-currency="JPY" class="">JPY</li>
                                </ul>
                            </div>
                            <div class="language-dropdown">
                                <span class="language-dd">English</span>
                                <ul id="language">
                                    <li class="">German</li>
                                    <li class="">French</li>
                                </ul>
                            </div>
                            <p class="phone-no"><i class="anm anm-phone-s"></i> +880 195-049-6861</p>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        	<div class="text-center">
                                <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                            </div>
                        </div>
                        <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                            <?php if (Route::has('login')): ?>
                            	<span class="user-menu d-block d-lg-none">
                                    <i class="anm anm-user-al" aria-hidden="true"></i>
                                </span>
                                <ul class="customer-links list-inline">
                                    @auth
                                        <li><a href="">Account</a></li>
                                        <li><a href="">Logout</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Create Account</a></li>
                                        @endif
                                    @endauth
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Top Header-->
            <!--Header-->
            <div class="header-wrap classicHeader animated d-flex">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!--Desktop Logo-->
                        <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                            <a href="index.html">
                            	<img src="{{ asset('assets/images/logo.svg') }}" alt="Html Template" title="Html Template" />
                            </a>
                        </div>
                        <!--End Desktop Logo-->
                    </div>
                </div>
            </div>
            {{ $slot }}
        </div>


        <!-- Including Jquery -->
        <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.cookie.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
        <!-- Including Javascript -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/lazysizes.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
