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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_livescore_db' );

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
define( 'AUTH_KEY',         'a9ffzjFS,J}GY7>LGmGhaJfMAIjZS=bO=}yZyE>Te4#KU]<FK|OD}cj/:T 5AxeN' );
define( 'SECURE_AUTH_KEY',  'wCd>jacCq:[9R@_Y+lR<,*P*M<v%+ Otg1otOqCo-<ld=2Yw&qWzoWe /a!6;TEu' );
define( 'LOGGED_IN_KEY',    'r,tt[8b{^[,YM3~#*TX~9VChQ;iiJ_b<zz{E@uR%p8,e:M#;JSw&q3duK1XY;W!F' );
define( 'NONCE_KEY',        '$tmT/A -[9eD.V9-*KqX2bTqR*%0(<3kr8#9,sIBXXV(1wi&Ap+kZ0ARwN_R+K1g' );
define( 'AUTH_SALT',        '>ju*Ouh8/jDeq9.3eTk?TO{;=d~XY/U71~mw6=7&?<-s#2t_q(,%dM#,q1GHp&N!' );
define( 'SECURE_AUTH_SALT', 'Mb&bV/*Z^q|3>6xO:UvPOfe}Xkd!I92-CKkWma;u/9iprQ?Hea_g=3?z$^?#WyE%' );
define( 'LOGGED_IN_SALT',   '$:xbew$?6Yd_(0_bB;Xemq9O@`@Lm`#E#r0r&h7<}8oz+EtAh;x^ Lp4G{K[~T]G' );
define( 'NONCE_SALT',       'poJTk~MLS&i2~&.2WM8%M|@M7HW=en4Wp!A7/R$r :y}3QOtD9Ier.Pepah:FDnr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true ); // Show errors on screen
@ini_set( 'display_errors', 1 ); // Force display of PHP errors
define( 'WP_MEMORY_LIMIT', '256M' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
