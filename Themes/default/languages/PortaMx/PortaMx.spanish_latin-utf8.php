<?php
/**
* \file PortaMx.english.php
* Language file PortaMx.english
*
* \author PortaMx - Portal Management Extension
* \author Copyright 2008-2012 by PortaMx - http://portamx.com
* \version 1.51
* \date 31.08.2012
*/

$txt['forum'] = 'Foro';
$txt['pmx_button'] = 'PortaMx';
$txt['pmx_managers'] = 'Tu PortaMx';
$txt['pmx_expand'] = 'Expandir ';
$txt['pmx_collapse'] = 'Contraer ';
$txt['pmx_hidepanel'] = 'Ocultar ';
$txt['pmx_showpanel'] = 'Mostrar ';
$txt['pmx_expand_index'] = 'Expandir';
$txt['pmx_show_index'] = 'Mostrar';

// do not change the array keys !
$txt['pmx_block_panels'] = array(
	'head' => 'Panel de cabecera',
	'top' => 'Panel superior',
	'left' => 'Panel izquierdo',
	'right' => 'Panel derecho',
	'bottom' => 'Panel inferior',
	'foot' => 'Panel de pie',
);

// do not change the array keys !
$txt['pmx_block_sides'] = array(
	'head' => 'Cabecera',
	'top' => 'Superior',
	'left' => 'Izquierda',
	'right' => 'Derecha',
	'bottom' => 'Inferior',
	'foot' => 'Pie',
	'front' => 'Principal',
	'pages' => 'Páginas',
);

// Admin and dropdown menue
$txt['pmx_admincenter'] = 'Centro de Administración PortaMx';
$txt['pmx_settings'] = 'Gestor de Configuración';
$txt['pmx_blocks'] = 'Gestor de Bloques';
$txt['pmx_adm_settings'] = 'Gestor de Configuración PortaMx';
$txt['pmx_adm_blocks'] = 'Gestor de Bloques PortaMx';
$txt['permissionname_manage_portamx'] = 'Moderar el Gestor de Bloques PortaMx';
$txt['permissionhelp_manage_portamx'] = 'Con este permiso cualquier miembro de este grupo puede acceder a la moderación del Gestor de Bloques PortaMx.';

$txt['pmx_categories'] = 'Gestor de Categorías';
$txt['pmx_articles'] = 'Gestor de Artículos';
$txt['pmx_sefengine'] = 'Gestor SEF';
$txt['pmx_languages'] = 'Gestor de Idioma';
$txt['pmx_adm_categories'] = 'Gestor de Categorías PortaMx';
$txt['pmx_adm_articles'] = 'Gestor de Artículos PortaMx';
$txt['pmx_adm_sefengine'] = 'Gestór SEF PortaMx';
$txt['pmx_adm_languages'] = 'Gestor de Idioma PortaMx';

// teaser
$txt['pmx_readmore'] = '<b>Leer el artículo completo</b>';
$txt['pmx_readclose'] = '<b>Contraer el artículo</b>';
$txt['pmx_teaserinfo'] = array(
	0 => ' title="Truncar: %s de %s Palabras"',
	1 => ' title="Truncar: %s de %s Caracteres"',
);

// HighSlide JS
$txt['pmx_hs_read'] = 'Clic para leer el mensaje completo';
$txt['pmx_hs_expand'] = 'Clic para agrandar';
$txt['pmx_hs_caption'] = '<a href=\'http://highslide.com/\'>Powered by <i>Highslide JS</i></a>, implemented by PortaMx corp.';

// special PHP type blocks/articles
$txt['pmx_edit_content_init'] = ' (INICIAR PARTE)';
$txt['pmx_edit_content_show'] = ' (MOSTRAR PARTE)';
$txt['pmx_php_partblock'] = 'iniciar editor de partes';
$txt['pmx_php_partblock_note'] = '<b>Segundo editor para bloques PHP especiales</b>';
$txt['pmx_php_partblock_help'] = '
	Puedes crear bloques PHP especiales con un <b>mostrar parte</b> (ejecutado desde plantilla) en el editor superior, y un <b>iniciar parte</b> (ejecutado al cargar) en el <b>segundo editor</b>.
	El bloque PHP posee dos variables (<b>$this->php_content</b> y <b>$this->php_vars</b>) para uso común y para transferir valores entre ambas partes, por ejemplo:<br />
	<i>Código en la parte inicial: <b>$this->php_content = \'Hello world!\';</b><br />
	Código mostrado en parte como: <b>echo $this->php_content;</b></i>';

