<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{ asset('assets/images/cat-women.jpg') }}" src="{{ asset('assets/images/cat-women.jpg') }}" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">All Products</h1></div>
        </div>
    </div>
    <!--End Collection Banner-->

    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    @if (DB::table('categories')->get()->count() > 0)
                        <div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories text-capitalize">
                                    @foreach (DB::table('categories')->orderBy('name')->get() as $key)
                                        <li class="lvl-1"><a href="{{ route('products.by_category', $key->slug) }}" class="site-nav">{{ $key->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <div class="price-filter">
                            <div id="slider" wire:ignore></div>
                            <div class="row mt-5">
                                <p class="col-5 p-3 border shadow-sm d-inline-flex mb-0 mr-auto h4"><span class="text-info">Min: $ {{ $min_price }}</span></p>
                                <p class="col-5 p-3 border shadow-sm d-inline-flex mb-0 h4"><span class="text-info">Max: $ {{ $max_price }}</span></p>
                            </div>
                        </div>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn checked">X</span></li>
                                <li><span class="swacth-btn">XL</span></li>
                                <li><span class="swacth-btn">XLL</span></li>
                                <li><span class="swacth-btn">M</span></li>
                                <li><span class="swacth-btn">L</span></li>
                                <li><span class="swacth-btn">S</span></li>
                                <li><span class="swacth-btn">XXXL</span></li>
                                <li><span class="swacth-btn">XXL</span></li>
                                <li><span class="swacth-btn">XS</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="filter-color swacth-list clearfix">
                            <span class="swacth-btn black"></span>
                            <span class="swacth-btn white checked"></span>
                            <span class="swacth-btn red"></span>
                            <span class="swacth-btn blue"></span>
                            <span class="swacth-btn pink"></span>
                            <span class="swacth-btn gray"></span>
                            <span class="swacth-btn green"></span>
                            <span class="swacth-btn orange"></span>
                            <span class="swacth-btn yellow"></span>
                            <span class="swacth-btn blueviolet"></span>
                            <span class="swacth-btn brown"></span>
                            <span class="swacth-btn darkGoldenRod"></span>
                            <span class="swacth-btn darkGreen"></span>
                            <span class="swacth-btn darkRed"></span>
                            <span class="swacth-btn dimGrey"></span>
                            <span class="swacth-btn khaki"></span>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <ul>
                            <li>
                                <input type="checkbox" value="allen-vela" id="check1">
                                <label for="check1"><span><span></span></span>Allen Vela</label>
                            </li>
                            <li>
                                <input type="checkbox" value="oxymat" id="check3">
                                <label for="check3"><span><span></span></span>Oxymat</label>
                            </li>
                            <li>
                                <input type="checkbox" value="vanelas" id="check4">
                                <label for="check4"><span><span></span></span>Vanelas</label>
                            </li>
                            <li>
                                <input type="checkbox" value="pagini" id="check5">
                                <label for="check5"><span><span></span></span>Pagini</label>
                            </li>
                            <li>
                                <input type="checkbox" value="monark" id="check6">
                                <label for="check6"><span><span></span></span>Monark</label>
                            </li>
                        </ul>
                    </div>
                    <!--End Brand-->
                    <!--Popular Products-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="grid">
                                    @foreach ($popular_products as $key)
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link" href="{{ route('products.details', $key->slug) }}">
                                                    <img class="grid-view-item__image" src="{{ asset('assets/images/product-images/' . $key->image ) }}" alt="{{ $key->title }}" />
                                                </a>
                                            </div>
                                            <div class="details">
                                                <a class="grid-view-item__title text-capitalize" href="{{ route('products.details', $key->slug) }}">{{ $key->title }}</a>
                                                <div class="grid-view-item__meta">
                                                    <span class="product-price__price">
                                                        @if ($key->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                            <span class="money">${{ $key->sale_price }}</span>
                                                        @else
                                                            <span class="money">${{ $key->regular_price }}</span>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Popular Products-->
                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <img src="{{ asset('assets/images/side-banner-2.jpg') }}" alt="" />
                    </div>
                    <!--Banner-->
                    <!--Information-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Information</h2></div>
                        <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                    </div>
                    <!--end Information-->
                    <!--Product Tags-->
                    <div class="sidebar_widget">
                        <div class="widget-title">
                            <h2>Product Tags</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="product-tags">
                                <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                                <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                                <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                                <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                                <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                                <li><a href="#" title="Show products matching tag Black">Black</a></li>
                                <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                                <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                                <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                                <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                                <li><a href="#" title="Show products matching tag Green">Green</a></li>
                                <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                                <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                                <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                                <li><a href="#" title="Show products matching tag L">L</a></li>
                                <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                                <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                                <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                                <li><a href="#" title="Show products matching tag M">M</a></li>
                                <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                                <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                                <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                                <li><a href="#" title="Show products matching tag new">new</a></li>
                                <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                                <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                                <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                                <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                            </ul>
                            <span class="btn btn--small btnview">View all</span>
                        </div>
                    </div>
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                <div class="category-description">
                    <h3>Products Description</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                </div>
                <hr>
                <div class="productList">
                    <!--Toolbar-->
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <div class="row">
                                <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    <a href="{{ route('products.index') }}" title="Grid View" class="change-view change-view--active">
                                        <img src="{{ asset('assets/images/grid.jpg') }}" alt="Grid" />
                                    </a>
                                    <a href="{{ route('products.list.index') }}" title="List View" class="change-view">
                                        <img src="{{ asset('assets/images/list.jpg') }}" alt="List" />
                                    </a>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <label for="SortBy" class="input-group-text">Short By:</label>
                                        </div>
                                        <select id="SortBy" class="custom-select custom-select-sm" wire:model="sorting">
                                            <option value="default" selected>Default</option>
                                            <option disabled>Best Selling</option>
                                            <option value="name">Alphabetically, A-Z</option>
                                            <option value="name-desc">Alphabetically, Z-A</option>
                                            <option value="price">Price, low to high</option>
                                            <option value="price-desc">Price, high to low</option>
                                            <option value="date">Date, new to old</option>
                                            <option value="date-desc">Date, old to new</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-right">
                                    <div class="input-group input-group-sm">
                                        <select id="perPage" class="custom-select custom-select-sm" wire:model="pagesize">
                                            <option value="20" selected>20</option>
                                            <option value="30">30 Items</option>
                                            <option value="40">40 Items</option>
                                            <option value="50">50 Items</option>
                                            <option value="60">60 Items</option>
                                            <option value="70">70 Items</option>
                                            <option value="80">80 Items</option>
                                            <option value="100">100 Items</option>
                                        </select>
                                        <div class="input-group-prepend">
                                            <label for="perPage" class="input-group-text">Per Pages</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Toolbar-->
                    <div class="grid-products grid--view-items">
                        <div class="row">
                            @if ($products->count() > 0)
                                @foreach ($products as $key)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item grid-view-item--sold-out">
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
                                                <div class="product-labels rectangular">
                                                    @if ($key->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                        <span class="lbl on-sale">Sale</span>
                                                        <span class="lbl on-sale">-16%</span>
                                                    @endif
                                                    <span class="lbl pr-label3">Popular</span>
                                                    <span class="lbl pr-label2">Hot</span>
                                                    <span class="lbl pr-label1">new</span>
                                                </div>
                                                <span class="sold-out"><span>Sold out</span></span>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- countdown start -->
                                            @if ($key->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                <div class="saleTime desktop" data-countdown="{{ Carbon\Carbon::parse($sale->sale_date) }}"></div>
                                            @endif
                                            <!-- countdown end -->

                                            <!-- Start product button -->
                                            @if ($key->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                <a href="#" class="variants add btn btn-addto-cart" wire:click.prevent="AddToCart({{ $key->id }}, '{{ $key->title }}', {{ $key->sale_price }})">Add To Cart</a>
                                            @else
                                                <a href="#" class="variants add btn btn-addto-cart" wire:click.prevent="AddToCart({{ $key->id }}, '{{ $key->title }}', {{ $key->regular_price }})">Add To Cart</a>
                                            @endif
                                            {{-- <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button">Select Options</button>
                                            </form> --}}
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
                                                @if ($key->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                    <span class="old-price">${{ $key->regular_price }}</span>
                                                    <span class="price">${{ $key->sale_price }}</span>
                                                @else
                                                    <span class="price">${{ $key->regular_price }}</span>
                                                @endif
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
                                                {{-- <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant6.jpg') }}" alt="image" /></li> --}}
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                        <!-- countdown start -->
                                        @if ($key->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                            <div class="timermobile"><div class="saleTime desktop" data-countdown="{{ Carbon\Carbon::parse($sale->sale_date) }}"></div></div>
                                        @endif
                                        <!-- countdown end -->
                                    </div>
                                @endforeach
                            @else
                                <div class="jumbotron d-flex justify-content-between">
                                    <div>
                                        <h1 class="display-4">Sorry...!!</h1>
                                        <p class="lead">Currently no products matches.</p>
                                        <hr class="my-4">
                                        <p>You can check our all products, and you may love it.</p>
                                        <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Click here</a>
                                    </div>
                                    <img src="{{ asset('assets/images/cart.png')}}" alt="Cart logo">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <hr class="clear">
                <div class="pagination d-flex justify-content-between">
                    <p>Showing Total {{ $products->firstItem() }} Items to {{ $products->lastItem() }} Items from {{ $products->total() }} Result.</p>
                    {{ $products->links() }}
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>
</div>

@push('script')
    <script>
        var slider = document.getElementById('slider');

        noUiSlider.create(slider, {
            start: [1, 1000],
            connect: true,
            range: {
                'min': 1,
                'max': 1000
            },
            pips: {
                mode: 'positions',
                values: [0, 20, 40, 60, 80, 100],
                stepped: true,
                density: 4,
            }
        });

        // When the slider value changes, update the input and span
        slider.noUiSlider.on('update', function (value) {
            @this.set('min_price', value[0]);
            @this.set('max_price', value[1]);
        });
    </script>
@endpush
