<?php
/*
Template Name: Community
*/
get_header(); ?>

<div class="innar_banner d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class=" title-wrapper">
					<h1 class="title"><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="fourth bg-light" id="community">
	<div class="butterfly">
		<img src="https://thechosenher.com/wp-content/uploads/2025/04/purple-butterfly.webp" alt="butterfly pic" />
	</div>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="fourth-box">
					<h1 class="text-dark text-center"><?php echo ( get_field('become_a_member_heading') ); ?></h1>
					<?php the_field('become_a_member_content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>



<?php if (have_rows('spiritual_growth_sections')) : ?>
<section class="fourth multiple_row">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-dark text-center">
					<?php echo esc_html( get_field('spiritual_growth_sections_heading') ); ?></h2>
			</div>
		</div>
		<?php 
		$count = 0; // Initialize counter to track odd/even rows
		while (have_rows('spiritual_growth_sections')) : the_row(); 
		$image = get_sub_field('image');
		$heading = get_sub_field('heading');
		$description = get_sub_field('description');
		$is_even = ($count % 2 == 0); // Check if the row is even
		?>
		<div class="row align-items-center">
			<?php if ($is_even) : ?>
			<div class="col-md-6">
				<div class="spritiualGrowth">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="text-dark"><?php echo esc_html($heading); ?></h2>
				<p><?php echo esc_html($description); ?></p>
			</div>
			<?php else : ?>
			<div class="col-md-6">
				<h2 class="text-dark"><?php echo esc_html($heading); ?></h2>
				<p><?php echo esc_html($description); ?></p>
			</div>
			<div class="col-md-6">
				<div class="spritiualGrowth">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php 
		$count++; // Increment counter
		endwhile; 
		?>
	</div>
</section>
<?php endif; ?>

<?php if (have_rows('community_goals')) : ?>
<section class="fourth bg-light reference">
	<div class="butterfly-large"></div>

<div class="butterfly-small"></div>
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="fourth-box">
					<h2 class="text-dark"><?php the_field('community_goals_header_text'); // Editable closing text ?></h2>
					<ul>
						<?php 
						$count = 1; // Initialize counter
						while (have_rows('community_goals')) : the_row(); 
						$goal_title = get_sub_field('goal_title');
						$goal_description = get_sub_field('goal_description');
						?>
						<li><span class="numbers"><?php echo $count; ?>.</span> <span><?php echo esc_html($goal_title); ?>: <?php echo esc_html($goal_description); ?></span></li>
						<?php 
						$count++; // Increment counter
						endwhile; ?>
					</ul>

				</div>
			</div>
			<div class="col-md-10">
				<p class="text-center">
					<?php the_field('community_goals_footer_text'); // Editable closing text ?>
				</p>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>



<?php if (have_rows('testimonials')) : ?>
<section class="testimonial community" data-aos="fade-up" data-aos-duration="1500">

	<div class="testimonialButter">
		<!-- butterfly effect	 -->

		<div class="canvas">
<!-- 			<div class="bf bf-1">
				<div class="wing-left">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
				<div class="wing-right">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
			</div>
			<div class="bf bf-2">
				<div class="wing-left">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
				<div class="wing-right">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
			</div> -->
			<div class="bf bf-3">
				<div class="wing-left">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
				<div class="wing-right">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
			</div>
<!-- 			<div class="bf bf-4">
				<div class="wing-left">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
				<div class="wing-right">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
			</div> -->
			<div class="bf bf-5">
				<div class="wing-left">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
				<div class="wing-right">
					<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
							<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
						</g>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h2 class="text-dark text-center pb-4">
					<?php echo esc_html( get_field('testimonials_heading_text') ); ?>
				</h2>
			</div>
			<div class="col-md-10">
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<?php while (have_rows('testimonials')) : the_row(); 
						$heading = get_sub_field('heading');
						$content = get_sub_field('content');
						$name = get_sub_field('name');
						$location = get_sub_field('location');
						$image = get_sub_field('image');
						?>
						<div class="swiper-slide">
							<h4 class="heading">
								<?php if ($image) : ?>
								<span class="image-side d-none">
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
								</span>
								<?php endif; ?>
								<?php echo esc_html($heading); ?>
							</h4>
							<p>
								<?php echo esc_html($content); ?>
							</p>
							<div class="name">
								<h3><?php echo esc_html($name); ?></h3>
								<h5><?php echo esc_html($location); ?></h5>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>


<?php get_footer(); ?>