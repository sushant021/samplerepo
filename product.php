<?php 
	
	$product_type = $_GET['type'];
	$product=$_GET['prd'];


?>

<?php
	include 'header.php';
?>

<section class="product-content">

	<?php

		switch ($product_type) {
			case 'mixtures':
				include 'product-contents/mixtures.php';
				break;
			
			case 'furandana':
				include 'product-contents/furandana.php';
				break;

			case 'snacks':
				include 'product-contents/snacks.php';
				break;

			case 'bhujia':
				include 'product-contents/bhujia.php';
				break;

			case 'tea-time-masti':
				include 'product-contents/tea-time-masti.php';
				break;

			default:
				include 'product-contents/default.php';
				break;
		}

	?>

</section>

<?php
	include 'footer.php';
?>


