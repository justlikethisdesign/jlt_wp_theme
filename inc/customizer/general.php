<?php

/**
 * Add General Section
 */

$wp_customize->add_section('jlt_general_section', array(
    'title'    => __('General Options', jlt_text_domain()),
));


/** 
 * Show/hide Search from header
 */

$wp_customize->add_setting('jlt_header_search', array(
    'default'	 => true,
    'transport'  => 'postMessage',
) );

$wp_customize->add_control('jlt_header_search', array(
    'settings' => 'jlt_header_search',
    'label'    => __('Display Header Search', jlt_text_domain()),
    'section'  => 'jlt_general_section',
    'type'     => 'checkbox',
));


/** 
 * Click to load, or scroll to load
 */

$wp_customize->add_setting('jlt_loading_type', array(
    'default'	 => 'paging',
) );

$wp_customize->add_control('jlt_loading_type', array(
    'settings' => 'jlt_loading_type',
    'label'    => __('Blog Loading Type', jlt_text_domain()),
    'section'  => 'jlt_general_section',
    'type'     => 'select',
    'choices' => array(
        'paging'    => __( 'Paging', jlt_text_domain() ),
        'button'    => __( 'Button', jlt_text_domain() ),
        'infinite'  => __( 'Infinite Scroll', jlt_text_domain() ),
    ),
));