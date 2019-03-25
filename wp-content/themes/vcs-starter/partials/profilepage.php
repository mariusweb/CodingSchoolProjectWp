<section class="transparent section1">
	<div class="container profile-container owl-carousel owl-theme">
		<?php 
		if(have_rows('pp_profile_repeater')):
			while(have_rows('pp_profile_repeater')):
				the_row();
				$link = get_sub_field('read_more_button');
				$image = get_sub_field('profile_image');
				?>
				<div class="slide">
					<div class="profile">
						<div class="profile-name">
							<h1><?php the_sub_field('profile_name'); ?></h1>
						</div>
						<div class="profile-discription">
							<?php the_sub_field('profile_description'); ?>
						</div>
						<div class="read-more-button">
							<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
						</div>
					</div>
					<div class="profile-img">
						<img alt="Profile photo" src="<?php echo $image['sizes']['profile'] ?>">
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "ImageObject",
		  "contentUrl": "assets/photos/profile-photo.jpg",
		  "name": "Man"
		}
	</script>
</section>