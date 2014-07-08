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
define('AUTH_KEY',         '*EcK8j{E{pK56%_(MA]xKC|6n.^|#.;W>wk`A6HQ(b!I;9kR)#x@BD@0>fXy|atP');
define('SECURE_AUTH_KEY',  '@XrAyW^Y8l[K_DayC;K|^>Bbg=^ph;)8=1!jSyxsd=?!}A O(C~i/s#U&<Umx+i#');
define('LOGGED_IN_KEY',    'H&fSJ-TP*[sD:~e-KJB{nX?nH<+xcf>.JNLi5o`erB>3=DL3{#8[*%9VU{w[;/|m');
define('NONCE_KEY',        'Y{ep*OMHF`D[rx^|^y<8hAa(OMHm*$9HLBRg`Xa.BT{gr ^%0FQ=q^wPg:D[`DJE');
define('AUTH_SALT',        'ZYVDkSt]*YU, #DZbvy]Er-Ewj63>B3LJ^Ag}D=~LXRHj5m-R2AK8h+0+Xab+=$p');
define('SECURE_AUTH_SALT', 'lTC{RXqL&{F$a3).ua{?M,e+8;+I&kx}GOCMKK7YnZmER9~Jw)&868OzSC-E~kr8');
define('LOGGED_IN_SALT',   'Bgk !q}xOb6lThuoz,6H/Dd,T^7O.)S|9PNBfv7n=Tz:Od*hU~>j!i!>0).XE?b~');
define('NONCE_SALT',       'h,8PRDh-%K|+<F0{c@,%FLAIz n6+gf0w(u*-g+G)+q@|e#fhvn5xmbYQJgI4V|2');

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
