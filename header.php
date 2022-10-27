<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eventsbydaniek</title>

    <?php wp_head();?>

</head>

<body>
    <?php
        $slug = "modules/module";

        get_template_part($slug, "svg");
    ?>
    <header class="header section">
        <div class="header__container section__container">
            <div
                class="header__wrapper section__wrapper section__wrapper--justify--between section__wrapper--align--center">
                <div class="header__left">
                    <div class="header__logo">
                        <img src="<?= get_template_directory_uri()."/assets/img/Eventsbydaniek (2).png";?>"
                            height="60" />
                    </div>
                </div>
                <?php wp_nav_menu([
            'theme_location' => 'header_menu',
            'container' => 'div',
            'container_class' => "header__right",
            'menu_class' => 'header__menu list list--horizontal'
          ]);?>
                <div class="header__hamburger" id="header__hamburger">
                    <svg width="30" height="30" fill="#fff">
                        <use x="0" y="0" xlink:href="#icon-hamburger"></use>
                    </svg>
                    <p>Menu</p>
                </div>
                <div class="header__menu--mobile" id="header__menu--mobile">
                    <ul class="header__menu list">
                        <li class="list__item">
                            <a href="#" class="list__link">Homepage</a>
                        </li>
                        <li class="list__item">
                            <span class="list__btn--sub">
                                Silent Disco Huren
                                <svg width="14" height="18" fill="#FFF">
                                    <use x="0" y="0" xlink:href="#icon-arrow"></use>
                                </svg>
                            </span>
                            <ul class="header__submenu list">
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
                    </ul>
                </div>
            </div>
        </div>
    </header>