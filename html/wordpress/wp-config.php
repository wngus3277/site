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
define('DB_NAME', 'kimju7');

/** MySQL database username */
define('DB_USER', 'kimju7');

/** MySQL database password */
define('DB_PASSWORD', 'hh121245');

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
define('AUTH_KEY',         ':`sq<&]I1mnlZhbuN;AzhH0gs3t?n^u8oHm+p{.u<}QgZfl4D}=?s)ND_@6QsOv8');
define('SECURE_AUTH_KEY',  '<}Y v/bY$rJg3^gi <Q-$YK}W>cF(N!m`<K{5YPf f{}<}7O=wE1%#`U AkuQ% D');
define('LOGGED_IN_KEY',    ';J52t#bm=40/dcQ?.i05?cRD|qH(&)jRf+5noiNn$liISL3j]/CNz>`Q:/`Mz>CL');
define('NONCE_KEY',        '~2qcdLV[r83}IlIzp>{u[Uj.hYuq0L!W]-[M$WG;bd<_mV5}pxnO![=t48D[ +??');
define('AUTH_SALT',        'I;vJ&BpV`6:vi8uW5b</f|;kZF:XJ8R{>a~6[w~3>lMG<q:gaUrdn;_K|7:Fn!.p');
define('SECURE_AUTH_SALT', 'qI;5c-%T,`_0Nm6|aZ-?u@?b$Gx>+=./M(``V(aQ<o~lu$XY{^s};5EY3{p^8]8t');
define('LOGGED_IN_SALT',   '}Yhs7^jl#aOS!Tx^tT[<>K-IkC`~85O#4`m:Z*|9l<[!(*27_i.5F;zU,H^5x<oF');
define('NONCE_SALT',       'sx.kJb-W}:vg)<4z=F#SN<&bf<K3`5g@[M4v<bS_;6D8PcMFs|W%AKoE~+8@N&`1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
