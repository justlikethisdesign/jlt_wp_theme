<?php

/**
 * This file adds Customizer settings to the Site Identity section
 * 
 * @TODO To expand, allow image to be updated dynamically
 **/

$wp_customize->add_setting('jlt_site_logo', array(
    'transport'  => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jlt_site_logo', array(
    'settings' => 'jlt_site_logo',
    'label' => 'Website Logo',
    'section' => 'title_tagline',
) ) );