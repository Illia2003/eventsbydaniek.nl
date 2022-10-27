<?php $acf_content = get_field($args['acf-slug']);

if(!empty($acf_content) && !empty($acf_content['columns'])):?>
<section class="section block-columns">
    <?php if(!empty($acf_content['background'])):?>
    <div class="section__background" style="
              background-image: url('<?= $acf_content['background'];?>');
            ">
        <?php else:?>
        <div class="section__background">
            <?php endif;?>
            <div class="block-columns__container section__container">
                <div
                    class="block-columns__wrapper section__wrapper section__wrapper--column section__wrapper--align--center section__wrapper--justify--center">
                    <?php if(!empty($acf_content['title'])):?>
                    <h2 class="heading-2 section__title">
                        <?= $acf_content['title'];?>
                    </h2>
                    <?php endif;?>
                    <?php if(!empty($acf_content['text'])):?>
                    <div class="section__text block-columns__text">
                        <?= $acf_content['text'];?>
                    </div>
                    <?php endif;?>
                    <div class="block-columns__columns">
                        <?php foreach($acf_content['columns'] as $column):?>
                        <?php if(!empty($column)):?>
                        <div class="block-columns__column">
                            <?php if(!empty($column['icon'])):?>
                            <div class="column__image">
                                <img src="<?= $column['icon'];?>" alt="<?= $column['title'];?>" width="150"
                                    height="150" />
                            </div>
                            <?php endif;?>
                            <?php if(!empty($column['title'])):?>
                            <h6 class="heading-6 column__name"><?= $column['title'];?></h6>
                            <?php endif;?>
                            <?php if(!empty($column['text'])):?>
                            <div class="column__text">
                                <?= $column['text'];?>
                            </div>
                            <?php endif;?>
                        </div>
                        <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php endif;?>