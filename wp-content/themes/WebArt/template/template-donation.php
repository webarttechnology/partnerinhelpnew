<?php
/*
Template Name: Donation
*/
get_header(); ?>


<!-- Donation Form Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content shadow-lg">
			<div class="modal-header bg-gradient">
				<h5 class="modal-title text-white" id="donationModalLabel">Donation Submission Form</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="donationForm" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
					<input type="hidden" name="action" value="process_donation">
					<div class="mb-3">
						<label for="fullName" class="form-label">Full Name</label>
						<input type="text" class="form-control form-control-lg shadow-sm" id="fullName" name="fullName" 
							   placeholder="Enter your full name" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email Address</label>
						<input type="email" class="form-control form-control-lg shadow-sm" id="email" name="email" 
							   placeholder="Enter your email" required>
					</div>
					<div class="mb-3">
						<label for="donationAmount" class="form-label">Donation Amount ($)</label>
						<input type="number" class="form-control form-control-lg shadow-sm" id="donationAmount" name="donationAmount" 
							   placeholder="Enter amount" min="1" required>
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Message (Optional)</label>
						<textarea class="form-control shadow-sm" id="message" name="message" rows="3" 
								  placeholder="Your message"></textarea>
					</div>
					<button type="submit" class="btn btn-donate text-white w-100 btn-lg">Submit Donation</button>
				</form>
			</div>
		</div>
	</div>
</div> 



<?php 
$bg_image = get_field('background_image');   // Image field
$heading  = get_field('join_us_heading'); // Text field
$content  = get_field('join_us_paragraph_1');            // Textarea or WYSIWYG field
$button   = get_field('donation_link');      // Link field
?>
<?php if( $bg_image || $heading || $content || $button ): ?>
<section class="donateBanner aboutNew" 
    style="background:url('<?php echo esc_url($bg_image['url']); ?>') no-repeat center center; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <?php if( $heading ): ?>
                    <h1><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if( $content ): ?>
                    <p><?php echo esc_html($content); ?></p>
                <?php endif; ?>

                <?php if( $button ): ?>
                    <a href="<?php echo esc_url($button['url']); ?>" 
                       target="<?php echo esc_attr($button['target'] ?: '_self'); ?>" 
                       class="btn btn-contact animate__animated animate__pulse animate__infinite">
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>



<?php if( have_rows('donation_sections') ): ?>
    <?php $index = 0; ?>
    <?php while( have_rows('donation_sections') ): the_row(); 
        $image   = get_sub_field('image');
        $title   = get_sub_field('title');
        $content = get_sub_field('content');
        $amount  = get_sub_field('amount') ?: 50; // fallback to 50 if empty

        // Alternate layout: normal row vs reversed row
        $row_class = ($index % 2 !== 0) ? 'flex-row-reverse' : '';
    ?>
    <section class="fourth bg-light donets">
        <div class="container">
            <div class="row <?php echo esc_attr($row_class); ?> align-items-center">
                <?php if( $image ): ?>
                    <div class="col-md-6">
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>" 
                             class="w-100" />
                    </div>
                <?php endif; ?>
                <div class="col-md-6">
                    <?php if( $title ): ?>
                        <h2 class="text-dark"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if( $content ): ?>
                        <div class="donateContent">
                            <?php echo wp_kses_post($content); ?>
                        </div>
                    <?php endif; ?>

                    <div class="d-flex donateInputs relative mt-5">
                        <span class="currency"><i class="fa fa-usd" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" value="<?php echo esc_attr($amount); ?>">
                        <button type="submit" class="btn-color contactBtn">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $index++; ?>
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>