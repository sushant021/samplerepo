
<?php
	
	
	$element_id=$_GET['prd'];

	echo '<script>';
    echo 'var elementId = ' . json_encode($element_id) . ';';
    echo '</script>';

?>


<section class="container tea-time-masti-content p-5">

		<div class="row">
			
			<div class="col-sm-6">
				
				<img src="assets/img/mix.jpg" class="img-fluid">

			</div>

			<div class="col-sm-6 ">
				
				<div class="row">
					
					<div class="col-sm-12">


						<h1> Tea Time Masti </h1>
				
						<hr width="15%">

						<p class="text-justify">Munch on the heavenly tea-time snacks from Rijal’s that certainly gives a twist to your flavour palate and serves as a perfect companion to your a quiet and warm evening.</p>

						
					</div>

				</div>

				<div class="row"> <!-- Single product description section -->

					<div class="col-sm-12 product" id="navarang-crispy-mathari">
						
						<h2>Navarang Crispy Mathari</h2>

						<hr width="15%">

						<img src="assets/img/product.png" class="img-fluid" width="80%">

						<p class="text-justify">Navarang Crispy Mathri from Rijal’s is a snack loved by all. Tangy and deep-fried, these savory cookies made from wheat flour flavored with exotic spices, is a delicious and indulgent snack that gives a twist of taste to your palate.</p>

					</div>

					<div class="col-sm-12 product" id="navarang-crispy-nimki">
						
						<h2>Navarang Crispy Nimki</h2>

						<hr width="15%">

						<img src="assets/img/product.png" class="img-fluid" width="80%">

						<p class="text-justify">Crispy and Salted wheat flour snacks, Rijal’s Navarang Crispy Nimki is all you need whenever you feel like eating something tangy, irresistible yet wholesome.</p>

					</div>

								
				</div> <!--product description section ends -->

			</div>

		</div> <!--top row ends here -->

		<hr width="100%" style="background-color: #fafafa;">

		<h3>Rijal's Tea Time Masti Range</h3>
		<hr width="10%">

		<div class="row text-center"> 
			
			<div class="col-sm-12">
				
				<div id="tea-time-masti-carousel" class="carousel slide">
				
				<div class="carousel-inner">

					<div class="carousel-item active"> <!--first three items -->

						<div class="row">
							
							<a class="col-sm-4" href="#navarang-crispy-mathari" onclick="showContent('navarang-crispy-mathari')">
								
								<img src="assets/img/product3.png"  width="80%">
								<h3>Navarang Crispy Mathari</h3>

							</a>

							<a class="col-sm-4" href="#navarang-crispy-nimki" onclick="showContent('navarang-crispy-nimki')">
								
								<img src="assets/img/product2.png" width="80%">
								<h3>Navarang Crispy Nimki</h3>

							</a>

							
						</div>
						
					</div>

								
				</div> <!--carousel inner content ends -->

				<!--carousel control buttons -->

				<a class="carousel-control-prev" href="#tea-time-masti-carousel" role="button" data-slide="prev">

   					<span class="fas fa-caret-left" aria-hidden="true" style="color: #fd424a;"></span>

    				<span class="sr-only">Previous</span>

  				</a>

  				<a class="carousel-control-next" href="#tea-time-masti-carousel" role="button" data-slide="next" style="color: #fd424a;">

   					 <span class="fas fa-caret-right" aria-hidden="true" style="color: #fd424a;"></span>

   					 <span class="sr-only">Next</span>

  				</a>

			</div><!-- carousel ends -->

			</div>

		</div> <!--second row ends -->

	<script src="assets/js/product_content.js"></script>

</section>


