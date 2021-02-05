<?php
require_once('config/config.php');
/* Persiste System Settigs On Landing Pages */
$ret = "SELECT * FROM `system_settings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
    if ($sys_logo = '') {
        $logo_dir = 'public/uploads/sys_logo/logo.png';
    } else {
        $logo_dir = "public/uploads/sys_logo/$sys->sys_logo";
    }
    require_once('partials/cms_head.php'); ?>

    <body>
        <div class="super_container">

            <?php require_once("partials/cms_nav.php"); ?>


            <div class="home">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/cms_assets/images/home.jpg" data-speed="0.8"></div>
                <div class="home_container d-flex flex-column align-items-center justify-content-center">
                    <div class="home_title">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>

            <div class="intro">
                <div class="container">
                    <div class="row row-eq-height">

                        <div class="col-lg-6">
                            <div class="intro_content">
                                <div class="section_title">
                                    <div><?php echo $sys->sys_name; ?></div>
                                    <h1><?php echo $sys->sys_tagline; ?></h1>
                                </div>
                                <div class="intro_text">
                                    <p>
                                        <?php echo $sys->contact_about; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="intro_image">
                                <div class="background_image" style="background-image:url(public/cms_assets/images/intro.jpg)"></div>
                                <img src="public/cms_assets/images/intro.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/cms_assets/images/footer.jpg" data-speed="0.8"></div>
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
                                                <div><?php echo $sys->contacts_phone; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Address:</div>
                                                <div><?php echo $sys->contacts_addres; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Mail:</div>
                                                <div><?php echo $sys->contacts_email; ?></div>
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
    <?php require_once('partials/cms_scripts.php');
} ?>
    </body>

    </html>