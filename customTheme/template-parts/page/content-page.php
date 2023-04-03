<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
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
		            <div class="col-lg-12 col-12">
		                <div class="dts_about_text" data-aos="fade-right">
		                    <?php the_content(); ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>	
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
