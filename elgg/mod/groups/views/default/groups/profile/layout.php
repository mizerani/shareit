<?php
/**
 * Layout of the groups profile page
 *
 * @uses $vars['entity']
 */

echo elgg_view('groups/profile/summary', $vars);
if (group_gatekeeper(false)) {
	echo elgg_view('groups/profile/activity_module', $vars);
} else {
	echo elgg_view('groups/profile/closed_membership');
}
