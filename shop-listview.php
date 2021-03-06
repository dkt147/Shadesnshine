<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/shop-listview.php   11 Nov 2019 12:41:02 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Women &ndash; Belle Multipurpose Bootstrap 4 Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="template-collection belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
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
                                <li data-currency="USD" class="selected">USD</li>
                                <li data-currency="AUD" class="">AUD</li>
                            </ul>
                        </div>
                        <div class="language-dropdown">
                            <span class="language-dd">English</span>
                            <ul id="language">
                                <li class="">German</li>
                                <li class="">French</li>
                            </ul>
                        </div>
                        <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <!-- <p class="top-header_middle-text"> Worldwide Express Shipping</p> -->
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Create Account</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.php">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
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
                        <nav class="grid__item" id="AccessibleNav">
                            <!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="shop.php">Shop <i class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent dropdown"><a href="blog-grid-view.php">Blog <i class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="about-us.php">About <i class="anm anm-plus-l"></i></a>
                                    <li class="lvl1 parent megamenu"><a href="contact-us.php">Contact <i class="anm anm-plus-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/cosmetic-products/product-image4.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>

                                            <a class="pName" href="cart.php">Sleeve Kimono Dress</a>
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
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/cosmetic-products/product-image4.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>

                                            <a class="pName" href="cart.php">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
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
                                                    <span class="money">$99.00</span>
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
                                        <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.php" class="btn btn-secondary btn--small">Checkout</a>
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
                <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="anm anm-plus-l"></i></a>
                </li>
                <li class="lvl1 parent megamenu"><a href="shop.php">Shop <i class="anm anm-plus-l"></i></a>
                </li>

                <li class="lvl1 parent megamenu"><a href="blog-grid-view.php">Blog <i class="anm anm-plus-l"></i></a>
                </li>
                <li class="lvl1 parent megamenu"><a href="about-us.php">About <i class="anm anm-plus-l"></i></a>
                    <li class="lvl1 parent megamenu"><a href="contact-us.php">Contact <i class="anm anm-plus-l"></i></a></li>
            </ul>
        </div>
        <!--End Mobile Menu-->


        <!--Body Content-->
        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"><img style="object-fit: cover;" width="100" height="100" data-src="assets/images/slideshow-banners/home5-banner1.jpg" src="assets/images/slideshow-banners/home5-banner1.jpg" alt="Women" title="Women" /></div>
                    <div class="collection-hero__title-wrapper">
                        <h1 class="collection-hero__title page-width">Shop List View</h1>
                    </div>
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
                            <div class="sidebar_widget categories filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">

                                        <li class="level1 sub-level"><a href="#;" class="site-nav">Jewellery</a>
                                            <ul class="sublinks">
                                                <li class="level2"><a href="#;" class="site-nav">Ring</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Neckalses</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Eaarings</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">View All Jewellery</a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Collections</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->
                            <!--Price Filter-->
                            <div class="sidebar_widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Price</h2>
                                </div>
                                <form action="#" method="post" class="price-filter">
                                    <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="no-margin"><input id="amount" type="text"></p>
                                        </div>
                                        <div class="col-6 text-right margin-25px-top">
                                            <button class="btn btn-secondary btn--small">filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End Price Filter-->


                            <!--Brand-->
                            <div class="sidebar_widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Brands</h2>
                                </div>
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
                                <div class="widget-title">
                                    <h2>Popular Products</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="list list-sidebar-products">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#">
                                                            <img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image1.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image3.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Popular Products-->


                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <!-- <div class="category-description">
                            <h3>Category</h3>

                        </div>
                        <hr> -->
                        <div class="productList">
                            <!--Toolbar-->
                            <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                            <div class="toolbar">
                                <div class="filters-toolbar-wrapper">
                                    <div class="row">
                                        <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                            <a href="shop.php" title="Grid View" class="change-view change-view--active">
                                                <img src="assets/images/grid.jpg" alt="Grid" />
                                            </a>
                                            <a href="shop-listview.php" title="List View" class="change-view">
                                                <img src="assets/images/list.jpg" alt="List" />
                                            </a>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                            <span class="filters-toolbar__product-count">Showing: 22</span>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 text-right">
                                            <div class="filters-toolbar__item">
                                                <label for="SortBy" class="hidden">Sort</label>
                                                <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                                <input class="collection-header__default-sort" type="hidden" value="manual">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End Toolbar-->
                            <div class="list-view-items grid--view-items">


                                <!--ListView Item-->
                                <div class="list-product list-view-item">
                                    <div class="list-view-item__image-column">
                                        <div class="list-view-item__image-wrapper">
                                            <!-- Image -->
                                            <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/cosmetic-products/product-image1.jpg" src="assets/images/cosmetic-products/product-image1.jpg" alt="image" title="product"></a>
                                            <!-- End Image -->
                                        </div>
                                    </div>
                                    <div class="list-view-item__title-column">
                                        <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Floral Sleeveless Dress</a></div>
                                        <!-- Product Review -->
                                        <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                        <!-- End Product Review -->
                                        <!-- Sort Description -->
                                        <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries
                                            and other types of web shops....</p>
                                        <!-- End Sort Description -->
                                        <!-- Price -->
                                        <p class="product-price grid-view-item__meta">
                                            <span class="product-price__price"><span class="money">$380.00</span></span>
                                        </p>
                                        <!-- End Price -->
                                        <form class="variants" action="#">
                                            <button class="btn btn--small" type="button">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <!--End ListView Item-->
                                <!--ListView Item-->
                                <div class="list-product list-view-item">
                                    <div class="list-view-item__image-column">
                                        <div class="list-view-item__image-wrapper">
                                            <!-- Image -->
                                            <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/cosmetic-products/product-image2.jpg" src="assets/images/cosmetic-products/product-image2.jpg" alt="image" title="product"></a>
                                            <!-- End Image -->
                                        </div>
                                    </div>
                                    <div class="list-view-item__title-column">
                                        <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Button Up Dress</a></div>
                                        <!-- Product Review -->
                                        <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                        <!-- End Product Review -->
                                        <!-- Sort Description -->
                                        <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries
                                            and other types of web shops....</p>
                                        <!-- End Sort Description -->
                                        <!-- Price -->
                                        <p class="product-price grid-view-item__meta">
                                            <span class="product-price__price"><span class="money">$400.00</span></span>
                                        </p>
                                        <!-- End Price -->
                                        <form class="variants" action="#">
                                            <button class="btn btn--small" type="button">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <!--End ListView Item-->
                                <!--ListView Item-->
                                <div class="list-product list-view-item">
                                    <div class="list-view-item__image-column">
                                        <div class="list-view-item__image-wrapper">
                                            <!-- Image -->
                                            <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/cosmetic-products/product-image3.jpg" src="assets/images/cosmetic-products/product-image3.jpg" alt="image" title="product"></a>
                                            <!-- End Image -->
                                        </div>
                                    </div>
                                    <div class="list-view-item__title-column">
                                        <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lexie Shirt</a></div>
                                        <!-- Product Review -->
                                        <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                        <!-- End Product Review -->
                                        <!-- Sort Description -->
                                        <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries
                                            and other types of web shops....</p>
                                        <!-- End Sort Description -->
                                        <!-- Price -->
                                        <p class="product-price grid-view-item__meta">
                                            <span class="product-price__price"><span class="money">$200.00</span></span>
                                        </p>
                                        <!-- End Price -->
                                        <form class="variants" action="#">
                                            <button class="btn btn--small" type="button">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <!--End ListView Item-->
                                <!--ListView Item-->
                                <div class="list-product list-view-item">
                                    <div class="list-view-item__image-column">
                                        <div class="list-view-item__image-wrapper">
                                            <!-- Image -->
                                            <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/cosmetic-products/product-image4.jpg" src="assets/images/cosmetic-products/product-image4.jpg" alt="image" title="product"></a>
                                            <!-- End Image -->
                                        </div>
                                    </div>
                                    <div class="list-view-item__title-column">
                                        <div class="h4 grid-view-item__title"><a href="product-layout-2.html">One Shoulder Dress in Navy</a></div>
                                        <!-- Product Review -->
                                        <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                        <!-- End Product Review -->
                                        <!-- Sort Description -->
                                        <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries
                                            and other types of web shops....</p>
                                        <!-- End Sort Description -->
                                        <!-- Price -->
                                        <p class="product-price grid-view-item__meta">
                                            <span class="product-price__price"><span class="money">$1048.00</span></span>
                                        </p>
                                        <!-- End Price -->
                                        <form class="variants" action="#">
                                            <button class="btn btn--small" type="button">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <!--End ListView Item-->
                            </div>
                        </div>
                        <div class="infinitpaginOuter">
                            <div class="infinitpagin">
                                <a href="#" class="btn loadMore">Load More</a>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>

        </div>
        <!--End Body Content-->

        <!--Footer-->
        <footer id="footer" class="footer-3">
            <div class="site-footer">
                <div class="container">
                    <!--Footer Links-->
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                <h4 class="h4">Contact Us</h4>
                                <ul class="addressFooter">
                                    <li><i class="icon anm anm-map-marker-al"></i>
                                        <p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p>
                                    </li>
                                    <li class="phone"><i class="icon anm anm-phone-s"></i>
                                        <p>(440) 000 000 0000</p>
                                    </li>
                                    <li class="email"><i class="icon anm anm-envelope-l"></i>
                                        <p>sales@yousite.com</p>
                                    </li>
                                </ul>
                                <div class="footer-social">
                                    <h4 class="h4">Stay Connected</h4>
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
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="display-table">
                                    <div class="display-table-cell footer-newsletter">
                                        <form action="#" method="post">
                                            <label class="h4">Newsletter</label>
                                            <p>Be the first to hear about new trending and offers and see how you've helped.</p>
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
                        </div>
                    </div>
                    <!--End Footer Links-->
                    <hr>
                    <div class="footer-bottom">
                        <div class="row">
                            <!--Footer Copyright-->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span>Design and Developed By: </span> <a href="https://aveenirit.com">Aveenir IT</a></div>
                            <!--End Footer Copyright-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/jquery.cookie.js"></script>
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/lazysizes.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>

<!-- belle/shop-listview.php   11 Nov 2019 12:41:09 GMT -->

</html>