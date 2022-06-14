<?php

$contacts = get_field('contacts', 'contacts');
$email    = $contacts['email'];
$phone    = $contacts['phone'];
$logo    = $contacts['logo'];
$socials  =$contacts['socials'];
//var_dump($socials)
?>

<header id="header" class="header">
    <div class="header__container container">
        <div class="header-row">
            <div class="header-row__left-side">
                <div class="header-logo">
                <?php if (is_front_page()) { ?>
                    <img src="<?= $logo['url'] ?>"
                         alt="Logo"
                         class="img-contain"
                    >
                <?php } else { ?>
                    <a href="<?= get_home_url(); ?>">
                        <img src="<?= $logo['url'] ?>"
                             alt="Logo"
                             class="img-contain"
                        >
                    </a>
                <?php     }  ?>
                </div>
                <div class="header-menu disabled">
                    <nav>
                        <ul class="menu__items">
                            <li class="menu__item"><a href="#about_us">О нас</a></li>
                            <li class="menu__item"><a href="#main_screen">Цены</a></li>
                            <li class="menu__item"><a href="#our_works">Наши работы</a></li>
                            <li class="menu__item"><a href="#presents">Подарки</a></li>
                            <li class="menu__item"><a href="#sales_main">Калькулятор</a></li>
                            <li class="menu__item"><a href="#section-map">Контакты</a></li>
                            
                        </ul>
                        <ul class=" social-list ">
                            <?php foreach ($socials as $social){ ?>
                                <li class="activated social-item"><a href="<?=$social['link']?>"><img src="<?php echo $social['icon']['url']?>" alt="<?=$social['title']?>"></a>
                                    <?php }; ?>
                                </li>
                            <li class="activated social-item"><a href="tel:+7<?=$phone?>"><?=$phone?></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-menu-icon"></div>
            </div>
            <div class="header-row__right-side disabled">
                <nav>
                    <ul class=" social-list ">
                        <?php foreach ($socials as $social){
                        
                        ?>
                        <li class="social-item"><a href="<?=$social['link']?>"><img src="<?php echo $social['icon']['url']?>" alt="<?=$social['title']?>"></a>
                            <?php }; ?>
                        </li>
                        <li class="social-item"><a href="tel:+7<?=$phone?>"><?=$phone?></a></li>
                        
                    </ul>
                </nav>
                
            </div>
            <div class="mobile-menu-icon activated">
                <img src="<?get_template_directory_uri()?>src/icons/menu.png" alt="">
            </div>
            <div class="mobail-menu activated">
                <div class="header-menu header-menu-mobile">
                    <nav>
                        <ul class="menu-controls">
                            <li class="menu-controls-item mobile-logo"></li>
                            <li class="menu-controls-item mobile-close"></li>
                        </ul>
                        <ul class="menu__items">
                            <li class="menu__item"><a href="#about_us">О нас</a></li>
                            <li class="menu__item"><a href="#main_screen">Цены</a></li>
                            <li class="menu__item"><a href="#our_works">Наши работы</a></li>
                            <li class="menu__item"><a href="#presents">Подарки</a></li>
                            <li class="menu__item"><a href="#sales_main">Калькулятор</a></li>
                            <li class="menu__item"><a href="#section-map">Контакты</a></li>
                            
                        </ul>
                        <ul class=" social-list ">
                            <?php foreach ($socials as $social){ ?>
                                <li class="activated social-item"><a href="<?=$social['link']?>"><img src="<?php echo $social['icon']['url']?>" alt="<?=$social['title']?>"></a>
                                    <?php }; ?>
                                </li>
                            <li class="activated social-item"><a href="tel:+7<?=$phone?>"><?=$phone?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</header>