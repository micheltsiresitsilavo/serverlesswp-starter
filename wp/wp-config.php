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
define( 'DB_NAME', 'fleurwp' );

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
define( 'AUTH_KEY',         ';Io>mmPGOItEHy-J`Hfx<q/Kz3F_Sd[^g&=|VCbsgKUH)`v?V[P}ebCiQ!X(5bSO' );
define( 'SECURE_AUTH_KEY',  'FSvkFGMcF|5e&+UqH1y=mAUTvU*V1DQKJoKVp@FQ;/xoo|bs6t`^.X%rzUcT1hV ' );
define( 'LOGGED_IN_KEY',    '=6[x t.#RN4>k{46d(J-d[2tK^%=rN7&N6d]Mqrwg34i7 S>);`<8));Sr) a%Pv' );
define( 'NONCE_KEY',        'ULU F>IA&gUK P)jbv7_RcrI!<ySUA6Qiam$K0v9k?!*D@,{_V}}_~UzM%8<!:ky' );
define( 'AUTH_SALT',        'JCWD;m1On7RH[/RebL6VO:0;_%}Vd/*ZX>7;H:)!|-F7!kuw!WOwDZ8:gHfGXg1f' );
define( 'SECURE_AUTH_SALT', '{(N0DE6NU^sp#/d6_+yM,3U%R.WN};.1Vs$.l+EcuuZik$v/?b/t/9yNIR4`9s]f' );
define( 'LOGGED_IN_SALT',   'TGw*=W!#^crf:A7JK5,_Hmd4Uk]l wRjxDKv^b>Z }%yY&(:`U2;OBFn,bVnC1]:' );
define( 'NONCE_SALT',       'J<N0#aGR G`b-K,[unQuMC/Jsz:*,WjaT..t]>M<B fRy:]DGNvn/8{8t;t7f&]0' );

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
