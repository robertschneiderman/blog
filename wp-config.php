<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X+uL}4kw^!ZoJ;42j!*}c8cA`{.(aU`28F>BKY(7ajJ_v%]hzLCdA9#: x#+_X?;');
define('SECURE_AUTH_KEY',  'owo|FO!O~6Ft[H+L[!*^J)KO=#oZST,n-BxS+ThLdRu}f!XLsy@>{5TS4~qo*$1{');
define('LOGGED_IN_KEY',    '(/IQeJC%$o5ixXM!3U9Fd$b4_dNP6RnqZSSdMv/g/bq=CD2UTaoCx}Vw 5!zxeYj');
define('NONCE_KEY',        '`Zz:Y8dF)MI)6/f:?jB*o*V4^aMrUP*z0(aZXr6]TbH`Z5L&+E:4RSvGn :kc5Li');
define('AUTH_SALT',        '&nt`G9nI9i-jt{tegZB;|E9JAx|pWt3txETc22@zac@IZqtiGxX5;`&jVQ%Z!HjF');
define('SECURE_AUTH_SALT', 'w#hqUnT%f%.fYGNcfJ K54GcmAx }D?zc^p C7a:gNjLhi`s1*G/@Ws~l1n*oZ#x');
define('LOGGED_IN_SALT',   'Ts8 } 2eF%7~5s%w)9^vgAi$4w#Kmw]-*LV3$3bZ4]db.bk}**MTKm#JRO7;6rCz');
define('NONCE_SALT',       'e-xHnfID`.{6r(5j@U8#l]~2P?bqlcS8s7&@.WLUxVMby q&s2)?Pirw^l;Z4w3O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
