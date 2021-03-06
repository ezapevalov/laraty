@extends('layout')

@section('content')

<!-- Main Content -->

<!-- Home slider -->
<div class="swiper-container" id="home-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide" data-cover="/img/slider/1.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
            <div class="swiper-overlay right">
                <div class="text-center">
                    <p class="display-4 animated" data-animate="fadeDown">Business Casual<br/>Outfit Ideas</p>
                    <a href="shop-grid.html" class="btn btn-primary rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm">SHOP NOW</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide" data-cover="/img/slider/2.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
            <div class="swiper-overlay left">
                <div class="text-center">
                    <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">TOP BRANDS</h1>
                    <p class="display-4 animated" data-animate="fadeDown">30% - 70% OFF</p>
                    <a href="shop-grid.html" class="btn btn-warning rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm">SHOP NOW</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide" data-cover="/img/slider/3.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
            <div class="swiper-overlay right">
                <div class="text-center">
                    <h1 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">Brand New</h1>
                    <p class="display-4 animated" data-animate="fadeDown">High Quality Clothes</p>
                    <a href="shop-grid.html" class="btn btn-primary rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm">SHOP NOW</a>
                </div>
            </div>
        </div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev autohide"><i data-feather="chevron-left"></i></div>
    <div class="swiper-button-next autohide"><i data-feather="chevron-right"></i></div>
</div>
<!-- /Home slider -->

