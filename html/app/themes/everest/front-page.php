<?php

use Kviron\CE\CE;
$blocks = get_field('blocks');


get_header(); 
foreach ($blocks as $block) {
    CE::theTemplate('/template-parts/items/sections/' . $block['acf_fc_layout'], $block);}
    CE::theTemplate('template-parts/quiz/choise-master');
    CE::theTemplate('template-parts/items/map');
get_footer();