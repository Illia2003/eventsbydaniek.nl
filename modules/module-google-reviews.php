<?php $acf_content = get_field("reviews");?>
<section class="section google-reviews">
    <div class="section__container google-reviews__container section__container--full">
        <div
            class="google-reviews__wrapper section__wrapper section__wrapper--column section__wrapper--align--center section__wrapper--justify--center">
            <?php if($acf_content['title']):?>
            <h2 class="heading-2 section__title"><?= $acf_content['title'];?></h2>
            <?php endif;?>
            <div class="google-reviews__list">
                <?= do_shortcode("[trustindex no-registration=google]");?>
            </div>
        </div>
    </div>
</section>