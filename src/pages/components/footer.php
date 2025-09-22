    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__column">
                    <div class="h2 desktop-only">Остались вопросы?</div>
                    <div class="footer__row">
                        <div class="footer__item">
                            <div class="footer__title">Звоните, пишите</div>
                            <div class="footer__main">
                                <a href="tel:+71234567890" class="fz-subtitle-2">+7 (123) 456-78-90</a>
                            </div>
                            <div class="footer__caption">
                                <a href="mailto:info@ecloft.ru">info@ecloft.ru</a>
                            </div>
                        </div>
                        <div class="footer__item">
                            <div class="footer__title">Или приходите в наш офис</div>
                            <div class="footer__main">
                                <span class="fz-subtitle-2">3-я ул. Строителей, дом&nbsp;25,&nbsp;офис&nbsp;12</span>
                            </div>
                            <div class="footer__caption">
                                <div class="footer__pin">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#pin"></use>
                                    </svg>
                                    <span class="text-content">Посмотреть на карте</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer__item">
                            <div class="footer__main">
                                <div class="footer__soc">
                                    <div class="footer__title footer__soc-title">Свяжитесь в социальных сетях</div>
                                    <div class="footer__soc-links">
                                        <a href="javascript:;" class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#soc-tg"></use>
                                            </svg>
                                        </a>
                                        <a href="javascript:;" class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#soc-vk"></use>
                                            </svg>
                                        </a>
                                        <a href="javascript:;" class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#soc-wa"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__row footer__rights">
                    <div class="footer__item">
                        <span class="fz-sm">&#169; ECOLOFT, <?=date('Y');?></span>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:;" class="fz-sm">Политика конфиденциальности</a>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:;" class="fz-sm">Пользовательское соглашение</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<?/*
    <div class="preloader">
        <div class="preloader__inner">
            <div class="preloader__icon"></div>
            <div class="preloader__text">
                <span>Версия разрабатывается...</span>
            </div>
        </div>
    </div>
    <script>
        function loading(isShow = true, text) {
            let $loading = $('.preloader');

            $loading.find('.preloader__text span').text(text);

            if(isShow) {
                $loading.fadeIn(600);
                $('body').css('overflow', 'hidden');
            }
            else {
                $loading.fadeOut(600);
                $('body').css('overflow', '');
            }
        }
    </script>*/?>

	<?/*php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/modals.php"); ?>*/?>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
</body>
</html>