<?php
	
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* START PAGE
	*/

	// Initialise the theme
	elgg_register_event_handler('init','system','theme_seashells_init');
	function theme_seashells_init()	{
	
	register_plugin_hook('index','system','theme_seashells_index');
	
	// Extend core views
	// Limited version
	elgg_extend_view('page_elements', 'page_elements/indexarticle');
	elgg_extend_view('page_elements', 'page_elements/custom');
	elgg_extend_view('page_elements', 'page_elements/google_ads');
	elgg_extend_view('page_elements', 'page_elements/seashells_userdetails');
	elgg_extend_view('page_elements', 'page_elements/onlinenow');
	elgg_extend_view('page_elements', 'page_elements/upcomingevents');
	elgg_extend_view('canvas/layouts','canvas/layouts/left_modules_twocolumns');

	// Premium version
	elgg_extend_view('page_elements', 'premium/userpanel');
	elgg_extend_view('page_elements', 'premium/inboxmessages');
	elgg_extend_view('page_elements','premium/shortcuts');
	elgg_extend_view('page_elements', 'premium/custom2');
	elgg_extend_view('page_elements', 'premium/google_ads2');
	elgg_extend_view('page_elements','premium/left_modules');
	elgg_extend_view('page_elements','premium/right_modules');

	}

	// Check to see if Custom Index plugin is enabled. If not display theme's index
	function theme_seashells_index() {
		if (!is_plugin_enabled('custom_index')) {
			if (!include_once(dirname(__FILE__) . "/index.php")) return false;
			return true;
		}}

	include(dirname(__FILE__).'/views/default/settings/config.php');

?>
