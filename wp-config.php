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
define( 'DB_NAME', 'lifecare_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '!!admin!!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(`,|reqDK83g`wcEOSl<GR<Krx,G~&X_ku{>,yDQ<%]*i~*Fw}{d?F!&Cn5@=X;$' );
define( 'SECURE_AUTH_KEY',  'hEIWtl4Z&n`Z7SSMCmS?U$3G61z(kGYf_7H&5!F2!K}vP)}_$@.B`8~kxYgAutTp' );
define( 'LOGGED_IN_KEY',    '8xwBBlfT|O`aO-U[X$P7sLU$_g^.0X(B5 #PcaWZ= R:J:3{_ssVvZ{.~]xbx$eW' );
define( 'NONCE_KEY',        'be< iEB~lj!xs S|<v<LU,P^P;_H*h)qW^aF^9``JE5?_z/DI5yz^:gTfZHx?~&r' );
define( 'AUTH_SALT',        'r1y!cf;PmY%9c8}&lb=7ia-iCm|)u9!e3Di9qv2de!*TONd8z]l,<(AChG:8L(u`' );
define( 'SECURE_AUTH_SALT', 'Z]2#-{Jlj$y=jn!T:3JQzot-Tg)>poQ:fF$>6)GBdYaDia00rX3(k&`2m>x;kSl+' );
define( 'LOGGED_IN_SALT',   'o%AF~vN*D.KOI{hQv^aF{6RX] :?[76.xa;/5.GCu]X~L,39qDmH[LX##qW:mttH' );
define( 'NONCE_SALT',       ']RH;kzdm-EN/4#5;#dzQOYEst5H$p>Yh[<yTm,Z|87L(g9IvCey<1zHIm;9#1R,9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lcwp_';

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
