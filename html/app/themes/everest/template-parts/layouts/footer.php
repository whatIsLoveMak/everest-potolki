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
                <div class="footer-grid__item-link"><a href="#">О нас</a></div>
                <div class="footer-grid__item-link"><a href="#">Цены</a></div>
                <div class="footer-grid__item-link"><a href="#">Наши работы</a></div>
            </div>
            <div class="footer-grid__item">
                <div class="footer-grid__item-link"><a href="#">Подарки</a></div>
                <div class="footer-grid__item-link"><a href="#">Калькулятор</a></div>
                <div class="footer-grid__item-link"><a href="#">Контакты</a></div>
            </div>
            <div class="footer-grid__item">
                <div class="footer-grid__item-link"><a href="tel:+<?=$phone?>"><?=$phone?></a></div>
                <div class="footer-grid__item-link"><a href="mailto:<?=$email?>" target="_blanc"><?=$email?></a></div>
                <div class="footer-grid__item-link"><a href="https://yandex.ru/maps/-/CCUJNAh8gC" target="_blanc"><?=$adress?></a></div>
            </div>
            <div class="footer-grid__item-development activated">Разбработано в Дрожжи <br>20xx-2022 © ООО «Название компании»<br><a href="#">Политика конфиденциальности</a></div>
            <div class="footer-grid__item">
            <div class="footer-grid__item-link"><a href="#" target="_blanc"><img src="<?= get_template_directory_uri() ?>/src/icons/circkle-arrow.png" alt=""></a></div>
            </div>
            
        </div>
    </div>
</footer>
</div>
