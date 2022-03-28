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
define( 'DB_NAME', 'wordpress_dp' );

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
define( 'AUTH_KEY',         '{&QPt$1]Z]X7@7 =**ZowI{D/??7Ew|Kn|h[[p@~9_D#ut] S9-0lx=o>W|lfo{x' );
define( 'SECURE_AUTH_KEY',  ':zm%_JzMxsA:-`Wuuac;a^Cw25DO?D!M.<7A$u<1c+kiC`>qcpDH)tErEn*H{o!r' );
define( 'LOGGED_IN_KEY',    'M(/{7&90>[05e:0Tm16[Lbi2b&tA};WO~]c{[g}o>2HHwRe{$Gk:IvkAb>hw1/p}' );
define( 'NONCE_KEY',        '03o`@CulhpZkN[LnjD3PJco{K)U-<e5+9(*JGdqh<KL~6&|9ZM-]R~.;d4@E^,cw' );
define( 'AUTH_SALT',        'qo=WEvs>B$rw(uC`OBq(uK?P*P_k4j6~lJ]*zJ !~[BU>4|1,([s7r1J/aeBVX4c' );
define( 'SECURE_AUTH_SALT', 'TU-4}sKQLo|C[Aq:A>88ESlq.k@u93~fZ*1Q _4ry>|n^$KfsZ3E*Qt!IQ tL_HI' );
define( 'LOGGED_IN_SALT',   'u&>S7WiJEhXWrE0[c|__a;?fkc@>#aNKy$Uh[=Y?:ueTEI$9RfRfQcCL9!W|?QvT' );
define( 'NONCE_SALT',       'O,zs`O_7p5-~}rD1s9x!|F->9ViE=eR,k`fsr`g[:l*99c6nYw|R]Z*776.LbEU<' );

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
