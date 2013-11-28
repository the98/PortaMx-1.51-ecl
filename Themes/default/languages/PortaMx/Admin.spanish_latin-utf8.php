<?php
/** 
* @file Admin.spanish_es-utf8.php
* Language file Admin.spanish_es-utf8
*
* @author PortaMx - Portal Management Extension
* @author Copyright 2008-2010 by PortaMx - http://portamx.com
* @Version: 0.990
* @Date: 05.03.2010
*/

// Admin Center
$txt['pmx_admin_center'] = 'Centro de Administración de PortaMx';
$txt['pmx_admin_main_welcome'] = 'Este es tu "'. $txt['pmx_admin_center'] .'"
	Desde aquí, puedes editar la configuración y gestionar tus bloques.
	También puedes encontrar respuestas a tus preguntas haciendo clic en los símbolos de Ayuda %s para más información sobre las funciones relacionadas.';

$txt['pmx_center_news'] = 'Información en directo desde PortaMx corp.';
$txt['pmx_center_support'] = 'Información de Soporte de PortaMx';
$txt['pmx_center_versioninfo'] = '<b>Información de Versión</b>';
$txt['pmx_center_installed'] = 'Versión de PortaMx instalada: ';
$txt['pmx_center_version'] = 'Versión de PortaMx actual: ';
$txt['pmx_center_download'] = '<b>Descargar la versión actual</b>';
$txt['pmx_center_update'] = '<b>¡ Instalar ahora !</b>';
$txt['pmx_center_detailed'] = '[<b>Mostrar información más detallada</b>]';
$txt['pmx_center_nolivedata'] = 'No se puede leer información del servidor de documentos de PortaMx';
$txt['pmx_center_mansettings'] = '<b>Gestor de Configuración</b>';
$txt['pmx_center_mansettings_desc'] = 'Cambiar o configurar opciones para los Paneles, la Página principal y el Gestor de Bloques.';
$txt['pmx_center_manblocks'] = '<b>Gestor de Bloques</b>';
$txt['pmx_center_manblocks_desc'] = 'Cambiar o configurar opciones en los Bloques, crear nuevos, mover entre paneles y eliminar.';
$txt['pmx_center_manlangs'] = '<b>Gestor de Idioma</b>';
$txt['pmx_center_manlangs_desc'] = 'Buscar idiomas adicionales, instalar nuevos, actualizar o eliminar idiomas instalados.';
$txt['pmx_center_error'] = '¡Ha ocurrido un error!';

// File check
$txt['pmx_center_vercheck'] = 'Comprobación Detallada de Versión';
$txt['pmx_center_vercheck_info'] = 'Muestra la versión de los archivos de tu instalación contra los archivos de la última versión. 
		Si alguno de estos archivos está desactualizado, deberías descargar y actualizar a la última versión.';
$txt['pmx_filepackage'] = 'Paquete PortaMx';
$txt['pmx_source_files'] = 'Archivos Fuente';
$txt['pmx_template_files'] = 'Archivos de Plantilla';
$txt['pmx_language_files'] = 'Archivos de Idioma';
$txt['pmx_center_file'] = '<b>Archivos PortaMx</b>';
$txt['pmx_center_filecurrent'] = '<b>Versión Actual</b>';
$txt['pmx_center_fileinstalled'] = '<b>Versión Instalada</b>';
$txt['pmx_center_filename'] = '<b>Nombre del Archivo</b>';
$txt['pmx_center_fileversion'] = '<b>Versión del Archivo</b>';
$txt['pmx_center_filedate'] = '<b>Fecha del Archivo</b>';

// Language manager
$txt['pmx_center_showlang'] = 'Gestor de Idioma';
$txt['pmx_center_showlang_info'] = 'Muestra los idiomas instalados. 
	Puedes añadir nuevos idiomas, actualizar o eliminar idiomas instalados.';
