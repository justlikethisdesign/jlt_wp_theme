<?php

/**
 * Add API Section
 */

$wp_customize->add_section('jlt_scripts_section', array(
    'title'    => __('Custom Scripts', jlt_text_domain()),
));


/**
 * Add Header Scripts
 */

$wp_customize->add_setting('jlt_scripts_header');

$wp_customize->add_control('jlt_scripts_header', array(
    'settings' => 'jlt_scripts_header',
    'label'    => __('Custom Header Scripts'),
    'section'  => 'jlt_scripts_section',
    'type'     => 'textarea',
));


/**
 * Add Footer Scripts
 */

$wp_customize->add_setting('jlt_scripts_footer');

$wp_customize->add_control('jlt_scripts_footer', array(
    'settings' => 'jlt_scripts_footer',
    'label'    => __('Custom Footer Scripts'),
    'section'  => 'jlt_scripts_section',
    'type'     => 'textarea',
));