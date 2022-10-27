<?php
/*
Template Name: About Us Template
*/

get_header();

$page = get_post();

$slug = "modules/module";?>
<main>
    <section class="section about-us">
        <div class="section__background about-us__background">
            <div class="section__container about-us__container">
                <div
                    class="section__wrapper section__wrapper--column section__wrapper--justify--between about-us__wrapper">
                    <div class="about-us__content wp-content">
                        <h1 class="heading-1 section__title"><?= $page->post_title;?></h1>
                        <?= $page->post_content;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        get_template_part($slug, "form");
    ?>
</main>
<?php get_footer();?>