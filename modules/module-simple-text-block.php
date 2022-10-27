<?php 
$acf_content = get_field($args['acf-slug']);

if(!empty($acf_content)):?>
<section class="simple-text section">
    <?php if(!empty($acf_content['background'])):?>
    <div class="section__background" style="
              background-image: url('<?= $acf_content['background'];?>');
            ">
        <?php else:?>
        <div class="section__background">
            <?php endif;?>
            <div class="simple-text__container section__container">
                <div
                    class="simple-text__wrapper section__wrapper section__wrapper--justify--between section__wrapper--align--center">
                    <div class="simple-text__content">
                        <?php if(!empty($acf_content['title'])):?>
                        <h2 class="heading-2 section__title">
                            <?= $acf_content['title'];?>
                        </h2>
                        <?php endif;?>
                        <?php if(!empty($acf_content['text'])):?>
                        <div class="section__text simple-text__text">
                            <?= $acf_content['text'];?>
                        </div>
                        <?php endif;?>
                        <?php if(!empty($acf_content['button'])):
                      $button = $acf_content['button'];?>
                        <div class="simple-text__btn">
                            <a href="<?= $button['url'];?>" class="btn btn--main"><?= $button['title'];?></a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php endif;?>