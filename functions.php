<?php 
define("THEME_PATH", get_template_directory());

function eventsbijdaniek_scripts(){
    wp_enqueue_style("eventsbijdaniek_style", get_stylesheet_uri());

    wp_enqueue_script("eventsbijdaniek_bundle", get_template_directory_uri()."/dist/bundle.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "eventsbijdaniek_scripts");

add_theme_support("post-thumbnails");

function eventsbijdaniek_add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    
    return $file_types;
}
add_filter('upload_mimes', 'eventsbijdaniek_add_file_types_to_uploads');

require_once THEME_PATH."/inc/functions/functions-menu.php";

require_once THEME_PATH."/inc/functions/functions-theme-settings.php";

require_once THEME_PATH."/inc/functions/functions-pages.php";