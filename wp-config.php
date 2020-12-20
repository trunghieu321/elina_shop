<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'elinadev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|+YKUlw!I;vw}(f+S%UV`zC=/_,Ce`k$IWMsMc>F_Wdgt^bsRz<?{4q52Wl:%5S4' );
define( 'SECURE_AUTH_KEY',  './2kvJ^`Yyu>8EV}n)#AlA|pY?O:-O?B&9nggCNp57t@fi:FGB^+II#RaK)%1?Sr' );
define( 'LOGGED_IN_KEY',    'Ft(8_emO_;<#IU>?`y7d j;cVMKv@!Rgx5?n~}LfTNz9(q^q?QKzH@Rsa(i,;_KD' );
define( 'NONCE_KEY',        '_eRyX27f&Dg`IB9|VE+s#AM{,#I2:C3gL!}$1JR%-]U4<+C^6EUl)g%EFSL1/?6+' );
define( 'AUTH_SALT',        'G]ZBD;$s]a~],GArBRsYWmqw^/M#x5!%;8Trwyx~G/9cJV=Q{1):C`BcDA#lZkDq' );
define( 'SECURE_AUTH_SALT', 'AR%%GtAYo,lBy6Pq~x*I.)Y6AQf@_&9KMPp]yfp_F)!N9Hb/lhFk.!y+TvS|31{ ' );
define( 'LOGGED_IN_SALT',   '4&R7{zi[`~@ZG9=yRK1EjPx)0J~_2ueoVK^A^6{4#7BgR8f&;f6T)GbrF+1@{UzQ' );
define( 'NONCE_SALT',       '<%h4b?*iVyn!^uN1hoXVOq $Gi@]ZR0t)i__ =B!a3O$Sc2MP<`Hwsw{Jayx :/J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
