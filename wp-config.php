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
define('DB_NAME', 'itflavor');

/** MySQL database username */
define('DB_USER', 'melkotoury');

/** MySQL database password */
define('DB_PASSWORD', 'rootcave1234!@#$');

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
define('AUTH_KEY',         '!Svw4<,|[(<M+m& JOahq-E ak4+.Zr%N69}1:M{xU]G6x+9WXgQZ^.&Y0ck[}vv');
define('SECURE_AUTH_KEY',  '!z.OS+K9l;j^{bUQ^We$_UwZ~`%ky3#h9UF&8A9Y%+041~r1^g<-X{~]yd9,T*<#');
define('LOGGED_IN_KEY',    '.u$Q@$tE|R~InO(9MQ/|!QqS-}3x=0#;rIh=NwE+#u<RqfjBEDa/l_-hCu0@pKeT');
define('NONCE_KEY',        ' zu#zig#w0iUCwlOBj)_o+a5/kj,L1?iLNEiE7v;U/!IG!vp.UchyDzaZ0}yxs;W');
define('AUTH_SALT',        'du^YpvVGHY|5:ln<xabZ( {/P4c%0I,g]^_YY_XV*n9kjXW9a,J;bHYI_z_;% (K');
define('SECURE_AUTH_SALT', '#r=hm5#7tLz-+t?a=fh|*D>b07-2+<p]+rO*hc~%S1L0&1GaTHP@DZwqf]n70yA3');
define('LOGGED_IN_SALT',   'H!n[4``$kW6O5H.+DDpvIRk38b+#+-<|0^N/Z@ddm|bO|VK1 pCt tL*2--<Gl|Z');
define('NONCE_SALT',       '{y@hL`6prSp 2$36FIoyW+i6y{n HILOfsgrxJ%yClGBU%7MA?n EF*tLJR`d+xN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbrc_';

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
