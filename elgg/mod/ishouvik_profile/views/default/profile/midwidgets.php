<?php 
$tab = get_input('tab') ? get_input('tab') : '';
$params = array(
	'tabs' => array(
		  array('title' => elgg_echo('activity'), 'url' => "$url" . '?tab=activity', 'selected' => true && ($tab != 'messageboard') && ($tab != 'info')),
		  array('title' => elgg_echo('messageboard:board'), 'url' => "$url" . '?tab=messageboard', 'selected' => ($tab == 'messageboard')),
		  array('title' => elgg_echo('ishouvik:profile:info'), 'url' => "$url" . '?tab=info', 'selected' => ($tab == 'info')),
	)
);

echo elgg_view('navigation/tabs', $params);

switch($tab) {
    case 'info':
	echo elgg_view('profile/widget/info');
    break;
    case 'messageboard':
	    echo elgg_view('profile/widget/messageboard');
	    break;
    case 'activity':
    default:
	echo elgg_view('profile/widget/activity');
    break;
}

?>
