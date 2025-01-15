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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mkstecfw_vishwajhananinew' );

/** Database username */
define( 'DB_USER', 'mkstecfw_vishwajhananinew' );

/** Database password */
define( 'DB_PASSWORD', 'E6u=ehC}knF+' );

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
define( 'AUTH_KEY',         'CwTsdMNn]-Zc1vE1t)8%9C6wQ0SLuw3|nw;eF!7DkAaF^m JV8NOSc(>4Ph,i_G3' );
define( 'SECURE_AUTH_KEY',  'pLSi+7y^s5Gy3W::@ge&gF9sgdLK`1Sl-Vt>i5NO%t K3wrLp_^bvQU17_pVQn2x' );
define( 'LOGGED_IN_KEY',    '9e_Kg3rr2DM.89o{zav t8 H[+A,Sj$_,)~Z%p:4.ufIf.:a4v?7C==n^G55E$z&' );
define( 'NONCE_KEY',        'Wey=JIK+e1fr4cMn!.:>Ks???hctvzc>r$4[y2F&UU]/W5 ]FLjriRQ {E=rez+f' );
define( 'AUTH_SALT',        'hKH?*qjAT`3[A)Kn6@j<LsZ:m/ j/n5H(BIN!Tfr+yhiL`TBk*j8Q8S[g89b^-n0' );
define( 'SECURE_AUTH_SALT', ']^ro^L12B8pbslkMmz~2rKxO8?i1>!P7C[s==*@u`.W:U5CVN/O<xkhkww@ bU/;' );
define( 'LOGGED_IN_SALT',   'vT{+)wPb:-Kw&E%.{NA/Nm$p;u-m=GhDE^-W:zJx&0Kl$j5{,GN-*#wn@8iDqW3^' );
define( 'NONCE_SALT',       'N*!qI<e3YB&rR(vr5j[uopGAM2L;Y|_rJ[Tk49V}E~_(r`Ahr(GYS4:Fwsg_L2e+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'vis_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
