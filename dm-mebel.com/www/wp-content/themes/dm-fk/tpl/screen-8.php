<?php $homepage     = 6; ?>
    <?php $title        = get_field('заголовок_б8',        $homepage); ?>
    <?php $phones     = get_field('номера_телефонов_8б',     $homepage); ?>
    <?php $email   = get_field('email_8б', $homepage); ?>
    <?php $address   = get_field('адрес_8б', $homepage); ?>
    <?php $grufik   = get_field('график_работы_8б', $homepage); ?>
    <?php $int   = get_field('ссылка_ins', $homepage); ?>
    <?php $fb   = get_field('ссылка_fb', $homepage); ?>
    <?php $vk   = get_field('ссылка_vk', $homepage); ?>
<div class="section section-8" id="section-8">
    <div class="page-container-large">
        <div class="page-container">

            <div class="row">
                <div class="col-md-5">
                    <div class="heading-row">
                        <p class="heading-count">08</p>
                        <div class="heading-row-container">
                            <h2 class="heading"><strong><?= $title ?> </strong></h2>
                        </div>
                    </div>
                    <div class="map-container"><div class="map" id="map"></div></div>
                </div>
                <div class="col-md-7">
                    <div class="contact-panel">
                        <div class="contact-phone">
                            <?php $phones = explode(",", $phones); ?>
                            <?php foreach($phones as $phone): ?>
                                <p><a href="tel:<?= $phone ?>" target="_blank" title="<?= $phone ?>"><?= $phone ?></a><p>
                            <?php endforeach; ?>
                        </div>
                        <div class="contact-email"><p><b>е-mail:</b>  <a href="mailto:<?= $email ?>" title="<?= $email ?>"><?= $email ?></a></p></div>
                        <div class="contact-address"><a href="//www.google.com.ua/maps/place/%D0%BF%D0%B5%D1%80.+1-%D0%B3%D0%BE+%D0%9C%D0%B0%D1%8F,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C/@51.4998693,31.3079522,19z/data=!3m1!4b1!4m5!3m4!1s0x46d548f5cb27e575:0xb58ffcd8116d980c!8m2!3d51.4998685!4d31.3084994?hl=ru" target="_blank" title="<?= $address ?>"><?= $address ?></a></div>
                        <div class="contact-time"><b><?= $grufik ?></b></div>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="<?= $int ?>"  target="_blank" title="Instagram">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21" height="21" viewBox="0 0 21 21" style="enable-background:new 0 0 21 21;" xml:space="preserve">
                                    <path d="M15.2,0H5.8C2.6,0,0,2.6,0,5.8v9.4C0,18.4,2.6,21,5.8,21h9.4c3.2,0,5.8-2.6,5.8-5.8V5.8C21,2.6,18.4,0,15.2,0L15.2,0z M19.1,15.2c0,2.2-1.8,3.9-3.9,3.9H5.8c-2.2,0-3.9-1.8-3.9-3.9V5.8c0-2.2,1.8-3.9,3.9-3.9h9.4c2.2,0,3.9,1.8,3.9,3.9V15.2z"/>
                                    <path d="M10.5,5.1c-3,0-5.4,2.4-5.4,5.4s2.4,5.4,5.4,5.4c3,0,5.4-2.4,5.4-5.4C15.9,7.5,13.5,5.1,10.5,5.1L10.5,5.1z M10.5,14.1 c-2,0-3.6-1.6-3.6-3.5C7,8.5,8.5,7,10.5,7s3.6,1.6,3.6,3.5S12.5,14.1,10.5,14.1L10.5,14.1z"/>
                                    <path d="M16.1,3.5c-0.4,0-0.7,0.1-1,0.4c-0.2,0.2-0.4,0.6-0.4,1c0,0.4,0.1,0.7,0.4,1c0.2,0.2,0.6,0.4,1,0.4c0.4,0,0.7-0.1,1-0.4 c0.2-0.2,0.4-0.6,0.4-1s-0.1-0.7-0.4-1C16.9,3.7,16.5,3.5,16.1,3.5L16.1,3.5z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $fb ?>" target="_blank" title="Facebook">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13" height="24" viewBox="0 0 13 24" style="enable-background:new 0 0 23 42.5;" xml:space="preserve">
                                    <path fill="231F20" d="M12.5,0H9.4C5.9,0,3.6,2.3,3.6,5.9v2.7H0.5C0.2,8.6,0,8.9,0,9.2v4c0,0.2,0.2,0.5,0.5,0.5h3.1v9.9
                                    c0,0.3,0.2,0.5,0.5,0.5h4.1c0.3,0,0.5-0.2,0.5-0.5v-9.9h3.7c0.3,0,0.5-0.2,0.5-0.5v-4c0-0.1-0.1-0.3-0.2-0.3
                                    c-0.1-0.1-0.2-0.2-0.3-0.2H8.7V6.3c0-1.1,0.3-1.7,1.7-1.7h2.1c0.3,0,0.5-0.2,0.5-0.5V0.5C13,0.2,12.8,0,12.5,0z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>