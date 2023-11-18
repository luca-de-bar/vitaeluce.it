<?php
function meta_and_title() {
    return "
    <title>Vita e Luce - Missione Zigana Evangelica</title>
    <meta name=\"robots\" content=\"index, follow\" />
    <meta name=\"description\" content=\"Vita e Luce è una missione evangelica dedicata a stimolare la fede attraverso la musica, la preghiera e l'insegnamento della Parola di Dio. Unisciti a noi per arricchire la tua vita spirituale.\">
    <meta name=\"keywords\" content=\"Vita e Luce, missione evangelica, fede cristiana, musica religiosa, preghiera, scuola domenicale, Dio\">
    <link rel=\"canonical\" href=\"https://www.vitaeluce.it/\" />
    ";
}

function favicon() {
    return "    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/images/favicon.webp\">
    ";
}


function DesktopMenu() {
    return <<<HTML
    <!-- Header Section Start -->
    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo/logo_transparent_background.png" alt="" style="max-width:200px; max-height:150px;"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class="Home"><a href="index.html"><span class="menu-text">Home</span></a></li>
                            <li class="Chi Siamo"><a href="scopridipiu.html"><span class="menu-text">Chi Siamo</span></a></li>
                            <li class="shop"><a href="spoiler.html"><span class="menu-text">CD Nuovi</span></a></li>
                            <li class="uniti"><a href="unitiancheselontani.html"><span class="menu-text">#unitiancheselontani</span></a></li>
                            <li class="preghiera"><a href="contattaci.html"><span class="menu-text">Richieste</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Header Section End -->
HTML;
}


?>
