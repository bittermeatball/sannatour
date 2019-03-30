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
define( 'DB_NAME', 'sannatour' );

/** MySQL database username */
define( 'DB_USER', 'sannatour' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sannatour' );

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
define( 'AUTH_KEY',         '(<Lub?gzV9lb?d?OZq~0:<pOaWEJBRM=sr0O$(#l=*DFI+7BF?`;_d-x6]iG?3^3' );
define( 'SECURE_AUTH_KEY',  '9d@^<^RKn/[65G>.fg9b3nZ^*2DEpMkqHM?LCZnnq-Xa>7+/q&~a&.KM.8.J FCG' );
define( 'LOGGED_IN_KEY',    '2u W[Y?nr*mK?AdD3uB2]1cB;e@l[iMu^iW^~m~pnQM!<Tkj;-=]~8.~Q!d#2e+S' );
define( 'NONCE_KEY',        '_@P;}d1+:=w(yD4.T><Dr*EM[*LIVLO^Y!Vq?AX`PYD>],l(#1_G$QFo69JmGxZh' );
define( 'AUTH_SALT',        '*7Q,gF564Lghoj6ycg}yAp@!@x~dTf2^/tX)&@diRtCRKDH.5P.W.33B~Zl6`[!f' );
define( 'SECURE_AUTH_SALT', '~}[ S{?N L}C+&o.M>j%*(g63:>6bP8)3<M~8: Ggamh?&/%%|]Fw+-`$QT43y(1' );
define( 'LOGGED_IN_SALT',   'FC20[J9Cbp[1:-`(|G?R(_2q@~O!5=mHwAP=k//FdxeQ;tw09YAjUY3eDqMrl}9%' );
define( 'NONCE_SALT',       'XVGRCrMLxHxI7i;EBfxj()F;LJ|;(F444Ms =:i@LfD]XetY=zUA=] ?LFi17SHh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sn_';

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
