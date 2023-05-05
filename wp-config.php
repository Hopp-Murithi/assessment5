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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assessment5' );

/** Database username */
define( 'DB_USER', 'admin10' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '.i8Iuz&9^;VG9fu5 $UhL+SBTA,l5V(`*Qq;^=k]&?K9*F*GKcZZt1-p>#DjJCG2' );
define( 'SECURE_AUTH_KEY',  'jviLMCb;d$S3,1&VRkl( gvD3)yP<^R}S>C6_J^7wHx<l<;NU{+>,>$r2@X93{3A' );
define( 'LOGGED_IN_KEY',    'ub8+,u]:c2O>L[>fpK_*IY]<zs5h)$YP_2E0v%AYPzzgISGQ3|^5z@|dP40${|D?' );
define( 'NONCE_KEY',        '`2Z?|&Q+0:?RI{$K{_L{U!)_)5f(r^H`x@-|P1rqBv1?.-+xoH_(`Z#VEke)8i%Q' );
define( 'AUTH_SALT',        ';egG{!t~j2?H,~DllV6W{T^{<0+ln0QM*w^9)aT$VUuB5oXpF{eg~B}oN`al-x@m' );
define( 'SECURE_AUTH_SALT', 'r)]d2:s(|m0}Lg2FMpI6TTKjq4~ML,PYMx/RX8z_AOyADw`ILcZql9-:j8,.0bUw' );
define( 'LOGGED_IN_SALT',   'B|1|jwz*mHwF{G3`u9+!9C7(nwBm(IYmKE1&Ev?xoDys+61`s;Y%LI xRAOdpYsb' );
define( 'NONCE_SALT',       'ZVm3HTlybz.&2%[^{`3Rxqy]40n;%Q7Q)dCq{NT-Dx8Dzh32G*D2P)%8<Zxsz0fX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a5_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
