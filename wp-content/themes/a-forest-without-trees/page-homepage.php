<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section id="home-hero" class="page-section" data-section-name="Introduction">
                <div class="video-text">
                    <h1 id="intro-header"><span id="intro-line-1"><span class="test">What</span> <span class="test">Does</span> <span class="test">a</span></span><span id="intro-line-2"><span class="test">Healthy</span></span><span id="intro-line-3"><span class="test">Forest Look Like?</span></span></h1>
                    <p class="intro-subhead" id="intro-subhead">( A visual guide to the sierras )</p>
                </div>

                <!--
                <div class="home-video-container">
                    <video autoplay="true" id="main-video" loop>
                        <source src="/wp-content/uploads/2017/09/aerial-shot-forest-cropped.mp4" type="video/mp4">
                    </video>
                </div>
                -->
            </section>

            <section id="home-overview" class="default-view page-section" data-section-name="The Problem">
                <div id="home-overview-bg1">
                </div>
                <div id="home-overview-bg2">
                </div>
                <div id="home-overview-bg3">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <p class="overpopulation-intro"><span id="over-text">The Sierras is facing<br>an unprecedented diseaster:</span></p>
                            <h2 class="overpopulation-big-text" id="over-text-2">Overpopulation<span class="overpopulation-big-text-line"></span></h2>
                            <p id="over-text-3">Human interferace of natural forests are at a all time high. The increased population of western pine beetle below is one of the many species of bark beetles endangering the forest. Nature’s way of managing forests have been greatly reduced by the overwhelming presence of humans.</p>
                            <p id="over-text-4"><a href="#"><strong>Learn more about forest ecosystems</strong></a></p>
                        </div>
                    </div>
                </div>
            </section>

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

            <section id="home-wildfire" class="default-view text-white page-section" data-section-name="Natural Enemies: Wildfires">
                <div id="home-wildfire-bg1">
                </div>
                <div id="home-wildfire-bg3">
                </div>
                <div id="home-wildfire-bg4">
                </div>
                <div id="home-wildfire-bg2">
                </div>
                <div id="home-wildfire-bg5">
                </div>
                <div id="home-wildfire-bg6">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="natural-enemies-wildfires">Natural Enemies</h2>
                            <h3 class="subtitle-wildfires">Wildfires</h3>
                            <p>An uncontrolled forest fire can ravage the entire ecosystem. Besides destroying trees and animal habitat, fire leaves hillsides vulnerable to erosion. Fish and other wildlife suffer as top soil and ash wash into nearby waterways. But fire is an essential part of the natural forest cycle. With the interference of humans, more wildfires occur.</p>
                            <p><a href="/wildfire"><strong>Learn How to Fight Wildfires</strong></a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="home-whos-affected" class="default-view page-section" data-section-name="Who is Affected?">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center"><span class="affected-who">Who is Affected?</span><h2>
                            <div class="row">
                                <div class="col-sm-6 text-center affected-type">
                                    <a href="#">Home Owners</a>
                                </div>
                                <div class="col-sm-6 text-center affected-type">
                                    <a href="#">Professionals</a>
                                </div>
                                <div class="col-sm-6 text-center affected-type">
                                    <a href="#">Forest Service</a>
                                </div>
                                <div class="col-sm-6 text-center affected-type">
                                    <a href="#">Legislators</a>
                                </div>
                            </div>
                            <h2 class="text-center"><span class="affected-everyone">Everyone.</span></h2>
                            <p>As humans, we should be caretakers of the forest. Everyone plays a role in maintaining the life of a forest. Every action you do leaves a footprint and knowing how to help is the start.</p>
                        </div>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
?>
