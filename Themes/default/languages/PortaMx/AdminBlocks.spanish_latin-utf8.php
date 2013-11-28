<?php
/** 
* @file AdminBlocks.spanish_es-utf8.php
* Language file AdminBlocks.spanish_es-utf8
*
* @author PortaMx - Portal Management Extension
* @author Copyright 2008-2010 by PortaMx - http://portamx.com
* @Version: 0.990
* @Date: 05.03.2010
*/

// Block overview
$txt['pxm_sideblock'] = array(
	'head' => 'Cabecera',
	'top' => 'Superior',
	'left' => 'Izquierda',
	'right' => 'Derecha',
	'bottom' => 'Inferior',
	'foot' => 'Pie',
	'front' => 'Principal',
	'pages' => 'Páginas',
);
$txt['pxm_add_sideblock'] = array(
	'head' => 'Clic para añadir un bloque de cabecera',
	'top' => 'Clic para añadir un bloque central superior',
	'left' => 'Clic para añadir un bloque al lado izquierdo',
	'right' => 'Clic para añadir un bloque al lado derecho',
	'bottom' => 'Clic para añadir un bloque central inferior',
	'foot' => 'Clic para añadir un bloque de pie',
	'front' => 'Clic para añadir un bloque a la página principal',
	'pages' => 'Clic para añadir un bloque de página',
);

$txt['pxm_edit_sideblock'] = 'Clic para modificar este bloque';
$txt['pxm_clone_sideblock'] = 'Clic para clonar este bloque';
$txt['pxm_move_sideblock'] = 'Clic para mover este bloque a otro lado';
$txt['pxm_delete_sideblock'] = 'Clic para eliminar este bloque';
$txt['pmx_confirm_blockdelete'] = '¿Estás seguro de que quieres eliminar este Bloque?';

$txt['pmx_admBlk_order'] = 'Orden';
$txt['pmx_admBlk_adj'] = 'Ajustar';
$txt['pmx_admBlk_title'] = 'Título';
$txt['pmx_admBlk_type'] = 'Tipo de Bloque';
$txt['pmx_admBlk_status'] = 'Estado';
$txt['pmx_admBlk_options'] = 'Opciones';
$txt['pmx_admBlk_functions'] = 'Funciones';

$txt['pxm_status_activ'] = 'Activo';
$txt['pxm_status_inactiv'] = 'Inactivo';
$txt['pxm_status_change'] = 'Clic para cambiar';
$txt['pxm_moveto'] = 'Mover a:&nbsp;';
$txt['pxm_cloneto'] = 'Clonar a:&nbsp;';
$txt['pxm_clonechoice'] = 'Escoge lado:';

$txt['pmx_have_settings'] = 'El bloque tiene opciones de configuración';
$txt['pmx_have_groupaccess'] = 'El bloque tiene acceso de visibilidad';
$txt['pmx_have_modaccess'] = 'El bloque tiene acceso moderado';
$txt['pmx_have_dynamics'] = 'El bloque tiene opciones de visibilidad dinámica';
$txt['pmx_have_cssfile'] = 'El bloque tiene su propia hoja de estilos';
$txt['pmx_have_langfile'] = 'El bloque tiene su propio archivo de idioma';
$txt['pmx_have_caching'] = 'Caché de bloque:';

// Edit block
$txt['pxm_editblock'] = 'Modificar ';
$txt['pxm_edit_title'] = 'Título de bloque:';
$txt['pxm_edit_title_lang'] = 'Idioma:';
$txt['pxm_edit_title_align'] = 'Alineación:';
$txt['pxm_edit_pagename'] = 'Nombre de página:';
$txt['pxm_edit_pagenamehelp'] = 'Puedes usar cualquier nombre con los caracteres <b>a-z, A-Z, 0-9</b>, subrayado(<b>_</b>), punto(<b>.</b>) y guión(</b>-</b>).';
$txt['pxm_edit_titleicon'] = 'Icono de título:';
$txt['pxm_edit_no_icon'] = 'sin icono';

$txt['pxm_edit_title_helpalign'] = 'Clic para establecer la alineación del Título ';
$txt['pxm_edit_title_align_types'] = array(
	'left' => 'Izquierda',
	'center' => 'Centrado',
	'right' => 'Derecha'
);
$txt['pxm_edit_type'] = 'Tipo de bloque:';
$txt['pxm_edit_cache'] = 'Habilitar caché:';
$txt['pxm_edit_cachetime'] = 'Duración:';
$txt['pxm_edit_cachetimemin'] = 'Min';
$txt['pxm_edit_cachetimesec'] = 'Seg';

$txt['pxm_edit_titlehelp'] = 'Introduce un título para cada idioma.';
$txt['pxm_edit_cachehelp'] = 'Si está habilitada, el contenido se almacena y se actualiza transcurrido el tiempo indicado.<br />
	Puedes utilizar el multiplicador "*" como "24*60" para un día.';
