<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'vtpearthone' );

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
define( 'AUTH_KEY',         'ptN(N7?n)yO%[pQ=<,IxUcse#-`z93H#u<c5*|L%%,d<I|m%>l#Jk)8kErD@rD%d' );
define( 'SECURE_AUTH_KEY',  'rzw,AY??WWKo]ZY2X) >{A3+gsa<Dx#Aytx^=xVe6ntMeGi8(!]+S;dnhIA+Bdh5' );
define( 'LOGGED_IN_KEY',    '*p5q[suHsk]tz>1#[$A.9z!G2dkTndu@s,7b/vh4F&03t4|vu[|c7?kOA%B{`-^/' );
define( 'NONCE_KEY',        'T;=;bAP;zBFAKHZfyaC&nVb_Kf%tiX@<Jcp%fW5-J*Qd}X[QBOWrD0:Pu|ywRb?h' );
define( 'AUTH_SALT',        'Z(f _e%Sz_|&S/m/H#N %~U>%(tqNN11;JGp}r/|Ys~GEIt>sp0vm?~X__A~gV[X' );
define( 'SECURE_AUTH_SALT', ']GO:Mrur{Hw ?[i{gt8Fi,:(|q}jAwZ&^Q3EE^oAbXZy9%Mn,h ;Qq Y@X%?(w%&' );
define( 'LOGGED_IN_SALT',   '2p6linjp?*sCTY>Wy%wX:uZV~gYSu[dc1^hWo[k;dsupG3G&RT%z0kHqJE!|d77@' );
define( 'NONCE_SALT',       ' {Wv=MXFo~hljk(-bG2rvg=KOG4QkaB6/S{vj1K[IwTzRC4!2]!4PcqQysTP)(.}' );

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
