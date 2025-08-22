<?php get_header(); 
$category_name = '';
if (is_category()) {
	$category = get_queried_object();
	$category_name = $category->name;
}
?>
<!-- Banner Section -->
<section class="page-banner">
	<div class="image-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/asset/images/background/image-7.jpg);"></div>
	<div class="shape-1"></div>
	<div class="shape-2"></div>
	<div class="banner-inner">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<h1><?php echo esc_html($category_name); ?></h1>
				<div class="page-nav">
					<?php custom_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Banner Section -->
<section class="news-section">
	<div class="auto-container">
		<div class="sec-title centered">
			<h2>Latest news &amp; articles<span class="dot">.</span></h2>
		</div>
		<div class="row clearfix">
			<!--News Block-->
			<div class="row">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 10,
					'paged'          => $paged,
					'cat' => $category->term_id,
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
				?>
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="image-box">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
								<?php endif; ?>
							</a>
						</div>
						<div class="lower-box">
							<div class="post-meta">
								<ul class="clearfix">
									<li><span class="far fa-clock"></span> <?php echo get_the_date('d M'); ?></li>
									<li><span class="far fa-user-circle"></span> <?php the_author(); ?></li>
									<li><span class="far fa-comments"></span> <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></li>
								</ul>
							</div>
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<div class="text"><?php echo wp_trim_words( get_the_content(), 10 ); ?></div>
							<div class="link-box">
								<a class="theme-btn" href="<?php the_permalink(); ?>">
									<span class="flaticon-next-1"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php
				endwhile;
				else :
				echo '<p>No posts found.</p>';
				endif;
				?>
			</div>
			<!-- Pagination -->
			<div class="row">
				<div class="pagination">
					<ul class="pagi-nav">
						<?php
						$pagination_args = array(
							'total'        => $query->max_num_pages,
							'current'      => $paged,
							'prev_text'    => '&#129048;',
							'next_text'    => '&#129050;',
							'type'         => 'array',
						);
						$pagination_links = paginate_links($pagination_args);
						if (!empty($pagination_links)) :
						foreach ($pagination_links as $link) : ?>
						<li class="<?php echo strpos($link, 'current') !== false ? 'visit' : ''; ?>">
							<?php echo $link; ?>
						</li>
						<?php endforeach;
						endif;
						?>
					</ul>
				</div>
			</div>
			<?php
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>