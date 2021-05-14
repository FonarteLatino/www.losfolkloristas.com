<?php
/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'losfolkloristas_com');

/** MySQL database username */
define('DB_USER', 'losfolkloristasc');

/** MySQL database password */
define('DB_PASSWORD', 'nMmukmyY');

/** MySQL hostname */
define('DB_HOST', 'mysql.losfolkloristas.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xnCVf%UX)eIHcyh@rB#I|$IMi1*Fj"+VGPwDllQz3^7~@h74Z$HUfQs%a:2hwxge');
define('SECURE_AUTH_KEY',  'oG5yM#^tzXYsQctFfigd/4K21+zrM?4xaws"Lm^M+M8^UFmAyhW/SJFFI;B|!USc');
define('LOGGED_IN_KEY',    'bn|3BB"SH^mQbV4+m7a3Sjx7nak@aKIR|VK5xc9_)sDoIZyYT9^M2?34dRebMJ$!');
define('NONCE_KEY',        'RbyGBZeVtow&H/DmUVzp0VldV2QEiS"TxZK;hD|tRy;Jc9@c~/7+G5EEc`L"JRr;');
define('AUTH_SALT',        '&Z;$%5u3ZdqcCd%P``A"~X:$IgBcpug)OL/%rh0~H"oL@4)9/dbsDVK7SBuYmZ?K');
define('SECURE_AUTH_SALT', ';bh+9_YPVu^HK3D!vmKcXqVqQji#Fpfr:pD?1t^i6+jgmRcFc+"3pv3WG?1/U"Rw');
define('LOGGED_IN_SALT',   'vd"P3E9j$_oX#O9MfKK4H9_0MY^ajT7|?:H()qrm^$2$?(o*&uGT~z0QYlMvX+P7');
define('NONCE_SALT',       '%bflt;H@g(Gpad`0h88yKfUsm|5Hjl%yu|jiz8N)P;FE*!s"whnRK$YhYx?:r97+');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_9kdj37_';

/**
* Limits total Post Revisions saved per Post/Page.
* Change or comment this line out if you would like to increase or remove the limit.
*/
define('WP_POST_REVISIONS',  10);

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
