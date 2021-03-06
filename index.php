<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fontis Water</title>
        <meta name="description" content="A test ebpage built for Up&amp;Up">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="build/css/main.min.css">

        <?php include_once("svg-defs.svg"); ?>
    </head>

    <body>

        <div id="page">
        	
        	<section id="banner">

        		<section id="allNav">

	        		<div id="topBar" class="hide-for-xlarge-down">
						<div class="row">
							<div class="xlarge-15 columns">
								<ul class="inline-list inline-list--separated inline-list--right inline-list--no-mb right normal">
									<li><a href="#">Login</a></li>
									<li><a href="#">Request A Quote</a></li>
									<li class="bold"><a href="tel:6784941981">678-494-1981</a></li>
								</ul>
							</div>
						</div>
			        </div>

			        <div class="row">
	        			<div class="xlarge-15 columns">
			        		<header id="primaryHeader">
			        			<div class="logo left">
			        				<svg class="icon-fontis" width="100" height="150"><use xlink:href="#fontis-logo"></use></svg>
			        			</div>
			        			<nav id="primaryNav" class="hide-for-xlarge-down">
			        				<ul id="primaryNav__list" class="inline-list">
			        					<li><a href="#">Services</a></li>
			        					<li><a href="#">About</a></li>
			        					<li><a href="#">Shop</a></li>
			        					<li><a href="#">Contact</a></li>
			        				</ul>
			        				<div id="primaryNav__logo">
			        					<svg class="icon-georgia-grown" width="50" height="50"><use xlink:href="#georgia-grown"></use></svg>
			        				</div>
			        			</nav>
			        			<button class="menuButton right hide-for-xlarge-up right">
			        				<span class="menuButton__icon"></span>
			        			</button>
			        		</header>
			        	</div>
	        		</div>

	        	</section>


	        	<section id="heroText">
	        		<div class="row">
	        			<div class="xlarge-10 tablet-8 columns">
	        				<h1 class="heroText__headline">A precious commodity. <br class="show-for-small-only"/> Delivered with care.</h1>
	        				<p class="heroText__copy hide-for-tablet-down">Our purified water starts with only 100% natural spring water from the mountains of North Georgia. It is then filtered and processed by reverse osmosis.</p>
	        				<a href="#" class="button button--arrow button--white">Shop Our Products<svg class="icon-arrow" width="10" height="15"><use xlink:href="#arrow"></use></svg></a>
	        			</div>
        			</div>
        		</section> 


        		<div id="bannerImgWrap" class="forceAspect">
        			<div class="forceAspect__dummy"></div>
        			<div class="forceAspect__img-wrap">
						<img src="img/banner.jpg" alt="sunrise over the mountains" id="bannerImg"/>
					</div>
				</div>

				
				<div class="overlay"></div> <!-- Overlay to increase legibility/ contrast -->

        	</section> <!-- end banner -->
				


			<section id="callout" class="hide-for-tablet-down">
        		<div class="row">
        			<div class="xlarge-9 tablet-7 columns">
        				<h2 class="callout__headline">We deliver more than water. We deliver a promise. </h2>
        				<p class="callout__copy medium-text hide-for-xlarge-down">To some water is water. And coffee is just something you drink in the morning to wake up. But our customers in and around Atlanta demand more. </p>
        				<a href="#" class="button">See The Fontis Difference</a> 
        			</div>
        		</div>
        	</section>
			

			<div id="heroContainer">
				<div class="row">
					<div class="large-16 columns">
						<img id="hero" src="img/watercooler.png" alt="A fontis water cooler">
					</div>
				</div>
			</div>


        	<section id="products">
				<div class="row row--expand row--collapse">
					<div class="xlarge-5 tablet-5 columns columns--skinny">
						<div class="productCallout">
							<div class="productCallout__imageContainer">
								<div class="forceAspect">
									<div class="forceAspect__dummy"></div>
									<div class="forceAspect__img-wrap forceAspect__img-wrap--snap">
										<img src="img/bottled.jpg" alt="fontis bottled water">	
									</div>
								</div>
							</div>
							<div class="productCallout__overlay">
								<a href="#" class="productCallout__button button button--white button--arrow">Shop Now<svg class="icon-arrow" width="10" height="15"><use xlink:href="#arrow"></use></svg></a>
							</div>
							<h3 class="productCallout__title">
								Bottled water
							</h3>
							<div class="productCallout__gradient"></div>
						</div>
					</div>

					<div class="xlarge-5 tablet-5 columns columns--skinny">
						<div class="productCallout">
							<div class="productCallout__imageContainer">
								<div class="forceAspect">
									<div class="forceAspect__dummy"></div>
									<div class="forceAspect__img-wrap forceAspect__img-wrap--snap">
										<img src="img/coffee.jpg" alt="a hot cup of coffee">	
									</div>
								</div>
							</div>
							<div class="productCallout__overlay">
								<a href="#" class="productCallout__button button button--white button--arrow">Shop Now<svg class="icon-arrow" width="10" height="15"><use xlink:href="#arrow"></use></svg></a>
							</div>
							<h3 class="productCallout__title">
								Coffee and Tea
							</h3>
							<div class="productCallout__gradient"></div>
						</div>
					</div>
					
					<div class="xlarge-5 tablet-5 columns columns--skinny">
						<div class="productCallout">
							<div class="productCallout__imageContainer">
								<div class="forceAspect">
									<div class="forceAspect__dummy"></div>
									<div class="forceAspect__img-wrap forceAspect__img-wrap--snap">
										<img src="img/filtered.jpg" alt="a water filtration machine">	
									</div>
								</div>
							</div>
							<div class="productCallout__overlay">
								<a href="#" class="productCallout__button button button--white button--arrow">Shop Now<svg class="icon-arrow" width="10" height="15"><use xlink:href="#arrow"></use></svg></a>
							</div>
							<h3 class="productCallout__title">
								Water Filtration
							</h3>
							<div class="productCallout__gradient"></div>
						</div>
					</div>
        		</div>
        	</section>


        	<section id="secondary-callout">
        		<div class="row">
        			<div class="xlarge-7 tablet-9 small-12 columns columns--centered">
        				<h2>Experience the Fontis Difference.</h2>
        				<p>Shop today and have the fresh, delicious taste of Fontis delivered to your home or office.</p>
        				<a href="#" class="button button--grey">Shop Now</a>
        			</div>
        		</div>
        	</section>


        	<footer id="primaryFooter">
        		<div class="row logoContainer">
					<div class="xlarge-3 columns">
						<div class="logo">
							<svg class="icon-fontis" width="100" height="150"><use xlink:href="#fontis-logo"></use></svg>
						</div>
					</div>
        		</div>

        		<div class="row">
        			<div class="xlarge-3 columns">
        				<p class="normal white-text">
        					<span class="semibold show-for-xlarge-up">Fontis Water</span>
        					<span class="show-for-xlarge-down">Fontis Water</span><br/>
        					3929 Canton Road<span class="show-for-tablet-only">,</span> <br class="show-for-tablet-down"/>
        					Marietta, GA 30066
        				</p>

        				<p class="phone"><a class="large-blue-text" href="tel:6784941981">678-494-1981</a></p>
        				<a href="#" class="button button--white button--arrow button--invisible button--nohov hide-for-xlarge-down">Donation Request<svg class="icon-arrow" width="10" height="15"><use xlink:href="#arrow"></use></svg></a>
        			</div>

        			<div class="xlarge-9 columns">
        				<nav id="footerNav">
        					<ul class="no-bullets nested-list row hide-for-tablet-only">
        						<li class="xlarge-5 tablet-3 columns">
        							<a href="#" class="semibold">Products</a>
        							<ul class="nested-list__sub-list no-bullets">
        								<li><a href="#">Bottled Water</a></li>
        								<li><a href="#">Coffe &amp; Tea</a></li>
        								<li><a href="#">Other Beverages</a></li>
        								<li><a href="#">Break Room Supplies</a></li>
        							</ul>
        						</li>
        						<li class="xlarge-5 tablet-3 columns">
        							<a href="" class="semibold">Services</a>
        							<ul class="nested-list__sub-list no-bullets">
        								<li><a href="#">Commercial Delivery</a></li>
        								<li><a href="#">Home Delivery</a></li>
        								<li><a href="#">Private Label</a></li>
        								<li><a href="#">Water Filtration</a></li>
        								<li><a href="#">Break Room Supplies</a></li>
        							</ul>
        						</li>
        						<li class="xlarge-5 tablet-3 columns">
        							<a href class="semibold"="">About</a>
        							<ul class="nested-list__sub-list no-bullets">
        								<li><a href="#">Our Water</a></li>
        								<li><a href="#">Our Staff</a></li>
        								<li><a href="#">Company Events</a></li>
        								<li><a href="#">Partners</a></li>
        								<li><a href="#">Media Resources</a></li>
        								<li><a href="#">Blog</a></li>
        								<li><a href="#">Locations</a></li>
        							</ul>
        						</li>
        					</ul>

        					<ul class="footerNav__list--tablet no-bullets show-for-tablet-only inline-list inline-list--separated inline-list--uniform bold">
								<li><a href="#">Products</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">About</a></li>
        					</ul>
        				</nav>
        			</div>

        			<div id="connectInfo" class="xlarge-3 columns columns--skinny">
        				<p class="white-text semibold last">Stay Connected</p>
        				<form action="">
        					<label for="newsletter_subscribe">Sign-Up for Our Newsletter</label>
        					<div class="buttonField">
        						<input type="text" id="newsletter_subscribe" name="email" placeholder="Enter Your Email">
        						<button type="submit" name="submit">
        							<svg class="icon-plane" width="15" height="15"><use xlink:href="#airplane"></use></svg>
        						</button>
        					</div>
        				</form>

        				<ul class="socialLinks">
        					<li>
        						<a href="">
        							<svg class="icon-facebook" width="45" height="45"><use xlink:href="#facebook"></use></svg>
        						</a>
        					</li>
        					<li>
        						<a href="">
        							<svg class="icon-twitter" width="45" height="45"><use xlink:href="#twitter"></use></svg>
        						</a>
        					</li>
        					<li>
        						<a href="">
        							<svg class="icon-linkedin" width="45" height="45"><use xlink:href="#linkedin"></use></svg>
        						</a>
        					</li>
        				</ul>

        				<a href="#" class="button button--white button--arrow button--invisible button--nohov show-for-xlarge-down">Donation Request<svg class="icon-arrow" width="10" height="15"><use xlink:href="#arrow"></use></svg></a>
        			</div>
        		</div>
        	</footer>

        </div> <!-- end #page -->


        <div id="mobileMenuContainer">
			<nav id="mobileMenu">
				<ul class="stackedList caps">
					<li><a href="#">Products</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="stackedList stackedList--wrapped">
					<li><a href="">Login</a></li>
					<li><a href="">Request a Quote</a></li>
					<li><a href="tel:6784941981" class="semibold">678-494-1981</span></li>
				</ul>
			</nav>
		</div>
		
		<script type="text/javascript" src="build/js/main.min.js"></script>
    </body>
</html>