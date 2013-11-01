<?php
 /* Elgg pageshell
**
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']       The page title
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032
$topbar = elgg_view('page/elements/topbar', $vars);
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
$header = elgg_view('page/elements/header', $vars);
$body = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

// Set the content type
header("Content-type: text/html; charset=UTF-8");

$lang = get_current_language();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">

<head>
<?php echo elgg_view('page/elements/head', $vars); ?>

	<script type="text/javascript" >elgg.provide('elgg.topbar');

elgg.topbar.init = function() {
	// clicking the menu item always toggles the associated dropdown menu
	$('.elgg-menu-topbar .elgg-menu-parent').live('click', function(event) {
		$(this).toggleClass('elgg-menu-opened elgg-menu-closed').siblings().toggleClass('elgg-state-active');
		return false;
	});
	
	// also deactivate dropdown menus + menu items by clicking away
	$('body').live('click', function(event) {
		$('.elgg-menu-topbar .elgg-child-menu.elgg-state-active').each(function() {
			if ($(this).has(event.target).length == 0 && !$(this).is(event.target)) {
				$(this).removeClass('elgg-state-active')
					.siblings().removeClass('elgg-menu-opened').addClass('elgg-menu-closed');
			}
		});
	});
};

elgg.register_hook_handler('init', 'system', elgg.topbar.init);</script>
</head>
<body>
<div class="elgg-page elgg-page-default">
	
	
	<div class="elgg-page-topbar">
		<div class="elgg-inner">
			<?php echo $topbar; ?>
		</div>
	</div>
	
	<?php if (elgg_is_logged_in()){ ?>
	<div class="elgg-page-header">
		<div class="elgg-inner">
			<?php echo $header; ?>
		</div>
	</div>
	<?php } ?>
	<div class="elgg-page-messages">
		<?php echo $messages; ?>
	</div>
	
	<div class="elgg-page-body">
		<div class="elgg-inner">
			<?php echo $body; ?>
		</div>
	</div>
	<div class="elgg-page-footer">
		<div class="elgg-inner">
			<?php echo $footer; ?>
		</div>
	</div>
</div>
<?php echo elgg_view('page/elements/foot'); ?>
</body>
</html>
