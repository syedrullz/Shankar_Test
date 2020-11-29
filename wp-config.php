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
define( 'DB_NAME', 'shankar_test_db' );

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
define( 'AUTH_KEY',         '#k[z u8h>U^f0F16PF:$5HUxm$7*nT<k/4#ra,!MS29uhj2Zou;IEZx5Ky#4lj=O' );
define( 'SECURE_AUTH_KEY',  'HN&xy=k)-33uZrOqDcC!0;}1$7hI#@mD-F]+gUuN}V_I>1Z7M0]*D-Ur.LH)*kyq' );
define( 'LOGGED_IN_KEY',    'EnU6YVAL]);`k1iA[Q4~092A?+9F}0d8X53YY:I5pom%#pbR=H]=p`ESxIa36?{C' );
define( 'NONCE_KEY',        '&refYJzfj^xsl:`+L)+lN.O9V8DiP$l=f.9I![6:.Gwwd,KrQMg?/RO_4c#4RN?1' );
define( 'AUTH_SALT',        ';9J<Ie}:][)TK`Dm_(n0d}6Lj+ge&(EGY z*j]aOQe4-I(~~TYGfL:!,RQ4w@{mX' );
define( 'SECURE_AUTH_SALT', '47gP2?bH$69zDUFOh~lbE_f,DMPM?BmzE.j{A5P!/!RCcx8i}v(E%@*;CP|BZ_ah' );
define( 'LOGGED_IN_SALT',   '6>/oh9Dg/Btvpfb<wQ M}aqhD)(&I~>zi*.%5Zp_b`p6{W|T#.&gS+VBV9VvCY7O' );
define( 'NONCE_SALT',       'Y&B~M%p%%HC.U^c*g7XCX&Q6Y0+{&A#yU s4>#9MifXNb1pj`hIdrrvO,K0ctom2' );

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
