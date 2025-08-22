<?php
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="p-v-60 contents">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>