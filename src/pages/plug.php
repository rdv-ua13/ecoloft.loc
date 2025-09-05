<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>Ecoloft - Готовые модульные бани,  глемпинги и гостевые домики в Москве и Московской области</title>

    <link rel="preload" href="fonts/InterTight-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/InterTight-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/InterTight-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/InterTight-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css?v=<?=time();?>" type="text/css">

	<?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->

    <script defer src="js/main.js?v=<?=time();?>"></script>
</head>

<body>
    <header class="header plug-header">
        <div class="container">
            <div class="header-main">
                <a class="header-logo logo" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/logo.svg#logo"></use>
                    </svg>
                </a>

                <div class="header-contacts">
                    <div class="header-contacts__tel">
                        <a class="header-contacts__tel-num fz-sm" href="tel:+81234567890">
                            <span class="text-content">8 123 456-78-90</span>
                        </a>
                        <span class="header-contacts__tel-caption fz-caption-xs">Ежедневно с 9:00 до 20:00</span>
                    </div>
                    <div class="header-contacts__btns">
                        <button class="btn-reset btn header-contacts__btn header-contacts__call" type="button">
                            <span class="text-content">Заказать звонок</span>
                        </button>
                        <a class="btn-reset btn header-contacts__btn" href="javascript:;">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-tg"></use>
                            </svg>
                            <span class="text-content">Написать в Telegram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main plug-main">
        <div class="gap-lg-plus">
            <div class="container">
                <h1>
                    <span>Готовые модульные бани, глемпинги и гостевые домики </span>
                    <span class="color-green-700">в Москве и Московской области</span>
                </h1>
            </div>
        </div>
        <div class="gap-lg-plus">
            <div class="container">
                <div class="plug-countdown">
                    <div class="plug-countdown__title fz-subtitle-3">
                        Мы строим не только бани, но&nbsp;и&nbsp;новый&nbsp;сайт.
                        <br>
                        <br>
                        Скоро вы сможете познакомиться с нашими уютными и технологичными модулями поближе
                    </div>
                    <div class="plug-countdown__counter">
                        <div class="plug-countdown__counter-title">До запуска сайта осталось:</div>

                        <div class="plug-clock" id="clock">
                            <div class="plug-clock__time">
                                <span class="fz-subtitle-2" id="days">00</span>
                                <p class="fz-sm">дня</p>
                            </div>
                            <div class="plug-clock__time">
                                <span class="fz-subtitle-2" id="hours">00</span>
                                <p class="fz-sm">часов</p>
                            </div>
                            <div class="plug-clock__time">
                                <span class="fz-subtitle-2" id="minutes">00</span>
                                <p class="fz-sm">минут</p>
                            </div>
                            <div class="plug-clock__time">
                                <span class="fz-subtitle-2" id="seconds">00</span>
                                <p class="fz-sm">секунд</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="gap-xl">
            <div class="container">
                <img
                    loading="lazy"
                    class="image plug-image desktop-only"
                    src="img/plug-img.png"
                    width="1340"
                    height="520"
                    alt="Изображение блока"
                >
                <img
                    loading="lazy"
                    class="image plug-image mobile-only"
                    src="img/plug-img-mobile.png"
                    width="375"
                    height="549"
                    alt="Изображение блока"
                >
            </div>
        </div>
    </main>

    <footer class="footer plug-footer">
        <div class="container">
            <div class="plug-footer__content">
                <div class="plug-footer__row">
                    <div class="plug-footer__item">
                        <div class="plug-footer__title">Звоните, пишите</div>
                        <div class="plug-footer__main">
                            <a href="tel:+71234567890" class="fz-subtitle-2">+7 (123) 456-78-90</a>
                        </div>
                        <div class="plug-footer__caption">
                            <a href="mailto:info@ecloft.ru">info@ecloft.ru</a>
                        </div>
                    </div>
                    <div class="plug-footer__item">
                        <div class="plug-footer__title">Или приходите в наш офис</div>
                        <div class="plug-footer__main">
                            <span class="fz-subtitle-2">3-я ул. Строителей, дом&nbsp;25,&nbsp;офис&nbsp;12</span>
                        </div>
                        <div class="plug-footer__caption">
                            <div class="plug-footer__pin">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#pin"></use>
                                </svg>
                                <span class="text-content">Посмотреть на карте</span>
                            </div>
                        </div>
                    </div>
                    <div class="plug-footer__item">
                        <div class="plug-footer__main">
                            <div class="plug-footer__soc">
                                <div class="plug-footer__soc-title">Свяжитесь в социальных сетях</div>
                                <div class="plug-footer__soc-links">
                                    <a href="javascript:;" class="plug-footer__soc-link">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#soc-tg"></use>
                                        </svg>
                                    </a>
                                    <a href="javascript:;" class="plug-footer__soc-link">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#soc-vk"></use>
                                        </svg>
                                    </a>
                                    <a href="javascript:;" class="plug-footer__soc-link">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#soc-wa"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="plug-footer__row plug-footer__rights">
                    <div class="plug-footer__item">
                        <span class="fz-sm">&#169; ECOLOFT, <?=date('Y');?></span>
                    </div>
                    <div class="plug-footer__item mobile-only">
                        <a href="javascript:;" class="fz-sm">Политика конфиденциальности</a>
                    </div>
                    <div class="plug-footer__item mobile-only">
                        <a href="javascript:;" class="fz-sm">Пользовательское соглашение</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>