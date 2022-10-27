<?php
/*
Template Name: Contact Template
*/

get_header();

$page = get_post();?>
<main>
    <section class="section contact">
        <div class="section__background contact__background">
            <div class="section__container contact__container">
                <div class="section__wrapper section__wrapper--justify--between contact__wrapper">
                    <div class="contact__content">
                        <h1 class="heading-1 section__title">
                            <?= $page->post_title;?>
                        </h1>
                        <?php $company_phone = get_option("eventsbijdaniek_company_phone");
                        
                        if(!empty($company_phone)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Telefoonnummer:</h4>
                            <div class="block__content">
                                <a href="tel:<?= $company_phone;?>" class="heading-2"><?= $company_phone;?></a>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $company_email = get_option("eventsbijdaniek_company_email");
                        
                        if(!empty($company_email)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Algemeen e-mail adres:</h4>
                            <div class="block__content">
                                <a href="mailto:<?= $company_email;?>" class="heading-2"><?= $company_email;?></a>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $company_bedrijfsgegevens = get_option("eventsbijdaniek_company_bedrijfsgegevens");
                        
                        if(!empty($company_bedrijfsgegevens)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Bedrijfsgegevens:</h4>
                            <div class="block__content">
                                <p>
                                    <?= $company_bedrijfsgegevens;?>
                                </p>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $eventsbijdaniek_company_kantoor = get_option("eventsbijdaniek_company_kantoor");
                        
                        if(!empty($eventsbijdaniek_company_kantoor)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Kantoor:</h4>
                            <div class="block__content">
                                <p>
                                    <?= $eventsbijdaniek_company_kantoor;?>
                                </p>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $eventsbijdaniek_company_store = get_option("eventsbijdaniek_company_store");
                        
                        if(!empty($eventsbijdaniek_company_store)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">
                                Magazijn en retour pakketten:
                            </h4>
                            <div class="block__content">
                                <p>
                                    <?= $eventsbijdaniek_company_store;?>
                                </p>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $eventsbijdaniek_company_pres = get_option("eventsbijdaniek_company_pres");
                        
                        if(!empty($eventsbijdaniek_company_pres)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Pers:</h4>
                            <div class="block__content">
                                <a
                                    href="mailto:<?= $eventsbijdaniek_company_pres; ?>"><?= $eventsbijdaniek_company_pres; ?></a>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $eventsbijdaniek_company_finance = get_option("eventsbijdaniek_company_finance");
                        
                        if(!empty($eventsbijdaniek_company_finance)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Financiële zaken:</h4>
                            <div class="block__content">
                                <a
                                    href="mailto:<?= $eventsbijdaniek_company_finance; ?>"><?= $eventsbijdaniek_company_finance; ?></a>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php $eventsbijdaniek_company_facturen = get_option("eventsbijdaniek_company_facturen");
                        
                        if(!empty($eventsbijdaniek_company_facturen)):?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Facturen:</h4>
                            <div class="block__content">
                                <a
                                    href="mailto:<?= $eventsbijdaniek_company_facturen; ?>"><?= $eventsbijdaniek_company_facturen; ?></a>
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="contact__block">
                            <h4 class="heading-4 block__title">Volg ons:</h4>
                            <div class="block__content">
                                <ul class="contact__social-media list list--horizontal">
                                    <?php $facebook_url = get_option("eventsbijdaniek_facebook");
                                    
                                    if(!empty($facebook_url)):?>
                                    <li class="list__item">
                                        <a href="<?= $facebook_url;?>" class="list__link social-media__link--facebook">
                                            <svg height="20" width="20" fill="#fff">
                                                <use x="0" y="0" xlink:href="#icon-facebook"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <?php endif;?>
                                    <?php $whatsapp_url = get_option("eventsbijdaniek_whatsapp");
                                    
                                    if(!empty($whatsapp_url)):?>
                                    <li class="list__item">
                                        <a href="<?= $whatsapp_url;?>" class="list__link social-media__link--whatsapp">
                                            <svg height="20" width="20" fill="#fff">
                                                <use x="0" y="0" xlink:href="#icon-whatsapp"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <?php endif;?>
                                    <?php $instagram_url = get_option("eventsbijdaniek_instagram");
                                    
                                    if(!empty($instagram_url)):?>
                                    <li class="list__item">
                                        <a href="<?= $instagram_url;?>"
                                            class="list__link social-media__link--instagram">
                                            <svg height="20" width="20" fill="#fff">
                                                <use x="0" y="0" xlink:href="#icon-instagram"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php $contact_info = get_field("contact_info");?>
                    <div class="contact__right">
                        <?php $media = $contact_info['media'];
                        
                        if(!empty($media['image'])):?>
                        <div class="contact__image">
                            <img src="<?= $media['image'];?>" alt="Contact Silent Disco International" height="320"
                                width="620" />
                        </div>
                        <?php endif;?>
                        <?php if(!empty($media['map'])):?>
                        <div class="contact__map">
                            <?= $media['map'];?>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section reservation-form">
        <div class="reservation-form__container section__container section__container--full">
            <div
                class="reservation__wrapper section__wrapper section__wrapper--column section__wrapper--align--center section__wrapper--justify--center">
                <h2 class="section__title heading-2">Silent Disco aanvragen</h2>
                <div class="reservation-form__form">
                    <div class="section__text reservation-form__text">
                        <p>
                            Vul het formulier in.<br />
                            Na ontvangst sturen we zo spoedig mogelijk een vrijblijvende
                            offerte.
                        </p>

                        <p>
                            Je kunt ook mailen met
                            <a href="mailto:info@silentdisco.com">info@silentdisco.com</a>
                            of bellen naar <a href="tel:0882014433">088-2014433</a>
                        </p>
                    </div>
                    <form action="#" method="post" class="form">
                        <div class="form__group form__group--two">
                            <div class="form__field">
                                <label for="first_name">Voornaam:</label>
                                <input type="text" id="first_name" name="first_name" />
                            </div>
                            <div class="form__field">
                                <label for="last_name">Achternaam:</label>
                                <input type="text" id="last_name" name="last_name" />
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__field">
                                <label for="user_email">E-mail:</label>
                                <input type="email" id="user_email" name="user_email" />
                            </div>
                        </div>
                        <div class="form__group form__group--two">
                            <div class="form__field">
                                <label for="user_phone">Telefoonnummer:</label>
                                <input type="tel" id="user_phone" name="user_phone" />
                            </div>
                            <div class="form__field">
                                <label for="billing_city">Plaats:</label>
                                <input type="text" id="billing_city" name="billing_city" />
                            </div>
                        </div>
                        <div class="form__group form__group--part">
                            <div class="form__field">
                                <label for="count_headphones">Aantal hoofdtelefoons:</label>
                                <input type="number" id="count_headphones" name="count_headphones" />
                            </div>
                        </div>
                        <div class="form__group form__group--two">
                            <div class="form__field">
                                <label for="reservation_start_date">Aanvang huurperiode:</label>
                                <input type="text" id="reservation_start_date" name="reservation_start_date" />
                            </div>
                            <div class="form__field">
                                <label for="reservation_end_date">Einde huurperiode:</label>
                                <input type="text" id="reservation_end_date" name="reservation_end_date" />
                            </div>
                        </div>
                        <div class="form__group form__group-radio">
                            <label class="form__group-name">Aantal kanalen :</label>
                            <div class="form__radio">
                                <input type="radio" name="user_chanel" id="chanel-1" value="1 kanaal" />
                                <label for="chanel-1">1 kanaal</label>
                            </div>
                            <div class="form__radio">
                                <input type="radio" name="user_chanel" id="chanel-2" value="2 kanalen" />
                                <label for="chanel-2">2 kanalen</label>
                            </div>
                            <div class="form__radio">
                                <input type="radio" name="user_chanel" id="chanel-3" value="3 kanalen" />
                                <label for="chanel-3">3 kanalen</label>
                            </div>
                            <div class="form__radio">
                                <input type="radio" name="user_chanel" id="chanel-4"
                                    value="Informeer mij over alle opties" />
                                <label for="chanel-4">Informeer mij over alle opties</label>
                            </div>
                        </div>
                        <div class="form__group form__group-radio">
                            <label class="form__group-name">Wil je hoofdtelefoons huren, kopen of ben je geïnteresseerd
                                in een Silent Disco met DJ? :</label>
                            <div class="form__radio">
                                <input type="radio" name="user_dj" id="dj-1" value="Huren" />
                                <label for="dj-1">Huren</label>
                            </div>
                            <div class="form__radio">
                                <input type="radio" name="user_dj" id="dj-2" value="Kopen" />
                                <label for="dj-2">Kopen</label>
                            </div>
                            <div class="form__radio">
                                <input type="radio" name="user_dj" id="dj-3" value="Silent Disco met DJ huren" />
                                <label for="dj-3">Silent Disco met DJ huren</label>
                            </div>
                        </div>
                        <div class="form__group form__group-checkbox">
                            <label class="form__group-name">Informeer mij over de volgende extra opties:</label>
                            <div class="form__checkbox">
                                <input type="checkbox" name="user_addtional[]" id="user_addtional-1" value="Huren" />
                                <label for="user_addtional-1">Laadsysteem voor de hoofdtelefoons (bij gebruik langer
                                    dan 8 uur)</label>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__textarea">
                                <label for="user_comment">Opmerkingen:</label>
                                <textarea id="user_comment" name="user_comment"></textarea>
                                <div class="form__field-text">
                                    <p>
                                        Bijvoorbeeld extra informatie over het evenement of
                                        speciale wensen met betrekking tot het gebruik van de
                                        hoofdtelefoons. Hier kun je eventueel ook alvast
                                        volledige adresgegevens invullen voor bezorging.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form__bottom">
                            <button type="submit" class="form__submit btn btn--main">
                                Verzenden
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>