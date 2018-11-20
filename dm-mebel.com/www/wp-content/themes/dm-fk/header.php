<!doctype html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Default Description">
    <meta name="keywords" content="Default Keywords">
    <meta name="robots" content="INDEX,FOLLOW">

    <title><?php wp_title(); ?></title>

    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/public/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/public/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/public/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/public/images/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/public/images/site.webmanifest">
    <link rel="mask-icon" href="<?= get_template_directory_uri() ?>/public/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

</head>
<body>

<!-- start page -->
<div class="page" id="top-page">

    <!-- start page-header -->
    <header class="page-header">

		<div class="header-meta page-container">
		
			<div class="logotype" title="DM">
                <img src="wp-content/uploads/2018/02/DM.svg" width="139" height="39" alt="DM">
            </div>

            <nav class="page-nav collapse" id="page-menu">
                <ul class="page-nav-list">
                    <li><a href="#section-5" data-scroll title="О компании">О компании</a></li>
                    <li><a href="#section-4" data-scroll title="Диваны">Диваны</a></li>
                    <li><a href="#section-2" data-scroll title="Каталог">Каталог</a></li>
                    <li><a href="#section-8" data-scroll title="Контакты">Контакты</a></li>
                </ul>
            </nav>

            <ul class="contact-phones-list">
                <?php $phones = get_field('номера_телефонов', 6); ?>
                <?php $phones = explode(",", $phones); ?>
                <?php foreach($phones as $phone): ?>
                    <li><a href="tel:<?= $phone ?>" target="_blank" title="<?= $phone ?>"><?= $phone ?></a></li>
                <?php endforeach; ?>
            </ul>

            <a href="#" class="btn-callback" data-toggle="modal" data-target="#callback-modal" title="Перезвонить вам?">
                Перезвонить вам?
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18" height="18" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
                    <path d="M17.6,14.2l-2.8-2.8c-0.6-0.6-1.4-0.5-2,0.1l-1.4,1.4c-0.1-0.1-0.2-0.1-0.3-0.1c-0.9-0.5-2.1-1.2-3.4-2.5
                    C6.5,9,5.8,7.8,5.2,6.9c0-0.1-0.1-0.2-0.1-0.3L6,5.7l0.4-0.4C7,4.7,7,3.7,6.5,3.2L3.8,0.4c-0.6-0.6-1.4-0.5-2,0.1L0.9,1.2l0,0
                    C0.7,1.6,0.5,1.9,0.3,2.3S0.1,3.1,0.1,3.5c-0.4,3,1,5.8,4.8,9.7c5.2,5.2,9.4,4.8,9.6,4.8c0.4-0.1,0.8-0.1,1.2-0.3
                    c0.4-0.1,0.8-0.4,1.2-0.6l0,0l0.8-0.8C18.2,15.7,18.2,14.7,17.6,14.2z"/>
                </svg>
            </a>

			<a href="#page-menu" class="page-menu-toggle" data-toggle="collapse" aria-expanded="true">&nbsp;</a>
			
		</div>

	</header>
    <!-- end page-header -->