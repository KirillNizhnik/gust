<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gust
 */

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta
                name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Gust</title>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <?php  wp_head(); ?>
    </head>
    <body class="body">
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="" class="header-inner__link-logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo_mobile.svg" alt="" class="">
                </a>
                <ul class="header-inner__list">
                    <li class="header-inner__list-item"><a href="#about">About us</a></li>
                    <li class="header-inner__list-item"><a href="#reviews">Reviews</a></li>
                    <li class="header-inner__list-item"><a href="#price">Price</a></li>
                    <li class="header-inner__list-item"><a href="#services">Services</a></li>
                </ul>
                <div class="header-inner__language header-inner__language-mob">
                    <a href="" class="header-inner__language-en header-language">EN</a>
                    <a href="" class="header-inner__language-ua header-language">UA</a>
                </div>
                <button class="header-inner__btn js-open-menu" data-modal-open="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M6 9H30M6 18H30M6 27H30" stroke="#070606" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>

    </header>

    <div class="mobile-menu js-menu-container " data-modal="">
        <div class="mobile-menu-container">
            <div class="mobile-menu-container__header">
                <a href="" class="header-inner__link-logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo_mobile-modal.svg" alt="" class="">
                </a>
                <button type="button" class="modal-btn-close js-close-menu" data-modal-close="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M6 9L27 27M6 27L27 9" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <ul class="mobile-menu__list list ">
                <li class="mobile-menu__item">
                    <a class="mobile-menu__item-link link " href="#about">About us</a>
                </li>
                <li class="mobile-menu__item ">
                    <a class="mobile-menu__item-link link " href="#reviews">Reviews</a></li>
                </li>
                <li class="mobile-menu__item ">
                    <a class="mobile-menu__item-link link " href="#price">Price</a>
                </li>
                <li class="mobile-menu__item ">
                    <a class="mobile-menu__item-link link " href="services">Services</a>
                </li>
            </ul>
            <ul class="header-menu-inner-link__list list">
                <li class="footer-inner-link__list-item"><a class="header-inner-link-menu" href="">
                        <svg class="" width="32" height="32">
                            <use class="" href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram"></use>
                        </svg>
                    </a></li>
                <li class="footer-inner-link__list-item"><a class="header-inner-link-menu" href="">
                        <svg class="" width="32" height="32">
                            <use class="" href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-telegram"></use>
                        </svg>
                    </a></li>
                <li class="footer-inner-link__list-item"><a class="header-inner-link-menu" href="">
                        <svg class="" width="32" height="32">
                            <use class="" href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-youtube"></use>
                        </svg>
                    </a></li>
                <li class="footer-inner-link__list-item"><a class="header-inner-link-menu" href="">
                        <svg class="" width="32" height="32">
                            <use class="" href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-twitter"></use>
                        </svg>
                    </a></li>
            </ul>
            <div class="header-inner__language">
                <a href="" class="header-inner__language-en header-language">EN</a>
                <a href="" class="header-inner__language-ua header-language">UA</a>
            </div>
        </div>
    </div>