$txt['pmx_processing'] = '<b>Procesando</b>';
$txt['pmx_center_langinstalled'] = 'Idiomas Instalados';
$txt['pmx_center_langname'] = 'Nombre de Idioma';
$txt['pmx_center_langcharset'] = 'Juego de Caracteres';
$txt['pmx_center_langversion'] = 'Versión';
$txt['pmx_center_langaction'] = 'Acción a realizar';
$txt['pmx_center_langavailable'] = 'Idiomas disponibles en PortaMx.com';
$txt['pmx_center_fetchlang_failed'] = 'No se pueden leer datos de idioma desde PortaMx';
$txt['pmx_center_langinstall'] = 'Instalar';
$txt['pmx_center_langupdate'] = 'Actualizar';
$txt['pmx_center_langreplace'] = 'Reemplazar';
$txt['pmx_center_langdelete'] = 'Eliminar';
$txt['pmx_confirm_langdelete'] = '¿Seguro que quieres eliminar este idioma?';
$txt['pmx_confirm_langreplace'] = 'El idioma que quieres instalar ya existe. ¿Reemplazar?';
$txt['pmx_confirm_langupdate'] = '¿Quieres reemplazar el idioma instalado con la nueva versión?';
$txt['pmx_center_langdelfailed'] = 'No se pueden eliminar todos los arhivos, porque uno o más archivos están protegidos contra borrado.';
$txt['pmx_center_langinstfailed'] = 'No se pueden instalar o actualizar todos los archivos, porque uno o más archivos están protegidos contra escritura.';
$txt['pmx_center_langfetchfailed'] = 'No se puede obtener información de instalación de idioma del Servidor de origen.';
$txt['pmx_center_langdelerror'] = '¡Ha ocurrido un error al eliminar el idioma!';
$txt['pmx_center_langinsterror'] = '¡Ha ocurrido un error al instalar el idioma!';
$txt['pmx_center_manuallylang'] = 'Idiomas instalables manualmente';

// AdminSettings
$txt['pmx_admSet_globals'] = 'Globales';
$txt['pmx_admSet_panels'] = 'Paneles';
$txt['pmx_admSet_front'] = 'Página principal';
$txt['pmx_admSet_control'] = 'Configuración del Gestor';

$txt['pmx_admSet_desc_global'] = 'Configura las opciones globales.';
$txt['pmx_admSet_desc_panel'] = 'Configura las opciones globales de los paneles.';
$txt['pmx_admSet_desc_front'] = 'Configura las opciones de la página principal.';
$txt['pmx_admSet_desc_control'] = 'Configura las opciones de control del Gestor de Bloques.';
 
// AdminBlocks
$txt['pmx_admBlk_desc'] = 'Gestiona tus bloques, modifica, crea o elimina.';
$txt['pmx_blocks_mod'] = 'Moderación del Gestor de Bloques PortaMx';
$txt['pmx_admBlk_desc_mod'] = ' Nota, que no todas las funciones están disponibles en moderación';
$txt['pmx_admBlk_panels'] = array(
	'all' => 'Vista General',
	'head' => 'Cabecera',
	'top' => 'Superior',
	'left' => 'Izquierda',
	'right' => 'Derecha', 
	'bottom' => 'Inferior',
	'foot' => 'Pie',
	'front' => 'Principal',
	'pages' => 'Páginas',
);

// default for access
$txt['pmx_guest'] = 'Invitados';
$txt['pmx_ungroupedmembers'] = 'Miembros sin Grupo';

// panel / block overflow actions
$txt['pmx_overflow_actions'] = array(
	'' => 'Ninguna',
	'auto' => 'Dejar hacer al Navegador',
	'hidden' => 'Cortar en el marco');

// actions for panels and blocks
$txt['pmx_action_names'] = array(
	'frontpage' => 'Página Principal',
	'pages' => 'Páginas individuales',
	'forum' => 'Foro',
	'boards' => 'Foros',
	'topics' => 'Temas',
	'admin' => 'Administración',
	'calendar' => 'Calendario',
	'help' => 'Ayuda',
	'login' => 'Ingresar', 
	'logout' => 'Salir',
	'moderate' => 'Moderar',
	'mlist' => 'Lista de Usuarios',
	'pm' => 'Mensajes Privados',
	'post' => 'Mensaje',
	'profile' => 'Perfil',
	'recent' => 'Mensajes recientes',
	'register' => 'Registrarse',
	'stats' => 'Estadísticas', 
	'search' => 'Buscar',
	'unread' => 'Mensajes sin leer', 
	'unreadreplies' => 'Respuestas sin leer',
	'who' => 'Quién',
);

// for default_block settings
$txt['pmx_defaultsettings_title'] = 'Configuración por defecto';
$txt['pmx_defaultsettings'] = 'Este bloque no tiene ninguna configuración.';
$txt['pmx_default_header_none'] = 'No visible';
$txt['pmx_default_header_asbody'] = 'como body';
$txt['pmx_default_none'] = 'ninguno';

$txt['pmx_information_icon'] = 'Clic para más Información';
$txt['pmx_save'] = 'Guardar';
$txt['pmx_actionfault'] = '¡Petición ilegal!';

$txt['pmx_sysblock'] = 'Bloque de Sistema';
$txt['pmx_userblock'] = 'Bloque de Usuario';

// add 0.980
$txt['pmx_update_save'] = 'Actualizar';
$txt['pmx_click_edit_ttl'] = 'Clic para editar el título';
?>