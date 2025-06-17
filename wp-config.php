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
define( 'DB_NAME', 'plazuno-wp');

/** MySQL database username */
define( 'DB_USER', 'plazuno');

/** MySQL database password */
define( 'DB_PASSWORD', 'a$H!ERjyNk5r');

/** MySQL hostname */
define( 'DB_HOST', 'plazuno-mysql');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0cf52cb22b6dececbef80299ff907801122fa767');
define( 'SECURE_AUTH_KEY',  '726e5991b0ac2c9708b3c3edf0b409af783121f3');
define( 'LOGGED_IN_KEY',    'b5bff88655c8d8467aeb9a0ac71c91b280d684a7');
define( 'NONCE_KEY',        '4fd3fc6240a1d8efd5547e54b3ca7746910ab5d3');
define( 'AUTH_SALT',        '8e09de117e04cd8e5dbcb16b7829fadfab56de92');
define( 'SECURE_AUTH_SALT', 'cf8baa94d2c4cbab242b64fcee56fbff86c860aa');
define( 'LOGGED_IN_SALT',   '8983b3dcecede8798c2a7d26414c0840a86f6f8b');
define( 'NONCE_SALT',       '388fa16a7295105ffac39258bbe85851964dc7fb');

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

/**
 * WordPress HUME and SITEURL to include the /docs subdirectory.
 *
 * Takes the values from environment variables that can be set in render service settings.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_USE_THEMES', false);
define('WP_HOME', getenv('WORDPRESS_HOME'));
define('WP_SITEURL', getenv('WORDPRESS_SITEURL'));

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $_SERVER['HTTPS'] = 'on';
}
// for testing only:
$_SERVER['HTTPS'] = 'on';
// remove the above

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
