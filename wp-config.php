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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordecom' );

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
define( 'AUTH_KEY',         'ikkRbGA&[ e_Uk)Cx?o8)pvo[^}f{21[$3GD#?CS1JwH`!gwQE|4c6n~Lb5AORGx' );
define( 'SECURE_AUTH_KEY',  '8#Uj<Tsw09{6Cu~1@qjVuOx3F(nV7(#gD;p1;A5fluOI&{w]eX,3vA0E%7K 6?$:' );
define( 'LOGGED_IN_KEY',    'LF6xqFjSR;D2{x=C,0CB4I+:X7Sa0q`(g^0;YT.{l!T9IQ1ce/Ptu@a(&}/z#>qB' );
define( 'NONCE_KEY',        '3a},E#](Zz%7a,)M<9UbliLA:uk(Xi(1ck2O_)`c|$LaYqyY-{ug3zeTMF9?rEd*' );
define( 'AUTH_SALT',        '$t[R~iB7E8kA$T{ndWy^63/sm@+$~cvjPHhx-TC[pTLV9re>q,N=d1?Ul!bNy5B1' );
define( 'SECURE_AUTH_SALT', '-3DbYs;+ Xdc$ot~CMMMWAb3px9+^+PK0f.*D)Ky5YbQv-bnSdI,]5f{Lj4K8&Aj' );
define( 'LOGGED_IN_SALT',   '^$gNstRw9AU5zkx;OY+,%.*<r9Jp!U4]!xugydO6OhB&&4b Ehv4mCI3s*+9%ztk' );
define( 'NONCE_SALT',       'y>ot5TVLE<(7HHBPaU1sA)`RKXG+W.<Y,T@[yH6`(&z0m_(_/$*?F#*_LYxgDHSz' );

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
