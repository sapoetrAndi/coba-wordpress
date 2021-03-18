<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/* menonaktifkan theme dan plugin editor wp */
define('DISALLOW_FILE_EDIT', true);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coba-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?r=pxT[sj+FEHT,HVSHg0ACC8swtob,;dFy 3$9t3R0T+bE}Nst)Om8(XJ~TJ90%' );
define( 'SECURE_AUTH_KEY',  'muIx$0rl[:mI%8)![h^wx <;:ri}o>rc/*9b+_5A_|#G^/$^%d dmNG;<FG)3Lkd' );
define( 'LOGGED_IN_KEY',    'OC+5@6sJQD{gMRZbI1anA(QEg_o;-Dk.Z!8G;lL} je%R|SeEU_Fzr>Zpc(Cuv]U' );
define( 'NONCE_KEY',        'C7?wj.0W_,e~pXV;z|0v,nIk=!A,Tfe6=T7oavYB^h18cGg41 yl/F=}yzmRQ7<)' );
define( 'AUTH_SALT',        'V./xJ^RBN6{W=QUR@oe+;#j&xRWw_T;Y:OhW6GWTo:^+wPNH=WB ;2ckh&x$)9*D' );
define( 'SECURE_AUTH_SALT', '[zb#XT&MM`h9*GvC61jo{8@So$}iag5NNf[w:GH#;fxLK?S(f{>ESUZUZN}?ag8p' );
define( 'LOGGED_IN_SALT',   '7dU-nq4^:|EGsM21tmvO~B: B/E77z5~aZ~0<2In:>VK,Fk-4i,wlPN3X<5XK+VW' );
define( 'NONCE_SALT',       '^f9-/-wjFzyeQE5+CPo2Nf07!V{ZyujiiJ8Le+QzPGlvlJndpmiX7qAp<Hj=UalG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
