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
define( 'DB_NAME', 's' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '222vesna' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(/N7wpv]ntbz$t[,t(ODah&1K]DOLztfy[I~!clNP$Ug%!.;K(DyXD-y 2#sp5/{' );
define( 'SECURE_AUTH_KEY',  'l+1M:AH#,|2QStp?V)pv>ncVP;(F@0Ux@0W-w)7ZTJ%7fsS0[)A8B(iLMv_5{8h0' );
define( 'LOGGED_IN_KEY',    'U<U*EcF`E}UP;^0i~g%#} |F7]@f<%la-/^[4K13qW!.* Q1tVf_5~W8enoy<II!' );
define( 'NONCE_KEY',        'p{fvu&Hh$1JgWhno!t=y-qAtxAaEYGkn(f5UB2J{6%J8^#u}Xs37*YSU(c,=2n}(' );
define( 'AUTH_SALT',        'Xmo&],LF-6Ko4B,cTqSyj7R4]8?9t9T~[5`LgS43nde*4ILmT#}*;[]W%Q^DRmeh' );
define( 'SECURE_AUTH_SALT', '<6%Hrfl4>]:O7dH* ^`WwNzNDg?%zMcx0n;+uPi Z`q1:eC|edj`N1GV5-r%)b[f' );
define( 'LOGGED_IN_SALT',   'GA@XWz4db!d-b9~yVU8lWG1-1~GZq@>sH5;N%.H4)8#{^EQoDY4Gz*)k=r_(5vKo' );
define( 'NONCE_SALT',       '|~!4X{g=v8qftWb^eTz}E5?V.S` BB<!|8Z7T*Ubv:OO3O+!D]ggw6!V*~qPOS.x' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 's_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
