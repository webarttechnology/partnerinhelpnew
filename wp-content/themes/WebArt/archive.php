<?php get_header(); ?>
<!-- Banner Section -->
<section class="page-banner">
	<div class="image-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/asset/images/background/image-7.jpg);"></div>
	<div class="shape-1"></div>
	<div class="shape-2"></div>
	<div class="banner-inner">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<h1><?php echo wp_title('');?></h1>
				<div class="page-nav">
					<?php custom_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Banner Section -->
<section class="service-nine">
	<div class="auto-container">
		<div class="row">
			<?php 
			$args = array(
				'post_type' => 'services',
				'orderby'        => 'date',
				'order' => 'DESC',
				'posts_per_page' => -1,
			);
			$service_query = new WP_Query($args);
			if ($service_query->have_posts()) : 
			while ($service_query->have_posts()) : $service_query->the_post(); 
			$service_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
			$service_title = get_the_title();
			$service_link = get_permalink();
			?>
			<div class="col-md-6 col-lg-4">
				<div class="service-nine__card">
					<a href="<?php echo $service_link; ?>">
						<div class="service-nine__card__inner">
							<div class="service-nine__image">
								<img src="<?php echo $service_image; ?>" alt="img" />
							</div>
							<div class="service-nine__content">
								<h3 class="service-nine__title">
									<?php echo $service_title; ?>
								</h3>
								<p class="service-nine__text"><?php echo wp_trim_words( get_the_content(), 10 ); ?></p>
								<a href="<?php echo $service_link; ?>">
									<span class="service-nine__link">
										<i class="fa fa-angle-right"></i>
									</span>
								</a>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php endwhile; 
			wp_reset_postdata(); 
			endif; 
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>