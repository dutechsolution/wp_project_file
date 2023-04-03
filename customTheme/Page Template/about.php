<?php
/*
	Template Name: About Us
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
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Digital Marketing Start -->
<div class="dts_main_wrap dts_about_wrap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-12">
                <div class="dts_about_text" data-aos="fade-right">
                    <div class="dts_heading_wrap">
                        <h2><img src="<?php the_field('heading_icon_image'); ?>" alt="Icon"> <?php the_field('page_section_heading'); ?></h2>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="dts_about_img" data-aos="fade-left">
                    <div class="dts_about_imgbox"></div>
                    <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            $featured_img_url = the_post_thumbnail('full');
                        } 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>