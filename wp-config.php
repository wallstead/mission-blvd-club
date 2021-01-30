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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         ':v/L2z-cKg jOOhK4xC0N#,KK2R7qO<~g|D5km|`.[JU4vvTrZB{|H3`VB`365_O' );
define( 'SECURE_AUTH_KEY',  'g@FZ4_c ;V&]h,VC8}8F 7>/,`KS|iB$w%lg4V/FnT$R{}F!?HErM{,*&@#(~EVi' );
define( 'LOGGED_IN_KEY',    'Gu(Ga7xARl1dtJEGM2/{WQ=QwaBGGxfipf$j$qls*Ct8rJOnTANp$Wdx#}yYZphb' );
define( 'NONCE_KEY',        'tp*k[>h~Qt|GvRqSROT9[tP9Gw<+,f#+BOfQ2I1JgJ8GXH{`I4c;G)6x}tx<mY$}' );
define( 'AUTH_SALT',        'P?$505]dA=CJ4pB}UECHF{i8q==q{m2nj+`14JZ4G1rI@I85;<)~klzK;nz1b5#h' );
define( 'SECURE_AUTH_SALT', 'z0VNcY(2}3$%B:i8K}6fiZe*qK6)2]t;if/#F.<BBUZd/NO^<dJk0)+pJ+91RMTF' );
define( 'LOGGED_IN_SALT',   '|I=Z3HSCc!Z0/-+S+IJtEEa#LntX9{47uQz|>5L]g2`sO$Q-rrHeN*8T0Xt[o;]8' );
define( 'NONCE_SALT',       '6,EE-C52;y;JD/#R5Z:RC@/L[N$Vf:;gXq?^w =N[H}Cn3lig+KcVoXaT|.Cg9 H' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
