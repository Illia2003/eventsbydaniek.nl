<?php

function eventsbijdaniek_pages(){
    $page = get_page_by_title("Home Page", "OBJECT", 'page');
    if(empty($page)){
        $new_page = wp_insert_post([
            'comment_status' => 'close',
            'ping_status' => 'close',
            'post_author' => 1,
            'post_title' => "Home Page",
            'post_name' => 'home-page',
            'post_content' => '',
            'post_type' => 'page',
            'post_status' => 'publish',
            'meta_input' => ['_wp_page_template' => "index"]
        ]);

        update_option( 'page_on_front', $new_page );
    }

    $page = get_page_by_title("Contact Page", "OBJECT", 'page');
    if(empty($page)){
        $new_page = wp_insert_post([
            'comment_status' => 'close',
            'ping_status' => 'close',
            'post_author' => 1,
            'post_title' => "Contact Page",
            'post_name' => 'contact',
            'post_content' => '',
            'post_type' => 'page',
            'post_status' => 'publish',
            'meta_input' => ['_wp_page_template' => "page-contact"]
        ]);
    }
}

add_action("after_switch_theme", "eventsbijdaniek_pages");