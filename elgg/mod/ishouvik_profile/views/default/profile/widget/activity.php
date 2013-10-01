<?php 

/**
 * Activity widget content view
 */
$num = 20;
$options = array(
	'limit' => $num,
	'pagination' => false,
);
$options['subject_guid'] = elgg_get_page_owner_guid();
$content = elgg_list_river($options);
if (!$content) {
	$content = elgg_echo('river:none');
}
echo $content;
?>
