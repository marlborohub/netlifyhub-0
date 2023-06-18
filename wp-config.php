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
define( 'DB_NAME', 'netlifyhub-0' );

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
define( 'AUTH_KEY',         'b]S/95pu?gustxI7}DI@$cjt~&$(&n>im$-%ggvGm{ejbQJ6+Q(Ab5wq8L/3dw%]' );
define( 'SECURE_AUTH_KEY',  '@*Srrd]0P-qF5Wv)hy@4@hDYc*?BGP_a;xg4,g;lH8U%]bHQ.Jmt;rc6onw(CR+@' );
define( 'LOGGED_IN_KEY',    'bZj)(]>{a!Rj2%C627!8$Q1TISwJb2$7*DYZ5i8xFCFwK.[+fY*&(ZEv7)L#?E{X' );
define( 'NONCE_KEY',        'W#Pcw>k5]J]uxAMH`-8UF<8!65ohK8;2suL[EUt_GBxEAsS~xEXI$_,/<en#H7>~' );
define( 'AUTH_SALT',        'CliLH-y.}!]oq%sq&~CN7<][Ua6+(Jw08X~;J8g0o;p2:dE;90g$~zeQO8h6>vXx' );
define( 'SECURE_AUTH_SALT', 'm+IuS;n=o19]IB+xZ({u+aez?L_1BTU1+L8,(/F5BbN-jk]ic<d~:x?m{:JH.pW{' );
define( 'LOGGED_IN_SALT',   'MvwiO}^.w{m1t[3heaYVg&~5W*PXz]!Ee>a!0~J6`CzbZ5M8!}S`7;/3iAQp;DT~' );
define( 'NONCE_SALT',       'w=Po_I7&H[J~Sf1d^_OyDP6Ef{ X@kO{q&L#fS8DEfQZawV_hT!Srw91UQ,~t`]0' );

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
