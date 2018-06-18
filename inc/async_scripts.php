<?php

function add_async_enqueue_script($url){
    if (strpos($url, '#async')===false)
        return $url;
    else if (is_admin())
        return str_replace('#async', '', $url);
    else
        return str_replace('#async', '', $url)."' async='async"; 
}
add_filter('clean_url', 'add_async_enqueue_script', 11, 1);