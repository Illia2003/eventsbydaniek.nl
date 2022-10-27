<?php $acf_content = get_field("form");?>
<section class="section reservation-form">
    <div class="reservation-form__container section__container section__container--full">
        <div
            class="reservation__wrapper section__wrapper section__wrapper--column section__wrapper--align--center section__wrapper--justify--center">
            <?php if(!empty($acf_content['title'])):?>
            <h2 class="heading-2 section__title">
                <?= $acf_content['title'];?>
            </h2>
            <?php endif;?>
            <div class="reservation-form__form">
                <?php if(!empty($acf_content['text'])):?>
                <div class="section__text reservation-form__text">
                    <?= $acf_content['text'];?>
                </div>
                <?php endif;?>
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
                    <div class="form__group">
                        <div class="form__field">
                            <label for="user_phone">Telefoonnummer:</label>
                            <input type="tel" id="user_phone" name="user_phone" />
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
                            <input type="radio" name="user_dj" id="dj-3" value="Silent Disco met DJ huren" />
                            <label for="dj-3">Silent Disco met DJ huren</label>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__textarea">
                            <label for="user_comment">Opmerkingen:</label>
                            <textarea id="user_comment" name="user_comment"></textarea>
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