<?php
/*
Template Name: Donate
*/
get_header(); ?>

<section class="about-box">
    <div class="home-box-wrp-img">
        <img src="https://dwstaging.link/cms/partner-for-help/wp-content/themes/WebArt/assets/image/pinkwave.png" alt="image2">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init" data-aos="fade-up" data-aos-duration="1000">
                <div class="about-box-wrp row justify-content-between align-items-center">
                    <div class="col-md-5">
                        <div class="about-wrp-text donateBox text-start ">
                        <?php the_field('form_left_content'); ?>    
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="donateForm">
                            <h4>Give a tax-deductible donation today</h4>
                            <p>Your gift today will ensure unsponsored children continue to be faithfully supported by our local church partners while they wait for a sponsor.</p>

                            <form action="">
                                <div class="donation-number">
                                    <button type="button" class="amount-option bg-orange-200 py-2 px-4 " data-amount="220">$220 <span><small>1 child for 4 months</small></span></button>
                                    <button type="button" class="amount-option py-2 px-4  bg-orange-400 is-active" data-amount="440">$440 <span><small>2 children for 4 months</small></span></button>
                                    <button type="button" class="amount-option bg-orange-200 py-2 px-4 " data-amount="2000">$2000 <span><small>10 children for 4 months</small></span></button>
                                    <button type="button" class="amount-option bg-orange-200 py-2 px-4 " data-amount="5500">$5500 <span><small>25 children for 4 months</small></span></button>
                                    <button type="button" class="amount-option bg-orange-200 py-2 px-4 text-center justify-content-center" data-amount="50">$ Choose your own amount</button>
                                    <button type="submit" class="py-2 px-4 btn-color">Donate </button>
                                </div>
                                
                            </form>
                            <p>Thank you for investing in a brighter future for every child.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>