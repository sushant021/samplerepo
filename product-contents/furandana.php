<?php
	
	
	$element_id=$_GET['prd'];

	echo '<script>';
    echo 'var elementId = ' . json_encode($element_id) . ';';
    echo '</script>';

?>


<section class="container furandana-content p-5">

		<div class="row">
			
			<div class="col-sm-6">
				
				<img src="assets/img/mix.jpg" class="img-fluid">

			</div>

			<div class="col-sm-6 ">
				
				<div class="row"><!-- overall product type description -->
					
					<div class="col-sm-12">


						<h1> Furandana </h1>
				
						<hr width="15%">

						<p class="text-justify">With very few calories and a savory texture, Rijal’s Furandana is all you need for a healthy yet delicious tea-time snack. </p>

						
					</div>

				</div>

				<div class="row"> <!-- Single product description section -->

					<div class="col-sm-12 product" id="rijals-furandana">
						
						<h2>Rijal's Furandana</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-furandana.png" class="img-fluid" width="80%">

						<p class="text-justify">Gorge on the delicious Furandana from Rijal anytime of the day for a healthy and light snack that serves your hunger right.</p>

					</div>

					<div class="col-sm-12 product" id="rangeela-furandana">
						
						<h2>Rangeela Furandana</h2>

						<hr width="15%">

						<img src="assets/img/products/rangeela-furandana.png" class="img-fluid"  width="80%">

						<p class="text-justify">Rangeela Furandana from Rijal, with its low calories and spicy flavor, is your favorite pick for a delightful snack-time experience even when you are on a diet.</p>

					</div>

					<div class="col-sm-12 product" id="navarang-furandana">
						
						<h2>Navarang Furandana</h2>

						<hr width="15%">

						<img src="assets/img/products/navarang-furandana.png" class="img-fluid" width="80%">

						<p class="text-justify">A healthy take on snacks, Rijal’s Navarang Furandana is deliciously made with fried puffed beaten rice with an addition of spices to serve as your perfect savory choice every day.</p>

					</div>

			
				</div> <!--product description section ends -->

			</div>

		</div> <!--top row ends here -->

		<hr width="100%" style="background-color: #fafafa;">

		<h3>Rijal's Furandana Range</h3>
		<hr width="10%">

		<div class="row text-center"> 
			
			<div class="col-sm-12">
				
				<div id="furandana-carousel" class="carousel slide">
				
				<div class="carousel-inner">

					<div class="carousel-item active"> <!--first three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#rijals-furandana" onclick="showContent('rijals-furandana')">
								
								<img src="assets/img/products/rijals-furandana.png" width="80%">
								<h3>Rijal's Furandana</h3>

							</a>

							<a class="col-sm-4" href="#rangeela-furandana" onclick="showContent('rangeela-furandana')">
								
								<img src="assets/img/products/rangeela-furandana.png" width="80%">
								<h3>Rangeela Furandana</h3>

							</a>

							<a class="col-sm-4" href="#navarang-furandana" onclick="showContent('navarang-furandana')">

								<img src="assets/img/products/navarang-furandana.png" width="80%">
								<h3>Navarang Furandana</h3>
								
							</a>

						</div>
						
					</div>

								
				</div> <!--carousel inner content ends -->

				<!--carousel control buttons -->

				<a class="carousel-control-prev" href="#furandana-carousel" role="button" data-slide="prev">

   					<span class="fas fa-caret-left" aria-hidden="true" style="color: #fd424a;"></span>

    				<span class="sr-only">Previous</span>

  				</a>

  				<a class="carousel-control-next" href="#furandana-carousel" role="button" data-slide="next" style="color: #fd424a;">

   					 <span class="fas fa-caret-right" aria-hidden="true" style="color: #fd424a;"></span>

   					 <span class="sr-only">Next</span>

  				</a>

			</div><!-- carousel ends -->

			</div>

		</div> <!--second row ends -->

		<script src="assets/js/product_content.js"></script>

</section>


