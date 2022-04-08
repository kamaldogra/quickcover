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

define( 'DB_NAME', 'drsamanthamorel' );



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

define( 'AUTH_KEY',         'jXR=#vp]{S$pE(ZP<NY-E&M|NL{>|@B.yD~=:f(qg{.4R~!1IqUcM^pLR@1:1|a2' );

define( 'SECURE_AUTH_KEY',  '{{||pr,dQFs9+,nS=i<sV+,`}d:{1MlVQ+orBH9dc]C2l_5IC4=}HAhZ=+121%,b' );

define( 'LOGGED_IN_KEY',    'a%+Z.)39Jw}oikF9*NZuV>nstgq^m}|E0GJ[GnD[Q.7A9s,6,:jaj34Z<m%S?*{o' );

define( 'NONCE_KEY',        '&>MbHokvRhp2d9;SrY$cx6`*J13#5lBup(f]J:XjQ>~;#k+A}pKEMGV(54d9]+r7' );

define( 'AUTH_SALT',        '`5urW4=_|Ki~mIn?ifq|G~i7??~d*pm+t#53~/RFj+x3,)Z*Z8IetZ[_Vq|C6~G)' );

define( 'SECURE_AUTH_SALT', ',EG$v+Gq*rdGrbHZ9^=?xDtfzRAzHwbr<b_{z)[UVG_|mi4g1!:QtH|q/1{d< l{' );

define( 'LOGGED_IN_SALT',   'r0SQ E8 ]mWW):0#y@1k,#).5{:}K!rLt6/T8M:#N]/HD$iPc&EH78jslUzRn5l?' );

define( 'NONCE_SALT',       'h<S35)^fzJ@]e:BkT$uCMW`;{zMa9LYzm$Q*NKWk!]uQBsP}>&JpJS;v7Zzf.V/K' );



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'drsd_';



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

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