// error messages
$txt['pmx_acces_error'] = 'No tiene permisos para ingresar en esta sección';
$txt['feed_response_error'] = "fsockopen(%s) falló.\nError: Sin respuesta por (%s seconds).";
$txt['page_reqerror_title'] = 'Error de solicitud de Página';
$txt['page_reqerror_msg'] = 'No tiene permisos de ingreso o la página solicitada no existe.';
$txt['article_reqerror_title'] = 'Error de Solicitud de Artículo';
$txt['article_reqerror_msg'] = 'No tiene permisos de ingreso o el artículo solicitada no existe.';
$txt['category_reqerror_title'] = 'Error de solicitud de Categoría';
$txt['category_reqerror_msg'] = 'No tiene permisos de ingreso o la categoría solicitada no existe.';
$txt['download_error_title'] = 'Error de Descarga';
$txt['download_acces_error'] = 'No tiene permisos para proceder con la Descarga solicitada.';
$txt['download_notfound_error'] = 'La Descarga solicitada no está disponible y no puede proceder.';
$txt['download_unknown_error'] = 'Solicitud ilegal, la descarga no puede continuar.';
$txt['front_reqerror_title'] = 'Error de Solicitud';
$txt['front_reqerror_msg'] = 'La solicitud no puede procesarse porque la página principal está bloqueada.';
$txt['unknown_reqerror_title'] = 'Error de Solicitud';
$txt['unknown_reqerror_msg'] = 'El objeto solicitado no está disponible y no puede proceder.';;
$txt['page_reqerror_button'] = 'Atrás';

// Caching
$txt['cachestats'] = array(
	'mode' => '',
	'hits' => ', Aciertos:',
	'fails' => ', Fallos:',
	'loaded' => ', Cargados:',
	'saved' => ', Guardados:',
	'time' => ', Tiempo:'
);
$txt['cachemode'] = array(
	0 => 'deshabilitado',
	1 => 'Memcached',
	3 => 'MMCache',
	4 => 'APC',
	5 => 'xCache',
	6 => 'archivo',
);
$txt['cache_status'] = 'PortaMx-cache[ ';
$txt['cacheseconds'] = ' segundos';
$txt['cachemilliseconds'] = ' milisegundos';
$txt['cachekb'] = ' kb';

// elc authentication
$txt['pmxecl_noAuth'] = 'Se requiere aceptar Cookies';
$txt['pmxelc_needAccept'] = 'Para navegar este sitio, es necesario almacenar cookies en su computadora.<br />
	Las cookies no contienen información personal, son requeridas para controlar el programa.<br />';
$txt['pmxelc_agree'] = '<br /><b>Hasta que no acepte el almacenamiento de cookies, no puede continuar.</b>';
$txt['pmxelc_modal'] = '<b>el almacenamiento de cookies mientras navega este sitio, el Ingresar o Registrarse.</b>';
$txt['pmxelc_button'] = 'Acepto';
$txt['pmxelc_button_ttl'] = 'Acepto los cookies';
$txt['pmxelc_lang'] = 'Idioma:';
$txt['pmxelc_privacy'] = 'Declaración de Privacidad';
$txt['pmxelc_privacy_ttl'] = 'Mostrar u Ocultar la Declaración de Privacidad';
$txt['pmxelc_privacy_note'] = 'Por favor lea la versión completa de la Declaración de Privacidad.';
$txt['pmxelc_privacy_failed'] = 'No existe una Declaración de Privacidad.';
$txt['pmxelc_failed_login'] = '¡No puede Ingresar sin permitir el almacenamiento de cookies!';
$txt['pmxelc_failed_register'] = '¡No puede Registrarse sin permitir el almacenamiento de cookies!';
$txt['pmxelc_failed_request'] = '¡No puede continuar sin permitir el almacenamiento de cookies!';

