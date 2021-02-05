<header class="header">
    <div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">

        <div class="logo"><a href="#"><img class="logo_1 " height="200" width="200" src="<?php echo $logo_dir; ?>" alt=""><img class="logo_2" src="<?php echo $logo_dir; ?>" alt=""><img class="logo_3" src="<?php echo $logo_dir; ?>" alt=""></a></div>

        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li class=""><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="staff/">Staff Portal</a></li>

            </ul>
        </nav>

        <div class="social header_social">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a target="_blank" href="https://facebook.com/<?php echo $sys->social_fb; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/<?php echo $sys->social_twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://instagram.com/<?php echo $sys->social_ig ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <div class="header_right d-flex flex-row align-items-center justify-content-start">

            <div class="search_button">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
                    <g>
                        <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"></path>
                    </g>
                </svg>
            </div>

            <div class="header_link"><a href="rooms.php">Book Your Room Now</a></div>

            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>

    </div>
</header>

<div class="logo_overlay">
    <div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
        <div class="logo"><a href="#"><img src="<?php echo $logo_dir; ?>" alt=""></a></div>
    </div>
</div>

<div class="menu_overlay">
    <div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">

        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </div>
</div>

<div class="menu">
    <div class="menu_container d-flex flex-column align-items-center justify-content-center">

        <nav class="menu_nav text-center">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="staff/">Staff Portal</a></li>
            </ul>
        </nav>
        <div class="button menu_button"><a href="rooms.php">book now</a></div>

        <div class="social menu_social">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a target="_blank" href="https://facebook.com/<?php echo $sys->social_fb; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/<?php echo $sys->social_twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://instagram.com/<?php echo $sys->social_ig; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>