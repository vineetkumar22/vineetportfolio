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
define( 'DB_NAME', 'vineetwo_vineetworks' );

/** MySQL database username */
define( 'DB_USER', 'vineetwo_vineetworks' );

/** MySQL database password */
define( 'DB_PASSWORD', 'support@1' );

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
define( 'AUTH_KEY',         '|MyX@;JAmim1L9sZU*pKeQ-?]_GS2|c6A^u7U5ZwGj6:E=g;|zc{F>>$N*7=3+,C' );
define( 'SECURE_AUTH_KEY',  '5VEQJ)52:i9Us,IFBjMA-;54$pYEji)xykzs^p=;yY-HlQ)L^WosbP>bICvOX)Uh' );
define( 'LOGGED_IN_KEY',    '#XWfGSnuu!ZN$^6y]9c1xpf/[(9c.xvJ3pO}TzPX? #8ZQt<9+vxkIJ3;C5:|e7f' );
define( 'NONCE_KEY',        'P}=aGfwz)+?f5yy/RvvQTE=C`F&tMG)FuOjc^R=`s#m2Tz+y[EkM0SRwW.<a4Mi@' );
define( 'AUTH_SALT',        'y6?=oSb.ozSbN8<P/reDwt3<,Y}Cl7Ij4JqyP38,nz#G~pX-evPoEe!7#4x+l~o}' );
define( 'SECURE_AUTH_SALT', '&^hk;>8H^<Xb-`o|_?t<FZ%4p6/-B,3Ax4c6>Vl{2>MWj]:!o5jE$<_<Shn#ar3U' );
define( 'LOGGED_IN_SALT',   '(J^4(>iBoiN$$7t]^*-]ONYiFveJR2D.AU35aurM1+]j:eN%<KtF(KR~f/)kWl+A' );
define( 'NONCE_SALT',       'h!U5kf_*(4,#??-E4@Fq|p](Q;XSu_@O&>BWw@m4n4RM?|>#j=/KnU+Z>@mB;qN^' );

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