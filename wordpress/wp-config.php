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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'hML[9[(t(Z^*-uz@bumJR:T(l$v<g8HuS}U{zK(a>}nQ1(M@0>yE%3[7]X{pwNM<');
define('SECURE_AUTH_KEY',  '+Nf:xRcbw8+pNm9;,r5-oi~l~l-_7hp-pK*NVXTmDcP7+WA+&./WNdH,3[v@_ I ');
define('LOGGED_IN_KEY',    '8<m.,:$V[+u;`aw0zp3HFFsnYiW)H1D($;IOZSz!mhYNGTqp$h+O H@WJzo?Y(GV');
define('NONCE_KEY',        'OMP=`<3nt!R~^[R_(wXa]`lfDe2 5?h_>JG(DDRaiJ65K)&bR3k[LCnAOKMGC1M2');
define('AUTH_SALT',        '*+k]%BM%P~1;hJxg9EwDcgql{-_05OBT`/-CwOju[fL4+_-,*:pJP=|.n1u#NFi0');
define('SECURE_AUTH_SALT', 'jWMrg/c>hgy%{l-.ti&KVp-s,K|Z!S@rqg/<2C&P=Pr+v-5r&.Ywt|Sfkn~H/~`{');
define('LOGGED_IN_SALT',   '|MVtTgqoF0f5Am_@Yc]%<%p8sj`kb@=MtHW[/vd)`KH$YrhQx,Io%#+im<[ui:k<');
define('NONCE_SALT',       '*nIp?u3Ld%|-i]agR4Syh@4(;|p$G)5j?!.~jP~Bqs)jN%j:Ax%+$!!;aV#)$CE<');

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
