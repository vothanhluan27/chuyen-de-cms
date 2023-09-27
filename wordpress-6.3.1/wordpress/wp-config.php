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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         '%jeAx8NHr8>6| sa#;/@_9P{U}D$.:)qi(cWvM0!;KmH4S]N<pD]>(F>ID+mo.vA' );
define( 'SECURE_AUTH_KEY',  'XZzg_W0Acz$Y_B<o4.h;&m+wcjVcOQ:AY CG=Z0|=r%jl)j8IDF~E*)Sq^8@@C8q' );
define( 'LOGGED_IN_KEY',    'KvpXXIE^8R`u.}551KcUwJdJ)G}3(:A-Dm^#TJx},7OX0X@@q<MfK5_UZfc4DeHW' );
define( 'NONCE_KEY',        '`MDg?tr%K}TC-TIue@*%Z?mRymf8% p`&2RKmK7oyQnk5CN K%#0M9a%vcg|B1Sy' );
define( 'AUTH_SALT',        'ApW7oQicIF;O4PU(j5qq/&crE6N^&oJm4}vrnEh_kQouz)fd);Hrdp 1p{bQROVZ' );
define( 'SECURE_AUTH_SALT', '?R}*wfui7v(}@a{ qB}4o,BqfJ@W_F-j&`q_oCBK^^Lsx)#GV+qyOygj5de{+_<t' );
define( 'LOGGED_IN_SALT',   'hKTI0)2-+j,<vIlS#x10l0nyxLRu9VD<@@zkH^oexR]{YVik;{=_&Om;)^ixq;Wv' );
define( 'NONCE_SALT',       'C{g*.Z77|luoarLx~AHc*SFN$vL+i9D?A%!x8u^X_Furp62De7]KMQN<:4K{s,0n' );

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
