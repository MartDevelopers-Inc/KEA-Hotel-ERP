<?php
require_once('staff/admin/configs/config.php');
require_once('_partials/head.php');
$room = $_GET['room'];
$ret = "SELECT * FROM `rooms` WHERE id ='$room' ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($row = $res->fetch_object()) {
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
            <nav class="navbar navbar-white navbar-overlay">
                <a class="logo-link" href="index.php">
                    <img class="logotype" src="assets/images/ui/logo-white.svg" alt="Sochi">
                </a>
                <div class="navbar__menu">
                    <button class="hamburger" type="button">
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="nav">
                        <li class="nav__item _is-current"><a class="nav__link" href="rooms.php"><span data-hover="Rooms">Rooms</span></a></li>
                        <li class="nav__item"><a class="nav__link" href="gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
                        <li class="nav__item"><a class="nav__link" href="about.php"><span data-hover="About Us">About Us</span></a></li>
                        <li class="nav__item"><a class="nav__link" href="contact.php"><span data-hover="Contact Us">Contact Us</span></a></li>
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
            <!-- Intro -->
            <section class="intro">
                <div class="intro__bg-wrap">
                    <div class="overlay intro__bg js-image js-parallax js-scale-down" data-image="staff/admin/assets/img/rooms/<?php echo $row->image; ?>"></div>
                </div>
                <div class="container intro__container">
                    <div class="row h-100 align-items-center align-items-center justify-content-center">
                        <div class="col-12 col-xl-8 text-center">
                            <span class="title title--overhead text-white js-lines"><?php echo $row->number; ?></span>
                            <h1 class="title title--display-1 js-lines"><?php echo $row->type; ?></h1>
                        </div>
                    </div>
                </div>
                <!-- Scroll To -->
                <a class="scroll-to" href="%21.html#content">Scroll<span class="scroll-to__line"></span></a>
            </section>
            <!-- /Intro -->

            <!-- Content -->
            <section id="content" class="container">
                <div class="row sticky-parent">
                    <div class="col-md-12 col-xl-8 order-2 order-xl-1 mt-4 mt-sm-5">
                        <!-- Description room -->
                        <h3 class="title title--h3">Description</h3>
                        <?php echo $row->details; ?>
                        <!-- Amenity -->
                        <h3 class="title title--h3 mt-4 mt-sm-5">Amenity</h3>
                        <div class="row">
                            <ul class="list-unstyled list-feature col-12 col-md-4">
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-parking.svg" alt="" />
                                    Free parking
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-wifi.svg" alt="" />
                                    Fast Wi-Fi
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-spa.svg" alt="" />
                                    SPA Services
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-sport.svg" alt="" />
                                    Gym
                                </li>
                            </ul>
                            <ul class="list-unstyled list-feature col-12 col-md-4">
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-elevator.svg" alt="" />
                                    Elevator
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-tv.svg" alt="" />
                                    Cable TV
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-kitchen.svg" alt="" />
                                    Kitchen
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-pool.svg" alt="" />
                                    Pool
                                </li>
                            </ul>
                            <ul class="list-unstyled list-feature col-12 col-md-4">
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-coffee-maker.svg" alt="" />
                                    Coffee maker
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-conditioner.svg" alt="" />
                                    Conditioning
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-hair-dryer.svg" alt="" />
                                    Hair dryer
                                </li>
                                <li class="list-feature__item">
                                    <img class="icon icon--24" src="assets/icons/icon-washer.svg" alt="" />
                                    Washer
                                </li>
                            </ul>
                        </div>

                        <!-- Gallery slider -->
                        <div class="slider-room ltr swiper-container mt-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="coverSlider js-image" data-image="staff/admin/assets/img/rooms/<?php echo $row->image; ?>"></div>
                                </div>
                            </div>

                            <!-- Navigation -->
                            <div class="swiper-control swiper-control--bottom">
                                <div class="slash">
                                    <div class="swiper-button-next swiper-button-square">
                                        <i class="icon-chevron-left"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button-square">
                                        <i class="icon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Gallery slider -->

                        <!-- Rating & Review -->
                        <h3 class="title title--h3">24 Reviews</h3>
                        <div class="row">
                            <!-- Progress bar -->
                            <div class="col-12 col-md-6 progressBar">
                                <div class="progressBar__label">Comfort<span class="">7.5</span></div>
                                <div class="progressBar__wrap">
                                    <div class="progressBar__current" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Progress bar -->
                            <div class="col-12 col-md-6 progressBar">
                                <div class="progressBar__label">Food<span class="">6.3</span></div>
                                <div class="progressBar__wrap">
                                    <div class="progressBar__current" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Progress bar -->
                            <div class="col-12 col-md-6 progressBar">
                                <div class="progressBar__label">Facilities<span class="">8.6</span></div>
                                <div class="progressBar__wrap">
                                    <div class="progressBar__current" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Progress bar -->
                            <div class="col-12 col-md-6 progressBar">
                                <div class="progressBar__label">Location<span class="">9.0</span></div>
                                <div class="progressBar__wrap">
                                    <div class="progressBar__current" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Progress bar -->
                            <div class="col-12 col-md-6 progressBar">
                                <div class="progressBar__label">Staff<span class="">9.2</span></div>
                                <div class="progressBar__wrap">
                                    <div class="progressBar__current" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Progress bar -->
                            <div class="col-12 col-md-6 progressBar">
                                <div class="progressBar__label">Price-quality ratio<span class="">7.6</span></div>
                                <div class="progressBar__wrap">
                                    <div class="progressBar__current" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Sidebar Booking -->
                    <div class="col-md-12 col-xl-4 order-1 order-xl-2">
                        <div class="sidebar-booking sticky-column">
                            <div class="sidebar-booking__priceWrap">
                                <div class="priceWrap-title">Price</div>
                                <div class="priceWrap-price">Ksh <?php echo $row->price; ?><span> / Night</span></div>
                            </div>

                            <form method="POST" class="sidebar-booking__wrap">
                                <!-- Dates -->
                                <div class="form-group">
                                    <label class="label" for="check-in">Dates</label>
                                    <div class="form-dual form-dual--mobile">
                                        <div class="form-dual__left">
                                            <input type="text" class="inputText inputText__icon readonly js-datepicker" id="check-in" name="check-in" placeholder="Select data" required="required" autocomplete="off">
                                            <span class="input-icon icon-calendar"></span>
                                        </div>
                                        <div class="form-dual__right">
                                            <input type="text" class="inputText inputText__icon readonly js-datepicker" id="check-out" name="check-out" placeholder="Select data" required="required" autocomplete="off">
                                            <span class="input-icon icon-calendar"></span>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /Sidebar Booking -->
                </div>
            </section>
            <!-- /Content -->

        </main>
        <!-- /Content -->

        <!-- Footer -->
        <?php
        require_once('_partials/footer.php');
        ?>

        <!-- Demo Menu -->
        <div class="overlay-slideNav"></div>
        <!-- Demo Menu -->

        <!-- JavaScripts -->
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/common.js"></script>

        <!-- Mapbox init -->
        <script src="assets/js/mapbox.init.js"></script>

        <script src="assets/demo/plugins-demo.js"></script>
    </body>

    </html>
<?php } ?>