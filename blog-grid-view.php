<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/blog-grid-view.php   11 Nov 2019 12:46:09 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Gridview &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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

<body class="template-blog belle">
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
            <!--Page Title-->
            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Blog Gridview</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.php" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Blog Gridview</span>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                        <div class="sidebar_tags">
                            <div class="sidebar_widget categories">
                                <div class="widget-title">
                                    <h2>Category</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">
                                        <li class="lvl-1 "><a href="http://annimexweb.com/" class="site-nav lvl-1">Beauty</a></li>
                                        <li class="lvl-1  active"><a href="#" class="site-nav lvl-1">fashion</a></li>
                                        <li class="lvl-1 "><a href="#" class="site-nav lvl-1">summer</a></li>
                                        <li class="lvl-1 "><a href="#" class="site-nav lvl-1">trend</a></li>
                                        <li class="lvl-1 "><a href="#" class="site-nav lvl-1">winter</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="list list-sidebar-products">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#">
                                                            <img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-1.jpg" src="assets/images/blog/blog-post-sml-1.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">It's all about how you wear</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-2.jpg" src="assets/images/blog/blog-post-sml-2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">27 Days of Spring Fashion Recap</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time> </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-3.jpg" src="assets/images/blog/blog-post-sml-3.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">How to Wear The Folds Trend Four Ways</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2017</time> </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-4.jpg" src="assets/images/blog/blog-post-sml-4.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Accusantium doloremque</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:12:00Z">May 02, 2017</time> </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Recent Comments</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="list list-sidebar-products">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#">
                                                            <img class="grid-view-item__image blur-up lazyload" data-src="assets/images/recent-commnet-img.jpg" src="assets/images/recent-commnet-img.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="grid-view-item__meta"><strong>Tim</strong> On <a href="#">Lorem Ipsum</a></div>
                                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/recent-commnet-img.jpg" src="assets/images/recent-commnet-img.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="grid-view-item__meta"><strong>Joy</strong> On <a href="#">Lorem Ipsum</a></div>
                                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/recent-commnet-img.jpg" src="assets/images/recent-commnet-img.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="grid-view-item__meta"><strong>Jhon</strong> On <a href="#">Lorem Ipsum</a></div>
                                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/recent-commnet-img.jpg" src="assets/images/recent-commnet-img.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="grid-view-item__meta"><strong>Tim</strong> On <a href="#">Lorem Ipsum</a></div>
                                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_widget tags-clouds">
                                <div class="widget-title">
                                    <h2>Tags Cloud</h2>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Clothes</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Sun Glasses</a></li>
                                        <li><a href="#">Winter</a></li>
                                        <li><a href="#">Autoparts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <div class="custom-search">
                            <form action="http://annimexweb.com/search" method="get" class="input-group search-header search" role="search" style="position: relative;">
                                <input class="search-header__input search__input input-group__field" type="search" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
                                <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="icon anm anm-search-l"></i> </button></span>
                            </form>
                        </div>
                        <div class="blog--list-view">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-1.jpg" src="assets/images/blog/blog-post-1.jpg" alt="It's all about how you wear"></a>
                                    <h2 class="h3"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la m... </p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-2.jpg" src="assets/images/blog/blog-post-2.jpg" alt="27 Days of Spring Fashion Recap"></a>
                                    <h2 class="h3"><a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la m... </p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-3.jpg" src="assets/images/blog/blog-post-3.jpg" alt="How to Wear The Folds Trend Four Ways"></a>
                                    <h2 class="h3"><a href="#">How to Wear The Folds Trend Four Ways</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la m... </p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-4.jpg" src="assets/images/blog/blog-post-4.jpg" alt="Accusantium doloremque"></a>
                                    <h2 class="h3"><a href="#">Accusantium doloremque</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la m... </p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-5.jpg" src="assets/images/blog/blog-post-5.jpg" alt=""></a>
                                    <h2 class="h3"><a href="#">Neque porro quisquam est</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-6.jpg" src="assets/images/blog/blog-post-6.jpg" alt=""></a>
                                    <h2 class="h3"><a href="#">Contrary to popular belief</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-7.jpg" src="assets/images/blog/blog-post-7.jpg" alt=""></a>
                                    <h2 class="h3"><a href="#">The standard chunk of Lorem</a></h2>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> User</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                    </ul>
                                    <div class="rte">
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</p>
                                    </div>
                                    <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <hr/>
                            <div class="pagination">
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>

        </div>
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
                            </div>
                        </div>
                    </div>
                    <!--End Footer Links-->
                    <hr>
                    <div class="footer-bottom">
                        <div class="row">
                            <!--Footer Copyright-->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="templateshub.net">Templates Hub</a></div>
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

<!-- belle/blog-grid-view.php   11 Nov 2019 12:47:01 GMT -->

</html>