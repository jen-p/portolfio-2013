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
define('DB_NAME', 'db458442286');

/** MySQL database username */
define('DB_USER', 'dbo458442286');

/** MySQL database password */
define('DB_PASSWORD', 'Schuldi6');

/** MySQL hostname */
define('DB_HOST', 'db458442286.db.1and1.com');

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
define('AUTH_KEY',         ' ,YV-!R1n);nuO5T$wN81/C4*/}ONFxvWY4<+Rz]It9p)uDC_}}xZ/VWL5g7jwkd');
define('SECURE_AUTH_KEY',  '+|D0;TPWf)<-w<SgI_[eV6QY2}o xjhR<h+K,z-SfJ+p6I+|Sj.T{;I~BoG^YxI~');
define('LOGGED_IN_KEY',    '6eyr=wX ;M!Fb^NIK^sSk)P`7KwHC>l|MQ=bnX+},sR`slV53-4Ygb[|1`E+z>eB');
define('NONCE_KEY',        ' W(+@bzbI5G*b5n`!<wE9PvBTgAxFCs5/jbK0<;Me*/N(K:[xYyutw+F--]#zGn=');
define('AUTH_SALT',        'pTTyh1sT5`CX%R`1g-44Ooxnv:=cQh<%8Ll?Ar0J=;PIgCE6{/cj?`pL{?r~,83x');
define('SECURE_AUTH_SALT', 'y/7$U+B|ZA?~lRt?e|s&9E(>tz_WRvy>X+O`}G9nsGVl3X%TuNP4?,cb^,W~MQv1');
define('LOGGED_IN_SALT',   '78T|1ge6shQV&]}BnnjID1U5k:v0hIn2=)h0A?y1`JG6e&>l{t+;Z.}!%:]SKF|B');
define('NONCE_SALT',       '%2(Cl!Aq$~i|T5j,7Gr}w8FIs/w*+O~a7ZPDe{%/^DK/<sV&IZ`$vW-hVX%T+|+e');

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
