<section id="sales_main" class="section sales">
    <div class="container">
        <div class="sales-title">
            <h1><?= ($sales['sales_title'])?$sales['sales_title']:null?><span><?= ($sales['sales_title_yellow'])?$sales['sales_title_yellow']:null?></span><?= ($sales['sales_last_title'])?$sales['sales_last_title']:null?></h1>
        </div>
        <div class="sales__slider">
            <div class="sales__slider-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach($sales['sales_card'] as $card) :?>
                        <div class="swiper-slide sales__slide">
                            <div class="sales__slide-row">
                                <div class="sales__slide-row--head">
                                    <div class="sales__slide-row--head_title"><?= $card['sales_card_title'];?></div>
                                    <div class="sales__slide-row--head_area">
                                        <div class="sales__slide-row--head_area-img"><!--<img src="<?= get_template_directory_uri() ?>/src/icons/card-arrow.png" alt="">--><</div>
                                        <div class="sales__slide-row--head_area-text"> 
                                            <div class="sales__slide-row--head_area-value"><?= ($card['sales_card_area'])?$card['sales_card_area']:null;?>м<sup><small>2</small></sup><br><span>площадь</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sales__slide-row--content">
                                    <ul>
                                        <?php foreach($card['sales_card_advanages'] as $item){?>
                                        <li><?=$item['sales_card_advanages_text']?></li> <?php };?>
                                    </ul>
                                </div>
                                <div class="sales__slide-row--footer">
                                    <div class="sales__slide-row--footer-text">Итоговая стоимость</div>
                                    <div class="sales__slide-row--footer-cost">
                                        <div class="cost-black"><?= ($card['sale_card_prise'])?$card['sale_card_prise']:null?></div>
                                        <div class="cost-red"><?= ($card['stoimost'])?$card['stoimost']:null?></div>
                                    </div>
                                </div>
                                <button class="button button-yellow"><a href="#">Рассчитать стоимость</a></button>
                            </div>
                        </div>
                        <?php endforeach?>
                        <div class="swiper-slide sales__slide last-slide">
                            <div class="sales__slide-row">
                                <div class="last-slide-text">
                                    <h3>Другая площадь?</h3>
                                    <button class="button"><a href="#">Посчитать</a></button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                
            </div>
        </div>
    </div>
</section>