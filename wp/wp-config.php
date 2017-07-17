<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'tiendaonline');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6Hz<bd!LSQ~P*ld?a4`dDMT{n{5*V<CF2_Nul@jy2wF %!E_>UDss>FSGSa?wM#i');
define('SECURE_AUTH_KEY', 'HvCA3-`}KfPdtksEF2i;f<c&4=dT_+9)N#UR*cM.21!c(G+TJAu^XtsP]4;WyV|m');
define('LOGGED_IN_KEY', '[g>pLB/pp$y_$opXa^ijpm}.AE8HHAD/pj`]1ocU*x1B@)Bj|,6JT<rTK iYVFrQ');
define('NONCE_KEY', 'A%Y0BF/:%s`@UgNG9bZaf<rBSN/o:qr(@9_;%0z)PX )@ls.?&?0~g_/]:,,8HZv');
define('AUTH_SALT', 'EZ?^_C;|apyZ[)B3/3|`<zez,*5zMI,>fm[&rj4%KP]m81s+L?6%(miH~z(Jw(3|');
define('SECURE_AUTH_SALT', 'IWgg%W&b,qlkrOOOJAV1^,d}iAI&[T^P[^m@F{4)~RO_]ro!b$9A*GR*I=]`sl]m');
define('LOGGED_IN_SALT', 'ej0#%tT_76H?[0RMZ|CxPr.o!x6VdeCj|%a*d#~_uHa!Glp?JurRsLtGb<F 8+9f');
define('NONCE_SALT', 'i3e3f7^yXuQ7E4/Q2w(s=gecaF/o35.+wpWS|OpZ=nF-R)#P>IsjJQ#,CWH(@e`z');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

