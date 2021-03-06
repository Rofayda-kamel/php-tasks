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
                <h3>CONTACT US</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact us </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Contact Area Start -->
    <div class="contact-us ptb-95">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area Start -->
                <div class="col-lg-6">
                    <div class="small-title mb-30">
                        <h2>Contact Form</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum available.</p>
                    </div>
                    <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/sabujcha/assets/mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="name" placeholder="Full Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="email" placeholder="Email Address" type="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="subject" placeholder="Subject" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button class="submit" type="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <!-- Contact Form Area End -->
                <!-- Contact Address Strat -->
                <div class="col-lg-6">
                    <div class="small-title mb-30">
                        <h2>Contact Address</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum available.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information mb-30">
                                <h4>Our Address</h4>
                                <p>House. 9, Road. 12, Widgets. Orled. Sydney. Milaro.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information contact-mrg mb-30">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:01234567890">01234 567 890</a>
                                    <a href="tel:01234567891">01234 567 891</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information contact-mrg mb-30">
                                <h4>Web Address</h4>
                                <p>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                    <a href="#">www.example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Address Strat -->
                <!-- Google Map Start -->
                <div class="col-md-12">
                    <div id="store-location">
                        <div class="contact-map pt-80">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <!-- Google Map Start -->
            </div>
        </div>
    </div>
    <!-- Contact Area Start -->
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#f53651"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#444444"
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 45
                    }, {
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#f1ced3"
                    }, {
                        "visibility": "on"
                    }]
                }]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: 'assets/img/icon-img/map.png',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>
    <script src="assets/js/main.js"></script>
</body>

</html>