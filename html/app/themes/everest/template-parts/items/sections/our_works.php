<section id="our_works" class="section our_works" data-offset="0" data-limit="7" data-function="get-photos">
    <div class="container">
        <div class="our_works__title"><h1>Наши работы</h1></div>
        <div class="our_works__grid">
            <?php foreach ($works as $item){ ?>
                <div class="our_works__grid-item">
                    <a data-micromodal-trigger="modal-form" href="#" class="our_works__trigger"></a>
                    <div class="our_works__content">
                        <div class="our_works__content-title"><?=$item['works_title']?></div>
                        <ul class="our_works__content-list">
                            <?php foreach ($item['works_done'] as $li){?>
                                <li class="our_works__content-item"><?= $li['works_done_list'] ?></li>
                            <?php };?>
                        </ul>
                        <div class="our_works__content-call"><a data-micromodal-trigger="modal-form" href="#">Вызвать замерщика <img src="<?php echo get_template_directory_uri()?>/src/icons/right-yellow.png" alt=""></a></div>
                    </div>
                    <div class="our_works__grid-item-img"><img src="<?=$item['works_img']['url']??null?>" alt="<?=$item['works_img']['title']??null?>"></div>
                </div>
            <?php }; ?>
        </div>
        <div class="show-more"><button class="button yellow">Показать еще</button></div>
    </div>
</section>