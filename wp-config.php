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
define( 'DB_NAME', 'misitio' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '066a5591165c7520e9f8fe87919f7d218a2dbbfe3c5f67a1' );

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
define( 'AUTH_KEY',         'kBc$][HyF*Y]S^K+%7p/iwK+GtSpJ)~5p+_w2SUcqmP?D}jMvU#kru><jF<PuInE' );
define( 'SECURE_AUTH_KEY',  'V:?n3_JbBgb#cTe!#G<W%/ivw/U1-7;Jlz2H3/bQ`aI&5Vr2tbdh]MLT;w`p2B4J' );
define( 'LOGGED_IN_KEY',    'h>3Up&pYUn)m!BR-=,~81.`nKpH-ptqLGPop/M#v2g+F9,^ T?UXJ/pZAf*&r;(3' );
define( 'NONCE_KEY',        'D;wz%-79 {u$w4Z_mF?z@.4(h![X[oT4{83*_y01&#u>5mIlNyjQ|CiIqI6IgGQL' );
define( 'AUTH_SALT',        's}Oi@lG~&B,;&pZImA2kw0j[sAx+/V7z-kosE@ne->0@Bni2 l}9,9=[Wpv}cQ**' );
define( 'SECURE_AUTH_SALT', 'VcM.C U/t:|0s;%@b{dh|Wn<HqZrGj/RHA~jh$+Z)fLQ=39Y~^|BvqX1n,yUq*YV' );
define( 'LOGGED_IN_SALT',   'LuSb8o0E&Cfr-~BWZ81!t^/KP:LBe;47dbNV~CohiULxwE@Q)8{4%h~dMxleW`L,' );
define( 'NONCE_SALT',       'Xq$RwTdD)qS(<y6u[[:0H(lvMiKzj9#RV]bh?LLHLxEO40NWzBf~wRcL!M|zL6Pi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
