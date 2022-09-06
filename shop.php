<?php 
    //Stablishing Connection...
    include 'Admin/connection.php';      
    //Getting Data From Databse...

    if(isset($_GET['category_id'])){
        $id = $_GET['category_id'];
        $query = "SELECT * FROM `product` WHERE category_id = '$id' order by date asc";
    }else{
        $query = "SELECT * FROM `product` order by date asc";
    }

     $res = mysqli_query($con, $query);
     $count = mysqli_num_rows($res);

        ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/shop-left-sidebar.html   11 Nov 2019 12:37:31 GMT -->

<head>
    <?php include 'Layouts/head.php'; ?>
</head>

<body class="template-collection belle">
    <div class="pageWrapper">


        <?php include 'Layouts/navbar.php'; ?>

        <!--Body Content-->
        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"><img height="100" width="100" style="object-fit: cover;" class="blur-up lazyload" data-src="assets/images/slideshow-banners/home5-banner1.jpg" src="assets/images/slideshow-banners/home5-banner1.jpg" alt="Women" title="Women" /></div>
                    <div class="collection-hero__title-wrapper">
                        <h1 class="collection-hero__title page-width">Shop </h1>
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

                                    <?php
                                //Stablishing Connection...
                                include 'Admin/connection.php';      
                              //Getting Data From Databse...
                                  $query = "SELECT * FROM `store` order by date asc";
                                  $res = mysqli_query($con, $query);
            
                                  if (mysqli_num_rows($res) > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                  ?>
                                        <li class="level1 sub-level"><a class="site-nav"><?php echo $row['name']?></a>
                                        <ul class="sublinks">

                                        <?php
                                  $id = $row['id'];
                                 //Getting Data From Databse...
                                  $query1 = "SELECT * FROM `product_category`  where store_id = '$id' order by date asc";
                                  $res1 = mysqli_query($con, $query1);
            
                                  if (mysqli_num_rows($res1) > 0) {
                                    while ($row1 = mysqli_fetch_assoc($res1)) {
                                  ?>
                                                <li class="level2"><a href="shop.php?category_id=<?php echo $row1['id'] ?>" class="site-nav"><?php echo $row1['name']?></a></li>
                                            
                                            <?php
                        }
                      }?>
                                             </ul>
                        <?php 
                        }
                      }
                      ?>
                                          
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->

                          




                            <!--Popular Products-->
                            <!-- <div class="sidebar_widget">
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
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image2.jpg" alt="" /></a>
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
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image3.jpg" alt="" /></a>
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
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/cosmetic-products/product-image4.jpg" alt="" /></a>
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
                            </div> -->
                            <!--End Popular Products-->



                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <!-- <div class="category-description">
                            <h3>Category Description</h3>

                        </div>
                        <hr> -->
                        <div class="productList product-load-more">
                            <!--Toolbar-->
                            <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                            <div class="toolbar">
                                <div class="filters-toolbar-wrapper">
                                    <div class="row">
                                        
                                        <div class="col-4 col-md-4 col-lg-4">
                                            <span class="filters-toolbar__product-count">Showing: <?php echo $count?> Product</span>
                                        </div>
                                        <!-- <div class="col-4 col-md-4 col-lg-4 text-right">
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
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                            <!--End Toolbar-->
                            <div class="grid-products grid--view-items">
                                <div class="row">

                                
                    <?php
                   
                   //Stablishing Connection...
                   include 'Admin/connection.php';      
                              //Getting Data From Databse...

                                  if(isset($_GET['category_id'])){
                                        $id = $_GET['category_id'];
                                        $query = "SELECT * FROM `product` WHERE category_id = '$id' order by date asc";
                                    }else{
                                        $query = "SELECT * FROM `product` order by date asc";
                                    }
                                  $res = mysqli_query($con, $query);
        
                                  if (mysqli_num_rows($res) > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                  ?>

                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="#">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" alt="image" title="product" />
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" onclick="window.location.href='short-description.php?id=<?php echo $row['id'] ?>'" method="post">
                                                <button class="btn btn-addto-cart" type="button">See Detail</button>
                                            </form>
                                                                                      <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#"><?php echo $row['name'] ?></a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">Rs.<?php echo $row['price'] ?></span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                   
                                    <?php
                        }
                      }
                      ?>

                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!--End Main Content-->
                </div>
            </div>

        </div>
        <!--End Body Content-->

        <!--Footer-->
        <?php include 'Layouts/footer.php'; ?>
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

        <!-- Including Foot -->
        <?php include 'Layouts/foot.php'; ?>
        <!-- End Foot -->

    </div>
</body>

<!-- belle/shop-left-sidebar.html   11 Nov 2019 12:38:58 GMT -->

</html>