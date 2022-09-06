 <!--Hot picks-->
 <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2 heading-font">Just Arrive</h2>
                                <p>Cosmetic is the next best thing to Love!</p>
                            </div>
                        </div>
                    </div>
                    <div class="productSlider-style2 grid-products">

                    <?php
                   
                   //Stablishing Connection...
                   include 'Admin/connection.php';      
                              //Getting Data From Databse...
                                  $query = "SELECT * FROM `product` order by date asc";
                                  $res = mysqli_query($con, $query);
            
                                      
            
            
            
                                  if (mysqli_num_rows($res) > 0) {
                                    $c = 0;
                                    while ($row = mysqli_fetch_assoc($res)) {
                                      $c = $c + 1;
                                  ?>

                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" src="Admin/Admin/uploads/<?php echo $row['product_image'] ?>" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                   
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                         
                                    </div>
                                    <div class="compare-btn">
                                          
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a><?php echo $row['name'] ?></a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price"><?php echo "Rs. ".$row['price'] ?></span>
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
                    <div class="view-all-btn-area" style="width: 20%;margin: 20px auto;">
                        <a href="shop.php" class="btn" style="width: 100%;">View All</a>
                    </div>
                </div>
            </div>
            <!--End Hot picks-->