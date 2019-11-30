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

define( 'DB_NAME', 'hvd' );
// define( 'DB_NAME', 'HVDESAI' );

/** MySQL database username */
define( 'DB_USER', 'root' );
// define( 'DB_USER', 'HVDESAI' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );
// define( 'DB_PASSWORD', 'Hospital@1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', '68.178.217.9' );

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
define( 'AUTH_KEY',         '8?5%k/[%op;~E38hYG]=R,:2rff^6U?lbD7 34Rng,mu@:s:OYy.X<!^+%zuB`2;' );
define( 'SECURE_AUTH_KEY',  'E]#+k&=AlL=p|;K,NS|~v;r+lnwN{ey~!yMy3S`jkL0wxSyC1cz2| S~v-bPCdP*' );
define( 'LOGGED_IN_KEY',    'JyT/Sd6 h{DB,*Og7no?MGFNoa83C%6YI!O|{(]Wizy Tyod<ay]T0KlfBl;{h6F' );
define( 'NONCE_KEY',        '^PYj!%6-&2e.[kgUCf^vH!{%Yb(S=2I&i]ra%IVTe6SY<^i0!8eZ}EXMWUU,8+T]' );
define( 'AUTH_SALT',        'f^VI8}.~M*s`0BKL$Ty~SEzyXOY3@3SYqKc}o4J_/Sdu0[0|>|[07^lX3jy*th8)' );
define( 'SECURE_AUTH_SALT', 'wJP*,}9pR:*!6uC^%=gB%mrgQR2,Ccb&u@aT.vK~ihssdtgZr6pFRNE#T_sb(Wh7' );
define( 'LOGGED_IN_SALT',   '#M ,]T7+J_NuV@[3IQf?0f05.gs``.wGD;#u(R5>d4k-p#3f#43SV-WDC+Vl&}S<' );
define( 'NONCE_SALT',       '1&`0vv@R7:WRAx/POdPF5nYfoN:|[;W*YGZ~}P%|K7r2y$GK2W$GaNKxP0wUF;Z$' );

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
