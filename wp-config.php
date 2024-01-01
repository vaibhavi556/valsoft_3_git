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
define( 'DB_NAME', 'valsoft' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hxnV#{curs!2.F_ jGfd0|knqDe[C+Ue(CBxcoj`aAx/&B<`JI9!t0E5?(Vz]lPq' );
define( 'SECURE_AUTH_KEY',  '+,A*R@4 6tAn)~NAc%BooPL2g}JqI-36Hg6^|/4E;OqCve*KWM=u$#4tO)h7I(,6' );
define( 'LOGGED_IN_KEY',    'xK>hE>S{lr(M~JfjNv:1 AneI{.)4TnsPfEZkt-R,0B>`KW;Zh0j>nz$GTX^^`mm' );
define( 'NONCE_KEY',        'J2R[bASj,3%}9d3OgKNZK[NU;L-[d|`V2?f4@r2Vf<Jq[_t[f3n17H_#(Z9=i+5!' );
define( 'AUTH_SALT',        '*TtW`V5DPAUjMN]~j7%&&(i*_UsP+6?Bv?38J}SVipiq%Vsdv$;ZRBxOz28|IzKn' );
define( 'SECURE_AUTH_SALT', 'c[E51JB)[2AMvh%}L$uH#=u=_~M]nG|+`Z9eRiv43I~XB%C]y{4U_X(v(q/-gv9n' );
define( 'LOGGED_IN_SALT',   'T8*lL$ml/n@n2~Ob2L8wR+e>#B=zk:x*ACz+*E5m?Ke%9`z1CM5k=(dIzBZIld?A' );
define( 'NONCE_SALT',       '4^Of%HI5T[ytpra`%P4Cn@3~1t4lDz_G%vP_^3UyOt}42|2$S@R$Gpa`3j?Mbg3D' );

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
/**plugin install permisssion */
define('FS_METHOD', 'direct'); 
