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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'nelson1314');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Bdme6]cJ8-XW!>%Z0c::b1P{bVkv9/#qFA6bHNI6|j!_F?Gg)ag-BjEw-b_kSiz6');
define('SECURE_AUTH_KEY',  '3/J#H>Du2R?rjx/h5D7nSx{0_cvMN%DJ%z[dnia$ZG/tZer76~#0D;JGsp(|=T-~');
define('LOGGED_IN_KEY',    '![QR6`+G{u/|vN4PvHdr xUGCnzZC^(3*7x[gH5)eBnT&4l&M<f;<~1tAcV7`7&k');
define('NONCE_KEY',        'H]^et,/T?JI#z[u7u|L2Tn/^zgT6~$?b&ddJ5<h|EP .EB+y^sQf9hvfrz_Dy|{)');
define('AUTH_SALT',        '-Do+-csR;GyrG%P?%~vanBaVnNO.M@7QA_K/.yRt)AF[|u8A?[<jT5B!-OrH!Ki ');
define('SECURE_AUTH_SALT', '+sFp74{Jji`FYGzi{#k4Z^P<J:k0Q)X2. #9Tvuf3P:WocS*)Ngh-7M{{#aZa,>`');
define('LOGGED_IN_SALT',   'jxffB./+QJ-#{+|&@M.B@3l0:aj?JrFh0s9#mj)uu .N_es{*rzk0;xSd%-Fs*;-');
define('NONCE_SALT',       'DZWwlkpW]s-:&j;LezL$_gw1<gXw8fD_SwKJ6|D5B8srV)&eo$wnNqO-1Dcy7ltw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
