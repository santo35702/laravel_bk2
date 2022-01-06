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

        @livewireStyles
    </head>
    <body class="belle @if (request()->routeIs('home'))
        template-index template-index-belle
    @elseif (request()->routeIs('products.index') || request()->routeIs('products.by_category') || request()->routeIs('products.list.index') || request()->routeIs('products.list.by_category'))
        template-collection
    @elseif (request()->routeIs('products.details'))
        template-product
    @elseif (request()->routeIs('about') || request()->routeIs('faq') || request()->routeIs('cart') || request()->routeIs('checkout') || request()->routeIs('compare') || request()->routeIs('wishlist')
     || request()->routeIs('contact') || request()->routeIs('not_found'))
        page-template @if (request()->routeIs('contact'))
            contact-template
        @elseif (request()->routeIs('not_found'))
            lookbook-template error-page
        @endif
    @endif">
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
                            @if (Route::has('login'))
                            	<span class="user-menu d-block d-lg-none">
                                    <i class="anm anm-user-al" aria-hidden="true"></i>
                                </span>
                                <ul class="customer-links list-inline">
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')
                                            <li><a href="">Account</a></li>
                                        @else
                                            <li><a href="">Account</a></li>
                                        @endif
                                        <li><a href="">Logout</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Create Account</a></li>
                                        @endif
                                    @endauth
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--End Top Header-->
            <!--Header-->
            <div class="header-wrap animated d-flex @if (request()->routeIs('home'))
                classicHeader
            @endif">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!--Desktop Logo-->
                        <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                            <a href="{{ route('home') }}">
                            	<img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" title="Logo" />
                            </a>
                        </div>
                        <!--End Desktop Logo-->
                        <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                            <div class="d-block d-lg-none">
                                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                	<i class="icon anm anm-times-l"></i>
                                    <i class="anm anm-bars-r"></i>
                                </button>
                            </div>
                            <!--Desktop Menu-->
                            <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                                <ul id="siteNav" class="site-nav medium center hidearrow">
                                    <li class="lvl1"><a href="{{ route('home') }}">Home </a></li>
                                    <li class="lvl1"><a href="{{ route('about') }}">About Us </a></li>
                                    <li class="lvl1"><a href="{{ route('products.index') }}">Products </a></li>
                                    <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('compare') }}" class="site-nav">Compare Product </a></li>
                                            <li><a href="{{ route('checkout') }}" class="site-nav">Checkout</a></li>
                                            <li><a href="{{ route('faq') }}" class="site-nav">FAQs</a></li>
                                            <li><a href="{{ route('not_found') }}" class="site-nav">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1 parent dropdown"><a href="#">Blog <i class="anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                                            <li><a href="blog-article.html" class="site-nav">Article</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1"><a href="{{ route('contact') }}">Contact Us </a></li>
                                </ul>
                            </nav>
                            <!--End Desktop Menu-->
                        </div>
                        <!--Mobile Logo-->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        	<div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" title="Logo" />
                                </a>
                            </div>
                        </div>
                        <!--End Mobile Logo-->
                        <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                            <div class="site-cart">
                                <a href="#;" class="site-header__cart" title="Cart">
                                	<i class="icon anm anm-bag-l"></i>
                                    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{ Cart::instance('cart')->count() ? Cart::instance('cart')->count() : '0' }}</span>
                                </a>
                                <!--Minicart Popup-->
                                <div id="header-cart" class="block block-cart">
                                    @if (Cart::instance('cart')->count() > 0)
                                    <ul class="mini-products-list">
                                        @foreach (Cart::instance('cart')->content() as $key)
                                        <li class="item">
                                            <a class="product-image" href="{{ route('products.details', $key->model->slug) }}">
                                                <img src="{{ asset('assets/images/product-images/' . $key->model->image) }}" alt="{{ $key->model->title }}" title="{{ $key->model->title }}" />
                                            </a>
                                            <div class="product-details">
                                            	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                <a class="pName" href="{{ route('products.details', $key->model->slug) }}">{{ $key->model->title }}</a>
                                                <div class="variant-cart">Black / XL</div>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                    	<span class="label">Qty:</span>
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="{{ $key->qty }}" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="priceRow">
                                                	<div class="product-price">
                                                    	<span class="money">${{ $key->subtotal }}</span>
                                                    </div>
                                                 </div>
        									</div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="total">
                                    	<div class="total-in">
                                        	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">${{ Cart::instance('cart')->subtotal() }}</span></span>
                                        </div>
                                         <div class="buttonSet text-center">
                                            <a href="{{ route('cart') }}" class="btn btn-secondary btn--small">View Cart</a>
                                            <a href="{{ route('checkout') }}" class="btn btn-secondary btn--small">Checkout</a>
                                        </div>
                                    </div>
                                    @else
                                        <ul class="mini-products-list d-flex justify-content-center align-items-center">
                                            <h3>Sorry...!! You have no Items in Cart</h3>
                                        </ul>
                                    @endif
                                </div>
                                <!--End Minicart Popup-->
                            </div>
                            <div class="site-header__search">
                            	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header-->
            <!--Mobile Menu-->
            <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1"><a href="{{ route('home') }}">Home </a></li>
                    <li class="lvl1"><a href="{{ route('about') }}">About Us </a></li>
                    <li class="lvl1"><a href="{{ route('products.index') }}">Products </a></li>
                    <li class="lvl1 parent megamenu"><a href="#">Pages <i class="anm anm-plus-l"></i></a>
                        <ul>
                            <li><a href="{{ route('compare') }}" class="site-nav">Compare Product </a></li>
                            <li><a href="{{ route('checkout') }}" class="site-nav">Checkout</a></li>
                            <li><a href="{{ route('faq') }}" class="site-nav">FAQs</a></li>
                            <li><a href="{{ route('not_found') }}" class="site-nav">404</a></li>
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>
                        <ul>
                            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                            <li><a href="blog-article.html" class="site-nav">Article</a></li>
                        </ul>
                    </li>
                    <li class="lvl1"><a href="{{ route('contact') }}">Contact Us </a></li>
                </ul>
            </div>
            <!--End Mobile Menu-->

            <!--Body Content-->
            {{ $slot }}
            <!--End Body Content-->

            <!--Footer-->
            <footer id="footer">
                <div class="newsletter-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                                <div class="display-table">
                                    <div class="display-table-cell footer-newsletter">
                                        <div class="section-header text-center">
                                            <label class="h2"><span>sign up for </span>newsletter</label>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                                <span class="input-group__btn">
                                                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                                <div class="footer-social">
                                    <ul class="list--inline site-footer__social-icons social-icons">
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer">
                    <div class="container">
                        <!--Footer Links-->
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                	<h4 class="h4">Quick Shop</h4>
                                    <ul>
                                    	<li><a href="#">Women</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Kids</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Sale</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                	<h4 class="h4">Informations</h4>
                                    <ul>
                                    	<li><a href="#">About us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Terms &amp; condition</a></li>
                                        <li><a href="#">My Account</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                	<h4 class="h4">Customer Services</h4>
                                    <ul>
                                    	<li><a href="#">Request Personal Data</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Orders and Returns</a></li>
                                        <li><a href="#">Support Center</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                	<h4 class="h4">Contact Us</h4>
                                    <ul class="addressFooter">
                                    	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                        <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                        <li class="email"><i class="icon anm anm-envelope-l"></i><p>santo35702@gmail.com</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="footer-bottom">
                            <div class="row">
                            	<!--Footer Copyright-->
        	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="mailto:santo35702@gmail.com">MD: Suvo</a></div>
                                <!--End Footer Copyright-->
                                <!--Footer Payment Icon-->
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                                	<ul class="payment-icons list--inline">
                                		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <!--End Footer Payment Icon-->
                            </div>
                        </div>
                        <!--End Footer Links-->
                    </div>
                </div>
            </footer>
            <!--End Footer-->
            <!--Scoll Top-->
            <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
            <!--End Scoll Top-->

            <!-- Newsletter Popup -->
            @if (request()->routeIs('home'))
            <div class="newsletter-wrap" id="popup-container">
                <div id="popup-window">
                    <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                    <!-- Modal content-->
                    <div class="display-table splash-bg">
                        <div class="display-table-cell width40"><img src="{{ asset('assets/images/newsletter-img.jpg') }}" alt="Join Our Mailing List" title="Join Our Mailing List" /></div>
                        <div class="display-table-cell width60 text-center">
                            <div class="newsletter-left">
                                <h2>Join Our Mailing List</h2>
                                <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
                                <form>
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                                        </span>
                                    </div>
                                </form>
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!--End Newsletter Popup -->

            <!--Quick View popup-->
            <div class="modal fade quick-view-popup" id="content_quickview">
            	<div class="modal-dialog">
                	<div class="modal-content">
                    	<div class="modal-body">
                            <div id="ProductSection-product-template" class="product-template__container prstyle1">
                        <div class="product-single">
                        <!-- Start model close -->
                        <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                        <!-- End model close -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="pl-20">
                                        <img class="blur-up lazyload" data-src="assets/images/product-detail-page/camelia-reversible-big1.jpg" src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h2 class="product-single__title">Product Quick View Popup</h2>
                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                            <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                            </span>
                                        </p>
                                        <div class="product-single__description rte">
                                            Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                        </div>

                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                              <label class="header">Color: <span class="slVariant">Red</span></label>
                                              <div data-value="Red" class="swatch-element color red available">
                                                <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                                <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                              </div>
                                              <div data-value="Blue" class="swatch-element color blue available">
                                                <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                                <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                              </div>
                                              <div data-value="Green" class="swatch-element color green available">
                                                <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                                <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                              </div>
                                              <div data-value="Gray" class="swatch-element color gray available">
                                                <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                                <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                              <label class="header">Size: <span class="slVariant">XS</span></label>
                                              <div data-value="XS" class="swatch-element xs available">
                                                <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                              </div>
                                              <div data-value="S" class="swatch-element s available">
                                                <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                              </div>
                                              <div data-value="M" class="swatch-element m available">
                                                <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                              </div>
                                              <div data-value="L" class="swatch-element l available">
                                                <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                              </div>
                                            </div>
                                        </div>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                            <div class="display-table-cell">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>
                        <!--End-product-single-->
                        </div>
                    </div>
                		</div>
                	</div>
                </div>
            </div>
            <!--End Quick View popup-->

            @if (request()->routeIs('products.details'))
                <div class="hide">
                  <div id="sizechart">
                    <h3>WOMEN'S BODY SIZING CHART</h3>
                    <table>
                      <tbody>
                        <tr>
                          <th>Size</th>
                          <th>XS</th>
                          <th>S</th>
                          <th>M</th>
                          <th>L</th>
                          <th>XL</th>
                        </tr>
                        <tr>
                          <td>Chest</td>
                          <td>31" - 33"</td>
                          <td>33" - 35"</td>
                          <td>35" - 37"</td>
                          <td>37" - 39"</td>
                          <td>39" - 42"</td>
                        </tr>
                        <tr>
                          <td>Waist</td>
                          <td>24" - 26"</td>
                          <td>26" - 28"</td>
                          <td>28" - 30"</td>
                          <td>30" - 32"</td>
                          <td>32" - 35"</td>
                        </tr>
                        <tr>
                          <td>Hip</td>
                          <td>34" - 36"</td>
                          <td>36" - 38"</td>
                          <td>38" - 40"</td>
                          <td>40" - 42"</td>
                          <td>42" - 44"</td>
                        </tr>
                        <tr>
                          <td>Regular inseam</td>
                          <td>30"</td>
                          <td>30½"</td>
                          <td>31"</td>
                          <td>31½"</td>
                          <td>32"</td>
                        </tr>
                        <tr>
                          <td>Long (Tall) Inseam</td>
                          <td>31½"</td>
                          <td>32"</td>
                          <td>32½"</td>
                          <td>33"</td>
                          <td>33½"</td>
                        </tr>
                      </tbody>
                    </table>
                    <h3>MEN'S BODY SIZING CHART</h3>
                    <table>
                      <tbody>
                        <tr>
                          <th>Size</th>
                          <th>XS</th>
                          <th>S</th>
                          <th>M</th>
                          <th>L</th>
                          <th>XL</th>
                          <th>XXL</th>
                        </tr>
                        <tr>
                          <td>Chest</td>
                          <td>33" - 36"</td>
                          <td>36" - 39"</td>
                          <td>39" - 41"</td>
                          <td>41" - 43"</td>
                          <td>43" - 46"</td>
                          <td>46" - 49"</td>
                        </tr>
                        <tr>
                          <td>Waist</td>
                          <td>27" - 30"</td>
                          <td>30" - 33"</td>
                          <td>33" - 35"</td>
                          <td>36" - 38"</td>
                          <td>38" - 42"</td>
                          <td>42" - 45"</td>
                        </tr>
                        <tr>
                          <td>Hip</td>
                          <td>33" - 36"</td>
                          <td>36" - 39"</td>
                          <td>39" - 41"</td>
                          <td>41" - 43"</td>
                          <td>43" - 46"</td>
                          <td>46" - 49"</td>
                        </tr>
                      </tbody>
                    </table>
                    <div style="padding-left: 30px;"><img src="assets/images/size.jpg" alt=""></div>
                  </div>
            	</div>
                <div class="hide">
                	<div id="productInquiry">
                    	<div class="contact-form form-vertical">
                      <div class="page-title">
                        <h3>Camelia Reversible Jacket</h3>
                      </div>
                      <form method="post" action="#" id="contact_form" class="contact-form">
                        <input type="hidden" name="form_type" value="contact" />
                        <input type="hidden" name="utf8" value="✓" />
                        <div class="formFeilds">
                          <input type="hidden"  name="contact[product name]" value="Camelia Reversible Jacket">
                          <input type="hidden"  name="contact[product link]" value="/products/camelia-reversible-jacket-black-red">
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                              	<input type="text" id="ContactFormName" name="contact[name]" placeholder="Name"  value="" required>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                              <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email"  autocapitalize="off" value="" required>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <input required type="tel" id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" placeholder="Phone Number"  value="">
                            </div>
                          </div>
                          <div class="row">
                          	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          		<textarea required rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message" ></textarea>
                          	</div>
                          </div>
                          <div class="row">
                          	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          		<input type="submit" class="btn" value="Send Message">
                            </div>
                         </div>
                        </div>
                      </form>
                    </div>
                  	</div>
                </div>
            @endif
        </div>


        <!-- Including Jquery -->
        <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.cookie.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
        @if (request()->routeIs('not_found'))
            <script src="{{ asset('assets/js/vendor/masonry.js') }}" type="text/javascript"></script>
        @endif
        <!-- Including Javascript -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/lazysizes.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- Photoswipe Gallery -->
        @if (request()->routeIs('products.details'))
            <script src="{{ asset('assets/js/vendor/photoswipe.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/photoswipe-ui-default.min.js') }}"></script>
        @endif

        <!--For Newsletter Popup-->
        <script>
            jQuery(document).ready(function(){
              jQuery('.closepopup').on('click', function () {
                  jQuery('#popup-container').fadeOut();
                  jQuery('#modalOverly').fadeOut();
              });

              var visits = jQuery.cookie('visits') || 0;
              visits++;
              jQuery.cookie('visits', visits, { expires: 1, path: '/' });
              console.debug(jQuery.cookie('visits'));
              if ( jQuery.cookie('visits') > 1 ) {
                jQuery('#modalOverly').hide();
                jQuery('#popup-container').hide();
              } else {
                  var pageHeight = jQuery(document).height();
                  jQuery('<div id="modalOverly"></div>').insertBefore('body');
                  jQuery('#modalOverly').css("height", pageHeight);
                  jQuery('#popup-container').show();
              }
              if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
            });

            jQuery(document).mouseup(function(e){
              var container = jQuery('#popup-container');
              if( !container.is(e.target)&& container.has(e.target).length === 0)
              {
                container.fadeOut();
                jQuery('#modalOverly').fadeIn(200);
                jQuery('#modalOverly').hide();
              }
            });
        </script>
        <!--End For Newsletter Popup-->

        @if (request()->routeIs('products.details'))
        <script>
           $(function(){
               var $pswp = $('.pswp')[0],
                   image = [],
                   getItems = function() {
                       var items = [];
                       $('.lightboximages a').each(function() {
                           var $href   = $(this).attr('href'),
                               $size   = $(this).data('size').split('x'),
                               item = {
                                   src : $href,
                                   w: $size[0],
                                   h: $size[1]
                               }
                               items.push(item);
                       });
                       return items;
                   }
               var items = getItems();

               $.each(items, function(index, value) {
                   image[index]     = new Image();
                   image[index].src = value['src'];
               });
               $('.prlightbox').on('click', function (event) {
                   event.preventDefault();

                   var $index = $(".active-thumb").parent().attr('data-slick-index');
                   $index++;
                   $index = $index-1;

                   var options = {
                       index: $index,
                       bgOpacity: 0.9,
                       showHideOpacity: true
                   }
                   var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                   lightBox.init();
               });
           });
        </script>

        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @livewireScripts
    </body>
</html>
