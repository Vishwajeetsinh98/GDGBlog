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
define('DB_NAME', 'gdg-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`OEF%^jQ=.2w?XjIpl<yP|=/L?l$Q^Tsw7/nf$|p$ER(-h=FjCS||+y|a60yV`#9');
define('SECURE_AUTH_KEY',  't`!_Bs+;EUKW4e!+y#aKuKv+G^X)j)-xYTVHN|kw#3};]asWg|d]fiV.n;a.LJqN');
define('LOGGED_IN_KEY',    'I~d 3t2;sPQXg(eD!98 4Y&LO|i|CnYHuZMISw+&f*axxWqBQBuJgl`7.-a8oInr');
define('NONCE_KEY',        '[(Q7sbfyQ2/ySCYj(~j1{PU!bno,02~p1x(kdImd&>C(3T` ~h7eBp@5Eg4.*Ptg');
define('AUTH_SALT',        '{ 5?^sJi:<ak^dYEB=qZ~$S%YqGR2s`Db_r+2;z0`GxT?^p+,o!-9ES$SQ9t{U]v');
define('SECURE_AUTH_SALT', '2C~h!un5=>fi&->42?jREpad&]k;={qCd[j;(^]d!~,d[$;^=yY}!Kt54ghf85N2');
define('LOGGED_IN_SALT',   'a.r:sK|N2D`Z<-q<HrGbWD=9Zcu(s+%v0rhO1j*XWSC|5[MENc,Xa}6km!k_)]N8');
define('NONCE_SALT',       'q1:Sh4CAYiN%O$/R!(LL3fuvpMp2h6PL@0.S9.VQ[Td+sbWHB$4cR?Ugg[~%NBVg');

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
