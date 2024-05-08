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
define( 'DB_NAME', 'wp-adisak' );

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
define( 'AUTH_KEY',         'zOlr||l3*7.>Nv*$;&H$4%KUT61=oyZ2:sGHOcbBX=$EU!#L}?i~3bmoSzCQ,DRH' );
define( 'SECURE_AUTH_KEY',  '!eJH9})W4{6d1C4v@K9>6?|(wMo+i+(i~hsT5&9nd^kz=K2IA@BU(|2@,@-19-P8' );
define( 'LOGGED_IN_KEY',    't,6gBZYeB}]n7{7Y;TL. U9[ta+m>M|.j;ap7qxE;w>asX8v;?3 sa[UR<h Bv9r' );
define( 'NONCE_KEY',        '95p? @UTTP HlWy0C%tdA@1aaElYVoiL6tWpTB[rcNPuz<v<R]<4&NxBC>^6vX1]' );
define( 'AUTH_SALT',        '0nUMg>$x]0tA~?QJ-pQ>><wv@M%#2:_g+wuer=QFfHO#9|;LphQPB&8i^UA@~# x' );
define( 'SECURE_AUTH_SALT', 'S`Qy?mG?_&Y;lGs/]l{QC!WR Io[fl;}qNhGG(NaB0YL18+;LPJ(ovY)zvyldg^8' );
define( 'LOGGED_IN_SALT',   ',&N<UXSTrw;NpPn}k]}/soz~f4&|W,iMPNZC9N{GDbn3Xs&$NHrHvC2d8!yM6F>g' );
define( 'NONCE_SALT',       'sr[&5SqBW<KF>PFOsQRat(yhYx4d^KC:ur9`Xb0Utjb_X&*[7xK5emBW8+]_jAV[' );

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
