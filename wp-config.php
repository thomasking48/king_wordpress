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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'king_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'KgV ZQAXCdxY}?}m`E5n@%tZXz:ZU`V!@rLIL7]vD*gTA=l[ 1Kk%.Owc=DHLH1Z' );
define( 'SECURE_AUTH_KEY',  'J:6rCl2@yd?]^FTyN/cT r<(|&1KYM|gL= ZPp`rV1)!+RV2T7zv:c8Zu%GS)G E' );
define( 'LOGGED_IN_KEY',    'tC1peDT6b,GoW|~+kfd5sl~F|8>g])gZNZ3L;$p3)Qw#k*)6{YzM*KN3vl]St7yW' );
define( 'NONCE_KEY',        'AHlRuZx*g:X6fdFy 4/CwG(gw,+0EjBNr/@kO6Ew4 B0o9/k3rR5?9-<+3{qI--H' );
define( 'AUTH_SALT',        '[:q)Zho LUv] YX]9(a#N|M}<pl,[]Hb31-U+e$N5d]SS^k+=6<,oO%[R;h}Qh8!' );
define( 'SECURE_AUTH_SALT', '.xj_.,gMIW5YL|gQi:{g+OFZ8]xNtJ9})v:ga5KDeQ}iN8fy1rBF~-SG8!q8VUYZ' );
define( 'LOGGED_IN_SALT',   'bV9zC!r0LaYEfnk#5uZ.o)-I|qgD6#}Qhnn=TIc)Q!A/g_B;(t9p/L>h&>vbs]uZ' );
define( 'NONCE_SALT',       'J#Riv<)Vw!xio3O`nU+z KD{.,Tq!3V)fl$Zzla$n_ +/v }2X)1tpPrh[Maur-t' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
