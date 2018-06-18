<?php

/**
 * Add Social Section
 */

$wp_customize->add_section( 'jlt_social_settings', array(
    'title'    => __('Social Media', jlt_text_domain()),
) );
  

/** 
 * Show/hide Social Sharing from Blogs
 */

$wp_customize->add_setting('jlt_social_share', array(
    'default'	 => true,
    'transport'  => 'postMessage',
) );

$wp_customize->add_control('jlt_social_share', array(
    'settings' => 'jlt_social_share',
    'label'    => __('Display Social Sharing in Articles'),
    'section'  => 'jlt_social_settings',
    'type'     => 'checkbox',
));


/** 
 * Add social sites from list
 **/ 

$social_sites = jlt_social_media_array();
  
/**
 * Here we loop through the social media array
 **/ 

foreach( $social_sites as $social_site ) {
  
    $wp_customize->add_setting( "$social_site", array(
        'default' => '',
    ) );
 
    //Capitalize Names
    $name = implode('-', array_map('ucfirst', explode('-', $social_site)));
    
    $wp_customize->add_control( $social_site, array(
        'label'   => __( "$name URL:", 'social_icon' ),
        'section' => 'jlt_social_settings',
        'type'    => 'text',
        'priority'=> 10,
    ) );
    
}