<?php
/**
* \file EclNoneModal.template.php
* Template for none modal ecl accept.
*
* \author PortaMx - Portal Management Extension
* \author Copyright 2008-2012 by PortaMx - http://portamx.com
* \version 1.51
* \date 31.08.2012
*/
function template_eclnonemodal_above()
{
	global $context, $modSettings, $scripturl, $settings, $language, $cookiename, $txt;

	echo '
	<div id="ecl_outer">';

	$currlang = !empty($_GET['language']) ? $_GET['language'] : $language;
	if(empty($modSettings['pmxportal_disabled']) && isset($context['pmx']['languages']) && count($context['pmx']['languages']) > 1)
	{
		echo '
		<div style="float:right;">'. $txt['pmxelc_lang'] .'&nbsp;
			<select size="1" name="" onchange="Setlang(this)">';

		foreach($context['pmx']['languages'] as $lang => $sel)
			echo '
				<option value="'. $scripturl .'?language='. $lang .'"'. (!empty($sel) ? ' selected="selected"' : '') .'>'. $lang .'</option>';

		echo '
			</select>
		</div>';
	}

	echo '
			'. $txt['pmxelc_needAccept'] .'
		<div style="padding-top:5px;">
			<input type="button" name="accept" value="'. $txt['pmxelc_button'] .'" title="'. $txt['pmxelc_button_ttl'] .'" onclick="pmx_seteclcook(\'ecl_auth\', 1);window.location.reload()" />&nbsp;
			'. $txt['pmxelc_modal'] .'
			<input style="float:right;" type="button" name="accept" value="'. $txt['pmxelc_privacy'] .'" title="'. $txt['pmxelc_privacy_ttl'] .'" onclick="pmx_showprivacy()" />
		</div>
		<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
			function pmx_showprivacy()
			{
				if(document.getElementById("ecl_privacy"))
				{
					document.getElementById("ecl_privacy").style.top = document.getElementById("ecl_outer").offsetHeight + "px";
					document.getElementById("ecl_privacy").style.display = document.getElementById("ecl_privacy").style.display == "" ? "none" : "";
				}
			}
		// ]]></script>
		<div id="ecl_privacy" style="display:none;">
			<hr />';

	$privacyfile = $settings['default_theme_dir'] .'/languages/PortaMx/ecl_privacynotice.'. $currlang .'.php';
	if(file_exists($privacyfile))
		echo '
			<div>'. str_replace('@host@', $_SERVER['SERVER_NAME'], str_replace('@cookie@', $cookiename, file_get_contents($privacyfile))) .'</div>';
	else
		echo '
			<div>'. $txt['pmxelc_privacy_failed'] .'</div>';

	echo '
		</div>
	</div>';
}

function template_eclnonemodal_below(){}
?>