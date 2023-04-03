<?php
/*
	Template Name: Services
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
<div class="dts_main_wrap dts_service_wrap dts_service_page">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <?php
                if( have_rows('our_services') ){
                while ( have_rows('our_services') ) { the_row();
            ?>
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="dts_service_box" data-aos="fade-right">
                    <img src="<?php the_sub_field('service_image'); ?>" alt="Icon">
                    <h4><a href="<?php the_sub_field('service_link'); ?>"><?php the_sub_field('service_heading'); ?></a></h4>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>