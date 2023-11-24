<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gust
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-inner__logo"><span><?= get_field('footer_text', 'option') ?></span>
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
            </div>
            <ul class="footer-inner-menu__list list">
                <li class="footer-inner-menu__list-item"><a href="">About us</a></li>
                <li class="footer-inner-menu__list-item"><a href="">Services</a></li>
                <li class="footer-inner-menu__list-item"><a href="">Price</a></li>
                <li class="footer-inner-menu__list-item"><a href="">Reviews</a></li>
            </ul>
            <ul class="footer-inner-link__list list">
                <li class="footer-inner-link__list-item"><a class="footer-inner-link-menu" href="<?= get_field('instagram_link', 'option') ?>">
                        <svg class="" width="14" height="14">
                            <use class=""
                                 href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram"></use>
                        </svg>
                        Instagram</a></li>
                <li class="footer-inner-link__list-item"><a class="footer-inner-link-menu" href="<?= get_field('telegram_link', 'option') ?>">
                        <svg class="" width="14" height="14">
                            <use class=""
                                 href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-telegram"></use>
                        </svg>
                        Telegram</a></li>
                <li class="footer-inner-link__list-item"><a class="footer-inner-link-menu" href="<?= get_field('youtube_link', 'option') ?>">
                        <svg class="" width="14" height="14">
                            <use class=""
                                 href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-youtube"></use>
                        </svg>
                        YouTube</a></li>
                <li class="footer-inner-link__list-item"><a class="footer-inner-link-menu" href="<?= get_field('twitter_link', 'option') ?>">
                        <svg class="" width="14" height="14">
                            <use class=""
                                 href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-twitter"></use>
                        </svg>
                        Twitter</a></li>
            </ul>
            <ul class="footer-inner-link__list list-link list">
                <li class="footer-inner-link__list-item"><a href="mailto:<?= get_field('email', 'option') ?>"><?= get_field('email', 'option') ?></a></li>
                <li class="footer-inner-link__list-item"><a href="tel:<?= get_field('phone_number_link', 'option') ?>"><?= get_field('phone_number', 'option'); ?></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-inner__bottom">
        <svg class="" width="14" height="14">
            <use class="" href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#icon-copyright"></use>
        </svg>
        2023
    </div>
</footer>

<div data-modal class="modal-wrap is-hidden" data-modal-title="Program 1">
    <div class="modal-content">
        <h2 class="modal-content-title">Buy sport program 1</h2>
        <div class="modal-content-form">
            <div class="modal-content-form-wrap">
                <label class="modal-content-form-wrap-label" for="contacts-name"
                >Your name <span>*</span></label
                >
                <input
                        type="text"
                        name="name"
                        required=""
                        class="modal-content-form-wrap-label-input"
                        id="contacts-name"
                />
            </div>
            <div class="modal-content-form-wrap">
                <label class="modal-content-form-wrap-label" for="contacts-email"
                >Your Telegram <span>*</span></label
                >
                <input
                        type="email"
                        name="email"
                        required=""
                        class="modal-content-form-wrap-label-input"
                        id="contacts-telegram"
                />
            </div>
            <div class="modal-content-form-email">
                <label class="modal-content-form-email-label" for="contacts-email"
                >Email <span>*</span></label
                >
                <input
                        type="email"
                        name="email"
                        required=""
                        class="modal-content-form-email-label-input"
                        id="contacts-email"
                />
            </div>
        </div>
        <div class="modal-content-button">
            <button class="modal-content-button-buy" type="submit">Buy</button>
            <button
                    class="modal-content-button-back modal-closed-btn"
                    type="button"
                    data-modal-closed
            >
                Back to programs
            </button>
        </div>
    </div>
</div>

<div data-modal class="modal-wrap is-hidden" data-modal-title="Program 2">
    <div class="modal-content">
        <h2 class="modal-content-title">Buy sport program 2</h2>
        <div class="modal-content-form">
            <div class="modal-content-form-wrap">
                <label class="modal-content-form-wrap-label" for="contacts-name"
                >Your name <span>*</span></label
                >
                <input
                        type="text"
                        name="name"
                        required=""
                        class="modal-content-form-wrap-label-input"
                        id="contacts-name"
                />
            </div>
            <div class="modal-content-form-wrap">
                <label class="modal-content-form-wrap-label" for="contacts-email"
                >Your Telegram <span>*</span></label
                >
                <input
                        type="email"
                        name="email"
                        required=""
                        class="modal-content-form-wrap-label-input"
                        id="contacts-telegram"
                />
            </div>
            <div class="modal-content-form-email">
                <label class="modal-content-form-email-label" for="contacts-email"
                >Email <span>*</span></label
                >
                <input
                        type="email"
                        name="email"
                        required=""
                        class="modal-content-form-email-label-input"
                        id="contacts-email"
                />
            </div>
        </div>

        <div class="modal-content-button">
            <button class="modal-content-button-buy" type="submit">Buy</button>
            <button
                    class="modal-content-button-back modal-closed-btn"
                    type="button"
                    data-modal-closed
            >
                Back to programs
            </button>
        </div>
    </div>
</div>

<div data-modal class="modal-wrap is-hidden" data-modal-title="Program 3">
    <div class="modal-content">
        <h2 class="modal-content-title">Buy sport program 3</h2>
        <div class="modal-content-form">
            <div class="modal-content-form-wrap">
                <label class="modal-content-form-wrap-label" for="contacts-name"
                >Your name <span>*</span></label
                >
                <input
                        type="text"
                        name="name"
                        required=""
                        class="modal-content-form-wrap-label-input"
                        id="contacts-name"
                />
            </div>
            <div class="modal-content-form-wrap">
                <label class="modal-content-form-wrap-label" for="contacts-email"
                >Your Telegram <span>*</span></label
                >
                <input
                        type="email"
                        name="email"
                        required=""
                        class="modal-content-form-wrap-label-input"
                        id="contacts-telegram"
                />
            </div>
            <div class="modal-content-form-email">
                <label class="modal-content-form-email-label" for="contacts-email"
                >Email <span>*</span></label
                >
                <input
                        type="email"
                        name="email"
                        required=""
                        class="modal-content-form-email-label-input"
                        id="contacts-email"
                />
            </div>
        </div>
        <div class="modal-content-button">
            <button class="modal-content-button-buy" type="submit">Buy</button>
            <button
                    class="modal-content-button-back modal-closed-btn"
                    type="button"
                    data-modal-closed
            >
                Back to programs
            </button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
