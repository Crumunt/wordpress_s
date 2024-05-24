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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_washingshing' );

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
define( 'AUTH_KEY',         '~e8.>}gs>/6e.L#e8-q+{zR{3=;0g6 nq!mu8eBz<V>qmZzhdU{-*#TA9(+Lm&Gm' );
define( 'SECURE_AUTH_KEY',  '} N>1TfGl-BfEil!SeT/d+^?hkT^?i#KwL&I}seYfc55SLN{?Hew;Z@: Z][V-94' );
define( 'LOGGED_IN_KEY',    ':]ZK,m(dDGf.2]oRc~Ep6d!x.<SO!Y][I{9CN>fp!f4)q`k~tUpE~Hpq_u)(KWgw' );
define( 'NONCE_KEY',        ')>(?b|*Z`u1r,CK$@!}fz$+r(jG@S(V#Irce{HFmKj7oD.1{qFWH_/Y@(N(0DhP(' );
define( 'AUTH_SALT',        's9G~<Kh<cpfOYZM*d%e|f7*f4e[b[V*>lL$u{eD z-L0Zi^2|H{r4+N,e{z-)cR~' );
define( 'SECURE_AUTH_SALT', 'I] ]F~3|]`2Zk=Fp$b/`5QZ9Qx@L=J,f-lh-2m=#K#s^}{<kl=cacc8o2W6>k9KH' );
define( 'LOGGED_IN_SALT',   '3WJC|_X]J)#1AzJH}I(?-ySCt*R7cu2zv*.)bOE1!cUAwMY;!QYsEr3)F)U_[(l4' );
define( 'NONCE_SALT',       'hEm&Ke6 mUtv(`#s@o2T_|Tt*Yh;lx H}--hs@<N8n o|E9cQ@bpNWfEB*a:e)Y}' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

