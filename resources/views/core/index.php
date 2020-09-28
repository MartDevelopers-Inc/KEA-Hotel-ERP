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
	<?php
	require_once('_partials/header.php');
	?>
	<!-- /Header -->

	<!-- Content -->
	<main class="main">
		<!-- Intro -->
		<section class="intro">
			<div class="intro__bg-wrap">
				<div class="overlay intro__bg js-image js-parallax" data-image="assets/images/image_header_01.jpg"></div>
			</div>
			<div class="container intro__container">
				<div class="row h-100 align-items-center">
					<div class="col-12 col-md-12 col-xl-8">
						<br>
						<h1 class="title title--display-1 js-lines">Welcome To KEA Hotel </h1>
					</div>
				</div>
			</div>
			<!-- Scroll To -->
			<a class="scroll-to" href="#about">Scroll<span class="scroll-to__line"></span></a>
		</section>
		<!-- /Intro -->

		<!-- Section About Us -->
		<section id="about" class="container section">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-8">
					<span class="title title--overhead js-lines">About Us</span>
					<h1 class="title title--h1 js-lines">Begin your amazing adventure.</h1>
				</div>
				<div class="col-12 col-lg-6 text-left text-sm-justify">
					<p class="mr-0 mr-lg-4 paragraph js-scroll-show">The humid subtropical climate, high mountains, exotic vegetation, endless beaches, national parks, historic architecture, exciting attraction sites, art festivals and lively multicultural environment make Sochi a prominent resort destination.</p>
				</div>
				<div class="col-12 col-lg-6 text-left text-sm-justify">
					<p class="ml-0 ml-lg-4 paragraph js-scroll-show">Sochi has a lot to offer for anyone who loves nature, sports, history, sunny beach leisure and active adventures. There is too much to do and too many things to see in Sochi so you will never be bored.</p>
				</div>

				<div class="col-12 col-lg-6">
					<figure class="about-image-wrap mr-0 mr-lg-4">
						<a class="about-link" href="about.html">Explore More <i class="icon-arrow-special"></i></a>
						<img class="cover about-image-portrait" src="assets/images/about_image_01.jpg" alt="about" />
					</figure>
				</div>
				<div class="col-12 col-lg-6">
					<figure class="about-image-wrap ml-0 ml-lg-4">
						<img class="cover about-image-landscape" src="assets/images/about_image_02.jpg" alt="about" />
					</figure>
				</div>
			</div>
		</section>

		<!-- Section Rooms -->
		<section class="container section">
			<div class="row align-items-end">
				<div class="col-12 col-md-12 col-lg-8">
					<span class="title title--overhead js-lines">Rooms</span>
					<h1 class="title title--h1 js-lines">Rooms / Suites.</h1>
				</div>
				<div class="col-12 col-md-12 col-lg-4 text-lg-right d-none d-md-block">
					<a class="btn-link header-btn-more" href="rooms.php">See all Rooms</a>
				</div>
			</div>

			<!-- Grid -->
			<div class="row">
				<?php
				$ret = "SELECT * FROM `rooms` WHERE status ='Vacant' AND type ='Presidential Suites' ORDER BY RAND() LIMIT 1 ";
				$stmt = $mysqli->prepare($ret);
				$stmt->execute(); //ok
				$res = $stmt->get_result();
				while ($row = $res->fetch_object()) {
				?>
					<div class="col-12 col-md-12 col-lg-8">
						<!-- ItemRoom -->
						<div class="itemRoom">
							<span class="badge">Best Suite</span>
							<figure class="itemRoom__img-wrap">
								<a class="itemRoom__link" href="room_details.php?room=<?php echo $row->id; ?>">
									<img class="cover" src="staff/admin/assets/img/rooms/<?php echo $row->image; ?>" alt="room" />
								</a>
							</figure>
							<div class="itemRoom__details">
								<h4 class="title title--h4"><?php echo $row->type; ?></h4>
								<div class="itemRoom__price">Ksh <?php echo $row->price; ?> /<span>Night</span></div>
							</div>
						</div>
					</div>
				<?php }
				$ret = "SELECT * FROM `rooms` WHERE status ='Vacant' ORDER BY RAND() LIMIT 4 ";
				$stmt = $mysqli->prepare($ret);
				$stmt->execute(); //ok
				$res = $stmt->get_result();
				while ($row = $res->fetch_object()) {
				?>

					<div class="col-12 col-md-6 col-lg-4">
						<!-- ItemRoom -->
						<div class="itemRoom">
							<figure class="itemRoom__img-wrap">
								<a class="itemRoom__link" href="room_details.php?room=<?php echo $row->id; ?>">
									<img class="cover" src="staff/admin/assets/img/rooms/<?php echo $row->image; ?>" alt="room" />
								</a>
							</figure>
							<div class="itemRoom__details">
								<h4 class="title title--h4"><?php echo $row->type;?></h4>
								<div class="itemRoom__price">Ksh <?php echo $row->price;?> /<span>Night</span></div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</section>

		<!-- Section Achievements -->
		<section class="container section">
			<div class="row">
				<div class="col-12 col-lg-7">
					<h2 class="title-description js-lines">We strive to be the best in our field to make you even more comfortable.</h2>
				</div>
			</div>

			<div class="row">
				<!-- Item count -->
				<div class="col-6 col-md-3 col__left">
					<div class="ach-box">
						<span class="title title--overhead js-lines">Spa offers</span>
						<div class="item-count"><span>32</span>+</div>
					</div>
				</div>

				<!-- Item count -->
				<div class="col-6 col-md-3 col__right">
					<div class="ach-box">
						<span class="title title--overhead js-lines">Rooms</span>
						<div class="item-count"><span>24</span>+</div>
					</div>
				</div>

				<!-- Item count -->
				<div class="col-6 col-md-3 col__left">
					<div class="ach-box">
						<span class="title title--overhead js-lines">Beaches</span>
						<div class="item-count"><span>3</span>+</div>
					</div>
				</div>

				<!-- Item count -->
				<div class="col-6 col-md-3 col__right">
					<div class="ach-box">
						<span class="title title--overhead js-lines">Happy clients</span>
						<div class="item-count"><span>10</span>k</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section Testimonials -->
		<section class="section section-testimonials section-gray section-gray--cutoutTop">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<span class="title title--overhead js-lines">Testimonials</span>
						<h1 class="title title--h1 js-lines">What clients <br><span class="text-accent">say about us.</span></h1>
					</div>

					<div class="col-12">
						<!-- Carousel -->
						<div class="swiper-container js-testimonials mb-5">
							<div class="swiper-wrapper">
								<!-- Testimonials item -->
								<div class="testimonials-item swiper-slide">
									<h4 class="title title--h4">Best hotel!</h4>
									<p class="testimonials-item__caption">— The hotel has everything you need. On the ground floor there is a lobby bar, on the second floor there is a zone with an indoor pool and sauna, on the seventh floor there is a restaurant and spa-salon. The rooms are cleaned every day.</p>
									<div class="author-wrap">
										<div class="author-picture"><img class="cover" src="assets/images/person.jpg" alt="Jacob Lane" /></div>
										<div>
											<div class="author-name">Jacob Lane</div>
											<div class="author-country">from USA</div>
										</div>
									</div>
								</div>
								<!-- Testimonials item -->
								<div class="testimonials-item swiper-slide">
									<h4 class="title title--h4">Comfortable hotel.</h4>
									<p class="testimonials-item__caption">— Well, what can I say, every year, day and hour, this place is being transformed for the better. The staff is completely competent and friendly, Everything around is blooming, pleasing, nourishing and making the holiday bright.</p>
									<div class="author-wrap">
										<div class="author-picture"><img class="cover" src="assets/images/person2.jpg" alt="Victoria Wilson" /></div>
										<div>
											<div class="author-name">Victoria Wilson</div>
											<div class="author-country">from France</div>
										</div>
									</div>
								</div>
								<!-- Testimonials item -->
								<div class="testimonials-item swiper-slide">
									<h4 class="title title--h4">The modern.</h4>
									<p class="testimonials-item__caption">— The modern 5 * Hotel Sochi Center is an ideal solution for combining business and leisure. Stylish design and exceptional service will satisfy the desires of any guest. 150 rooms with balcony (non-smoking), sea view, trendy restaurant.</p>
									<div class="author-wrap">
										<div class="author-picture"><img class="cover" src="assets/images/person3.jpg" alt="Max Edwards" /></div>
										<div>
											<div class="author-name">Max Edwards</div>
											<div class="author-country">from Germany</div>
										</div>
									</div>
								</div>
								<!-- Testimonials item -->
								<div class="testimonials-item swiper-slide">
									<h4 class="title title--h4">Best hotel!</h4>
									<p class="testimonials-item__caption">— The hotel has everything you need. On the ground floor there is a lobby bar, on the second floor there is a zone with an indoor pool and sauna, on the seventh floor there is a restaurant and spa-salon. The rooms are cleaned every day.</p>
									<div class="author-wrap">
										<div class="author-picture"><img class="cover" src="assets/images/person.jpg" alt="Jacob Lane" /></div>
										<div>
											<div class="author-name">Jacob Lane</div>
											<div class="author-country">from USA</div>
										</div>
									</div>
								</div>
								<!-- Testimonials item -->
								<div class="testimonials-item swiper-slide">
									<h4 class="title title--h4">Comfortable hotel.</h4>
									<p class="testimonials-item__caption">— Well, what can I say, every year, day and hour, this place is being transformed for the better. The staff is completely competent and friendly, Everything around is blooming, pleasing, nourishing and making the holiday bright.</p>
									<div class="author-wrap">
										<div class="author-picture"><img class="cover" src="assets/images/person2.jpg" alt="Victoria Wilson" /></div>
										<div>
											<div class="author-name">Victoria Wilson</div>
											<div class="author-country">from France</div>
										</div>
									</div>
								</div>
								<!-- Testimonials item -->
								<div class="testimonials-item swiper-slide">
									<h4 class="title title--h4">The modern.</h4>
									<p class="testimonials-item__caption">— The modern 5 * Hotel Sochi Center is an ideal solution for combining business and leisure. Stylish design and exceptional service will satisfy the desires of any guest. 150 rooms with balcony (non-smoking), sea view, trendy restaurant.</p>
									<div class="author-wrap">
										<div class="author-picture"><img class="cover" src="assets/images/person3.jpg" alt="Max Edwards" /></div>
										<div>
											<div class="author-name">Max Edwards</div>
											<div class="author-country">from Germany</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Pagination  -->
							<div class="swiper-pagination"></div>
						</div>
						<!-- /Carousel -->
					</div>
				</div>
			</div>
		</section>

		<!-- Section CTA -->
		<section class="container">
			<div class="row cta-box cta-negative js-scroll-show">
				<div class="col-12 col-lg-7">
					<h2 class="title title--h2">Make room for adventure.</h2>
					<p class="paragraph">Book your room right now and start your amazing adventure full of discoveries and experiences with KEA Hotel.</p>
				</div>
				<div class="col-12 col-lg-5 text-lg-right">
					<a href="rooms.php" class="btn btn__large btn--white">Reservations <i class="btn-icon-right icon-arrow-special"></i></a>
				</div>
			</div>
		</section>
	</main>
	<!-- /Content -->

	<!-- Footer -->
	<?php
	require_once('_partials/footer.php');
	?>

	<!-- JavaScripts -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>
	<script src="assets/js/common.js"></script>

	<script src="assets/demo/plugins-demo.js"></script>
</body>

</html>