<?php
/*
	Template Name: Contact Us
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

<div class="dts_main_wrap dts_contact_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dts_contact_info">
                    <div class="dts_heading_wrap">
                        <h2><?php the_field('contact_form_heading'); ?></h2>
                        <p><?php the_field('contact_form_short_description'); ?></p>
                    </div>
                    <ul>
                        <li>
                            <div class="dts_contact_icon">
                                <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-address-contact.svg" alt="Icon">
                            </div>
                            <div class="dts_contact_text">
                                <h6>Visit Us:</h6>
                                <?php
                                    if( have_rows('office_address') ){
                                    while ( have_rows('office_address') ) { the_row();
                                ?>
                                    <p><?php the_sub_field('address'); ?></p>
                                <?php } } ?>
                            </div>
                        </li>
                        <li>
                            <div class="dts_contact_icon">
                                <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-mail-contact.svg" alt="Icon">
                            </div>
                            <div class="dts_contact_text">
                                <h6>Mail Us:</h6>
                                 <?php
                                    if( have_rows('emails') ){
                                    while ( have_rows('emails') ) { the_row();
                                ?>
                                    <p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p>
                                <?php } } ?>
                            </div>
                        </li>
                        <li>
                            <div class="dts_contact_icon">
                                <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-call-contact.svg" alt="Icon">
                            </div>
                            <div class="dts_contact_text">
                                <h6>Phone Us:</h6>
                                <p><a href="tel:<?php the_field('contact_number'); ?>"><?php the_field('contact_number'); ?></a></p>
                            </div>
                        </li>
                    </ul>
                </div>    
            </div>
            <div class="col-md-6 col-12">
                <div class="dts_contact_form">
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>