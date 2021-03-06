<?php
/**
 * Group profile fields
 */

$group = $vars['entity'];
$owner = $group->getOwnerEntity();
$profile_fields = elgg_get_config('group');

if (is_array($profile_fields) && count($profile_fields) > 0) {

	$even_odd = 'odd';
	foreach ($profile_fields as $key => $valtype) {
		// do not show the name
		if ($key == 'name') {
			continue;
		}

		$value = $group->$key;
		if (empty($value)) {
			continue;
		}

		$options = array('value' => $group->$key);
		if ($valtype == 'tags') {
			$options['tag_names'] = $key;
		}

		echo "<div class=\"{$even_odd}\">";
		echo "<b>";
		echo elgg_echo("groups:$key");
		echo ": </b>";
		echo elgg_view("output/$valtype", $options);
		echo "</div>";

		$even_odd = ($even_odd == 'even') ? 'odd' : 'even';
	}
}
echo "<b>" . elgg_echo("groups:owner") . ": </b>";
echo elgg_view('output/url', array(
						'text' => $owner->name,
						'value' => $owner->getURL(),
						'is_trusted' => true,
					)) . "<br>";
echo elgg_echo('groups:members') . ": " . $group->getMembers(0, 0, TRUE);
