document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initHeaderScroll();
    this.initBurger();
    this.initCatalogMenu();
    this.initOverlay();
    this.initBasicSlider();
    this.initSliders();
    this.initBasicTabs();
    /*this.initDropdownMenu();*/
    /*this.initBasicTabSlider();*/
    /*this.initSticky()*/;
    /*this.initMiniSlider();*/
    /*this.initSelect2();*/
    /*this.initSelect2Unsearch();*/
    /*this.initReadmore();*/
    /*this.initClipboard();*/
    this.initTooltips();
    this.initCardActTooltips();
    this.initInputSearch();
    /*this.initMaskedInput();*/
    this.initSwitchContent();
    /*this.initNotification();*/
    /*this.initCatalogPriceSlider();*/
    /*this.initCatalogSidebarFilter();*/
    /*this.initCatalogSidebarApplyFilter();*/
    /*this.initCatalogContentSort();*/
    /*this.initContactsMap();*/

    this.initContactsAccordion();
    this.initFancyboxBehavior();
    /*this.initPasswordSwitcher();*/
    /*this.initDatepicker();*/
    /*this.setCardProductMore();*/
    /*this.initSmoothScrollTo();*/
    this.initCartQuantity();
    this.initCheckall();
    this.initCountdown();
};

// Initialization device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialization header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();
    $(window).resize(setHeaderScroll);

    function setHeaderScroll() {
        let sensDistance = 1;

        if (window.matchMedia('(min-width: 1200px)').matches) {
            sensDistance = 12;
        }

        if ($(window).scrollTop() > sensDistance) {
            $('.header:not(.plug-header)').addClass('scrolled');
        }
        else {
            $('.header:not(.plug-header)').removeClass('scrolled');
        }
    }
};

// Initialization burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            $('body').addClass('overflow-hidden');
        }
        else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            $('body').removeClass('overflow-hidden');
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        $('body').removeClass('overflow-hidden');
    }
};

// Initialize menu call
application.prototype.initCatalogMenu = function () {
    const body = $('body');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalog = $('[data-catalog]');
    const catalogClose = $('[data-catalog-close]');
    let overlayTrigger = $('[data-overlay-transparent]');

    catalogSpoiler.on('click', () => {
        setCatalogSwitch();
    });

    catalogClose.on('click', () => {
        setClose();
    });

    setOverlay();

    $(window).on('resize', function () {
        setClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setClose();
        }
    });

    function setCatalogSwitch() {
        if (catalog.hasClass('active') && catalogSpoiler.hasClass('active')) {
            catalogSpoiler.attr('aria-expanded', 'false');
            catalogSpoiler.attr('aria-label', 'Открыть меню');
            catalogSpoiler.removeClass('active');
            catalog.removeClass('active');
            $('body').removeClass('overflow-hidden');
        }
        else {
            catalogSpoiler.attr('aria-expanded', 'true');
            catalogSpoiler.attr('aria-label', 'Закрыть меню');
            catalogSpoiler.addClass('active');
            catalog.addClass('active');
            $('body').addClass('overflow-hidden');
        }
    }

    function setClose() {
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        catalogSpoiler.removeClass('active');
        catalog.removeClass('active');
        $('.overlay-transparent').remove();

        $('body').removeClass('overflow-hidden');
    }

    function setOverlay() {
        overlayTrigger.on('click', function () {
            $('<div class="overlay-transparent"></div>').insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay-transparent').is(e.target)) {
                setClose();

                $('[data-menu-spoiler]').attr('aria-expanded', 'false');
                $('[data-menu-spoiler]').attr('aria-label', 'Открыть меню');
                $('[data-menu-spoiler]').removeClass('active');
                $('[data-menu]').removeClass('active');

                $('body').removeClass('overflow-hidden');
                $('.overlay').remove();
            }
        });
    }
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            $('body').addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });

        function setTargetAction() {
            $('body').removeClass('overflow-hidden');
            $('.overlay').remove();
        }
    }
};

