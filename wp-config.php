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
define( 'DB_NAME', 'art.nft.id' );

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
define( 'AUTH_KEY',         '#7^DE4XiIMPEOrU(8^YfCXv+{A*YgNLTMW;7/TBF?s(zTX5bp0do-7)yb6j-Jk=P' );
define( 'SECURE_AUTH_KEY',  '(=!SM}/26^mz7c:>{<YLj(=_)Jv$.tpZH9+iS)tPf!jyycUbnWQun$kEBSr%6nmH' );
define( 'LOGGED_IN_KEY',    'BM(vi5]o)IxEH#5u%kST]qB!@er!GOm[m>6&<_g,DvP#8d+yw2jrCj$={iC9i_oU' );
define( 'NONCE_KEY',        'Z A3/-cI^+e+8U^0UV(f6YKMYsQ_ENI]z1H?$$=!Zzg<p7pY5#]SN!7diI}dsKB|' );
define( 'AUTH_SALT',        'c84tf2_{$$aYg=&Hk]ae8c:V;S/;N^=e+dy 5msrY3V6.Lx3^rSCXB6Y&?az|/1l' );
define( 'SECURE_AUTH_SALT', 'Amr)s_]`)O`c~U3[6N+ERi^^^Ez)VYAEA~`76ksmNIO[1MGrsaKyHibt.]{e%4KM' );
define( 'LOGGED_IN_SALT',   'Otu^ Z{7aNVUhodVWRN2tN(03}|* @%NZ8`vEx!bf < xDo2q`|>WC-<0gY(NO3|' );
define( 'NONCE_SALT',       '`:$6c*wRwLx*3l[Fko4rgX1*%Gj-Q?,nv2SVo.*(qXQ#I+1?geGbw;2PwGZWgfa<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'id_';

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
