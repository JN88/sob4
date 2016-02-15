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
define('DB_NAME', 'sob');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '9_:7E_%b5:+S3|J');

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
define('AUTH_KEY',         '$g, TNPtBH,R6x||w+ iz5!efJo;-ICaQZ}.p)<O0=|?.WAlhTmFqHt.l@WUdGb>');
define('SECURE_AUTH_KEY',  'CqKXe+^++LF QF+&.k!^uQDVcHB?QoCDi7hOI-kw!+Q^lruSh1x;CRQ*5unDHl7f');
define('LOGGED_IN_KEY',    'jO1c+0_}RF<%r(G/@.=-$$=_AFgvrA$r!V}YL$?)DoB!*?CgCUGx3r=,H&pN*<4a');
define('NONCE_KEY',        ';l;N(t!bfN*RF14y7gR1X7[1c+M-Q//EL0L#bk@]^DG~v7w$v(&74JPW{V6[>Gsl');
define('AUTH_SALT',        '@1mu`TSuPuEbEqn%mYus9US1FQSXm{@w+pg7KfrhcPH[B-+i{q=]v+%hT3wU:hPR');
define('SECURE_AUTH_SALT', '%;3Mr&Q1r=v|hrhPW7;*^F|}p9-q#qr`V>%$=4_-y{V@B2dniu8x|}bBVGs@R}/i');
define('LOGGED_IN_SALT',   'R)Se@Y+f)B}L|A2zTwff21ce.hU(gp,7&|;@wJ,Xaf|EY 0VQfhD0Q^(hBBUI0[+');
define('NONCE_SALT',       'q|XPn6Eini. 4/xIm+N/F.-2?(i|CG@P>+)2(Gx! D58[Ze.DGt,^qMk:=7$w/_V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sobvn_';

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

define('WP_ENV', 'development');

define( 'DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS',true);