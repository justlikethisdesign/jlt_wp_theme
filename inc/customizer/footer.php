<?php

/**
 * Add Footer Section
 */

$wp_customize->add_section('jlt_footer_section', array(
    'title'    => __('Footer Options', jlt_text_domain()),
));


/**
 * Add Google API Key
 */

$wp_customize->add_setting( 'jlt_footer', array(
    'default' => 'Your Content Is Yours',
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control('jlt_footer', array(
    'settings' => 'jlt_footer',
    'label'    => __('Footer Text'),
    'section'  => 'jlt_footer_section',
    'type'     => 'textarea',
));