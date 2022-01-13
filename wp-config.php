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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         '%;ADV%Q8D4To^R~}M=K/M$cbBAQ-cYzN^>lc0Qw%%w2Mi80nK5W]EDPre=2 68Q%' );
define( 'SECURE_AUTH_KEY',  'o,B?W+QGr$+0,sH]6yEn(Qtqva5~Lpd5uG3@:S@>zly>`/5ZFD_T?|FQG~u8.B/8' );
define( 'LOGGED_IN_KEY',    '[E}@v$.$d[>r633>?E~xn-MSf,0KV;w0?+<PZ_;cXA. c+W0P$8p<eu7|Y8$VHZF' );
define( 'NONCE_KEY',        'kR5imnXr-8&K<ev,#3^B/,-*B;h6_Mc/*24O3OVjz{#P-xf r$X,aYc;zZ3X03~)' );
define( 'AUTH_SALT',        't#AoUOWkrKL`~|>~L%>NBm -x7@yK*Iv{)J`1]c8~?-CJCX-8HP7W+qq9^OE3El1' );
define( 'SECURE_AUTH_SALT', '#CSD?}{l4M.6P/I6][:8Ai>[2<#xddYF{9!6,|#wV?R99HO7c`0.o_z%o8WGXgog' );
define( 'LOGGED_IN_SALT',   'ChzK/Ut5?&0rgi$W#{Q,4=gD|^!;Tmf2^%xpWN25Zysfz~/Fkc<SME:-1PK->C2K' );
define( 'NONCE_SALT',       '3!2xni*QhBh{KAVu*Bcl,!*oMEo!hY@V%`f@P9)Z23k;VKw<-iHtl-9Cj)K*6: @' );

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
