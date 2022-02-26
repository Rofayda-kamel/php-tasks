<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
    <meta name="description" content="">
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
                <h3>BLOG RIGHT SIDEBAR</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Blog Right Sidebar </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- blog-area start -->
    <div class="blog-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9 col-md-8">
                    <div class="blog-wrapper">
                        <div class="single-blog-wrapper mb-40">
                            <div class="blog-img mb-30">
                                <a href="blog-details-standerd.php">
                                    <img src="assets/img/blog/blog-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h2><a href="blog-details-standerd.php">Instant Green Tea Premix</a></h2>
                                <div class="blog-date-categori">
                                    <ul>
                                        <li>October 14, 2018 </li>
                                        <li><a href="#">Admin </a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="blog-btn-social mt-30">
                                <div class="blog-btn">
                                    <a href="blog-details-standerd.php">read more</a>
                                </div>
                                <div class="blog-social">
                                    <span>share :</span>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-wrapper mb-40">
                            <div class="sound-cloud embed-responsive embed-responsive-16by9 mb-30">
                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/276580716&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                            </div>
                            <div class="blog-content">
                                <h2><a href="blog-details-audio.php">Que Herbal Matcha Tea</a></h2>
                                <div class="blog-date-categori">
                                    <ul>
                                        <li>October 14, 2018 </li>
                                        <li><a href="#">Admin </a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="blog-btn-social mt-30">
                                <div class="blog-btn">
                                    <a href="blog-details-audio.php">read more</a>
                                </div>
                                <div class="blog-social">
                                    <span>share :</span>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-wrapper mb-50">
                            <div class="quote-post">
                                <div class="quote-content">
                                    <span>October 14, 2018 </span>
                                    <h3><a href="blog-details-quote.php">Lorem ipsum dolor sit amet co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h3>
                                    <h6>Tasnim</h6>
                                </div>
                                <div class="post-img">
                                    <img alt="" src="assets/img/blog/quote-post.png">
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-wrapper mb-40">
                            <div class="blog-gallery-slider owl-carousel mb-30">
                                <a href="blog-details-gallery.php"><img alt="" src="assets/img/blog/blog-2.jpg"></a>
                                <a href="blog-details-gallery.php"><img alt="" src="assets/img/blog/blog-1.jpg"></a>
                                <a href="blog-details-gallery.php"><img alt="" src="assets/img/blog/blog-2.jpg"></a>
                            </div>
                            <div class="blog-content">
                                <h2><a href="blog-details-gallery.php">Green Tea Tulsi Time</a></h2>
                                <div class="blog-date-categori">
                                    <ul>
                                        <li>October 14, 2018 </li>
                                        <li><a href="#">Admin </a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="blog-btn-social mt-30">
                                <div class="blog-btn">
                                    <a href="blog-details-gallery.php">read more</a>
                                </div>
                                <div class="blog-social">
                                    <span>share :</span>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-wrapper">
                            <div class="link-post">
                                <div class="link-content">
                                    <span>October 14, 2018 </span>
                                    <h3><a href="blog-details-link.php">Lorem ipsum dolor sit amet co adipisicing elit,</a></h3>
                                </div>
                                <div class="post-img">
                                    <img alt="" src="assets/img/blog/link-post.png">
                                </div>
                            </div>
                        </div>
                        <div class="pagination-total-pages mt-50">
                            <div class="pagination-style">
                                <ul>
                                    <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i> Prev</a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>
                                </ul>
                            </div>
                            <div class="total-pages">
                                <p>Showing 1 - 20 of 30 results </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-4">
                    <div class="blog-sidebar-wrapper sidebar-mrg">
                        <div class="blog-widget mb-50">
                            <div class="blog-search">
                                <form class="news-form">
                                    <input type="text" placeholder="Search.....">
                                    <button type="submit">
                                        <i class="ion-ios-search-strong"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget mb-40">
                            <div class="blog-author">
                                <a href="#"><img src="assets/img/blog/blog-author.png" alt=""></a>
                                <h4><a href="#">Kathy Gibson</a></h4>
                                <span>Head of Director, SEO</span>
                            </div>
                        </div>
                        <div class="blog-widget mb-45">
                            <h4 class="blog-widget-title mb-25">Recent post</h4>
                            <div class="blog-recent-post">
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-4.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget mb-40">
                            <h4 class="blog-widget-title mb-25">categories</h4>
                            <div class="blog-categori">
                                <ul>
                                    <li><a href="#">Morning Tea (05)</a></li>
                                    <li><a href="#">Tea Trends (08)</a></li>
                                    <li><a href="#">Most Tea Map (02)</a></li>
                                    <li><a href="#">Herbal Tea (07)</a></li>
                                    <li><a href="#">Rooibos Tea (06)</a></li>
                                    <li><a href="#">Organic Tea (01)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget mb-35">
                            <h4 class="blog-widget-title mb-30">instagram</h4>
                            <div class="blog-instagram">
                                <ul>
                                    <li><a href="#"><img src="assets/img/instagram/instagram1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/instagram/instagram2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/instagram/instagram3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/instagram/instagram4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/instagram/instagram5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/instagram/instagram6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget mb-35">
                            <h4 class="blog-widget-title mb-20">follow us </h4>
                            <div class="blog-sidebar-social">
                                <ul>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="blog-widget-title mb-25">tags</h4>
                            <div class="blog-tags">
                                <ul>
                                    <li><a href="#">Green</a></li>
                                    <li><a href="#">Oolong </a></li>
                                    <li><a href="#">Black </a></li>
                                    <li><a href="#">Pu'erh </a></li>
                                    <li><a href="#">love </a></li>
                                    <li><a href="#">special </a></li>
                                    <li><a href="#">success </a></li>
                                    <li><a href="#">Dark </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->
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