$txt['pxm_edit_nocachehelp'] = 'La caché está deshabilitada para este tipo de bloque.';
$txt['pmx_edit_content'] = 'Crea o modifica el contenido';
$txt['pxm_edit_pmxcachehelp'] = 'No cambies el tiempo de caché hasta que sepas lo que haces. Un valor erroneo puede ralentizar el servidor!<br >
	Para restaurar el valor por defecto, desactivar la memoria caché y habilitar nuevamente.';
$txt['pxm_edit_noSMFcache'] = 'El almacenamiento en caché está desactivado en la configuración del servidor SMF.';

$txt['pmx_edit_frontplacing'] = 'Ubicación de Bloque en Páginas Individuales';
$txt['pxm_edit_frontplacing_hide'] = 'Ocultar bloque:';
$txt['pxm_edit_frontplacing_before'] = 'Ubicar antes:';
$txt['pxm_edit_frontplacing_after'] = 'Ubicar después:';
$txt['pxm_edit_frontplacinghelp'] = 'Elige la ubicación para este bloque si se ha solicitado un bloque de "Página Individual".';

$txt['pmx_edit_frontmode'] = 'Cambio de modo de Página Principal';
$txt['pxm_edit_frontmode_none'] = 'Sin cambio:';
$txt['pxm_edit_frontmode_center'] = 'A centrado:';
$txt['pxm_edit_frontmode_full'] = 'A tamaño completo:';
$txt['pxm_edit_frontmodehelp'] = 'Elige el modo de Página Principal para este bloque. 
	La Página Principal cambia al modo seleccionado, si se solicita este bloque.';

$txt['pmx_edit_frontview'] = 'Visibilidad de Bloque en modo de Página Principal';
$txt['pxm_edit_frontview_any'] = 'Siempre:';
$txt['pxm_edit_frontview_center'] = 'En centrado:';
$txt['pxm_edit_frontview_full'] = 'En tamaño completo:';
$txt['pxm_edit_frontviewhelp'] = 'Elige la visibilidad de bloque para el modo de Página Principal. 
		El bloque solo se muestra, si la Página Principal es el modo seleccionado.';

$txt['pmx_edit_visuals'] = 'Opciones visuales y clases CSS';
$txt['pxm_edit_cancollapse'] = 'Contraíble:';
$txt['pxm_edit_overflow'] = 'Desbordamiento:';
$txt['pmx_pixel_blank'] = ' Pixel o dejar en blanco';

$txt['pxm_edit_height'] = 'Fijar la altura del bloque como:';
$txt['pxm_edit_height_mode'] = array(
	'max-height' => 'altura máxima', 
	'height' => 'altura', 
	'min-height' => 'altura mínima');

$txt['pxm_edit_collapse_state'] = 'Estado del bloque';
$txt['pxm_collapse_mode'] = array(
	0 => 'predeterminado',
	1 => 'contraíble',
	2 => 'expandido');

$txt['pxm_edit_cssfilename'] = 'Archivo CSS:';
$txt['pmx_edit_usedclass_type'] = 'Nombre del tipo';
$txt['pmx_edit_usedclass_style'] = 'Clase de estilo asignada';
$txt['pmx_edit_canhavecssfile'] = 'Selecciona un archivo CSS o dejar en blanco';

$txt['pmx_edit_groups'] = 'Opciones de visibilidad del bloque';
$txt['pmx_edit_groups_help'] = 'Elige los grupos de usuarios que podrán ver este bloque.<br />
	También puedes utilizar <b>grupos bloqueados</b>. Esto es útil cuando un usuario se encuentra en más de un grupo, pero uno de los grupos no debe ver todo el bloque.<br />
	Para alternar entre grupos y grupos a los que se le niega el acceso, mantén pulsada la <b>Tecla Ctrl</b> y <b>doble click</b> en los elementos.
	Si el grupo es un grupo bloqueado, verás el símbolo de negación <b>^</b> antes del nombre de grupo';

$txt['pmx_edit_modgroups'] = 'Moderar configuración del bloque';
$txt['pmx_edit_modgroups_help'] = 'Selecciona los grupos de usuario que pueden moderar la configuración.';
$txt['pmx_edit_modgroups_off'] = 'En moderar, no se puede cambiar la configuración.';

$txt['pmx_edit_ext_opts'] = 'Opciones de visibilidad dinámica';
$txt['pmx_edit_ext_opts_help'] = 'Si seleccionas cualquiera de estas opciones de visibilidad dinámica, el bloque se mostrará <b>solo</b> en éstas, en ninguna otra.
		Para mostrar el bloque sin ninguna visibilidad dinámica, deja <b>todo sin seleccionar</b>.';
