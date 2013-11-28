<?php
/** 
* @file AdminSettings.spanish_es-utf8.php
* Language file AdminSettings.spanish_es-utf8
*
* @author PortaMx - Portal Management Extension
* @author Copyright 2008-2010 by PortaMx - http://portamx.com
* @Version: 0.990
* @Date: 05.03.2010
*/

// global
$txt['pxm_global_settings'] = 'Opciones Globales';
$txt['pxm_settings_hidelinktree'] = 'Ocultar siempre el árbol de enlaces:';
$txt['pxm_settings_panelpadding'] = 'Relleno entre paneles:';
$txt['pxm_settings_paneloverflow'] = 'Acción en caso de desbordamiento de Paneles:';
$txt['pxm_settings_download'] = 'Mostrar botón de descarga en la barra de menú:';
$txt['pxm_settings_download_action'] = 'Nombre de acción para el botón de descarga:';
$txt['pxm_settings_enable_xbars'] = 'Paneles a contraer/expandir con <b>xBars</b>:';
$txt['pxm_settings_all_toggle'] = 'Seleccionar todos';
$txt['pxm_settings_enable_xbarkeys'] = 'Habilitar panel <b>xBarKeys</b>:';
$txt['pxm_settings_collapse_visibility'] = 'Contraer el panel de <b>Visibilidad Dinámica</b>:'; 
$txt['pxm_settings_hidelinktree_front'] = 'Ocultar el árbol de enlaces en la página principal:';
$txt['pxm_settings_disableHS'] = 'Deshabilitar el visor HighSlide globalmente:';
$txt['pxm_settings_noHS_onaction'] = 'Deshabilitar el visor HighSlide en acciones:';
$txt['pxm_settings_mainoverflow'] = 'Habilitar desplazamiento horizontal del áre del Foro en desbordamiento:';
$txt['pxm_settings_movecopyright'] = 'Mover copyright al copyright de SMF en los temas:';
$txt['pxm_settings_postcountacs'] = 'Usa grupos basados en contador de Mensajes para configuración de acceso:';
$txt['pxm_settings_hideadminacs'] = 'Deshabilitar acceso global de Admin para visibilidad de bloque:';
$txt['pxm_settings_shrinkimages'] = 'Manejo de bloque y panel expandir / contraer:';
$txt['pxm_settings_shrink'] = array(
	0 => 'Mostrar imágenes por defecto',
	1 => 'Mostrar imágenes dependientes del Theme',
	2 => 'No hay imagen, utilizar la barra de título');

// panels
$txt['pxm_panel_settings'] = 'Opciones Globales de Panel';
$txt['pxm_settings_panelset'] = 'Opciones';

$txt['pxm_settings_panelhead'] = 'Panel de cabecera';
$txt['pxm_settings_panelleft'] = 'Panel izquierdo';
$txt['pxm_settings_panelright'] = 'Panel derecho';
$txt['pxm_settings_paneltop'] = 'Panel central superior';
$txt['pxm_settings_panelbottom'] = 'Panel central inferior';
$txt['pxm_settings_panelfoot'] = 'Panel de pie';
$txt['pxm_settings_panelhidetitle'] = 'Ocultar panel en sección:';
$txt['pxm_settings_panel_customhide'] = 'Ocultar panel en acción:';
$txt['pxm_settings_panel_collapse'] = 'Deshabilitar contracción de panel:';
$txt['pxm_settings_panelwidth'] = 'Anchura del panel:';
$txt['pxm_settings_panelheight'] = 'Máxima altura del panel:';
$txt['pmx_pixel'] = 'Pixel';

$txt['pxm_settings_collapse_state'] = 'Estado del panel de entrada:';
$txt['pxm_settings_collapse_mode'] = array(
	0 => 'predeterminado',
	1 => 'contraído',
	2 => 'expandido');

$txt['pmx_hw_pixel'] = array(
	'head' => 'Pixel o dejar en blanco',
	'top' => 'Pixel o dejar en blanco',
	'bottom' => 'Pixel o dejar en blanco',
	'foot' => 'Pixel o dejar en blanco',
	'left' => 'Pixel',
	'right' => 'Pixel'
);

// frontpage
$txt['pxm_frontpage_settings'] = 'Opciones de la Página Principal';
$txt['pxm_settings_frontpage_none'] = 'Sin página principal, ir directamente al Foro:';
$txt['pxm_settings_frontpage_centered'] = 'Mostrar la página principal dentro del área del Foro:';
$txt['pxm_settings_frontpage_fullsize'] = 'Mostrar la página principal a tamaño completo:';
$txt['pxm_settings_pages_hidefront'] = 'Ocultar la Página principal en Páginas individuales:';
$txt['pxm_settings_frontpage_menubar'] = 'Habilitar barra de Menú en página principal a tamaño completo:';

// manager control
$txt['pxm_global_program'] = 'Configuración de control del Gestor de Bloques';
$txt['pxm_settings_blockfollow'] = 'Seguir al bloque a través de los paneles al hacer cambios:';
$txt['pxm_settings_quickedit'] = 'Mostrar un <b>enlace de edición rápida</b> en la barra de título del bloque:';
$txt['pxm_settings_edit_bbc'] = 'Usar el editor BBC para los bloques de descarga:';
$txt['pxm_settings_adminpages'] = 'Acceso a los <b>Paneles</b> como Admin para Moderadores:';

// help;
$txt['pmx_settings_noHS_onactionhelp'] = 'Aquí puedes definir acciones (separadas por coma), en las cuales el visor HighSlide se deshabilitará.
		Para <b>SMF Media Gallery</b> por ejemplo, escribe <b>mgallery</b>.';
