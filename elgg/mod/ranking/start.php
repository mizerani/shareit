<?php
/**
 * ShareIT Ranking plugin
 *
 */

elgg_register_event_handler('init', 'system', 'shareit_ranking_init');

function shareit_ranking_init() {

	elgg_extend_view('css/elgg', 'likes/css');
	elgg_extend_view('js/elgg', 'likes/js');

	// registered with priority < 500 so other plugins can remove likes
}

function shareit_ranking_compute($hook, $type, $return, $params){

	$ideas = $elgg_list_entities(array(
		'type' => 'object',
		'subtype' => 'thewire',
		'limit' => 0,
	));

	foreach($ideas as $idea){
		likes_count($idea['entitiy']);
	}

}
