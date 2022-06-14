<?php
$contacts = get_field('contacts', 'contacts');
$email    = $contacts['email'];
$phone    = $contacts['phone'];
$adress = $contacts['address'];
$logo    = $contacts['logo'];
?>
<footer class="footer">
    <div class="container footer__container">
        <div class="footer-grid">
            <div class="footer-grid__item">
                <div class="footer-grid__item-logo"><a href="<?= get_home_url(); ?>">
                        <img src="<?= $logo['url'] ?>"
                             alt="Logo"
                             class="img-contain"
                        >
                    </a></div>
                <div class="footer-grid__item-development disabled">Разбработано в Дрожжи <br>20xx-2022 © ООО «Название компании»<br><a href="#">Политика конфиденциальности</a></div>
            </div>
            <div class="footer-grid__item">
                <div class="footer-grid__item-link"><a href="#about_us">О нас</a></div>
                <div class="footer-grid__item-link"><a href="#main_screen">Цены</a></div>
                <div class="footer-grid__item-link"><a href="#our_works">Наши работы</a></div>
            </div>
            <div class="footer-grid__item">
                <div class="footer-grid__item-link"><a href="#presents">Подарки</a></div>
                <div class="footer-grid__item-link"><a href="#sales_main">Калькулятор</a></div>
                <div class="footer-grid__item-link"><a href="#section-map">Контакты</a></div>
            </div>
            <div class="footer-grid__item">
                <div class="footer-grid__item-link"><a href="tel:+<?=$phone?>"><?=$phone?></a></div>
                <div class="footer-grid__item-link"><a href="mailto:<?=$email?>" target="_blanc"><?=$email?></a></div>
                <div class="footer-grid__item-link"><a href="https://yandex.ru/maps/-/CCUJNAh8gC" target="_blanc"><?=$adress?></a></div>
            </div>
            <div class="footer-grid__item-development activated">Разбработано в Дрожжи <br>20xx-2022 © ООО «Название компании»<br><a href="#">Политика конфиденциальности</a></div>
            <div  class="footer-grid__item">
                <div id="footer-grid__item-link" class="footer-grid__item-link"><a href="#header"><img src="<?= get_template_directory_uri() ?>/src/icons/circkle-arrow.png" alt=""></a></div>
            </div>
            
        </div>
    </div>
</footer>

