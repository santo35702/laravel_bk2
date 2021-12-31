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
                            @if (Route::has('login'))
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
                            @endif
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
                                    <li class="lvl1 parent"><a href="{{ route('home') }}">Home </a></li>
                                    <li class="lvl1 parent"><a href="#">Shop </a></li>
                                    <li class="lvl1 parent"><a href="#">Product </a></li>
                                    <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-angle-right-l"></i></a></li>
                                            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-angle-right-l"></i></a></li>
                                            <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                                            <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                                            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                                            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                                            <li><a href="404.html" class="site-nav">404</a></li>
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
                                    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                                </a>
                                <!--Minicart Popup-->
                                <div id="header-cart" class="block block-cart">
                                    <ul class="mini-products-list">
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="{{ asset('assets/images/product-images/cape-dress-1.jpg') }}" alt="3/4 Sleeve Kimono Dress" title="" />
                                            </a>
                                            <div class="product-details">
                                            	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                                <div class="variant-cart">Black / XL</div>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                    	<span class="label">Qty:</span>
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="priceRow">
                                                	<div class="product-price">
                                                    	<span class="money">$59.00</span>
                                                    </div>
                                                 </div>
        									</div>
                                        </li>
                                    </ul>
                                    <div class="total">
                                    	<div class="total-in">
                                        	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                        </div>
                                         <div class="buttonSet text-center">
                                            <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                            <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                        </div>
                                    </div>
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
                    <li class="lvl1"><a href="#">Shop </a></li>
                    <li class="lvl1"><a href="product-layout-1.html">Product </a></li>
                    <li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
                        <ul>
                            <li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a></li>
                            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a></li>
                            <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                            <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
                            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                            <li><a href="404.html" class="site-nav">404</a></li>
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
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
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
            <!--End Newsletter Popup -->
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

        @livewireScripts
    </body>
</html>
