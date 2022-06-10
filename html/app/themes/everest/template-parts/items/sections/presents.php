<section id="presents" class="section presents">
    <div class="container">
        <div class="presents-title"><h2><?= $about_presents['about_presents-title']??null ?></h2></div>
        <div class="presents-row">
            <?php foreach($about_presents['presents_content'] as $item){ ?>
                <div class="presents-item">
                    <div class="presents-item__img">
                        <img src="<?=$item['presents_img']['url']??null?>" alt="<?=$item['presents_img']['title']??null?>">
                    </div>
                    <div class="presents-item__text">
                        <?= $item['presents_text']??null ?>
                    </div>
                </div>
            <?php }; ?>
        </div>
        <div class="presents-attention">
            <?= $about_presents['presents_attention']??null ?>
        </div>
    </div>
</section>