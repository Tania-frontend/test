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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fotomix' );

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
define( 'AUTH_KEY',         ';TpAg%`2*(J]C&$4$xaVMh?Qd~B8[&(1bk`$GB=0(O%r4OHNZ=x$iJ_>3y ey#[X' );
define( 'SECURE_AUTH_KEY',  'i&o/yk.^M5_=k>pmY@ve2yu9m!$U?M~bM!4skB uT`O7{l+lb+`th9>7giNvNqlV' );
define( 'LOGGED_IN_KEY',    '@tE_k9&s>(o=yn@Dc$0t(~ i)nplfLDiA1y7UE<u{M{K;_DQD!Yw$X= 9_7f|1eZ' );
define( 'NONCE_KEY',        'm4!1x`4K~gn2L5*y<yQX<aQ=FF&^v:Q0y1*4ZPnfO,?pw3Mg9$IJZwiMH<s>z8{H' );
define( 'AUTH_SALT',        '>SrO6V}qp%PYY},qkiRc]];0W~>x-J4Z[nHWr(%^.emW]z13d #GH@mM4L3eLygl' );
define( 'SECURE_AUTH_SALT', '%PcN]W0]3=kZ!!>PraGF{/yM@)Pd2|0 Z!FRV3,teVJ`~[ZwK=}-sMx1;5Dk:whO' );
define( 'LOGGED_IN_SALT',   '+w #?l~~Ub-aAa7XdjR^qR$2e79;[KSEM(,P>)Jb] WS[$Kl17nl0 F*{SI5$^}N' );
define( 'NONCE_SALT',       ')8u{$if:>)y^I&Zb;]F}@L0r;7MQ)*l3JY+q_%]_#6df6D,=PIzx@4]e8Ay4;0KY' );

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
