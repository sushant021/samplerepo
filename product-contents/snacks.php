<?php
	
	
	$element_id=$_GET['prd'];

	echo '<script>';
    echo 'var elementId = ' . json_encode($element_id) . ';';
    echo '</script>';

?>

<section class="container bar-snacks-content p-5">

		<div class="row">
			
			<div class="col-sm-6">
				
				<img src="assets/img/mix.jpg" class="img-fluid">

			</div>

			<div class="col-sm-6 ">
				
				<div class="row">
					
					<div class="col-sm-12">


						<h1> Rijal's Savory Snacks </h1>
				
						<hr width="15%">

						<p class="text-justify">The savory snacks from Rijal satisfies your salty-craving and serve as a perfect snack to munch on at house-parties, get-togethers or at your regular tea-time.</p>

						
					</div>

				</div>

				<div class="row"> <!-- Single product description section -->

					<div class="col-sm-12 product" id="top-10-peanuts">
						
						<h2>Top-10 Peanuts</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-top-10-peanuts.png" class="img-fluid"  width="80%">

						<p class="text-justify">No one can resist the crunchy, spicy and delicious Top-10 peanuts from Rijal’s that serves your salty-cravings anytime of the day.</p>

					</div>

					<div class="col-sm-12 product" id="rijals-nutcrackers">
						
						<h2>Rijal's Nutcrackers</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-nutcrackers.png" class="img-fluid"  width="80%">

						<p class="text-justify">Tasty Nuts is Rijal’s favorite savory snacks loved by everyone, young and old. Delicious with a distinctive spicy flavour, it’s a must have snack at every party or get-together.</p>

					</div>

					<div class="col-sm-12 product" id="rijals-salted-peanuts">
						
						<h2>Rijals Salted Peanuts</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-salted-peanuts.png" class="img-fluid"  width="80%">

						<p class="text-justify">Tasty Nuts is Rijal’s favorite savory snacks loved by everyone, young and old. Delicious with a distinctive spicy flavour, it’s a must have snack at every party or get-together.</p>

					</div>

					<div class="col-sm-12 product" id="rijals-moong-dal">
						
						<h2>Rijal's Moong Dal</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-moong-dal.png" class="img-fluid"  width="80%">

						<p class="text-justify">Delectable and delicious, Rijal’s Moong Dal Fry adds a twist to your flavor palate by giving you the spicy taste of green gram that you would never forget.</p>

					</div>

					<div class="col-sm-12 product" id="navarang-mattar-fry">
						
						<h2>Navarang Mattar Fry</h2>

						<hr width="15%">

						<img src="assets/img/products/navarang-mattar-fry.png" class="img-fluid"  width="80%">

						<p class="text-justify">Spice up your taste buds with the tangy, irresistible and salty Mattar Fry that leaves you with a craving of wanting more and more of it.</p>

					</div>

					<div class="col-sm-12 product" id="crispy-chana">
						
						<h2>Crispy Chana</h2>

						<hr width="15%">

						<img src="assets/img/products/rijals-crispy-chana.png" class="img-fluid"  width="80%">

						<p class="text-justify">Munch on everyone’s favorite snack when the hunger pangs attack. Crispy Chana from Rijal is a tasty blend of roasted, crispy and spicy chickpeas with an added exotic taste of hing, that pleases your savory taste buds like never before.</p>

					</div>

					<div class="col-sm-12 product" id="kabulichana">
						
						<h2>Navarang Kabulichana</h2>

						<hr width="15%">

						<img src="assets/img/products/navarang-kabulichana-fry.png" class="img-fluid"  width="80%">

						<p class="text-justify">The unique taste and flavor of Kabulichana Fry from Rijal’s is perfect to consume as a tea-time snack or as an appetizer for the get-togethers and parties.</p>

					</div>

					<div class="col-sm-12 product" id="navarang-bhatmas">
						
						<h2>Navarang Spicy Bhatmas</h2>

						<hr width="15%">

						<img src="assets/img/products/navarang-bhatmas-fry.png" class="img-fluid"  width="80%">

						<p class="text-justify">With an extra dimension, flavor and texture, enjoy the fried and salty soya bean pulse from Rijal’s for a salty treat to your taste buds.</p>

					</div>


					<div class="col-sm-12 product" id="rijals-poprings">
						
						<h2>Rijals Poprings</h2>

						<hr width="15%">

						<img src="assets/img/products/poprings.png" class="img-fluid"  width="80%">

						<p class="text-justify">A blend of exotic spices is all you need to enhance your taste buds while also being beneficial to your health with its protein element.</p>

					</div>
					
				</div> <!--product description section ends -->

			</div>

		</div> <!--top row ends here -->

		<hr width="100%" style="background-color: #fafafa;">

		<h3>Rijal's Snacks Range</h3>
		<hr width="10%">

		<div class="row text-center"> 
			
			<div class="col-sm-12">
				
				<div id="bar-snacks-carousel" class="carousel slide">
				
				<div class="carousel-inner">

					<div class="carousel-item active"> <!--first three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#top-10-peanuts" onclick="showContent('top-10-peanuts')">
								
								<img src="assets/img/products/rijals-top-10-peanuts.png"  width="80%">
								<h3>Top 10 Peanuts</h3>

							</a>

							<a class="col-sm-4" href="#rijals-nutcrackers" onclick="showContent('rijals-nutcrackers')">
								
								<img src="assets/img/products/rijals-nutcrackers.png"  width="80%">
								<h3>Rijal's Nutcrackers</h3>

							</a>

							<a class="col-sm-4" href="#rijals-salted-peanuts" onclick="showContent('rijals-salted-peanuts')">

								<img src="assets/img/products/rijals-salted-peanuts.png"  width="80%">
								<h3>Rijals Salted Peanuts</h3>
								
							</a>

						</div>
						
					</div>

					<div class="carousel-item"> <!--second three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#rijals-moong-dal" onclick="showContent('rijals-moong-dal')">
								
								<img src="assets/img/products/rijals-moong-dal.png" width="80%">
								<h3>Rijal's Moong Dal</h3>

							</a>

							<a class="col-sm-4" href="#navarang-mattar-fry" onclick="showContent('navarang-mattar-fry')">
								
								<img src="assets/img/products/navarang-mattar-fry.png" width="80%">
								<h3>Navarang Mattar Fry</h3>

							</a>

							<a class="col-sm-4" href="#crispy-chana" onclick="showContent('crispy-chana')">

								<img src="assets/img/products/rijals-crispy-chana.png" width="80%">
								<h3>Crispy Chana</h3>
								
							</a>

						</div>
						
					</div>

						<div class="carousel-item"> <!--third three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#kabulichana" onclick="showContent('kabulichana')">
								
								<img src="assets/img/products/navarang-kabulichana-fry.png" width="80%">
								<h3>Kabulichana</h3>

							</a>

							<a class="col-sm-4" href="#navarang-bhatmas" onclick="showContent('navarang-bhatmas')">
								
								<img src="assets/img/products/navarang-bhatmas-fry.png" width="80%">
								<h3>Navarang Spicy Bhatmas</h3>

							</a>

							<a class="col-sm-4" href="#rijals-poprings" onclick="showContent('rijals-poprings')">

								<img src="assets/img/products/poprings.png" width="80%">
								<h3>Rijals Poprings</h3>
								
							</a>

						</div>
						
					</div>
					
				</div> <!--carousel inner content ends -->

				<!--carousel control buttons -->

				<a class="carousel-control-prev" href="#bar-snacks-carousel" role="button" data-slide="prev">

   					<span class="fas fa-caret-left" aria-hidden="true" style="color: #fd424a;"></span>

    				<span class="sr-only">Previous</span>

  				</a>

  				<a class="carousel-control-next" href="#bar-snacks-carousel" role="button" data-slide="next" style="color: #fd424a;">

   					 <span class="fas fa-caret-right" aria-hidden="true" style="color: #fd424a;"></span>

   					 <span class="sr-only">Next</span>

  				</a>

			</div><!-- carousel ends -->

			</div>

		</div> <!--second row ends -->

		<script src="assets/js/product_content.js"></script>

</section>


