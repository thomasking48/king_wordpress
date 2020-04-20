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
define( 'AUTH_KEY',         'Kv+OzX`uPl9O`p4Dr&C,Dw,=OCji9X1aQ?f8su{3R8IJUALI5+d^JBBS}Bt+E_7*' );
define( 'SECURE_AUTH_KEY',  '^4H>/5JZpM)U-6u^+xtpj0oJWFY(SC-J(+krC[*fektaTKd~{mv9_um}C ev:&U2' );
define( 'LOGGED_IN_KEY',    '@@a,}bq<d6O9m_QH<4))kG*U:F1T{mj.s(-9W2hN3ycl[X=mkLC+e$$I-jLDR`]Y' );
define( 'NONCE_KEY',        '@L:AwP-n};uwy2)KiRoAwuU`P}wsl|d.acoT6 5~|mp%JXt?cL|k:(KZuiy.iUo%' );
define( 'AUTH_SALT',        'KfVvM_Hbz|a_Tv[Zb}P)?l6fx|?FKF-B&ykezRp}#C}y<>]B5:Vy<!&4&h7Nuvt3' );
define( 'SECURE_AUTH_SALT', '2^_ORr:i%*.YNu$lZjY8love?[~r_/Ta-av6nmf|&e,}*pkat?2lO[7BrE_w2pux' );
define( 'LOGGED_IN_SALT',   '(]>hywJ+`AH_mqped*~p^5/~ ME(<%a;rro^-g]F%1Rq?s7UWri4l*ahCf+X`y}l' );
define( 'NONCE_SALT',       '.{?r*1]HZu:O1!tee[hXY]M[=cg&On8+d /?% X_NIQoKwmbhX1@ynyDHhsb`^.;' );

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
define('FS_METHOD','direct');
