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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         '_P@^Rj:!X7A#.y,Gparn{bNOU6QGO*CiC:EL#!g,v4/P7FRC*YitZO[UV09.y<h2' );
define( 'SECURE_AUTH_KEY',  '(>74^;0t>d 66JNwoO}X,u+&( A(#V$yYOq8P[yp;vty98g[!Y< 6l0>,{]izq$p' );
define( 'LOGGED_IN_KEY',    '{)WBsavrSGYc%M)?WFFN*SzU^Qd:NlxOIpkmn@S>0J6ARaB~=5Ey15RD{ edQ{D!' );
define( 'NONCE_KEY',        'c:4.u.tH,$9-x6bv2SB!yXm1b.454x;%fSwbIJW=IXK, T4j%M&tyv4g%ElgvX-)' );
define( 'AUTH_SALT',        'G:|0(|O:6[q5?[z8ytD0*%Z]~piBBHZ}hb5TFUg%N3tH1GxIo@Ni+aB~f0x>-vKZ' );
define( 'SECURE_AUTH_SALT', ':Mc+ =<m((g8Z}yk`]i=F|0An=f^jJ H#z>6LU:+o?8(zu1:S-SMudQnjf<7S%z9' );
define( 'LOGGED_IN_SALT',   '6ci:$%0~rLc^C(7(jS:@QgN90`Vp {yG6O[}BQ ]HO12P*o0~5&)ZH,+_O?TejZ/' );
define( 'NONCE_SALT',       '#8D)i:Fk)]XA?F@5D:L.ZwY1y7ZuqqBXV*l9m8BCO-r}_VlW5nhBN6}]oM/eH#N~' );

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
