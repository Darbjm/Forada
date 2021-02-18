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
define( 'DB_NAME', 'forada' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'sbkCUht|]P2qr}><XsugZY<7y1aQzvL(%a`nO[n+9D8,|-YjNR2AgNV8TCdtfE*Y' );
define( 'SECURE_AUTH_KEY',  'c,JeoWKVw?qOZ^MFH)76 ^mMVnq0f/iJE<R28A`O6_Hn#|rX}d6_e:(:xQd&gHTb' );
define( 'LOGGED_IN_KEY',    '0AQ[4hcG;mP<A;9{p ,eKRSEJ#*Z3L]-an17*f+|qbH%_eS-;E8Fn+IFd;s.%Y`2' );
define( 'NONCE_KEY',        'p`W[+_NLaQIG6dT_97G09n|})iUqidK|relYp-gw_=9-u6gb1%9~!bS@mtEeu43#' );
define( 'AUTH_SALT',        'S3SlIKS,;LKg6JJMa!tcP4JPeSDqjqeO2j&MZ`9sd[[M]QiN@Va{5pGC$L<N-rbE' );
define( 'SECURE_AUTH_SALT', '<&f*OSGu|`oL+T(Zr4g)%o4_zP%jk@-9(/l@>4&4+Hi9i*>QyzIx+-Ru wk@lcuh' );
define( 'LOGGED_IN_SALT',   'Zy2#%l!-1T6-Uck8`XanOb-KMEx~|cIX71`E~v*< AJAB`Sjm{Q:u,Fj{Eq:_a0%' );
define( 'NONCE_SALT',       '|]SR<!lQ7|z>0PI8.4a*fh9=<)4z2NY,ERBj3L|8$m43N <4LHc%}xy,f4L2drQq' );

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
