<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/InterTight-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/InterTight-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/InterTight-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/InterTight-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css?v=<?=time();?>" type="text/css">

	<?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                      <!-- jquery -->
	<?/*<script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->*/?>
	<?/*<script defer src="js/jquery.validate.js"></script>         <!-- validate -->*/?>
	<?/*<script defer src="js/messages_ru.js"></script>             <!-- validate -->*/?>
    <script defer src="js/popper.js"></script>                      <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>               <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>            <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>                <!-- fancybox -->
	<?/*<script defer src="js/select2.js"></script>                 <!-- select2 -->*/?>
	<?/*<script defer src="js/readmore.js"></script>                <!-- readmore -->*/?>
	<?/*<script defer src="js/flatpickr.min.js"></script>           <!-- flatpickr -->*/?>
	<?/*<script defer src="js/ru.js"></script>                      <!-- flatpickr -->*/?>
	<?/*<script defer src="js/nouislider.js"></script>              <!-- nouislider -->*/?>
	<script defer src="js/accordion.min.js"></script>               <!-- accordion -->
	<?/*<script defer src="js/sticky.min.js"></script>              <!-- sticky -->*/?>

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js?v=<?=time();?>"></script>
</head>
<body>
    <div class="ui">
        <div class="container-fluid">
            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Colors</h3>

                <div class="ui-row">
                    <div class="ui-color">
                        <span class="ui-color__item tooltip" data-tippy-content="--black-color" style="background-color: var(--black-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--white-color" style="background-color: var(--white-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--text-primary" style="background-color: var(--text-primary);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--text-secondary" style="background-color: var(--text-secondary);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--text-caption" style="background-color: var(--text-caption);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-brand" style="background-color: var(--surface-brand);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-gray1" style="background-color: var(--surface-gray1);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-gray2" style="background-color: var(--surface-gray2);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-gray3" style="background-color: var(--surface-gray3);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-gray4" style="background-color: var(--surface-gray4);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-gray5" style="background-color: var(--surface-gray5);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--surface-gray6" style="background-color: var(--surface-gray6);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-red" style="background-color: var(--surface-red);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-orange" style="background-color: var(--surface-orange);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-green" style="background-color: var(--surface-green);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--surface-green2" style="background-color: var(--surface-green2);"></span>
                    </div>
                </div>
            </div>

            <?/*<div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Gaps</h3>

                <div class="ui-row">
                    <div class="fz-sm">
                        <pre>
@media (min-width: 992px) {
    .gap-xxxs { margin-bottom: 16px !important; }
    .gap-xxs { margin-bottom: 20px !important; }
    .gap-xs { margin-bottom: 24px !important; }
    .gap-sm { margin-bottom: 32px !important; }
    .gap-md { margin-bottom: 40px !important; }
    .gap-lg { margin-bottom: 60px !important; }
    .gap-xl { margin-bottom: 80px !important; }
}
@media (max-width: 991px) {
    .gap-xxxs { margin-bottom: 8px !important; }
    .gap-xxs { margin-bottom: 12px !important; }
    .gap-xs { margin-bottom: 16px !important; }
    .gap-sm { margin-bottom: 24px !important; }
    .gap-md, .gap-lg, .gap-xl { margin-bottom: 32px !important; }
}
                        </pre>
                    </div>
                </div>
            </div>*/?>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Icons*</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">
                            .icon-fill - строго запрещает свойство "stroke"
                            <br>
                            .icon-stroke - строго запрещает свойство "fill"
                        </div><br>
                        <div class="fz-subtitle">использование use ==> sprite.svg#id_из_тултип / file-name.svg#file-name</div>
                        <div class="fz-sm">
                            <pre>
