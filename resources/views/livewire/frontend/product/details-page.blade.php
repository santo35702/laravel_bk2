<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">
        <!--Breadcrumb-->
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="{{ route('home') }}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span class="text-capitalize">{{ $product->title }}</span>
            </div>
        </div>
        <!--End Breadcrumb-->

        <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
            <!--product-single-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img">
                            <div class="product-thumb">
                                <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                    <a data-image="{{ asset('assets/images/product-images/' . $product->image ) }}" data-zoom-image="{{ asset('assets/images/product-images/' . $product->image ) }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                        <img class="blur-up lazyload" data-src="{{ asset('assets/images/product-images/' . $product->image ) }}" src="{{ asset('assets/images/product-images/' . $product->image ) }}" alt="{{ $product->title }}" />
                                    </a>
                                    <a data-image="assets/images/product-detail-page/camelia-reversible-big10.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big10.jpg" class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1">
                                        <img class="blur-up lazyload" data-src="assets/images/product-detail-page/camelia-reversible5.jpg" src="assets/images/product-detail-page/camelia-reversible5.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="zoompro-wrap product-zoom-right pl-20">
                                <div class="zoompro-span">
                                    <img class="blur-up lazyload zoompro" data-zoom-image="{{ asset('assets/images/product-images/' . $product->image ) }}" alt="{{ $product->title }}" src="{{ asset('assets/images/product-images/' . $product->image ) }}" />
                                </div>
                                <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                <div class="product-buttons">
                                    <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                    <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="lightboximages">
                                <a href="{{ asset('assets/images/product-images/' . $product->image ) }}" data-size="1462x2048"></a>
                                <a href="assets/images/product-detail-page/camelia-reversible-big1.jpg" data-size="1462x2048"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-single__meta">
                            <h1 class="product-single__title">{{ $product->title }}</h1>
                            <div class="prInfoRow">
                                <div class="product-stock"> <span class="{{ $product->stock_status === 'instock' ? 'instock' : 'outstock' }}">{{ $product->stock_status == 'instock' ? 'In-Stock' : 'Out-Stock' }}</span></div>
                                <div class="product-sku">SKU: <span class="variant-sku">{{ $product->sku }}</span></div>
                                <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                            </div>
                            <p class="product-single__price product-single__price-product-template">
                                <span class="visually-hidden">Regular price</span>
                                <s id="ComparePrice-product-template"><span class="money">${{ $product->regular_price }}</span></s>
                                <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template"><span class="money">${{ $product->sale_price }}</span></span>
                                </span>
                                <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                    <span>You Save</span>
                                    <span id="SaveAmount-product-template" class="product-single__save-amount">
                                    <span class="money">$100.00</span>
                                    </span>
                                    <span class="off">(<span>16</span>%)</span>
                                </span>
                            </p>
                            <div class="orderMsg" data-user="23" data-time="24">
                                <img src="{{ asset('assets/images/order-icon.jpg') }}" alt="" />
                                <strong class="items">5</strong> sold in last <strong class="time">26</strong> hours
                            </div>
                        </div>
                        <div class="product-single__description rte">
                            <p>{{ $product->short_description }}</p>
                        </div>
                        <div id="quantity_message">Hurry! Only  <span class="items">4</span>  left in stock.</div>
                        <form method="" action="#" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                            <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                <div class="product-form__item">
                                    <label class="header">Color: <span class="slVariant">Red</span></label>
                                    <div data-value="Red" class="swatch-element color red available">
                                        <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url({{ asset('assets/images/product-detail-page/variant1-1.jpg') }});" title="Red"></label>
                                    </div>
                                    <div data-value="Blue" class="swatch-element color blue available">
                                        <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url({{ asset('assets/images/product-detail-page/variant1-2.jpg') }});" title="Blue"></label>
                                    </div>
                                    <div data-value="Green" class="swatch-element color green available">
                                        <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url({{ asset('assets/images/product-detail-page/variant1-3.jpg') }});" title="Green"></label>
                                    </div>
                                    <div data-value="Gray" class="swatch-element color gray available">
                                        <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url({{ asset('assets/images/product-detail-page/variant1-4.jpg') }});" title="Gray"></label>
                                    </div>
                                    <div data-value="aqua" class="swatch-element color aqua available">
                                        <input class="swatchInput" id="swatch-0-aqua" type="radio" name="option-0" value="aqua">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-aqua" style="background-image:url({{ asset('assets/images/product-detail-page/variant1-5.jpg') }});" title="aqua"></label>
                                    </div>
                                    <div data-value="Orange" class="swatch-element color orange available">
                                        <input class="swatchInput" id="swatch-0-orange" type="radio" name="option-0" value="Orange">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-orange" style="background-image:url({{ asset('assets/images/product-detail-page/variant1-6.jpg') }});" title="Orange"></label>
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
                                    <div data-value="XL" class="swatch-element xl available">
                                        <input class="swatchInput" id="swatch-1-xl" type="radio" name="option-1" value="XL">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-xl" title="XL">XL</label>
                                    </div>
                                </div>
                            </div>
                            <p class="infolinks"><a href="#sizechart" class="sizelink btn"> Size Guide</a> <a href="#productInquiry" class="emaillink btn"> Ask About this Product</a></p>
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
                                    <a href="#" class="btn product-form__cart-submit" wire:click.prevent="AddToCart({{ $product->id }}, '{{ $product->title }}', {{ $product->regular_price }})">Add To Cart</a>
                                    {{-- <button type="button" name="add" class="btn product-form__cart-submit">
                                        <span>Add to cart</span>
                                    </button> --}}
                                </div>
                                <div class="shopify-payment-button" data-shopify="payment-button">
                                    <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                </div>
                            </div>
                            <!-- End Product Action -->
                        </form>
                        <div class="display-table shareRow">
                            <div class="display-table-cell medium-up--one-third">
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                </div>
                            </div>
                            <div class="display-table-cell text-right">
                                <div class="social-sharing">
                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                    </a>
                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                    </a>
                                    <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                        <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                    </a>
                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                    </a>
                                    <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                        <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> GETTING CLOSER! ONLY <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> AWAY FROM <b>FREE SHIPPING!</b></p>
                        <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY BETWEEN <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                        <div class="userViewMsg" data-user="20" data-time="11000"><i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div>
                    </div>
                </div>
            </div>
            <!--End-product-single-->
            <!--Product Fearure-->
            <div class="prFeatures">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                        <img src="{{ asset('assets/images/credit-card.png') }}" alt="Safe Payment" title="Safe Payment" />
                        <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                        <img src="{{ asset('assets/images/shield.png') }}" alt="Confidence" title="Confidence" />
                        <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                        <img src="{{ asset('assets/images/worldwide.png') }}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                        <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                        <img src="{{ asset('assets/images/phone-call.png') }}" alt="Hotline" title="Hotline" />
                        <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                    </div>
                </div>
            </div>
            <!--End Product Fearure-->
            <!--Product Tabs-->
            <div class="tabs-listing">
                <ul class="product-tabs">
                    <li rel="tab1"><a class="tablink">Product Details</a></li>
                    <li rel="tab2"><a class="tablink">Product Reviews</a></li>
                    <li rel="tab3"><a class="tablink">Size Chart</a></li>
                    <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
                </ul>
                <div class="tab-container">
                    <div id="tab1" class="tab-content">
                        <div class="product-description rte">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>

                    <div id="tab2" class="tab-content">
                        <div id="shopify-product-reviews">
                            <div class="spr-container">
                                <div class="spr-header clearfix">
                                    <div class="spr-summary">
                                        <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                        <span class="spr-summary-actions">
                                            <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="spr-content">
                                    <div class="spr-form clearfix">
                                        <form method="post" action="#" id="new-review-form" class="new-review-form">
                                            <h3 class="spr-form-title">Write a review</h3>
                                            <fieldset class="spr-form-contact">
                                                <div class="spr-form-contact-name">
                                                    <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                    <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                </div>
                                                <div class="spr-form-contact-email">
                                                    <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                    <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                </div>
                                            </fieldset>
                                            <fieldset class="spr-form-review">
                                                <div class="spr-form-review-rating">
                                                    <label class="spr-form-label">Rating</label>
                                                    <div class="spr-form-input spr-starrating">
                                                        <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                    </div>
                                                </div>

                                                <div class="spr-form-review-title">
                                                    <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                    <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                </div>

                                                <div class="spr-form-review-body">
                                                    <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                    <div class="spr-form-input">
                                                        <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="spr-form-actions">
                                                <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="spr-reviews">
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                            </div>
                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tab3" class="tab-content">
                        <h3>WOMEN'S BODY SIZING CHART</h3>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Size</th>
                                    <th scope="col">XS</th>
                                    <th scope="col">S</th>
                                    <th scope="col">M</th>
                                    <th scope="col">L</th>
                                    <th scope="col">XL</th>
                                </tr>
                            </thead>
                            <tbody>
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
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Size</th>
                                    <th scope="col">XS</th>
                                    <th scope="col">S</th>
                                    <th scope="col">M</th>
                                    <th scope="col">L</th>
                                    <th scope="col">XL</th>
                                    <th scope="col">XXL</th>
                                </tr>
                            </thead>
                            <tbody>
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
                        <div class="text-center">
                            <img src="{{ asset('assets/images/size.jpg') }}" alt="" />
                        </div>
                  </div>

                    <div id="tab4" class="tab-content">
                        <h4>Returns Policy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                        <h4>Shipping</h4>
                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                    </div>
                </div>
            </div>
            <!--End Product Tabs-->

            <!--Related Product Slider-->
            @if ($related_products->count() > 0)
                <div class="related-product grid-products">
                    <header class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                    </header>
                    <div class="productPageSlider">
                        @foreach ($related_products as $key)
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{ route('products.details', $key->slug) }}">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets/images/product-images/' . $key->image ) }}" src="{{ asset('assets/images/product-images/' . $key->image ) }}" alt="{{ $key->title }}" title="{{ $key->title }}">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image1-1.jpg') }}" src="{{ asset('assets/images/product-images/product-image1-1.jpg') }}" alt="{{ $key->title }}" title="{{ $key->title }}">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label3">Popular</span><span class="lbl on-sale">Sale</span><span class="lbl on-sale">-16%</span><span class="lbl pr-label2">Hot</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <a href="#" class="variants add btn btn-addto-cart" wire:click.prevent="AddToCart({{ $key->id }}, '{{ $key->title }}', {{ $key->regular_price }})">Add To Cart</a>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name text-capitalize">
                                        <a href="{{ route('products.details', $key->slug) }}">{{ $key->title }}</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">${{ $key->regular_price }}</span>
                                        <span class="price">${{ $key->sale_price }}</span>
                                    </div>
                                    <!-- End product price -->

                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant1.jpg') }}" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant2.jpg') }}" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant3.jpg') }}" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant4.jpg') }}" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant5.jpg') }}" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant6.jpg') }}" alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <!--End Related Product Slider-->

            <!--Recently Product Slider-->
            <div class="related-product grid-products">
                <header class="section-header">
                    <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                    <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                </header>
                <div class="productPageSlider">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image6.jpg" src="assets/images/product-images/product-image6.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image6-1.jpg" src="assets/images/product-images/product-image6-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image7-1.jpg" src="assets/images/product-images/product-image7-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image8.jpg" src="assets/images/product-images/product-image8.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image8-1.jpg" src="assets/images/product-images/product-image8-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>

                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Workers Shirt Jacket</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image9.jpg" src="assets/images/product-images/product-image9.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image9-1.jpg" src="assets/images/product-images/product-image9-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Watercolor Sport Jacket in Brown/Blue</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image10.jpg" src="assets/images/product-images/product-image10.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image10-1.jpg" src="assets/images/product-images/product-image10-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Washed Wool Blazer</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image13.jpg" src="assets/images/product-images/product-image13.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image13-1.jpg" src="assets/images/product-images/product-image13-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>

                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Ashton Necklace</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image14.jpg" src="assets/images/product-images/product-image14.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image14-1.jpg" src="assets/images/product-images/product-image14-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Ara Ring</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="#">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image15.jpg" src="assets/images/product-images/product-image15.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image15-1.jpg" src="assets/images/product-images/product-image15-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Ara Ring</a>
                            </div>
                            <!-- End product name -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            </div>
            <!--End Recently Product Slider-->
        </div>
        <!--#ProductSection-product-template-->
    </div>
    <!--MainContent-->
</div>
