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
    <?php 
        require_once('_partials/header.php')
    ?>
	<!-- /Header -->
    
	<!-- Filters -->
	<div class="sub-header filters-room sticky">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-2 mb-md-3 mb-xl-0">
				    <!-- Dates -->
	                <div class="form-group form-dual">
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
		        <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-2 mb-md-0">
				    <!-- Persons -->
		            <div class="form-group form-dual">
			            <div class="js-quantity form-dual__left">
			                <label class="label" for="person-adult">Adult:</label>
				            <div class="position-relative w-100">
                                <span class="qty-minus icon-minus"></span>
                                <input type="number" class="inputText js-quantity-input readonly" id="person-adult" name="person-adult" value="0" min="1" max="8" required="required" autocomplete="off">
				                <span class="qty-plus icon-plus"></span>
				            </div>
			            </div>
		
			            <div class="js-quantity form-dual__right">
			                <label class="label" for="person-kids">Kids:</label>
				            <div class="position-relative w-100">
				                <span class="qty-minus icon-minus"></span>
                                <input type="number" class="inputText js-quantity-input readonly" id="person-kids" name="person-kids" value="0" min="0" max="8" autocomplete="off">
				                <span class="qty-plus icon-plus"></span>
				            </div>
			            </div>
		            </div>
                </div>
		        <div class="col-12 col-md-6 col-lg-6 col-xl-4">
		            <!-- Price -->
                    <div id="priceDesktop" class="dropdown">
		                <div class="form-group form-dual closeDropdown mr-0" id="dropdownPriceAction" data-toggle="dropdown" data-display="static">
		                    <label class="label">Price:</label>
				            <span id="price-from"></span>—<span id="price-to"></span>
			            </div>
			            <!-- Dropdown person -->
			            <div class="dropdown-menu dropdown-menu-lg-left dropdown-menu-right" id="dropdownPrice" aria-labelledby="dropdownPriceAction">
			                <div class="row">
				                <div class="col-12">
					                <div id="priceRange" class="no-ui-slider"></div>
					            </div>
				            </div>
				            <div class="row">
					            <div class="form-group col-6 col__left">
                                    <input type="text" class="inputText" id="price-min" name="price-min">
					            </div>
					            <div class="form-group col-6 col__right">
                                    <input type="text" class="inputText" id="price-max" name="price-max">
					            </div>
				            </div>
				            <div class="row row-footer">
					            <div class="col-12">
						            <button type="button" class="btn btn__small btn-close-dropdown w-100">Apply</button>
					            </div>
				            </div>	
			            </div>
			            <!-- /Dropdown person -->
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<!-- /Filters -->
	
	<!-- Content -->
	<main class="main">
        <section class="container section section-first">
		    <div class="row">
			    <div class="col-12">
				    <h1 class="title title--h1 js-lines">Rooms / Suites.</h1>
				</div>
				
				<div class="col-12 js-scroll-show">
				    <!-- Main ItemRoom -->
				    <div class="itemRoom itemRoom__main">
					    <span class="badge">Popular</span>
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_06.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h3 class="title title--h3">Comfort Room</h3>
							    <div class="itemRoom__price">$89<span>night</span></div>
						    </div>
						</figure>
					</div>
				</div>

                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_03.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Grand Delux Room</h4>
							    <div class="itemRoom__price">$129<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Adler</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>925 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>2 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_02.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Luxe Room</h4>
							    <div class="itemRoom__price">$259<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Sochi</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>980 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>3 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_05.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Apartments</h4>
							    <div class="itemRoom__price">$189<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Rosa Khutor</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>1500 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>4 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_04.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Standard Room</h4>
							    <div class="itemRoom__price">$49<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Adler</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>104 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>1 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_07.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Comfort Room</h4>
							    <div class="itemRoom__price">$109<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Sochi</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>132 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>2 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_08.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Standard Room</h4>
							    <div class="itemRoom__price">$89<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Sochi</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>96 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>1 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_09.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Grand Delux Room</h4>
							    <div class="itemRoom__price">$129<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Adler</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>842 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>2 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_10.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Comfort Room</h4>
							    <div class="itemRoom__price">$119<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Adler</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>168 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>2 Bedrooms</div>
						</div>
					</div>
				</div>
				
                <div class="col-12 col-md-6 col-lg-4 js-scroll-show">
				    <!-- ItemRoom extended -->
				    <div class="itemRoom itemRoom__extended">
					    <figure class="itemRoom__img-wrap">
						    <a class="itemRoom__link" href="room_details.html">
							    <img class="cover lazyload" src="assets/images/image_room_01.jpg" alt="room" />
							</a>
							<div class="itemRoom__details">
						        <h4 class="title title--h4">Comfort Room</h4>
							    <div class="itemRoom__price">$119<span>night</span></div>
						    </div>
						</figure>
						
						<div class="itemRoom__details-extended">
						    <div class="item-extended"><i class="icon-map-pin"></i>Adler</div>
							<div class="item-extended mr-4"><i class="icon-maximize"></i>168 sq.ft.</div>
							<div class="item-extended"><i class="icon-bed"></i>2 Bedrooms</div>
						</div>
					</div>
				</div>
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