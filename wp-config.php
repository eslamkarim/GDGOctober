<?php
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
define('DB_NAME', 'GDG');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'l?qTjHA4jx*mypR)aPLM]:!6nD6tK/;`PsH!F<]+FmBEw3^[TG5 x{l,_Z$7>1T+');
define('SECURE_AUTH_KEY',  'JJeE.w wcC-|0Q}fWv{^owWCH;L}`Y/8B+P}xzpqYD?*|g)4!aT`3Nq1 -`6%9[e');
define('LOGGED_IN_KEY',    'y&CH^[gx_(wKZ?KZGPHX0q:{,`9^u{S/&[:cN1YOo@1;=aI@hJV8t~,yz3{m>M}@');
define('NONCE_KEY',        'nx7-VDyU$*8W0_a?4v{,cz)|~!tBBEU%vHP[$Zx/ypOg2+tS1zvYiF&$F%t ^_|,');
define('AUTH_SALT',        ',U4oAd5b:~e>5q/{)cJ3D/mO2KIj3&?$V_~bfO#U8FK]%de,(kVTV+b:0t gW0lh');
define('SECURE_AUTH_SALT', 'L~9u5|df@SJk?-$4tr<zJssoWIYlBerR{D&)p`M(GP@[p3U:u&|ekg4bckl0aP{<');
define('LOGGED_IN_SALT',   'iMxItdGG$[8reokXV+J(J{}h2]jMlq{w_ & C &L8VbXq7XWq=1!l<4|60@fw]YX');
define('NONCE_SALT',       'wT*xzRqp?OJf@7V@ Zme;(7tHhpMx7Wo=7_N>O@ /Q/2$<tsR#7{bcEuc*_vKL%9');

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
