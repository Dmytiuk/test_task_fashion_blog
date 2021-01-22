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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test_task' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         ']B(UO877n?NWx:Hvf}t@tMhO**q8@TTai<NrYgf_cy-6t@4znT9Zmj*Myf[C6($L' );
define( 'SECURE_AUTH_KEY',  '=L%0q{Lav~dZ:x?Wnk6~<O[|Na!mfTU]-~@<OMXGs.Ci{eH*foy:7I4pK:aW=9*9' );
define( 'LOGGED_IN_KEY',    'lnr=3kmT6=%jaG`P0?x.]r904gc~V$-}>5C;!/DE2]W3B[y[_|.wbvKt}-(e/SOl' );
define( 'NONCE_KEY',        'N-tL;OxLCEx~MD-woU{8%{JjW!IM^HuxCez!!7u>K8zKJg!S;:LJ+7fB1D/JFUou' );
define( 'AUTH_SALT',        'z4o5e#wdNy^,aUQoeD)k$QMwJK[|cqhpg{)/K*gC7ql7uUYF- rBks,(!I-Rf_Gj' );
define( 'SECURE_AUTH_SALT', '9j&[wX[:rSl7ij[%g>_?c#Jel<7QF)4qpWW#&jR:8~,M[9l$xM,#-5gTRUNwZo}7' );
define( 'LOGGED_IN_SALT',   'Z,MbM>((HgNU{(JI?c?DIVE3Z1v^PjS:p}}sA!O75&5PmGpM#yb!+h&JZ`5CxxnU' );
define( 'NONCE_SALT',       'z:1~`L1Ko&)LcUd04aGn8F>Xy#k&kZ~P2O&WlRpHvey*0I5CI_DQT}RZ}5b qz&K' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
