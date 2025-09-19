const {
    src,
    dest,
    series,
    watch
} = require("gulp");
const autoprefixer = require("gulp-autoprefixer"); // модуль для установки автопрефиксов
const del = require("del"); // плагин для удаления файлов и каталогов
const browserSync = require("browser-sync").create(); // сервер для работы и обновления страниц
const sass = require("gulp-sass")(require("sass")); // модуль для компиляции SASS (SCSS) в CSS*/
const svgSprite = require("gulp-svg-sprite"); // модуль для объединения всех svg в sprite
const svgmin = require("gulp-svgmin"); // модуль для обработки svg
const cheerio = require("gulp-cheerio"); // модуль для удаления атрибутов из svg
const replace = require("gulp-replace"); // модуль для фиксинга некоторых багов svg
const image = require("gulp-imagemin"); // плагин для сжатия изображений
const notify = require("gulp-notify"); // модуль для уведомления об ошибках
const php = require("gulp-connect-php"); // модуль для обработки php
const plumber = require("gulp-plumber"); // модуль для отслеживания ошибок
const uglify = require("gulp-uglify"); // модуль для минимизации JavaScript
const group_media = require("gulp-group-css-media-queries"); // модуль для группирования медиазапросов
const cache = require("gulp-cache"); // модуль для кэширования
const concat = require("gulp-concat"); // модуль для конкатенации библиотек
const webp = require("gulp-webp"); // модуль для преобразования изображений в webp

// Прокси проекта
const rootDir = "ecoloft.loc";

// Пути к файлам
const path = {
    build: {
        build:              "build",
        js:                 "build/js/",
        styles:             "build/css/",
        img:                "build/img/",
    },
    src: {
        php:                "src/pages/**/*.php",
        mainJs:             "src/js/main.js",
        styles:             "src/styles/main.scss",
        img:                "src/img",
        svg:                "src/img/svg/**.svg",
        resources:          "src/resources/**/*.*",
    },
    watch: {
        php:                "src/pages/**/*.php",
        js:                 "src/js/**/*.js",
        styles:             "src/styles/**/*.scss",
        img:                "src/img/*.*",
        svg:                "src/img/**/*.svg",
        resources:          "src/resources/**/*.*",
    }
};

let isProd = false; // dev by default

// Сбор php
const phpBuild = () => {
    return src(path.src.php)
        .pipe(plumber(
            notify.onError({
                title: "PHP",
                message: "Error: <%= error.message %>"
            })
        ))
        .pipe(dest(path.build.build))
        .pipe(browserSync.stream());
};

// Сбор стилей
const cssBuild = () => {
    return src(path.src.styles)
        .pipe(concat("main.css"))
        .pipe(plumber(
            notify.onError({
                title: "SCSS",
                message: "Error: <%= error.message %>"
            })
        ))
        .pipe(sass())
        .pipe(group_media())
        .pipe(autoprefixer({
            cascade: false,
            grid: true,
            overrideBrowserslist: ["last 5 versions"]
        }))
        .pipe(dest(path.build.styles))
        .pipe(browserSync.stream());
};

// Сбор подключаемых библиотек js (отделно)
const includedJsBuild = () => {
    return src(
        [
            "node_modules/jquery/dist/jquery.js",
            /*"node_modules/jquery-validation/dist/jquery.validate.js",
            "node_modules/jquery-validation/dist/localization/messages_ru.js",
            "node_modules/jquery.maskedinput/src/jquery.maskedinput.js",*/
            "node_modules/@fancyapps/ui/dist/fancybox.umd.js",
            /*"node_modules/flatpickr/dist/flatpickr.min.js",
            "node_modules/flatpickr/dist/l10n/ru.js",
            "node_modules/nouislider/dist/nouislider.js",*/
            "node_modules/@popperjs/core/dist/umd/popper.js",
            /*"node_modules/select2/dist/js/select2.js",*/
            /*"node_modules/readmore-js/readmore.js",*/
            "node_modules/swiper/swiper-bundle.js",
            "node_modules/tippy.js/dist/tippy-bundle.umd.js",
            "node_modules/accordion-js/dist/accordion.min.js",
        ]
    )
        .pipe(dest(path.build.js))
        .pipe(browserSync.stream());
};