// Initialization dropdown menu
application.prototype.initDropdownMenu = function () {
    if ($('.dropdown-container').length) {
        let spoiler = $('.dropdown-spoiler');
        let dropdown = $('.dropdown-menu');

        spoiler.on('mouseover', function () {
            $(this).addClass('active');
            $(this).next('.dropdown-menu').addClass('active');
        });
        dropdown.on('mouseover', function () {
            $(this).prev('.dropdown-spoiler').addClass('active');
            $(this).addClass('active');
        });
        spoiler.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
        dropdown.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let basicSlider = null;
        let spaceBetween = 12;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            // spaceBetween
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(slider.eq(i).is('[data-basic-slider-tabs]')) {
                    spaceBetween = 48;
                }
                else {
                    spaceBetween = 12;
                }
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                if(slider.eq(i).is('[data-basic-slider-tabs]')) {
                    spaceBetween = 20;
                }
                else {
                    spaceBetween = 12;
                }
            }

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: spaceBetween,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization basic tab slider
application.prototype.initBasicTabSlider = function () {
    if ($('[data-tabs-slider]').length) {
        const slider = $('[data-tabs-slider]');
        let basicTabSlider = null;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            basicTabSlider = new Swiper('.basic-slider-wrap-' + i + ' [data-tabs-slider]', {
                slidesPerView: 'auto',
                spaceBetween: 24,
                breakpoints: {
                    992: {
                        spaceBetween: 40,
                    },
                }
            });
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }

    if ($('.product-category').length) {
        let $slides = $('.product-category .swiper-slide').length;
        let $initialSlide = ($slides / 2) - 1;

        const productCategorySlider = new Swiper('.product-category', {
            slidesPerView: 'auto',
            spaceBetween: 16,
            direction: 'horizontal',
            scrollbar: {
                el: '.product-category .swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                992: {
                    initialSlide: $initialSlide,
                },
            }
        });
    }

    if ($('.banner-slider').length) {
        const slider = $('.banner-slider');
        let bannerSlider = null;
        let bannerSliderSettings = null;

        slider.each(function (i) {
            slider.eq(i).closest('.banner-slider-wrap').addClass('banner-slider-wrap-' + i);

            if($(this).is('.nav-none')) {
                bannerSliderSettings = {
                    slidesPerView: 1,
                    autoHeight: true,
                    effect: 'fade',
                    watchOverflow: true,
                    navigation: false,
                    pagination: {
                        el: '.banner-slider-wrap-' + i + ' .swiper-pagination',
                        clickable: true,
                    },
                }
            }
            else {
                bannerSliderSettings = {
                    slidesPerView: 1,
                    autoHeight: true,
                    effect: 'fade',
                    watchOverflow: true,
                    navigation: {
                        nextEl: '.banner-slider-wrap-' + i + ' .swiper-button-next',
                        prevEl: '.banner-slider-wrap-' + i + ' .swiper-button-prev',
                    },
                    pagination: {
                        el: '.banner-slider-wrap-' + i + ' .swiper-pagination',
                        clickable: true,
                    },
                }
            }

            bannerSlider = new Swiper('.banner-slider-wrap-' + i + ' .banner-slider', bannerSliderSettings);
        });
    }

    if ($('.index-events-wrap').length) {
        const slider = $('.index-events-wrap .swiper');
        let indexEventsSlider = null;

        const indexEventsSliderSetting = {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 8,
            direction: 'horizontal',
            pagination: {
                el: '.index-events-wrap .swiper-pagination',
                clickable: true,
            },
        };

        reinitSlider();
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(indexEventsSlider !== null) {
                    indexEventsSlider.destroy(true, true);
                    indexEventsSlider = null;
                }
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                slider.each(function (i) {
                    slider.eq(i).closest('.index-events-wrap').addClass('index-events-wrap-' + i);

                    indexEventsSlider = new Swiper('.index-events-wrap-' + i + ' .swiper', indexEventsSliderSetting);
                });

            }
        }


    }




    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            slider.eq(i).addClass('tag-bar-slider-' + i);

            let tagbarSlider = new Swiper('.tag-bar-slider-' + i, {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
                breakpoints: {
                    992: {
                        spaceBetween: 8,
                    },
                }
            });
        });
    }

    if ($('[data-tag-bar-slider-mobile]').length) {
        const slider = $('[data-tag-bar-slider-mobile]');
        let tagbarSliderMobile = null;

        slider.each(function (i) {
            slider.eq(i).addClass('tag-bar-slider-' + i);

            const tagbarSliderSettings = {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
            };

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSliderMobile !== null) tagbarSliderMobile.destroy(true, true);
                    tagbarSliderMobile = null;
                }
                else if (window.matchMedia('(max-width: 991px)').matches) {
                    tagbarSliderMobile = new Swiper('[data-tag-bar-slider-mobile].tag-bar-slider-' + i, tagbarSliderSettings);
                }
            }
        });
    }

    if ($('[data-projects-slider]').length) {
        const projectSlider = new Swiper('[data-projects-slider]', {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 16,
            direction: 'horizontal',
            navigation: {
                nextEl: '.hbk-projects__view .swiper-button-next',
                prevEl: '.hbk-projects__view .swiper-button-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
            }
        });
    }

    if ($('[data-banner-offer-slider]').length) {
        const bannerOfferSlider = new Swiper('[data-banner-offer-slider]', {
            slidesPerView: 1,
            autoHeight: true,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.banner-offer .swiper-button-next',
                prevEl: '.banner-offer .swiper-button-prev',
            },
            pagination: {
                el: '.banner-offer .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                992: {
                    pagination: {
                        el: '',
                        clickable: false,
                    }
                },
            }
        });
    }

    if ($('[data-colors]').length) {
        const slider = $('[data-colors]');
        let sliderMobile = null;

        slider.each(function (i) {
            slider.eq(i).addClass('choose-color-slider-' + i);

            const sliderSettings = {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
            };

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(sliderMobile !== null) sliderMobile.destroy(true, true);
                    sliderMobile = null;
                }
                else if (window.matchMedia('(max-width: 991px)').matches) {
                    sliderMobile = new Swiper('[data-colors].choose-color-slider-' + i, sliderSettings);
                }
            }
        });
    }

    if ($('.detail-thumb-slider').length) {
        let detailThumbSliderPointer = new Swiper('.detail-thumb-slider-pointer', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            direction: "horizontal",
            freeMode: true,
            watchSlidesProgress: true
        });
        let detailThumbSlider = new Swiper('.detail-thumb-slider', {
            slidesPerView: 1,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.detail-thumb-slider .swiper-button-next',
                prevEl: '.detail-thumb-slider .swiper-button-prev',
            },
            thumbs: {
                swiper: detailThumbSliderPointer,
            }
        });
    }
};

