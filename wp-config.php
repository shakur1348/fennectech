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
define('DB_NAME', 'fennectechwp_db');

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
define('AUTH_KEY',         'f_RF8j}YGf{7co5UPa9=.mcpg;;I2**&Tye)JsA}S[A|:o(o.)F)`VA|bV:>u{76');
define('SECURE_AUTH_KEY',  '#_h]S5*OBx `ve^z]f~|q :.8HaYR`..wIS4,{6-Y><+#qRUEpwDNZj:g&E?t)LQ');
define('LOGGED_IN_KEY',    'F0zGBl%g0e0C<@r.OEJs;w [OAzKh}6d#?o%w|pRIj]2^46H`jN;)PKdVn;3P0VJ');
define('NONCE_KEY',        ')@,pY4x.dbBE=/*X:IThi~;RW86 -*Md32l)(_M(?#@&)KfieFZH=C)8^LFEB+,A');
define('AUTH_SALT',        'VdY$]uS`WYOG79L%7cPSzW6]dm3:M:y7;,>0JU$yQV21I.efzA[u(cnsap5Mha[U');
define('SECURE_AUTH_SALT', '-Y8`Bf[W=X6g{4mlL7|@*;x75T`-,)%j)I{?K,tN`Va$oX}hUqLcmtyQvKiUot[S');
define('LOGGED_IN_SALT',   'LO_Ge{V1fh,@x6?n$zUr+]C~visCgR`SXq#egFcyNrIePSx]n=#f`z;,@G|8v@fY');
define('NONCE_SALT',       'N4v;>&H=t$~3hDg0R]Sxmq9t*UX@hby7huGyC-;6KhWp*}azG|? ml(:jI6B|Lg^');

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
