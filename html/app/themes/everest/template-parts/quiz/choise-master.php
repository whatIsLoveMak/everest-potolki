<?php
    $uri = get_template_directory_uri() . '/src/quiz-img/img/choise-master/';
    $images = [
            'room' => $uri. 'room.png',
            'connector'     => $uri. 'connector.png',
            'bathroom'     => $uri. 'bathroom.png',
            'childroom'     => $uri. 'childroom.png',
            'another'     => $uri. 'another.png',
            'kitchen'     => $uri. 'kitchen.png',
            '6'     => $uri. '6.jpg',
            'end'   => $uri. 'end.jpg',
    ];
    $personal_data_address = get_site_url() . '/politika-konfidenczialnosti';
    $privacy_policy_address = get_site_url() . '/politika-konfidenczialnosti';
    $personal_data_link = '<a href="' . $personal_data_address . '" target="_blank">' . __("персональных данных") . '</a>';
    $privacy_policy_link = '<a href="' . $privacy_policy_address . '" target="_blank">' . __("политикой конфиденциальности") . '</a>';
    $text = [
            'form' => [
                'buttons' => [
                    'next'   => __("Далее"),
                    'submit' => __("Отправить"),
                    'start' => __("Подобрать"),
                ],
                'placeholders' => [
                        'name'  => __("Ваше имя"),
                        'phone' => __("Ваш телефон"),
                ],
                'politics' => __("Согласен(а) на обработку $personal_data_link и с $privacy_policy_link"),
                'errors' => __("Пожалуйста, выберите вариант ответа
                                "),
            ],
            'tab_start' => [
                'title' => __("Не можете решить куда сходить отдохнуть?"),
                'descr' => __("Отправьте заявку на подбор места для отдыха и получите невероятное предложение!")
            ],
            'tab_hair' => [
                'title'  => __("Укажите площадь помещения"),
                'colors' => [
                        'blonde'     => __("30"),
                ]
            ],
            'tab_potolki' => [
                'title'  => __("Куда будет устанавливаться натяжной потолок?"),
                'colors' => [
                        'room'     => __("Комната"),
                        'bathroom'   => __("Ванная/туалет"),
                        'kitchen'    => __("Кухня"),
                        'connector'       => __("Коридор"),
                        'childroom'    => __("Детская"),
                        'another'    => __("Другое"),
                ]
            ],
            'tab_design' => [
                'title'  => __("Выберите вид потолка
                                "),
                'boobs_sizes' => [
                    'mat'      => __("Матовый"),
                    'glyanc'     => __("Глянцевый"),
                    'satin'      => __("Сатиновый"),
                    'multilevel'      => __("Многоуровневый"),
                    'print'      => __("С фотопечатью"),
                    'colour'      => __("Цветной"),
                ]
            ],
            'tab_dop' => [
                'title'  => __("Выберите дополнительные материалы"),
                'height_sizes' => [
                    'hidden'   => __("Скрытый карниз"),
                    'rooflight'   => __("Люстра "),
                    'light'   => __("Светильники"),
                    'led'   => __("LED подстветка по периметру"),
                    'line'   => __("Световые линии"),
                    'none'   => __("Ничего не нужно"),
                   
                ]
            ],
            'tab_body' => [
                'title'  => __("Вы заранее планируете свое посещение или отдаетесь воле случаю?
                                "),
                'body_type' => [
                    'thin'    => __("Стараюсь всегда все планировать"),
                    'slim'    => __("Спонтанность - мое второе имя!"),
                ]
            ],
            'tab_age' => [
                'title'  => __("На какой бюджет вы рассчитываете?"),
                'ages' => [
                    '18-21'    => __("до 5 000 ₽"),
                    '22-25'    => __("10 000-20 000 ₽"),
                    '26-30'    => __("Около 50 000 ₽"),
                    'either'   => __("Отдам все что есть, если это будет отпад!"),
                ]
            ],
            'tab_place' => [
                'title'  => __("На что вы обращаете внимание при посещении заведения?"),
                'places' => [
                    'home'   => __("Атмосфера"),
                    'salon'  => __("Цены"),
                    'price'  => __("Качество обслуживания"),
                    'all-in'  => __("Все выше перечисленное"),
                ]
            ],
            'tab_finally' => [
                'title'  => __("Для получения расчета укажите телефон, на который хотите получить информацию о стоимости установки натяжного потолка"),
            ],
            'tab_after_submit' => [
                'title'  => __("Мы уже начали расчет стоимости натяжных потолков"),
                'descr' => __("Ожидайте звонок в ближайшее время"),
            ],
    ]
?>

<section class="choise-master">
    <div class="container">
        <div class="choise-master__title">
            <div class="price__button"><h2>Рассчитать стоимость</h2></div>
            <div class="price__desc">Ответьте на несколько коротких вопросов и Вы получите точный расчет стоимости натяжных потолков + скидку</div>
        </div>
        <form id="form-choise-masters" method="POST" data-action="<?= get_template_directory_uri()?>/template-parts/quiz/telegram-bot_choise-master.php" data-url="<?= get_home_url() ?>">
            <?php do_action('google_invre_render_widget_action'); ?>
            <div class="form-tabs">
                <div class="form-tab form-tab_start form-tab-count form-tab-transparent">
                    <div class="form-tab__content  form-tab__content_transparent">
                        <span class="form-tab__title"><?= $text['tab_potolki']['title'] ?></span>
                        <div class="form-tab__inputs">
                            <div class="form-tab__input">
                                <label for="tab-potolki-room">
                                    <input type="checkbox" name="tab_potolki" id="tab-potolki-room" value="Комната">
                                    <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                    <div class="form-tab__text"><?= $text['tab_potolki']['colors']['room'] ?></div>
                                </label>
                            </div>
                            <div class="form-tab__input">
                                <label for="tab-potolki-bathroom">
                                    <input type="checkbox" name="tab_potolki" id="tab-potolki-bathroom" value="Ванная/туалет">
                                    <div class="input-img"><img src="<?= $images['bathroom'] ?>" alt="Background"></div>
                                    <div class="form-tab__text"><?= $text['tab_potolki']['colors']['bathroom'] ?></div>
                                </label>
                            </div>
                            <div class="form-tab__input">
                                <label for="tab-potolki-kitchen">
                                    <input type="checkbox" name="tab_potolki" id="tab-potolki-kitchen" value="Кухня">
                                    <div class="input-img"><img src="<?= $images['kitchen'] ?>" alt="Background"></div>
                                    <div class="form-tab__text"><?= $text['tab_potolki']['colors']['kitchen'] ?></div>
                                </label>
                            </div>
                            <div class="form-tab__input">
                                <label for="tab-potolki-connector">
                                    <input type="checkbox" name="tab_potolki" id="tab-potolki-connector" value="Коридор">
                                    <div class="input-img"><img src="<?= $images['connector'] ?>" alt="Background"></div> 
                                    <div class="form-tab__text"><?= $text['tab_potolki']['colors']['connector'] ?></div>
                                </label>
                            </div>
                            <div class="form-tab__input">
                                <label for="tab-potolki-childroom">
                                    <input type="checkbox" name="tab_potolki" id="tab-potolki-childroom" value="Детская">
                                    <div class="input-img"><img src="<?= $images['childroom'] ?>" alt="Background"></div>
                                    <div class="form-tab__text"><?= $text['tab_potolki']['colors']['childroom'] ?></div>
                                </label>
                            </div>
                            <div class="form-tab__input">
                                <label for="tab-potolki-another">
                                    <input type="checkbox" name="tab_potolki" id="tab-potolki-another" value="Другое">
                                    <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div> 
                                    <div class="form-tab__text"><?= $text['tab_potolki']['colors']['another'] ?></div>
                                </label>
                            </div>
                            
                        </div>
                        <button class="quiz-button quiz-button_start" type="button" id="chMasStartBtn">
                            <span class="quiz-startbtn-text"><?= $text['form']['buttons']['start'] ?></span>
                        </button>
                    </div>
                </div>
                <div class="form-tab form-tab_hair form-tab-count">
                    <div class="form-tab__content form-tab__content_counter">
                        <div class="form-tab__content-top">
                            <span class="form-tab__title"><?= $text['tab_hair']['title'] ?></span>
                            <div class="form-tab__inputs otstyp">
                                <div class="form-tab__input">
                                    
                                    <label for="tab-hair-blonde">
                                        <input type="checkbox" name="tab_hair" id="tab-hair-blonde" value="30"  checked>  
                                        <div class="slider-styled" id="slider-round">
                                        </div>
                                        <div class="noui-range">
                                            <div class="noui-range__min">от 1</div>
                                            <div class="noui-range__max">до 100</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="form-tab form-tab_boobs form-tab-count">
                    <div class="form-tab__content form-tab__content_transparent">
                        <div class="form-tab__content-top">
                            <span class="form-tab__title"><?= $text['tab_design']['title'] ?></span>
                            <div class="form-tab__inputs">
                                <div class="form-tab__input">
                                    <label for="tab-design-mat">
                                        <input type="checkbox" name="tab_design" id="tab-design-mat" value="Матовый">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_design']['boobs_sizes']['mat'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-design-glyanc">
                                        <input type="checkbox" name="tab_design" id="tab-design-glyanc" value="Глянцевый">
                                        <div class="input-img"><img src="<?= $images['bathroom'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_design']['boobs_sizes']['glyanc'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-design-satin">
                                        <input type="checkbox" name="tab_design" id="tab-design-satin" value="Сатиновый">
                                        <div class="input-img"><img src="<?= $images['kitchen'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_design']['boobs_sizes']['satin'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-design-multilevel">
                                        <input type="checkbox" name="tab_design" id="tab-design-multilevel" value="Многоуровневый">
                                        <div class="input-img"><img src="<?= $images['connector'] ?>" alt="Background"></div> 
                                        <div class="form-tab__text"><?= $text['tab_design']['boobs_sizes']['multilevel'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-design-print">
                                        <input type="checkbox" name="tab_design" id="tab-design-print" value="С фотопечатью">
                                        <div class="input-img"><img src="<?= $images['childroom'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_design']['boobs_sizes']['print'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-design-colour">
                                        <input type="checkbox" name="tab_design" id="tab-design-colour" value="Цветной">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div> 
                                        <div class="form-tab__text"><?= $text['tab_design']['boobs_sizes']['colour'] ?></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-tab__img">
                            <img src="<?= $images['2'] ?>" alt="image">
                        </div> -->
                    </div>
                </div>
                <div class="form-tab form-tab_height form-tab-count">
                    <div class="form-tab__content form-tab__content_counter">
                        <div class="form-tab__content-top">
                            <span class="form-tab__title"><?= $text['tab_dop']['title'] ?></span>
                            <div class="form-tab__inputs">
                                <div class="form-tab__input">
                                    <label for="tab-dop-hidden">
                                        <input type="checkbox" name="tab_dop" id="tab-dop-hidden" value="Скрытый карниз">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_dop']['height_sizes']['hidden'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-dop-rooflight">
                                        <input type="checkbox" name="tab_dop" id="tab-dop-rooflight" value="Люстра">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_dop']['height_sizes']['rooflight'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-dop-light">
                                        <input type="checkbox" name="tab_dop" id="tab-dop-light" value="Светильники">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_dop']['height_sizes']['light'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-dop-led">
                                        <input type="checkbox" name="tab_dop" id="tab-dop-led" value="LED подстветка по периметру">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_dop']['height_sizes']['led'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-dop-line">
                                        <input type="checkbox" name="tab_dop" id="tab-dop-line" value="Световые линии">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_dop']['height_sizes']['line'] ?></div>
                                    </label>
                                </div>
                                <div class="form-tab__input">
                                    <label for="tab-dop-none">
                                        <input type="checkbox" name="tab_dop" id="tab-dop-none" value="Ничего не нужно">
                                        <div class="input-img"><img src="<?= $images['another'] ?>" alt="Background"></div>
                                        <div class="form-tab__text"><?= $text['tab_dop']['height_sizes']['none'] ?></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-tab__img">
                        <img src="<?= $images['3'] ?>" alt="image">
                    </div> -->
                </div>
                <div class="form-tab form-tab_finally form-tab-count">
                    <div class="form-tab__content form-tab__content_counter">
                        <div class="form-tab__content-top">
                            <div class="form-finally-text">
                            <span class="form-finally-title"><?= $text['tab_finally']['title'] ?></span>
                            
                        </div>
                        
                        <div class="form-tab__content">
                            <div class="form-tab__input-wrapper">
                                <input type="text" name="client-name" id="choise-master-name" placeholder="<?= $text['form']['placeholders']['name'] ?>">
                            </div>
                            <div class="form-tab__input-wrapper">
                                <input type="tel" name="client-phone" id="choise-master-phone" placeholder="<?= $text['form']['placeholders']['phone'] ?>">
                            </div>
                            
                            
                            
                            <div class="form-tab__checkbox">
                                <input type="checkbox" name="accept-politic" id="form-tab__checkbox-politics" checked>
                                <label class="form-tab__label-checkbox" for="form-tab__checkbox-politics"><?= $text['form']['politics'] ?></label>
                            </div>
                        </div>
                        </div>
                        
                        
                        <button type="submit" id="chMasSbmtBtn"><?= $text['form']['buttons']['submit'] ?></button>
                    </div>
                    
                </div>
                <div class="form-tab form-tab_after-submit">
                    <div class="form-tab_after-submit__container">
                        <span class="tab-after-submit__title"><?= $text['tab_after_submit']['title'] ?></span>
                       
                        <span class="tab-after-submit__descr"><?= $text['tab_after_submit']['descr'] ?></span>
                        <div class="tab-after-submit__close">
                            <img src="<?= get_template_directory_uri() ?>/src/icons/close.png" alt="icon">
                        </div> 
                    </div>
                    
                </div>
                <div class="form-sale">
                    <div class="form-sale__text">Ваша скидка: <span>0 ₽</span></div>
                    <div class="form-sale__triangle"></div>
                </div>
            </div>

            <div class="form-navigate">
                <button class="quiz-button quiz-button_prev" type="button" id="chMasPrevBtn">
                    <div class="quiz-button-arrow-prev">Назад</div>
                </button>
                <button class="quiz-button quiz-button_next" type="button" id="chMasNextBtn">
                    <span class="quiz-nextbtn-text"><?= $text['form']['buttons']['next'] ?></span>
                    <!-- <img class="quiz-arrow-next" src="<?= get_template_directory_uri() ?>/src/quiz-img/img/choise-master/quiz-btn-arrow_next.svg" alt="arrow-next"> -->
                </button>
                <div class="form-steps">Вопрос 1/5</div>
            </div>

            <div class="form-errors">
                <span class="form-error-text"><?= $text['form']['errors'] ?></span>
            </div>
            
        </form>
    </div>
</section>