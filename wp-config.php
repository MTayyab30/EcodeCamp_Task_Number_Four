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
define( 'DB_NAME', 'techwala' );

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
define( 'AUTH_KEY',         'c@52qVH7}h9 I;7#fV2pgBtA}Kz!$}ZE:6C=[*arq3{A`oA=pZ8Q3`R<Zw6S#-5t' );
define( 'SECURE_AUTH_KEY',  'M;d&q+W*oM!`4{[Q{Xuy@$y2<-z3[}1*oh6|lC<h|;DM3Mkokn8*-A]&v0MxQq*n' );
define( 'LOGGED_IN_KEY',    '/;%l`_t-zK$51B;sFwKXH5x,{t|pX|:TH4afB+$^k[2z)&^|8vK7I=M :xSvA[p3' );
define( 'NONCE_KEY',        'a$wp?%]0v=jY5Ve[)gK[|oHz*HNW(_Ac:Hcz7.,@|jJ_4&|[`#_wPTjly)2@Tb&N' );
define( 'AUTH_SALT',        '2Ggf<aL$@Kh$g0vMx^=sP8Ez,9hsTwH&/7P*qJ[!>9[2E=jmj_9?fFP #o |7LyS' );
define( 'SECURE_AUTH_SALT', '{.hWIQSLU}T #Rz~{E<-OVJ.q_>Wb>cFJ*91,qtCQgY/vlMVT~NpGlt l[KUwHAz' );
define( 'LOGGED_IN_SALT',   'N+TCg}OhF=Pfc#G7U)6:fpQQd(z8uP]tC&}/8i*xF98Q0JUB/jq|aB_l !uS3sJ~' );
define( 'NONCE_SALT',       'n0ij4dX[ki1vV]HPS1>!#=,`WITaA3WcFDS#%8mj*%}mD%xi[nyo+5E.~vQJ`FyT' );

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
