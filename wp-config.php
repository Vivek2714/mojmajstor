<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'idevelop_wp75' );

/** Database username */
define( 'DB_USER', 'idevelop_wp75' );

/** Database password */
define( 'DB_PASSWORD', 'ED[7p7b1!S' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y1zgpdflldyzvewxky5g1idnswyf19iwz3jla2ke3h8q57ixgoatipp9w0taqnkk' );
define( 'SECURE_AUTH_KEY',  'zvinnpr8eja2mvatgzeixswmmjg2cejvyrordoflk2ficlgzmdv6ignimves2ev7' );
define( 'LOGGED_IN_KEY',    'ksmikqdgjkngmlwy8ixg8pqze0qqqfow0bwrxkynqhblqgzlynm2q3jjilwwvp67' );
define( 'NONCE_KEY',        'krdxyqjosy19pezrk4jj6ltne1gzke636b1dvwq5p6f8nrgnhuiuikinjezayipw' );
define( 'AUTH_SALT',        'qcaziqbqgbsizwil25p9rzmtejuetxr8vhrmrvpdm7jihnv03pxvphztqquxrpal' );
define( 'SECURE_AUTH_SALT', '8v0qrw9llbdf4qmt2nfrdufwz9ouywctrq9rpoertzdrpgtwh63oci8dibcxfuk8' );
define( 'LOGGED_IN_SALT',   'ga3bytnqznovgj8g9al5vlnqqkyaydvs7aciunkamjvskvvj18r3taph88un99eb' );
define( 'NONCE_SALT',       '2eoeuy6l5msdf92jcggrblxchcily9kesefd3tnsvfsvmrtelqriu8qzxbm1cmrz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp8a_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
