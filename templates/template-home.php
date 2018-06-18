<?php
/**
 * Template Name: Home
 *
 * The template for displaying the home page.
 *
 * @link https://developer.wordpress.org/reference/functions/query_posts/
 *
 * @package JLT
 * @since JLT 1.0.0
 */

get_header(); ?>

<main id="content" role="main">

    <?php

    include( locate_template('template-parts/sections/hero.php') );
    
    include( locate_template('template-parts/sections/about.php') );
    
    include( locate_template('template-parts/sections/icons.php') );
    
    include( locate_template('template-parts/sections/casestudy.php') );
    
    include( locate_template('template-parts/sections/blog.php') );
    
    include( locate_template('template-parts/sections/cta.php') );

    ?>

</main><!-- #main -->

<?php get_footer();
