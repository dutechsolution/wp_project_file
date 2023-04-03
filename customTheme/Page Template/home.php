<?php
/*
	Template Name: Home Page
*/
get_header();
?>

<!-- Slider Start -->
<div class="dts_main_wrap dts_slider_wrap">
    <div class="owl-carousel owl-theme dts_home_slider">
        <?php
            if( have_rows('banner_content') ){
            while ( have_rows('banner_content') ) { the_row();
        ?>
        <div class="item">
            <img src="<?php the_sub_field('banner_image'); ?>" alt="Images">
            <div class="cover">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="header-content">
                                <h1><?php the_sub_field('banner_image_heading'); ?></h1>
                                <a href="<?php the_sub_field('banner_button_link'); ?>" class="dts_btn"><?php the_sub_field('banner_button_label'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>
</div>
<!-- Banner Bottom Space Start -->
<div class="dts_main_wrap dts_bottomspace_wrap"></div>
<!-- About Start -->
<div class="dts_main_wrap dts_about_wrap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-12">
                <div class="dts_about_text" data-aos="fade-right">
                    <div class="dts_heading_wrap">
                        <h5><?php the_field('about_section_label'); ?></h5>
                        <h2><?php the_field('about_section_heading'); ?></h2>
                    </div>
                    <?php the_field('about_section_description'); ?>
                    <ul>
                        <?php
                            if( have_rows('about_section_service_points') ){
                                $i = 1;
                            while ( have_rows('about_section_service_points') ) { the_row();
                        ?>
                        <li>
                            <?php if($i % 2 == 0) { ?>
                            <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-check-blue.png" alt="Icon">
                            <?php } else { ?>
                            <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-check-green.png" alt="Icon">
                            <?php } ?>
                            <?php the_sub_field('service_point_label'); ?>
                        </li>
                        <?php $i++; } } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="dts_about_img" data-aos="fade-left">
                    <div class="dts_about_imgbox"></div>
                    <img src="<?php the_field('about_section_image'); ?>" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Start -->
<div class="dts_main_wrap dts_service_wrap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <img src="<?php the_field('service_section_image'); ?>" alt="Image" class="dts_serviceback_img">
            <div class="col-12 align-items-center">
                <div class="dts_heading_center_wrap" data-aos="fade-up">
                    <h5><?php the_field('service_section_label'); ?></h5>
                    <h2><?php the_field('service_section_heading'); ?></h2>
                </div>
            </div>
            <?php
                if( have_rows('services') ){
                while ( have_rows('services') ) { the_row();
            ?>
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="dts_service_box" data-aos="fade-right">
                    <img src="<?php the_sub_field('service_icon_image'); ?>" alt="Icon">
                    <h4><a href="<?php the_sub_field('service_link'); ?>"><?php the_sub_field('service_name'); ?></a></h4>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>
<!-- Testimonials Start -->
<div class="dts_main_wrap dts_testimonials_wrap" style="background-image: url('<?php the_field('testimonial_section_image'); ?>');">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 align-items-center">
                <div class="dts_heading_center_wrap" data-aos="fade-up">
                    <h5><?php the_field('testimonial_section_label'); ?></h5>
                    <h2><?php the_field('testimonial_section_heading'); ?></h2>
                </div>
            </div>
            <div class="col-12" data-aos="zoom-in">
                <div class="dts_testimonial_wrap">
                    <div class="owl-carousel owl-theme dts_testimonial_slider">
                        <?php 
                            $query = new WP_Query( array( 
                                'post_type'      => 'testimonial', //Post type name
                                'posts_per_page' => 9 , //Post type number
                                'order'          => 'DESC' ,
                            )); 
                            while ( $query->have_posts() ) : $query->the_post();
                                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
                        ?>
                        <div class="item">
                            <div class="dts_testimonial_text">
                                <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-star-rating.png" alt="Icon" class="dts_starrating_img">
                                <?php the_content(); ?>
                                <div class="dts_testimonial_info">
                                    <div class="dts_testimonial_img">
                                        <img src="<?php echo $thumbnail[0];?>" alt="Image">
                                    </div>
                                    <div class="dts_testimonial_name">
                                        <h4><?php the_title();?></h4>
                                        <span><?php the_field('designation'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Core Values Start -->
<div class="dts_main_wrap dts_corevalues_wrap">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 align-items-center">
                <div class="dts_heading_center_wrap" data-aos="fade-up">
                    <h5><?php the_field('core_values_label'); ?></h5>
                    <h2><?php the_field('core_values_heading'); ?></h2>
                </div>
            </div>
            <?php
                if( have_rows('core_values') ){
                    $i = 1;
                while ( have_rows('core_values') ) { the_row();
            ?>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="dts_corevalues_box border_btm_<?php echo $i; ?>" data-aos="flip-right">
                    <span><img src="<?php the_sub_field('value_image_icon'); ?>" alt="Icon"></span>
                    <h4><?php the_sub_field('value_hading'); ?></h4>
                </div>
            </div>
            <?php $i++; } } ?>
        </div>
    </div>
</div>
<!-- Newsletter Start -->
<div class="dts_main_wrap dts_newsletter_wrap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 align-items-center">
                <div class="dts_newsletter_box" data-aos="zoom-in">
                    <div class="dts_heading_center_wrap" data-aos="fade-up">
                        <h2><?php the_field('newsletter_heading'); ?></h2>
                        <p><?php the_field('newsletter_sub_heading'); ?></p>
                    </div>
                    <form method="post" action="https://dutech.co.in/?na=s">
                        <div class="dts_subscribe">
                            <input type="hidden" name="nlang" value="">
                            <input type="email" name="ne" id="tnp-1" value="" placeholder="Enter Your Email" required>
                            <button type="submit" class="dts_btn">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>