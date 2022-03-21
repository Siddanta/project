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
define( 'DB_NAME', 'ksnepal_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oJIFuRfG1Ud|~.aIifJD:Ydx7!vYPaJU-W79^a:LOr|{Me0cUP`4RzNQdIrTVtN7' );
define( 'SECURE_AUTH_KEY',  'Leok$&8t!g|#@+Ire@9#$1Uvc[8|LO/3Lu+_ ia25A[A=Yx,!LuWN$+2YUXk;mow' );
define( 'LOGGED_IN_KEY',    'weE8a*]>U$r eIqD,|?x!8PBJ1)#Bu]_=_A.z~#d9ad`&z;enh?$Q`!8A@~HmMa;' );
define( 'NONCE_KEY',        '[[=w$r#uJv7-T+h:n/~mc!Co]rm;F82yFq)tPNpx#dAK)TcC/A}# k?~!#<tD16#' );
define( 'AUTH_SALT',        'LKem8J=]i-<>dynvx5^1ets Q52Hbrz_~o#~QB]<,NzX=}_%,*M`YBYrF1 W,3Nf' );
define( 'SECURE_AUTH_SALT', '` ]P;+dWih3`BlY@`,kT]A4K1@gbKW /_eO@C8,(^y2E|v;E5dVT{9dmsE:x>Im1' );
define( 'LOGGED_IN_SALT',   '%D4S(+N7Y0gIW;pPmOu[| 0/~(|X;jq2kpJ4>M}2]>8&d: S;bihDTXMst_tw=B{' );
define( 'NONCE_SALT',       'l5HrQ+gP4m7Ef1};dBeTEwaJU/wzgqo&sU/(?C`@v$vI&k38YMCEA >L}?I#EE8m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ks_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
