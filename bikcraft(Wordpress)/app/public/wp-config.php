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
define('AUTH_KEY',         'FeOvyx33IxJvEHhPGwQaab46o6/aGPj6uR98BUz2tdMKG4mgz8L/QcnHWWzBpv0rVTxCcRoksjBkHrM7bvThHw==');
define('SECURE_AUTH_KEY',  's6f+kr9fjJUuRzIS8uERFJVBlLltqR4WBmS219abTvp9/sDL7XuCq+P+xeqoC3mbG/rqq0/k/Ta4LDazwL7ewg==');
define('LOGGED_IN_KEY',    'hXh797zuE4zMIdmr2ywChN8Zetc27KzJKko+sD/I0XoCIloXUR/aUckis5OuAyWvBooqjYPG09qk7aYImWsP6A==');
define('NONCE_KEY',        'leX8kIUVEJvgQeMs1Jef82ic8mJPKhVMPON3jtqCld3dGpp5W0tKWnnfMF3KfOcHHOFO35vn/4LvkUhViVlrgQ==');
define('AUTH_SALT',        'pfq6j0ltyJKZmZ4OjejP/RYXgeEQjwGCaAVylPaiofRRc//Ouu87yle8ecvuohL9MRzK4WEEpX5q2tejws6x6g==');
define('SECURE_AUTH_SALT', 'H8qzTgxVlXpU/8FF/o3lZoE0fCzrbqriCSmQDI0HqazWvVoAxmSJ8S5DTlCmLFRY936BUOyoSc+BCfHiXzvd4Q==');
define('LOGGED_IN_SALT',   '8oamdQUR4jTuUsvn/3WOM7kl6Sc7FnouMYJSjqghm2WJ/TZqszYduKd+fnzgOtHSk9crxAFGVH4zUe90K2bYMw==');
define('NONCE_SALT',       'YIHrLFShS+Tf4TKV6rZsUt5zrDwoyi4sG1Ex8fpjI53SJZuhfSDyRyYMV62gk+WGF1QRjmRx2HCzQDm1LeLvUw==');

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
