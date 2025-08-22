<?php
/*
Template Name: Blog
*/
get_header();
?>
<!-- blog section -->
<section class="blogPage service-offer bg-light">
	<div class="container">
		<div class="row">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'paged' => $paged,
			);
			$blog_query = new WP_Query($args);
			if ($blog_query->have_posts()) :
			while ($blog_query->have_posts()) : $blog_query->the_post();
			?>
			<div class="col-lg-4 col-md-6 col-sm-6 mb-4">
				<a href="<?php the_permalink(); ?>" class="blogBox">
					<?php if (has_post_thumbnail()) : ?>
					<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
					<?php endif; ?>
					<ul class="d-flex justify-content-between align-items-center">
						<li><span><?php echo get_the_date('d M Y'); ?></span></li>
					<li><p class="mb-0">By <?php the_author(); ?></p></li>
					</ul>
					<h5><?php the_title(); ?></h5>
					
					<p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
				</a>
			</div>
			<?php
			endwhile;
			else :
			echo '<p>No posts found.</p>';
			endif;
			wp_reset_postdata();
			?>
			<!-- Pagination -->
			<div class="col-md-12">
				<ul class="pagination justify-content-center">
					<?php
					$pagination_args = array(
						'total'        => $blog_query->max_num_pages,
						'current'      => $paged,
						'prev_text'    => 'Previous',
						'next_text'    => 'Next',
						'type'         => 'array',
					);
					$pagination_links = paginate_links($pagination_args);
					if (!empty($pagination_links)) :
					foreach ($pagination_links as $link) :
					$is_disabled = strpos($link, 'dots') !== false ? 'disabled' : '';
					$is_current = strpos($link, 'current') !== false ? 'active' : '';
					?>
					<li class="page-item <?php echo esc_attr($is_disabled . ' ' . $is_current); ?>">
						<?php echo $link; ?>
					</li>
					<?php
					endforeach;
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>