<?php

if (elgg_is_active_plugin('shareit_ranking')) {

	$box_view = elgg_get_plugin_setting('view_riverbox', 'river_activity_3C');

	$user = elgg_get_logged_in_user_entity();


	$title = elgg_echo('river_activity_3C:ranking');

	$db_prefix = elgg_get_config('dbprefix');

	$ranking = shareit_get_ranking(5);
	$ideas = array();
	foreach($ranking as $idea_guid){
		foreach (get_object_vars($idea_guid) as $idea => $iguid){
			$ideas[] = get_entity((int) $iguid);	
		}
	}

	elgg_push_context('widgets');
	$river_body = '';
	if (is_array($ideas)) {
		$river_body .= elgg_echo ('<ul class="shareit-ranking">');
		foreach ($ideas as $idea) {
			$li = elgg_view_list_item($idea, $vars);
			if ($li) {
				if (elgg_instanceof($idea)) {
					$id = "elgg-{$idea->getType()}-{$idea->getGUID()}";
				} else {
					$id = "ranking-{$idea->getType()}-{$idea->id}";
				}
				$river_body .= elgg_echo ("<li id=\"$id\" class=\"$item_class\">$li</li>");
			}
		}
		$river_body .= elgg_echo ('</ul>');
	}
	elgg_pop_context();
                $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.elgg_get_site_url().'thewire/ranking"><b>'.elgg_echo('river_activity_3C:viewmore').'</b></a></p>';

	echo elgg_view_module($box_view, $title, $river_body);
}
