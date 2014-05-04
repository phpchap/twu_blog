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
define('DB_NAME', 'twu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hl1[u|_EG:~N3-#t+|.$?Jo<8v+KEP3-U[ ~&9gqfKsKZ(o*CGh`|qV?])c7^FWh');
define('SECURE_AUTH_KEY',  'K)IOF,VSE?I6C+C?c]_Mtihz[0`KPGumL+I+,j;VZ j}WhggdDL[a>W%#-p>[|kl');
define('LOGGED_IN_KEY',    '-]RexAe}[W1Ud`~J#/7KrJz=!:vMit;|_D&@/6%WUT6xol7?{~^U n&suaCA9DfV');
define('NONCE_KEY',        'CbR>|]v]3#;[Zne=nrL9oIrIKwxFRQDLf`ch *|CP-.s9qe|sQ$m8|#S;/!$fJ6K');
define('AUTH_SALT',        '2E2!eG#^w-=xJ+9d%C?PU3vo>s6o0jW`nQ)H+snnSZ-9U;Q^dh07$rBksw3RvWD0');
define('SECURE_AUTH_SALT', '?LLS%A_]cW|i[77FUKl 7TV+[49}&pf9gug[G9cZ+I@]XJ3sm+5|&t4-WY`Cf%Ua');
define('LOGGED_IN_SALT',   'zy7oW=C|%GYDfse/{bNF I+5}<HNb-N:k}CEt(%Gvs`6@ V/IiI tV%b@-e!Ci^H');
define('NONCE_SALT',       'cW:}^~L[@nYO-<3=5-pl dt!#Elh<JE6RAhb ~kz&$`HnM9<@zh@`xZyp;cRK{W{');

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
