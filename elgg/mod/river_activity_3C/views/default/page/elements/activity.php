<?php

$box_view = elgg_get_plugin_setting('view_riverbox', 'river_activity_3C');

$user = elgg_get_logged_in_user_entity();


$title = elgg_echo('river_activity_3C:activity');

$db_prefix = elgg_get_config('dbprefix');
$activities = elgg_get_river(array('limit'=> 5));

elgg_push_context('widgets');
$river_body = '';
if (is_array($activities)) {
	$river_body .= elgg_echo ('<ul class="shareit-activities">');
	foreach ($activities as $activity) {
		$li = elgg_view_list_item($activity, $vars);
		if ($li) {
			if (elgg_instanceof($activity)) {
				$id = "elgg-{$activity->getType()}-{$activity->getGUID()}";
			} else {
				$id = "acitivity-{$activity->getType()}-{$activity->id}";
			}
			$river_body .= elgg_echo ("<li id=\"$id\" class=\"$item_class\">$li</li>");
		}
	}
	$river_body .= elgg_echo ('</ul>');
}
elgg_pop_context();
                

echo elgg_view_module($box_view, $title, $river_body);
