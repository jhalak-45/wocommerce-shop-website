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
define( 'DB_NAME', 'shop' );

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
define( 'JETPACK_DEV_DEBUG', true );
define( 'AUTH_KEY',         'LBe<#}~Wwx^CeS?0j#A3gdC]L@%w1@F<2@?4VRKdsB0NYU9cbz+/4`|} K;j~0e{' );
define( 'SECURE_AUTH_KEY',  'NHMi]v#jN9XOw_OyAE)vdd%UJCZ:?H00ueOPd{oUY;fk_!2J;QEat;|[]bI`B%ZJ' );
define( 'LOGGED_IN_KEY',    '?nI;v:H_9)[*o*])@VuJ-?85JV4XGt2G478}~839J,+lAP|T }TtA*Ky-}E(~[#_' );
define( 'NONCE_KEY',        '!~sluC1Dl#dsuOpWDy3__D{[XjcrfVZRsY_+<LX: )T,is)?F !_#4,yFj@!T?Yv' );
define( 'AUTH_SALT',        'IBto?n&FM8TDm`uX/L*/`xA}+&*A:veP`WfjiGD&a(h2XS>]-[H$p=G(ncZgWOV}' );
define( 'SECURE_AUTH_SALT', ',3zj0$SBXd.M0/d?9yMh|M_+?;4IxN.VQF*9Jo]2TzWB.fli@k6 l]GRG88RklG=' );
define( 'LOGGED_IN_SALT',   '^^mIBs=I#w|T-~?mT8Zjb@U~N]@W#7%I<N1_PON8)ePn(MJmt2x)%@[3`_e?QQ|h' );
define( 'NONCE_SALT',       'v/LiF L;k3o~3|Ci~]0zP3){~SB<YG3<VMrzX.uF(Di8iF1RNB-e:>d2LM)wgF;P' );

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
