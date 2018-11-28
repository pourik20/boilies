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
define('DB_NAME', 'boilie1457023932');

/** MySQL database username */
define('DB_USER', 'boilie1457023932');

/** MySQL database password */
define('DB_PASSWORD', 'S0eXTH5');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '^(y@$@yLuZ;#2nW45CMQP<73JZq1o~RwX|DlRmvd({,NXZp)qWHH >|`F>y6s2~0');
define('SECURE_AUTH_KEY',  '<Lcp-KiBEg(5@W/|R.J/S@PeynOp!xm+eAO1qh8!V-~?ck5&T<*FM=QbLW&YCU27');
define('LOGGED_IN_KEY',    'RS|oE4X_u+C0GHX|Q/}K_diK~;IukPM-rJ{L>(S.&FfQI=s,kZN>f8uax[8dge+5');
define('NONCE_KEY',        '(|Y G*vj${N&kFG GKDJzt2Wu?{d,.G-eYSfH3#$)?:uU -YrmCcY!/B6O5.<QA+');
define('AUTH_SALT',        'v8@AN/kiV?- /yam`d5@u9cyb$9gt=b$d3;A&b+@SUC(~I7fsE`8mU+l*@c4~[~U');
define('SECURE_AUTH_SALT', '9&<Ru_/B:`ISB+0X5<l(-R<zDU.B!U7)ytO/{jo-pim)1C]cVK3}qpn-}+Rl[,x&');
define('LOGGED_IN_SALT',   'xEhv?V*0<3^/>]AJM&U8rz^5(Vn3|kDxfv#cb<Y[|v|E}iN!T.BxL-i_PE<k+>d?');
define('NONCE_SALT',       '6#A+3qY!^/0H7?e/gim`h5<@R5J>{-kT7[`-[XscHCWSM*PKfQRRFOo~1p@8y:Z$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_wp';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'cs_CZ');

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
