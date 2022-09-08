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
define( 'DB_NAME', 'website1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '200298' );

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
define( 'AUTH_KEY',         'v>L3>0{9bqdi0aI8h@;[vksCx1I9gipfe_4-iD=z5+Z~9bT89*,me2I*b`ml.G|S' );
define( 'SECURE_AUTH_KEY',  '0aLTr{mI}kCMw aS0lPM/HwF{JGm9rba6bM4<_%[|EJ5tf86:k3bqOmz]N723Xq(' );
define( 'LOGGED_IN_KEY',    'p!^[3G3lm*t|y0AuCZt[v$>8]kr`7>^:eV8cYABh`= 9IHC3!TH.5kPY*8dzfv}p' );
define( 'NONCE_KEY',        'toZeJ52xBrYR@9%GfW>%wW#Tqh?&x=(&brXn71QKMC?wn[w)_&/l:kE{/G2AGTRR' );
define( 'AUTH_SALT',        '`I$c~](zw1Qq%STh>J5cOJ;l67|F&LB;{+/uGe}{8tI5NtJ69%7@6jfWdr-=dMe@' );
define( 'SECURE_AUTH_SALT', '!>KX.^F414Ma>J{HH[5Yp`Y6b?< oo-9V.b*O 1]kpar4CLLL<(.=Ja/Q,}R`hmp' );
define( 'LOGGED_IN_SALT',   'f*cbT=}uLmVU,u}KP<F-!I&[,i(9[1V#-)?4Z$w[c0C2R%e_QT#jMC|g+Hf<p#4-' );
define( 'NONCE_SALT',       'prGvB$pms0/&sR6wys}dS7|k05WrgD-MhKj@y!z^t5UkS;5b:E(jD<y5Z,KJ_J 9' );

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
