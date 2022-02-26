<?php
include_once "vendor/autoload.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/chosen.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- header start -->

    <?php

    use app\database\models\Brand;
    use app\database\models\Product;

    $title = "Shop";
    include_once "layouts/header.php";
    include_once "layouts/nav.php";
    
    $productObject = new Product;

    if ($_GET) {
        if (isset($_GET['subcat'])) {
            if (is_numeric($_GET['subcat'])) {
                $subCategoryObject->setId($_GET['subcat']);
                $findSubcatResult = $subCategoryObject->find();
                if ($findSubcatResult->num_rows == 1) {
                    $productsResult = $productObject->all("WHERE `products`.`status` = 1 AND `products`.`subcategory_id` = {$_GET['subcat']}");
                } else {
                    header('location:errors/404.php');
                    die;
                }
            } else {
                header('location:errors/404.php');
                die;
            }
        } elseif (isset($_GET['cat'])) {
            if (is_numeric($_GET['cat'])) {
                $categoriesObject->setId($_GET['cat']);
                $findCatResult = $categoriesObject->find();
                if ($findCatResult->num_rows == 1) {
                    $productsResult = $productObject->all("WHERE `products`.`status` = 1 AND `subcategories`.`category_id` = {$_GET['cat']}");
                } else {
                    header('location:errors/404.php');
                    die;
                }
            } else {
                header('location:errors/404.php');
                die;
            }
        } elseif (isset($_GET['brand'])) {
            if (is_numeric($_GET['brand'])) {
                $brandsObject = new Brand;
                $brandsObject->setId($_GET['brand']);
                $findBrandResult = $brandsObject->find();
                if ($findBrandResult->num_rows == 1) {
                    $productsResult = $productObject->all("WHERE `products`.`status` = 1 AND `products`.`brand_id` = {$_GET['brand']}");
                } else {
                    header('location:errors/404.php');
                    die;
                }
            } else {
                header('location:errors/404.php');
                die;
            }
        } else {
            header('location:errors/404.php');
            die;
        }
    } else {
        $productsResult = $productObject->all();
    }

    if ($productsResult->num_rows >= 1) {
        $products = $productsResult->fetch_all(MYSQLI_ASSOC);
    } else {
        $products = [];
    }
    ?>

    <!-- header end -->
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>ABOUT US</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About us </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- About Us Area Start -->
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="overview-content-2">
                        <h4>Welcome To</h4>
                        <h2>Our Sabuj Cha Store!</h2>
                        <p class="peragraph-blog">Phuler Shop is a premium HTML template designed and develoved from the ground up with the sole purpose of helping you create an astonishing, the beautiful and user friendly website that will boost your product’s sales.</p>
                        <p>The theme design package provides a complete Magento theme set for your online store according to your desired theme. This includes all Magento themes that are required for your online store's successful implementation.</p>
                        <div class="overview-btn mt-40">
                            <img src="assets/img/icon-img/signature.png" alt="Candidate Signature">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="overview-img text-center">
                        <a href="#">
                            <img src="assets/img/banner/about-us.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonials-area gray-bg pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore</p>
                            <h4>Gregory Perkins</h4>
                            <h5>Customer</h5>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore</p>
                            <h4>Khabuli Teop</h4>
                            <h5>Marketing</h5>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore </p>
                            <h4>Lotan Jopon</h4>
                            <h5>Admin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Team Area Start -->
    <div class="team-area pt-95 pb-70">
        <div class="container">
            <div class="product-top-bar section-border mb-50">
                <div class="section-title-wrap style-two text-center">
                    <h3 class="section-title">Team Members</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <a href="#">
                                <img src="assets/img/team/team-1.jpg" alt="">
                            </a>
                            <div class="team-action">
                                <a class="action-plus facebook" href="#">
                                    <i class="ion-social-facebook"></i>
                                </a>
                                <a class="action-heart twitter" title="Wishlist" href="#">
                                    <i class="ion-social-twitter"></i>
                                </a>
                                <a class="action-cart instagram" href="#">
                                    <i class="ion-social-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr.Mike Banding</h4>
                            <span>Manager </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="product-img">
                            <a href="product-details.php">
                                <img src="assets/img/team/team-2.jpg" alt="">
                            </a>
                            <div class="team-action">
                                <a class="action-plus facebook" href="#">
                                    <i class="ion-social-facebook"></i>
                                </a>
                                <a class="action-heart twitter" title="Wishlist" href="#">
                                    <i class="ion-social-twitter"></i>
                                </a>
                                <a class="action-cart instagram" href="#">
                                    <i class="ion-social-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr.Peter Pan</h4>
                            <span>Developer </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <a href="#">
                                <img src="assets/img/team/team-3.jpg" alt="">
                            </a>
                            <div class="team-action">
                                <a class="action-plus facebook" href="#">
                                    <i class="ion-social-facebook"></i>
                                </a>
                                <a class="action-heart twitter" title="Wishlist" href="#">
                                    <i class="ion-social-twitter"></i>
                                </a>
                                <a class="action-cart instagram" href="#">
                                    <i class="ion-social-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Ms.Sophia</h4>
                            <span>Designer </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Area End -->
    <!-- Project Area Start -->
    <div class="project-count-area gray-bg pt-75 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-title">
                            <h2 class="count">360</h2>
                            <span>project done</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-title">
                            <h2 class="count">690</h2>
                            <span>cups of coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-title">
                            <h2 class="count">420</h2>
                            <span>branding</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30 mrgn-none">
                        <div class="count-title">
                            <h2 class="count">100</h2>
                            <span>happy clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Area End -->
    <!-- Start Brand Area -->
    <div class="brand-logo-area ptb-100">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <img alt="" src="assets/img/brand-logo/1.jpg">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="assets/img/brand-logo/2.jpg">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="assets/img/brand-logo/3.jpg">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="assets/img/brand-logo/4.jpg">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="assets/img/brand-logo/5.jpg">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="assets/img/brand-logo/2.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->
    <!-- Footer style Start -->
    <footer class="footer-area pt-75 gray-bg-3">
        <div class="footer-top gray-bg-3 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mb-40">
                            <div class="footer-title mb-25">
                                <h4>My Account</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><a href="about-us.php">Order History</a></li>
                                    <li><a href="wishlist.php">WishList</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="about-us.php">Order History</a></li>
                                    <li><a href="#">International Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mb-40">
                            <div class="footer-title mb-25">
                                <h4>Information</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mb-40">
                            <div class="footer-title mb-25">
                                <h4>Quick Links</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Term & Conditions</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">FAQS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget footer-widget-red footer-black-color mb-40">
                            <div class="footer-title mb-25">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="footer-about">
                                <p>Your current address goes to here,120 haka, angladesh</p>
                                <div class="footer-contact mt-20">
                                    <ul>
                                        <li>(+008) 254 254 254 25487</li>
                                        <li>(+009) 358 587 657 6985</li>
                                    </ul>
                                </div>
                                <div class="footer-contact mt-20">
                                    <ul>
                                        <li>yourmail@example.com</li>
                                        <li>example@admin.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom pb-25 pt-25 gray-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-img f-right">
                            <a href="#">
                                <img alt="" src="assets/img/icon-img/payment.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer style End -->

    <!-- all js here -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>