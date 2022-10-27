<?php $acf_content = get_field("hero_block");

if(!empty($acf_content)):?>
<section class="hero section">
    <?php if(!empty($acf_content['background'])):?>
    <div class="section__background" style="
              background-image: url('<?= $acf_content['background'];?>');
            ">
        <?php else:?>
        <div class="section__background">
            <?php endif;?>
            <div class="hero__container section__container">
                <div class="hero__wrapper section__wrapper section__wrapper--column section__wrapper--align--center">
                    <?php if(!empty($acf_content['title'])):?>
                    <h1 class="heading-1 section__title">
                        <?= $acf_content['title'];?>
                    </h1>
                    <?php endif;?>
                    <?php if(!empty($acf_content['text'])):?>
                    <div class="section__text hero__text">
                        <?= $acf_content['text'];?>
                    </div>
                    <?php endif;?>
                    <?php if(!empty($acf_content['button'])):
                      $button = $acf_content['button'];?>
                    <div class="hero__btn">
                        <a href="<?= $button['url'];?>" class="btn btn--main"><?= $button['title'];?></a>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
</section>
<?php endif;?>