$txt['pmx_edit_ext_opts_morehelp'] = '<br style="line-height:1.7em;" />
	Para seleccionar o deseleccionar una o más opciones, mantén pulsada la <b>Tecla Ctrl</b> y haz <b>clic</b> en los elementos. Para cambiar el indicador <b>Mostrar/Ocultar</b> (<b>^</b>), mantén
	también pulsada la <b>Tecla Ctrl</b> y haz <b>doble clic</b> (<b>¡IE requiere tres clics!)</b> en el elemento.
	<u><b>¿Cómo funciona?</b></u><br />
	<b>Mostrar</b>: Si quieres indicar el bloque solamente con una o más acciones, foros o idiomas, entonces selecciona estos.<br />
	<b>Ocultar</b>: Si quieres indicar el bloque, solamente con una o más acciones, foros e idiomas no, entonces selecciona estos con un doble clic (verás un <b>^</b> delante).<br />
	<b>Ejemplos</b>:<br />Selecciona las acciones "Admin" y "Calendario".. El bloque solamente se muestra en Admin y Calendario.<br />
	Selecciona la acción "<b>^</b>Admin" .. El bloque se muestra siempre excepto en Admin.';

$txt['pmx_edit_ext_opts_action'] = 'Mostrar u Ocultar el bloque en la acción';
$txt['pmx_edit_ext_opts_custaction'] = 'Mostrar u Ocultar el bloque en acción personalizada';
$txt['pmx_edit_ext_opts_boards'] = 'Mostrar u Ocultar el bloque en el Foro';
$txt['pmx_edit_ext_opts_languages'] = 'Mostrar u Ocultar el bloque en el idioma';
$txt['pmx_edit_ext_opts_themes'] = 'Mostrar u Ocultar el bloque en el tema';
$txt['pmx_edit_ext_opts_custom'] = 'Introduce acción';

// changed 0.980
$txt['pmx_edit_ext_opts_custhelp'] = 'Aquí puedes indicar otras acciones, separadas por coma.
	Para <b>Ocultar</b> el bloque para una acción, introduce un <b>^</b> delante del nombre.<br/>
	Para <b>Páginas individuales</b>, introduce el nombre de la página con una <b>p:</b> delante, por ejemplo <b>p:mipagina</b> o <b>^p:mipagina</b>.
	Puedes usar nombres con los comodines <b>*</b> y <b>?</b>. En este caso el bloque se muestra o se oculta en páginas/acciones cuyo nombre coincide.<br />
	<b>Ejemplo</b>: "mipagina*" coincide con <i>mipagina</i> y cualquier página que empieza con <i>mipagina</i>, "mi?pagina" coincide con <i>mipagina, mi1pagina, miXpagina</i> pero no <i>mi22pagina</i>';

$txt['pmx_edit_ext_opts_selnote'] = 'Para mostrar u ocultar el bloque, selecciona o deselecciona una o más opciones.<br />
	Mantén pulsada la <b>Tecla Ctrl</b> y haz <b>clic</b> en los elementos. Para cambiar el indicador <b>Mostrar/Ocultar</b> (<b>^</b>), mantén pulsada la <b>Tecla Ctrl</b> y haz <b>doble clic</b> en el elemento.';

$txt['pmx_htmlsettings_title'] = 'Opciones de Bloque Html';
$txt['pmx_html_teaser'] = 'Habilitar el corte de html:';
$txt['pxm_html_teasehelp'] = 'Puedes insertar una marca de corte en el contenido html. Para ello, sitúa el cursor en una posición adecuada, y haz clic en el icono de "<b>Salto de Página</b>" del editor.';

$txt['pxm_edit_innerpad'] = 'Relleno interior:';
$txt['pmx_pixel'] = ' Pixel';
$txt['move_up'] = 'Mover arriba';
$txt['move_down'] = 'Mover abajo';

// added 0.980
$txt['pmx_pageindex_tophelp'] = 'Si está habilitada, el índice de página se muestra en la parte superior e inferior. 
	Si está deshabilitada, el índice de página se muestra solo en la parte inferior.';
$txt['pmx_edit_content_init'] = ' (PARTE DE INICIALIZACION)';
$txt['pmx_edit_content_show'] = ' (PARTE DE VISUALIZACION)';
$txt['pxm_php_partblock'] = 'Editor de la parte de inicialización';
$txt['pxm_php_partblock_note'] = '<b>Segundo editor de bloques PHP especiales</b>';
$txt['pxm_php_partblock_help'] = '
	Puedes crear bloques PHP especiales con una <b>parte de visualización</b> (ejecutada desde la plantilla) en el editor superior y una <b>parte de inicialización</b> (ejecutada en tiempo de carga) en el <b>segundo editor</b>.
	El bloque PHP tiene dos variables (<b>$this->php_content</b> and <b>$this->php_vars</b>) para uso común y para transferir variables entre ambas partes, por ejemplo:<br />
	<i>Código en la parte de inicialización: <b>$this->php_content = \'Hello world!\';</b><br />
	Código en la parte de visualización como: <b>echo $this->php_content;</b></i>';

?>