// Initialization sticky block
application.prototype.initSticky = function () {
    if ($('[data-sticky]').length) {
        let sticky = new Sticky('[data-sticky]');
    }
};

// Initialization mini slider - change images on mouse movement
application.prototype.initMiniSlider = function () {
    if ($('.mini-slider').length) {
        $('.mini-slider').each(function(index, element) {
            if (!$(element).hasClass('init-slider')) {
                $(element).addClass('init-slider');
                let slideLength = $(element).find('.mini-slider__slide').length;
                for (let i = 0; i < slideLength; i++) {
                    $(element).find('.mini-slider__dots').append('<li class="mini-slider__dot"></li>');
                }
                $(element).find('.mini-slider__slide:eq(0)').find('.mini-slider__img').css('opacity', '1');
                $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(0)').addClass('mini-slider__dot--active');
                $(element).find('.mini-slider__slide').on('touchstart mouseover', function(event) {
                    let thisOp = $(element).find('.mini-slider__slide').index(this);
                    $(element).find('.mini-slider__slide').find('.mini-slider__img').css('opacity', '0');
                    $(element).find(this).find('.mini-slider__img').css('opacity', '1');

                    $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                    $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + thisOp + ')').addClass('mini-slider__dot--active');
                    event.stopPropagation();
                    event.preventDefault();
                });
            }
        });
    }
};

