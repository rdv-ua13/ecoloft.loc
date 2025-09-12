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
	<?/*<script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->*/?>
    <?/*<script defer src="js/jquery.validate.js"></script>         <!-- validate -->*/?>
    <?/*<script defer src="js/messages_ru.js"></script>             <!-- validate -->*/?>
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
	<?/*<script defer src="js/select2.js"></script>                 <!-- select2 -->*/?>
	<?/*<script defer src="js/readmore.js"></script>                <!-- readmore -->*/?>
    <?/*<script defer src="js/flatpickr.min.js"></script>           <!-- flatpickr -->*/?>
    <?/*<script defer src="js/ru.js"></script>                      <!-- flatpickr -->*/?>
    <?/*<script defer src="js/nouislider.js"></script>              <!-- nouislider -->*/?>
	<?/*<script defer src="js/accordion.min.js"></script>               <!-- accordion -->*/?>
    <?/*<script defer src="js/sticky.min.js"></script>              <!-- sticky -->*/?>

    <script defer src="js/main.js?v=<?=time();?>"></script>
</head>

<? if (strpos($_SERVER["REQUEST_URI"], "index.php")) : ?>
<body class="index">
<? else : ?>
<body>
<? endif; ?>

    <header class="header">
        <div class="container">
            <div class="header-main">
                <a class="header-logo logo" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/logo.svg#logo"></use>
                    </svg>
                </a>

                <ul class="list-reset header-menu">
                    <li class="header-menu__item">
                        <a href="javascript:;" class="header-menu__link">Каталог</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="javascript:;" class="header-menu__link">Технологии</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="javascript:;" class="header-menu__link">Проекты</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="javascript:;" class="header-menu__link">О компании</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="javascript:;" class="header-menu__link">Отзывы</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="javascript:;" class="header-menu__link">Контакты</a>
                    </li>
                </ul>

                <div class="header-contacts">
                    <div class="header-contacts__tel">
                        <a class="header-contacts__tel-num fz-sm" href="tel:+81234567890">
                            <span class="text-content">8 123 456-78-90</span>
                        </a>
                        <span class="header-contacts__tel-caption fz-caption-xs">Ежедневно с 9:00 до 20:00</span>
                    </div>
                    <div class="header-contacts__btns">
                        <button class="btn-reset btn" type="button">
                            <span class="text-content">Заказать звонок</span>
                        </button>
                        <a class="btn-reset btn btn-square" href="javascript:;">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-vk"></use>
                            </svg>
                            <span class="text-content">Написать в Telegram</span>
                        </a>
                        <a class="btn-reset btn btn-square" href="javascript:;">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-yt"></use>
                            </svg>
                            <span class="text-content">Написать в Telegram</span>
                        </a>
                    </div>
                </div>

                <button
                        class="btn-reset btn btn-square burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#burger"></use>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-header">
            <div class="container mobile-menu-header-container">
                <a class="header-logo logo" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/logo.svg#logo"></use>
                    </svg>
                </a>

                <div class="btn-reset btn btn-square mobile-menu-close" data-menu-close>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#cross"></use>
                    </svg>
                </div>
            </div>
        </div>

        <ul class="list-reset mobile-menu-list">
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">Главная</span>
                </a>
            </li>
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">Каталог</span>
                </a>
            </li>
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">Технологии</span>
                </a>
            </li>
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">Проекты</span>
                </a>
            </li>
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">О компании</span>
                </a>
            </li>
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">Отзывы</span>
                </a>
            </li>
            <li class="mobile-menu-list__item">
                <a class="mobile-menu-list__link" href="javascript:;">
                    <span class="text-content">Контакты</span>
                </a>
            </li>
        </ul>

        <div class="mobile-menu-footer">
            <div class="container">
                <div class="mobile-menu-footer-contacts">
                    <div class="mobile-menu-footer-contacts__tel">
                        <a class="mobile-menu-footer-contacts__tel-num fz-sm" href="tel:+81234567890">
                            <span class="text-content">8 123 456-78-90</span>
                        </a>
                        <span class="mobile-menu-footer-contacts__tel-caption fz-caption-xs">Ежедневно с 9:00 до 20:00</span>
                    </div>
                    <div class="mobile-menu-footer-contacts__btns">
                        <button class="btn-reset btn flex-grow-1" type="button">
                            <span class="text-content">Заказать звонок</span>
                        </button>
                        <a class="btn-reset btn btn-square btn-square--sm" href="javascript:;">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-vk"></use>
                            </svg>
                            <span class="text-content">Написать в Telegram</span>
                        </a>
                        <a class="btn-reset btn btn-square btn-square--sm" href="javascript:;">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-yt"></use>
                            </svg>
                            <span class="text-content">Написать в Telegram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main">