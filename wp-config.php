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
define( 'DB_NAME', 'camera' );

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
define( 'AUTH_KEY',         '}uY.H?CMmbk1aCP/3M|2+9n`x:K*pgXL>^iDqoU1w _u@MWSPv$>;C J6q}KUo3;' );
define( 'SECURE_AUTH_KEY',  '*W]=%YS-V_Xc1;y<N|O&cqY.BYdPBb157Nb0=wHyOH7}uLs<!~fwEYh]_9|Tw=aL' );
define( 'LOGGED_IN_KEY',    'I*eNezoK+e;1Ne.g0[&;ssxT)a2D|P=.*$%m4X==eh~telfY^XX$9C_LVPO8!]]:' );
define( 'NONCE_KEY',        'ru~Vg!{LAScK#c5Rqk`or3=$qH5*1j21WF9,uv6JlS30ia}Ynkt+hO,0zQTP-)EB' );
define( 'AUTH_SALT',        '/@A^{@N[]a0Ha2s&@|n)X,U|UvM_Ogjl]&:kJRauf.xm.y&),i-<X$7R,P5cPUXz' );
define( 'SECURE_AUTH_SALT', 'zDGhx>E3jgAn<6rYpo2fM*R8u+GxBPJP.!Yk5M/jGUp~%L%e#>ioDW^s{KYhD[Tm' );
define( 'LOGGED_IN_SALT',   '=w{ot@e/-`6jld&~ci`#D@T*m*(0`K=WY8fsL~5nD$|Z;}(.(FY[pR~-#V?26mmy' );
define( 'NONCE_SALT',       ')Fkt2^`3.d1du6hw_*X47w*=AN_B$6n2(Ze>AyJX-TiA.,tVQUh9W`!Z:u^hUW0N' );

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
