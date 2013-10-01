<?php
/**
 * Button area for showing the add widgets panel
 */
?>
<div class="elgg-widget-add-control">
<?php
	echo elgg_view('output/url', array(
		'href' => '#widgets-add-panel',
		'text' => elgg_echo('widgets:add'),
		'class' => 'elgg-button elgg-button-action',
		'rel' => 'toggle',
		'is_trusted' => true,
	));
$user = elgg_get_page_owner_entity();
$menu = elgg_trigger_plugin_hook('register', "menu:user_hover", array('entity' => $user), array());
$builder = new ElggMenuBuilder($menu);
$menu = $builder->getMenu();
$actions = elgg_extract('action', $menu, array());
$profile_actions = '';
if (elgg_is_logged_in() && $actions) {

	foreach ($actions as $action) {
		$profile_actions .= $action->getContent(array('class' => 'elgg-button elgg-button-action'));
	}
}
echo <<<HTML
$profile_actions
HTML;
?>
</div>
