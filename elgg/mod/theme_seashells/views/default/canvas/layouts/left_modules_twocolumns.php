<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* CANVAS LAYOUT FOR SEASHELLS THEME
	* LEFT COLUMN MODULES
	*/
	
	$plugin = 'theme_seashells';
	
	//Get plugin settings
	$custommoduleposition = get_plugin_setting('custommoduleposition', $plugin);	
	$custommodulecontent = get_plugin_setting('custommodulecontent', $plugin);	
	$sitemessage = get_plugin_setting('sitemessage', $plugin);	
	$googleads1position = get_plugin_setting('googleads1position', $plugin);	
	$onlinenowposition = get_plugin_setting('onlinenowposition', $plugin);	
	$latesteventsposition = get_plugin_setting('latesteventsposition', $plugin);	
	$custommodule2position = get_plugin_setting('custommodule2position', $plugin);

	//Custom module display
	if ($custommoduleposition !== 'off') {
		echo elgg_view('page_elements/custom');
	}

	//Site message module
	if (isloggedin() && is_plugin_enabled('riverdashboard')) {
		if ($sitemessage !== 'off') {
			echo "<div id=\"owner_block\">".elgg_view('riverdashboard/sitemessage')."</div>";
	}}

	//Google Ads 1 Module
	if ($googleads1position !== 'off') {
		echo elgg_view('page_elements/google_ads');
	}

	//Online Users Module
	if ($onlinenowposition !== 'off' && is_plugin_enabled('members')) {
		echo elgg_view("page_elements/onlinenow");
	}

	//Latest Events Module
	if ($latesteventsposition !== 'off' && is_plugin_enabled('event_calendar')) {
		echo elgg_view("page_elements/upcomingevents");
	}

	//Custom module display
	if ($custommodule2position !== 'off') {
		echo elgg_view("premium/custom2");
	}
?>