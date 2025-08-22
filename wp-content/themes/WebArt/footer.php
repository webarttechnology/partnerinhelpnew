<?php
$footer_content = get_field( 'footer_content', 'option');
$menu_one_heading = get_field( 'menu_one_heading', 'option');
$newsletter_heading = get_field( 'newsletter_heading', 'option');
$newsletter_content = get_field( 'newsletter_content', 'option');
$address_heading = get_field( 'address_heading', 'option');
$copyright_text = get_field( 'copyright_text', 'option');
?>
<footer class="footer-part" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/footer.png');">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="footer-logo">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
								<?php 
$image = get_field('site_logo_image','options');
if( !empty($image) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" 
         alt="<?php echo esc_attr($image['alt']); ?>" 
         class="img-fluid" />
<?php endif; ?>

							</a>
					</div>
					<?php if ( $footer_content ) : ?>
					<p><?php echo $footer_content; ?></p>
					<?php endif; ?>
					<div class="footer-icon">
						<a href="https://www.instagram.com/" target="_blank"><i class="fa-classic fa-brands fa-instagram" aria-hidden="true"></i></a>
						 <a href="https://www.linkedin.com/" target="_blank"><i class="fa-classic fa-brands fa-linkedin" aria-hidden="true"></i></a>
						                        
						</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="menu">
					<?php
					$first_menu_locations = get_nav_menu_locations(); 
					$first_menu_object = wp_get_nav_menu_object($first_menu_locations['main_menu']);
					$first_menu_name = $first_menu_object->name;
					?>                    
					<article><?php echo $menu_one_heading; ?></article>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main_menu',
						'container' => '',
						'items_wrap' => '<ul>%3$s</ul>',
					));
					?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="menu">
					<article><?php echo $newsletter_heading; ?></article>
					<p><?php echo $newsletter_content; ?></p>
					<div class="footer-form">
						<?php echo do_shortcode( '[contact-form-7 id="ea0f9e3" title="Newsletter"]' ); ?>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="menu">
					<article><?php echo $address_heading; ?></article>
					<ul class="address">
						<?php
						if( have_rows('address_contact', 'option' ) ):
						while ( have_rows('address_contact', 'option' ) ) : the_row();

						$phone_email_address = get_sub_field('phone_email_address');
						$custom_icon = get_sub_field('custom_icon');
						$contact_icon = get_sub_field('contact_icon');

						if( $phone_email_address ): 
						$contact_url = $phone_email_address['url'];
						$contact_title = $phone_email_address['title'];
						?>
						<li>
							<a href="<?php echo $contact_url; ?>">
								<span>
									<?php if($custom_icon): 
									echo $custom_icon;
									else:
									echo $contact_icon;
									endif;
									?>

								</span><?php echo $contact_title; ?>
							</a>
						</li>
						<?php
						endif;
						endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom-footer text-center">
			<p> © <span id="year"> </span> <a href="<?php echo home_url(); ?>">Partner in help</a>. <?php echo $copyright_text; ?>.</p>
		</div>
	</div>
</footer>
<!-- js -->
<script>
	var date = new Date();
	var year = date.getFullYear();
	document.getElementById("year").innerHTML = year;
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/60b352a9e9.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		jQuery('.stellarnav').stellarNav({
			breakpoint: 850,
			position: 'right',
		});
		jQuery('.stellarnav div.menu').contents().unwrap();
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		dots: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 5000,
		autoplay: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 1,
				nav: true
			},
			1000: {
				items: 1,
				nav: true
			}
		}
	});
</script>

<script>
	var swiper = new Swiper(".mySwiper", {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
    const popupClosed = sessionStorage.getItem('newsletterPopupClosed');  // Use a unique key for the newsletter modal
    // Check if the popup hasn't been closed before
    if (!popupClosed) {
        var myModal = new bootstrap.Modal(document.getElementById('mynewsLetterModal'));
        myModal.show();
    }
    // Handle the closing of the newsletter modal
    const modalCloseButton = document.querySelector('#mynewsLetterModal .btn-close');
    if (modalCloseButton) {
        modalCloseButton.addEventListener('click', function() {
            sessionStorage.setItem('newsletterPopupClosed', 'true');  // Mark the newsletter popup as closed
        });
    }
});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/counterup/counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/validation.js"></script>
<?php wp_footer(); ?>
</body>
</html>