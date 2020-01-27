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
define( 'DB_NAME', 'wordpress_spek_en_bonen' );

/** MySQL database username */
define( 'DB_USER', 'krijn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'localhosttest' );

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
define( 'AUTH_KEY',         '@$hFIGktV+hW_GPdyJ/$(^pvkSs5tK!pdzN JTbd1X13E}z|>:IB2@hHFK}e8U*@' );
define( 'SECURE_AUTH_KEY',  'R>KF,8?[j1gV]mzq&H4kw,;N)>E)C^ub[)9{?>FDb25XJEa3ZM)531IC:nJ{b?Ih' );
define( 'LOGGED_IN_KEY',    'Y]Br;bm;TK){Q~vP0hjaq QtwNL&Fv!&NiB;~$vN@@0a}=yCVq1yXj=s@1QBJ>I[' );
define( 'NONCE_KEY',        '<4>V8r=5k)D3xKG%0BkJwh/:nSfi:6(F*74t4EoYMKJz)~E &v:tsA3w9v/5fOO9' );
define( 'AUTH_SALT',        ')DB0X@p$j|n]qr<XK~<ccn^v FP<Z-nSw)TfQc|eilvqFj]yQ[<xjtYf:pHXADk(' );
define( 'SECURE_AUTH_SALT', '=q{~!qHDLU6c[;LN@uj.%T[:nZ$%|V/e;_w>5OB{GOAFxhe/t}+vuT*dmf8nHi,2' );
define( 'LOGGED_IN_SALT',   '3Z15Z>6FJ oz.1:ms?(4oyQMSx#CyZM#9^j?@hsUB)zh>-q)8Ax`q9,d9xN7~8wG' );
define( 'NONCE_SALT',       'GWj|jUY](+vvhIDA 4POn{Y3FPTrA7q@:>mD_yCIW=B60}b!pjb`fFJK@%O*2f#>' );

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
