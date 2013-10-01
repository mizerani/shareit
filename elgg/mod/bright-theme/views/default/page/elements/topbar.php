<?php
/**
 * Elgg topbar
 * The standard elgg top toolbar
 */

$site = elgg_get_site_entity();
//$site_name = $site->name;
$site_url = elgg_get_site_url();
?>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		Share IT
	</a>
<?

elgg_unregister_menu_item('topbar', 'profile');
elgg_unregister_menu_item('topbar', 'logout');
elgg_unregister_menu_item('topbar', 'administration');
elgg_unregister_menu_item('topbar', 'usersettings');
elgg_unregister_menu_item('topbar', 'friends');
elgg_unregister_menu_item('topbar', 'messages');

 	$user = elgg_get_logged_in_user_entity();

if($user){
elgg_register_menu_item('topbar', array('name' => 'profile', 'href' => $user->getURL(), 'text' => elgg_view('output/img', array('src' => $user->getIconURL('topbar'), 'alt' => $user->name, 'title' => elgg_echo('profile'), 'class' => 'elgg-border-plain elgg-transition', )), 'priority' => 100, 'link_class' => 'elgg-topbar-avatar', 'section' => 'alt'));
	elgg_register_menu_item('topbar', array('name'=>'shares', 'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/share_topbar.png" title="Shares" >', 'href'=>'/activity', 'section' => 'alt'));
	elgg_register_menu_item('topbar', array('name'=>'groups', 'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/group_topbar.png" title="Groups" >', 'href'=>'/groups/all', 'section' => 'alt'));
	elgg_register_menu_item('topbar', array('name'=>'admin', 'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/admin.png" title="Administration" >', 'href'=>'/admin', 'section' => 'alt'));
	elgg_register_menu_item('topbar', array('name'=>'settings', 'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/settings.png" title="Settings" >', 'href'=>"/settings/user/$user->username", 'section' => 'alt'));

elgg_register_menu_item('topbar', array('name'=>'logout', 'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/door_out.png" title="Log Out" >', 'href'=>"/action/logout", 'section' => 'alt'));

}
// Elgg logo
echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));

// elgg tools menu
// need to echo this empty view for backward compatibility.
$content = elgg_view("navigation/topbar_tools");
if ($content) {
	elgg_deprecated_notice('navigation/topbar_tools was deprecated. Extend the topbar menus or the page/elements/topbar view directly', 1.8);
	echo $content;
}
