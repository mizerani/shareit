<?php
elgg_register_event_handler('init', 'system', 'shareit_theme_init');

function shareit_theme_init() {
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	elgg_register_plugin_hook_handler('register', 'menu:river', 'shareit_river_menu_setup');
	elgg_register_plugin_hook_handler('index', 'system', 'shareit_index_handler');
}

function shareit_river_menu_setup($hook, $type, $return, $params) {
	if (elgg_is_logged_in()) {
		$item = $params['item'];
		/* @var ElggRiverItem $item */
		$object = $item->getObjectEntity();
		// comments and non-objects cannot be commented on or liked
		if (!elgg_in_context('widgets') && $item->annotation_id == 0) {
			// comments
			if ($object->canComment()) {
				$options = array(
					'name' => 'comment',
					'href' => "#comments-add-$object->guid",
					'text' => elgg_view_icon('speech-bubble'),
					'title' => elgg_echo('comment:this'),
					'rel' => 'toggle',
					'priority' => 50,
				);
				$return[] = ElggMenuItem::factory($options);
			}
		}
		
		if (elgg_is_admin_logged_in()) {
			$options = array(
				'name' => 'delete',
				'href' => elgg_add_action_tokens_to_url("action/river/delete?id=$item->id"),
				'text' => '<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/delete.png">',
				'title' => elgg_echo('delete'),
				'confirm' => elgg_echo('deleteconfirm'),
				'priority' => 200,
			);
			$return[] = ElggMenuItem::factory($options);
		}
	}

	return $return;
}

function shareit_index_handler() {
	if (elgg_is_logged_in()) {
		forward('/thewire/all');
	}
}

?>
