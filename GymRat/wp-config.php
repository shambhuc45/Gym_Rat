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
define( 'DB_NAME', 'gymrat' );

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
define( 'AUTH_KEY',         'n*r@n5e1$8*YTo)?kP>.kpQC.Oq5i8Bd&gUbKC$%)A^F:U2E?B[x8J}Zv+4|;MhU' );
define( 'SECURE_AUTH_KEY',  'W^f|hM88|@<$9Wv6nypup6AHH!]8qyohj|o[G#?(tOm{uEu9?la[R4pn(i/yu|1f' );
define( 'LOGGED_IN_KEY',    'lNY%{+3Q+EkG?.3^^nq%NEN9j,8KkEA#Y6Y7SgkGx^JNex%B`A^ExxXgb5Tm2r4N' );
define( 'NONCE_KEY',        '2!@K-5KZ2Y_yy5=06iU.oMitN}=Yw?yeB~pM-U?~QkC~dN  f6w)zN|nUVu`t8k)' );
define( 'AUTH_SALT',        'u2C{p(6!FQ8j0bxCrW+UZTlN*NoQ$5V=gw@*[o!&Y9Zr{Y9~pU&P%i2I&v*gjuF(' );
define( 'SECURE_AUTH_SALT', 'dvS-f4~0`8|UKPAwD7h2p3BF/k%9%i(XWODa$:[DoxzSvE~i`s?#17?D*o-SDEoL' );
define( 'LOGGED_IN_SALT',   '$Y1a>5{+,:1$q8N@eiKhOT;n4Coeb(xOTsH~Nmkh1W`VIQ;JZK _xYsz(![2~{CE' );
define( 'NONCE_SALT',       'pE<K<1o=9t5_N:A#VIv$7F$;*B,59CzD)+RJtB1fE,:1L20S9%|R`dX>GEy0$LR4' );

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