// Initialization select2 plagin
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2();
    }
};
// Initialization select2 plagin without search
application.prototype.initSelect2Unsearch = function () {
    if ($('.js-select2-unsearch').length) {
        $('.js-select2-unsearch').select2({
            minimumResultsForSearch: -1
        });
    }
};

// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = $(this).data('spoiler-more');
            let currentLessText = $(this).data('spoiler-less');
            let defaultHeight = 340;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data('collapsed-height');

            if ($(this).is('[data-spoiler-more]')) {
                currentMoreText = currentMoreText;
                currentLessText = defaultLessText;
            }
            else if ($(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = currentLessText;
            }
            else if (!$(this).is('[data-spoiler-more]') && !$(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            if ($(this).find('.spoiler-content').height() > defaultHeight) {
                $(this).addClass('spoiler-scrolled');
            }

            spoiler.eq(i).addClass('spoiler-' + i);
            $('.spoiler-' + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a class="link link-secondary link-tdu link-dashed" href="javascript:;">\n' +
                    '           <span class="text-content">' + currentMoreText + '</span>\n' +
                    '       </a>',
                lessLink: '<a class="link link-secondary link-tdu link-dashed" href="javascript:;">\n' +
                    '           <span class="text-content">' + currentLessText + '</span>\n' +
                    '       </a>',
            });
        });
    }
};

// Initialization clipboard
application.prototype.initClipboard = function () {
    if ($('[data-clipboard]').length) {
        let clipboardBtn = $('.clipboard-trigger');

        clipboardBtn.on('click', function () {
            let clipboardValue = $(this).closest('[data-clipboard]').find('.clipboard-target');
            copyToClipboard(clipboardValue);
        });

        function copyToClipboard(element) {
            let $temp = $('<input>');
            $('body').append($temp);
            $temp.val($(element).text()).select();
            document.execCommand('copy');
            $temp.remove();
        }
    }
};

// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($('.tooltip').length) {
        tippy('.tooltip', {
            allowHTML: true,
            trigger: 'mouseenter click',
        });
    }
};

// Initialization tooltips card__act
application.prototype.initCardActTooltips = function () {
    if ($('.card-tooltip').length) {
        let instance = null;

        reinitTooltip();
        $(window).on('resize', reinitTooltip);

        function reinitTooltip() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                instance = tippy('.card-tooltip', {
                    allowHTML: true,
                    placement: 'bottom',
                    trigger: 'mouseenter click',
                });
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                if (instance != null) {
                    instance.destroy();
                    instance = null;
                }
            }
        }
    }
};

// Initialization input-search behavior
application.prototype.initInputSearch = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            }
            else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization switch content
application.prototype.initSwitchContent = function () {
    $('.switch-content').on('click', function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }
    });
};

// Initialization notification
application.prototype.initNotification = function () {
    const actionNotice = $('.action-notice');
    const noticeBtn = $('[data-notice]');

    noticeBtn.on('click', function () {
        let currentDataValue = noticeBtn.data('notice');

        actionNotice
            .fadeOut()
            .removeClass('added');

        if ($(this).hasClass('active')) {
            showNotification();
            setTimeout(hideNotification, 3000);
            return;
        }
    });

    function showNotification() {
        actionNotice
            .addClass('added')
            .fadeIn()
            .animate({ opacity: 1 }, 200);
    }

    function hideNotification() {
        actionNotice
            .fadeOut('slow')
            .removeClass('added');
    }
};

