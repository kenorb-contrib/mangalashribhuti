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
define('DB_NAME', 'msbsangd_service');

/** MySQL database username */
define('DB_USER', 'msbsangd_serve');

/** MySQL database password */
define('DB_PASSWORD', 'service');

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
define('AUTH_KEY',         ' SjQ5rUVP/e|A(zWk(^2vLfIU#Ow&aeW*FQ]P6/z21fDt2`uq8ni373h%9d4$]**');
define('SECURE_AUTH_KEY',  '<ea_rZ?RLyJ37n`}M`/C|IXp`T 4/5P>+r*9g;*>S}77x<Jn^Gh%*q$8?5f7nKU*');
define('LOGGED_IN_KEY',    ']y(YX{HKHq0!2Yi5j$J/b|^_/2(uA%QBcmQ2w-`=mww5-u9G/q[aDrY|NM@(3QS*');
define('NONCE_KEY',        'o :H:[f|Q1*v?/b&3vB,!OmF+`G{m^|Z&,k:-+C>]BeaWbJ>ym/Gf?>4<%NGTl+[');
define('AUTH_SALT',        'uEtW1BKw~-;>l:)v,ix/v ` XT%Y4v3HF;J7$|K-dz8img1L4wI+#0|d-~CB)mEF');
define('SECURE_AUTH_SALT', '0g.m0-?YV4hP*FGqxg[t.Q7tc}D|7BJp?)yW|$6}@9o;++Gx7^g;@m64jSe[.ic&');
define('LOGGED_IN_SALT',   '2JZSlg_@}%XRKz(muoE^yk{ERk&Vi/HRv,ld--+Vca8O),L:rG0aP7-eQ|[;<+tO');
define('NONCE_SALT',       '9X]3wMrc =b*lC Ga#flM+mH]AK[*27{<l/lnKs-U/>uN+J=Cg0*#}`AG8-1>%$z');

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
