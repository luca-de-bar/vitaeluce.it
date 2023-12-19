<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vita e Luce - Missione Zigana Evangelica</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Vita e Luce è una missione evangelica dedicata a stimolare la fede attraverso la musica, la preghiera e l'insegnamento della Parola di Dio. Unisciti a noi per arricchire la tua vita spirituale.">
    <meta name="keywords" content="Vita e Luce, missione evangelica, fede cristiana, musica religiosa, preghiera, scuola domenicale, Dio">
    <link rel="canonical" href="https://www.vitaeluce.it/" />
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
    <!--<link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/custom.css">

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
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Carrello</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Carrello</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <form class="cart-form" action="#">
                <table class="cart-wishlist-table table">
                    <thead>
                        <tr>
                            <th class="name" colspan="2">Articolo</th>
                            <th class="price">Prezzo</th>
                            <th class="quantity">Quantità</th>
                            <th class="subtotal">Totale</th>
                            <th class="remove">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="thumbnail"><a href="shop-details.html"><img src="assets/images/product/cart-product-1.webp" alt="cart-product-1"></a></td>
                            <td class="name"> <a href="shop-details.html">CD Vita e Luce</a></td>
                            <td class="price"><span>€14.00</span></td>
                            <td class="quantity">
                                <div class="product-quantity">
                                    <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                    <input type="text" class="input-qty" value="1">
                                    <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                </div>
                            </td>
                            <td class="subtotal"><span>€14.00</span></td>
                            <td class="remove"><a href="#" class="btn">×</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-between mb-n3">
                    <div class="col-auto mb-3">
                        <div class="cart-coupon">
                            <input type="text" placeholder="Inserisci il tuo codice sconto">
                            <button class="btn"><i class="fal fa-gift"></i></button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="spoiler.html">Continua a comprare</a>
                    </div>
                </div>
            </form>
            <div class="cart-totals mt-5">
                <h2 class="title">Totale Carrello</h2>
                <table>
                    <tbody>
                        <tr class="total">
                            <th>Totale</th>
                            <td><strong><span class="amount">€14.00</span></strong></td>
                        </tr>
                    </tbody>
                </table>
                <a href="https://buy.stripe.com/test_bIY9BL7bza0Ya7CaEH" class="btn btn-dark btn-outline-hover-dark">Acquista</a>
            </div>
        </div>

    </div>
    <!-- Shopping Cart Section End -->

<?php include 'components/footer.php'?>    
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
        if (window.location.href.indexOf('.html') > -1) {
  var updatedUrl = window.location.href.replace(/\.html/, '');
  window.history.replaceState({}, '', updatedUrl);
}

    </script> 
--> 

</body>

</html>