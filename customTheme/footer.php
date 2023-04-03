<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<!-- Footer Start -->
    <div class="dts_main_wrap dts_footer_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="dts_footer_logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="dts_footer_box">
                        <p><img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-map.png" alt="Icon"> <span><?php the_field('address_india', 'option'); ?></span></p>
                        <p><img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-map.png" alt="Icon"> <span><?php the_field('address_dubai', 'option'); ?></span></p>
                        <p><img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-mail.png" alt="Icon"> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
                        <p><img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-call.png" alt="Icon"> <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></p>
                    </div>
                </div>
                <div class="col-md-3 col-12 dts_footer_2s">
                    <div class="dts_footer_box">
                        <h4><?php the_field('quick_link_heading', 'option'); ?></h4>
                        <?php
                            wp_nav_menu( array(
                               'theme_location'  => 'quick-links',
                               'menu'            => 'Quick links',
                               'container'       => '',
                               'menu_class'      => ''
                            ));       
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-12 dts_footer_2s">
                    <div class="dts_footer_box">
                        <h4><?php the_field('support_link_heading', 'option'); ?></h4>
                        <?php
                            wp_nav_menu( array(
                               'theme_location'  => 'support',
                               'menu'            => 'Support',
                               'container'       => '',
                               'menu_class'      => ''
                            ));       
                        ?>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="dts_footer_box">
                        <h4><?php the_field('follow_us_heading', 'option'); ?></h4>
                        <ul class="dts_ftr_social">
                            <?php
                                if( have_rows('social_media', 'option') ){
                                while ( have_rows('social_media', 'option') ) { the_row();
                            ?>
                                 <li><a href="<?php the_sub_field('social_link'); ?>"><img src="<?php the_sub_field('social_icon'); ?>" alt="Icon" title="<?php the_sub_field('social_title'); ?>"></a></li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dts_main_wrap dts_copyrigth_wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="dts_copyrigth_text">
                        <p>© <?php the_field('copyright_text', 'option'); ?> <?php echo $year = date("Y"); ?> <a href="<?php echo site_url(); ?>"><?php echo $site_name = get_bloginfo( 'name' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- JS Start -->
    <script src="<?php bloginfo('template_directory');?>/assets-theme/js/jquery-3.6.3.min.js "></script>
    <script src="<?php bloginfo('template_directory');?>/assets-theme/js/bootstrap.min.js "></script>
    <script src="<?php bloginfo('template_directory');?>/assets-theme/js/owl.carousel.min.js "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets-theme/js/custom.js "></script>

    <script>
        $( document ).ready(function() {
            $('<img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-close.webp" alt="Menu" class="dts_menu_icon dts_menu_shift">').insertBefore(".dts_menu>ul>li:first-child");

            $('<img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-sub-arrow.png" alt="Icon">').insertBefore(".dts_menu ul li ul.sub-menu li a");

            $('.dts_menu_shift').on('click',function () {
                $(".dts_menu>ul").removeClass("clicked");
            });
        });
    </script>

    <?php wp_footer(); ?>

</body>
</html>
