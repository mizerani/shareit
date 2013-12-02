<?php
/**
 * Shares Ranked posts
 * 
 */

if (elgg_is_active_plugin('shareit_ranking')){

	elgg_push_breadcrumb(elgg_echo('thewire'));

	$title = elgg_echo('thewire:ranking');

	//Seleciona os 15 melhores
	$ranking = shareit_get_ranking(15);
	$ideas = array();
	foreach($ranking as $idea_guid){
		foreach (get_object_vars($idea_guid) as $idea => $iguid){
			$ideas[] = get_entity((int) $iguid);	
		}
	}

	$content = elgg_view('page/components/list', array('items' => $ideas));

	$body = elgg_view_layout('content', array(
		'filter_context' => 'ranking',
		'content' => $content,
		'title' => $title,
		'sidebar' => elgg_view('thewire/sidebar'),
	));

	echo elgg_view_page($title, $body);
}
