<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'warung' );

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
define( 'AUTH_KEY',         '|/DD.]TE+l2arYHMM9=<#D[e~kRy{]ibx:+5V!rEvA84[pk^Z#(>6[,Rct58gIhB' );
define( 'SECURE_AUTH_KEY',  '`wlMJK_HKckljgLWHq5!MIC_36q$e8%9/,G|_]Qknm{gUcHI_LK7TKH4[Q.6rvF}' );
define( 'LOGGED_IN_KEY',    'A@%)PL9^D|X 43ztyz!>oyuv](La/;7Gwel,z^(1^eF41,c5#u/Uf(7r,9</4u[Q' );
define( 'NONCE_KEY',        'NQ1?CG<.RPz$f=sfO9}v/qVJ[<YHm?hb_w}k+<sX VjA]pE5%jsOl_Wp]=-kE!m-' );
define( 'AUTH_SALT',        '@,a6G2EB;PLO-;+ITOb37jf#4r0<<?jQ/V6bi-2$KHkXM3B/yGiI,aMYPfn(NuZ.' );
define( 'SECURE_AUTH_SALT', '&n_FDpS+1[?9hPEov{/#Hhm s9-==T+]*FT?zWDgVR%.TbPs1V 472nzUaY-k?L;' );
define( 'LOGGED_IN_SALT',   'mA/,zvC?EsfP@~`|^ I iGV=/.|`ZZ@eacKhB.MTz/w_SecMT9oZiQ6@sc4$kqwX' );
define( 'NONCE_SALT',       '|{M^qpiK,K([M%TtMngKouDc<#>)TX{sdP(uUnS({F~WyCEkHnF2{r90KF Aw5+.' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
