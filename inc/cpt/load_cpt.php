<?php

/**
 * Load Custom Post Types
 * 
 * This code loops through the current "ctp" directory
 * and includes all php files. This saves time when creating a new
 * post type. It can just be added to the folder rather than altering 
 * the config file.
 * 
 **/


/**
 * Ignore these files
 * 
 * Add file names (inc .php) to the array
 * to exclude them from being included in
 * the loop. This is to be used for DEV
 **/

$files_to_ignore = array(
    'load_ctp.php',
);

$cpt_files_included = array();



/**
 * Folder directory to loop through
 **/ 

$cpt_path = get_stylesheet_directory() . '/inc/cpt';


/**
 * Loop through the specified folder and include
 * all PHP files. Exclude files that have been
 * specified in the above array
 **/ 

foreach(glob( $cpt_path . '/*', GLOB_NOSORT) as $filename){  
    
    if( !in_array( basename($filename), $files_to_ignore ) ){
        
        if( !in_array( $filename, $cpt_files_included ) ){
            
            $cpt_files_included[] = $filename;
            require_once $filename;   
            
        }
        
    }
    
} 