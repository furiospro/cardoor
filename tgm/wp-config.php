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
define( 'DB_NAME', 'id13885176_wp1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'id13885176_furiospro' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ID13885176_wp1' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
define('WP_HOME','https://clean-living-cake.000webhostapp.com/');
define('WP_SITEURL','https://clean-living-cake.000webhostapp.com/');
define('WP_MEMORY_LIMIT', '64m');
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R*PUvi`vkByXz&Jk|(yCUIHY<*;wu{Nu!c-6t_W%=/@e7|QS&zAr(T,5v`~Vd>Jo' );
define( 'SECURE_AUTH_KEY',  '&.P+-^$UR,F2oBP37KWguwv0s{I{23D{mBqsUDg|/h47*!HaUZn!+JatLGk?`&n:' );
define( 'LOGGED_IN_KEY',    '#Z$?{aJSV>xVY#=-?WsnTeZu$,?Ozo)-&f(5R{h-w,11Mt6JJN@Oc:*u%WOlZn{r' );
define( 'NONCE_KEY',        '*K}d.&hpkd[$ff`P/Eutc%JYnAr>-:vxrU(ugiYF?tz:e8t:4!prU}x<+[|5zoYu' );
define( 'AUTH_SALT',        ']-3J0f!?P!l$i4^f./GWAxgECG{~bcr#_GiGo0D+HgO8P@<HNF@zoTK6F+U@Rum%' );
define( 'SECURE_AUTH_SALT', '0@!).1=T8Y1,L=~< dF8 v~5>>b[hLqWuWh<5{EDIF>KK]3Y/&3v5#Zw,$T,<-v)' );
define( 'LOGGED_IN_SALT',   'w$uQ0S)a[$rsK}-}UOM V#22u,uLAVxJglU@@JXg%RY,BvBUhnMUH/@(U9`Wy>}n' );
define( 'NONCE_SALT',       ';cRSYV7.~M)7~_9.cza#*aMi :q!TJFAq;W:TbJDiRi:ED 0{SP<-&tf*W^^w(uc' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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

define( 'WP_DEBUG', true);




/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
