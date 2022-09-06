<?php 
    //Stablishing Connection...
    include 'Admin/connection.php';      
    //Getting Data From Databse...

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT product.id,product.name,product.price,product.detail,product.product_image,product.date,product_category.name as cname FROM `product` JOIN `product_category` ON product_category.id = product.category_id WHERE product.id = '$id'";
    }else{
        header('Location:shop.php');
    }

     $res = mysqli_query($con, $query);
                        
                    if (mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);
                    $id = $row['id'];
                    $category = $row['cname'];
                    $product = $row['name'];
                    $price = $row['price'];
                    $detail = $row['detail'];
                    $image = $row['product_image'];
                    $date = $row['date'];
                    }
       ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/short-description.php   11 Nov 2019 12:43:10 GMT -->


<head>
    <?php include 'Layouts/head.php'; ?>
</head>


<body class="template-product belle">
    <div class="pageWrapper">
        <?php include 'Layouts/navbar.php'; ?>
        <!--Body Content-->
        <div id="page-content">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="index.php" title="Back to the home page">Shop</a><span aria-hidden="true">›</span><span>Product Description</span>
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
                                            <a data-image="Admin/Admin/uploads/<?php echo $image ?>" data-zoom-image="Admin/Admin/uploads/<?php echo $image ?>" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="Admin/Admin/uploads/<?php echo $image ?>" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="zoompro blur-up lazyload" data-zoom-image="Admin/Admin/uploads/<?php echo $image ?>" alt="" src="Admin/Admin/uploads/<?php echo $image ?>" />
                                        </div>
                                        <div class="product-labels">
        
                                        <span class="lbl pr-label1">new</span>
                                    
                                    </div>
                                        <!-- <div class="product-buttons">
                                            <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="lightboximages">
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="1462x2048"></a>
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="1462x2048"></a>
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="1462x2048"></a>
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="1462x2048"></a>
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="1462x2048"></a>
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="1462x2048"></a>
                                        <a href="Admin/Admin/uploads/<?php echo $image ?>" data-size="731x1024"></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">Product Description</h1>

                                
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money"><?php echo "Rs.".($price + $price)?></span></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money"><?php echo "Rs.".($price)?></span></span>
                                        </span>
                                        <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                        <span>You Save</span>
                                        <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money"><?php echo "Rs.".($price)?></span>
                                        </span>
                                        <span class="off">(<span>50</span>%)</span>
                                        </span>
                                    </p>
                                    <div class="orderMsg" data-user="23" data-time="24">

                                    </div>
                                    <div class="product-single__description rte">
                                        
                                        <p><?php echo $detail;?></p>
                                        
                                        <p>You can book your order on:</p>
                                        <ul>
                                            <li>Whatsapp: (+92) 333 3735290</li>
                                            <li>Email: shadesnshine786@gmail.com</li>
                                            <li>Product id: <?php echo $category."-".$id?></li>
                                        </ul>
                                    </div>
                                    <!-- <div id="quantity_message">Hurry! Only <span class="items">4</span> left in stock.</div> -->
                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <!-- <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="header">Color: <span class="slVariant">Red</span></label>
                                                <div data-value="Black" class="swatch-element color black available">
                                                    <input class="swatchInput" id="swatch-0-black" type="radio" name="option-0" value="Black"><label class="swatchLbl color small" for="swatch-0-black" style="background-color:black;" title="Black"></label>
                                                </div>
                                                <div data-value="Maroon" class="swatch-element color maroon available">
                                                    <input class="swatchInput" id="swatch-0-maroon" type="radio" name="option-0" value="Maroon"><label class="swatchLbl color small" for="swatch-0-maroon" style="background-color:maroon;" title="Maroon"></label>
                                                </div>
                                                <div data-value="Blue" class="swatch-element color blue available">
                                                    <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue"><label class="swatchLbl color small" for="swatch-0-blue" style="background-color:blue;" title="Blue"></label>
                                                </div>
                                                <div data-value="Dark Green" class="swatch-element color dark-green available">
                                                    <input class="swatchInput" id="swatch-0-dark-green" type="radio" name="option-0" value="Dark Green"><label class="swatchLbl color small" for="swatch-0-dark-green" style="background-color:darkgreen;"
                                                        title="Dark Green"></label>
                                                </div>
                                            </div>
                                        </div> -->
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
                                        <!-- <p class="infolinks"><a href="#sizechart" class="sizelink btn"> Size Guide</a> <a href="#productInquiry" class="emaillink btn"> Ask About this Product</a></p> -->
                                        <!-- Product Action -->
                                        <!-- <div class="product-action clearfix">
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
                                            <div class="shopify-payment-button" data-shopify="payment-button">
                                                <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                            </div>
                                        </div> -->
                                        <!-- End Product Action -->
                                    </form>
                                    <!-- <div class="display-table shareRow">
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
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share">
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
                                    </div> -->
