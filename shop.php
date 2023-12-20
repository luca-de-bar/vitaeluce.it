<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vita e Luce</title>
    <meta name="robots" content="index, follow" />

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">
    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/customFonts.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6E07JQRRW4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6E07JQRRW4');
</script>

<body>

<?php include 'components/menu.php'; ?>


            </div>
        </div>
    </div>

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Carrello</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <div class="content">
                            <a href="shop-details.php" class="title">CD Luce e Vita</a>
                            <span class="quantity-price">1 x <span class="amount">€14.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Totale :</strong>
                    <span class="amount">€14.00</span>
                </div>
                <div class="buttons">
                    <a href="carrello.php" class="btn btn-dark btn-hover-primary">Vedi Carrello</a>
                    <a href="https://buy.stripe.com/test_bIY9BL7bza0Ya7CaEH" class="btn btn-outline-dark">Ordina</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button class="active" data-filter="*">Tutti</button>
                            <button data-filter=".featured">Prodotti 1</button>
                            <button data-filter=".new">Prodotti 2</button>
                            <button data-filter=".sales">Prodotti 3</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <!-- Isotop Filter End -->

        <div class="section learts-mt-70">
            <div class="container">
                <!-- Products Start -->
                <div id="shop-products" class="products isotope-grid row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                    <div class="grid-sizer col-1"></div>

                    <div class="grid-item col featured">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="shop-details.php" class="image">
                                    <img src="assets/images/product/s328/product-17.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s328/product-17-hover.webp" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="shop-details.php">CD Vita e Luce</a></h6>
                                <span class="price">
                                    €14
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                                    <a href="carrello.php" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item col new">
                        <div class="product">
                            <div class="product-thumb">
                                <a href="shop-details.php" class="image">
                                    <span class="product-badges">
                                        <span class="outofstock"><i class="fal fa-frown"></i></span>
                                    </span>
                                    <img src="assets/images/product/s328/product-14.webp" alt="Product Image">
                                    <img class="image-hover " src="assets/images/product/s328/product-14-hover.webp" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="title"><a href="shop-details.php">T-Shirt Vita E Luce</a></h6>
                                <span class="price">
                                    €25
                                </span>
                                <div class="product-buttons">
                                    <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                                    <a href="carrello.php" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Products End -->
                <div class="text-center learts-mt-70">
                    <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="ti-plus"></i> Altro</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Products Section End -->

<!-- Footer -->
<?php include 'components/footer.php'?>

    <!-- Modal -->
    <div class="quickViewModal modal fade" id="quickViewModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="close" data-bs-dismiss="modal">&times;</button>
                <br>
                <div class="row learts-mb-n30">

                    <!-- Product Images Start -->
                    <div class="col-lg-6 col-12 learts-mb-30">
                        <div class="product-images">
                            <div class="product-gallery-slider-quickview">
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-1.webp">
                                    <img src="assets/images/product/single/1/product-1.webp" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-2.webp">
                                    <img src="assets/images/product/single/1/product-2.webp" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-3.webp">
                                    <img src="assets/images/product/single/1/product-3.webp" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-4.webp">
                                    <img src="assets/images/product/single/1/product-4.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Images End -->

                    <!-- Product Summery Start -->
                    <div class="col-lg-6 col-12 overflow-hidden position-relative learts-mb-30">
                        <div class="product-summery customScroll">
                            <h3 class="product-title">T-Shirt #unitiancheselontani</h3>
                            <div class="product-price">€14.00</div>
                            <div class="product-description">
                                <p>Celebra la tua fede con la t-shirt "Vita e Luce". Realizzata in morbido cotone e disponibile in diverse taglie e colori, questa t-shirt presenta un design moderno e minimalista. Indossala ovunque tu vada per portare il tuo messaggio di speranza e di luce.</p>
                            </div>
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Taglia</span></td>
                                            <td class="value">
                                                <div class="product-sizes">
                                                    <a href="#">XL</a>
                                                    <a href="#">L</a>
                                                    <a href="#">M</a>
                                                    <a href="#">S</a>
                                                    <a href="#">XS</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Colore</span></td>
                                            <td class="value">
                                                <div class="product-colors">
                                                    <a href="#" data-bg-color="#000000"></a>
                                                    <a href="#" data-bg-color="#ffffff"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Quantità</span></td>
                                            <td class="value">
                                                <div class="product-quantity">
                                                    <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                    <input type="text" class="input-qty" value="1">
                                                    <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product-buttons">
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1O1dCIG5eZy1jqcNMPn6SmNG"
  publishable-key="pk_test_51MWKYoG5eZy1jqcN6VypiM2NIg1bxIWb8Y27u171E7KYnfEYaSRody6MaysGIcb6A3xlggMLWGO9ypTCk3TO649w00YnJvLbk4"
>
</stripe-buy-button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Summery End -->    
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/mo.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery.matchHeight-min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/photoswipe.min.js"></script>
    <script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/ResizeSensor.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/product360.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
    <script src="assets/js/plugins/scrollax.min.js"></script>
    <script src="assets/js/plugins/instafeed.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <!-- <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
    <!--
    <script>
        if (window.location.href.indexOf('.php') > -1) {
  var updatedUrl = window.location.href.replace(/\.php/, '');
  window.history.replaceState({}, '', updatedUrl);
}

    </script> 
--> 

</body>

</html>