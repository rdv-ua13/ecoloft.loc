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
    this.initTooltips();
    this.initMaskedInput();
    this.initContactsMap();
    this.initAccordion();
    this.initModuleDescrAccordion();
    this.initFancyboxModal();
    /*this.initFancyboxDesign();*/
    this.initCountdown();
    this.initModuleDescr();
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

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let basicSlider = null;
        let spaceBetween = 12;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            if (window.matchMedia('(min-width: 992px)').matches) {
                // spaceBetween
                if(slider.eq(i).is('[data-basic-slider-tabs]')) {
                    spaceBetween = 48;
                }
                else if(slider.eq(i).is('[data-page-pagination]')) {
                    spaceBetween = 12;
                }
                else {
                    spaceBetween = 12;
                }
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                // spaceBetween
                if(slider.eq(i).is('[data-basic-slider-tabs]')) {
                    spaceBetween = 20;
                }
                else if(slider.eq(i).is('[data-page-pagination]')) {
                    spaceBetween = 8;
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
                },
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
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

    if ($('.basic-slider-details').length) {
        const slider = $('[data-basic-slider-details]');
        let sliderDetails = null;
        let effect = false;
        let spaceBetween = 12;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-details-wrap-' + i);

            if (window.matchMedia('(min-width: 992px)').matches) {
                spaceBetween = 0;
                effect = 'fade';
            }
            else if (window.matchMedia('(max-width: 991px)').matches) {
                spaceBetween = 12;
                effect = false;
            }

            const sliderDetailsSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: spaceBetween,
                effect: effect,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-details-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-details-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-details-wrap-' + i + ' .swiper-pagination',
                    clickable: true,
                },
            };

            sliderDetails = new Swiper('.basic-slider-details-wrap-' + i + ' .basic-slider-details', sliderDetailsSetting);
        });
    }

    if ($('[data-about-gallery-slider]').length) {
        let gallerySlider = null;

        const gallerySliderSetting = {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 12,
            direction: 'horizontal',
        };

        reinitSlider();
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(gallerySlider !== null) {
                    gallerySlider.destroy(true, true);
                    gallerySlider = null;
                }
            } else if (window.matchMedia('(max-width: 991px)').matches) {
                gallerySlider = new Swiper('[data-about-gallery-slider]', gallerySliderSetting);
            }
        }
    }

    if ($('.details-thumb-slider').length) {
        let slidesPerView,
            spaceBetween = null;

        if(window.matchMedia('(min-width: 992px)').matches) {
            slidesPerView = 1;
            spaceBetween = 0;
        }
        else if(window.matchMedia('(max-width: 991px)').matches) {
            slidesPerView = 'auto';
            spaceBetween = 8;
        }

        let detailsThumbSliderPointer = new Swiper('.details-thumb-slider-pointer', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            direction: "horizontal",
            freeMode: true,
            watchSlidesProgress: true,
        });
        let detailsThumbSlider = new Swiper('.details-thumb-slider', {
            slidesPerView: slidesPerView,
            spaceBetween: spaceBetween,
            watchOverflow: true,
            thumbs: {
                swiper: detailsThumbSliderPointer,
            },
            navigation: {
                nextEl: '.details-thumb-slider .swiper-button-next',
                prevEl: '.details-thumb-slider .swiper-button-prev',
            },
        });
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

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts-map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts-map-content');

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

                placemark = new ymaps.Placemark([coordX, coordY], {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/build/img/map-pin.svg',
                    iconImageSize: [47, 59],
                    iconImageOffset: [0, 0]
                });

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

// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion-arr").length) {
        let accordion = new Accordion([".accordion-arr"],{
            duration: 200,
            showMultiple: true,
        });
    }
};

// Initialization accordion
application.prototype.initModuleDescrAccordion = function () {
    if ($(".index-module-descr__info").length) {
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
                accordion = new Accordion([".index-module-descr__info"],{
                    duration: 200,
                    showMultiple: true,
                });
            }
        }
    }
};

// Initialize custom fancybox for modal
application.prototype.initFancyboxModal = function () {
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
        }
    });
};

// Initialize custom fancybox from design
application.prototype.initFancyboxDesign = function () {
    Fancybox.bind("[data-fancybox-ecoloft]", {
        theme: "dark",
        mainStyle: {
            "--f-toolbar-padding": "0",
            "--f-button-svg-stroke-width": "1.5",
            "--f-arrow-svg-stroke-width": "1.75",
            "--f-thumb-width": "82px",
            "--f-thumb-height": "82px",
            "--f-thumb-border-radius": "8px",
            "--f-thumb-selected-shadow": "inset 0 0 0 2px #fff, 0 0 0 1.5px #ff2e00",
        },
        zoomEffect: false,
        fadeEffect: false,
        showClass: "f-fadeIn",
        hideClass: false,
        dragToClose: false,
        Carousel: {
            Toolbar: {
                absolute: false,
                display: {
                    middle: ["counter"],
                    right: ["toggleFull", "close"],
                },
            },
            Thumbs: {
                type: "classic",
            },
        },
    });
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

// Initialization index module descr
application.prototype.initModuleDescr = function () {
    if ($('.index-module-descr').length) {
        let pointer = $('.index-module-descr__pointer');
        let trigger = $('.index-module-descr__item');

        pointer.on('mouseenter', function () {
            let data = $(this).data('module-item');

            $('[data-module-target="' + data + '"]').addClass('is-active')
        });
        pointer.on('mouseleave', function () {
            trigger.removeClass('is-active');
        });
    }
};