$txt['pxm_frontpage_help'] = 'Selecciona la página principal que vas a utilizar.<br />'.
		'Nota, que la página principal a tamaño completo normalmente <b>no</b> tiene barra de Menú, pero puedes habilitar una pequeña barra de Menú.<br />
		Las Páginas individuales siempre se muestran, incluso si la Página principal está configurada como "sin Página principal".<br />
		Si necesitas un CSS adicional para la Página principal a tamaño completo, crea un archivo CSS (<b>frontpage.css</b>) y guárdalo en el directorio del tema.';
$txt['pmx_settings_adminpageshelp'] = 'Con esta opción un Moderador de PortaMx puede crear, editar, mover y eliminar cualquier bloque en los paneles seleccionados.
		El acceso de moderación específico para cada bloque se sobreescribe.<br /><b>Utiliza esta opción con cuidado!</b>';
$txt['pxm_settings_xbars_help'] = 'Selecciona los paneles que se podrán contraer o expandir con xBars.';
$txt['pxm_settings_collapse_vishelp'] = 'El panel se utiliza en la configuración de Bloques. Puedes contraerlo inicialmente, pero se mostrará siempre si el Bloque tiene opciones de visibilidad dinámica.';
$txt['pxm_settings_xbarkeys_help'] = 'Si están seleccionados, los paneles se podrán contraer o expandir con la <b>Tecla Ctrl</b> y la flecha de dirección (<b>izquierda, derecha, arriba, abajo</b>). Nota que <b>xBarKeys</b> está deshabilitado si el editor está cargado.';

// added 0.971
$txt['pxm_settings_blockcachestats'] = 'Mostrar el estado de caché PMX en el pie de página:';
$txt['pxm_settings_blockcachestatshelp'] = 'Si está habilitado el estado de caché PMX se muestra en el pie por encima de la carga de la página.';

// changed 0.980
$txt['pmx_settings_panel_custhelp'] = 'Aquí puedes indicar varias acciones, separadas por coma.<br />
		Para <b>Páginas individuales</b>, introduce el nombre de la página con una <b>p:</b> delante, por ejemplo <b>p:mipagina</b>.
		Puedes usar nombres con comodines <b>*</b> y <b>?</b>. En este caso el panel es invisible en todas las páginas o acciones, cuyo nombre coincide.<br />
		<b>Ejemplo</b>: "mipagina*" coincide con cualquier página/acción que empieza con <i>mipagina</i>, "mi?pagina" coincide con <i>mipagina, mi1pagina, mi.pagina</i> pero no <i>mi22pagina</i>';

$txt['pmx_settings_downloadhelp'] = 'Si está habilitada, un botón de <b>Descarga</b> se mostrará al lado del botón de <b>Foro</b>.';

// changed 0.980
$txt['pmx_settings_dl_actionhelp'] = 'Define la acción que se asignará al botón de Descarga.
		Puedes usar cualquier nombre con los caracteres (<b>a-z, A-Z, 0-9, -, _</b>). Para Páginas individuales tienes que añadir una <b>p:</b> delante del nombre por ejemplo <b>p:download</b>';

$txt['pmx_settings_blockfollowhelp'] = 'Si haces algún cambio en un bloque en la Vista General o mueves un bloque, la pantalla cambia al panel en el que se encuentra el bloque.';
$txt['pmx_settings_quickedithelp'] = 'Puedes habilitar un enlace directo a la <b>función editar</b> del Gestor de bloques.
		El enlace está asociado al <b>título de bloque</b> y está activo solamente para Admins y Moderadores que tienen acceso para editar un Bloque.';
$txt['pmx_settings_edit_bbchelp'] = 'Puedes utilizar el editor BBC de SMF BBC en lugar del editor WYSIWYG para descargar bloques.';

// changed 0.980
$txt['pxm_settings_pages_help'] = 'Indica los nombres de Páginas individuales separados por comas, para los que ocultarás los bloques de la Página principal.<br />
		Déjalo en blanco, si quieres ubicar el bloque de Página principal individualmente con las configuraciones de bloque.<br />
		Puedes usar nombres con comodines <b>*</b> y <b>?</b>. En este caso los bloques de Página principal son invisibles en todas las páginas, cuyo nombre coincide.<br />
		<b>Ejemplo</b>: "mipagina*" coincide con <i>mipagina</i> y con cualquier página que empieza con <i>mipagina</i>, "mi?pagina" coincide con <i>mipagina, mi1pagina, mi.pagina</i> pero no <i>mi22pagina</i>';

$txt['pmx_settings_forumscrollhelp'] = 'Si el área del foro es más ancha que el espacio entre el panel izquierdo y el derecho, normalmente el panel derecho se desplaza en la pantalla. 
		Si se elige esta opción, la sección del foro no se expande, pero se puede contraer horizontalmente.<br />
		<b>Nota, que esto no funcionará en IE menor que la versión 8.</b>';
$txt['pxm_settings_movecopyrighthelp'] = 'Selecciona los temas en los que mover el copyright de PortaMx debajo del copyright de SMF.';
$txt['pmx_settings_postcountacshelp'] = 'Usa los grupos de SMF basados en el número de Mensajes para el acceso a los bloques, además de los grupos Regulares.';

// changed 0.980
$txt['pmx_settings_hideadminacshelp'] = 'Si está seleccionada, el Admin solo puede ver los bloques que están habilitados para él, de lo contrario el Admin podrá ver todos los bloques.
	También se puede hacer de manera individual para cada bloque seleccionando <b>^Admin</b> en la configuración de grupos de acceso.';
?>