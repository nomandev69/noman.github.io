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
define( 'DB_NAME', 'wpwork_db' );

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
define( 'AUTH_KEY',         '0BVS1.Qf^nt AU#=wOvFISB!1;Yy# P([qAQ#0uKTtsR7Ve+A:_dF(41rbAL7#V<' );
define( 'SECURE_AUTH_KEY',  '00QfgZ17.wlfG@@)co#*D=F[@.ISHWq/0=dxnx8Cv.HW6*)(cqk,m=GVmWFC+@?(' );
define( 'LOGGED_IN_KEY',    'e[YnBOW#W1D:*]O_k5,Sm&Hgt+5g},B>kVppWIu%N4.( c( u`p(UsabIHB:i/:E' );
define( 'NONCE_KEY',        'MScb@^gCKnkr{]0-=k6}eFv^n5T8|}Gk|-=^z5)U}0=N t{JmqX`%0Puwd.-B}W-' );
define( 'AUTH_SALT',        '>u=8e/%Mt(d^vc`CV,pL^czrfh-1aB0<)3)kkqhi6<^06?3 >PFC|F /5KdNZv^:' );
define( 'SECURE_AUTH_SALT', '4Wb^6w,2lYnbF(lJSl#Axq`a_e|V&<@3tAVk#YLpJ#@&^*xg,v~Q+T6HkEsgA{@d' );
define( 'LOGGED_IN_SALT',   '@j`,8EVV]_3(4%CZf6Q 22@[cbVHy71xZbr5{dkDNL,.[|xN&EV#F?!.NR2k8{Kz' );
define( 'NONCE_SALT',       ';}x85Iv*1qtNk~wgPS/QbT#yljFjO(KY!4Km|ce4-A:`sP9]Km(PlY7)YQHVdxiy' );

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
