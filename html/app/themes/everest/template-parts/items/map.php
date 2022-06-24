<?php 
$contacts = get_field('contacts', 'contacts');
$email    = $contacts['email'];
$phone    = $contacts['phone'];
$logo    = $contacts['logo'];
$socials  =$contacts['socials'];
$adress = $contacts['address'];
$vk = $contacts['vk']
?>
<section id="section-map" class="section map">
    <div class="container">
        <div  class="footer-map">
            <div class="footer-row">
                <div class="footer-contacts">
                    <div class="footer-contacts__title"><h2>Контакты</h2></div>
                    <div class="footer-contacts__number"><a href="tel:+<?=$phone?>"><?=$phone?></a></div>
                    <div class="footer-contacts__email"><a href="mailto:<?=$email?>" target="_blanc"><?=$email?></a></div>
                    <div class="footer-contacts__adress"><a href="https://yandex.ru/maps/-/CCUJNAh8gC" target="_blanc"><?=$adress?></a></div>
                    <div class="footer-contacts__socials">
                        <div class="footer-contacts__socials-title">Наши соцсети:</div>
                        <div class="footer-contacts__socials-items">
                        <?php foreach ($vk as $item){ ?>
                            <div class="footer-contacts__socials-item"><a href="<?=$item['vk-link']?>"><img src="<?php echo $item['vk-img']['url']?>" alt="<?=$item['title']?>"></a></div>
                            <?php };?>
                        </div>
                    </div>

                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>