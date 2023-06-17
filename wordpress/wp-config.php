<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '05ou6)fjl~?RArxcZ[a2W%:MHR,<S,ka-f4@dJda_.?UOx87V5{7on~C1<my[DS_' );
define( 'SECURE_AUTH_KEY',  'Ue:sa3ioQ9uU(LC1gDR)FE^z]SP*]Qy^fIm%K;;A|#mk-#O0Yb}@X38o8}jcH40X' );
define( 'LOGGED_IN_KEY',    '0T6@Ssc+e{j$JooFlL--Zw_I2wo!^w6A:J&<xij<1!#(e;[DQ; {#0>,9E?/<W{]' );
define( 'NONCE_KEY',        'a_#$JuLgtS{(.%8< kZBmM|Y4_Ujef@rS<BB_evJ:}.L)$}7h]&s(g0bEZ28#zwn' );
define( 'AUTH_SALT',        '3RixJq!}Wj/$4Mw{DFX]w_~r&&!rqzce.]t,lbJ)YFuwzuwehu{pJ<*#PkI9>?5?' );
define( 'SECURE_AUTH_SALT', 'wU&&.aU5=zNJ7s[Bz$B9aAbWS2k$(owp$SCa.#-)P2#!;4 LnZ~|[x kniLQ!dsm' );
define( 'LOGGED_IN_SALT',   ',9*(bX%<[3WLJQ=;~=CW< Z;iBttZ4 U$*|j|Esb@un{-zwS;3jSD+bU4nw*`i?h' );
define( 'NONCE_SALT',       ' wdXW%ek3s]]KRv_}>KLhj*4Z}F)$fJxiGp@?YZHZR[*l^?jY}e_rV$~;5OT:{4T' );

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
