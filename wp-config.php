<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mannerlylikez');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'MD~JGf@Dba(BDCvaP.f!-}%Q ==|q`<KG~l(?xh+eA+1U`0I$qtzG/81 /:%,)gq');
define('SECURE_AUTH_KEY',  's[_u|tx.UhL<~:Xenv!j`%QC*)Wy-s$(}Dml/b!XK^t ~w)v% -Etlmu}N18B.<j');
define('LOGGED_IN_KEY',    'nuF+^.[26-8>2P0Wl3%]Opk#ZAOQk_+c;L&2@6Xo)B|ou0VH)|R?Z,).rSV5 IR ');
define('NONCE_KEY',        '5vs+W#*vO;a^?50Lkd7GQ=tDq2Jy1++#`EY{t<~WiZ8rg5llL[dO CjIRp%=Y]RI');
define('AUTH_SALT',        'PU25v_+OG8_PQcg=Xw3J2J=;9JCL5YD3<cXfROX<#|EU:Fy&T(-%hV7 $sar|MbG');
define('SECURE_AUTH_SALT', 'OHeyXLX$KBC,P<W7*?Cd<~|,/=>]%{oh+ahxiu4+Eh?$1pp[<e.?(PH0>_GR/S]0');
define('LOGGED_IN_SALT',   '2b?B-llR3/*B$,<{-c*8-;|#yBh-^Pnz_x&t2~04s{|ckFp>7:8yORlb<N1W~:)%');
define('NONCE_SALT',       '-[:pIhk(OD+25LGQR B`FR=-)_AE1,#_r{}k<q8d-TK0TGd|#+w~ |r.]d;ENs,m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
