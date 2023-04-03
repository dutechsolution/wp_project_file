<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $site_description = get_bloginfo( 'description', 'display' );
            $site_name = get_bloginfo( 'name' );
            //for home page
            if ( $site_description && ( is_home() || is_front_page() ) ):
                echo $site_name; echo ' | '; echo $site_description; 
            endif;
            // for other post pages
            if (!( is_home() ) && ! is_404() ):
            the_title(); echo ' | '; echo $site_name;
            endif;
        ?>
    </title>
    <link rel="shortcut icon" href="<?php the_field('site_icon', 'option'); ?>" type="image/png">
    <!-- CSS Start -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets-theme/css/custom.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header Name Start -->
    <div class="dts_header_wrap d-flex flex-column">
        <div class="dts_header_top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7 col-12">
                        <div class="dts_tophead_certificate">
                            <p><?php the_field('top_bar_content', 'option'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="dts_tophead_social">
                            <?php
                                if( have_rows('social_media', 'option') ){
                                while ( have_rows('social_media', 'option') ) { the_row();
                            ?>
                                <a href="<?php the_sub_field('social_link'); ?>"><img src="<?php the_sub_field('social_icon'); ?>" alt="Icon" title="<?php the_sub_field('social_title'); ?>"></a>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dts_header_bottom">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-8">
                        <div class="dts_logo">
                            <a href="<?php echo site_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-4">
                        <div class="dts_menu">
                            <?php
                                wp_nav_menu( array(
                                   'theme_location'  => 'header-menu',
                                   'menu'            => 'Header menu',
                                   'container'       => '',
                                   'menu_class'      => ''
                                ));       
                            ?> 
                            <img src="<?php bloginfo('template_directory');?>/assets-theme/images/icon-menu.webp" alt="Menu" class="dts_menu_icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>