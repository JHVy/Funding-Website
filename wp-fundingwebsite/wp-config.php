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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ZbQB(A<F4C?~k$NU7q((Xw!EnN]bHgBSz%#MxN@It#CC9~d/pt;-vyrE![VaRSD(' );
define( 'SECURE_AUTH_KEY',  'zt={6_<DPU0=rzJJ}QH]NzW*AsboX3^gj+^J)!Dm Q,6ha}jD?,RPd1}rYG%=@}b' );
define( 'LOGGED_IN_KEY',    'mtH4!C#y(!Js2ypt?b%*/y@iW6Dd%dsd@SmBk[o` v02CWaKg%e*B$/K?_[Qt>Gd' );
define( 'NONCE_KEY',        '=.AJ2KvQKkW7,-xCJZ|7Ud@m5Jpdn E+^apkEqHQV*rTB{VUJb!?lGbr8(Wm>;m]' );
define( 'AUTH_SALT',        '810^N <o>ZIU?o )t/3*TagsS|pU|W Pz;}.&vGFTEvk@|QwQ>P,5k)M5H6iP5pR' );
define( 'SECURE_AUTH_SALT', 'HfbzY$b>}9m!v)j7j oSs[{4Pq=Hj@MMNI{~GKb+Z|}2*k:SLvY:^4u>6~<=#]uG' );
define( 'LOGGED_IN_SALT',   '$;R+nU`gH[+zRLiPpsNh-Gs_G!arU~piY[3x&nejI3i$V/>R5=*2xj5^&[*i!K14' );
define( 'NONCE_SALT',       'Nl<HQ~mc9Cw5m!X.mrfo9LWXwo&L@8z6tw2`N6Gk*w}R04?n;>:B_g3hCrnt:&|q' );

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