// who display
$txt['pmx_who_frontpage'] = 'Viendo la página frontal';
$txt['pmx_who_spage'] = 'Viendo la página %s';
$txt['pmx_who_art'] = 'Viendo el artículo %s';
$txt['pmx_who_cat'] = 'Viendo la categoría %s';
$txt['pmx_who_portamx'] = 'Viendo el PortaMx %s';
$txt['pmx_who_admin'] = 'Viendo el área de administración %s';
$txt['pmx_who_unknow'] = 'Viendo %s';
$txt['pmx_who_acts'] = array(
	'pmx_center' => 'Centro de Administración',
	'pmx_settings' => 'Gestor de Configuración',
	'pmx_blocks' => 'Gestor de Bloques',
	'pmx_articles' => 'Gestor de Artículos',
	'pmx_categories' => 'Gestor de Categorías',
	'pmx_languages' => 'Gestor de Idiomas',
);

// category/article display
$txt['pmx_openSidebar'] = 'Clic para ver más artículos';
$txt['pmx_clickclose'] = 'Clic para cerrar';
$txt['pmx_more_articles'] = 'Artículos en la categoría';
$txt['pmx_more_categories'] = 'Más categorías en';

/* Blocktype specific text */
// cbt_navigator
$txt['pmx_cbt_colexp'] = 'Contraer/Expandir: ';
$txt['pmx_cbt_expandall'] = 'Expandir';
$txt['pmx_cbt_collapseall'] = 'Contraer';

// download
$txt['download'] = 'Descargar';
$txt['pmx_download_empty'] = '<strong>No hay descargar disponibles</strong>';
$txt['pmx_kb_downloads'] = 'Kb, Descargas: ';

// polls
$txt['pmx_poll_novote_opt'] = 'No seleccionó una opción';
$txt['pmx_pollmultiview'] = 'Seleccione encuesta a mostrar:';
$txt['pmx_poll_closed'] = 'Votación Cerrada.';
$txt['pmx_poll_select_locked'] = ' [Boqueada]';
$txt['pmx_poll_select_expired'] = ' [Expirada]';

// rss reader
$txt['pmx_rssreader_postat'] = 'Posteado: ';
$txt['pmx_rssreader_error'] = 'Error de tiempo de espera de respuesta, no se puede leer el feed.';
$txt['pmx_rssreader_timeout'] = 'Terminó el tiempo de espera de datos.';

// shoutbox
$txt['pmx_shoutbox_toggle'] = 'Cambiar modo de edición';
$txt['pmx_shoutbox_shoutdelete'] = 'Borrar este Grito';
$txt['pmx_shoutbox_shoutconfirm'] = '¿Quiere borrar este Grito?';
$txt['pmx_shoutbox_shoutedit'] = 'Editar este grito';
$txt['pmx_shoutbox_button_open'] = '¿Gritar?';
$txt['pmx_shoutbox_button'] = '¡Gritar!';
$txt['pmx_shoutbox_button_title'] = '¡Ingrese un nuevo Grito!';
$txt['pmx_shoutbox_send_title'] = '¡Envíe su Grito!';
$txt['pmx_shoutbox_bbc_code'] = 'Cambiar BBC Display';
$txt['pmx_shoutbbc_b'] = 'Negrita';
$txt['pmx_shoutbbc_i'] = 'Cursiva';
$txt['pmx_shoutbbc_u'] = 'Subrayado';
$txt['pmx_shoutbbc_s'] = 'Tachado';
$txt['pmx_shoutbbc_m'] = 'Marquesina';
$txt['pmx_shoutbbc_sub'] = 'Subíndice';
$txt['pmx_shoutbbc_sup'] = 'Superíndice';
$txt['pmx_shoutbbc_changecolor'] = 'Cambiar color';
$txt['pmx_shoutbbc_colorBlack'] = 'Negro';
$txt['pmx_shoutbbc_colorRed'] = 'Rojo';
$txt['pmx_shoutbbc_colorYellow'] = 'Amarillo';
$txt['pmx_shoutbbc_colorPink'] = 'Rosa';
$txt['pmx_shoutbbc_colorGreen'] = 'Verde';
$txt['pmx_shoutbbc_colorOrange'] = 'Naranja';
$txt['pmx_shoutbbc_colorPurple'] = 'Púrpura';
$txt['pmx_shoutbbc_colorBlue'] = 'Azul';
$txt['pmx_shoutbbc_colorBeige'] = 'Beige';
$txt['pmx_shoutbbc_colorBrown'] = 'Marrón';
$txt['pmx_shoutbbc_colorTeal'] = 'Verde marino';
$txt['pmx_shoutbbc_colorNavy'] = 'Celeste';
$txt['pmx_shoutbbc_colorMaroon'] = 'Bordó';
$txt['pmx_shoutbbc_colorLimeGreen'] = 'Verde limón';
$txt['pmx_shoutbbc_colorWhite'] = 'Blanco';