// Initialization range slider
application.prototype.initCatalogPriceSlider = function () {
    if ($('.range-slider').length) {
        const slider = document.getElementById('range-slider');
        const inputNumMin = document.getElementById('rsf_min');
        const inputNumMax = document.getElementById('rsf_max');
        let inputs = [inputNumMin, inputNumMax];

        noUiSlider.create(slider, {
            start: [10, 60],
            step: 1,
            connect: true,
            range: {
                'min': [0],
                'max': [100],
            }
        });

        slider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {
            input.addEventListener('change', function () {
                slider.noUiSlider.setHandle(handle, this.value);
            });

            input.addEventListener('keydown', function (e) {
                let values = slider.noUiSlider.get();
                let value = Number(values[handle]);

                // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                let steps = slider.noUiSlider.steps();

                // [down, up]
                let step = steps[handle];

                let position;

                // 13 is enter,
                // 38 is key up,
                // 40 is key down.
                switch (e.which) {
                    case 13:
                        slider.noUiSlider.setHandle(handle, this.value);

                        break;
                    case 38:
                        // Get step to go increase slider value (up)
                        position = step[1];

                        // false = no step is set
                        if (position === false) {
                            position = 1;
                        }

                        // null = edge of slider
                        if (position !== null) {
                            slider.noUiSlider.setHandle(handle, value + position);
                        }

                        break;
                    case 40:
                        position = step[0];

                        if (position === false) {
                            position = 1;
                        }

                        if (position !== null) {
                            slider.noUiSlider.setHandle(handle, value - position);
                        }

                        break;
                }
            });
        });


        // Restricts input for the given textbox to the given inputFilter.
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
                textbox.addEventListener(event, function(e) {
                    if (inputFilter(this.value)) {
                        // Accepted value
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    }
                    else if (this.hasOwnProperty("oldValue")) {
                        // Rejected value - restore the previous one
                        this.reportValidity();
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    }
                    else {
                        // Rejected value - nothing to restore
                        this.value = "";
                    }
                });
            });
        }

        // Install input filters.
        setInputFilter(document.querySelector(".range-slider-fields__input"), function(value) {
            return /^-?\d*$/.test(value); });
    }
};

// Initialization catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialization catalog sidebar apply filter
application.prototype.initCatalogSidebarApplyFilter = function () {
    let trigger = null;
    let coordsTrigger = null;
    let wTrigger = null;
    let hTrigger = null;
    let html = '<div class="catalog-sidebar-apply-filter">' +
        '           <div class="catalog-sidebar-apply-filter__title">Показать</div>' +
        '           <div class="catalog-sidebar-apply-filter__value">2 184 товара</div>' +
        '       </div>';

    $(document).on('click', '.catalog-sidebar-filter__item .custom-checkbox__input', '.catalog-sidebar-filter__item .custom-checkbox__label-for', function () {
        let scroll = $(window).scrollTop();
        trigger = $(this).closest('.custom-checkbox');
        coordsTrigger = trigger.offset();
        wTrigger = trigger.outerWidth();
        hTrigger = trigger.outerHeight();

        $('.catalog-sidebar-apply-filter').remove();
        $('body').append(html);
        $('.catalog-sidebar-apply-filter').css({
            'top': parseInt(coordsTrigger.top + (hTrigger * 0.5)) - scroll + 'px',
            'left': parseInt(coordsTrigger.left + (wTrigger - 2)) + 'px',
        });
        setTimeout(function () {
            $('.catalog-sidebar-apply-filter').remove();
        }, 5000);

    });

    $(window).on('scroll', function () {
        $('.catalog-sidebar-apply-filter').remove();
    });
};

