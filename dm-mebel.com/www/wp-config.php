<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dmmebel_db');

/** Имя пользователя MySQL */
define('DB_USER', 'dmmebel_db');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'UepPbLV9'); 

/** Имя сервера MySQL */
define('DB_HOST', 'dmmebel.mysql.tools');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y=|kH/@MUez/6y}`Fq5%W-f2L%]!cCj_TzET-mIz_OodFwvyD/u6g|3n-H<3xGc}');
define('SECURE_AUTH_KEY',  'Gtrj,6tdOlq|`h_ZI0)j1Ra?.fxU!csv;}6#sFX7pd,:2UPx)8)6KcHdb+u(e%x-');
define('LOGGED_IN_KEY',    'V3ptA-V]kZg.WZOc)c,<dx+g9s}QwJRzB|Ku4QN#>-x:f03vuHiIx$>o?RYH eb$');
define('NONCE_KEY',        'vX v]sD)u}wwX5/BphBpjS 1d 1X6kXJB(GR77bASd;K.4Uu9Kq`y~Xjg#,NN%9@');
define('AUTH_SALT',        '_pp9!6Wun_bD9zYNY?Hd#mJf:[s!O`PBVUQK.1Qw*nN)d A&gd0Py/a[a2V)qK4!');
define('SECURE_AUTH_SALT', '3}NiFMBlW(u1PQb2&;&gfEI1hfqvg; c(u|VoEYTa`.?HrW$sm?bgD]bfvb:&J|Q');
define('LOGGED_IN_SALT',   '6B5M>qQh`<nsZ1R;Ks`7nE1on<Wdd*x]%W69*g<Krm+>pH1JzPj:TIye`9M*HCSd');
define('NONCE_SALT',       'C/iqR2/0g+I T %w,A>93|=4PuM{H,5^Z<VGyEM)lbb_wr%7Dea?z]cK8A[<XYVy');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
