<?php

	/**
	 * Mothers day theme for Elgg
	 * @package: Mothers day theme for Elgg
	 * @license: GPLV2
	 * @author Dr Sanu P Moideen for Team Webgalli
	 * @copyright Team Webgalli
	 * @link www.Webgalli.com
	 */

 
    function webgalli_mothersday_theme_init()
    {
			extend_view('metatags','webgalli_mothersday_theme/metatags');
    }
 
    register_elgg_event_handler('init','system','webgalli_mothersday_theme_init');
 
?>