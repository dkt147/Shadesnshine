<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home8-jewellery.html   11 Nov 2019 12:30:11 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Belle Multipurpose Bootstrap 4 Html Template</title>
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

    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body class="template-index home8-jewellery belle">
    <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div>
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
                            <li><a href="customer-account.php">Account</a></li>
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
        <div id="page-content" style="width: 80%;margin: 50px auto;">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Settings</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <h2>Profile Informations</h2>

                    <form action="">
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                <input name="firstname" value="" id="input-firstname" type="text">
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                <input name="lastname" value="" id="input-lastname" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-email">Email <span class="required-f">*</span></label>
                                <input name="email" value="" id="input-email" type="email">
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-phone">Phone Number <span class="required-f">*</span></label>
                                <input name="phone" value="" id="input-phone" type="text">
                            </div>
                        </div>
                        <button class="btn" type="submit">Save Change</button>
                    </form>

                    <br><br>
                    <h2>Change Password</h2>
                    <hr>
                    <form action="">
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-pass">Current Password <span class="required-f">*</span></label>
                                <input name="password" id="input-pass" type="password">
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                <label for="input-newpass">New Password <span class="required-f">*</span></label>
                                <input name="new-password" id="input-newpass" type="password">
                            </div>

                        </div>
                        <button class="btn" type="submit">Save Change</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h3>Orders</h3>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-name alt-font">Product</th>
                                <th class="product-price text-center alt-font">Unit Price</th>
                                <th class="stock-status text-center alt-font">Status</th>
                                <th class="product-subtotal text-center alt-font">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td class="product-name">
                                    <h4 class="no-margin"><a href="#">Woven Solid Midi Shirt Dress</a></h4>
                                </td>
                                <td class="product-price text-center"><span class="amount">$150.00</span></td>
                                <td class="stock text-center">
                                    <span class="in-stock">Delivered</span>
                                </td>
                                <td class="product-subtotal text-center">
                                    <button type="button" class="btn btn-small">Invoice</button>
                                    <button type="button" class="btn btn-small" data-toggle="modal" data-target="#exampleModal">View Details</button></td>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                            </div>
                                            <div class="modal-body">
                                                Order Details will Show Here
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Settings</div>
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
                                        <p>55 abs,<br>232 steet, 1209 Dhaka</p>
                                    </li>
                                    <li class="phone"><i class="icon anm anm-phone-s"></i>
                                        <p>(+88) 000 000 0000</p>
                                    </li>
                                    <li class="email"><i class="icon anm anm-envelope-l"></i>
                                        <p>example@yousite.com</p>
                                    </li>
                                </ul>
                                <div class="footer-social">
                                    <h4 class="h4">Stay Connected</h4>
                                    <ul class="list--inline site-footer__social-icons social-icons">
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
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
                                                <img class="blur-up lazyload" data-src="assets/images/cosmetic-products/product-image4.jpg" src="assets/images/cosmetic-products/product-image4.jpg" alt="" />
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
                                                Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                            </div>

                                            <form method="post" action="" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                                <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                                    <div class="product-form__item">
                                                        <label class="header">Color: <span class="slVariant">Red</span></label>
                                                        <div data-value="Red" class="swatch-element color red available">
                                                            <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                                            <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/cosmetic-products/product-image4-1.jpg);" title="Red"></label>
                                                        </div>
                                                        <div data-value="Blue" class="swatch-element color blue available">
                                                            <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                                            <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/cosmetic-products/product-image4.jpg);" title="Blue"></label>
                                                        </div>
                                                        <div data-value="Green" class="swatch-element color green available">
                                                            <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                                            <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/cosmetic-products/product-image4.jpg);" title="Green"></label>
                                                        </div>
                                                        <div data-value="Gray" class="swatch-element color gray available">
                                                            <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                                            <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/cosmetic-products/product-image4.jpg);" title="Gray"></label>
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

        <!-- Newsletter Popup -->
        <div class="newsletter-wrap" id="popup-container">
            <div id="popup-window">
                <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                <!-- Modal content-->
                <div class="display-table splash-bg">
                    <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
                    <div class="display-table-cell width60 text-center">
                        <div class="newsletter-left">
                            <h2>Join Our Mailing List</h2>
                            <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
                            <form action="#" method="post">
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
        <!-- End Newsletter Popup -->

        <!-- Including Jquery -->
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery.cookie.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/lazysizes.js"></script>
        <script src="assets/js/main.js"></script>

    </div>
</body>

<!-- belle/home8-jewellery.html   11 Nov 2019 12:31:16 GMT -->

</html>