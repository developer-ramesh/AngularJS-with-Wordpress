<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'AngularJS-with-Wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         ')Buie==_e9BmT+2hg)7r:Fiy-f+7e w% ^Wn@2#Lq/X806Zsg-2~{-if@i.nzLcc');
define('SECURE_AUTH_KEY',  '&!TR.}u w8i4jBtbO&|SMH-hGe/4mDJG;-UDYYP_mtVdW<+WKweF_:3q!^GB7OZg');
define('LOGGED_IN_KEY',    ']c[,pn0s)la`en(_^+-anK9L/8YCjw#b!^JpzDViQB~9W{xL+;?IrS_(7AzF+htY');
define('NONCE_KEY',        'uJ}kShTt6HP_6U+;UiE_B*`AS(loX.m08tV}cd9.IW!-8WDAL]kBIwE?{&(yGcc=');
define('AUTH_SALT',        'B]-W|1?4xp)T5izIWqz5yf.=0U^1Fu>z*rPx?EhDbQWXaNrK2v){p o>cWy-W())');
define('SECURE_AUTH_SALT', 'SUI5c|_Hf$e&^pqjT*$r!poW(B^3%*)ZCRr,l<Gb[<WN?oyE}ON:4Y*`.M_<m$D_');
define('LOGGED_IN_SALT',   '(1.Zr>v5H{C3R+&%cy)Wz(kXWxT!iQUCJda1>-M3|1qKwv8YOZG]*PQ_Uhh0NGxf');
define('NONCE_SALT',       '.&3]Z*-2;sW0GaaYRPVghJ+O6Q>29KqFds%=q;au+l0s7+Fzf:8k;79>#CltUqXc');

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

