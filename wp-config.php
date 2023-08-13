<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'med' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~mo~IHE<0v`Ql%.uQf5l7xHY61eAa>Q9<ep25Za]n?QKFv,IeL+g,#WBJ4kRt*_T' );
define( 'SECURE_AUTH_KEY',  '{vEj7fX/VN|ZGe1O~:Th2F6(..aBO) CSV/]Q~.wMzW|LL]6KP#X&zOi@5xBo*@y' );
define( 'LOGGED_IN_KEY',    'xn0k~1P||4L8W:Ftm#:nmjNI}kf,cedvz8c f6.Be?QEVEg2tV+HnWE:mkPZ9UMH' );
define( 'NONCE_KEY',        '#_V]=2%7 =_:NEKJ`^b{EV`%F9kSeHdE;mQ]yTBf8aU;En/WFt-LV}[Pa*%<V+XI' );
define( 'AUTH_SALT',        ';R9Oqy4]rSFC$r7Dg9:LzsDEiiD4V4KP&}P}q{qO9)/v]b(GIB]!{R~npf]Mmi-f' );
define( 'SECURE_AUTH_SALT', 'F7Rm3]Tf8pAEc9/tY~lz&0;c4AY/72,!q_W<KLehZFJbs&%x]TfK@r11k/zBtY.e' );
define( 'LOGGED_IN_SALT',   'QTuQ,PyO=%SwSSE=LWsdn,{3?}Aw ~+L ~> *n8Ug!.%va} B;G<Z^D|Y~85=Ry9' );
define( 'NONCE_SALT',       '}-TW5XpXSxPY<ro#_;+9@6(4g8tAF%FiKQhQy p&6|R0>>[=roMGVF6|-*YUWrLY' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
