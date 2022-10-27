<?php 
add_theme_support('menus');

function eventsbijdaniek_menus(){
    register_nav_menus([
        "header_menu" => "Header Menu (Desktop Version)",
        "header_menu_mobile" => "Header Menu (Mobile Version)",
        "footer_menu" => "Footer Menu"
    ]);
}
add_action("after_setup_theme", "eventsbijdaniek_menus");