<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'yardrs_a2wp382' );

/** MySQL database username */
define( 'DB_USER', 'yardrs_a2wp382' );

/** MySQL database password */
define( 'DB_PASSWORD', '@]mSp95p1F' );

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
define( 'AUTH_KEY',         '10iv21xsbrtzaoyjqcrzyvfg1ymymthypbt2iq6qbqwi74xc8f30xxd4uvbnx2rt' );
define( 'SECURE_AUTH_KEY',  'wigdhoya8xyyhevqmztsbo9wwgcxpr1qhs3zx2uk6v83rrx1siwdeffq0gjbov0j' );
define( 'LOGGED_IN_KEY',    'lvspeksxh4up5cqpt9aqbrhs1ddm0znxe4wfgveg6r2aakgdcp0haekcg48ccue9' );
define( 'NONCE_KEY',        'znthnbhuk7itwglwrj63lzbdzj60zokb3uhnky5hghograf1oofa93m8z50gmlhp' );
define( 'AUTH_SALT',        'i9jybmdehzfivnnzjvgccd0ub17qzb7pwj9zsmkymfpelnzr5jg9p0tyvdbgfyi4' );
define( 'SECURE_AUTH_SALT', 'yueopa3wqt2ecxyueuipgaeho5lpzuea2qmzdx7ucjfqmoufjvg4objyfwsxqkw7' );
define( 'LOGGED_IN_SALT',   's8pnwcwhbxxj3gbbfsktgkqysparfpjl2lfmyb8eomwr4ayhqi1njofptkhsfnb5' );
define( 'NONCE_SALT',       'mvaa4l4e5dbohgfkh4tdtjn8q0sc30mdkdoo3jiqqebrofocdkegblrtvngypaft' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4l_';

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
