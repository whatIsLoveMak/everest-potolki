<section class="section about_us">
    <!-- <div class="container"> -->
        <div id="about_us" class="about_us__row">
            <div class="about_us__row_left-side">
                <div class="about_us__row_left-side-text">
                    <div class="about_us__title"><p>О нас</p></div>
                    <div class="about_us__left-description"><?=($about_us_desc['about_us_left'])?$about_us_desc['about_us_left']:null?></div>
                </div>
                    <div class="about_us__row_right-side activated">
                        <div class="about_us__right-description"><?=($about_us_desc['about_us_right'])?$about_us_desc['about_us_right']:null?></div>
                        <div class="about_us__numbers">
                            <div class="about_us__numbers-item">
                                <div class="about_us__number"><?=$about_us_desc['about_us_years']?></div>
                                <div class="about_us__number-text">лет на рынке</div>
                            </div>
                            <div class="about_us__numbers-item">
                                <div class="about_us__number"><?=$about_us_desc['about_us_clients']?></div>
                                <div class="about_us__number-text">довольных клиентов</div>
                            </div>
                            <div class="about_us__numbers-item">
                                <div class="about_us__number"><?=$about_us_desc['about_us_team']?></div>
                                <div class="about_us__number-text">профессиональных специалистов</div>
                            </div>
                        </div>
                    </div>
                <div class="swiper about_us__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php if($about_us_desc['about_us_slider-img']) {
                                foreach($about_us_desc['about_us_slider-img'] as $item){?>
                                    <div class="swiper-slide about_us__slider-img"><img src="<?=$item['url']?>" alt="<?=$item['title']?>"></div>
                            <?php } };?>
                        </div>
                    </div> 
                    <div class="swiper-button swiper-button__next"></div>
                    <div class="swiper-button swiper-button__prev"></div>
                </div>
               
            </div>
            <div class="about_us__row_right-side disabled">
                <div class="about_us__right-description"><?=($about_us_desc['about_us_right'])?$about_us_desc['about_us_right']:null?></div>
                <div class="about_us__numbers">
                    <div class="about_us__numbers-item">
                        <div class="about_us__number"><?=($about_us_desc['about_us_years'])?$about_us_desc['about_us_years']:null?></div>
                        <div class="about_us__number-text">лет на рынке</div>
                    </div>
                    <div class="about_us__numbers-item">
                        <div class="about_us__number"><?=($about_us_desc['about_us_clients'])?$about_us_desc['about_us_clients']:null?></div>
                        <div class="about_us__number-text">довольных клиентов</div>
                    </div>
                    <div class="about_us__numbers-item">
                        <div class="about_us__number"><?=($about_us_desc['about_us_team'])?$about_us_desc['about_us_team']:null?></div>
                        <div class="about_us__number-text">профессиональных специалистов</div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</section>