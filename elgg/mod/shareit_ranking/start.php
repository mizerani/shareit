<?php
/**
 * ShareIT Ranking plugin
 *
 */

elgg_register_event_handler('init', 'system', 'shareit_ranking_init');

function shareit_ranking_init() {
elgg_register_page_handler('shareit_ranking','shareit_ranking_page_handler');
	elgg_extend_view('css/elgg', 'likes/css');
	elgg_extend_view('js/elgg', 'likes/js');

}


//Função responsável pela manipulação do ranking
function shareit_update_ranking($guid, $score){

     	global $CONFIG;

     	$result = 1;
 
     	$entity_guid = (int)$guid;
      
     	$entity = get_entity($entity_guid);

     	$data = get_data("Select * from {$CONFIG->dbprefix}shareit_ranking where guid = $guid", "");
     
     	if(empty($data) != false){
     		$result = insert_data("INSERT into {$CONFIG->dbprefix}shareit_ranking
             	(guid, score) VALUES
             	($guid, score + $score)");
             	if($result == false) $result = true;
	}else{
		$result = update_data("Update {$CONFIG->dbprefix}shareit_ranking
             	set score = score + $score where guid = $guid");
	}
      
     	return $result;
}

//Função responsável pelo retorno de informações
function shareit_get_ranking($limit){
	global $CONFIG;
	return get_data("Select guid from {$CONFIG->dbprefix}shareit_ranking where score > 0 order by score desc limit $limit", "");
}
