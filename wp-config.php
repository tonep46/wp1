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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r?[qi>](W#z(w6D#|C71O<f5B xDt`7h)k])fWV*&am{)9W*e|yfOVA(KI84Erg[' );
define( 'SECURE_AUTH_KEY',  'eG0r|;(ns`JMz[35W,/SqdIVK(G*p#tB__{QyY}Nm~_$*WiMx:D]cKXOG8CiN4ca' );
define( 'LOGGED_IN_KEY',    '{bAatD+mjc|,$^]Tny9tziGvhX3s;oq=f37B4e@RaCk`}&dTi`%q|Yiy]S}=WK/]' );
define( 'NONCE_KEY',        'R&ey,AtzkOGyEE6%^*guU-p5DLbn+qV/4&%+}W4|SVax 1rE%vz|}f;kCGi@lKI|' );
define( 'AUTH_SALT',        'V7`J23M|0/%$klt8}RtqfV3Bp%C8hAWF20>WEIk#Tf)_;|!voZ7jj~f}01= 0&`(' );
define( 'SECURE_AUTH_SALT', 'wtP){mqb8,,uG**DNX:x.2G1;bL@8N:kG!CL>AC9yDACXqIS+L]@-kmj$p6A{Q=|' );
define( 'LOGGED_IN_SALT',   'a1@{<RRck/3}c~Gi&%yRDb6pxOV:ZWwM=X}y<o]*~@ba]ud*Pwl5s,fJR^_]G|aR' );
define( 'NONCE_SALT',       '8YA$])V<pW`1]YoUI/U@n~1kJ7QC&V@L{hnAs6%||fK-0}l4UR2mVQxROs;:Jtip' );

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
