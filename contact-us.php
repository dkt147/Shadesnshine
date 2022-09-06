<?php if(isset($_GET['message']) and $_GET['message'] == "success"){?>
<script>alert("Your query has been sent, Thanks!")</script>
<?php }?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/contact-us.php   11 Nov 2019 12:44:39 GMT -->

<head>
    <?php include 'Layouts/head.php'; ?>
</head>

<body class="contact-template page-template belle">
    <div class="pageWrapper">

        <?php include 'Layouts/navbar.php'; ?>

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Contact Us</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.php" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                        <h2>Connect with us</h2>
                        <p>You can contact us for any Query or Collaboration </p>
                        <div class="formFeilds contact-form form-vertical">
                            <form action="_contact.php" method="post" id="contact_form" class="contact-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="ContactFormName" name="name" placeholder="Name" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input required="" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input required="" type="text" id="ContactSubject" name="subject" placeholder="Subject" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" class="btn" value="Send Message" name="contact-us">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="open-hours">
                            <strong>Opening Hours</strong><br> Mon - Sat : 9am - 11pm<br> Sunday: 11am - 5pm
                        </div>
                        <hr />
                        <ul class="addressFooter">
                            <li><i class="icon anm anm-map-marker-al"></i>
                                <p>55 Gallaxy Enque, 2568 steet, 23568 NY</p>
                            </li>
                            <li class="phone"><i class="icon anm anm-phone-s"></i>
                                <p>(+92) 333 3735290</p>
                            </li>
                            <li class="email"><i class="icon anm anm-envelope-l"></i>
                                <p>shadesnshine786@gmail.com</p>
                            </li>
                        </ul>
                        <hr />
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
        <!--End Body Content-->

        <!--Footer-->
        <?php include 'Layouts/footer.php'; ?>
        <!--End Footer-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Foot -->
        <?php include 'Layouts/foot.php'; ?>
        <!-- End Foot -->

    </div>
</body>

<!-- belle/contact-us.php   11 Nov 2019 12:44:39 GMT -->

</html>