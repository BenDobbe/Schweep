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
define( 'DB_NAME', 'cmsdev-db7' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('JWT_AUTH_SECRET_KEY', 'LlFmwQxp9Vo`W1hg,>e@d^>RVN3||gNq!;vkV# S#v`Y]n}}O!Y0=Ew:g(8Sr+P)');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'woTJ~)^?Bd;B7UB)Xis{}Hpzhm2-l;;#aWNa[-@gW!t])ZdgBL{Lr:%PS,.T$^R`' );
define( 'SECURE_AUTH_KEY',  'z`C$P8GfRG$9N{A8^ubPrSAu12KqKf;tw;=<%Y(>xqdu1nbud4 =2:Fqx|1GQ.~R' );
define( 'LOGGED_IN_KEY',    's${KO;.ya?o.{7,lxHRC9m-WDLrk1J#~):6o5erlr+Ed?x5f%FVHi<0TBBl-6!;8' );
define( 'NONCE_KEY',        't|oaUBcL^`J4NT2lT_IO9#t4/t[86Xroy`i!I$]9SPKw>|NJm0mTO[ k8mSg(RQb' );
define( 'AUTH_SALT',        'B$(xLa4X(?b6orn{{5_ViDep4[W4Ls,s7a+>7?{D+/Fpm[9OOr&d/a1(haT*U7Wu' );
define( 'SECURE_AUTH_SALT', '8uCZQ`:6<5}MxHgbbF1u6*6{( {Yq>TW!2NQ=6,9p-Ly`r9do,=Ha`=bjDp.Ss!}' );
define( 'LOGGED_IN_SALT',   'iYS#0og0)FG:K)zp{@ws%Q:5CoE-IuRE(H]e1PXOVuX^^<g`A1OY:ccO#F)[qwKp' );
define( 'NONCE_SALT',       'yLVs(D[v?N;a=Dkwf:Az8):*c:a.t/:y+<4eC<@kWg}5}H^@LL^MqHQWP]ZtH*bO' );

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
