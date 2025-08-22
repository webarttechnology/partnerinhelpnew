<?php
/*
Template Name: About New
*/
get_header();
$banner_content = get_field('banner_content',11);
?>
<section class="about-top aboutNew" style="background:url(#) no-repeat center center; background-size:cover; ">
	<!-- butterfly animation	 -->
	<div class="butterfly-large"></div>

	<div class="butterfly-small"></div>


	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-10">
				<?php echo $banner_content; ?>
			</div>
		</div>
	</div>

</section>


<section class="fourth bg-light" id="aboutMain">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h1 class="mb-4 mb-4"><?php echo esc_html( get_field('about_heading') ); ?></h1>
                <p><?php echo esc_html( get_field('about_description') ); ?></p>
                <iframe width="100%" height="450" class="mt-4 mb-4" src="<?php echo esc_html( get_field('about_video') ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section class="about-top parallax" 
    style="background:url('<?php echo esc_url( get_field('compassion_background_image') ); ?>') no-repeat center center; background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2><?php echo esc_html( get_field('compassion_heading') ); ?></h2> 
                <p><?php echo esc_html( get_field('compassion_content') ); ?></p>       
            </div>
        </div>
    </div>
</section>


<section class="fourth bg-light tabmain" id="aboutMain">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php if( have_rows('about_tabs') ): ?>
                    <ul class="nav justify-content-center">
                        <?php 
                        $i = 0;
                        while( have_rows('about_tabs') ): the_row(); 
                            $title = get_sub_field('tab_title');
                            $icon  = get_sub_field('tab_icon');
                        ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" 
                                   data-bs-toggle="pill" 
                                   href="#tab-<?php echo $i; ?>">
                                    <?php if($icon): ?>
                                        <img src="<?php echo esc_url($icon['url']); ?>" 
                                             alt="<?php echo esc_attr($title); ?>" 
                                             class="img-fluid">
                                    <?php endif; ?>
                                    <h6><?php echo esc_html($title); ?></h6>
                                </a>
                            </li>
                        <?php $i++; endwhile; ?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php 
                        $j = 0;
                        while( have_rows('about_tabs') ): the_row(); 
                            $content_left  = get_sub_field('tab_content_left');
                            $content_right = get_sub_field('tab_content_right');
                        ?>
                            <div class="tab-pane <?php echo $j == 0 ? 'active' : 'fade'; ?>" 
                                 id="tab-<?php echo $j; ?>">
                                <div class="row justify-content-between">
                                    <div class="col-12 mt-3">
                                        <?php echo wp_kses_post($content_left); ?>
                                    </div>
                                    <?php /* <div class="col-md-5">
                                        <?php echo wp_kses_post($content_right); ?>
                                    </div> */?>
                                </div>
                            </div>
                        <?php $j++; endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


<section class="about-top parallax" 
    style="background:url('<?php echo esc_url( get_field('issues_backgroung_image') ); ?>') no-repeat center center; background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2><?php echo esc_html( get_field('issues_heading') ); ?></h2> 
                <p><?php echo esc_html( get_field('issues_content') ); ?></p>       
            </div>
        </div>
    </div>
</section>


<section class="fourth bg-light tabmain" id="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php if( have_rows('about_last_tab_') ): ?>
                    <ul class="nav justify-content-center">
                        <?php 
                        $i = 0;
                        while( have_rows('about_last_tab_') ): the_row(); 
                            $title = get_sub_field('tab_title');
                            $icon  = get_sub_field('tab_icon');
                        ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" 
                                   data-bs-toggle="pill" 
                                   href="#taba-<?php echo $i; ?>">
                                    <?php if($icon): ?>
                                        <img src="<?php echo esc_url($icon['url']); ?>" 
                                             alt="<?php echo esc_attr($title); ?>" 
                                             class="img-fluid">
                                    <?php endif; ?>
                                    <h6><?php echo esc_html($title); ?></h6>
                                </a>
                            </li>
                        <?php $i++; endwhile; ?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php 
                        $j = 0;
                        while( have_rows('about_last_tab_') ): the_row(); 
                            $content_left  = get_sub_field('tab_content_left');
                            $content_right = get_sub_field('tab_content_right');
                        ?>
                            <div class="tab-pane <?php echo $j == 0 ? 'active' : 'fade'; ?>" 
                                 id="taba-<?php echo $j; ?>">
                                <div class="row justify-content-between">
                                    <div class="col-12 mt-3">
                                        <?php echo wp_kses_post($content_left); ?>
                                    </div>
                                    <?php /* <div class="col-md-5">
                                        <?php echo wp_kses_post($content_right); ?>
                                    </div> */?>
                                </div>
                            </div>
                        <?php $j++; endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


<section class="fourth bg-light faith" id="">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php the_field('statement_content'); ?>
        </div>
    </div>
 </div>
</section>

<section class="fourth bg-light faith">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h2><?php echo esc_html( get_field('faqs_heading') ); ?></h2> 

            <?php if( have_rows('about_faqs') ): ?>
                <div class="accordion" id="accordionExample">
                    <?php 
                    $i = 0;
                    while( have_rows('about_faqs') ): the_row(); 
                        $question = get_sub_field('faq_question');
                        $answer   = get_sub_field('faq_answer');
                        $collapse_id = 'collapse'.$i;
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                <button class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?>" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#<?php echo $collapse_id; ?>" 
                                        aria-expanded="<?php echo $i == 0 ? 'true' : 'false'; ?>" 
                                        aria-controls="<?php echo $collapse_id; ?>">
                                    <?php echo esc_html($question); ?>
                                </button>
                            </h2>
                            <div id="<?php echo $collapse_id; ?>" 
                                 class="accordion-collapse collapse <?php echo $i == 0 ? 'show' : ''; ?>" 
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo wp_kses_post($answer); ?>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
 </div>
</section>

<section class="fourth bg-light faith" id="">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h2 class="text-center"><?php echo esc_html( get_field('our_teams_heading') ); ?></h2> 
            
            <div class="row">
    <?php if( have_rows('team_members') ): ?>
        <?php while( have_rows('team_members') ): the_row(); 
            $image       = get_sub_field('member_image');
            $name        = get_sub_field('member_name');
            $designation = get_sub_field('member_designation');
            $bio         = get_sub_field('member_bio');
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                <div class="card-wrapper flip-down">
                    <div class="card">
                        <div class="front">
                            <center>
                                <?php if($image): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         alt="<?php echo esc_attr($name); ?>" 
                                         class="img-fluid">
                                <?php endif; ?>
                                <?php if($name): ?>
                                    <h5 class="mt-3 mb-3"><?php echo esc_html($name); ?></h5>
                                <?php endif; ?>
                                <?php if($designation): ?>
                                    <h6><?php echo esc_html($designation); ?></h6>
                                <?php endif; ?>
                            </center>
                        </div>
                        <div class="back flex-column">
                            <?php if($name): ?>
                                <h5 class="mb-3"><?php echo esc_html($name); ?></h5>
                            <?php endif; ?>
                            <?php if($bio): ?>
                                <p><?php echo wp_kses_post($bio); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

        </div>
    </div>
 </div>
</section>

<?php get_footer(); ?>