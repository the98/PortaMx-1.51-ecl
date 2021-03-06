<?php
/**
* \file PortaMx.template.php
* Main template for the Frontpage.
*
* \author PortaMx - Portal Management Extension
* \author Copyright 2008-2012 by PortaMx - http://portamx.com
* \version 1.51
* \date 31.08.2012
*/

/**
* The main template for frontpage and Page blocks.
*/
function template_main()
{
	global $context, $options, $txt;

	if(!empty($context['pmx']['show_pagespanel']))
	{
		$placed = 0;
		if(isset($context['pmx']['viewblocks']['front']))
		{
			$spacer = intval(!empty($context['pmx']['show_pagespanel']));
			$placed = PortaMx_ShowBlocks('front', $spacer, 'before');

			$spacer = intval(count($context['pmx']['viewblocks']['front'])) > $placed;
			PortaMx_ShowBlocks('pages', $spacer);

			PortaMx_ShowBlocks('front', 0, 'after');
		}
		else
			PortaMx_ShowBlocks('pages');
	}
	else
		PortaMx_ShowBlocks('front');
}
?>
