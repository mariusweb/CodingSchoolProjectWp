<?php 
if(have_posts()):
	while(have_posts()):
	the_post();
	?>
	<!-- HTML blokas -->
	<?php
	endwhile;
endif;
 ?>