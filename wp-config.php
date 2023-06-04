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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'API' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '_%.h?IegOO}uRR)MBJ!!u;1)-up]#JMx$$x XMH]ALD7s[)EqZ-U:bUez*[T4!o*' );
define( 'SECURE_AUTH_KEY',  '|H]M&IeU72x)mhS-BN4M3U.TV}Fei0Gg+#Eh`zQFf#8=~DI]&:XhZp[MPC4%u bR' );
define( 'LOGGED_IN_KEY',    'l<#S~7I7of4]4<]%K6^bQ{Rl$w=ol>8j)_)5X>P`P)ii/WCb8`o33.F)3>UWe&aW' );
define( 'NONCE_KEY',        ',obPezT(GwkJ-3Qy<qsw8Q5IG`P-Sm9}:#6V;l:r~/Df]`]^h?Xo9x{#oXidFo18' );
define( 'AUTH_SALT',        '8dvn;=K{!BFP.h2Tk|KjHZY;hh~yMtZ>P_pv=k/)h)71yzwe+3r]`{w3Eug,?0*b' );
define( 'SECURE_AUTH_SALT', 'q^LKJ4nSLI:yr.P~4,?!Q>h- XPlZ1qYg~tuAILb_g]8O5]S$yz]l4+<<%=%|E:k' );
define( 'LOGGED_IN_SALT',   '8vh3pu.+=[cBZYa0pMuPMXTx=q%8}}qra`07f0-2v#M,,iaTA;<lJc?CJP!H(w A' );
define( 'NONCE_SALT',       'a`ksif|8%:3_%/l9`{e*3b%PF7t;6$^$hGgaH_g%.UA#ysw)1}9xb.0qCWb}[+5A' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
