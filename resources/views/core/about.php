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
                    <li class="nav__item "><a class="nav__link" href="rooms.php"><span data-hover="Rooms">Rooms</span></a></li>
                    <li class="nav__item"><a class="nav__link" href="gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
                    <li class="nav__item _is-current"><a class="nav__link" href="about.php"><span data-hover="About Us">About Us</span></a></li>
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
		        <div class="overlay intro__bg js-image js-parallax js-scale-down" data-image="assets/images/intro_about.jpg"></div>
			</div>
	        <div class="container intro__container">
		        <div class="row h-100 align-items-center">
			        <div class="col-12 col-md-12 col-xl-8">
				        <span class="title title--overhead text-white js-lines">Welcome to KEA Hotel</span>
		                <h1 class="title title--display-1 js-lines">About KEA Hotel.</h1>
				    </div>
                </div>				
		    </div>
		    <!-- Scroll To -->
		    <a class="scroll-to" href="#about">Scroll<span class="scroll-to__line"></span></a>
	    </section>
	    <!-- /Intro -->
		
		<!-- Contact info -->
		<div class="bottom-panel height-md-auto">
		    <div class="bottom-panel__wrap">
			    <div class="row h-100 align-items-center">
				    <div class="col-12">
					    <div class="row ">
                            <div class="col-12 col-md-6 col-lg-4 mb-2 mb-sm-4 mb-md-0">
							    <div class="bottom-panel-title">Got a questions?</div>
								<span class="bottom-panel-info">hello@keahotels.com</span>
							</div>
				            <div class="col-12 col-md-6 col-lg-4 mb-2 mb-sm4 mb-md-0">
							    <div class="bottom-panel-title">For partners</div>
								<span class="bottom-panel-info">partners@keahotels.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	    <!-- /Contact info -->
		
	    <!-- Section About Us -->
	    <section id="about" class="container section">
	        <div class="row">
		        <div class="col-12 col-lg-5">
			        <span class="title title--overhead js-lines">Our story</span>
			        <h1 class="title title--h1 js-lines">A Brief History of KEA Hotel.</h1>
			    </div>
				<div class="col-12 col-lg-6 offset-lg-1 offset-top">
				    <p class="paragraph js-scroll-show">The humid subtropical climate, high mountains, exotic vegetation, endless beaches, national parks, historic architecture, exciting attraction sites, art festivals and lively multicultural environment make KEA Hotel a prominent resort destination.</p>
				    <p class="paragraph js-scroll-show">KEA Hotel has a lot to offer for anyone who loves nature, sports, history, sunny beach leisure and active adventures. There is too much to do and too many things to see in KEA Hotel  so you will never be bored.</p>
				</div>

		        <div class="slider-about col-fullwidth swiper-container">
                    <div class="swiper-wrapper">
			            <!-- Slide 1 -->
			            <div class="swiper-slide">
				            <div class="coverSlider js-image" data-image="assets/images/image_header_04.jpg"></div>
				        </div>
					
			            <!-- Slide 2 -->
			            <div class="swiper-slide">
				            <div class="coverSlider js-image" data-image="assets/images/about_image_02.jpg"></div>
				        </div>
					
			            <!-- Slide 3 -->
			            <div class="swiper-slide">
				            <div class="coverSlider js-image" data-image="assets/images/image_header_04.jpg"></div>
				        </div>

			            <!-- Slide 4 -->
			            <div class="swiper-slide">
				            <div class="coverSlider js-image" data-image="assets/images/image_header_03.jpg"></div>
				        </div>
		            </div>
					
		            <!-- Navigation -->
					<div class="swiper-control-center">
					    <div class="swiper-control swiper-control--bottom">
						    <div class="slash">
                                <div class="swiper-button-next swiper-button-square"><i class="icon-chevron-left"></i></div>
				                <div class="swiper-button-prev swiper-button-square"><i class="icon-chevron-right"></i></div>
						    </div>
			            </div>
					</div>
		        </div>
		    </div>
		</section>

        <!-- Section Approach -->
	    <section class="container section">		
		    <div class="row mb-4 mb-md-5">
		        <div class="col-12">
			        <span class="title title--overhead js-lines">What do we offer</span>
			        <h1 class="title title--h1 js-lines">Our approach.</h1>
			    </div>
			</div>
			
			<!-- Item Approach -->
			<div class="row item-approach" data-approach="01">
		        <div class="col-12 col-lg-6">
			        <h3 class="title title--h3 js-lines">Service Quality</h3>
			    </div>
				<div class="col-12 col-lg-6">
				    <p class="paragraph js-scroll-show">Service quality in the hospitality industry becomes one of the most important factors for gaining a sustainable competitive advantage and customers’ confidence in the highly competitive marketplace, and therefore service quality can give the hospitality industry a great chance to create competitive differentiation for organizations.</p>
					<p class="paragraph js-scroll-show">A successful hotel delivers excellent quality service to customers, and service quality is considered the life of the hotel.</p>
				</div>
			</div>
			
			<!-- Item Approach -->
			<div class="row item-approach" data-approach="02">
		        <div class="col-12 col-lg-6">
			        <h3 class="title title--h3 js-lines">Friendly Staff</h3>
			    </div>
				<div class="col-12 col-lg-6">
				    <p class="paragraph js-scroll-show">Happy customers are loyal customers. Not only is it important for we to provide stellar service, but awesome products as well. </p>
					<p class="paragraph js-scroll-show">The most important concept of customer satisfaction is accepted all around the world is the expectancy disconfirmation theory. This theory was presented by MartDevelopers Inc, he said that satisfaction stage is the resultant of the distinction between anticipated and supposed performance. </p>
				</div>
			</div>
			
			<!-- Item Approach -->
			<div class="row item-approach item-approach__last" data-approach="03">
		        <div class="col-12 col-lg-6">
			        <h3 class="title title--h3 js-lines">Customer Satisfaction</h3>
			    </div>
				<div class="col-12 col-lg-6">
				    <p class="paragraph js-scroll-show">Customer satisfaction is a psychological concept that involves the feeling of well-being and pleasure that results from obtaining what one hopes for and expects from an appealing product and/or service. Customer satisfaction definition is based on the expectation disconfirmation point of view!</p>
				</div>
			</div>
		</section>
		
	</main>
	<!-- /Content -->
	
	<!-- Footer -->
	<?php require_once('_partials/footer.php');?>

    <!-- Button Live Chat -->
	<div class="btn-floating js-show-to-scroll"><i class="icon-bubble"></i></div>
	
	
	
	<!-- JavaScripts -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/common.js"></script>

    <script src="assets/demo/plugins-demo.js"></script>
</body>

</html>