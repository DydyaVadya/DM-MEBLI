<?php
    /**
     * Catalog product
     * 
     * Ссылка на тз: https://projects.invisionapp.com/share/NUFH38YCW42#/screens
     * 
     * 13. * Заголовок, подзаголовок, описание и изображение - все редактируется с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 14.  * Отображается поп-ап - popup-3
     * 
     * @author fabrika-klientov <office@fabrika-klientov.ua>
     * @link https://fabrika-klientov.ua
     * @copyright 2018 Fabrika-kliento
     * @version 2018.02.06
     */

?>

<?php $homepage     = 6; ?>
<?php $title        = get_field('заголовок_б3',        $homepage); ?>
<?php $subtitle     = get_field('подзаголовок_б3',     $homepage); ?>
<?php $description  = get_field('описание_б3',         $homepage); ?>
<?php $text_btn     = get_field('текст_на_кнопке_б3',  $homepage); ?>
<?php $link_btn     = get_field('ссылка_на_кнопку_б3', $homepage); ?>
<?php $background   = get_field('картинка_фоне_б3',    $homepage); ?>

<div class="section section-3" id="section-3">
    <div class="page-container-large">
        <div class="page-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="heading-stretch">
                        <div class="heading-row">
                            <p class="heading-count">03</p>
                            <div class="heading-row-container">
                                <h2 class="heading"> <?= $title ?> <br> <?= $subtitle ?></h2>
                            </div>
                        </div>
                    </div>
                    <?= $description ?>
                    <a href="<?= $link_btn ?>" data-toggle="modal" data-target="#get-consultation-modal" class="button" title="<?= $text_btn ?>"><?= $text_btn ?></a>
                </div>
                <div class="order-first-mb col-md-7">
                    <div class="media-container"><img src="<?= $background['url'] ?>" width="782" height="688" alt="Picture"></div>
                </div>
            </div>

        </div>
        <div class="scroll-to-container">
            <p class="scroll-to-count">3 <span>/</span> 8</p>
            <a href="#section-4" class="scroll-to" title="Дальше">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.2" height="82.5" viewBox="0 0 16.2 85.5" style="enable-background:new 0 0 16.2 85.5;" xml:space="preserve">
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M8.2,0v82.9"/>
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M0.8,74.3l7.3,9.6l7.3-9.6"/>
                </svg>
            </a>
        </div>
    </div>
</div>
