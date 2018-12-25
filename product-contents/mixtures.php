<?php
	
	
	$element_id=$_GET['prd'];

	echo '<script>';
    echo 'var elementId = ' . json_encode($element_id) . ';';
    echo '</script>';

?>

<section class="container mixtures-content p-5">

		<div class="row">
			
			<div class="col-sm-6">
				
				<img src="assets/img/mix.jpg" class="img-fluid">

			</div>

			<div class="col-sm-6 ">
				
				<div class="row"><!-- mixtures overall description -->
					
					<div class="col-sm-12">


						<h1> Rijal's Mixtures </h1>
				
						<hr width="15%">

						<p class="text-justify">Rijal’s mixture is a snack-time delight with its combination of certain savory snacks with an added sprinkle of exotic spices, to appease and satisfy your hunger craving anytime you want.</p>

						
					</div>

				</div>

				<div class="row"> <!-- Single product description section -->

					<div class="col-sm-12 product" id="top-10-dalmoth">
						
						<h2>Top-10 Dalmoth</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-top-10-mixture-dalmoth.png" class="img-fluid" width="80%">

						<p class="text-justify">A delectable combination of Bhujia, deep-fried beaten rice, Pulses, Nimki along with the flavor of spices, Rijal’s Top-10 mixture is your favorite snack-time pick.</p>

					</div>

					<div class="col-sm-12 product" id="rijals-dalmoth">
						
						<h2>Rijal's Dalmoth</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-mixture-dalmoth.png" class="img-fluid" width="80%">

						<p class="text-justify">Crispy, spicy and delicious, the lip-smacking mixture of various savory treats in Rijal’s mixture Dalmoth is your favorite choice for a spicy snack-time experience. </p>

					</div>

					<div class="col-sm-12 product" id="rangeela-dalmoth">
						
						<h2>Rangeela Dalmoth</h2>

						<hr width="15%">
						<!-- no image available -  add image later -->
						<img src="assets/img/products/rangeela-mixture-dalmoth.png" class="img-fluid" width="80%">

						<p class="text-justify">Combination of several spices and namkeens in one, Rangeela Mixture Dalmoth appeases your taste buds like never before.</p>

					</div>

					<div class="col-sm-12 product" id="rijals-cornflakes">
						
						<h2>Rijal's Cornflakes</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-cornflakes-mixture.png" class="img-fluid" width="80%">

						<p class="text-justify">Adding a spicy and savory twist of cornflakes to your life, this mixture by Rijal’s is delicious enough to please your palate while also satisfying your hunger cravings. </p>

					</div>

					<!-- this product doesn't have image -->

					<div class="col-sm-12 product" id="rijals-special-mixture-dalmoth">
						
						<h2>Special Mixture Dalmoth</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-special-mixture-dalmoth.png" class="img-fluid" width="80%">

						<p class="text-justify">Corn Flakes Mixture by Navarang is a tasty and delicious mixed snack comprising corn flakes and various namkeens and savories. This is a very filling and wholesome snack that can satisfy even a big hunger.</p>

					</div>
					

					<div class="col-sm-12 product" id="navarang-dalmoth">
						
						<h2>Navarang Dalmoth</h2>

						<hr width="15%">

						<img src="assets/img/products/navarang-mixture-dalmoth.png" class="img-fluid" width="80%">

						<p class="text-justify">Adding a spicy and savory twist of cornflakes to your life, this mixture by Rijal’s is delicious enough to please your palate while also satisfying your hunger cravings. </p>

					</div>
					
				</div> <!--product description section ends -->

			</div>

		</div> <!--top row ends here -->

		<hr width="100%" style="background-color: #fafafa;">

		<h3>Rijal's Mixtures Range</h3>
		
		<hr width="10%">

		<div class="row text-center"> 
			
			<div class="col-sm-12">
				
				<div id="mixtures-carousel" class="carousel slide">
				
				<div class="carousel-inner">

					<div class="carousel-item active"> <!--first three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#top-10-dalmoth" onclick="showContent('top-10-dalmoth')">
								
								<img src="assets/img/products/rijals-top-10-mixture-dalmoth.png" width="80%">
								<h3>Top 10 Dalmoth</h3>

							</a>

							<a class="col-sm-4" href="#rijals-dalmoth" onclick="showContent('rijals-dalmoth')" width="80%">
								
								<img src="assets/img/products/rijals-mixture-dalmoth.png" width="80%">
								<h3>Rijal's Mixture Dalmoth</h3>

							</a>

							<a class="col-sm-4" href="#rangeela-dalmoth" onclick="showContent('rangeela-dalmoth')" width="80%">

								<img src="assets/img/products/rangeela-mixture-dalmoth.png" width="80%">
								<h3>Rangeela Dalmoth</h3>
								
							</a>

						</div>
						
					</div>

					<div class="carousel-item"> <!--second three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#rijals-cornflakes" onclick="showContent('rijals-cornflakes')">
								
								<img src="assets/img/products/rijals-cornflakes-mixture.png" width="80%">
								<h3>Rijal's Cornflakes</h3>

							</a>

							<a class="col-sm-4" href="#rijals-special-mixture-dalmoth" onclick="showContent('rijals-special-mixture-dalmoth')">
								
								<img src="assets/img/products/rijals-special-mixture-dalmoth.png" width="80%">
								<h3>Special Mixture Dalmoth</h3>

							</a>

							<a class="col-sm-4" href="#navarang-dalmoth" onclick="showContent('navarang-dalmoth')">

								<img src="assets/img/products/navarang-mixture-dalmoth.png" width="80%">
								<h3>Navarang Dalmoth</h3>
								
							</a>

						</div>
						
					</div>
					
				</div> <!--carousel inner content ends -->

				<!--carousel control buttons -->

				<a class="carousel-control-prev" href="#mixtures-carousel" role="button" data-slide="prev">

   					<span class="fas fa-caret-left" aria-hidden="true" style="color: #fd424a;"></span>

    				<span class="sr-only">Previous</span>

  				</a>

  				<a class="carousel-control-next" href="#mixtures-carousel" role="button" data-slide="next" style="color: #fd424a;">

   					 <span class="fas fa-caret-right" aria-hidden="true" style="color: #fd424a;"></span>

   					 <span class="sr-only">Next</span>

  				</a>

			</div><!-- carousel ends -->

			</div>

		</div> <!--second row ends -->

		<script src="assets/js/product_content.js"></script>

</section>


