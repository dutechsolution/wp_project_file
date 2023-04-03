<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<!-- Page Title Start -->
				<div class="dts_main_wrap dts_pagetitle_wrap">
				    <div class="container">
				        <div class="row justify-content-between align-items-center">
				            <div class="col-lg-12 col-12">
				                <div class="dts_pagetitle_info" data-aos="fade-up">
				                    <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
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
				                <div class="dts_about_text text-center" data-aos="fade-right">
				                   <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

										<?php //get_search_form(); ?>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>	
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
