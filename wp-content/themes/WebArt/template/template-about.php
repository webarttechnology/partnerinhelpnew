<?php
/*
Template Name: About Us
*/
get_header();
$banner_content = get_field('banner_content');

$welcome_image = get_field('welcome_image');
$welcome_heading = get_field('welcome_heading');
$welcome_content = get_field('welcome_content');

$trauma_section__image = get_field('trauma_section__image');
$trauma_section_heading = get_field('trauma_section_heading');
$trauma_section_content = get_field('trauma_section_content');

$healing_section_heading = get_field('healing_section_heading');
$healing_section_content = get_field('healing_section_content');
$healing_section_image = get_field('healing_section_image');

$embracing_journey_heading = get_field('embracing_journey_heading');
$embracing_journey_content = get_field('embracing_journey_content');
$journey_step = get_field('journey_step');
$embracing_journey_content_one = get_field('embracing_journey_content_one');

$purpose_heading = get_field('purpose_heading');
$purpose_content = get_field('purpose_content');
$purpose_image = get_field('purpose_image');
?>
<section class="about-top">

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
		<div class="row">

			<div class="col-12">
				<div class="fourth-box pb-0 pt-0">
					<h1 class="text-dark"><?php echo $welcome_heading; ?></h1>
					<?php echo $welcome_content; ?>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="about-main bg-dark text-white pt-5 pb-5" id="aboutMain">
	<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="contact-text pb-0">
					<h2 class="text-dark"><?php echo $trauma_section_heading; ?></h2>
					<?php echo $trauma_section_content; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-top">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-10">
				<?php the_field('romans_content'); ?>
			</div>
		</div>
	</div>
</section>

<section class="fourth bg-light "  id="aboutMain">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="fourth-box pb-0">
					<h2 class="text-dark"><?php echo $healing_section_heading; ?></h2>
					<?php echo $healing_section_content; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-top" id="aboutMain">
	<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="contact-text">
					<h2 class="purpleTitle"><?php echo esc_html( get_field('purpose_heading') ); ?></h2>
					<p><?php the_field('purpose_content'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>