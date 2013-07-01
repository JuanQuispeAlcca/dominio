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
define('AUTH_KEY',         '+wjrI-c1fW:K qboU-&--yrpfa`3JNof@UFuckAV/NNDpQc~U5*6C+,)-YV>#`ZQ');
define('SECURE_AUTH_KEY',  'kB!sK`,,EUa{-K53M]qa&IgsojldLF]7NqwYjtRwy~@d?pK-V-:s#skLJ!>J<K+m');
define('LOGGED_IN_KEY',    'v7BRz<0mfWd1UpI:WT1gn:-Tl 8y~G$USBQx+G$HYVBe.h1)c[ovX`r?c^ZO/ZgG');
define('NONCE_KEY',        '+Cbspm MIplEEV2q6lR6soAB;+z>]mo+U|>o>aD.^-<|[h-Y?#+E^QzJ3l~FR%Ru');
define('AUTH_SALT',        '6$Hu2|UeI|6/qQ3*D+T|)s,gqViTB((y`v>F`mv9 nbt/~Q8Z|V0k?b&e<l+#Ywf');
define('SECURE_AUTH_SALT', '8jPF|Y,un(t[AF^g_T]A<MEN`%qQiJ-(+&!G6QjDEF@2I-QIAo@Ne,VoRU4g_v}j');
define('LOGGED_IN_SALT',   '*b1C>}=w{#GS_zmpn5%;?`iz,?eRRssPf@GV/H`goBso|gj2Dvj<&f51/MBJF+Ln');
define('NONCE_SALT',       'YTNu!DZn>I[sz;m3wI| G@wY2eC0e|7kE&QW0IgNjTcT6}}1Dub{#|{nT>L@D@+1');

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


