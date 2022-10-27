<?php

function eventsbijdaniek_admin_menu(){
    add_menu_page("Theme Options", "Theme Options", "manage_options", "eventsbijdaniek_theme_options", "eventsbijdaniek_theme_options_page");
}
add_action("admin_menu", "eventsbijdaniek_admin_menu");

function eventsbijdaniek_theme_options_page(){
    require_once THEME_PATH."/admin/theme-options.php";
}

function eventsbijdaniek_theme_options(){
    register_setting('company_data', "eventsbijdaniek_company_phone", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_email", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_bedrijfsgegevens", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_kantoor", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_store", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_pres", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_finance", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('company_data', "eventsbijdaniek_company_facturen", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('social_media', "eventsbijdaniek_facebook", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('social_media', "eventsbijdaniek_whatsapp", array(
        "sanitize_callback" => "sanitize_code_field",
    ));

    register_setting('social_media', "eventsbijdaniek_instagram", array(
        "sanitize_callback" => "sanitize_code_field",
    ));
}
add_action("admin_init", "eventsbijdaniek_theme_options");

function sanitize_code_field($input){
	return $input;
}