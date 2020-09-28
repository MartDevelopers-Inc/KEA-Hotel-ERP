<?php
    require_once('_partials/head.php')
?>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__wrap">
            <div class="preloader__progress"><span></span></div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <a class="logo-link" href="index.php">
                <img class="logotype" src="assets/images/ui/logo-white.svg" alt="Sochi">
            </a>
            <div class="navbar__menu">
                <button class="hamburger" type="button">
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav">
                    <li class="nav__item "><a class="nav__link" href="rooms.php"><span data-hover="Rooms">Rooms</span></a></li>
                    <li class="nav__item "><a class="nav__link" href="gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
                    <li class="nav__item"><a class="nav__link" href="about.php"><span data-hover="About Us">About Us</span></a></li>
                    <li class="nav__item _is-current"><a class="nav__link" href="contact.php"><span data-hover="Contact Us">Contact Us</span></a></li>
                    <li class="nav__item"><a class="btn btn__medium" href="#"><i class="btn-icon-left icon-bookmark"></i>Reservations</a></li>
                </ul>
            </div>
            <div class="navbar__btn">
                <a class="btn btn__medium" href="staff/"><i class="btn-icon-left icon-login"></i>Staff Login</a>
            </div>
        </nav>
    </header>
    <!-- /Header -->

    <!-- Content -->
    <main class="main">
        <section class="container section section-first">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title--h1 js-lines">Contact.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-contact js-scroll-show">
                    <h4 class="title title--h4">Address</h4>
                    <p class="paragraph">127001 S Western Ave,<br>Machakos, 90710</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-contact js-scroll-show">
                    <h4 class="title title--h4">Contact</h4>
                    <p class="paragraph">hello@keahotels.com<br>+254 737 229776</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-contact js-scroll-show">
                    <h4 class="title title--h4">Follow Us</h4>
                    <p class="paragraph">Connect with me on <a class="link-underline" href="https://www.facebook.com/">facebook</a>,<br><a class="link-underline" href="https://twitter.com/">twitter</a> or <a class="link-underline" href="https://www.instagram.com/">instagram</a></p>
                </div>
            </div>
        </section>

    </main>
    <!-- /Content -->

    <!-- Footer -->
    <?php
    require_once('_partials/footer.php')
    ?>
    <!-- JavaScripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/common.js"></script>

    <!-- Mapbox init -->
    <script src="assets/js/mapbox.init.js"></script>

    <script src="assets/demo/plugins-demo.js"></script>
</body>

</html>