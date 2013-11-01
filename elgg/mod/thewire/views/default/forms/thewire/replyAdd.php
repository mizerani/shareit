<?php
/**
 * Wire add form body
 *
 * @uses $vars['post']
 */

elgg_load_js('elgg.thewire');

$post = elgg_extract('post', $vars);

$text = elgg_echo('Share');
if ($post) {
	$text = elgg_echo('thewire:reply');
}

if ($post) {
	echo elgg_view('input/hidden', array(
		'name' => 'parent_guid',
		'value' => $post->guid,
	));
}

echo elgg_view('input/plaintext', array(
	'name' => 'body',
	'class' => 'mtm',
	'id' => 'thewire-textarea',
	'style' =>'margin-top: 0px;'
));
?>
<div id="thewire-characters-remaining">
	<span>140</span> <?php echo elgg_echo('thewire:charleft'); ?>
</div>
<div class="elgg-foot mts" style="
    margin-top: 0px;"
>
<?php

//echo elgg_view('input/submit', array(
//	'value' => 'Explain...',
//	'id' => 'thewire-submit-button',
//));

echo elgg_view('input/submit', array(
	'value' => 'Share',
	'id' => 'thewire-submit-button',
));

?>
</div>
