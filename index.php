<?php
require_once('config/config.php');
require_once('partials/cms_head.php');
/* Persiste System Settigs On Landing Pages */
$ret = "SELECT * FROM `system_settings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>

    <body>
        <div class="super_container">
            <?php require_once("partials/cms_nav.php"); ?>
            <div class="home">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/cms_assets/images/home.jpg" data-speed="0.8"></div>
                <div class="home_container d-flex flex-column align-items-center justify-content-center">
                    <div class="home_title">
                        <h1>Kea Hotels Inc</h1>
                    </div>
                    <div class="home_text text-center">
                        Experience Life, Live The Moment
                    </div>
                    <div class="button home_button"><a href="#">View Our Rooms</a></div>
                </div>
            </div>

            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <div>Welcome</div>
                                <h1>Amazing Hotel in front of the Sea</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row intro_row">
                        <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
                            <div class="intro_text text-center">
                                <p>
                                    Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scele risque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperdiet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gallery_row">
                        <div class="col">

                            <div class="gallery_slider_container">
                                <div class="owl-carousel owl-theme gallery_slider">

                                    <div class="gallery_slide">
                                        <img src="public/cms_assets/images/gallery_1.jpg" alt="">
                                        <div class="gallery_overlay">
                                            <div class="text-center d-flex flex-column align-items-center justify-content-center">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="gallery_slide">
                                        <img src="public/cms_assets/images/gallery_2.jpg" alt="">
                                        <div class="public/cms_assets/gallery_overlay">
                                            <div class="text-center d-flex flex-column align-items-center justify-content-center">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="gallery_slide">
                                        <img src="public/cms_assets/images/gallery_3.jpg" alt="">
                                        <div class="gallery_overlay">
                                            <div class="text-center d-flex flex-column align-items-center justify-content-center">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="gallery_slide">
                                        <img src="public/cms_assets/images/gallery_4.jpg" alt="">
                                        <div class="gallery_overlay">
                                            <div class="text-center d-flex flex-column align-items-center justify-content-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_logo text-center">
                                <a href="#"><img src="images/logo.png" alt=""></a>
                            </div>
                            <div class="footer_content">
                                <div class="row">
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Phone:</div>
                                                <div>+546 990221 123</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Address:</div>
                                                <div>Main Str, no 23, New York</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Mail:</div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php require_once("partials/cms_footer.php"); ?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php require_once("partials/cms_scripts.php"); ?>
    </body>
    </html>
<?php
} ?>