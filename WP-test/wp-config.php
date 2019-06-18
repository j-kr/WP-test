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
define( 'AUTH_KEY',         '?kg4f+wRic=x^;1--%^4VBJ73R0+`Bq}B_bOrjum=os6OWOzHv{&H6&;F2DpmtV;' );
define( 'SECURE_AUTH_KEY',  '~YR5S]7-wGZ.;^DA58D3FSLJ0DYP# Uno:A]1(ejz99n Zfv wj{K}Z@(V1KHX}*' );
define( 'LOGGED_IN_KEY',    '6OCx9OG3Ie37EKF}:=%J98R(~1pTT#iPfp[1>:T.z77tqQlurlEuiPCwz~oBU eM' );
define( 'NONCE_KEY',        '^v1a1;~&sg}SN?.|i|y,7<qc8jK}=okWJY?rnkib/](H?~JV$xfTs<nWxp{jI~9x' );
define( 'AUTH_SALT',        '!4OB] lf{$yr=6;Z]_A!cQ3C$ovNJemN?*`fuo>QKniM]4bWfG!yIu_/QV;FZ:rj' );
define( 'SECURE_AUTH_SALT', '.scM{:2NbjGIpg|@rr <lHuEL/h3nbooPF^~:xjA-JaerQliF{)Cl]r_nxR_5gk:' );
define( 'LOGGED_IN_SALT',   '[HuV3OO!/61]pT-U*0V6>amf4O6P=Uc&$~qD&AZhazM3zLs{F=(%`lP~6d$Q:nd)' );
define( 'NONCE_SALT',       '61OM9V{|zYgoZ_PBrxmlr<3:xA#r}~x7=<fDLm4o}tz{rSM`SC%qOfAm/S&?/n1x' );

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
