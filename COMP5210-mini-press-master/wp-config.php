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
define('DB_NAME', 'db5210');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'wp_mysql_5210');

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
define('AUTH_KEY',         'r9`7ciCWc)kaeGJClwd4GKtcx~I[F6+Wt+Tx1-A,$65,^pp!pII>nxW5C(&K;%Nj');
define('SECURE_AUTH_KEY',  'DId{9CTF*cN4(<p&w, 3Ry1wZH<I@. A[bM;LE+w[t;/}[(&f+ XEhS~+A$C%F`Z');
define('LOGGED_IN_KEY',    ',W:cNvCUbsbfMKo4m)%XrF+6k.+LK`r:E$4j:$RLQndsx^@5OyX,qFjkB$p}lQp}');
define('NONCE_KEY',        'w,+2-Wg~hz_)[pQAbcNha}Yg.6Ht|rIfmA^<*P!YUeC!YJg`uZ=G^[9H6j>-:Ax?');
define('AUTH_SALT',        '?%mR&c>%])&nK7EBPu@yn%_5U8.UqKP}k5_Xa8J{~koglI.I2[#Z81Vl#z-Sb4-k');
define('SECURE_AUTH_SALT', '95pOwQaYD9hRJR^mz57Nd647QA_u~HWnfN7Y73*0JV2@2}Di0L1OB8MK.?L3.3jl');
define('LOGGED_IN_SALT',   'RNSn=rWU.#5-1zsvR_%O,H[ 7{e9Pj1vAT@-9W=V.D3MkxM;4/RTZlWS>6V LHmv');
define('NONCE_SALT',       '6.tVmxw`TL&WE1VHr0`;PlsF ([D}PJ{JP,G~K[q>cw*)f/Q!hBYx)weVBsHs*xf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_5210';

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
