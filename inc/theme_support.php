<?php

if ( function_exists( 'add_theme_support' ) ) {
    
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     */
    
    load_theme_textdomain( jlt_text_domain(), get_template_directory() . '/languages' );
    
    
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    
    
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );
    

    // Allow thumbnails
    add_theme_support( 'post-thumbnails' ); 
    
    
    //Add HTML5 and all the good stuff
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'widgets' ) );
        
    /*
    * Enable support for Post Formats.
    * 
    * @link https://codex.wordpress.org/Post_Formats
    * @link https://codex.wordpress.org/Function_Reference/add_theme_support
    */
    
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'status', 'image', 'video', 'audio', 'quote' ) );

    
    /** Remove default gallery styling **/
    
    add_filter( 'use_default_gallery_style', '__return_false' );
    
    
    /**
     * Support Microdata being added to WordPress
     * 
     * @link https://core.trac.wordpress.org/ticket/30783
     */
    
    add_theme_support( 'microformats2' );
    add_theme_support( 'microformats' );
    add_theme_support( 'microdata' );

}