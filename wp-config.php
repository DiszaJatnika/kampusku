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
define('DB_NAME', 'catatanp_wp998');

/** MySQL database username */
define('DB_USER', 'catatanp_wp998');

/** MySQL database password */
define('DB_PASSWORD', 'Swp-8i3s6]');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yqd5emjewa2qi769uhe7giasbt2dcoontuttstkkkjnfemc9xeac12ivyr5ic5ee');
define('SECURE_AUTH_KEY',  'mkhgenbzpg5kxqfazkkl99b5bdwasqkooe5cavucmkijnjamldrkamzfgli3rt3s');
define('LOGGED_IN_KEY',    'odvbapddpuzvdur1cumtqdf0zppcnztlwxxwgux5otul8offuzgoql1ghi8gj4zx');
define('NONCE_KEY',        'fixenyyhvi1nqq3inw0tgbqakqkimqaz1jxkq6wz6gd3tmsq8wxbdf46g2svhlog');
define('AUTH_SALT',        'xamptt7grsoqboanpnyxlghhv7xdmois6aaeub56xkioguflx36r5xdy6lkx1syd');
define('SECURE_AUTH_SALT', 's1uoma9rqnbia1tjsohyg6gw78mlkoatjtos0il4gmh8hoyx0lwk2qg5r7hlnp0d');
define('LOGGED_IN_SALT',   'tdamqa3rxu6zehl2ddmgx7oip81boagbymyskq1xepqhg24mlqacohqpoxw0f16q');
define('NONCE_SALT',       'jeotizgdmj2my8ukfanoegjz7fxttjqg1dwradlyeiv3grtbgopt9zpghlvzxioa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpw3_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
