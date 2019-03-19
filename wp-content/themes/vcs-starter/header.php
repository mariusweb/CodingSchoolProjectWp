<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="green-line"></div>
	<?php 
	$image = get_field('background_image', 'option')
	 ?>
	<div class="background-img" style="background-image: url(<?php echo $image['sizes']['background'] ?>);">
		<!-- <img class="background-paintig" alt="Backgraund image" src="assets/photos/mountain.jpg"> -->
		<header class="transparent">
			<div class="container header-container">
				<div class="header-margin">
					<div class="logo">
						<a href="<?php echo site_url(); ?>">
							<?php 
							if(get_field('logo_type', 'option')): ?>
							<h2><?php the_field('logo_text', 'option'); ?></h2>
							<?php 
							else:
								$image = get_field('logo_image', 'option');
								// dump($image);
								echo '<img src="'.$image['sizes']['logo'].'" alt="'.get_bloginfo('name').'">';
							endif;?>
						</a>
						<?php $link = get_field('psd_templates', 'option'); 
						if(isset($link['target'])){
							$target = 'target="_blank"';
						}else{
							$target = '';
						}
						?>
						<a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
							<?php echo $link['title']; ?>
						</a>
						<!-- the_field('psd_templates', 'option'); -->
					</div>
					<div class="burger-column">
						<a class="burger-menu">
							<!-- <i class="icon-menu-button-of-three-horizontal-lines burger"></i> -->
							<div class="burger"><?php the_field('burger_icon', 'option'); ?></div>
						</a>
						<nav class="menu">
							<?php 
							$args = [
								'menu_class' => 'nav-ul',
								'container' => false,
								'theme_location' => 'primary-navigation',
								'walker' => new custom_navwalker()
							];
							wp_nav_menu($args);
							//li .nav-li
							//a .nav-li-a
							//li .nav-li .has-dropdown
							 ?>
						</nav>
					</div>
				</div>
			</div>
		</header>