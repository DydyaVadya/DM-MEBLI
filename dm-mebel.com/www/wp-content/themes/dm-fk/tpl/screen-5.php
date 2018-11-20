<?php
    /**
     * О компании 2
     * 
     * Ссылка на тз: https://projects.invisionapp.com/share/NUFH38YCW42#/screens
     * 
     * 15. * Данный блок отображает особенности компании. 
     *     * Заголовки редактируются с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 14. * Особенности, которые реализованы в виде пунктов, содержат в себе иконку заголовок и описание - все редактируется с админки. 
     *     * Пунктов, максимум может быть 6.
     * 
     * @author fabrika-klientov <office@fabrika-klientov.ua>
     * @link https://fabrika-klientov.ua
     * @copyright 2018 Fabrika-kliento
     * @version 2018.02.06
     */

?>

<?php $homepage     = 6; ?>
<?php $title        = get_field('заголовок_б5',        $homepage); ?>
<?php $subtitle     = get_field('подзаголовок_б5',     $homepage); ?>
<?php $background   = get_field('картинка_на_фоне_б4', $homepage); ?>

<?php #Блок 1 ?>
<?php $title_1           = get_field('заголовок_блока_1_б5',    $homepage); ?>
<?php $description_1     = get_field('текст_блока_1_б5',        $homepage); ?>
<?php $icon_1            = get_field('иконка_блока_1_б5',       $homepage); ?>

<?php #Блок 2 ?>
<?php $title_2           = get_field('заголовок_блока_2_б5',    $homepage); ?>
<?php $description_2     = get_field('текст_блока_2_б5',        $homepage); ?>
<?php $icon_2            = get_field('иконка_блока_2_б5',       $homepage); ?>

<?php #Блок 3 ?>
<?php $title_3           = get_field('заголовок_блока_3_б5',    $homepage); ?>
<?php $description_3     = get_field('текст_блока_3_б5',        $homepage); ?>
<?php $icon_3            = get_field('иконка_блока_3_б5',       $homepage); ?>

<?php #Блок 4 ?>
<?php $title_4           = get_field('заголовок_блока_4_б5',    $homepage); ?>
<?php $description_4     = get_field('текст_блока_4_б5',        $homepage); ?>
<?php $icon_4            = get_field('иконка_блока_4_б5',       $homepage); ?>

<?php #Блок 5 ?>
<?php $title_5           = get_field('заголовок_блока_5_б5',    $homepage); ?>
<?php $description_5     = get_field('текст_блока_5_б5',        $homepage); ?>
<?php $icon_5            = get_field('иконка_блока_5_б5',       $homepage); ?>

<?php #Блок 6 ?>
<?php $title_6           = get_field('заголовок_блока_6_б5',    $homepage); ?>
<?php $description_6     = get_field('текст_блока_6_б5',        $homepage); ?>
<?php $icon_6            = get_field('иконка_блока_6_б5',       $homepage); ?>

<div class="section section-5" id="section-5">
    <div class="page-container-large">
        <div class="page-container">

            <div class="heading-row">
                <p class="heading-count">05</p>
                <div class="heading-row-container">
                    <h2 class="heading"><?= $title ?> <br> <?= $subtitle ?></h2>
                </div>
            </div>

            <div class="group-article row">
                <div class="col-sm-6 col-md-4">
                    <div class="article-icon-container">
                        <?= file_get_contents($icon_1['url']) ?>
                    </div>
                    <h5><b><?= $title_1 ?></b></h5>
                    <p><?= $description_1 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="article-icon-container">
                        <?= file_get_contents($icon_2['url']) ?>
                    </div>
                    <h5><b><?= $title_2 ?></b></h5>
                    <p><?= $description_2 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="article-icon-container">
                        <?= file_get_contents($icon_3['url']) ?>
                    </div>
                    <h5><b><?= $title_3 ?></b></h5>
                    <p><?= $description_3 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="article-icon-container">
                        <?= file_get_contents($icon_4['url']) ?>   
                    </div>
                    <h5><b><?= $title_4 ?></b></h5>
                    <p><?= $description_4 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="article-icon-container">
                        <?= file_get_contents($icon_5['url']) ?>   
                    </div>
                    <h5><b><?= $title_5 ?></b></h5>
                    <p><?= $description_5 ?></p>
                </div>
                <?php if($title_6 != ''): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="article-icon-container">
                        <?= file_get_contents($icon_6['url']) ?>   
                    </div>
                    <h5><b><?= $title_6 ?></b></h5>
                    <p><?= $description_6 ?></p>
                </div>
                <?php endif; ?>
            </div>

        </div>
        <div class="scroll-to-container">
            <p class="scroll-to-count">5 <span>/</span> 8</p>
            <a href="#section-6" class="scroll-to" title="Дальше">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.2" height="82.5" viewBox="0 0 16.2 85.5" style="enable-background:new 0 0 16.2 85.5;" xml:space="preserve">
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M8.2,0v82.9"/>
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M0.8,74.3l7.3,9.6l7.3-9.6"/>
                </svg>
            </a>
        </div>
    </div>
</div>
