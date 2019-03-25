	<section class="section3">
		<div class="container gallery-container">
			<div class="latest-work-line">
				<div class="latest-work">
					<h4><?php the_field('gp_gallery_title'); ?></h4>
				</div>
			</div>
			<div class="main-gallery">
				<?php
					if(have_rows('gp_gallery_repeater')):
						while(have_rows('gp_gallery_repeater')):
							the_row();
							$image = get_sub_field('image');
							?>
								<div class="image">
									<abbr title="Map-reading">
										<a data-fancybox="gallery" href="<?php echo $image['sizes']['latest-work'] ?>">
											<img class="image-grey" alt="Gallery photo" src="<?php echo $image['sizes']['latest-work'] ?>">
										</a>
										<div class="image-description">
											<h5><?php the_sub_field('image_description'); ?></h5>
										</div>
									</abbr>
								</div>
							<?php
						endwhile;
					endif;
				?>
				<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "ImageObject",
					  "author": "Dominika Różycka - Glińska",
					  "contentUrl": "https://stocksnap.io/photo/GROZSLEHSY",
					  "description": "Picture was was taken by Studio 7042.",
					  "name": "Map Reading"
					}
				</script>
				<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "ImageObject",
					  "contentUrl": "assets/photos/hummer.jpg",
					  "name": "Hummer"
					}
				</script>
				<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "ImageObject",
					  "contentUrl": "assets/photos/bilding.jpg",
					  "name": "Building"
					}
				</script>
				<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "ImageObject",
					  "author": "Olu Eletu",
					  "contentUrl": "https://stocksnap.io/photo/Q4PMYILN33",
					  "description": "Picture was was taken by Olu Eletu.",
					  "name": "Playing Music"
					}
				</script>
				<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "ImageObject",
					  "author": "Jason Abdilla",
					  "contentUrl": "https://unsplash.com/photos/jZWmw6007EY",
					  "datePublished": "2018-12-22",
					  "description": "Picture was was taken by Jason Abdilla.",
					  "name": "Lumberjack"
					}
				</script>
				<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "ImageObject",
					  "author": "Chuanchai Pundej",
					  "contentUrl": "https://unsplash.com/photos/0imZsFe41zM",
					  "datePublished": "2018-04-03",
					  "description": "Picture was was taken by Chuanchai Pundej.",
					  "name": "Lumberjack"
					}
				</script>
			</div>
		</div>
	</section>
</div>