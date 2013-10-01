<?php
	elgg_register_event_handler('init','system','ishouvik_profile_init');

function ishouvik_profile_init() {
	//extend some views
	elgg_extend_view('css/elgg', 'css/ishouvik_profile/css');

	// unregistering widgets from profile
	elgg_unregister_widget_type('messageboard', elgg_echo("messageboard:board"), elgg_echo("messageboard:desc"), "profile");
	elgg_unregister_widget_type('river_widget', elgg_echo('river:widget:title'), elgg_echo('river:widget:description'));

}		

