<?php
/*
Template Name: Donation
*/
get_header(); ?>
<!-- Donors Section -->
<?php /*<section class="donor-section">
	<div class="butterfly">
		<img src="https://thechosenher.com/wp-content/uploads/2025/04/purple-butterfly.webp" alt="butterfly pic" />
	</div>
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<!--                 <h1 class="donor-title mb-4 animate__animated animate__fadeIn">Donors Page</h1> -->
				<h1 class="donor-title mb-4 animate__animated animate__fadeIn animate__delay-1s"><?php echo esc_html( get_field('join_us_heading') ); ?></h1>
				<p class="donor-text mb-4 animate__animated animate__fadeInUp animate__delay-2s">
					<?php echo esc_html( get_field('join_us_paragraph_1') ); ?>
				</p>
				<p class="donor-text mb-5 animate__animated animate__fadeInUp animate__delay-3s">

					<?php echo ( get_field('join_us_paragraph_2') ); ?>
				</p>
				<!-- Donate Button with Hover Effect -->
				<!-- 				
<a href="< ?php echo esc_url( get_field('donation_link') ); ?>" 
class="btn btn-contact text-white animate__animated animate__pulse animate__infinite">
< ?php echo esc_html( get_field('join_us_button_text') ); ?>
</a> -->
				<form action="https://www.paypal.com/donate" method="post" target="_top" class="donateBtn">
					<input type="hidden" name="hosted_button_id" value="RJCZP39C5KA9W" />
					<input type="image" class="donate_Button" src="https://thechosenher.com/wp-content/uploads/2025/04/donate-now-button.webp" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				</form>
			</div>
		</div>
	</div>

	<!-- butterfly effect	 -->

	<div class="canvas">
		<div class="bf bf-1">
			<div class="wing-left">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
			<div class="wing-right">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
		</div>
		<div class="bf bf-2">
			<div class="wing-left">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
			<div class="wing-right">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
		</div>
		<div class="bf bf-3">
			<div class="wing-left">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
			<div class="wing-right">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
		</div>
		<div class="bf bf-4">
			<div class="wing-left">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
			<div class="wing-right">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
		</div>
		<div class="bf bf-5">
			<div class="wing-left">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
			<div class="wing-right">
				<svg width="100%" height="100%" viewBox="0 0 17 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
					<g transform="matrix(0.0156264,0,0,0.0156264,-5.01358,-5.8732)">
						<path d="M1440.74,1614.9C1440.74,1494.13 1440.61,1185.89 1440.61,1065.11C1359.94,917.774 1154.27,576.526 933.987,480.781C758.042,404.081 442.781,320.927 347.826,423.951C309.909,465.096 311.95,525.578 353.949,603.894C495.736,868.494 562.977,1033.61 559.433,1109.67C559.631,1165.3 582.03,1218.62 621.625,1257.7C672.094,1308.02 737.686,1340.44 808.312,1349.98C720.107,1405.47 666.305,1502.53 665.987,1606.74C667.922,1738.19 698.611,1867.63 755.892,1985.96C802.959,2114.05 921.66,2202.78 1057.84,2211.67L1059.66,2211.67C1210.93,2193.6 1319.79,2057.62 1304.35,1906.04C1304.35,1701.95 1387.79,1632.12 1440.74,1614.9Z" style="fill:black;fill-rule:nonzero;" />
					</g>
				</svg>
			</div>
		</div>
	</div>

</section> */?>


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



<section class="donateBanner aboutNew" style="background:url(https://dwstaging.link/cms/partner-for-help/wp-content/uploads/2025/08/donate2.jpg) no-repeat center center; background-size:cover; ">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<h1>Join Us in Making a Difference</h1>
				<p>TheChosenHer Inc is committed to transforming the lives of young girls & women through emotional healing, mental health support, and purposeful living as a Leader. </p>
				<a href="https://dwstaging.link/cms/partner-for-help/donation/" class="btn btn-contact animate__animated animate__pulse animate__infinite">Donate Today</a>
			</div>
		</div>
	</div>

</section>

<section class="fourth bg-light donets">
    <div class="container">
        <div class="row align-items-center">
			<div class="col-md-6"><img src="https://dwstaging.link/cms/partner-for-help/wp-content/uploads/2025/08/donate1.jpg" alt="image" class="w-100"></div>
			<div class="col-md-6">
				<h2 class="text-dark">Where Most Needed</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptas quaerat neque harum! Magni quaerat non id aliquid at. Itaque eius reiciendis aliquam numquam quibusdam quaerat totam nulla, doloremque exercitationem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nobis odit accusantium rerum? Sed eveniet porro autem eius eum harum, quo voluptatum magnam, dolore sit optio? Dolorem consequatur tempore totam?</p>
				<div class="d-flex donateInputs relative mt-5">
					<span class="currency"><i class="fa fa-usd" aria-hidden="true"></i>
</span>
					<input type="text" name="" id="" class="form-control" value="50">
					<button type="Submit" class="btn-color contactBtn">Donate Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="fourth bg-light donets">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
			<div class="col-md-6"><img src="https://dwstaging.link/cms/partner-for-help/wp-content/uploads/2025/08/donate1.jpg" alt="image" class="w-100"></div>
			<div class="col-md-6">
				<h2 class="text-dark">Disaster Relief</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptas quaerat neque harum! Magni quaerat non id aliquid at. Itaque eius reiciendis aliquam numquam quibusdam quaerat totam nulla, doloremque exercitationem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nobis odit accusantium rerum? Sed eveniet porro autem eius eum harum, quo voluptatum magnam, dolore sit optio? Dolorem consequatur tempore totam?</p>
				<div class="d-flex donateInputs relative mt5">
					<span class="currency"><i class="fa fa-usd" aria-hidden="true"></i>
</span>
					<input type="text" name="" id="" class="form-control" value="50">
					<button type="Submit" class="btn-color contactBtn">Donate Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="fourth bg-light donets">
    <div class="container">
        <div class="row align-items-center">
			<div class="col-md-6"><img src="https://dwstaging.link/cms/partner-for-help/wp-content/uploads/2025/08/donate3.jpg" alt="image" class="w-100"></div>
			<div class="col-md-6">
				<h2 class="text-dark">Highly Vulnerable Children</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptas quaerat neque harum! Magni quaerat non id aliquid at. Itaque eius reiciendis aliquam numquam quibusdam quaerat totam nulla, doloremque exercitationem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nobis odit accusantium rerum? Sed eveniet porro autem eius eum harum, quo voluptatum magnam, dolore sit optio? Dolorem consequatur tempore totam?</p>
				<div class="d-flex donateInputs relative mt5">
					<span class="currency"><i class="fa fa-usd" aria-hidden="true"></i>
</span>
					<input type="text" name="" id="" class="form-control" value="50">
					<button type="Submit" class="btn-color contactBtn">Donate Now</button>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>