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
define( 'DB_NAME', 'codingproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{fDLt@Soy6f4(djSMUT/$pF$&;,,gqagif8YSz-Y^by:m!,PUu!7caCVU0vx4:,4' );
define( 'SECURE_AUTH_KEY',  '!g0P0w/R([^4r}@O4X=:?7>5lSl.03>.dKi76L]N-djn361{Ied2w1xAh9WV8CXs' );
define( 'LOGGED_IN_KEY',    '3SC;&?!}(&^96&=MNWnfNAhI77,O&,^zS?V9R5an$Io-DN 7^`.c~8qBrV,|[h13' );
define( 'NONCE_KEY',        'e4mZKcd;FhR> 58+F,{p8X}r/?BP#}>$oYjS,vGHm:fhO$|.!_a~P8-RQPoP}2+N' );
define( 'AUTH_SALT',        '#@K=lNnsy6>ANxV!MQxm8LW6g?CBE3V[WzzeiL&2wQb!s`<z1OFLX9?8rP*ubU&4' );
define( 'SECURE_AUTH_SALT', 'J1QlBM qT5tF(u[Un`6Vc~gd BPoTW-r7vG8p[GNn}/%fUGSi.iAw,$w@M]1bC2[' );
define( 'LOGGED_IN_SALT',   '4|plf(}u?<}:@}Z9P*e3nvFUICA0nTAGJsc`*`wvb<f<C6rcG%79aOV][V~PXAL-' );
define( 'NONCE_SALT',       'bc=)eft}$xHlBlJc7H_#y-_Rz)Otck?m_Bdh#Ppm<TnL1-YFttbD?Y^r||MI(7j2' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
