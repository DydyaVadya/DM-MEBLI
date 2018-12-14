<?php 

    /**
     * Screen 1 - Slider
     * 
     * Ссылка на тз: https://projects.invisionapp.com/share/NUFH38YCW42#/screens
     * 
     * 5. * Слайдер содержит в себе фоновое изображение, элементы управление(стрелки, булеты) и плашку. 
     *    * Слайды добавляются и редактируются с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 6. * Плашка содержит жирный заголовок, подзаголовок и кнопку. 
     *    * Заголовки и надпись на кнопке редактируется с админки. Также, должна быть реализована возможность редактирования прозрачности плашки с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 7. По нажатию, отображается попап - popup-3 https://projects.invisionapp.com/d/main#/console/13152173/274997315/comments
     * 
     * @author fabrika-klientov <office@fabrika-klientov.ua>
     * @link https://fabrika-klientov.ua
     * @copyright 2018 Fabrika-kliento
     * @version 2018.02.05
     */

    #Get all fields slider
    $sliders = get_field('слайды');

?> 
<div class="carousel-section section section-1" id="section-1">

 <div class="carousel-row">

    <div class="carousel">

        <?php foreach($sliders as $slider): ?>
            <div class="carousel-item">
                <img src="<?= $slider['url'] ?>" class="carousel-img" width="1920" height="1000" alt="Picture">
                <div class="carousel-container">
                    <div class="carousel-panel">
                        <div class="heading_wrap">
                        <h1 class="heading"><span><?= $slider['title']; ?></span><br> <?= $slider['caption']; ?></h1>
                        </div>
                            <a href="#" class="button" data-toggle="modal" data-target="#get-consultation-modal" title="Получить консультацию">Получить консультацию</a>
                        </div>
                </div> 
            </div>
        <?php endforeach; ?>

    </div>

    <div class="carousel-control">

        <div class="carousel-nav">
            <button type="button" class="carousel-prev">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60" height="60" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <rect  x="2.5" y="2.5" fill="none" stroke="#ffffff" stroke-width="5" width="55" height="55"/>
                    <path fill="#ffffff" d="M12.6,27.7c-1,1-1,2.6,0,3.4l15.5,15.4c1.9,1.9,4.6-0.9,2.8-2.8L19.1,32.2c-0.4-0.4-0.3-0.7,0.3-0.7h25.7
                    c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2H19.4c-0.6,0-0.7-0.3-0.3-0.7l11.7-11.7c1.9-1.9-0.9-4.6-2.8-2.8L12.6,27.7z"/>
                </svg>
            </button>
            <button type="button" class="carousel-next">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60" height="60" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <rect fill="none" stroke="#ffffff" stroke-width="5" x="2.5" y="2.5" width="55" height="55"/>
                    <path fill="#ffffff" d="M46.4,31.3c1-1,1-2.6,0-3.4L30.9,12.4c-1.9-1.9-4.6,0.9-2.8,2.8l11.7,11.7c0.4,0.4,0.3,0.7-0.3,0.7H13.8
                    c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2h25.7c0.6,0,0.7,0.3,0.3,0.7L28.1,43.8c-1.9,1.9,0.9,4.6,2.8,2.8L46.4,31.3z"/>
                </svg>
            </button>
        </div>

        <div class="carousel-dots"></div>

    </div>

</div>
</div>