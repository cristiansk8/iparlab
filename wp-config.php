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
define('DB_NAME', 'depuracr_iparlab2');

/** MySQL database username */
define('DB_USER', 'depuracr_us-ipar');

/** MySQL database password */
define('DB_PASSWORD', '@gZkAB%vKhkY');

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
define('AUTH_KEY',         'EQ62guo^UV{M78BZZ8un~a-FZsO7&u`PZMc#+jhOUm4*6OxZX=JIq#5T4[4}nR.,');
define('SECURE_AUTH_KEY',  '{0j_pTo2+f3{{e.&=<?Pf<~:NHlf}@}NM(4N4i=i;=fw[_dU|;(BM <Y^,|_s}%{');
define('LOGGED_IN_KEY',    'r$s[&u#[2}@%t+9a=w[soD-lcqS*x$6}B|Ow3GQp>6v2KbfV%Dege;}_&M-yVQkR');
define('NONCE_KEY',        'MYQ[#uesH<~C96I?h#Pw+0W7oR_f_+uJ2AkOAUw{XM]S=Mizn=xkYE(Zhrg>jqMC');
define('AUTH_SALT',        'Eyza.#*9W`VCB00&=nW+6$^,s,866(-*O4Z}:H)|4<7@vQ15,Yc7=QBi1<o6[cbx');
define('SECURE_AUTH_SALT', 'D$$:mAfXa[YP&3Wq*}e~VNNR] 6>DGmz@+a!Q@VhT|PvPects+@bhVgC)eQ]Sl-K');
define('LOGGED_IN_SALT',   '5^qV/gI]H$&[pC)HU&GjA+KC[Zt/G=FfdAKCFa8i0~BjaASK0|![vIJLD2gS+@gj');
define('NONCE_SALT',       '(oKw65g+yGB5{S?lcZTu;!@uJ`_$$.uibFo6}~Kp1{w62V&awDU,^Py$``B--g=?');

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
