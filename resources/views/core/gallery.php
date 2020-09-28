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
				<img class="logotype" src="assets/images/ui/logo-black.svg" alt="KEA">
			</a>
			<div class="navbar__menu">
				<button class="hamburger" type="button">
					<span></span>
					<span></span>
				</button>
				<ul class="nav">
					<li class="nav__item "><a class="nav__link" href="rooms.php"><span data-hover="Rooms">Rooms</span></a></li>
					<li class="nav__item  _is-current"><a class="nav__link" href="gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
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
				<div class="col-12 col-lg-6">
					<h1 class="title title--h1 js-lines">Gallery.</h1>
					<p class="paragraph js-scroll-show">KEA Hotel has a lot to offer for anyone who loves nature, sports, history, sunny beach leisure and active adventures.</p>
				</div>
				<div class="col-12">
					<!-- Filters -->
					<div class="select js-scroll-show">
						<span class="placeholder">Select category</span>
						<ul class="filter">
							<li class="filter__item active" data-filter="*"><a class="filter__link active" href="#filter">All</a></li>
							<li class="filter__item" data-filter=".category-city"><a class="filter__link" href="#filter">City</a></li>
							<li class="filter__item" data-filter=".category-beaches"><a class="filter__link" href="#filter">Beaches</a></li>
							<li class="filter__item" data-filter=".category-mountain"><a class="filter__link" href="#filter">Mountain Resort</a></li>
						</ul>
						<input type="hidden" name="changemetoo" />
					</div>
				</div>
			</div>
			<div class="flex-container js-gallery js-lightbox js-sort mt-4">
				<!-- ItemGallery -->
				<figure class="itemGallery category-city js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_01.jpg" data-size="1500x1875">
						<img class="cover lazyload" src="assets/images/image_gallery_01.jpg" alt="Sochi Hotel" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">City</span>
						<h4 class="title title--h4">KEA Hotel</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-beaches js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_02.jpg" data-size="1500x1000">
						<img class="cover lazyload" src="assets/images/image_gallery_02.jpg" alt="Sochi Beach" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">Beach</span>
						<h4 class="title title--h4">KEA Hotel Beach</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-mountain js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_03.jpg" data-size="800x1120">
						<img class="cover lazyload" src="assets/images/image_gallery_03.jpg" alt="Mountains of Sochi" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">Mountains</span>
						<h4 class="title title--h4">Mountains View</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-beaches js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_04.jpg" data-size="1000x1250">
						<img class="cover lazyload" src="assets/images/image_gallery_04.jpg" alt="Sochi Beach" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">Beach</span>
						<h4 class="title title--h4">KEA Hotel Beach</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-beaches js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_05.jpg" data-size="800x1000">
						<img class="cover lazyload" src="assets/images/image_gallery_05.jpg" alt="Sochi Beach" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">Beach</span>
						<h4 class="title title--h4">KEA Hotel Beach</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-city js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_06.jpg" data-size="800x1199">
						<img class="cover lazyload" src="assets/images/image_gallery_06.jpg" alt="Sochi Hotel" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">City</span>
						<h4 class="title title--h4">KEA Hotel </h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-beaches js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/about_image_01.jpg" data-size="800x1200">
						<img class="cover lazyload" src="assets/images/about_image_01.jpg" alt="Sochi Beach" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">Beach</span>
						<h4 class="title title--h4">KEA Hotel Beach</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-city js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_08.jpg" data-size="800x1000">
						<img class="cover lazyload" src="assets/images/image_gallery_08.jpg" alt="Sochi Hotel" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">City</span>
						<h4 class="title title--h4">KEA Hotel</h4>
					</div>
				</figure>

				<!-- ItemGallery -->
				<figure class="itemGallery category-city js-scroll-opacity">
					<a class="itemGallery__link" href="assets/images/image_gallery_07.jpg" data-size="1000x658">
						<img class="cover lazyload" src="assets/images/image_gallery_07.jpg" alt="Sochi Hotel" />
					</a>
					<div class="itemGallery__details">
						<span class="title title--overhead">City</span>
						<h4 class="title title--h4">KEA Hotel</h4>
					</div>
				</figure>
			</div>
		</section>
	</main>
	<!-- /Content -->

	<!-- Footer -->
	<?php
	require_once('_partials/footer.php')
	?>

	<!-- PhotoSwipe -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">
			<div class="pswp__container trigger-close">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div>
					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
					<button class="pswp__button pswp__button--share" title="Share"></button>
					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
					<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div>
				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /PhotoSwipe -->

	<!-- Button Live Chat -->
	<div class="btn-floating js-show-to-scroll"><i class="icon-bubble"></i></div>
	<!-- JavaScripts -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>
	<script src="assets/js/common.js"></script>

	<script src="assets/demo/plugins-demo.js"></script>
</body>

</html>