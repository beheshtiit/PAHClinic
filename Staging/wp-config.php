<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mjcarluc_2f5');

/** MySQL database username */
define('DB_USER', 'mjcarluc_2f5');

/** MySQL database password */
define('DB_PASSWORD', '1ABEC3Fp5s0qb7k9e8a6n2c4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'MiH(Mkq]kKS]m2gRK(,`=yA<lj@BA>KQkNa5_L:w64;`i]W,l@1ZyP`Ot~cy5T+L');
define('SECURE_AUTH_KEY',  ':^C/|wNC*b*LS@*HAE!?qM=doIBwn@KW>sx-A_3OVNf4nHS7qoJ^)hsX_a|HPTL~');
define('LOGGED_IN_KEY',    ' /u|;<P<&G6Q[!<VV =XnQZ+yBc?ZGt,[);=c+`+3rr:i-Fe SH;8P<D4yg J/E{');
define('NONCE_KEY',        '~QQLeT;I}a8fS)<RBz;5JQ8OwbEir2rz 1:$.m;qEfCC=sFU:CX[SYoKf&Qql*#4');
define('AUTH_SALT',        '`%r_/?Z$D-(6byT$$>`c,UU%4.-Bj4@,Sb^w(6pO?P}S&-}a`UqIn;>#734@Tl.j');
define('SECURE_AUTH_SALT', '!-C{GL+V-}h&2gKf#,0hlXZE*$P-|rrzf[uwNfDDtl+]=%lzM$UNO}fWF`QHZZo#');
define('LOGGED_IN_SALT',   'LcvY(fAS4/.:_|k=ZdS-yaRxG<Bq7uvNx%x.T%4^H[N-Qnvw*VV8[DEBu)Og{zf1');
define('NONCE_SALT',       'hH,>hp.V/7HE)=rb,#CoKI[-cNa#{ss-gI(tNoJlCPG|i^htI`T1d(p|nn}`%O~c');


$table_prefix = 'wp_';


define('WP_SITEURL', 'http://www.pahvirtualclinic.mjcarlucci.com');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
