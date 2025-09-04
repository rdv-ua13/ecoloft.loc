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
<header class="header fixed-block">
    <div class="header-top">
        <div class="container header-container">
            <div class="header-top-nav">
                <ul class="list-reset header-top-nav__list">
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Каталог</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Производство</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Наши работы</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Дилерам</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Инфоцентр</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Услуги</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Контакты</span></a></li>
                </ul>
            </div>

            <div class="header-social social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в WhatsApp">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-wa.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-tg.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Напишите нам на почту">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-email.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header-contacts">
                <a class="header-contacts__tel" href="tel:+74956467094">
                    <svg class="icon icon-fill">
                        <use href="img/call.svg#call"></use>
                    </svg>
                    <span class="text-content">+7 495 646-70-94</span>
                </a>
            </div>
        </div>
    </div>

    <div class="header-nav">
        <div class="container header-container header-nav-container">
            <div class="header-main">
                <a class="header-logo logo" href="javascript:;">
                    <img
                            loading="lazy"
                            class="image"
                            src="img/logo.svg#logo"
                            width="175"
                            height="50"
                            alt="Хоббика - производство садовой и парковой мебели!"
                    >
                </a>

                <div class="header-search">
                    <form id="" method="" action="javascript:;">
                        <div class="input-wrapper has-icon-l">
                            <input
                                    id="ui-input-search-example-1"
                                    class="input-reset input input-search"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Скамейка или 14232 (артикул)..."
                                    onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');"
                                    readonly
                            >
                            <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                            <button class="btn-reset btn btn-sm btn-primary" type="button">
                                <span class="text-content">Найти</span>
                            </button>
                        </div>
                    </form>
                    <div class="header-search-results">
                        <div class="search-results">
                            <div class="search-results__suggest">
                                <div class="search-results__suggest-wrapper">
                                    <div class="search-results__suggest-list">
                                        <div class="search-results__suggest-content">
                                            <div class="card card-product" data-removable>
                                                <a class="card__view" href="javascript:;">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/category-5.png"
                                                            width="70"
                                                            height="70"
                                                            alt="Изображение блока"
                                                    >
                                                </a>
                                                <div class="card__descr">
                                                    <div class="card__caption">
                                                        <div class="tag-list">
                                                            <span class="tag">9566603</span>
                                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                                            <span class="stock in-stock">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                                            </svg>
                                                            <span>Товар в наличии</span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                                    <div class="card__info">
                                                        <div class="card__compound">
                                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__price reduced">
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">2 956,80
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">1 478,40
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                            за шт.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>

                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-product" data-removable>
                                                <a class="card__view" href="javascript:;">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/category-5.png"
                                                            width="70"
                                                            height="70"
                                                            alt="Изображение блока"
                                                    >
                                                </a>
                                                <div class="card__descr">
                                                    <div class="card__caption">
                                                        <div class="tag-list">
                                                            <span class="tag">9566603</span>
                                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                                            <span class="stock in-stock">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                                            </svg>
                                                            <span>Товар в наличии</span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                                    <div class="card__info">
                                                        <div class="card__compound">
                                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__price reduced">
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">2 956,80
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">1 478,40
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                            за шт.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>

                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-product" data-removable>
                                                <a class="card__view" href="javascript:;">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/category-5.png"
                                                            width="70"
                                                            height="70"
                                                            alt="Изображение блока"
                                                    >
                                                </a>
                                                <div class="card__descr">
                                                    <div class="card__caption">
                                                        <div class="tag-list">
                                                            <span class="tag">9566603</span>
                                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                                            <span class="stock in-stock">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                                            </svg>
                                                            <span>Товар в наличии</span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                                    <div class="card__info">
                                                        <div class="card__compound">
                                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__price reduced">
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">2 956,80
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">1 478,40
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                            за шт.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>

                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-results__suggest-content">
                                            <div class="search-results__suggest-title">Комплекты</div>
                                            <div class="card card-product" data-removable>
                                                <a class="card__view" href="javascript:;">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/category-5.png"
                                                            width="70"
                                                            height="70"
                                                            alt="Изображение блока"
                                                    >
                                                </a>
                                                <div class="card__descr">
                                                    <div class="card__caption">
                                                        <div class="tag-list">
                                                            <span class="tag">9566603</span>
                                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                                            <span class="stock in-stock">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                                            </svg>
                                                            <span>Товар в наличии</span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                                    <div class="card__info">
                                                        <div class="card__compound">
                                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__price reduced">
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">2 956,80
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">1 478,40
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                            за шт.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>

                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-product" data-removable>
                                                <a class="card__view" href="javascript:;">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/category-5.png"
                                                            width="70"
                                                            height="70"
                                                            alt="Изображение блока"
                                                    >
                                                </a>
                                                <div class="card__descr">
                                                    <div class="card__caption">
                                                        <div class="tag-list">
                                                            <span class="tag">9566603</span>
                                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                                            <span class="stock in-stock">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                                            </svg>
                                                            <span>Товар в наличии</span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                                    <div class="card__info">
                                                        <div class="card__compound">
                                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__price reduced">
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">2 956,80
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">1 478,40
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                            за шт.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>

                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-profile">
                    <ul class="list-reset header-profile__list">
                        <li>
                            <button class="btn-reset btn btn-header" data-fancybox data-src="#modal-auth">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-user"></use>
                                </svg>
								<?/*<span class="text-content">Войти</span>*/?>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">1</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-favourite"></use>
                                </svg>
                                <?/*<span class="text-content">Избранное</span>*/?>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">1</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-cart"></use>
                                </svg>
                                <?/*<span class="text-content price">152 800 ₽</span>*/?>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="header-categories">
                    <a class="btn-reset btn btn-primary header-categories__catalog" href="javascript:;">
                        <svg class="icon icon-stroke">
                            <use href="img/sprite.svg#stroke_catalog"></use>
                        </svg>
                        <span class="text-content">Каталог</span>
                    </a>
                    <div class="header-categories__list">
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Скамейки</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Урны</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">навесы</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">детские игровые</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">дачная мебель</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Мебель для кафе</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Контейнерные площадки</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">в наличии</span>
                        </a>
                    </div>
                    <a class="btn-reset btn header-categories__item header-categories__item--more" href="javascript:;">
                        <span class="text-content">Еще...</span>
                    </a>
                </div>

                <button
                        class="btn-reset burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#menu"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" data-menu>
    <div class="mobile-menu-close" data-menu-close>
        <svg class="icon icon-fill">
            <use href="img/sprite.svg#cross"></use>
        </svg>
    </div>

    <div class="mobile-menu-header">
        <div class="mobile-menu-container">
            <div class="mobile-menu-catalog">
                <button
                        class="btn-reset btn btn-primary mobile-menu-catalog-spoiler"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-catalog-spoiler
                        data-overlay-transparent
                >
                    <svg class="icon icon-stroke">
                        <use href="img/sprite.svg#stroke_category"></use>
                    </svg>
                    <span class="text-content">Каталог товаров</span>
                </button>
            </div>
        </div>
    </div>

    <ul class="list-reset mobile-menu-list">
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="javascript:;">
                <span class="text-content">производство</span>
            </a>
        </li>
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="javascript:;">
                <span class="text-content">наши работы</span>
            </a>
        </li>
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="javascript:;">
                <span class="text-content">дилерам</span>
            </a>
        </li>
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="javascript:;">
                <span class="text-content">инфоцентр</span>
            </a>
        </li>
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="javascript:;">
                <span class="text-content">услуги</span>
            </a>
        </li>
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="javascript:;">
                <span class="text-content">контакты</span>
            </a>
        </li>
    </ul>

    <div class="mobile-menu-container menu-footer">
        <div class="menu-login">
            <button class="btn-reset btn btn-extra" data-fancybox data-src="#modal-reg">
                <span class="text-content">Регистрация</span>
            </button>
            <button class="btn-reset btn btn-primary" data-fancybox data-src="#modal-auth">
                <span class="text-content">Вход</span>
            </button>
        </div>

        <div class="menu-contacts">
            <div class="header-contacts">
                <a class="header-contacts__item header-contacts__tel" href="tel:+74956467094">
                    <svg class="icon icon-fill">
                        <use href="img/call.svg#call"></use>
                    </svg>
                    <span class="text-content">+7 495 646-70-94</span>
                </a>
                <a class="header-contacts__office link link-tdu link-dashed" href="javascript:;"><span>заказать звонок</span></a>
            </div>

            <div class="social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в WhatsApp">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-wa.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-tg.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Напишите нам на почту">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-email.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="menu-catalog" data-catalog>
    <div class="menu-catalog-header">
        <div class="menu-catalog-title h4">
            <span data-catalog-title="Каталог">Каталог</span>
        </div>
        <div class="menu-catalog-close" data-catalog-close>
            <svg class="icon icon-fill">
                <use href="img/sprite.svg#cross"></use>
            </svg>
        </div>
    </div>
    <div class="menu-catalog-root">
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link selected" href="javascript:;" data-submenu-section="0">
                <span class="text-content">Скамейки</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;" data-submenu-section="1">
                <span class="text-content">Урны</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">Навесы</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">Детские игровые</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">Дачная мебель</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">Мебель для кафе</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">Контейнерные площадки</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">В наличии</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
        <div class="menu-catalog-root-item">
            <a class="menu-catalog-root-link" href="javascript:;">
                <span class="text-content">Распродажа</span>
                <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
            </a>
        </div>
    </div>
    <div class="mobile-menu-container menu-footer">
        <div class="menu-login">
            <button class="btn-reset btn btn-extra" data-fancybox data-src="#modal-reg">
                <span class="text-content">Регистрация</span>
            </button>
            <button class="btn-reset btn btn-primary" data-fancybox data-src="#modal-auth">
                <span class="text-content">Вход</span>
            </button>
        </div>

        <div class="menu-contacts">
            <div class="header-contacts">
                <a class="header-contacts__item header-contacts__tel" href="tel:+74956467094">
                    <svg class="icon icon-fill">
                        <use href="img/call.svg#call"></use>
                    </svg>
                    <span class="text-content">+7 495 646-70-94</span>
                </a>
                <a class="header-contacts__office link link-tdu link-dashed" href="javascript:;"><span>заказать звонок</span></a>
            </div>

            <div class="social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в WhatsApp">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-wa.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-tg.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Напишите нам на почту">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-email.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu-panel">
    <div class="mobile-menu-panel__toolbar">
        <ul class="list-reset mobile-menu-panel__list">
            <li>
                <a class="btn-reset btn btn-header" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-home2"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="btn-reset btn btn-header" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/colored-category.svg#colored-category"></use>
                    </svg>
                </a>
            </li>
            <li>
                <button class="btn-reset btn btn-header">
                    <span class="btn-header__count">1</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-favourite"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button class="btn-reset btn btn-header" data-fancybox data-src="#modal-auth">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-user"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button class="btn-reset btn btn-header">
                    <span class="btn-header__count">1</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-cart"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
</div>

<main class="main">