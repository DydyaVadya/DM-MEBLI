<?php
    /**
     * Catalog product
     * 
     * Ссылка на тз: https://projects.invisionapp.com/share/NUFH38YCW42#/screens
     * 
     * 15. * Заголовки и изображение редактируется с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 14. * В данном блоке, отображаются особенности товаров. 
     *     * Они реализованы в виде пунктов, отображаются по диагонали. 
     *     * Максимум, может быть 6 пунктов. Заголовки и описание редактируются с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 16. Изображение, описание, фио и должность редактируется с админки.
     * 
     * @author fabrika-klientov <office@fabrika-klientov.ua>
     * @link https://fabrika-klientov.ua
     * @copyright 2018 Fabrika-kliento
     * @version 2018.02.06
     */

?>

<?php $homepage     = 6; ?>
<?php $title        = get_field('заголовок_б4',        $homepage); ?>
<?php $subtitle     = get_field('подзаголовок_б4',     $homepage); ?>
<?php $background   = get_field('картинка_на_фоне_б4', $homepage); ?>

<?php #Блок1 ?>
<?php $title_1           = get_field('заголовок_1_б4',       $homepage); ?>
<?php $description_1     = get_field('подзаголовок_1_б4',    $homepage); ?>

<?php #Блок2 ?>
<?php $title_2           = get_field('заголовок_2_б4',       $homepage); ?>
<?php $description_2     = get_field('подзаголовок_2_б4',    $homepage); ?>

<?php #Блок3 ?>
<?php $title_3           = get_field('заголовок_3_б4',       $homepage); ?>
<?php $description_3     = get_field('подзаголовок_3_б4',    $homepage); ?>

<?php #Блок4 ?>

<?php $title_4           = get_field('заголовок_4_б4',       $homepage); ?>
<?php $description_4     = get_field('подзаголовок_4_б4',    $homepage); ?>




<?php #Блок5 ?>
<?php $title_5          = get_field('заголовок_5_б4',       $homepage); ?>
<?php $description_5    = get_field('подзаголовок_5_б4',    $homepage); ?>

<?php #Блок6 ?>
<?php $title_6          = get_field('заголовок_6_б4',       $homepage); ?>
<?php $description_6    = get_field('подзаголовок_6_б4',    $homepage); ?>


<?php $comment        = get_field('коментарий_б4',                  $homepage); ?>
<?php $namecompony    = get_field('имя_и_фамилия_основателя_б4',    $homepage); ?>
<?php $signature      = get_field('подпись_б4',                     $homepage); ?>




<div class="section section-4" id="section-4">
    <div class="page-container-large">
        <div class="page-container">

            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="heading-row">
                        <p class="heading-count">04</p>
                        <div class="heading-row-container">
                            <h2 class="heading"><span>Чтобы полюбить </span> <strong>наши диваны, </strong> <br> достаточно знать следущее:</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 order-first-mb col-md-7">
                    <div class="media-group">
                        <img src="<?= get_template_directory_uri() ?>/public/images/pictures/DM.svg" class="brand" width="184" height="22" alt="Picture">
                        <img src="<?= get_template_directory_uri() ?>/public/images/pictures/product-1.png" width="661" height="523" alt="Picture">
                    </div>
                </div>
            </div>

            <div class="group-item row">
                <div class="col-sm-6 col-md-4">
                    <p class="count">01</p>
                    <h3 class="title"><?= $title_1 ?></h3>
                    <p><?= $description_1 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <p class="count">02</p>
                    <h3 class="title"><?= $title_2 ?></h3>
                    <p><?= $description_2 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <p class="count">03</p>
                    <h3 class="title"><?= $title_3 ?></h3>
                    <p><?= $description_3 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <p class="count">04</p>
                    <h3 class="title"><?= $title_4 ?></h3>
                    <p><?= $description_4 ?></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <p class="count">05</p>
                    <h3 class="title"><?= $title_5 ?></h3>
                    <p> <?= $description_5 ?></p>
                </div>
                <?php if($title_6 != ''): ?>
                    <div class="col-sm-6 col-md-4">
                        <p class="count">06</p>
                        <h3 class="title"><?= $title_6 ?></h3>
                        <p><?= $description_6 ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <h2 class="heading"> <span>Дмитрий </span> <strong>Середа</strong> <br> Основатель компании <br>
                DM МЕБЕЛЬ</h2>

            <div class="blockquote-section">
                <div class="blockquote-container">
                    <div class="row">
                        <div class=" align-self-end col-lg-7">
                            <div class="blockquote-img-container"><img src="<?= $background['url'] ?>" class="blockquote-img" width="907" height="429" alt="Picture"></div>
                        </div>
                        <div class=" col-lg-5">
                            <div class="blockquote">
                                <blockquote><?= $comment ?></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 offset-md-5 col-lg-5 offset-lg-7">
                        <div class="author">
                            <h4><?= $namecompony ?></h4>
                            <h5><?= $signature ?></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="scroll-to-container">
            <p class="scroll-to-count">4 <span>/</span> 8</p>
            <a href="#section-5" class="scroll-to" title="Дальше">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.2" height="82.5" viewBox="0 0 16.2 85.5" style="enable-background:new 0 0 16.2 85.5;" xml:space="preserve">
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M8.2,0v82.9"/>
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M0.8,74.3l7.3,9.6l7.3-9.6"/>
                </svg>
            </a>
        </div>
    </div>
</div>
