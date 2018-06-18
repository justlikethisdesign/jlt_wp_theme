<?php

/**
 * The main enqueuing scripts file
 *
 * This page enqueues all scripts for this theme.
 *
 * For more info see:
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_register_script
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script
 * @link http://code.tutsplus.com/articles/the-ins-and-outs-of-the-enqueue-script-for-wordpress-themes-and-plugins--wp-22509
 * @link https://codex.wordpress.org/Function_Reference/wp_dequeue_script
 * @link https://developer.wordpress.org/reference/functions/wp_script_add_data/
 */


/**
 * Enqueue all JS scripts
 *
 * This function is used to contain all JS scripts
 * needed to be included within the theme. It will
 * add all scripts into an array and pass to the
 * minifier/basic enqueuer
 */

function jlt_enqueue_scripts(){

    global $wp_query;

    /**
     * Set up any localisation values
     *
     * All localisation is applied to theme-script script. This is to encourage the use of the minifier.
     * If the site is being run without minification, the main code must be called theme-script
     **/

    $debug = false;
    if (defined('WP_DEBUG') && true === WP_DEBUG) {
        $debug = true;
    }

    $localize_this = array (
        //General Data
        'ajax_url'                  => admin_url('admin-ajax.php'), //Standard ajax init
        'base_url'                  => site_url(),
        'img_url'                   => get_stylesheet_directory_uri() . '/assets/img/',
        'security'                  => wp_create_nonce('custom_theme_nonce'),
        'debug'                     => $debug,
    );


    //Set the JS directory for this theme
    $JS_theme_dir           = get_stylesheet_directory_uri() . '/assets/js/';
    $JS_direct_path         = get_stylesheet_directory() . '/assets/js/';
    $JS_conditional_path    = get_stylesheet_directory() . '/assets/js/conditionals/';

    /**
     * Scripts to be added in the header
     **/

    /**
    * Load Respond.js
    *
    * This allows responsive web design to work on IE 6-8. Run before all scripts to ensure it
    */
    wp_enqueue_script(
        'respond',
        $JS_conditional_path . 'respond.min.js',
        false ,
        '1.4.2',
        false
    );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' ); //Add the condition to show if below IE9


    /**
    * Load HTML5 Shiv
    *
    * Allows the use of HTML in legacy IE
    */
    wp_enqueue_script(
        'html5_shiv',
        $JS_conditional_path . 'html5shiv.js',
        false ,
        '3.7.3',
        false
    );
    wp_script_add_data( 'html5_shiv', 'conditional', 'lt IE 9' ); //Add the condition to show if below IE9


    /**
     * Javascript Enqueuing
     *
     * If Debug is set, the file that is enqueued is an unminified
     *
     * The file is unminified, but compressed. The version number applied is also specific for a debug file.
     * This means when it goes live the version is smaller, and related to actual production versions.
     **/

    if ( $debug ){

        wp_enqueue_script(
            'theme_script_debug',
            $JS_theme_dir . 'app.js#async',
            array('jquery'),
            jlt_get_file_version_number( 'theme_script_debug', $JS_direct_path . 'app.js' ),
            true
        );
        wp_localize_script( 'theme_script_debug', 'theme_script_ajax', $localize_this );

    } else {

        wp_enqueue_script(
            'theme_script',
            $JS_theme_dir . 'app.min.js#async',
            array('jquery'),
            jlt_get_file_version_number( 'theme_script', $JS_direct_path . 'app.min.js' ),
            true
        );
        wp_localize_script( 'theme_script', 'theme_script_ajax', $localize_this );

    }

}
add_action( 'wp_enqueue_scripts', 'jlt_enqueue_scripts' );


/**
* Dequeue jQuery Migrate script in WordPress.
*/
function jlt_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'jlt_remove_jquery_migrate' );



/**
 * Enqueue critical CSS scripts in head
 *
 * Get the critical css from assets folder
 * and insert directly into the wp_head.
 * This increases loading.
 */

function enqueue_scripts_header_inline_css(){

    $debug = false;
    if (defined('WP_DEBUG') && true === WP_DEBUG) {
        $debug = true;
    }

    //Set the CSS directory for this theme
    $CSS_theme_dir           = get_stylesheet_directory_uri() . '/assets/sass/';
    $CSS_direct_path         = get_stylesheet_directory() . '/assets/sass/';


    /**
     * CSS Style Enqueuing
     *
     * If Debug is set, the file that is enqueued is an unminified
     *
     * The file is unminified, but compressed. The version number applied is also specific for a debug file.
     * This means when it goes live the version is smaller, and related to actual production versions.
     **/

    if ( $debug ){
        $critical_css_string = file_get_contents( $CSS_direct_path . 'critical.css' );
    } else {
        $critical_css_string = file_get_contents( $CSS_direct_path . 'critical.min.css' );
    }

    ?>

    <style><?php echo $critical_css_string;?></style>

    <?php

}

