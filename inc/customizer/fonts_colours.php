<?php

/**
 * Add Font and Theme Colours Section
 */ 

$wp_customize->add_section('jlt_fonts_colours_section', array(
    'title'         => __('Fonts and Theme Colours', jlt_text_domain()),
    'description'   => __('Here you can edit the Fonts used across the site, as well as pick essential theme colours', jlt_text_domain()),
));


/**
 * Add Body Colour Controls
 */ 

$wp_customize->add_setting('jlt_background_colour', array(
    'default'	        => '#f5f4f2',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
        $wp_customize,  'jlt_background_colour', array(
            'settings'  => 'jlt_background_colour',
            'label'	    => __('Theme Background Colour', jlt_text_domain()),
		    'section'	=> 'jlt_fonts_colours_section',
	   ) 
    ) 
);


/**
 * Add Font Controls
 */ 

$wp_customize->add_setting('jlt_font_api_missing', array(
    'default'	 => '0',
) );

$wp_customize->add_control( 
    new Google_Font_API_Checker_Section (
        $wp_customize,
        'jlt_font_api_missing',
        array (
            'settings' => 'jlt_font_api_missing',
            'label'    => __('Google Font API Key Missing', jlt_text_domain()),
            'section'  => 'jlt_fonts_colours_section',
        )
    )
);
    
$wp_customize->add_setting('jlt_heading_font_selector', array(
    'default'	 => '0',
    'transport'  => 'postMessage',
) );


$wp_customize->add_control(
    new Google_Font_Dropdown_Custom_Control (
        $wp_customize,
        'jlt_heading_font_selector',
        array (
            'settings' => 'jlt_heading_font_selector',
            'label'    => __('Heading Font Select', jlt_text_domain()),
            'section'  => 'jlt_fonts_colours_section',
        )
    )
);

$wp_customize->add_setting('jlt_paragraph_font_selector', array(
    'default'	 => '0',
    'transport'  => 'postMessage',
) );

$wp_customize->add_control(
    new Google_Font_Dropdown_Custom_Control (
        $wp_customize,
        'jlt_paragraph_font_selector',
        array (
            'settings' => 'jlt_paragraph_font_selector',
            'label'    => __('Body Font Select', jlt_text_domain()),
            'section'  => 'jlt_fonts_colours_section',
        )
    )
);


/**
 * Add Colour Controls
 */ 

$wp_customize->add_setting('jlt_heading_text_colour', array(
    'default'	        => '#222222',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
        $wp_customize,  'jlt_heading_text_colour', array(
            'settings'  => 'jlt_heading_text_colour',
            'label'	    => __('Heading Text Colour', jlt_text_domain()),
		    'section'	=> 'jlt_fonts_colours_section',
	   ) 
    ) 
);

$wp_customize->add_setting('jlt_paragraph_text_colour', array(
    'default'	        => '#222222',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
        $wp_customize,  'jlt_paragraph_text_colour', array(
            'settings'  => 'jlt_paragraph_text_colour',
            'label'	    => __('Paragraph Text Colour', jlt_text_domain()),
		    'section'	=> 'jlt_fonts_colours_section',
	   ) 
    ) 
);


$wp_customize->add_setting('jlt_to_top_colour', array(
    'default'	        => '#868686',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
        $wp_customize,  'jlt_to_top_colour', array(
            'settings'  => 'jlt_to_top_colour',
            'label'	    => __('Back to Top Button Colour', jlt_text_domain()),
		    'section'	=> 'jlt_fonts_colours_section',
	   ) 
    ) 
);

$wp_customize->add_setting('jlt_to_top_colour_hover', array(
    'default'	        => '#5d5d5d',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
        $wp_customize,  'jlt_to_top_colour_hover', array(
            'settings'  => 'jlt_to_top_colour_hover',
            'label'	    => __('Back to Top Button Hover Colour', jlt_text_domain()),
		    'section'	=> 'jlt_fonts_colours_section',
	   ) 
    ) 
);