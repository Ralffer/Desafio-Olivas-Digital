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
define( 'DB_NAME', 'tema_oliva_bd' );

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
define( 'AUTH_KEY',         '.F_blP5O3>,lv,!fmzyqppHQOef~MI)PgJ{&=i:;k&S!r)_,2]Rv}+~y.u{3K7|s' );
define( 'SECURE_AUTH_KEY',  'o`d#,lV#2Jz#h[(__=OA:e$mygjCD:AhER|T{M>/v46Dz,2kr22Sg~2v/FqYnEHg' );
define( 'LOGGED_IN_KEY',    'q{ZhD1iU9dIxb&sZHibHebe[]S)UZnSF:5kq@i}>v^(|+y[NY3wGMT!!Ub-q]stN' );
define( 'NONCE_KEY',        'm5s@W2&-,Mb`7quf3p+??KB&^323w9&:]WnRjbS|JrSkIq>KSYT]U`{a}OyB&ZeE' );
define( 'AUTH_SALT',        'zDb6Uc 8go!j-t/o=J6]])BR QM+abUJ8zc1WKcYl|_Ll7`ez4)-RCp~jRj;;:#e' );
define( 'SECURE_AUTH_SALT', 'L0>Txm#$K/kr04-}AU6+sE1dMyHcFZ#&St0YfJW@pd-cU,p&u`bH=hj?)Na7O2~.' );
define( 'LOGGED_IN_SALT',   'G`N#J#DAE+_|`@x?#?X!_+MJ&<7kI/Nf&RR./*dm#c2Q?)jq|,bKC<7A?-7FVuFW' );
define( 'NONCE_SALT',       '!-WX1LRXPesdUz/)1;D_;2idVvWWVKdT(0Wp/g;h7,aFTFsR3s8M64F+/$NvM]T6' );

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