// statistics
$txt['pmx_stat_member'] = 'Miembros';
$txt['pmx_stat_totalmember'] = 'Total de miembros';
$txt['pmx_stat_lastmember'] = 'Último';
$txt['pmx_stat_stats'] = 'Estadísticas';
$txt['pmx_stat_stats_post'] = 'Total de Posts';
$txt['pmx_stat_stats_topic'] = 'Total de Topics';
$txt['pmx_stat_stats_ol_today'] = 'Conectados hoy';
$txt['pmx_stat_stats_ol_ever'] = 'Los más conectados';
$txt['pmx_stat_users'] = 'Usuarios conectados';
$txt['pmx_stat_users_reg'] = 'Usuarios';
$txt['pmx_stat_users_guest'] = 'Invitados';
$txt['pmx_stat_users_spider'] = 'Spiders';
$txt['pmx_stat_users_total'] = 'Total';
$txt['pmx_memberlist_icon'] = 'Lista de miembros';
$txt['pmx_statistics_icon'] = 'estadísticas';
$txt['pmx_online_user_icon'] = 'usuario conectado';

// theme select
$txt['pmx_theme_change'] = 'Clic en la imagen para cambiar el Tema';

// user_login
$txt['pmx_hello'] = 'Hola ';
$txt['pmx_pm'] = 'Mensajes Personales';
$txt['pmx_unread'] = 'Mostrar posts no leídos';
$txt['pmx_replies'] = 'Mostrar respuesta no leídas';
$txt['pmx_showownposts'] = 'Mostrar mis posts';
$txt['pmx_unapproved_members'] = 'Miembro no aprobado:';
$txt['pmx_maintenace'] = 'Modo de mantenimiento';
$txt['pmx_loggedintime'] = 'Conectado en';
$txt['pmx_Ldays'] = 'd';
$txt['pmx_Lhours'] = 'h';
$txt['pmx_Lminutes'] = 'm';
$txt['pmx_langsel'] = 'Seleccionar idioma:';

// mini_calendar
$txt['pmx_cal_birthdays'] = 'Cumpleaños';
$txt['pmx_cal_holidays'] = 'Feriados';
$txt['pmx_cal_events'] = 'Eventos';
/* Birthday, Holiday, Event date format chars:
%M = Month (Jan - Dec)
%m = Month (01 - 12)
%d = Day (01 - 31)
%j = Day (1 - 31) */
$txt['pmx_minical_dateform'] = array(
	'%M %d',		// single date
	'%M %d',		// start-date same month
	' - %d',		// end-date same month
	'%M %d',		// start-date not same month
	' - %M %d'	// end-date not same month
);

// common use
$txt['pmx_text_category'] = 'Categoría: ';
$txt['pmx_text_board'] = 'Pizarra: ';
$txt['pmx_text_topic'] = 'Tópico: ';
$txt['pmx_text_post'] = 'Post: ';
$txt['pmx_text_postby'] = 'Posted por: ';
$txt['pmx_text_replies'] = ' Respuestas: ';
$txt['pmx_text_views'] = 'Vistas: ';
$txt['pmx_text_createdby'] = 'Creado por: ';
$txt['pmx_text_updated'] = 'Última actualización: ';
$txt['pmx_text_readmore'] = '<b>Leer más</b>';
$txt['pmx_text_show_attach'] = '<b>Mostrar adjuntos</b>';
$txt['pmx_text_hide_attach'] = '<b>Ocultar adjuntos</b>';
$txt['pmx_text_printing'] = 'Imprimir el contenido';
$txt['pmx_user_unknown'] = 'Desconocido';
$txt['pmx_set_promote'] = 'Promover Mensaje';
$txt['pmx_unset_promote'] = 'Limpiar Promoción';
?>
