<?php

/**
 * Add API Section
 */

$wp_customize->add_section('jlt_api_section', array(
    'title'    => __('APIs', jlt_text_domain()),
));


/**
 * Add Google API Key
 */

$wp_customize->add_setting('jlt_google_api');

$wp_customize->add_control('jlt_google_api', array(
    'settings' => 'jlt_google_api',
    'label'    => __('Google API Key'),
    'section'  => 'jlt_api_section',
    'type'     => 'text',
));


function customizer_google_api_exists(){
    
    if ( count ( get_theme_mod('jlt_heading_font_selector') ) > 0 ){
        return true;
    }
    
    return false;
    
}