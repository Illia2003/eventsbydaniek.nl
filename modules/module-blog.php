<?php $acf_content = get_field("blog");

$posts = get_posts([
    'post_type' => 'post', 
    'posts_per_page' => -1
]);

if(count($posts)):?>
<section class="section blog">
    <div class="blog__container section__container section__container--full">
        <div class="blog__wrapper section__wrapper section__wrapper--column section__wrapper--align--center">
            <?php if($acf_content['title']):?>
            <h2 class="heading-2 section__title"><?= $acf_content['title'];?></h2>
            <?php endif;?>
            <div class="blog__list swiper">
                <div class="swiper-wrapper">
                    <?php foreach($posts as $post):?>
                    <div class="blog__card swiper-slide card">
                        <div class="card__image">
                            <img src="<?= get_the_post_thumbnail_url($post, "medium");?>"
                                alt="<?= $post->post_title;?>" />
                        </div>
                        <div class="card__content">
                            <h5 class="heading-5 card__title"><?= $post->post_title;?></h5>
                            <div class="card__date"><?= get_the_date("j F Y", $post);?></div>
                            <div class="card__text">
                                <?= $post->post_excerpt;?>
                            </div>
                            <a href="<?= get_permalink($post->ID);?>">Lees verder</a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>