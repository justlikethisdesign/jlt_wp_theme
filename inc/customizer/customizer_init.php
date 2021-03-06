<?php

/**
 * This file includes all files required 
 * to run the Customizer
 **/


/**
 * Here we include custom Customizer classes
 */ 

include ( 'social/social_media_list.php' );

/**
 * Add our Customizer content
 * 
 * @link https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
 * @link https://codex.wordpress.org/theme_scriptization_API
 *
 * Examples
 * @link https://gist.github.com/Abban/2968549
 *
 * @since IndiePress 1.0.0
 */


/**
 * All Customizer content (i.e. Panels, Sections, Settings & Controls) 
 * are registered here
 * 
 * @TODO To expand this section, add selective refresh
 * @link https://developer.wordpress.org/themes/customize-api/tools-for-improved-user-experience/#selective-refresh-fast-accurate-updates
 */

function jlt_customize_register( $wp_customize ) {
    
    //Add Site Identity Settings
    include ( 'identity.php' );
    
    //Add any general settings
    include ( 'general.php' );
    
    //Add footer settings
    include ( 'footer.php' );
    
    include ( 'social/register_social.php' );
    
    //Add custom scripts fields
    include ( 'scripts.php' );
    
    //Add API key fields
    include ( 'API.php' );
    
}
    
add_action( 'customize_register', 'jlt_customize_register' );