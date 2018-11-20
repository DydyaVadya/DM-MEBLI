<?php
    /**
     * Catalog product
     * 
     * Ссылка на тз: https://projects.invisionapp.com/share/NUFH38YCW42#/screens
     * 
     * 8.  * В данном блоке, отображаются модели товаров, в разрезе разных категорий. 
     *     * Содержит в себе жирный заголовок, подзаголовок, табы категорий и каталог из 4х товаров.
     * ----------------------------------------------------------------------------------------------------------------------
     * 9.  * Заголовки редактируются с админки.
     * ----------------------------------------------------------------------------------------------------------------------
     * 10. * Табы редактируются с админки. Таба содержит в себе до 4х товаров. 
     *     * Если в табе нету товаров, то таба не отображается. При смене табы, меняются и товары.
     *  ----------------------------------------------------------------------------------------------------------------------
     * 11. * Превью товара имеет название, изображение, описание и кнопку перехода в карточку товара. 
     *     * Все редактируемое с админки. 
     *     * Переход в карточку осуществляется не только по кнопке, а и по нажатию на название, изображение, и описание.
     *  ----------------------------------------------------------------------------------------------------------------------
     * 12. * Отображается попап - popup-2
     * 
     * @author fabrika-klientov <office@fabrika-klientov.ua>
     * @link https://fabrika-klientov.ua
     * @copyright 2018 Fabrika-kliento
     * @version 2018.02.06
     */
?>

<?php $homepage     = 6; ?>
<?php $title        = get_field('заголовок',        $homepage); ?>
<?php $subtitle     = get_field('подзаголовок',     $homepage); ?>

<div class="section section-2" id="section-2">
    <div class="page-container-large">
        <div class="page-container">
            <div class="heading-row">
                <p class="heading-count">02</p>
                <div class="heading-row-container">
                    <h2 class="heading"><?= $title ?><br> <?= $subtitle ?></h2>
                </div>
            </div>

            <div class="hr-scrolling">
                <nav id="hr-scrolling-nav" class="hr-scrolling-nav dragscroll">
                    <ul id="hr-scrolling-list" class="nav nav-tabs" role="tablist">

                        <?php #Выводим списовк всех катигорий кроме пустых ?>
                        <?php $categories = get_categories('parent=2') ?>

                        <?php #Выводим списовк всех катигорий кроме пустых ?>
                        <?php $active = false; ?>

                        <?php foreach($categories as $category): ?>
                            <?php if($active): ?>
                                <li>
                                    <a data-toggle="tab" id="nav-tab-<?= $category->term_id ?>" href="#tab-<?= $category->term_id ?>" role="tab" aria-controls="tab-<?= $category->term_id ?>" aria-selected="false"><?= $category->name ?></a>
                                </li>
                            <?php else: ?>
                                <?php if(!$active) $active = true; ?>
                                <li>
                                    <a class="active" data-toggle="tab" id="nav-tab-<?= $category->term_id ?>" href="#tab-<?= $category->term_id ?>" role="tab" aria-controls="tab-<?= $category->term_id ?>" aria-selected="true"><?= $category->name ?></a>
                                </li>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </ul>
                </nav>
            </div>

            <div class="tab-content">

                <?php #Выводим списовк всех катигорий кроме пустых ?>
                <?php $active = false; ?>
                
                <?php foreach($categories as $category): ?>
                <?php $i = 0; ?>
                    <div class="tab-pane <?= ($active ? 'fade' : 'show active') ?>" id="tab-<?= $category->term_id ?>" role="tabpanel" aria-labelledby="nav-tab-<?= $category->term_id ?>">
                        <div class="tab-content-id">
                            <?php if(!$active) $active =  true; ?>

                            <div class="row">

                                <?php $posts = get_posts('category=' . $category->term_id . '&numberposts=-1');?>
                                <?php krsort($posts); ?>
                                <?php foreach($posts as $post): ?>

                                    <?php $dollar = get_field('курс_доллара_',       6) ; ?>
                                    <?php $priceIn = get_field('курс_доллара__копия', 6) ; ?>
                                    <?php $price   = number_format(get_field('цена', $post->ID) * $dollar * $priceIn, 0, '.', ' '); ?>

                                    <?php $i++; ?> 

                                    <div class="col-md-6">

                                        <div class="card" data-toggle="modal" data-target="#detail-modal-<?= $post->ID ?>">

                                            <h3 class="card-name"><a href="#" data-toggle="modal" data-target="#detail-modal-<?= $post->ID ?>" title=""><?= $post->post_title ?></a> <span>0<?= $i ?></span></h3>

                                            <div class="card-container">
                                                <a href="#" data-toggle="modal" data-target="#detail-modal-<?= $post->ID ?>" class="card-media" title="<?= $post->post_title ?>">
                                                    <?= get_the_post_thumbnail( $post->ID, 'home-product-thumb', ['class' => 'card-img']); ?>
                                                </a>
                                                <div class="card-row row">
                                                    <div class="col-sm-7"><a href="#" data-toggle="modal" data-target="#detail-modal-<?= $post->ID ?>" class="card-description" title="<?= $post->post_content; ?>"><?= $post->post_content; ?></a></div>
                                                    <div class="col-sm-5 align-self-center"><p class="card-price">от <?= $price; ?> грн</p></div>
                                                </div>
                                                <a href="#" class="card-btn button" data-toggle="modal" data-target="#detail-modal-<?= $post->ID ?>" title="Подробнее"><span>Подробнее</span></a>
                                            </div>

                                        </div>

                                        <?php $GLOBALS['product'] = $post; ?>
                                        
                                        <?php #Для каждого продукта добавляем окно ?>
                                        <?php ob_start(); ?>

                                        <?php get_template_part('tpl/model', 'product'); ?>
                                            
                                        <?php 
                                            #Сохроняем всё в переменную и выводим в футер
                                            $GLOBALS['product_footer'] .= ob_get_contents();
                                            
                                            ob_end_clean();
                                        ?>
                                        

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        </div>
                        <?php if(count($posts) > 4): ?>
                            <div class="onClickProduct" data-tab-product="tab-<?= $category->term_id ?>"><span>Показать больше</span></div>
                        <?php endif; ?>    
                    </div>
                    
                <?php endforeach; ?>
                    
            </div>
        </div>
        <div class="scroll-to-container">
            <p class="scroll-to-count">2 <span>/</span> 8</p>
            <a href="#section-3" class="scroll-to" title="Дальше">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.2" height="82.5" viewBox="0 0 16.2 85.5" style="enable-background:new 0 0 16.2 85.5;" xml:space="preserve">
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M8.2,0v82.9"/>
                    <path fill="none" stroke="#B7B7B7" stroke-width="2" d="M0.8,74.3l7.3,9.6l7.3-9.6"/>
                </svg>
            </a>
        </div>
    </div>
</div>