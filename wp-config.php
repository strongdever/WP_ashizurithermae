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
define( 'DB_NAME', 'ashizurithermae' );

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
define( 'AUTH_KEY',         '|]Sw;k/+fk4.PCPc*p{sv;l]#}U*[Uo7YJVszT`YV4b?.qFMq8Q3chfwGR>%O_l#' );
define( 'SECURE_AUTH_KEY',  'J(B8z,@NMtisotDz?yZ_83VQDb>4_),{77c%X)zwDSv*3ZtZ -ROzPDQ!G2wM g+' );
define( 'LOGGED_IN_KEY',    '9vG/a*#v5%@*[J8>F1Knm`kZv`%CTXR-;w0_,`.M`KCPSrYy}Rs9|v,|pJQ77f-2' );
define( 'NONCE_KEY',        'MqIS2DGt<Y;u.Zc_N58z!B%d7#,Y_u&fE?e=q:a7i4;9*NQ7AfCH(9$t$^h/Ti}>' );
define( 'AUTH_SALT',        'gywpm;EKpr,{lz?F}/yjw{|DhbP5p@u3l}V#LO?Q 9QfWWH#1Op y)c.@hjVE-IY' );
define( 'SECURE_AUTH_SALT', '77:JH_P;<,EpkYo+Yh(D>kz~5gHfMfWe{FvV;D1*E =KGQs2g1ymfU65}$731as0' );
define( 'LOGGED_IN_SALT',   'UoE-PLZ${<u1l*9QZ$Z4*>+.AgxS={Rw~|lOo*;ZE!5^pxptM[u^.9v] }Z#UmV8' );
define( 'NONCE_SALT',       '85M5kw{?e#WkXSWWpSC.B5:(J13a+-Un[6Z!{8tvTzBT|i;f~JXDyro4Ap@VUQPw' );

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
