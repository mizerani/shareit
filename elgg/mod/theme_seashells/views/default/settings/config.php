<?php
	
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* DEFAULT THEME SETTINGS
	*/

	$plugin = "theme_seashells";
	
	$columnnumber = get_plugin_setting('columnnumber', $plugin);
	if ($columnnumber == '') (set_plugin_setting('columnnumber', '2columns', $plugin));
	
	$displaylogo = get_plugin_setting('displaylogo', $plugin);
	if ($displaylogo == '') (set_plugin_setting('displaylogo', 'no', $plugin));
	
	$ownerblockposition = get_plugin_setting('ownerblockposition', $plugin);
	if ($ownerblockposition == '') (set_plugin_setting('ownerblockposition', 'left', $plugin));
	
	$indexdisplay = get_plugin_setting('indexdisplay', $plugin);
	if ($indexdisplay == '') (set_plugin_setting('indexdisplay', 'river', $plugin));
	
	$custommoduleposition = get_plugin_setting('custommoduleposition', $plugin);
	if ($custommoduleposition == '') (set_plugin_setting('custommoduleposition', 'off', $plugin));	

	$donate = '';	
	$custommodulecontent = get_plugin_setting('custommodulecontent', $plugin);
	if ($custommodulecontent == '') (set_plugin_setting('custommodulecontent', $donate, $plugin));	

	$sitemessage = get_plugin_setting('sitemessage', $plugin);
	if ($sitemessage == '') (set_plugin_setting('sitemessage', 'off', $plugin));	

	$googleads1position = get_plugin_setting('googleads1position', $plugin);
	if ($googleads1position == '') (set_plugin_setting('googleads1position', 'off', $plugin));	

	$googleads1 = '';
	$googleads1content = get_plugin_setting('googleads1content', $plugin);
	if ($googleads1content == '') (set_plugin_setting('googleads1content', $googleads1, $plugin));	
	
	$googleads2position = get_plugin_setting('googleads2position', $plugin);
	if ($googleads2position == '') (set_plugin_setting('googleads2position', 'off', $plugin));	

	$displayspotlight = get_plugin_setting('displayspotlight', $plugin);
	if ($displayspotlight == '') (set_plugin_setting('displayspotlight', 'off', $plugin));	
	
	$onlinenowposition = get_plugin_setting('onlinenowposition', $plugin);
	if ($onlinenowposition == '') (set_plugin_setting('onlinenowposition', 'off', $plugin));	

	$latesteventsposition = get_plugin_setting('latesteventsposition', $plugin);
	if ($latesteventsposition == '') (set_plugin_setting('latesteventposition', 'off', $plugin));	

	$custommodule2position = get_plugin_setting('custommodule2position', $plugin);
	if ($custommodule2position == '') (set_plugin_setting('custommodule2position', 'off', $plugin));	

	$headerwidth = get_plugin_setting('headerwidth', $plugin);
	if ($headerwidth == '') (set_plugin_setting('headerwidth', '980', $plugin));

	$canvaswidth = get_plugin_setting('canvaswidth', $plugin);
	if ($canvaswidth == '') (set_plugin_setting('canvaswidth', '980', $plugin));

	$pagebg = get_plugin_setting('pagebg', $plugin);
	if ($pagebg == '') (set_plugin_setting('pagebg', '#FFFFFF', $plugin));	

	$maincolor = get_plugin_setting('maincolor', $plugin);
	if ($maincolor == '') (set_plugin_setting('maincolor', '#00539F', $plugin));	
	
	$canvasbg = get_plugin_setting('canvasbg', $plugin);
	if ($canvasbg == '') (set_plugin_setting('canvasbg', '#F4F4F4', $plugin));	

	$midbg = get_plugin_setting('midbg', $plugin);
	if ($midbg == '') (set_plugin_setting('midbg', '#E8E8E8', $plugin));

        $elgg_topbar = get_plugin_setting('elgg_topbar', $plugin);
	if ($elgg_topbar == '') (set_plugin_setting('elgg_topbar', 'off', $plugin));

        $elgg_default_profile = get_plugin_setting('elgg_default_profile', $plugin);
	if ($elgg_default_profile == '') (set_plugin_setting('elgg_default_profile', 'seashells', $plugin));

        $disable_topbar = get_plugin_setting('disable_topbar', $plugin);
	if ($disable_topbar == '') (set_plugin_setting('disable_topbar', 'no', $plugin));

        $strseashells = "<p class=\"footer_legal_links\"><a href=\"http://www.elgg.org\" class=\"footer_elgg_img\" target=\"_blank\">Powered by Elgg</a></p><p class=\"footer_legal_links\">Seashells Elgg Theme (c) 2011, GNU Public License v2<br />Theme by <a href=\"mailto:ismayil.khayredinov@gmail.com\">Ismayil Khayredinov</a></p>";
	
	$footercontent = get_plugin_setting('footercontent', $plugin);
	if ($footercontent == '') (set_plugin_setting('footercontent', $strseashells, $plugin));
	
?>