// Initialization catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('[data-sort]').length) {
        initSortSwitch();
        setSortSelect();
        $(window).on('resize', setSortSelect);

        $(document).on('click', function (e) {
            if (!$('[data-sort-select]').is(e.target) &&
                !$('[data-sort-options]').is(e.target) &&
                $('[data-sort-options]').has(e.target).length === 0)
            {
                closeSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeSort();
            }
        });

        function initSortSwitch() {
            $('[data-sort-options] input[type="radio"]').on('click', function () {
                let selectPlaceholder = $(this).siblings('.tag').text();

                $(this).closest('[data-sort]').find('[data-sort-select-text]').text(selectPlaceholder);
                closeSort();
            });
        }

        function setSortSelect() {
            $('[data-sort-select]').on('click', function () {
                if (!$(this).hasClass('active')) {
                    $(this).addClass('active');
                    $(this).siblings('[data-sort-options]').addClass('active');
                } /*else if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $(this).siblings('[data-sort-options]').removeClass('active');
                }*/
            });
        }

        function closeSort () {
            $('[data-sort-select]').removeClass('active');
            $('[data-sort-options]').removeClass('active');
        }
    }
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts__map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts__map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialization basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('active');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('active');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialization contacts accordion
application.prototype.initContactsAccordion = function () {
    if ($(".index-contacts").length) {
        let accordion = null;

        if (window.matchMedia('(max-width: 991px)').matches) {
            initAccordionResponsive();
        }
        $(window).on("resize", initAccordionResponsive);

        function initAccordionResponsive() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(accordion != null) {
                    accordion.destroy();
                    accordion = null;
                }
                return;
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                accordion = new Accordion([".index-contacts"],{
                    openOnInit: [0],
                    duration: 200,
                });
            }
        }
    }
};

// Initialize custom fancybox behavior
application.prototype.initFancyboxBehavior = function () {
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalog = $('[data-catalog]');
    const catalogSpoiler = $('[data-catalog-spoiler]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        catalog.removeClass('active');
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            $('body').removeClass('overflow-hidden');
            $('[data-open-promocode]').removeClass('selected');
            $('[data-open-promocode]').closest('.modal-order-promocode__list').removeClass('has-active');
            $('[data-open-promocode]').closest('.modal-order-promocode__item').removeClass('active');
        }
    });
};

// Initialization password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
                $(this).closest('.form__input-btn').addClass('show');
            }
            else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
                $(this).closest('.form__input-btn').removeClass('show');
            }
        });
    }
};

// Initialization datepicker
application.prototype.initDatepicker = function () {
    if ($(".flatpickr").length) {
        const dateElem = $(".flatpickr");

        let newFlatpickr = flatpickr(dateElem, {
            dateFormat: "d.m.Y",
            disableMobile: "true",
            locale: "ru"
        });
    }
};

// Set behavior to button "more" in card-product
application.prototype.setCardProductMore = function () {
    if ($('[data-card-act-more]').length) {
        $('[data-card-act-more]').on('click', function () {
            if(!$(this).hasClass('active')) {
                $('[data-card-act-more]').not($(this)).removeClass('active');
                $('[data-card-act-content]').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('[data-card-act-content]').addClass('active');
            }
            else {
                $(this).removeClass('active');
                $(this).siblings('[data-card-act-content]').removeClass('active');
            }
        });

        $(document).on('click', function (e) {
            if ($('.card__act').is(e.target) || $('.card__act').has(e.target).length === 0) {
                $('[data-card-act-more]').removeClass('active');
                $('[data-card-act-content]').removeClass('active');
            }
        });
    }
};

// Initialization switch content
application.prototype.initSmoothScrollTo = function () {
    $('[data-scroll-to]').on('click', function (e) {
        let currentId = $(this).attr('href');
        let headerSize = null;
        e.preventDefault();
        resizeHeader();
        $('html, body').animate({
            scrollTop: $(currentId).offset().top - headerSize
        }, 200);

        function resizeHeader() {
            if (window.matchMedia('(min-width: 1200px)').matches) {
                headerSize = 205;
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                headerSize = 62;
            }
            else if (window.matchMedia('(min-width: 992px) and (max-width: 1199px)').matches) {
                headerSize = 188;
            }
        }
    });
};