// Сбор подключаемых библиотек js
const libsJsBuild = () => {
    return src(
        [
            "node_modules/jquery/dist/jquery.js",
            /*"node_modules/jquery-validation/dist/jquery.validate.js",
            "node_modules/jquery-validation/dist/localization/messages_ru.js",
            "node_modules/jquery.maskedinput/src/jquery.maskedinput.js",*/
            "node_modules/@fancyapps/ui/dist/fancybox.umd.js",
            /*"node_modules/flatpickr/dist/flatpickr.min.js",
            "node_modules/flatpickr/dist/l10n/ru.js",
            "node_modules/nouislider/dist/nouislider.js",*/
            "node_modules/@popperjs/core/dist/umd/popper.js",
            /*"node_modules/select2/dist/js/select2.js",*/
            /*"node_modules/readmore-js/readmore.js",*/
            "node_modules/swiper/swiper-bundle.js",
            "node_modules/tippy.js/dist/tippy-bundle.umd.js",
            "node_modules/accordion-js/dist/accordion.min.js",
        ]
    )
        .pipe(concat("libs.min.js"))
        .pipe(uglify().on("error", notify.onError()))
        .pipe(dest(path.build.js))
        .pipe(browserSync.stream());
};

// Сбор main.js
const mainJsBuild = () => {
    return src(path.src.mainJs)
        .pipe(plumber(
            notify.onError({
                title: "MAINJS",
                message: "Error: <%= error.message %>"
            })
        ))
        .pipe(dest(path.build.js))
        .pipe(browserSync.stream());
};

// Перенос шрифтов, favicon, видео, документов
const resources = () => {
    return src(path.src.resources)
        .pipe(dest(path.build.build))
        .pipe(browserSync.stream());
};

// Сбор sprite.svg
const svgSprites = () => {
    return src(path.src.svg)
        .pipe(
            svgmin({
                js2svg: {
                    pretty: true,
                },
            })
        )
        .pipe(replace("&gt;", ">"))
        .pipe(svgSprite({
            mode: {
                stack: {
                    sprite: "../sprite.svg"
                }
            },
        }))
        .pipe(dest(path.build.img));
};

// Подготовка иконок (удаление атрибутов)
const svgPreparation = () => {
    return src(path.src.svg)
        .pipe(
            svgmin({
                js2svg: {
                    pretty: true,
                },
            })
        )
        .pipe(
            cheerio({
                run: function ($) {
                    $("[fill]").removeAttr("fill");
                    $("[stroke]").removeAttr("stroke");
                    $("[style]").removeAttr("style");
                },
                parserOptions: {
                    xmlMode: true
                },
            })
        )
        .pipe(replace("&gt;", ">"))
        .pipe(dest(path.build.svg));
};

// Обработка картинок (dev)
const imagesDev = () => {
    return src([`${path.src.img}/**/**.{jpg,jpeg,png,svg}`, `!${path.src.svg}`])
        /*.pipe(image([
            image.mozjpeg({
                quality: 80,
                progressive: true
            }),
            image.optipng({
                optimizationLevel: 2
            }),
            image.svgo({
                plugins: [
                    {removeViewBox: false},
                    {cleanupIDs: false}
                ]
            })
        ]))*/
        .pipe(dest(path.build.img));
};

// Обработка картинок (build)
const images = () => {
    return src([`${path.src.img}/**/**.{jpg,jpeg,png,svg}`])
        /*.pipe(image([
            image.mozjpeg({
                quality: 80,
                progressive: true
            }),
            image.optipng({
                optimizationLevel: 2
            }),
            image.svgo({
                plugins: [
                    {removeViewBox: false},
                    {cleanupIDs: false}
                ]
            })
        ]))*/
        .pipe(dest(path.build.img));
};

const webpImages = () => {
    return src([`${path.src.img}/**/**.{jpg,jpeg,png}`])
        .pipe(webp())
        .pipe(dest(path.build.img));
};

// Удаление каталога build
const clean = () => {
    return del(path.build.build);
};

// Очистка кэш
const cacheBuild = () => {
    return cache.clearAll();
};

// Запуск сервера, отслеживание файлов
const watchFiles = () => {
    php.server({}, function (){
        browserSync.init({
            baseDir: "./build",
            index: "index.php",
            injectChanges: true,
            proxy: rootDir + "/build/pages-list.php",
            port: 8000,
            notify: false
        })
    });

    watch(path.watch.php, phpBuild);
    watch(path.watch.styles, cssBuild);
    watch(path.watch.js, mainJsBuild);
    watch(path.watch.svg, svgSprites);
    watch(path.watch.resources, resources);
    watch(`${path.src.img}/**/**.{jpg,jpeg,png,svg}`, images);
    /*watch(`${path.src.img}/!**!/!**.{jpg,jpeg,png}`, webpImages);*/
};

const toProd = (done) => {
    isProd = true;
    done();
};

exports.default = series(clean, cacheBuild, phpBuild, cssBuild, includedJsBuild, mainJsBuild, resources, imagesDev, /*webpImages,*/ svgSprites, watchFiles);

exports.svg = series(clean, cacheBuild, phpBuild, svgPreparation, watchFiles);

exports.build = series(toProd, clean, cacheBuild, phpBuild,  cssBuild, libsJsBuild, mainJsBuild, resources, images, webpImages, svgSprites, watchFiles);