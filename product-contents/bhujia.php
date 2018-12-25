<?php
	
	
	$element_id=$_GET['prd'];

	echo '<script>';
    echo 'var elementId = ' . json_encode($element_id) . ';';
    echo '</script>';

?>

<section class="container bhujia-content p-5">

		<div class="row">
			
			<div class="col-sm-6">
				
				<img src="assets/img/mix.jpg" class="img-fluid">

			</div>

			<div class="col-sm-6 ">
				
				<div class="row"><!--overall product type description -->
					
					<div class="col-sm-12">


						<h1> Bhujia </h1>
				
						<hr width="15%">

						<p class="text-justify">Spicy and delicious, Rijal’s bhujia is your favorite individual tea-time snack and a go-to pick for your salty hunger craving any time of the day.</p>

						
					</div>

				</div>

				<div class="row"> <!-- Single product description section -->

					<div class="col-sm-12 product" id="rijals-pasand-bhujia">
						
						<h2>Rijal's Pasand Bhujia</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-bhujia.png" class="img-fluid" width="80%">

						<p class="text-justify">Rijal’s Pasand Bhujia exhibits the delicious savory taste to please your taste buds and serves as a versatile snack perfect for your tea-time.</p>

					</div>

					<div class="col-sm-12 product" id="navarang-aloo-bhujia">
						
						<h2>Navarang Aloo Bhujia</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-bhujia.png" class="img-fluid" width="80%">

						<p class="text-justify">A scrumptious blend of potatoes, spices and pulses, Rijal’s Navarang Aloo Bhujia is famous for its crunchiness and signature mint flavor.</p>

					</div>

					<div class="col-sm-12 product" id="navarang-badam-bhujia">
						
						<h2>Navarang Badam Bhujia</h2>

						<hr width="15%">

						<img src="assets/img/products/navarang-badam-bhujia-mixture.png" class="img-fluid" width="80%">

						<p class="text-justify">With its spicy tone of roasted peanuts and other namkeens, Rijal’s delicious Navarang Badam Bhujia is a perfect companion for your parties or just for your stand-alone evening tea.</p>

					</div>

					<div class="col-sm-12 product" id="rijals-bhujia">
						
						<h2>Rijal's Bhujia</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-bhujia.png" class="img-fluid" width="80%">

						<p class="text-justify">Made from Tepary bean and gram flour, Rijal’s Bhujia is a delightful treat with a spicy and salty flavour that everyone loves to munch on.</p>

					</div>

					
				</div> <!--product description section ends -->

			</div>

		</div> <!--top row ends here -->

		<hr width="100%" style="background-color: #fafafa;">

		<h3>Rijal's Bhujia Range</h3>
		
		<hr width="10%">

		<div class="row text-center"> 
			
			<div class="col-sm-12">
				
				<div id="bhujia-carousel" class="carousel slide">
				
				<div class="carousel-inner">

					<div class="carousel-item active"> <!--first three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#rijals-pasand-bhujia" onclick="showContent('rijals-pasand-bhujia')">
								
								<img src="assets/img/products/rijals-bhujia.png" width="80%">
								<h3>Rijal's Pasand Bhujia</h3>

							</a>

							<a class="col-sm-4" href="#navarang-aloo-bhujia" onclick="showContent('navarang-aloo-bhujia')">
								
								<img src="assets/img/products/rijals-bhujia.png" width="80%">
								<h3>Navarang Aloo Bhujia</h3>

							</a>

							<a class="col-sm-4" href="#navarang-badam-bhujia" onclick="showContent('navarang-badam-bhujia')">

								<img src="assets/img/products/navarang-badam-bhujia-mixture.png" width="80%">
								<h3>Navarang Badam Bhujia</h3>
								
							</a>

						</div>
						
					</div>

					<div class="carousel-item"> <!--second three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#rijals-bhujia" onclick="showContent('rijals-bhujia')">
								
								<img src="assets/img/products/rijals-bhujia.png" width="80%">
								<h3>Rijal's Bhujia</h3>

							</a>

							
						</div>
						
					</div>
					
				</div> <!--carousel inner content ends -->

				<!--carousel control buttons -->

				<a class="carousel-control-prev" href="#bhujia-carousel" role="button" data-slide="prev">

   					<span class="fas fa-caret-left" aria-hidden="true" style="color: #fd424a;"></span>

    				<span class="sr-only">Previous</span>

  				</a>

  				<a class="carousel-control-next" href="#bhujia-carousel" role="button" data-slide="next" style="color: #fd424a;">

   					 <span class="fas fa-caret-right" aria-hidden="true" style="color: #fd424a;"></span>

   					 <span class="sr-only">Next</span>

  				</a>

			</div><!-- carousel ends -->

			</div>

		</div> <!--second row ends -->

		<script src="assets/js/product_content.js"></script>

</section>


