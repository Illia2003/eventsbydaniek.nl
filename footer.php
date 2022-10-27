<footer class="footer section">
    <div class="footer__container section__container section__container--full">
        <div class="footer__wrapper section__wrapper section__wrapper--column">
            <div class="footer__content">
                <div class="footer__block">
                    <h5 class="heading-5 block__title">Informatie:</h5>
                    <div class="block__group">
                        <h6 class="heading-6 group__title">E-mail</h6>
                        <a href="mailto:info@silentdisco.com">info@silentdisco.com</a>
                    </div>
                    <div class="block__group">
                        <h6 class="heading-6 group__title">Bel Gratis</h6>
                        <a href="mailto:+31882014433">+31 88 20 14 433</a>
                    </div>
                    <div class="block__group">
                        <div class="footer__logo">
                            <img src="<?= get_template_directory_uri()."/assets/img/Eventsbydaniek (2).png";?>"
                                height="60" />
                        </div>
                    </div>
                </div>
                <div class="footer__block">
                    <h5 class="heading-5 block__title">Adresgegevens:</h5>
                    <div class="block__group">
                        <p>Silent Disco International B.V.</p>
                    </div>
                    <div class="block__group">
                        <p>Magazijn en retour paketten:</p>
                        <p>Veldzigt 30c</p>
                        <p>3454 PW Utrecht</p>
                    </div>
                    <div class="block__group">
                        <p>Kantoor:</p>
                        <p>Tuinstraat 6</p>
                        <p>1506 VX Zaandam</p>
                        <p>Nederland</p>
                    </div>
                    <div class="block__group">
                        <p>KvK: 59821302</p>
                        <p>BTW: NL853656538B01</p>
                    </div>
                </div>
                <div class="footer__block">
                    <h5 class="heading-5 block__title">Navigeren :</h5>
                    <div class="block__group">
                        <?php 
                          wp_nav_menu([
                            'theme_location' => 'footer_menu',
                            'container' => 'div',
                            'container_class' => "block__group",
                            'menu_class' => 'footer__menu list'
                          ])
                        ?>
                        <!-- <ul class="footer__menu list">
                            <li class="list__item">
                                <a href="#" class="list__link">Homepage</a>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Silent Disco Huren</a>
                                <ul class="footer__submenu list">
                                    <li class="list__item">
                                        <a href="#" class="list__link">Silent Disco set per post</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#" class="list__link">Silent Disco voor evenementen</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#" class="list__link">Silent Disco feest met DJ</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#" class="list__link">Silent presentaties en seminars</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Silent Disco kopen</a>
                                <ul class="footer__submenu list">
                                    <li class="list__item">
                                        <a href="#" class="list__link">Ga naar de Silent Disco Shop</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#" class="list__link">Winkelmand</a>
                                    </li>
                                    <li class="list__item">
                                        <a href="#" class="list__link">Afrekenen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Over ons</a>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Contact Silent Disco</a>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Privacy Beleid</a>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Algemene voorwaarden</a>
                            </li>
                            <li class="list__item">
                                <a href="#" class="list__link">Offerte aanvragen</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__block">
                    <p>© HuurbijDaniek.nl 2022</p>
                </div>
                <div class="footer__block block-hide ">
                    <ul class="footer__social-media list list--horizontal">
                        <li class="list__item">
                            <a href="#" class="list__link social-media__link--facebook">
                                <svg height="20" width="20" fill="#fff">
                                    <use x="0" y="0" xlink:href="#icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" class="list__link social-media__link--facebook">
                                <svg height="20" width="20" fill="#fff">
                                    <use x="0" y="0" xlink:href="#icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" class="list__link social-media__link--facebook">
                                <svg height="20" width="20" fill="#fff">
                                    <use x="0" y="0" xlink:href="#icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" class="list__link social-media__link--facebook">
                                <svg height="20" width="20" fill="#fff">
                                    <use x="0" y="0" xlink:href="#icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="#" class="list__link social-media__link--facebook">
                                <svg height="20" width="20" fill="#fff">
                                    <use x="0" y="0" xlink:href="#icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__block footer__payment-methods block-hide">
                    <img src="<?= get_template_directory_uri()."/assets/img/payments.png";?>" alt="Betaalmiddelen"
                        width="171" height="32" />
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>

</html>