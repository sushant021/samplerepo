<?php 

/*
  the main template file 

  @package - Rijal's Namkeen  

*/

?>

<?php 

	/* site navigation and logo  */

	include 'header.php';

?>

<div id="primary" class="content-area">

	<main id="main" class="main-content">
		
		<div class="main-content-wrapper">

			<?php

				include 'template-parts/homepage-content.php';

			?>
			
		</div> <!-- .main-content-wrapper -->

	</main> <!-- .main-content-->

</div>	<!-- .content-area -->


<?php
	
	/* site footer */
	include 'footer.php';

?>