<div class="container mt-3">

    <!-- Top Categories 1 -->
    <div class="row gutters-3">
        <div class="col-6 d-flex">
            <div class="card card-2col flex-fill">
                <div class="d-flex flex-column-reverse flex-md-row">
                    <div class="card-2col-body">
                        <h2 class="card-title">Men's Wear</h2>
                        <p class="text-center d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum minima, magnam quam quisquam. Ipsum, provident.</p>
                        <a href="shop-grid.html" class="btn btn-primary rounded-pill" data-addclass-on-xs="btn-sm">Shop Now</a>
                    </div>
                    <div class="card-2col-img">
                        <div data-cover="/img/categories/men.jpg" data-xs-height="120px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex">
            <div class="card card-2col flex-fill">
                <div class="d-flex flex-column-reverse flex-md-row">
                    <div class="card-2col-body">
                        <h2 class="card-title">Women's Wear</h2>
                        <p class="text-center d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum minima, magnam quam.</p>
                        <a href="shop-grid.html" class="btn btn-danger rounded-pill" data-addclass-on-xs="btn-sm">Shop Now</a>
                    </div>
                    <div class="card-2col-img">
                        <div data-cover="/img/categories/women.jpg" data-xs-height="120px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Categories 1 -->

    <!-- Top Categories 2 -->
    <div class="row gutters-3 mt-3">
        <div class="col-6">
            <div class="card card-2col text-white zoom-hover">
                <img class="card-img" src="/img/categories/sunglasses.jpg" alt="Card image">
                <div class="card-img-overlay card-img-overlay-transparent flex-center flex-column">
                    <h2 class="card-title">Sunglasses</h2>
                    <p class="text-center d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum minima, magnam quam quisquam. Ipsum, provident.</p>
                    <a href="shop-grid.html" class="btn btn-warning rounded-pill" data-addclass-on-xs="btn-sm">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-2col text-white zoom-hover">
                <img class="card-img" src="/img/categories/backpack.jpg" alt="Card image">
                <div class="card-img-overlay card-img-overlay-transparent flex-center flex-column">
                    <h2 class="card-title">Backpacks</h2>
                    <p class="text-center d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum minima, magnam quam quisquam. Ipsum, provident.</p>
                    <a href="shop-grid.html" class="btn btn-success rounded-pill" data-addclass-on-xs="btn-sm">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Categories 2 -->

    <div class="text-center mt-3">
        <a href="shop-categories.html" class="btn btn-light border rounded-pill bold text-muted">ALL CATEGORIES</a>
    </div>

    <!-- Flash deals -->
    <div class="row mt-gutter">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title roboto-condensed bold"><i data-feather="zap" class="align-top"></i> FLASH DEALS: <span class="text-danger" id="flash-deals-countdown">countdown</span></h5>
                    <div class="swiper-container" id="deals-slider">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="card card-2col shadow-none">
                                    <div class="d-flex flex-column-reverse flex-md-row">
                                        <div class="card-2col-body">
                                            <a href="shop-single.html" class="h3 card-title">Legendary Whitetails Heavyweight Hoodie</a>
                                            <p class="price text-center">
                                                <span class="h4">$44.99</span>
                                                <span class="h5 del">$59.99</span>
                                            </p>
                                            <button type="button" class="btn btn-primary rounded-pill atc-demo"><i data-feather="shopping-cart"></i> Add to Cart</button>
                                        </div>
                                        <div class="card-2col-img">
                                            <a href="shop-single.html" data-cover="/img/products/flash_deals_1.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card card-2col shadow-none">
                                    <div class="d-flex flex-column-reverse flex-md-row">
                                        <div class="card-2col-body">
                                            <a href="shop-single.html" class="h3 card-title">Casual Floral Print 3/4 Sleeve Shirt</a>
                                            <p class="price text-center">
                                                <span class="h4">$18.69</span>
                                                <span class="h5 del">$21.99</span>
                                            </p>
                                            <a href="#" class="btn btn-primary rounded-pill atc-demo"><i data-feather="shopping-cart"></i> Add to Cart</a>
                                        </div>
                                        <div class="card-2col-img">
                                            <a href="shop-single.html" data-cover="/img/products/flash_deals_2.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card card-2col shadow-none">
                                    <div class="d-flex flex-column-reverse flex-md-row">
                                        <div class="card-2col-body">
                                            <a href="shop-single.html" class="h3 card-title">Legendary Whitetails Heavyweight Hoodie</a>
                                            <p class="price text-center">
                                                <span class="h4">$44.99</span>
                                                <span class="h5 del">$59.99</span>
                                            </p>
                                            <button type="button" class="btn btn-primary rounded-pill atc-demo"><i data-feather="shopping-cart"></i> Add to Cart</button>
                                        </div>
                                        <div class="card-2col-img">
                                            <a href="shop-single.html" data-cover="/img/products/flash_deals_1.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card card-2col shadow-none">
                                    <div class="d-flex flex-column-reverse flex-md-row">
                                        <div class="card-2col-body">
                                            <a href="shop-single.html" class="h3 card-title">Casual Floral Print 3/4 Sleeve Shirt</a>
                                            <p class="price text-center">
                                                <span class="h4">$18.69</span>
                                                <span class="h5 del">$21.99</span>
                                            </p>
                                            <a href="#" class="btn btn-primary rounded-pill atc-demo"><i data-feather="shopping-cart"></i> Add to Cart</a>
                                        </div>
                                        <div class="card-2col-img">
                                            <a href="shop-single.html" data-cover="/img/products/flash_deals_2.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-prev left-0"><i data-feather="chevron-left"></i></div>
                        <div class="swiper-button-next right-0"><i data-feather="chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Flash deals -->

    <!-- Discover -->
    <div class="row categories-grid gutters-3 mt-gutter">

        <div class="col-sm-6 col-md-4">
            <a href="shop-grid.html">
                <div class="card zoom-hover">
                    <div data-cover="/img/discover/1.jpeg" data-xs-height="150px" data-sm-height="272px" data-md-height="246px" data-lg-height="324px" data-xl-height="400px"></div>
                    <div class="card-img-overlay card-img-overlay-transparent">
                        <h2 class="card-title bold">NEW ARRIVALS</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="row gutters-3">
                <div class="col-6 col-sm-12 mt-3 mt-sm-0">
                    <a href="shop-grid.html">
                        <div class="card zoom-hover">
                            <div data-cover="/img/discover/2.jpeg" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                            <div class="card-img-overlay card-img-overlay-transparent">
                                <h3 class="card-title text-center">Crossbody Bag</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-12 mt-3">
                    <a href="shop-grid.html">
                        <div class="card zoom-hover">
                            <div data-cover="/img/discover/3.jpeg" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                            <div class="card-img-overlay card-img-overlay-transparent">
                                <h3 class="card-title text-center">Winter Collection</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row gutters-3">
                <div class="col-6 col-md-12 mt-3 mt-md-0">
                    <a href="shop-grid.html">
                        <div class="card zoom-hover">
                            <div data-cover="/img/discover/4.jpeg" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                            <div class="card-img-overlay card-img-overlay-transparent">
                                <h2 class="card-title text-center">Accessories</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-12 mt-3">
                    <a href="shop-grid.html">
                        <div class="card zoom-hover">
                            <div data-cover="/img/discover/5.jpeg" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                            <div class="card-img-overlay card-img-overlay-transparent">
                                <h2 class="card-title text-center">Hats</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <a href="shop-grid.html" class="btn btn btn-light shadow-sm sa-btn">Discover <i data-feather="arrow-right"></i></a>

    </div>
    <!-- /Discover -->

    <h4 class="bold text-center mt-gutter">Featured Products</h4>

    <!-- Featured Products -->
    <div class="grid grid-gap-3 grid-col-2 grid-col-md-4 my-3">
        <div class="card card-product">
            <div class="card-body">
                <button class="wishlist atw-demo active" title="Added to wishlist"><i data-feather="heart"></i></button>
                <a href="shop-single.html"><img class="card-img-top" src="/img/products/1_small.jpg" alt="Card image cap"></a>
                <a href="shop-single.html" class="card-title">Hanes Hooded Sweatshirt</a>
                <span class="badge badge-success">New arrival</span>
                <div class="price"><span class="h5">$18.56</span></div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
            </div>
        </div>
        <div class="card card-product">
            <div class="card-body">
                <button class="wishlist atw-demo" title="Add to wishlist"><i data-feather="heart"></i></button>
                <a href="shop-single.html"><img class="card-img-top" src="/img/products/2_small.jpg" alt="Card image cap"></a>
                <a href="shop-single.html" class="card-title">The Flash Logo T-Shirt</a>
                <div class="price">
                    <span class="h5">$16.64</span>
                </div>
                <div class="color-options">
                    <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" name="color-option1" class="custom-control-input" value="/img/products/2_small.jpg" checked>
                        <span class="custom-control-label" style="background-color: #f2c43a"></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" name="color-option1" class="custom-control-input" value="/img/products/2_small_black.jpg">
                        <span class="custom-control-label" style="background-color: #23232b"></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" name="color-option1" class="custom-control-input" value="/img/products/2_small_red.jpg">
                        <span class="custom-control-label" style="background-color: #eb0015"></span>
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
            </div>
        </div>
        <div class="card card-product">
            <div class="card-body">
                <button class="wishlist atw-demo" title="Add to wishlist"><i data-feather="heart"></i></button>
                <a href="shop-single.html"><img class="card-img-top" src="/img/products/3_small.jpg" alt="Card image cap"></a>
                <a href="shop-single.html" class="card-title">Open Front Cropped Cardigans</a>
                <span class="badge badge-warning">20% OFF</span>
                <div class="price">
                    <span class="h5 del">$19.00</span>
                    <span class="h5">$15.20</span>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
            </div>
        </div>
        <div class="card card-product">
            <div class="card-body">
                <button class="wishlist atw-demo" title="Add to wishlist"><i data-feather="heart"></i></button>
                <a href="shop-single.html"><img class="card-img-top" src="/img/products/4_small.jpg" alt="Card image cap"></a>
                <a href="shop-single.html" class="card-title">Cotton Fleece Long Hoodie</a>
                <div class="price">
                    <span class="h5 del">$98.90</span>
                    <span class="h5">$85.00</span>
                </div>
                <div class="color-options">
                    <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" name="color-option2" class="custom-control-input" value="/img/products/4_small.jpg" checked>
                        <span class="custom-control-label" style="background-color: #625e39"></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" name="color-option2" class="custom-control-input" value="/img/products/4_small_blue.jpg">
                        <span class="custom-control-label" style="background-color: #2e4797"></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" name="color-option2" class="custom-control-input" value="/img/products/4_small_maroon.jpg">
                        <span class="custom-control-label" style="background-color: #791949"></span>
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
            </div>
        </div>
    </div>
    <!-- /Featured Products -->

</div>
<!-- /Main Content -->

@endsection
