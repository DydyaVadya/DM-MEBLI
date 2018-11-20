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
<?php $title        = get_field('заголовок_б6',        $homepage); ?>
<?php $subtitle     = get_field('подзаголовок_б6',     $homepage); ?>
<?php $textform     = get_field('текст_к_форме_б6',    $homepage); ?>

<div class="section section-6" id="section-6">
    <div class="page-container-large">
        <div class="page-container">

            <div class="row">
                <div class="col-md-6">

                    <div class="heading-row">
                        <p class="heading-count">06</p>
                        <div class="heading-row-container">
                            <h2 class="heading"><?= $title ?><br> <?= $subtitle ?></h2>
                        </div>
                    </div>

                    <p class="text"><?= $textform ?></p>

                     <form action="#" method="post" class="form-panel form-file form-realization">
                        <div class="tel-row input-row">
                            <input type="tel" id="tel-input" class="tel-input empty" name="tel-input" pattern="[\+]\d{2}[\(]\d{3}[\)]\d{3}[\-]\d{2}[\-]\d{2}" required>
                            <label for="tel-input">Телефон</label>
                        </div>
                        <div class="file-input-row add-file">
                            <input type="file" multiple="multiple" id="form-realization-file" name="file1" required="required" class="file-input">
                            <button type="button" class="btn-add-file">Добавить фотографию</button>
                            <input type="hidden" value="realization" class="type-form">
                            <div class="selected-files-container">
                                <div class="selected-files-panel">
                                    <a class="selected-files-count collapse-hover" data-toggle="collapse" href="#selected-files" role="button" aria-expanded="false" aria-controls="selected-files">Фотографий: <i></i></a>
                                    <div class="selected-files collapse"></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="button btn-send"><span>Обсудить реализацию</span></button>
                    </form>

                </div>
                <div class="col-md-6"><img src="<?= get_template_directory_uri() ?>/public/images/pictures/pic-2.png" class="pic" width="509" height="371" alt="Picture"></div>
            </div>

        </div>
        <div class="scroll-to-container">
            <p class="scroll-to-count">6 <span>/</span> 8</p>
            <a href="#section-7" class="scroll-to" title="Дальше">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.2" height="82.5" viewBox="0 0 16.2 85.5" style="enable-background:new 0 0 16.2 85.5;" xml:space="preserve">
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M8.2,0v82.9"/>
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M0.8,74.3l7.3,9.6l7.3-9.6"/>
                </svg>
            </a>
        </div>
    </div>
</div>
