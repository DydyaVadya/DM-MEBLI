<?php
    /**
     * О компании 2
     * 
     * Ссылка на тз: https://projects.invisionapp.com/share/NUFH38YCW42#/screens
     * 
     * 20  * Заголовки, описание и изображение редактируется с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 21. * Данная форма, имеет инпут для ввода номера телефона и загрузки изображения.
     * ----------------------------------------------------------------------------------------------------------------------
     * 22. * По нажатию, открывается окно выбора файла.
     * ----------------------------------------------------------------------------------------------------------------------
     * 23. * После добавления изображения, тут отображается название файла, если же файл не один, то должно отображаться количество добавленных изображений, без названия. Пример, если добавлено 3 фотки - "Добавлено 3 фотографии"
     * ---------------------------------------------------------------------------------------------------------------------- 
     * 24. * По нажатию, отображается поп-ап - popup1
     * 
     * @author fabrika-klientov <office@fabrika-klientov.ua>
     * @link https://fabrika-klientov.ua
     * @copyright 2018 Fabrika-kliento
     * @version 2018.02.06
     */
?>
 
<?php $homepage     = 6; ?>
<?php $title        = get_field('заголовок_б7',        $homepage); ?>
<?php $subtitle     = get_field('подзаголовок_б7',     $homepage); ?>
<?php $textform     = get_field('текст_к_форме_б6',    $homepage); ?>

<div class="section section-7" id="section-7">
    
    <div class="page-container-large">
        <div class="page-container">

            <div class="heading-row">
                <p class="heading-count">07</p>
                <div class="heading-row-container">
                    <h2 class="heading"><?= $title ?><br> <?= $subtitle ?></h2>
                </div>
            </div>

            <div class="slider-section">
                <div class="slider">
                    <?php 
                    
                        $args = array(
                            'post_type'    => 'review'
                        );
                        
                        $posts = get_posts( $args );
                    ?>

                    <?php foreach($posts as $post): ?>
                        <div class="slider-item">
                            <div class="review">
                                <img src="<?= get_the_post_thumbnail_url($post->ID, 'thumbnail') ?>" class="hero-img" width="112" height="112" alt="Picture">
                                <?= $post->post_content ?>
                            </div>
                        </div>
                    <?php endforeach;  ?>
                </div>
                <div class="slider-control">

                    <div class="slider-nav">
                        <button type="button" class="slider-prev">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.9" height="18.4" viewBox="0 0 16.9 18.4" style="enable-background:new 0 0 16.9 18.4;" xml:space="preserve">
                                <path fill="none" stroke="#231F20" stroke-width="3" stroke-linecap="round" d="M15.4,9.2L8.4,2.1L1.5,9.2"/>
                                <path fill="none" stroke="#231F20" stroke-width="3" stroke-linecap="round" d="M8.4,16.9V5.7"/>
                            </svg>
                        </button>
                        <button type="button" class="slider-next">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.9 18.4" style="enable-background:new 0 0 16.9 18.4;" xml:space="preserve">
                                <path fill="none" stroke="#231F20" stroke-width="3" stroke-linecap="round" d="M1.5,9.1l6.9,7.1l6.9-7.1"/>
                                <path fill="none" stroke="#231F20" stroke-width="3" stroke-linecap="round" d="M8.4,1.5v11.2"/>
                            </svg>
                        </button>
                    </div>

                    <div class="slider-dots"></div>

                </div>
            </div>

            <div class="feedback row">
                <div class="col-sm-6">
                    <h3 class="title">Нам будет приятно, если вы оставите свой отзыв о наших диванах</h3>
                </div>
                <div class="col-sm-6">
                    <a href="#"  class="button" data-toggle="modal" data-target="#review-modal" title="Поделиться впечатлениями">Поделиться впечатлениями</a>
                </div>
            </div>

        </div>
        <div class="scroll-to-container">
            <p class="scroll-to-count">7 <span>/</span> 8</p>
            <a href="#section-8" class="scroll-to" title="Дальше">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.2" height="82.5" viewBox="0 0 16.2 85.5" style="enable-background:new 0 0 16.2 85.5;" xml:space="preserve">
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M8.2,0v82.9"/>
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M0.8,74.3l7.3,9.6l7.3-9.6"/>
                </svg>
            </a>
        </div>
    </div>
</div>