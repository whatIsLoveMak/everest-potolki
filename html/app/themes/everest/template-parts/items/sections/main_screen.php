<?php 
// dump($main_banner['main_img']);
?>
<section id="main_screen" class="section main-screen">
    
        <div class="main-screen__row">
            <div class="main-screen__left-side">
                <div class="main-screen__location"><img src="<?=$main_banner['main_location_img']['url']?>" alt="<?=$main_banner['main_location_img']['title']?>"><?=($main_banner['location'])?$main_banner['location']:null?></div>
                <div class="main-screen__commit"><h2><?=($main_banner['main_description'])?$main_banner['main_description']:null?></h2> <h2 class="yellow"><?=$main_banner['main_description_yellow']?></h2><div class="main-screen__commit-triangle"></div><div class="main-screen__commit-hide"></div></div>
                <div class="main-screen__payment">
                    <div class="main-screen__payment-text"><h3><?=($main_banner['main_under_desc'])?$main_banner['main_under_desc']:null?></h3></div>
                    
                    <div class="main-screen__payment-button">
                        <button data-micromodal-trigger="modal-form" class="button button-yellow">Рассчитать стоимость</button>
                    </div>
                </div>
            </div>
            <div class="main-screen__right-side">
                <img src="<?=($main_banner['main_img'])?$main_banner['main_img']['url']:null?>" alt="<?=($main_banner['main_img'])?$main_banner['main_img']['title']:null?>">
            </div>
        </div>
    
    
</section>