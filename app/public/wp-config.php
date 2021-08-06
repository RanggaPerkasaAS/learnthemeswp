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
define('AUTH_KEY',         '3PPHgGggh0EQbeGYp8IOW0984DqdYTn3ppvcf1+r934y7bbJxNt/9Q2wDBKp38Rj85/vU20TUXABgJLEmhBUfg==');
define('SECURE_AUTH_KEY',  'jkI+4hrDtf+FtELWlICnJWN2Rp88vpYgUGaMDWotGqpXXuf81uYdZM6TXcjqbPrHjQdHSwoZ1P9elbUX9RFxEA==');
define('LOGGED_IN_KEY',    'Vm2g7eeZnoywgeJpP0UkRBFMXxpd3uXNdyp2/Cw+OhXzSD1aSeCNtEO5t8tDFlVXrPlpOvBsogH78ebpQjwgUg==');
define('NONCE_KEY',        'DrIP/Cayvo28hfQTuM+h+VUH86idYH4G3GCmOuerZf/Fz8zMhzJOimONCNj+G6ylTaqTLWouUFDeWa1c/IXo+g==');
define('AUTH_SALT',        'ZTUQ/C9FkOOTJX2nKpL0Hi87MtlcvSLgB8JNJx7S8HkshME8K7djT6QIWsDI4TJ1a1Mrn8T9/sPlL1MJq1hEIg==');
define('SECURE_AUTH_SALT', 'AfYWaV1BlHmbXKP++TPrUv3E30SF7ety7XND0iM1gyzDnKtm4j3KoSNnE6h0nh6Fecki2goQTh9suoNB3y8fdA==');
define('LOGGED_IN_SALT',   'w/ihcFgFdpUChyAa8SOLgS8WvOrRokjz6jngdYoEMtW7KrmDlToz7vt4FhB1FXo4/Z/JYY/c3ekfc/khpnU1KQ==');
define('NONCE_SALT',       'gDeYDWhFLxeBimYnDZ1zUSUOrOdqHoTqSH8ir/p73SHKvVh/YvZb1cQiwq/t9o81pt4EhGAi43u7SDAefWvh5Q==');

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
