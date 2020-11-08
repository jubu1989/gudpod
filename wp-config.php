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
define( 'DB_NAME', 'sarah_db' );

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
define( 'AUTH_KEY',         '=9|{8o3@;mukS>q=-@;d0S}WH3PfwvGy/Za`3G*raBk7wTIs[y*1MQ?cQX e-.2)' );
define( 'SECURE_AUTH_KEY',  '|67:8x$IB!WLMGo2}^[9qYW_+R/[tJdI9~n`*B3~(YL)tqrLO`Vy2@L/jxTi}YF*' );
define( 'LOGGED_IN_KEY',    '#YD]B@8R@nk|9H,s-EXhP;.p{#/DQ@RY$le<ly_`2Lhi~`8r3mWVUF6&N|%/ReMP' );
define( 'NONCE_KEY',        '$z(kVzBICX6nOTk.>}WH-=,,e(o!}3)n&ApVz}E4xT#eA~0H&$|!E2AK2Ahm~u0d' );
define( 'AUTH_SALT',        '$ghB+Ck/SP|4Pi^NUUR4r+n*{nLq{$L,%C,6*1rQnVJ*_Xb5xP5,]_tE7H(t$W^P' );
define( 'SECURE_AUTH_SALT', 'ioS^OU[L8b7uzvU@$@6)Srh@]~3qPZq4$urF[Z;,!^^pc~23==oh@Ca OcKZAh@|' );
define( 'LOGGED_IN_SALT',   'S!pQl<R,gyY]:JGwQ|i$RVa4~:2w0b2PA=,?yz4x]$Hc9|0P-ivt`<Txj.T%6>7)' );
define( 'NONCE_SALT',       'y;L)C,qc~w$:$9]xmR<s}fx^nW*U`g_5Ft_01ZYR[c&@AP_4d;,5Z*&X?Ui3U3o&' );

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
