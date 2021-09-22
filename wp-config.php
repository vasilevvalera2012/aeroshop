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
define( 'DB_NAME', 'u1381765_wp315' );

/** MySQL database username */
define( 'DB_USER', 'u1381765_wp315' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K6h4(.S1fp' );

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
define( 'AUTH_KEY',         'llfhbnkmintxrfr2s9pfslit4whaxeuw08wjmnwdexnai9ce8pewlyqlwmhvcez9' );
define( 'SECURE_AUTH_KEY',  '1jxvivib6o1majkicvls9hujes7eiz54awdu0n1ingscb6pw84r8yfrisjulk8d1' );
define( 'LOGGED_IN_KEY',    'fpbkhfgw8oxzfdv3fwj5pbukh4uhp7226m4ka5otcp2pcfg94f3b6lshehxa5top' );
define( 'NONCE_KEY',        'wu8k1hlzahb6td7t2ouvb1ov3addnmjahn7ufwqsohctufem9yhfiwyz90kkbsbf' );
define( 'AUTH_SALT',        'trym8zbulvoyk50lzzikyu5ryz9x0fwt1qjgyz4ypdrxw2r9khijnx5jkech56gm' );
define( 'SECURE_AUTH_SALT', '5upxt5imvzzb9jyvuxucqa3gpvtmxamukjzelvhnifrtg0dlfngxuyy8dq1f0nql' );
define( 'LOGGED_IN_SALT',   'sekkz0ddpsqgqdpdnbzoih7wwvcuifehbfav9ri8ixhg7dgdbxk9whjhjvsurw0z' );
define( 'NONCE_SALT',       'mggvjlwbasg8wykuaxvllpohkuhqlzl0j2za8m6jgojs6tdc98txvt0qeynmuj9o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj0_';

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
