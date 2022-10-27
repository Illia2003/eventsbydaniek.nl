<?php 
/*
Template Name: Home page
*/

get_header();

$slug = "modules/module";?>
<main>
    <?php 
    get_template_part($slug, "hero");
    
    get_template_part($slug, "simple-text-with-image", [
      "acf-slug" => "simple_text_block_with_image"
    ]);
    
    get_template_part($slug, "simple-text-block", [
      "acf-slug" => "simple_text_block_1"
    ]);
    
    get_template_part($slug, "simple-text-block", [
      "acf-slug" => "simple_text_block_2"
    ]);
    
    get_template_part($slug, "blog");

    get_template_part($slug, "simple-block-columns", [
      "acf-slug" => "simple_block_with_columns"
    ]);
    
    get_template_part($slug, "google-reviews");
    
    get_template_part($slug, "form");?>
</main>
<?php get_footer();?>