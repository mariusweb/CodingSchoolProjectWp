<section class="section4">
	<div class="container last-container">
		<div class="flex-sections from-the-blog">
			<h6><?php the_field('tbm_blog_title'); ?></h6>
			<div class="post-title"><?php the_field('tbm_post_title'); ?></div>
			<?php 
			$link = get_field('tbm_blog_link'); 
			?>
			<p class="post-autor"><span class="admin-color"><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></span><?php the_field('tbm_link_domain_name'); ?></p>
			<p class="post-date"><?php the_field('tbm_blog_date'); ?></p>
			<div class="post"><?php the_field('tbm_post'); ?></div>
			<?php 
			$link = get_field('tbm_read_more_button');
			 ?>
			<a class="read-more" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
		</div>
		<div class="flex-sections quick-links">
			<h6><?php the_field('lm_link_title'); ?></h6>
			<nav>
				<ul>
					<?php 
						if(have_rows('lm_link_repeater')):
							while(have_rows('lm_link_repeater')):
								the_row();
								$link = get_sub_field('link');
								$target = 'target="_blank"';
								?>
									<li>
										<a href="<?php echo $link['url']; ?>" <?php echo $target; ?>><abbr title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></abbr></a>
									</li>
								<?php
							endwhile;
						endif;
					?>
					<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "https://www.google.lt/", 
					  "name": "Google",
					  "description": "Google search"
					    }
					</script>
					<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "https://www.w3schools.com", 
					  "name": "W3schools",
					  "description": "Learning with W3schools"
					    }
					</script>
					<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "https://www.linkedin.com/in/serys/", 
					  "name": "Linkedin",
					  "description": "Marius Linkedin",
					    }
					</script>
					<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "https://github.com/mariusweb", 
					  "name": "Github",
					  "description": "Marius Github",
					    }
					</script>
					<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "https://stackoverflow.com/questions", 
					  "name": "Stack Owerflow",
					  "description": "Web development questions, Stack Owerflow",
					    }
					</script>
					<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "https://www.facebook.com/marius.serys", 
					  "name": "Facebook",
					  "description": "Marius Facebook",
					    }
					</script>
				</ul>
			</nav>
		</div>
		<div class="flex-sections laitest-tweets">
			<h6><?php the_field('cm_comment_title'); ?></h6>
			<div class="tweets">
				<?php the_field('cm_comment'); ?>
				<script type="application/ld+json">
				{ 
				  "@context": "http://schema.org", 
				  "@type": "WebSite", 
				  "url": "https://twitter.com/wordpressdotcom?ref_src=twsrc%5Etfw", 
				  "name": "Twitter",
				  "description": "WordPress Twitter",
				  "publisher": "WordPress",
				    }
				</script>
			</div>
		</div>
		<div class="flex-sections contact-us">
			<h6><?php the_field('cm_contact_title'); ?></h6>
			<?php echo do_shortcode(get_field('cm_form_schortecode')); ?>
		</div>
	</div>
</section>