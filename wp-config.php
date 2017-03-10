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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Vi=Y1ZBM,j{LoEuH>mfmXSRNQ8L?4Gn_(K_uM9qZT@.`n[Mj6BP3wP0u eT48b0-');
define('SECURE_AUTH_KEY',  '#)%!yz(&`4E+*nR?&SZc!P-:>jw2|tUIE~~I(e;Ji=c*Ou$N.ka/8V;lJCS< 7ns');
define('LOGGED_IN_KEY',    ',$k)gH=N:*X%oVD-cY]$p6}WFZX5UOd[y+;2wO/;&Sie1Qefsy{:l6`&%OKm3V2W');
define('NONCE_KEY',        'Opv`b+O65SY7`-BNezEp5qo+v7{v% 01WD7=R?Y.V8Kh6%:I#$B?M/7vT%S`UdMs');
define('AUTH_SALT',        'l&nje7a%/m$Xl,qQbJ$_/faePJNtfAGKG:Z}HR3e2i5lw6GvFd `KK %WiNg3Wsu');
define('SECURE_AUTH_SALT', 'l2{}4Ony$F.O3;l0?^D&#mNy/a28C*?|2/Oy|q1em[{(A>~7U:KKTn9GQG:}; g~');
define('LOGGED_IN_SALT',   'Q],)`5^QOiFbOs>4q1t ItslnYgw&n[emNrIjq/wX*=|;JsbOP,T8E(`}n(i|gVW');
define('NONCE_SALT',       '_[},Za[-ip1_X47B8W%qSG;VT:]XFPoM$xN,snh/mhPgNdL<.yee#)7<O,A[i%Wu');

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
