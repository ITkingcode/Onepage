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
define('DB_NAME', 'eynotlkh_margarita');

/** MySQL database username */
define('DB_USER', 'eynotlkh_user');

/** MySQL database password */
define('DB_PASSWORD', 'Lembit120');

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
define('AUTH_KEY',         'r`?!Q#9R%~vLnk&mI~0q-6?tMlZ7[`3/}{5):@6o`#C_h}(wgA|@8XAo?jV-,nAq');
define('SECURE_AUTH_KEY',  '>S&cTYW`{l3LS3O&B{H}2:loog<%#VFyg`G4m%W} q##fU)^w&2ZYvbGVv.hhi(*');
define('LOGGED_IN_KEY',    'EET~PF;$2xY3eTn8rR[yKXF2^za74/;/w_5FJ=-,*e/$R{Me)w2k;#Q`/+sS)G.1');
define('NONCE_KEY',        'u(7c%dUbCNM&Pe*WuL#aw>JaZ#Trh#3wm;kg:0*(Uw&D6oK$lW(RRg;&.n$XC-q>');
define('AUTH_SALT',        'lad+JKIbuJDeO]%`yYQ<Ht(<~s<yCi>wwC$R0U$^Kwj0RNBM^aN(w9jO:R!mt8%.');
define('SECURE_AUTH_SALT', 'C($}wfkdP94L{4?th!*F_Po{+~,q|UIGf)3/emRvuw{_{|zz?_PZtjr@BC  1`%L');
define('LOGGED_IN_SALT',   '(Smy*_sxZ!gCOHlB6Pasf|HYqLVx26a01I?vi<E}{o@|O=I4mXJ}}5YoxS1l8B.V');
define('NONCE_SALT',       'GYI#wTj[w9ksi6O3E3HExF,GPrckQSQI~3U!gx,d}#Vt443x.TNvcz.YAwcuA(Dd');

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
