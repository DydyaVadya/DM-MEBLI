<?php 

#Add style and script
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {

    #Include style theme
    wp_enqueue_style( 'public-css-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css', array(), '1.0.0', false );
    wp_enqueue_style( 'public-css-theme', get_template_directory_uri() . '/public/css/theme.css', array(), '1.0.0', false );

    #Include style theme
    wp_enqueue_script( 'public-js-jquery',                  get_template_directory_uri() . '/public/lib/jquery/jquery-3.3.1.min.js',                            array(), '3.3.1', true );



    wp_enqueue_script( 'public-js-fancybox',  				'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js',                     array(), '3.3.1', true );
    wp_enqueue_script( 'public-js-modernizr',        		get_template_directory_uri() . '/public/lib/modernizr/modernizr-custom.js',                  		array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-fontfaceobserver',        get_template_directory_uri() . '/public/lib/fontfaceobserver/fontfaceobserver.js',                  array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-bootstrap-bundle',        get_template_directory_uri() . '/public/lib/bootstrap-4/js/bootstrap.bundle.min.js',                array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-fastclick',               get_template_directory_uri() . '/public/lib/fastclick/fastclick.js',                                array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-ofi',                     get_template_directory_uri() . '/public/lib/object-fit-images/ofi.min.js',                          array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-slick',                   get_template_directory_uri() . '/public/lib/slick/slick.min.js',                                    array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-smooth',                  get_template_directory_uri() . '/public/lib/smooth-scroll/smooth-scroll.min.js',                    array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-horizontal-scrolling',    get_template_directory_uri() . '/public/lib/horizontal-scrolling-nav/horizontal-scrolling-nav.js',  array(), '1.0.0', true );
	wp_enqueue_script( 'public-js-parsley',    				get_template_directory_uri() . '/public/lib/Parsley.js/parsley.min.js',  							array(), '1.0.0', true );
	wp_enqueue_script( 'public-js-Drift',    				get_template_directory_uri() . '/public/lib/drift/Drift.min.js',  				array(), '1.0.0', true );
	wp_enqueue_script( 'public-js-inputmask',    			get_template_directory_uri() . '/public/lib/Inputmask/jquery.inputmask.bundle.js',  							array(), '1.0.0', true );
	
    wp_enqueue_script( 'public-js-phone',    				get_template_directory_uri() . '/public/lib/Inputmask/phone.js',  							array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-phone-ru',    			get_template_directory_uri() . '/public/lib/Inputmask/phone-ru.js',  							array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-main',                    get_template_directory_uri() . '/public/js/main.js',                                                array(), '1.0.0', true );
    wp_enqueue_script( 'public-js-send',                    get_template_directory_uri() . '/public/js/send.js',                                                 array(), '1.0.0', true );

}

add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');


function my_action_callback() {
	
	$tm_received = '';

	if(!empty($_FILES['file_received'])){

		$thumbnail_id = media_handle_sideload( $_FILES['file_received'], NULL,  'Что мы хотели');
		
		$tm_received = '<div class="col-sm-6">
							<div class="review-col">
								<h6>Что мы хотели:</h6>
								<a data-fancybox="gallery" href="'.wp_get_attachment_image_url($thumbnail_id, 'full' ).'"><img src="'.wp_get_attachment_image_url($thumbnail_id, 'home-review-thumb' ).'" class="review-img" width="250" height="167" alt="Picture"></a>
							</div>
						</div>';

	}

	if(!empty($_FILES['file_wanted'])){

		$thumbnail_id = media_handle_sideload( $_FILES['file_wanted'], NULL,  'Что мы получили');
		
		$tm_wanted = '<div class="col-sm-6">
							<div class="review-col">
								<h6>Что мы получили:</h6>
								<a data-fancybox="gallery" href="'.wp_get_attachment_image_url($thumbnail_id, 'full' ).'"><img src="'.wp_get_attachment_image_url($thumbnail_id, 'home-review-thumb' ).'" class="review-img" width="250" height="167" alt="Picture"></a>
							</div>
						</div>';

	}

	$content = '
		<h5><b>'.$_POST['name'] . ', ' . $_POST['city'].'</b></h5>
		<p>'.$_POST['comment'].'</p>
		<div class="row">
			'.$tm_received.'
			'.$tm_wanted.'
		</div>
	';

	$post_data = array(
		'post_title'    => wp_strip_all_tags( $_POST['name'] . ' ' . $_POST['tel'] ),
		'post_content'  => $content,
		'post_status'   => 'pending',
		'post_author'   => 1,
		'post_category' => array(24),
		'post_type' 	=> 'review'
	);

	$post_id = wp_insert_post( $post_data );

	$thumbnail_id = media_handle_sideload( $_FILES['file_photo'], $post_id,  $_POST['name'] . ' ' . $_POST['tel']);

	set_post_thumbnail( $post_id, $thumbnail_id );

	# выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
	wp_die();

}

# Включаем миниатюры во всех постах
add_theme_support( 'post-thumbnails' );

if(function_exists('add_image_size')){

    #Миниатюра каталога на главной.
    add_image_size( 'home-product-thumb', 531, 266, true);
	update_option('home-product-thumb', 1);
	
	#Миниатюра каталога на главной.
    add_image_size( 'home-review-thumb', 250, 167, true);
    update_option('home-review-thumb', 1);

}

# Поддержка SVG в седиотеке wp
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; 
    return $mime_types;
}

add_filter('upload_mimes', 'my_myme_types', 1, 1);

add_action('admin_menu', 'remove_admin_menu');
function remove_admin_menu() {

	# Удаляем раздел Настройки
	// remove_menu_page('options-general.php');	

	# Инструменты
	remove_menu_page('tools.php');

	#Пользователи
	remove_menu_page('users.php'); 

	# Плагины
	remove_menu_page('plugins.php');

	# Внешний вид
	remove_menu_page('themes.php');

	# Посты блога
	# remove_menu_page('edit.php'); 

	# Медиабиблиотека
	# remove_menu_page('upload.php');

	# Страницы
	remove_menu_page('edit.php?post_type=acf-field-group'); 

	# Группы полей
	remove_menu_page('edit-comments.php');

	# Ссылки 
	remove_menu_page('link-manager.php');
	
}

function my_login_logo(){
	echo '
	<style type="text/css">
		 #login h1 a { background: url(https://dm-mebel.com/wp-content/uploads/2018/03/DM-1.svg) no-repeat 0 0 !important; }
	 </style>';
 } 
 add_action('login_head', 'my_login_logo');

add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('review', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'review', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
			'new_item'           => 'Новый отзыв', // текст новой записи
			'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