// Initialization cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-quantity').length) {
        $('.cart-buy .cart-in').on("click", function() {
            if(!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(this).closest('.card-product').addClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').removeClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').addClass('selected');
            }
            else {
                $(this).removeClass('active');
                $(this).closest('.card-product').removeClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').removeClass('selected');
                $(this).closest('.cart-buy').find('input.cart-quantity-input').val(1);
            }
        });

        $(document).on('click','.cart-quantity-btn--remove', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $(this).closest('.cart-buy').find('.cart-in').removeClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
            }
        });

        $(document).on('click','[data-cart-quantity-remove]', function() {
            $(this).closest('.cart-buy').find('.cart-in').removeClass('active');
            $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
            $(this).closest('.cart-buy').find('.cart-quantity input.cart-quantity-input').val(1).trigger('change');
        });

        $(document).on('click', '.cart-quantity-btn', function(e) {
            let $button = $(this);
            let oldValue = $button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt($button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if($button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;

                if(newVal > 1) {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');
                }
                else {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                }
            }
            else {
                if (oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');

                    if(oldValue > 1 && oldValue < 3) {
                        $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                    }
                }
                else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;
            }

            $button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });
    }
};

// Initialization check all group
application.prototype.initCheckall = function () {
    if ($('.js-checkall-for').length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $('.js-checkall-for').each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        }
                        else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop('checked', false);
                    }
                    else if(checkallForState === true) {
                        checkallFor.prop('checked', true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        }
                        else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');

                    if(allChecked) checkallFor.removeClass('custom-checkbox__input--checkline');
                }
            });
        }

        function initOnclickCheckallFor() {
            $('.js-checkall-for').on('click', function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');

                if(checkallFor.is(':checked')) {
                    checkallFor.prop('checked', true);
                    checkallFor.removeClass('custom-checkbox__input--checkline');
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);
                }
                else if(!checkallFor.is(':checked')) {
                    checkallFor.prop('checked', false);
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);
                }
            });
        }

        function initOnclickCheckallGroup() {
            $('.checkall-group').on('click', function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data('checkall-group');

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(true);
                        }
                        else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        }
                        else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === 'notChecked');

                    if(allChecked) {
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass('custom-checkbox__input--checkline');
                    }
                    else if(allNotChecked) {
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', false);
                    }
                    else if(!allChecked && !allNotChecked) {
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);

                        if(!$(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass('custom-checkbox__input--checkline')) {
                            $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass('custom-checkbox__input--checkline');
                        }
                    }
                }
            });
        }
    }
};

// Initialization countdown
application.prototype.initCountdown = function () {
    if ($('.plug-clock').length) {
        var deadline = addDaysToDate(new Date(), 33).getTime();
        var daysSpan = document.getElementById('days');
        var hoursSpan = document.getElementById('hours');
        var minutesSpan = document.getElementById('minutes');
        var secondsSpan = document.getElementById('seconds');

        updateClock(deadline);
        var interval = setInterval(updateClock, 1000);

        function addDaysToDate(startDate, numberOfDays) {
            return new Date(
                startDate.getFullYear(),
                startDate.getMonth(),
                startDate.getDate() + numberOfDays,
                startDate.getHours(),
                startDate.getMinutes(),
                startDate.getSeconds()
            );
        }

        function getRemainingTime(deadline) {
            var total = deadline - new Date().getTime();

            if (isNaN(total)) {
                return false;
            }

            var seconds = Math.floor( (total / 1000) % 60 );
            var minutes = Math.floor( (total / 1000 / 60) % 60 );
            var hours = Math.floor( (total / (1000 * 60 * 60)) % 24 );
            var days = Math.floor( total / (1000 * 60 * 60 * 24) );

            return {
                'total': total,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function updateClock() {
            var remainingTime = getRemainingTime(deadline);

            if (remainingTime.total <= 0) {
                clearInterval(interval);

                document.getElementById('expired').classList.add('show');

                return false;
            }
            else if (!remainingTime) {
                return false;
            }

            daysSpan.innerText = addLeadingZeros(remainingTime.days);
            hoursSpan.innerText = addLeadingZeros(remainingTime.hours);
            minutesSpan.innerText = addLeadingZeros(remainingTime.minutes);
            secondsSpan.innerText = addLeadingZeros(remainingTime.seconds);
        }

        function addLeadingZeros(time) {
            return ('0' + time).slice(-2);
        }
    }
};