<br>
                                    <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY IN <b id="fromDate">6 -7</b>  <b id="toDate">Days</b>.</p>
                                </div>
                            </div>
                        </div>
                        <!--End-product-single-->
                        <!--Product Fearure-->
                        <!-- <div class="prFeatures">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                <div class="details">
                                    <h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />
                                <div class="details">
                                    <h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                <div class="details">
                                    <h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                <div class="details">
                                    <h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                            </div>
                        </div>
                    </div> -->
                        <!--End Product Fearure-->
                        <!--Product Tabs-->
                        <div class="tabs-listing">
                            <ul class="product-tabs">
                                <li rel="tab1"><a class="tablink">Product Details</a></li>
                                <li rel="tab2"><a class="tablink">Product Reviews</a></li>
                                <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
                            </ul>
                            <div class="tab-container">
                                <div id="tab1" class="tab-content">
                                    <div class="product-description rte">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                            <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                            <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                            <li>Lorem Ipsum is not simply random text.</li>
                                            <li>Free theme updates</li>
                                        </ul>
                                        <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                        <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                        <h3>Lorem Ipsum is not simply random text.</h3>
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
                                                            <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat.</p>
                                                        </div>
                                                    </div>
                                                    <div class="spr-review">
                                                        <div class="spr-review-header">
                                                            <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                            <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                            <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                        </div>

                                                        <div class="spr-review-content">
                                                            <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                                dicta sunt explicabo.
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
                                                            <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled.<br>
                                                                <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="tab4" class="tab-content">
                                    <h4>Returns Policy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris
                                        consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                                    <h4>Shipping</h4>
                                    <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus. Integer
                                        sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Product Tabs-->

                        <!--Related Product Slider-->
                        <?php include 'top_ten.php'?>
                        <!--End Related Product Slider-->
                    </div>
                    <!--#ProductSection-product-template-->
                </div>
                <!--MainContent-->
            </div>
            <!--End Body Content-->

            <!--Footer-->
            <?php include 'Layouts/footer.php'; ?>
            <!--End Footer-->

            <!--Scoll Top-->
            <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
            <!--End Scoll Top-->

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
                                <input type="hidden" name="contact[product name]" value="Camelia Reversible Jacket">
                                <input type="hidden" name="contact[product link]" value="/products/camelia-reversible-jacket-black-red">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="ContactFormName" name="contact[name]" placeholder="Name" value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email" autocapitalize="off" value="" required>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input required type="tel" id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea required rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message"></textarea>
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


            <!-- Including Foot -->
            <?php include 'Layouts/foot.php'; ?>
            <script>
                $(function() {
                    var $pswp = $('.pswp')[0],
                        image = [],
                        getItems = function() {
                            var items = [];
                            $('.lightboximages a').each(function() {
                                var $href = $(this).attr('href'),
                                    $size = $(this).data('size').split('x'),
                                    item = {
                                        src: $href,
                                        w: $size[0],
                                        h: $size[1]
                                    }
                                items.push(item);
                            });
                            return items;
                        }
                    var items = getItems();

                    $.each(items, function(index, value) {
                        image[index] = new Image();
                        image[index].src = value['src'];
                    });
                    $('.prlightbox').on('click', function(event) {
                        event.preventDefault();

                        var $index = $(".active-thumb").parent().attr('data-slick-index');
                        $index++;
                        $index = $index - 1;

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
            <!-- End Foot -->

        </div>

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
                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
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
                    </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

</body>

<!-- belle/short-description.php   11 Nov 2019 12:43:10 GMT -->

</html>