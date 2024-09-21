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
define( 'DB_NAME', 'architecture' );

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
define( 'AUTH_KEY',         'g.s}&fYE(=?]b4`d.,k`u:M6<~VrpLCf2+DP SXJio!s3xi{_~kj,9bUCOSK-_l[' );
define( 'SECURE_AUTH_KEY',  'RA*=>F)!;$D><2}/A]y gh:GC/kO$#DM7Gi5CYc)g]tW$Dpr7KcOq-&tQI@Yc[Y(' );
define( 'LOGGED_IN_KEY',    '-(EAbQ)@^p:,1U=d8NEi*81_LgjEO6#4-hg>:<nN>W-L/0<?p{~UJt~}DJM`E|k$' );
define( 'NONCE_KEY',        'vf>|tbK{88{wWjsRoIyu*q-J ~-hPy2e8_9q;JFrZ6ZZi$<jy,#a12{]ov=L+~bE' );
define( 'AUTH_SALT',        'JqS7Q/X7!]QD4eV)I!?jLJJ=>:9 1`maoL~!l5K =Ae4,+]?jcJ.%pJy^O%wDF{1' );
define( 'SECURE_AUTH_SALT', 'v{}#Paxvoymxfwq-GZV]E(%Cj$KGK:;!uwn#a8V49HREGT-_PgleM4m+n+~|rw-f' );
define( 'LOGGED_IN_SALT',   '6cuwDS/_~kHEV,Wti``r.t~4VWU~D2!wnK[nMF04K`yHv6a+<D(CeQVTygixCRJg' );
define( 'NONCE_SALT',       'I+&AfD}1D{J0GWp-Y=B`QvpP1raac<+0okcyhMOsY C(~uxS8uo~-0A|G0oy2F} ' );

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
