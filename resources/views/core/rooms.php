<?php
require_once('staff/admin/configs/config.php');
require_once('_partials/head.php');
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
                <img class="logotype" src="assets/images/ui/logo-black.svg" alt="KEA">
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
        <section class="container section section-first">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title--h1 js-lines">Rooms / Suites.</h1>
                </div>
                <?php
                $ret = "SELECT * FROM `rooms` WHERE status ='Vacant' AND type ='Presidential Suites' ORDER BY RAND() LIMIT 1 ";
                $stmt = $mysqli->prepare($ret);
                $stmt->execute(); //ok
                $res = $stmt->get_result();
                while ($row = $res->fetch_object()) {
                ?>
                    <div class="col-12 js-scroll-show">
                        <!-- Main ItemRoom -->
                        <div class="itemRoom itemRoom__main">
                            <span class="badge">Best Selling</span>
                            <figure class="itemRoom__img-wrap">
                                <a class="itemRoom__link" href="room_details.php?room=<?php echo $row->id; ?>">
                                    <img class="cover lazyload" src="staff/admin/assets/img/rooms/<?php echo $row->image; ?>" alt="room" />
                                </a>
                                <div class="itemRoom__details">
                                    <h3 class="title title--h3"><?php echo $row->type; ?></h3>
                                    <div class="itemRoom__price">Ksh <?php echo $row->price; ?> /<span> Night</span></div>
                                </div>
                            </figure>
                        </div>
                    </div>
                <?php }
                $ret = "SELECT * FROM `rooms` WHERE status ='Vacant' ";
                $stmt = $mysqli->prepare($ret);
                $stmt->execute(); //ok
                $res = $stmt->get_result();
                while ($row = $res->fetch_object()) {
                ?>
                    <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
                        <!-- ItemRoom extended -->
                        <div class="itemRoom itemRoom__extended">
                            <figure class="itemRoom__img-wrap">
                                <a class="itemRoom__link" href="room_details.php?room=<?php echo $row->id; ?>">
                                    <img class="cover lazyload" src="staff/admin/assets/img/rooms/<?php echo $row->image; ?>" alt="room" />
                                </a>
                                <div class="itemRoom__details">
                                    <h4 class="title title--h4"><?php echo $row->type; ?></h4>
                                    <div class="itemRoom__price">Ksh <?php echo $row->price; ?> / <span>Night</span></div>
                                </div>
                            </figure>

                            <div class="itemRoom__details-extended">
                                <div class="item-extended mr-4"><i class="icon-maximize"></i><?php echo $row->number; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <!-- /Content -->

    <!-- Mobile filter -->
    <div class="bottom-nav mobile-filters">
        <div class="bottom-nav__control"></div>
        <div class="container">
            <div class="row">
                <div class="form-group col-12">
                    <!-- Check in -->
                    <label class="label" for="check-in-mobile">Check in:</label>
                    <input type="text" class="inputText readonly js-datepicker" id="check-in-mobile" name="check-in-mobile" required="required" autocomplete="off">
                </div>

                <div class="form-group col-12">
                    <!-- Check in -->
                    <label class="label" for="check-out-mobile">Check out:</label>
                    <input type="text" class="inputText readonly js-datepicker" id="check-out-mobile" name="check-out-mobile" required="required" autocomplete="off">
                </div>

                <div class="form-group col-12">
                    <!-- Adult -->
                    <label class="label" for="person-adult-mobile">Adult:</label>
                    <div class="js-quantity">
                        <span class="qty-minus icon-minus"></span>
                        <input type="number" class="inputText js-quantity-input readonly" id="person-adult-mobile" name="person-adult-mobile" value="0" min="1" max="8" required="required" autocomplete="off">
                        <span class="qty-plus icon-plus"></span>
                    </div>
                </div>

                <div class="form-group col-12">
                    <!-- Kids -->
                    <label class="label" for="person-kids-mobile">Kids:</label>
                    <div class="js-quantity">
                        <span class="qty-minus icon-minus"></span>
                        <input type="number" class="inputText js-quantity-input readonly" id="person-kids-mobile" name="person-kids-mobile" value="0" min="0" max="8" autocomplete="off">
                        <span class="qty-plus icon-plus"></span>
                    </div>
                </div>

                <div class="form-group col-12">
                    <!-- Price from -->
                    <label class="label" for="price-min-mobile">Price from:</label>
                    <span class="input-prefix" data-prefix="$"><input type="number" class="inputText" id="price-min-mobile" name="price-min-mobile" placeholder="0"></span>
                </div>

                <div class="form-group col-12">
                    <!-- Price to -->
                    <label class="label" for="price-max-mobile">Price to:</label>
                    <span class="input-prefix" data-prefix="$"><input type="number" class="inputText" id="price-max-mobile" name="price-max-mobile" placeholder="0"></span>
                </div>

                <div class="form-group col-12">
                    <button class="btn btn__medium w-100">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay-popup"></div>

    <!-- Footer -->
    <?php
    require_once('_partials/footer.php');
    ?>

    <!-- Button Live Chat -->
    <div class="btn-floating js-show-to-scroll"><i class="icon-bubble"></i></div>

    <!-- Demo Menu -->
    <div class="overlay-slideNav"></div>
    <!-- Demo Menu -->

    <!-- JavaScripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/common.js"></script>

    <script src="assets/demo/plugins-demo.js"></script>
</body>

</html>