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
define( 'DB_NAME', 'podcast' );

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
define( 'AUTH_KEY',         '+S]/,z ANqcA.9p64E;:nc*)JUec27_=anZ5!!aUUVK>W[S7r+1ETJW0AYMsr?+I' );
define( 'SECURE_AUTH_KEY',  '%d9KK.b(JqGH,{=*p+9Jfj1gR|mIBzbEuYYOxZ>DR[#Zd%/to*i)i6attK)w^j+f' );
define( 'LOGGED_IN_KEY',    'P(W2q~n):Tae+J46bw^8<,ZP-(35i/fp:p&ep<TDhoi+:A,caxDU0Jtd}bllARo#' );
define( 'NONCE_KEY',        'O71B-,YFB_Jn%k6etd2-3$gEHgeNInGEFPAd.&KlPo(E;AnQQ|ITX`eF=mcs,fS$' );
define( 'AUTH_SALT',        '<NR]6X);*5##KsZk:;egBbA@;3$>(zttjp,Dgf$AQw#pc]}@P^c:onS9t?6&LqsT' );
define( 'SECURE_AUTH_SALT', '<Bz=F!(~fIBKQ=pH(}*b$&}q[yMfopXMD3/|qA^:ONSLV(p~t!w&bs~/X3O~uBvF' );
define( 'LOGGED_IN_SALT',   'g}!]=@E !6_#*QR>ruFaJa8VyJmQSu4XzGWJ42ZvX}HpLS_Us78DZ8Z$l* )1Rjp' );
define( 'NONCE_SALT',       'CIw[ #=|Oc54vo<Tfp&`]+A,_OiIcDc)mzEq^Vqu0M>pU8lKD2yL2lp<w@u3:$1!' );

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
