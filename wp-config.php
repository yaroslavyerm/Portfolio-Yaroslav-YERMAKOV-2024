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
define( 'AUTH_KEY',         'A32fOD^}ST4H{Qz!c%ST0ueiY?,71NQf9x7zdq>KPPqqkU_e1BAmNH>ih*Z?d2V7' );
define( 'SECURE_AUTH_KEY',  '&NV*s e!jMDSWf!<WA;1;(UwNDR{?+`} &/OJE?a$C(JpRKsWSaB<mv;3|q2#MVf' );
define( 'LOGGED_IN_KEY',    ';+-ra*`B+%.3P#FC_m/qSL*VZH`1d4D&@C%>Wa7L1I<ZF9./,G~jn%B(R6s05t@4' );
define( 'NONCE_KEY',        '@u7#_O8t:}~C|4QTd,~JG&owI$6)~~#fv28w/?dl*&#jbw0fTaMsrP@{Wy=jiP{m' );
define( 'AUTH_SALT',        'tcP-i*asNNm+%`pD6/{o YTu5%iX<qj^m(rK`4MY{iM u} pQ*SVb(8DE*H$MO$h' );
define( 'SECURE_AUTH_SALT', 'qCPDgG?pZod$A@E9)d_WEV~+PU~]zf~(M+;jPoQbs5d8Q||Af}8C)e<+)!BpGtPn' );
define( 'LOGGED_IN_SALT',   'E[p;rn6fhkX+|=bQ%G-N|yZ0|l.l@Mm5E[Ag7PwGDw?RaVwQ~W5Z7`]#K}ZJODUK' );
define( 'NONCE_SALT',       '}}$#$Uvo`|;i$>s*q788LRaE*fuX;^0 TaKIBC.H7Ex +@bY7rX%T3noja,NO%)N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
