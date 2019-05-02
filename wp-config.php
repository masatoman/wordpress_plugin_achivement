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

// ** MySQL settings ** //

define('WP_DEBUG', true);

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
define('AUTH_KEY',         'zI9KPbwylFKe/+fEOLTfHxcnByvkgaabD3cIAstCH9IcJFlwtodWrqnEA3+jtv4VrhxGHkN/AUrVVwxBjwJ/cg==');
define('SECURE_AUTH_KEY',  'HB2zPbMKrvJhrDifF5AAmqh0EHWah2hgJPZ/0M1ynd0S9cIMCnTQkrSjdW/c5PuiD707VStjO11eJXuoigMJ1A==');
define('LOGGED_IN_KEY',    'o+2+MehQ2xNclKtlABLFT7EyPMrR2KJ+xBmieSrD9Eb1jaITT8q+awbEeGDq6Urdpq4QTisZuJlitGU+hAc+9A==');
define('NONCE_KEY',        'nfL/HJpVRQQEboIC92YEhf92K+gj+cTPU1Hpk97idpcU0tFYPdC/K5F1xAkBUyyWaSQzs4XNkjirQhKGnFlEQw==');
define('AUTH_SALT',        '6FZUE6ZvEksCjyfL8rjq4Ef/J0H1YsXJwjxO+ajas8H4VEJRX92M8jZxwFKUFPo92qAQ3XXAD6X7WeoMq1u8vg==');
define('SECURE_AUTH_SALT', 'jt5LE2lSreBwzaPkQyViFM7OAp1Vwz7053eXpWNgMCqoMnsZGpJ5I4wXTTEK5jw7HKTUWiftqKkNXl8pJTmv7g==');
define('LOGGED_IN_SALT',   'p7oTPfq8dwTY0Xgs8t4fFH3l3tVDobM37EiBHaNyAAMuv8/p/pByiYaIylyC0Q6YWZC+brbAiRG//JVmAdiQ3w==');
define('NONCE_SALT',       'wMk8hUaRpexSLUvRSoIqL1gI35MBxNDZLWKMnJO9YcuxruVdGnedltAreiSqWI+PY8ACUQGV75fbucZfpjpH+Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