.icon-xs { width: 12px!important; height: 12px!important; }
.icon-sm { width: 16px!important; height: 16px!important; } <-- default
.icon-md { width: 20px!important; height: 20px!important; }
.icon-lg { width: 24px!important; height: 24px!important; }
.icon-xl { width: 28px!important; height: 28px!important; }
                            </pre>
                        </div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="#arrow-left">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#arrow-left"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-down">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#search">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#catalog">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#catalog"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#menu">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cross">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#box-3d">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#box-3d"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#box-cancel">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#box-cancel"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#box-check">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#box-check"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#clock">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#clock"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#copy">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#copy"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#delivery">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#delivery"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#email">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#email"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#heart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#heart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#lovely">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#lovely"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#stack">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#stack"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#wallet">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#wallet"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filter">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filter"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#dots">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#dots"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#sale">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#sale"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#hbk">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#hbk"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-home">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-home"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-catalog">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-catalog"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-cart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-cart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-chart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-chart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-heart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-heart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-user">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-user"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-pt">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-pt"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-tg">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-tg"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-vk">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-vk"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-wa">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-wa"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-yt">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-yt"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#share">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#share"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#printer">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#printer"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#barcode">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#barcode"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#minus">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#minus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#plus">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#plus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#info">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#info"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#star">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#star"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#play">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#play"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#3d">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#3d"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Buttons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">default</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-primary">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-secondary">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-extra">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra-2'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-extra-2">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-transparent'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-transparent">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-transparent-bordered'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-transparent-bordered">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-transparent-bordered-2'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-transparent-bordered-2">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-shapeless'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-shapeless">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Кнопка</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">other buttons</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-square'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-square">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#arrow-left"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Links*</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary" href="javascript:;">Ссылка</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-invert'">
                            <!--start ui content-->
                            <a class="link link-invert" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-secondary'">
                            <!--start ui content-->
                            <a class="link link-secondary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu link-primary'">
                            <!--start ui content-->
                            <a class="link link-tdu link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu link-dashed link-primary'">
                            <!--start ui content-->
                            <a class="link link-tdu link-dashed link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary link-dropdown" href="javascript:;">
                                <span class="text-content">Витамины и добавки</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Controls</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">tag default</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <div class="tag-bar">
                            <ul class="list-reset tag-bar__list">
                                <li class="tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="UI[TAGS][]"
                                                value=""
                                        >
                                        <span class="tag  tooltip" data-tippy-content="class='tag'">
                                            <span class="text-content">Текст</span>
                                        </span>
                                    </label>
                                </li>
                                <li class="tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="UI[TAGS][]"
                                                value=""
                                        >
                                        <span class="tag tag--sm  tooltip" data-tippy-content="class='tag tag--sm'">
                                            <span class="text-content">Текст</span>
                                        </span>
                                    </label>
                                </li>
                                <li class="tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="UI[TAGS][]"
                                                value=""
                                        >
                                        <span class="tag tag--yellow  tooltip" data-tippy-content="class='tag tag--yellow'">
                                            <span class="text-content">Текст</span>
                                        </span>
                                    </label>
                                </li>
                                <li class="tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="UI[TAGS][]"
                                                value=""
                                        >
                                        <span class="tag tag--red  tooltip" data-tippy-content="class='tag tag--red'">
                                            <span class="text-content">Текст</span>
                                        </span>
                                    </label>
                                </li>
                                <li class="tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="UI[TAGS][]"
                                                value=""
                                                checked
                                        >
                                        <span class="tag tag--green  tooltip" data-tippy-content="class='tag tag--green'">
                                            <span class="text-content">Текст</span>
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

				<?/*<div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">tag slider</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <div class="slider-out">
                            <div class="tag-bar swiper" data-tag-bar-slider>
                                <div class="swiper-wrapper tag-bar__list">
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag tag--border">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag tag--border">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag tag--yellow">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGSLIDER][]"
                                                    value=""
                                            >
                                            <span class="tag tag--green">
                                                <svg class="icon icon-fill icon-md">
                                                    <use href="img/sprite.svg#sale"></use>
                                                </svg>
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>*/?>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Fields*</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">input</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="default">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper has-icon-l has-icon-r">
                                    <input
                                            id="ui-input-search-example-1"
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                    >
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                                        <svg class="icon icon-md icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-r">
                                        <svg class="icon icon-md icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="search">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper input-wrapper-split has-icon-l">
                                    <input
                                            id="ui-subscribe-input"
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Введите ваш email"
                                            autocomplete="off"
                                    >
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-l">
                                        <svg class="icon icon-md icon-fill">
                                            <use href="img/sprite.svg#email"></use>
                                        </svg>
                                    </label>
                                    <button class="btn-reset btn btn-md btn-secondary" type="submit">
                                        <span class="text-content">Подписаться</span>
                                    </button>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <?/*<div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">input flatpickr (date)</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='input flatpickr">
                            <!--start ui content-->
                            <span class="input-wrapper input-wrapper--flatpickr">
                                <input
                                        id=""
                                        class="input-reset input flatpickr"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Любая дата"
                                >
                            </span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>*/?>
            </div>
        </div>

        <br>
    </div>
</body>
</html>