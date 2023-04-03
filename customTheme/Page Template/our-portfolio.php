<?php
/*
	Template Name: Portfolio
*/
get_header();
?>

<!-- Page Title Start -->
<div class="dts_main_wrap dts_pagetitle_wrap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12 col-12">
                <div class="dts_pagetitle_info" data-aos="fade-up">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>   

<!-- Service Start -->
<div class="dts_main_wrap dts_service_wrap dts_service_page dts_portfolio_wrap dts_portfolio_page">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <?php
                if( have_rows('portfolio') ){
                while ( have_rows('portfolio') ) { the_row();
            ?>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="dts_service_box dts_portfolio_box portfolio-wrapper" data-aos="fade-right">
                    <div class="portfolio-image">
                        <img src="<?php the_sub_field('portfolio_image'); ?>" alt="Icon">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <a href="<?php the_sub_field('website_url'); ?>" target="_blank" class="view_btn">View Details</a>
                        </div>
                    </div>
                    </h4>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>