<?php $acf_content = get_field($args['acf-slug']);

if(!empty($acf_content)):?>
<section class="simple-text-with-image section">
    <?php if(!empty($acf_content['background'])):?>
    <div class="section__background" style="
              background-image: url('<?= $acf_content['background'];?>');
            ">
        <?php else:?>
        <div class="section__background">
            <?php endif;?>
            <div class="simple-text-with-image__container section__container">
                <div
                    class="simple-text-with-image__wrapper section__wrapper section__wrapper--justify--between section__wrapper--align--center">
                    <div class="simple-text-with-image__content">
                        <?php if(!empty($acf_content['title'])):?>
                        <h2 class="heading-2 section__title">
                            <?= $acf_content['title'];?>
                        </h2>
                        <?php endif;?>
                        <?php if(!empty($acf_content['text'])):?>
                        <div class="section__text simple-text-with-image__text">
                            <?= $acf_content['text'];?>
                        </div>
                        <?php endif;?>
                        <?php if(!empty($acf_content['button'])):
                      $button = $acf_content['button'];?>
                        <div class="simple-text-with-image__btn">
                            <a href="<?= $button['url'];?>" class="btn btn--main"><?= $button['title'];?></a>
                        </div>
                        <?php endif;?>
                    </div>
                    <?php if(!empty($acf_content['image'])):?>
                    <div class="simple-text-with-image__image">
                        <img src="<?= $acf_content['image'];?>" alt="<?= $acf_content['title'];?>" width="1030"
                            height="1030" />
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
</section>
<?php endif;?>