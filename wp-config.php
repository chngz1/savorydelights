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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u900825059_KohfJ' );

/** Database username */
define( 'DB_USER', 'u900825059_KwWhs' );

/** Database password */
define( 'DB_PASSWORD', 'cTjRdTOCpb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$^]}K8.7rOFr)h,]lQA4)]oEO:2_$f~#5mT ?a*99GN}KxY8ggGSiz,/f1*!2*].' );
define( 'SECURE_AUTH_KEY',   ';6*l&@7&pY|.`{{_!hi<FAkj!t}Xw^IY{HUAJPDdc1FX{(#ttA<Q]9,OAv_%DxRa' );
define( 'LOGGED_IN_KEY',     '1-AO/DIV,nrI~[Yp]b`[!(yxSHhyM>[M~kU5hSKum8<#v8_2r_p@9zyc:R :RiAN' );
define( 'NONCE_KEY',         'UVhM:ts^hG%:i5Hw5wdL~sczs7)`{I. YfX^L|E&ayCvaFJN&eIpro_C&_F[JhC@' );
define( 'AUTH_SALT',         'i7@Y]/-|^M`)!h{eJa4qw6:h-pdvY%i93M5GpTj4JR=:7,P@AbZ$T0gZ,f)nbY,T' );
define( 'SECURE_AUTH_SALT',  't3C)-PwS4v%XXy,.%2V7amMr=Bk?5|I_nWzV1z%;iRxHPxQd~l 6@c?}bKZJivm4' );
define( 'LOGGED_IN_SALT',    'DF^Rv*=&MO/m}#:j^dI/Ht7d BU.p%cRS1{Ml{cmX(}5SvCw*d3.D{_^G6w#=M#x' );
define( 'NONCE_SALT',        'kTpH,5,]jPaTSLkP(FUT-kRe|D:~&mqL9151H,nJ-uday?Lr*V-,(&:}=$w+o_m&' );
define( 'WP_CACHE_KEY_SALT', '8LB4J_/S;Rtc8~N,c&&o!U</EmnOH/=Gor6<=T]Qo,R{~B52Wmos^% Cr!w|~Rvh' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
