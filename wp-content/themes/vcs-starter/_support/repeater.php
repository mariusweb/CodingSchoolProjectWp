<?php 
if(have_rows('repeater_pavadinimas')):
	while(have_rows('repeater_pavadinimas')):
		the_row();
		// Repater viduje naudojeme
		// get_sub_field('lauko_pavadinimas'); - grazina
		// the_sub_field('lauko_pavadinimas'); - spauzdina
		?>
		<!-- HTML kodas -->
		<?php
	endwhile;
endif;
?>