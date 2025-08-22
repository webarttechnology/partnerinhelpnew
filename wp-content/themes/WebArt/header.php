
<!--
 __        __   _                _     _____         _                 _                   
 \ \      / /__| |__   __ _ _ __| |_  |_   _|__  ___| |__  _ __   ___ | | ___   __ _ _   _ 
  \ \ /\ / / _ \ '_ \ / _` | '__| __|   | |/ _ \/ __| '_ \| '_ \ / _ \| |/ _ \ / _` | | | |
   \ V  V /  __/ |_) | (_| | |  | |_    | |  __/ (__| | | | | | | (_) | | (_) | (_| | |_| |
    \_/\_/ \___|_.__/ \__,_|_|   \__|   |_|\___|\___|_| |_|_| |_|\___/|_|\___/ \__, |\__, |
                                                                               |___/ |___/  
-->

<?php
$site_title = get_bloginfo( 'name' );
$site_tagline = get_bloginfo( 'description' );
$custom_logo = get_theme_mod( 'custom_logo' );
$custom_logo_id = attachment_url_to_postid($custom_logo);
$custom_logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title>
			<?php
			if (is_front_page()) :
			bloginfo('name'); echo ' | '; bloginfo('description');
			elseif (is_home()) :
			bloginfo('name'); echo ' | Blog';
			elseif (is_single() || is_page()) :
			single_post_title(); echo ' | '; bloginfo('name');
			elseif (is_category()) :
			single_cat_title(); echo ' | '; bloginfo('name');
			elseif (is_tag()) :
			single_tag_title(); echo ' | '; bloginfo('name');
			elseif (is_author()) :
			echo 'Posts by '; the_author(); echo ' | '; bloginfo('name');
			elseif (is_archive()) :
			wp_title(''); echo ' | '; bloginfo('name');
			elseif (is_search()) :
			echo 'Search results for: '; echo get_search_query(); echo ' | '; bloginfo('name');
			elseif (is_404()) :
			echo 'Page not found | '; bloginfo('name');
			else :
			wp_title(''); echo ' | '; bloginfo('name');
			endif;
			?>  
		</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		 <meta name="description" content="We envision a world where every woman, regardless of her past traumas, steps into her full power, PURPOSE and potential.">
    <meta name="keywords" content="We believe that every woman has a unique calling and the strength to overcome any obstacle.">
    <meta name="author" content="Chanol Caton">
    <meta property="og:title" content="A Call to Spiritual Growth and Healing for Women">
    <meta property="og:description" content="We believe that every woman has a unique calling and the strength to overcome any obstacle.">
<!--     <meta property="og:image" content="image-url.jpg"> -->
    <meta property="og:url" content="page-url">
    <meta name="robots" content="index, follow">
		
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
			  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- bootstrap-icon -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
		<!-- font-awsome -->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
		<!-- aos -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- font-awsome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- css -->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
		<!-- responsive -->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<!-- stellarnav -->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/stellarnav.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<style>
			.owl-carousel button.owl-dot {
				padding: 6px !important;
				background-color: #8e44ad;
			}
		</style>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<!-- header -->
		<header class="header-part">
			<div class="container">
				<div class="header-menu">
					<div class="header-logo">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<?php if ( $custom_logo ) : ?>
								<img src="<?php echo esc_url( $custom_logo ); ?>" alt="<?php echo $custom_logo_alt; ?>" class="img-fluid" />
								<?php else : ?>
								<?php echo $site_title; ?>
								<?php endif; ?>
							</a>
						</div>
					</div>
					<div class="header-menu p-0">
						<div class="stellarnav">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'main_menu',
								'container' => '',
								'items_wrap' => '<ul>%3$s</ul>',
							));
							?>
						</div>
						<div class="button d-none">
							<a href="https://thechosenher.com/contact-us/" class="btn">Contact</a>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Newsletter Modal start  -->
		<!-- Modal -->
		<div class="modal fade" id="mynewsLetterModal" tabindex="-1" aria-labelledby="myNewsletterModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content ihbox-style-17_bg pt-5 pb-5">
					<div class="modal-header">
						<h2 class="modal-title text-white" id="myNewsletterModalLabel">Subscribe To Our Newsletter</h2>
						<p>
						<?php
						$newsletter_content = get_field( 'newsletter_content', 'option');
						echo $newsletter_content;
						?>
						</p>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<?php echo do_shortcode( '[contact-form-7 id="ea0f9e3" title="Newsletter"]' ); ?>
					</div>
				</div>
			</div>
		</div>