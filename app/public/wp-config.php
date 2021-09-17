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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E1KxkqyBgf9JS7thnMe55LDf3ViYbIb6UkK7mIPT1mo9Y0wVQSUmmhW5CwhefFS1NiatO36nH0tYSSMvxkD6bw==');
define('SECURE_AUTH_KEY',  '95N24oPL06fhNG9YUKYKJqg+wpDI/YKAHU+HPUYa8dUpDuFr3WPl8YPddLIu7Zr/wjqvcCQ3CYuKV7H2U4a74A==');
define('LOGGED_IN_KEY',    'EwjGbwTg1m0nUXa7ZX0vS8nlMpl5z+eLkz1wxqW4rFu77d5lUSRDq0izfW5kFtE+k/QDWpzxoIqVjWmLrD/dfA==');
define('NONCE_KEY',        'QFFVs6QfFi9D9E1W1zZ9fscv0zBOCS3YSYXu5+dDbwguJQywGJD2T6C2XhycolZHRgdqXU4IJAuuIHho0Y/qWQ==');
define('AUTH_SALT',        'SFsA5zUOqZ33HF92SoBNk9Iz1tGXskDvnrwTRH+2wkLWG+qmQFFIa0x40VUMWNx2O1BZL8B6wAr4fFw9hKpHxQ==');
define('SECURE_AUTH_SALT', '1z4xCW7VfCIqQbYjHaoz+sBl1Pjje2sVQnmmP/jW7mniMTdysa0xDXumuE4Cb8+g30OJYPfwttcVGf30v7yBXg==');
define('LOGGED_IN_SALT',   'HCrGb+YMZwD7CNQjolS9X/J73KBhuH2Wow5SlsALNfg0PqReqUblle9wOytGltQcFKo/qBfejSH4ASPhmav3hw==');
define('NONCE_SALT',       'q1tMGHXr+AEZuUjHMdjpnQo0SbXgSmqUa+8lMoxJUXCMSYi3VsQvi3wW6FD4c2ZhLklvmrTh5U6LXmwnMjYjcA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
