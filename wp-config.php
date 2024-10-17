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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'vm4adZAwY0O8^G?issY_//i0pZ:P_mVX>+9n S(Jeq_a7MUo}9z6:{/bnB7UKm!]' );
define( 'SECURE_AUTH_KEY',  'TCO!Xi.:|?9p;+,}|l{6Hyau+zxt$SeZmN:S$9NdTq:x*-t.i8hj[uN*v#*k4lyh' );
define( 'LOGGED_IN_KEY',    '0Tai!kX<ACpIghGw1-C02iIVjU;bnMhrY;q`kIn1a#t6Iv1@~E j``JX]rb?WjbF' );
define( 'NONCE_KEY',        '*]a^{5r@Uu+S&ipP3WX34<_G{;P+u$@j/Q:K7[Y#Ez~CpLAb~UHNJ_PMD?dP ]_h' );
define( 'AUTH_SALT',        ',+D2*)UID!&m5EsOhk1gQjg$D.k[g==S&iA}}k`J}.MvJ_ 5,{zpV8jpUcJj$oWH' );
define( 'SECURE_AUTH_SALT', 'D#^H)T-&F<#ZHTC^rFpWK.d(8a[m:o/PwI:q_^.yLA|u9A`G~xbt%7vZCIkwk2U<' );
define( 'LOGGED_IN_SALT',   '=9{R$TJZ-sIv >-h*a4p)VR@qJgN1uGl;r<H]~Ule|~!R66=/_%~, Xxxe(8$kbt' );
define( 'NONCE_SALT',       '4P%!.vS{b>:K<TWote1hTQh#Qt%][/)x#4Dt(-zp}~Qt!G;V-&]3<)q20FNn~2wO' );

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
