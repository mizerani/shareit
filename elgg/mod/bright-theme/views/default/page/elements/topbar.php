<?php
/**
 * Elgg topbar
 * The standard shareit top toolbar
 */

$site = elgg_get_site_entity();
//$site_name = $site->name;
$site_url = elgg_get_site_url();
echo '<table class = "shareit-topbar"> <tr>';
	//Adiciona logo
	echo '<td class = "shareit-topbar-logo" style = "width: 194px;">';
?>
		<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
			Share IT
		</a>
<?
	echo '</td>';
	if (elgg_is_logged_in()){ 
	//adciona caixa da ideia
	echo '<td class = "shareit-box" style = "width: 555px;">';
		echo elgg_view_form('thewire/add', $form_vars);
	echo '</td>';
	//Menu Dropdown
	elgg_register_menu_item('topbar', array(
			'href' => "#",
			'name' => 'account',
			'section' => 'alt',
			'text' => 'Options',
	));
} 
//desresgistra dados
elgg_unregister_menu_item('topbar', 'profile');
elgg_unregister_menu_item('topbar', 'logout');
elgg_unregister_menu_item('topbar', 'administration');
elgg_unregister_menu_item('topbar', 'usersettings');
elgg_unregister_menu_item('topbar', 'friends');
elgg_unregister_menu_item('topbar', 'messages');

 	$user = elgg_get_logged_in_user_entity();

if($user){

	//Profile
	elgg_register_menu_item('topbar', 
		array('name' => 'profile', 
		'href' => $user->getURL(), 
		'text' => elgg_view('output/img', array('src' => $user->getIconURL('topbar'), 'alt' => $user->name, 'title' => elgg_echo('profile'), 'class' => 'elgg-border-plain elgg-transition', )),
		'priority' => 100, 
		'link_class' => 'elgg-topbar-avatar', 
		'section' => 'alt')
	);
	
	//Shares
	elgg_register_menu_item('topbar', 
		array('name'=>'shares', 
		'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/shares.png" title="Shares" >', 
		'href'=>'thewire/all', 
		'section' => 'alt')
	);
	
	//Clãs
	elgg_register_menu_item('topbar', 
		array('name'=>'groups', 
		'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/group_topbar.png" title="Clãs" >', 
		'href'=>'/groups/all', 
		'section' => 'alt')
	);
	
	//Admin
	elgg_register_menu_item('topbar', 
		array('name'=>'admin', 
		'parent_name' => 'account', 
		'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/admin.png" title="Administration" > ' . elgg_echo('admin'), 
		'href'=>'/admin', 
		'section' => 'alt')
	);
	
	//Settings
	elgg_register_menu_item('topbar', 
		array('name'=>'settings', 
		'parent_name' => 'account', 
		'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/settings.png" title="Settings" > Settings', 
		'href'=>"/settings/user/$user->username", 
		'section' => 'alt')
	);

	//Logout
	elgg_register_menu_item('topbar', 
		array('name'=>'logout', 
		'parent_name' => 'account', 
		'text'=>'<img src="http://www.lecom.dcc.ufmg.br/shareit/elgg/mod/bright-theme/graphics/door_out.png" title="Log Out" >' . elgg_echo('logout'), 
		'href'=>"/action/logout", 
		'section' => 'alt')
	);

}
// Elgg logo
echo '<td>';
echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));
echo '</td>';
// elgg tools menu
// need to echo this empty view for backward compatibility.
$content = elgg_view("navigation/topbar_tools");
if ($content) {
	elgg_deprecated_notice('navigation/topbar_tools was deprecated. Extend the topbar menus or the page/elements/topbar view directly', 1.8);
	echo $content;
}
echo '<tr></table>';
