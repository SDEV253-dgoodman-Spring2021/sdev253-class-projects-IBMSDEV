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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '[L{uQ&S_IO7.>%*UR%11]>0S&mGh71}gXaFz<<jxJ}b`)ETSwk>Y!*:^o-l,P@+q' );
define( 'SECURE_AUTH_KEY',  'cPUVPDfK,9[><M.En3k>W4ru=9v$d9GOC3:4HiA`eIX-5 `sGb(q4.~u@%+P?F~/' );
define( 'LOGGED_IN_KEY',    'p`97HMt/i/KgA$x>11e?EH2QJv3$Q0L6QoyNvgCL%}`$tElwHhQ5)q#<%bz,JmNn' );
define( 'NONCE_KEY',        '){Mm&Tpq4{s^#n#iFu[pJ`y+~wIO3X?x/!D29Gm78g?0Ik1b0cA!]n,A3pOZ0.Mp' );
define( 'AUTH_SALT',        'LrB<Su]N.GMV|r!X 25TIF[ono@Csbj.([E_]WN(hc|<Ku NH%cn%]dqg(ibn#F&' );
define( 'SECURE_AUTH_SALT', 'Z>:2y|Cqh$wazepU$OGk[_W[LZ+xaRLLnk_qSw+:eu qps14h-a#f/o,Fy^5OtDM' );
define( 'LOGGED_IN_SALT',   'y;+ttM9;!Tx;Kb^pjUm&:J={YUmCdaQDVa`WBS~p~@.h :tAUU`IkZizZiFcG]);' );
define( 'NONCE_SALT',       '0_4hp*md[fK#q2xugQ]WyxYp>j8(Si9vlB!G/Ql`Td~5y+Ww|YX{J<i5z(<FbUoh' );

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
