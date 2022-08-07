<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	

	<?php echo view('topbar.php'); ?>

    <!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="<?php echo base_url(); ?>/assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">About Us</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--section-->
		<section class="sptb">
			<div class="container">
				<div class="text-justify">
					<h2 class="mb-4">Why Car Use Adda?</h2>
					<!-- <h4 class="leading-Automatic">Majority have suffered alteration in some form, by injected humor</h4> -->
					<p class="leading-Automatic">CarUseDeko.com is India's leading car search venture that helps users buy cars that are right for them. Its website and app carry rich automotive content such as expert reviews, detailed specs and prices, comparisons as well as videos and pictures of all car brands and models available in India. The company has tie-ups with many auto manufacturers, more than 4000 car dealers and numerous financial institutions to facilitate the purchase of vehicles.</p>
					<p class="leading-Automatic">CarUseDeko.com has launched many innovative features to ensure that users get an immersive experience of the car model before visiting a dealer showroom. These include a Feel The Car tool that gives 360-degree interior/exterior views with sounds of the car and explanations of features with videos; search and comparison by make, model, price, features; and live offers and promotions in all cities. The platform also has used car classifieds wherein users can upload their cars for sale, and find used cars for buying from individuals and used car dealers.</p>
					<p class="leading-Automatic mb-0">Besides the above consumer product features, CarDekho.com provides a rich array of tech-enabled tools to OE manufacturers and car dealers. These include apps for dealer sales executives to manage leads, cloud services for tracking sales performance, call tracker solution, digital marketing support, virtual online showroom and outsourced lead management operational process for taking consumers from enquiry to sale.</p>
				</div>
			</div>
		</section>
		<!--/section-->

    <?php echo view('footer.php'); ?>
</body>

</html>