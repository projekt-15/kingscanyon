<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package A_Forest_Without_Trees
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section id="home-bark-beetles" class="default-view page-section text-center" data-section-name="Natural Enemies: Bark Beetles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="natural-enemies natural-enemies-bb">Natural Enemies</h2>
                            <h3 class="subtitle-bb">Bark Beetles</h3>
                            <p class="text-left">The increased population of western pine beetle below is one of the many species of bark beetles endangering the forest. Nature’s way of managing forests have been greatly reduced by the overwhelming presence of humans.</p>
                            <p class="text-left"><a href="#" class="text-center"><strong>Learn How to Fight Bark Beetles</strong></a></p>
                            <div class="col-md-8 col-md-offset-2 text-center" id="beetles-box">
                                <p class="closer-look">( take a closer look below )</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/beetles.jpg" class="zoom" data-magnify-src="<?php echo get_template_directory_uri(); ?>/images/beetles.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
