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
define( 'DB_NAME', 'easyM' );

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
define( 'AUTH_KEY',         'Mu`LI2$q(JI ^AVeeBv5+6i+qWniny2~K-! qs4zhZgG sHi1[TtT[WBk_a`Hi5@' );
define( 'SECURE_AUTH_KEY',  '*|>t 0e<`3^?9mAhzF7tq9u)@<[31zP;vr`4,l4S#&y8)8Om;sAc(~G@wNX0Q*=`' );
define( 'LOGGED_IN_KEY',    'hEUd;@;*)OFfGeDiag]oG|u&fb4EufM6|gNbeG/0?;aL,?3S]Qe=Xmy!~;AOl(#W' );
define( 'NONCE_KEY',        '%MQ)+Zjk$oG>:A]2B9}I1WqB}<])ss)HnfbEL(!qQ@BC7=lj%2lsUaH^)n@:Mzib' );
define( 'AUTH_SALT',        'P,X!uC~UkVchwgF2r{rtab4}VcBE3r>SCYG3GTQ+oFqmuh}R~q>j[x<:2=frGa5R' );
define( 'SECURE_AUTH_SALT', 'AG|L:!:VJ%7GPcvkWeaN(MyF*>CYX$|@K_TH| $UGiSO!<EM <SWe2G]Gb+>88-s' );
define( 'LOGGED_IN_SALT',   'N_rQsN8E*i.oI&E$A)9c`eejS(s`3q)/k&91L)g4{Xt`28,qYmEy#x9vWe!3CR2#' );
define( 'NONCE_SALT',       'eJP?he{e%M:~aW/%k5u:9)oZX{.U6YWx OfpWI*nRk,0qJ9Y]f _357Sf8i{y<%v' );

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
