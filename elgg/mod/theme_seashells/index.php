<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* INDEX PAGE
	*/ 

	// Get the Elgg engine 
	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

	set_context('search');	
	$offset = (int)get_input('offset', 0);	

	// Check what to display on the index (stream or widgets)
	$indexdisplay = get_plugin_setting('indexdisplay', 'theme_seashells');
	if ($indexdisplay == 'river') {

		// Regular latest activity display	
		$body = elgg_list_registered_entities(array('limit' => 10, 'offset' => $offset, 'full_view' => FALSE, 'allowed_types' => array('object','group')));	
		$title = elgg_view_title(elgg_echo('content:latest'));
	
	} elseif ($indexdisplay == 'widgets') {

		// Custom index type (widgets) latest activity display
		// Blogs widget
		$blogs = elgg_list_entities(array('type' => 'object', 'subtype' => 'blog', 'limit' => 4, 'full_view' => FALSE, 'view_type_toggle' => FALSE, 'pagination' => FALSE));	
		if (is_plugin_enabled('blog') && !empty($blogs)) {
			$body .= "<div id=\"index_welcome\"><h2>" . elgg_echo('seashells:index:blogs') . "</h2>". $blogs . "</div>";
 		}
	
		// Bookmarks widget
		$bookmarks = elgg_list_entities(array('type' => 'object', 'subtype' => 'bookmarks', 'limit' => 4, 'full_view' => FALSE, 'view_type_toggle' => FALSE, 'pagination' => FALSE));	
		if (is_plugin_enabled('bookmarks') && !empty($bookmarks)) {
			$body .= "<div id=\"index_welcome\"><h2>" . elgg_echo('seashells:index:bookmarks') . "</h2>". $bookmarks . "</div>";
		 }

		// Files widget
		$files = elgg_list_entities(array('type' => 'object', 'subtype' => 'file', 'limit' => 4, 'full_view' => FALSE, 'view_type_toggle' => FALSE, 'pagination' => FALSE));
		if (is_plugin_enabled('files') && !empty($files)) {	
			$body .= "<div id=\"index_welcome\"><h2>" . elgg_echo('seashells:index:files') . "</h2>". $files . "</div>";
		}

		// Newest members widget
		$newest_members = elgg_get_entities_from_metadata(array('metadata_names' => 'icontime', 'types' => 'user', 'limit' => 10));	
		foreach($newest_members as $members){
			$memberstodisplay .= "<div class=\"index_members\">";	
			$memberstodisplay .= elgg_view("profile/icon",array('entity' =>	$members, 'size' => 'small'));	
			$memberstodisplay .= "</div>";
		}
		if (!empty($memberstodisplay)) {
			$body .= "<div id=\"index_welcome\"><h2>" . elgg_echo('seashells:index:members') . "</h2><div class=\"contentWrapper\">" . $memberstodisplay . "</div><div class=\"clearfloat\"></div></div>";
 		}

		// Groups widget
		$groups = elgg_list_entities(array(type => 'group', 'limit' => 4, 'full_view' => FALSE, 'view_type_toggle' => FALSE, 'pagination' => FALSE));	
		if (is_plugin_enabled('groups') && !empty($groups)) {
			$body .= "<div id=\"index_welcome\"><h2>" . elgg_echo('seashells:index:groups') . "</h2>". $groups . "</div>";
 		}

                $body = trigger_plugin_hook('seashells:index:widget', 'all', array('current_widgets' => $body), $body);

	} elseif ($indexdisplay == 'custom'){
			$body = elgg_view('page_elements/indexarticle');
	} // End of indexdisplay check

        $body = trigger_plugin_hook('seashells:index:overload', 'all', array('current_content' => $body), $body);
        
	set_context('main');
	global $autofeed;	
	$autofeed = FALSE;	
	
	$body = elgg_view_layout('two_column_left_sidebar', '',	$title . $body,	$area3,	$area4,	$area5);

	page_draw(null,	$body);

?>