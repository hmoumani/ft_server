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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'hmoumani' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hmoumani' );

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
define( 'AUTH_KEY',         ':U@[*#v6y{ZERpUa}:`+</vLdL4T]9+fYZzHZ|/2==82g)xL, 25dnbxJ+zrgSpb' );
define( 'SECURE_AUTH_KEY',  ']CT#$Z&%oDKkL~n!WqY@]]k46b|y8Y9LmBXXbP98=|HZcMBGa#C[o{G!]xW:t/ep' );
define( 'LOGGED_IN_KEY',    'U&XkW%4si{{g4)3acslk)&tF+P<vpuKfIYMk){,j(FTJyC>YfS5xtH;g4_|5%-iH' );
define( 'NONCE_KEY',        'FeZ%yj G[B(_4(`:,aU/S3<j/)@z=SXq9YFr8wa1y=|G#?R64C?;v09I&-DI%2e}' );
define( 'AUTH_SALT',        '{*4>X3|,p1w,H09y4z}/w9S4YL[e GT]A`$,I>2,oE(=o|czAd*yHNRv/B^CB$xw' );
define( 'SECURE_AUTH_SALT', '|Uy_@dr+qlW2gPb[.=o8je%L3B%C1DJ3G%z}rF-~g}b`mfbYE<+)o@nBKZ/^ep>c' );
define( 'LOGGED_IN_SALT',   'u~:_1zthC7WdTW+TGzbJGlu32ee;X9DH48>mAHj#W(q/FuEE~jhc6`)yTq&~!4ks' );
define( 'NONCE_SALT',       'Hqf1D=RC$~n*:d+.v)TS;c}i`@~](,p%w[jth&N^5mHd)J?<UM:_j} X4&5[H)o~' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
