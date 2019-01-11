<?php global $product; ?>
<?php $gallery      = get_field('галерея',                  $product->ID); ?>
<?php $availability = get_field('наличие',                  $product->ID); ?>
<?php $dollar       = get_field('курс_доллара_',            6); ?>
<?php $priceIn      = get_field('курс_доллара__копия',      6); ?>
<?php $price        = number_format((get_field('цена',      $product->ID) * $dollar * $priceIn), 0, '.', ' '); ?>
<?php $feature      = get_field('особенности_этой_модели',  $product->ID); ?>
<?php $attributes   = get_field('атребуты',                 $product->ID); ?>

<div class="detail-modal modal zoom-modal fade modal-large" id="detail-modal-<?= $product->ID ?>" tabindex="-1"  role="dialog" aria-labelledby="detail-modal-<?= $product->ID ?>" aria-hidden="true">
    <div  class="modal-vertical-align">
        <div class="modal-dialog modal-dialog-row" role="document">
            <div class="modal-content">
                <div class="modal-container">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38" height="38" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
                            <rect x="2" y="2" fill="none" stroke="#FFFFFF" stroke-width="4" width="34" height="34"/>
                            <polygon fill="#FFFFFF" points="28,13.3 25.7,11 19,17.7 12.3,11 10,13.3 16.7,20 10,26.7 12.3,29 19,22.3 25.7,29 28,26.7 21.3,20"/>
                        </svg>
                    </button>
                    <div class="card-detail row">
                        <div class="col-lg-6">
                            <h3><b><?= $product->post_title; ?></b></h3>
                            <div class="gallery-container">
                                <div class="gallery-for">
                                    <?php foreach($gallery as $photo): ?>
                                        <div><a href="<?= $photo['url'] ?>" data-fancybox><img src="<?= $photo['sizes']['home-product-thumb'] ?>" class="zoom" data-zoom="<?= $photo['url'] ?>" width="531" height="266" alt="Picture"></a></div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="zoom-container">&nbsp;</div>
                                <div class="gallery-nav-container">
                                    <div class="gallery-nav">
                                        <?php foreach($gallery as $photo): ?>
                                            <div><img src="<?= $photo['sizes']['home-product-thumb'] ?>" width="531" height="266" alt="Picture"></div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="gallery-control">
                                        <button type="button" class="gallery-prev">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45" height="45" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                                <rect  x="2.5" y="2.5" fill="none" stroke="#000000" stroke-width="5" width="55" height="55"/>
                                                <path fill="#000000" d="M12.6,27.7c-1,1-1,2.6,0,3.4l15.5,15.4c1.9,1.9,4.6-0.9,2.8-2.8L19.1,32.2c-0.4-0.4-0.3-0.7,0.3-0.7h25.7
                                                c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2H19.4c-0.6,0-0.7-0.3-0.3-0.7l11.7-11.7c1.9-1.9-0.9-4.6-2.8-2.8L12.6,27.7z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="gallery-next">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45" height="45" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                                <rect fill="none" stroke="#000000" stroke-width="5" x="2.5" y="2.5" width="55" height="55"/>
                                                <path fill="#000000" d="M46.4,31.3c1-1,1-2.6,0-3.4L30.9,12.4c-1.9-1.9-4.6,0.9-2.8,2.8l11.7,11.7c0.4,0.4,0.3,0.7-0.3,0.7H13.8
                                                c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2h25.7c0.6,0,0.7,0.3,0.3,0.7L28.1,43.8c-1.9,1.9,0.9,4.6,2.8,2.8L46.4,31.3z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-container">
                                <table>
                                    <tbody>
                                        <?php foreach($attributes as $attribut): ?>
                                            <tr>
                                                <td><?= $attribut['название'] ?></td>
                                                <td><?= $attribut['значение'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="status"><?= $availability; ?></p>
                            <p class="price">от <?= $price; ?> грн</p>
                            <script type="text/javascript">(function() {
                                /* if (window.pluso)if (typeof window.pluso.start == "function") return;
                                if (window.ifpluso==undefined) { window.ifpluso = 1;
                                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                    var h=d[g]('body')[0];
                                    h.appendChild(s);
                                }})(); */
                            </script>
                            <div class="pluso" data-background="#ebebeb" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                            <p><?= $product->post_content; ?></p>
                            <br><br>
                            <strong>Занинтересовал этот диван </strong>
                            <br><br>
                            <form action="#" method="post" id="order_call" class="form order_call">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-row">
                                            <input type="tel"   id="detail-info" class="empty detail-tel" pattern="[\+]\d{2}[\(]\d{3}[\)]\d{3}[\-]\d{2}[\-]\d{2}" required>
                                            <input type="hidden" class="detail-name" value="<?= $product->post_title ?>">
                                            <input type="hidden" class="detail-img"  value="<?= $gallery[0]['sizes']['home-product-thumb'] ?>">
                                            <input type="hidden" class="detail-desc"  value="<?= $product->post_content; ?>">
                                            <label for="detail-info">Телефон</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><button class="button" type="submit">Перезвоните мне</button></div>
                                </div>
                            </form>
                            <p id='error-msg' style='color: red; display: none;'>Введите корректный номер телефона!!</p>
                            <h6><b>особеность этой модели</b></h6>
                            <hr>
                            <?= $feature; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>