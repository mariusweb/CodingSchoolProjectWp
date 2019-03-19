<section class="section2">
	<div class="container services-container">
		<?php 
		if(have_rows('sp_services_repeater')):
			while(have_rows('sp_services_repeater')):
				the_row();
				?>
				<div class="service">
					<div class="service-width">
						<div class="icon-service">
							<?php the_sub_field('icon'); ?>
						</div>
						<h3><?php the_sub_field('title'); ?></h3>
						<?php the_sub_field('description'); ?>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
</section>