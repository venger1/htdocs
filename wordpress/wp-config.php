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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+DCfL$/ Vbdd96G34^p=nq]Js-0?7~mt>Q3eIZT}d~DyzEJYcGqSq+Y~U}X^hFG.' );
define( 'SECURE_AUTH_KEY',  '<f T_e5d$I:Ar?q[&r59:[NP/<,YKlyDCruI.&CChfZ)UjH.`!@KcH1ZB7ZGoGI^' );
define( 'LOGGED_IN_KEY',    'N]?JUUyCERDZ&2x!K=%|CWQL8g=)9iKy=^8EMerx|/uUwRWw/`br/%r+q|VOdGK/' );
define( 'NONCE_KEY',        'A*LD6w,QE<3tM_O&gEa>L2FE[fFyP7j5GKkc95HmoKq-9^xN$CD8jySdu}mk qbu' );
define( 'AUTH_SALT',        '+t+uw]7ip#{f|#[Bi{O/0$a-@Eu.(B+CYI$c4f!Ofzoh|7cJGPqD+05o7gv<@a>|' );
define( 'SECURE_AUTH_SALT', '~NTDB<qv!CML@AV0RGr}>lqlt<5W|rL;:DAm4+W;Fb>@GC<q|hF(Dib&7&t4JE$c' );
define( 'LOGGED_IN_SALT',   'ij:6:}/Yonwp:x{gk1b*dX~~V{<T4aA aRJ{ws}3%$M#I=e!b+sl]<)oU)Qc!P@*' );
define( 'NONCE_SALT',       'r1$dSe~?,X<lQ0cM[|5D,jPgeqxI9(=E&|JvU4S-*@D2bJp_SnK,~E1?2%dx9>M2' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
