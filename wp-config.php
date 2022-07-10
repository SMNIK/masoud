<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'masoud' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sZ.S{S<mlmVS/SIknqyGLCzEmte>BZAN}l@wmOxdLp<lzB7#tAGbzR-o}BH|l9(W' );
define( 'SECURE_AUTH_KEY',  'AT9<Q?)<I?&:N4*$hS/2x@$Xc2 ONT_@]g|lHl_/N;[_V*+PpNu8l~=Z}u_pk,6h' );
define( 'LOGGED_IN_KEY',    'USW]TXjb#sp6qL<W{_qX/X ==E|e%$URe G9C&|gz%F.IjWD}<^y%JA!Ay:8`3`h' );
define( 'NONCE_KEY',        '@phG?4B[Z1+PJKs09=ffwdm_;8YsY owcItsdr26q0VpupkrM;uX;rI#@h`>H h3' );
define( 'AUTH_SALT',        '_m}i_#e6U1U`QRg0*>7gKUMy{e6$6Ep`|3U2[*GJ!,Gb4:;R_5b<1a]>gAuK%BF9' );
define( 'SECURE_AUTH_SALT', 'IAtjb!.:9~-j&:giz<8p/dI4o1@5B,f<~s{l o[#$I=AF,oV57!1-(s^T&<V0g3:' );
define( 'LOGGED_IN_SALT',   '}nL5}5zoDNw{^u<;PDZo)a4Z5N<YqUCU_If}(^3C)Uwyha9#]y*jQMd`&s*BWR?R' );
define( 'NONCE_SALT',       '-^SObI%1A4><|ie?Gd+.gs1h`SAu3]G/e@J!W6n`:hNW1}X^>#!jj44e_RA.IWP6' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
