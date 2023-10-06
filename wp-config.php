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
define( 'DB_NAME', 'sonymart' );

/** Database username */
define( 'DB_USER', 'sony_mart' );

/** Database password */
define( 'DB_PASSWORD', 'SIU1o1apnril!@y3' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define( 'WP_DEBUG', false );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );

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
define( 'AUTH_KEY',         'VXU8K*9e{n(<Fmb@9pPv52P)u}Ey4tnMHefNiPqJU,2>Z_>`B<}>&37,$NtUO^ %' );
define( 'SECURE_AUTH_KEY',  '6J|9G#{K!Tm~@4GTF;wXb`2^UkVao[%7mMn]F)+my#^(+s9(og0=s~13iu>gLR_-' );
define( 'LOGGED_IN_KEY',    'Q<|9Kb7P,rcYqy{G<C,I=dCw;] sY(Q^10,YS/hbH,dNMIYJ[f_u_[{R44([E!G,' );
define( 'NONCE_KEY',        ' i<eijT+L6K~8Y5` 6rIX?|VO%S(4iE)G<?:b$Zgk:pLq%/hDKlW:A53roVZ]HlM' );
define( 'AUTH_SALT',        '}6bH2ZPkhjIbV0.:^Fo&Mq[K#,Y:p`]8!]>&8Qj9OU;,``xA4cMXYsKxgu}M41kZ' );
define( 'SECURE_AUTH_SALT', '#0TM*!]v]qJF/>+> F5|Md?v=3~Sr#LC2/P?Dhr@x.>,{M1{ j0oens#D_[$UoX7' );
define( 'LOGGED_IN_SALT',   ' [uRf%_Y/ThQdJPk{mk7<BM^,d:Rq4CXb<`J?oW``}~HqLv1X$x|HD_]wTV#1=+:' );
define( 'NONCE_SALT',       'Y|JgA7y%BaQB3JA73k50,nx|iAYp,HU*lg2%6$nXoGQ/oHk=Ji@>}<G^=4a?nI4@' );

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
// define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
