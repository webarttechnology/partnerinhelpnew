<?php get_header();
$we_serve_image = get_field('we_serve_image');
$we_serve_heading = get_field('we_serve_heading');
$we_serve_content = get_field('we_serve_content');
$we_serve_button = get_field('we_serve_button');
?>
<section class="banner">
	
	<div class="butterfly-small"></div>
	<div class="butterfly">
		<img src="https://thechosenher.com/wp-content/uploads/2025/04/purple-butterfly.webp" alt="butterfly pic" />
	</div>
	<div class="container">
		<div class="banner-part">
			<div class="row">
				<div class="col-md-6 banner-box">
					<div class="banner-image" data-aos="fade-down" data-aos-duration="1500">
						<?php if( !empty( $we_serve_image ) ): ?>
						<img src="<?php echo esc_url($we_serve_image['url']); ?>" alt="<?php echo esc_attr($we_serve_image['alt']); ?>" />
						<?php endif; ?>
					</div>
					<div class="last-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/image/homedesign2.png" alt="image1" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="banner-text">
						<h1 class="purpleTitle p-0">
							<span class="image-side">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/image/homedesign.png" alt="decorative-img"/>
							</span>
							<?php echo $we_serve_heading; ?>
						</h1>
						<h2 class="mission text-dark"><?php echo $we_serve_content; ?></h2>
						<div class="home-button">
							<?php 
							if( $we_serve_button ): 
							$serve_link_url = $we_serve_button['url'];
							$serve_link_title = $we_serve_button['title'];
							$serve_link_target = $we_serve_button['target'] ? $we_serve_button['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $serve_link_url ); ?>" target="<?php echo esc_attr( $serve_link_target ); ?>" class="btn-color"><?php echo esc_html( $serve_link_title ); ?> <span class="arrow-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/rightarrowblk.png" alt="arrow-icon-img" /></span>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="home-box-wrp-img2">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/image/wave1.png" alt="image2" />
	</div>
</section>
<?php
$our_mission_image = get_field('our_mission_image');
$our_mission_heading = get_field('our_mission_heading');
$our_mission_content = get_field('our_mission_content');
$our_mission_button = get_field('our_mission_button');
?>
<!-- about -->
<section class="about">
	<div class="container">
		<div class="banner-part">
			<div class="row">
				<div class="col-md-5">
					<div class="banner-text">
						<h4 class="text-white">
							<span class="image-side"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/design2.png" alt="decorative-image"/></span>
							<?php echo $our_mission_heading; ?>
						</h4>
						<h2 class="mission"><?php echo $our_mission_content; ?></h2>
						<div class="home-button">
							<?php 
							if( $our_mission_button ): 
							$mission_link_url = $our_mission_button['url'];
							$mission_link_title = $our_mission_button['title'];
							$mission_link_target = $our_mission_button['target'] ? $our_mission_button['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $mission_link_url ); ?>" target="<?php echo esc_attr( $mission_link_target ); ?>" class="btn-color"><?php echo esc_html( $mission_link_title ); ?> <span class="arrow-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/rightarrow.png" alt="arrow-icon-img" /></span>
							</a>
							<?php endif; ?>
						</div>

					</div>
				</div>
				<div class="col-md-7">
					<div class="banner-img-box">
						<div class="about-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/pinkbubble.png" alt="about-side-img" />
						</div>
						<div class="about-img2">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/greybubble.png" alt="about-side-img" />
						</div>
						<div class="banner-image" data-aos="fade-left" data-aos-duration="1500">
							<?php if( !empty( $our_mission_image ) ): ?>
							<img src="<?php echo esc_url($our_mission_image['url']); ?>" alt="<?php echo esc_attr($our_mission_image['alt']); ?>" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$services_offer_heading = get_field('services_offer_heading');
$services_offer_content = get_field('services_offer_content');
$services_offer_button = get_field('services_offer_button');
$services_offer_image = get_field('services_offer_image');
?>
<!-- As per demand -->
<section class="service-offer bg-light">

	<div class="butterfly-small"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-none">
				<div class="banner-image" data-aos="fade-down" data-aos-duration="1500">
					<?php if( !empty( $services_offer_image ) ): ?>
					<img src="<?php echo esc_url($services_offer_image['url']); ?>" alt="<?php echo esc_attr($services_offer_image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="last-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/homedesign2.png" alt="image1" />
				</div>
			</div>
			<div class="col-md-12">
				<div class="banner-text">
					<h4 class="purpleTitle banning-head">
						<span class="image-side">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/homedesign.png" alt="decorative-image"/>
						</span>
						<?php echo $services_offer_heading; ?>
					</h4>
					<?php echo $services_offer_content; ?>
					<div class="home-button">
						<?php 
						if( $services_offer_button ): 
						$service_link_url = $services_offer_button['url'];
						$service_link_title = $services_offer_button['title'];
						?>
						<a href="<?php echo esc_url( $service_link_url ); ?>" class="btn-color"><?php echo esc_html( $service_link_title ); ?> <span class="arrow-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/rightarrowblk.png" alt="arrow-icon-img" /></span>
						</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="butterfly-small secondButter"></div>
</section>
<?php
$donation_section_heading = get_field('donation_section_heading');
$donation_loop = get_field('donation_loop');
?>
<section class="about-box">
	<div class="home-box-wrp-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/image/pinkwave.png" alt="image2">
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="banner-text text-center">
					<h4 class="heading" data-aos="fade-up" data-aos-duration="1500">
						<span class="image-side">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/design2.png" alt="decorative-image"/>
						</span>
						<!-- About Us -->
					</h4>
					<h2 class="heading"><?php echo $donation_section_heading; ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			if (have_rows('donation_loop')) :
			$index = 0;
			while (have_rows('donation_loop')) : the_row();
			$image = get_sub_field('image');
			$content = get_sub_field('content');
			$button_text = get_sub_field('button_text');

			// Apply class to odd-numbered rows
			$show_class = ($index % 2 !== 0) ? 'oddClass' : '';
			?>
			<div class="col-md-12 <?php echo esc_attr($show_class); ?>" data-aos="fade-up" data-aos-duration="1000">
				<div class="about-box-wrp row">
					<div class="box-img col-md-6">
						<img src="<?php echo esc_url($image['url']); ?>" alt="about-box2">
					</div>
					<div class="about-wrp-text col-md-6">
						<h4 class="purpleTitle">
							<?php the_sub_field('heading'); ?>
						</h4>
						<?php echo wp_kses_post($content); ?>
						<div class="home-button d-none">
							<?php
							if ($button_text) :
							$link_url = $button_text['url'];
							$link_title = $button_text['title'];
							?>
							<a href="<?php echo esc_url($link_url); ?>" class="btn-color">
								<?php echo esc_html($link_title); ?>
								<span class="arrow-icon">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/image/rightarrowblk.png" alt="arrow-icon-img" />
								</span>
							</a>
							<?php endif; ?>
						</div>
						<form action="https://www.paypal.com/donate" method="post" target="_top" class="donateBtn">
							<input type="hidden" name="hosted_button_id" value="RJCZP39C5KA9W" />
							<input type="image" class="donate_Button" src="https://thechosenher.com/wp-content/uploads/2025/04/donate-now-button.webp" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
							<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						</form>
					</div>
				</div>
			</div>
			<?php
			$index++; // Move the increment inside the loop
			endwhile;
			endif;
			?>
		</div>
	</div>
</section>

<!-- Partnerships Section -->
<div class="partnership-section">

	<div class="butterfly-small"></div>
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-10">
				<h2 class="partnership-title animate__animated animate__fadeIn animate__delay-4s"><?php echo esc_html( get_field('collaboration_heading', 17) ); ?></h2>
				<p class="partnership-text animate__animated animate__fadeInUp animate__delay-4s">
					<?php echo esc_html( get_field('collaboration_description', 17) ); ?>
				</p>
			</div>
		</div>

		<!-- Partnership Carousel -->
		<?php if (have_rows('partnerships_list', 17)) : ?>
		<div class="owl-carousel owl-theme mt-5">
			<?php while (have_rows('partnerships_list', 17)) : the_row(); 
			$icon_class = get_sub_field('icon_class');
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			?>
			<div class="partnership-card animate__animated animate__fadeInUp">
				<div class="partnership-icon"><i class="<?php echo esc_attr($icon_class); ?>"></i></div>
				<h3><?php echo esc_html($title); ?></h3>
				<p><?php echo esc_html($description); ?></p>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>


		<!-- CTA -->
		<div class="row justify-content-center text-center mt-5">
			<div class="col-lg-9">
				<p class="partnership-text mb-4 animate__animated animate__fadeInUp animate__delay-5s">
					<?php echo (get_field('cta_long_description', 17)); ?>
				</p>
				<a href="<?php echo esc_url(get_field('cta_button_link', 17)); ?>" 
				   class="btn btn-contact animate__animated animate__pulse animate__infinite">
					<?php echo esc_html(get_field('cta_button_text', 17)); ?>
				</a>
			</div>
		</div>
	</div>
</div>

<?php if (have_rows('testimonials')) : ?>
<section class="testimonial community" data-aos="fade-up" data-aos-duration="1500">
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
								<span class="image-side">
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
<?php
$contact_us_bg_image = get_field('contact_us_bg_image');
$contact_form_heading = get_field('contact_form_heading');
?>
<section class="home-form" style="background-image: url('<?php echo $contact_us_bg_image; ?>');">
	<div class="container-fluid">
		<div class="row justify-content-end">
			<div class="col-md-8" data-aos="fade-left" data-aos-duration="1500">
				<div class="form-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/gettogetherbg.png');">
					<h2 class="heading"><?php echo $contact_form_heading; ?></h2>
					<!-- form -->
					<?php echo do_shortcode( '[contact-form-7 id="dbcb5e6" title="Contact Us"]' ); ?>
				</div>

			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>