add_action('wp_head', 'enqueue_scripts_header_inline_css');

/**
 * Enqueue Deferred CSS Styles
 *
 * Here we add the deferred CSS in the footer.
 * Not proper WordPress standard, but they havn't caught up yet.
 **/

function jlt_deferred_css_styles() {

    $debug = false;
    if (defined('WP_DEBUG') && true === WP_DEBUG) {
        $debug = true;
    }

    //Set the CSS directory for this theme
    $CSS_theme_dir           = get_stylesheet_directory_uri() . '/assets/sass/';
    $CSS_direct_path         = get_stylesheet_directory() . '/assets/sass/';

    if ( $debug ){

        echo '<link rel="stylesheet" href="' . $CSS_theme_dir . 'noncritical.css?ver=' . jlt_get_file_version_number( 'noncritical_style_debug', $CSS_direct_path . 'noncritical.css' ) . '" type="text/css" media="all" />';

    } else {

        echo '<link rel="stylesheet" href="' . $CSS_theme_dir . 'noncritical.css?ver=' . jlt_get_file_version_number( 'noncritical_style', $CSS_direct_path . 'noncritical.min.css' ) . '" type="text/css" media="all" />';

    }


}
add_action( 'wp_footer', 'jlt_deferred_css_styles' );



/**
 * Add CSS styles to admin
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
 **/
function jlt_enqueue_admin_css_styles(){

    //Set the theme directory
    $CSS_theme_dir      = get_stylesheet_directory_uri() . '/assets/admin/css/';

    wp_enqueue_style(
        'jlt_admin',
        $CSS_theme_dir . 'admin-css.css',
        false,
        '1',
        false
    );

    /**
    * Load Animate
    */
    wp_enqueue_style(
        'animate',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
        false,
        '3.5.2',
        false
    );

}
add_action( 'admin_enqueue_scripts', 'jlt_enqueue_admin_css_styles' );


/**
 * Add JS scripts to admin
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
 **/

function jlt_enqueue_admin_js_scripts(){

    //Set the theme directory
    $JS_theme_dir   = get_stylesheet_directory_uri() . '/assets/admin/js/';
    $JS_direct_path = get_stylesheet_directory() . '/assets/admin/js/';

    $localize_this = array (
        //General Data
        'ajax_url' => admin_url('admin-ajax.php'), //Standard ajax init
    );

    wp_enqueue_script(
        'jlt_media_libary_svg',
        $JS_theme_dir . 'media-libary-svg.js',
        false,
        '1',
        true
    );
    wp_localize_script( 'jlt_media_libary_svg', 'theme_script_ajax', $localize_this );

}
add_action( 'admin_enqueue_scripts', 'jlt_enqueue_admin_js_scripts' );


/**
 * Add Customizer control code
 **/

function jlt_enqueue_customizer_control(){

    $JS_theme_dir   = get_stylesheet_directory_uri() . '/assets/admin/js/';
    $JS_direct_path = get_stylesheet_directory() . '/assets/admin/js/';

    wp_enqueue_script(
        'jlt_customizer',
        $JS_theme_dir . 'customizer-control.js',
        array('jquery'),
        jlt_get_file_version_number( 'jlt_customizer', $JS_direct_path . 'customizer-control.js' ),
        true
    );

}
add_action( 'customize_controls_enqueue_scripts', 'jlt_enqueue_customizer_control' );

/**
 * Add Customizer Preview code
 **/

function jlt_enqueue_customizer_preview(){

    $JS_theme_dir   = get_stylesheet_directory_uri() . '/assets/admin/js/';
    $JS_direct_path = get_stylesheet_directory() . '/assets/admin/js/';

    wp_enqueue_script(
        'jlt_customizer',
        $JS_theme_dir . 'customizer-preview.js',
        array('jquery'),
        jlt_get_file_version_number( 'jlt_customizer', $JS_direct_path . 'customizer-preview.js' ),
        true
    );

    $localized_value = array (
        'ajax_url'  => admin_url('admin-ajax.php'), //Standard ajax init
    );

    wp_localize_script( 'jlt_customizer', 'ajax_customizer', $localized_value );

}
add_action( 'customize_preview_init', 'jlt_enqueue_customizer_preview' );


/**
 * Add Comments Script
 *
 * @link https://wordpress.stackexchange.com/questions/16773/comments-reply-script-not-working
 */

function enqueue_comment_reply() {
    // on single blog post pages with comments open and threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
        // enqueue the javascript that performs in-link comment reply fanciness
        wp_enqueue_script( 'comment-reply' );
    }
}
// Hook into wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );
