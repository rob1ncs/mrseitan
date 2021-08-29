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
define( 'DB_NAME', 'bbdd_mrseitan' );

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
define( 'AUTH_KEY',         '&JrFkd`]7b(MVUG(P3F0b`@XV)j%YI/$J;d{d#2F|g~^ky?u/ njkc6*(p~}A~44' );
define( 'SECURE_AUTH_KEY',  '0:<^WGgZPi>Wu_8VP{><]B:V#mBI?C>PzzbZ-.#4&ifb2<+YM&J%f%bA)1Lri+QX' );
define( 'LOGGED_IN_KEY',    '1lM4f2m2,&n3f+Tbd+H:WFoYxaKHRn]RU9wWUX![|CNLLm^,;g7Ydrq@+Ro@E<ol' );
define( 'NONCE_KEY',        '@Ly]Uw3kq!$F6BSU<.A(-b|p:Z =.I|X9*6W9mj`z7j7XMiael1q|)RLbIIZ!ut7' );
define( 'AUTH_SALT',        'b9d)<:[W*7b{Xy+w$])}e0ko@<cocTadG!go/[w7bey}H`SP7zhkU (Rei{lhFRd' );
define( 'SECURE_AUTH_SALT', 'L:jydK!`pvwK#p]aj4F0oG)} uM}*VRd/~^bz6 QvU,j8q/;o3j{[MNME[;^~</e' );
define( 'LOGGED_IN_SALT',   'Y@Rz.`u`],:,w]@(@saf]@oUhHpe.cr,C,G9Y6,=Ld8hyLGB5_K-Zp~9a?&B!>FZ' );
define( 'NONCE_SALT',       '25sW`Wu[n=>:=>)[;lHjgN,q7&MC633=ka4m[L:<8z+~upjy:>_;XB.w2.E:Dp{u' );

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
