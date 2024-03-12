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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wtudigitalweb' );

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
define( 'AUTH_KEY',         '~6W--ZJ6Ti}V)[EjYLjI-Izs+(6Fy:WyQd@9<iSf+.=QSvCe[T0EWL7:7^TFYMd ' );
define( 'SECURE_AUTH_KEY',  'I++Fo<4|03_7t/*jJN6oENuasVH[>PnliEn:l#EL|RmM1SJ!^,kETtO$$]Yi6B}7' );
define( 'LOGGED_IN_KEY',    'HEUy+*z:&!zb8y~t[0S^t_VMgW!&8JO77hNA)LiaZ%`Gf q%>p,$+}UIWXFf9pPB' );
define( 'NONCE_KEY',        '|7d&XX@}>8txtS,d~MYQmBodW74eD0d8SFK@ U^Qp]I(n,.HH%5(!oDz>b$*QZ8P' );
define( 'AUTH_SALT',        'm]H]cko6l{LK-y,u=x;0P/4GpCCcR/ZQB,|~z4m#(*AKN#!a_cp+79l$i}O2jO1r' );
define( 'SECURE_AUTH_SALT', '{MbPp<m(FI>lM%%C*kHV9ej6KR-bwn1UGfPZ.vjK`UiiuiB^yo-Ko(~-9>M,2qXm' );
define( 'LOGGED_IN_SALT',   'J2$Cs!|OL@}*esH%I,OOj7BouT/ldqw<y|-L8tdlATzO`B<)Yg7st(n[`2vS9)Ml' );
define( 'NONCE_SALT',       '@xsODq*UZ|SviXf3F[LB:VS;84U8)[-b8G,%o(mb0IIYzs[@(>8C`WpD:VuPIgBh' );

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
