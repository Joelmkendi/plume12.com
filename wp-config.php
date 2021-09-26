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
define( 'DB_NAME', 'plume12_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'hmr3J&YLL.3Jh|9c7!&!V4`Qbx&xevZ-cDCyW$/{1:LZLP RN5Q~En5HoVI!HGC8' );
define( 'SECURE_AUTH_KEY',  '$}3ZeGS}84]kXF^z%:*6~_WSuv__`S.D`S7OQ(oly|aN6B2oeoo$>:pinW}X}Jb.' );
define( 'LOGGED_IN_KEY',    '/]mEl]Z/;JjF~JvG~Ct<[g6<a}eE`OlW1NyMKed1O=)K}>][|%7`,8)GWHH}0VC<' );
define( 'NONCE_KEY',        'b#08`wgeApuS3G.ZKl6i04u*gXtAG#m:DFjB0W6Vkjh!O4tZ2_y5@?)&@]~<#)/?' );
define( 'AUTH_SALT',        'TPa!/q#EcIa%kMG$c%r{O.FrW-2R|Niikt{5;:dJ5oYJ*WWYG(U;Nf5|n(/d&fHR' );
define( 'SECURE_AUTH_SALT', '07+=1Qm{lMxn_j>p{/xweZ~nn942YV5u#7:7a,a%ZVuR 0mw?=3Jj2o/[^V0&Q68' );
define( 'LOGGED_IN_SALT',   'HzdG%?4@j<?<gptj>p?2h!&na&rwi&c<&|-V`)&H99U8Pr+yOU|9uX.<2P^&Sj$R' );
define( 'NONCE_SALT',       '4FTz#LeO}a?By^1eA10p{y3iD!q(6R(j*FwcQ9#&6kIQVoKM^(KeC#r(VK6}!$LB' );

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
