<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A_Forest_Without_Trees
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,900|Titillium+Web:900" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
        <div id="cshs-branding">
        </div>

        <nav id="site-navigation" class="main-navigation">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" id="logo">
                <!--<h2>A Forest Without Trees</h2>-->
                <p>An Educational site brought to us by Central Sierra Historical Society</p>
            </div>
            <div class="nav-container">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
                <div id="page-menu">
                </div>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div id="menu-control">
        <img src="<?php echo get_template_directory_uri(); ?>/images/open.png" alt="Open Menu" id="menu-open">
        <img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="Close Menu" id="menu-close">
    </div>

	<div id="content" class="site-content">
