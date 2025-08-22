<?php get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$author = get_the_author();
$date = get_the_date('d M');
$categories = get_the_category();
$categories_links = array_map(function($cat) {
	return '<a href="'.get_category_link($cat->term_id).'"><i class="fa fa-list-alt" aria-hidden="true"></i>'.$cat->name.'</a>';
}, $categories);
$categories_links = implode(' ', $categories_links);
$tags = get_the_tags();
$tag_list = [];
if ($tags) {
	foreach ($tags as $tag) {
		$tag_list[] = '<a href="' . get_tag_link($tag->term_id) . '"><i class="fa-solid fa-tags"></i>' . $tag->name . '</a>';
	}
}
$tag_links = implode(' ', $tag_list);
?>
<section class="blogDetail service-offer bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div class="post-img">
                    <?php echo get_the_post_thumbnail(get_the_ID (), $size = 'new-size',array('class' => 'img-fluid') ); ?>
                </div>
				<h1><?php the_title(); ?></h1>
				<ul class="blogInfo mt-4 mb-4 d-flex">
					<li><a href="javascript:void(0);"><i class="fa-solid fa-user"></i><?php echo $author; ?></a></li>
					<li><a href="javascript:void(0);"><i class="fa-solid fa-clock"></i><?php echo $date; ?></a></li>
				</ul>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>