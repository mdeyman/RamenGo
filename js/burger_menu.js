$(document).ready(function () {
        $('.menu-burger__header').click(function () {
                $('.menu-burger__header').toggleClass('open-menu');
                $('.header__nav-mob').toggleClass('open-menu');
                $('body').toggleClass('fixed-page');
                $('.menu__item').click(function () {
                        $('.header__nav-mob').removeClass('open-menu');
                });
                $('.menu__item').click(function () {
                        $('.menu-burger__header').removeClass('open-menu');
                });
                $('.menu__item').click(function () {
                        $('body').removeClass('fixed-page');
                });
        });
});