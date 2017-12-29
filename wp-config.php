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
define('DB_NAME', 'stellzus_wp698');

/** MySQL database username */
define('DB_USER', 'stellzus_wp698');

/** MySQL database password */
define('DB_PASSWORD', 'g-p0(IS225');

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
define('AUTH_KEY',         '0tmxqivnu0bgy0ppx33skis5tc2zkafjqmvxgiizgrewogmkouomkmzto3ptii5w');
define('SECURE_AUTH_KEY',  'v6i4veel8wb3xuikk8ydn9vz76kenqf71afbmcpdslqe2dgn72em4uliuqibqciv');
define('LOGGED_IN_KEY',    '2gxlll2od3wq3ckillrshksdel43lhjoncq5zduwtcyngclts6rdmo7nn2sckqbr');
define('NONCE_KEY',        'qhmncujdbgtcelmbke1iobltqvxebf4xse0kw8wkhsuikpnp1u3uqwdqyuj9ilyv');
define('AUTH_SALT',        'sswjlglcye34rkm9s6crqyow1wqospqxpdu16ram5mbl3mszecszcskkhsxhfrjb');
define('SECURE_AUTH_SALT', 'negqitt2t5g2ae5wku82tii6tr1w1jyvuhbammatxvrsvxa93cn4creuusq1agns');
define('LOGGED_IN_SALT',   'bpfkdlwfpjbnnpkgk8wbl9hxbelspqj6ykgfnvzu5kcz2ongr0iiyroxsw2jj5fu');
define('NONCE_SALT',       'z8pcielfesrhrq5bcmt48nqklxyjs4wgqcbptmgvp62jozgszl5kd7g3wtsz7ce8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4e_';

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
