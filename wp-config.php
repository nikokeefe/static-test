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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'static-wp_db' );

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
define( 'AUTH_KEY',         'ma![>dKUH+,#$m4ugx$z2%ZVGHa*$Vz1!KmbC2!;5WJ=v6/n$SKq65zq?4#>j&0^' );
define( 'SECURE_AUTH_KEY',  'sR^FY42IwOXr)lm&~syt=t3z@s!*/5xq6nN~[C7L0AaV.;Xg5H^G1^qO&<p} 5 o' );
define( 'LOGGED_IN_KEY',    'Elb`lh6Q@AxC31|. 91.w`Bkk(QQ|T+H,WTG_r!-$ZoD[a={c2:>O]p&4$pkKf`U' );
define( 'NONCE_KEY',        'bYEsP@%< LAnS0b/uj;-TuM;q 3t?*]?5Ts7&NdrkIK{t*u*3/47OluCL5CyT3:m' );
define( 'AUTH_SALT',        'o?:rwPd<88EU_nY!Ekns$w&|T_!I#rfeU+pT7>gOOK<5svkV{Y84-p5_h5`/Zt,J' );
define( 'SECURE_AUTH_SALT', 'IDbr% U? _2^}0:e5Qi60^Q-5q)N]3NkyEJ~/02&!5bS:V>Oz~5mH1t@{a,3vQWA' );
define( 'LOGGED_IN_SALT',   'h5sv8{+Bs8{wg+(or}A`l2EX;Wcre6+2Bo1&hw E_FbeC14(*Q9DvRQ/z~v>)|d*' );
define( 'NONCE_SALT',       'L|{cs^pMZpz:hW,eg{^.1i?Sf.gAjFR}Cls$9AUeHG@yRcs$3J)>.-+J=i{.Wktu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'st_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
