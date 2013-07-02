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
define('DB_NAME', 'juanqasd_dominio');

/** MySQL database username */
define('DB_USER', 'juanqasd_roberto');

/** MySQL database password */
define('DB_PASSWORD', 'JUANmary20');

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
define('AUTH_KEY',         '%4h2DbpeSFnEHhHVL;J{;-@V;yEohrWw::vMhc:kbr@(5SL`#)UjGyiHoT6.46]Y');
define('SECURE_AUTH_KEY',  '=#yl5>7U-d-}Ma]c:-?O>G{+Aydk:;IkJSRUy++DiP*JhIoe{2]YTqAuL&nQRG%[');
define('LOGGED_IN_KEY',    'bp=^ #P[Ep`_L0</[hH4j4/-$|W@-ia@`U0]F|{yY?4.|})rJ0I:t{K-HJ} n-|.');
define('NONCE_KEY',        '^h.]^SCa(Y.(2|Ob{G-1LzJVMC]aJT#|%7v$||Pq%fScd%L T[wa+*5_M$u8y1Xv');
define('AUTH_SALT',        'Q}(3AU48|O<|a#m R]+_5MD1%~VONDjA2mZxwSCsFXv%97lsLxsA]$[lRX7aoNiB');
define('SECURE_AUTH_SALT', 'HX;~+J,MPPzO7]Jw*$Z*2b?|u+U@%B|$3h4)r}N<M3+PV]>3:OmBMH4+z-u.ch-a');
define('LOGGED_IN_SALT',   'TvMx4P*|75*2p1QW*IeANy7[}i,mH]o|$~q-/!s6<g{YK_St0h/-6$};R3%tp-Bm');
define('NONCE_SALT',       'QM:eePMVb<>[J;9_+*-%E|:<+9k._O! qE_)(.|!4?Zv4OwyFMI{X~-&B*O/ZV<y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

