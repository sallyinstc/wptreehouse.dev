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
define('DB_NAME', 'wptreehoDBmvs6k');

/** MySQL database username */
define('DB_USER', 'wptreehoDBmvs6k');

/** MySQL database password */
define('DB_PASSWORD', 'TiwCwCfqve');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Z:Dp_L;Wi+H];e,UNY^Y>R[R!V@N|N-S-|Clwp1Dehp];9a9m<m6T2f^f{qBY7n,');
define('SECURE_AUTH_KEY',  '6q*A+LM<XyX.F,Fv^@>Q>Y@Y!R|N@w8kGk1p1d9dpl;92ai#]6TXifiu3U^Y^M');
define('LOGGED_IN_KEY',    '~5wCpGp9t5l9i2LtDyAqIm6u3jBfj{c3Y>g>4Nv!GFNKozwCKllw11C5dp]]566H');
define('NONCE_KEY',        'YvQz,!JUNv!CCNos@8~#SKt~9DLmp+26Hfiu2Q$yAnFn3r3f7g}k084Ykg[4:V');
define('AUTH_SALT',        'x]P*eAMLmy$7EIjvu3Bjgn0}8cZg[kw8wClCp1p9d5i]i2W;e#b{TLuAyAmEq3r3f');
define('SECURE_AUTH_SALT', 'dw5lKh1w1eDe]p]69+.PHTTu*IAMuU^M^IyMvFzBr>R@V@J!JVRw!~GOKt-x9KDlt');
define('LOGGED_IN_SALT',   'bnQQ@c@>}NY!@[N[Z@V|O_S-S-K9h1l;e6a]i]6;Xif.<QbU$<j}70Ygc,0RRYV@');
define('NONCE_SALT',       'Mf,{Qc,^}QNY@8k}k4Z1h|d:V:W#a_S]SeW*]HT*E*PqL+7yIjIu{BYYj,j30vF');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
