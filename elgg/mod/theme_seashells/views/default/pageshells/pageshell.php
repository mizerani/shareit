<?php

	/*
	*
	* Elgg pageshell
	* The standard HTML page shell that everything else fits into
	*
	* @package Elgg
	* @subpackage Core
	* @author Curverider Ltd
	* @link http://elgg.org/
	*
	* @uses	$vars['config'] The site configuration settings, imported
	* @uses	$vars['title'] The page title
	* @uses	$vars['body'] The main content of the page
	* @uses	$vars['messages'] A 2d array of various message registers, passed from system_messages()
	*
	* MODIFIED FOR SEASHELLS THEME
	*/
	
// Set the content type 
header("Content-type: text/html; charset=UTF-8");

// Set title
if (empty($vars['title'])) {
		$title = $vars['config']->sitename;
} else if (empty($vars['config']->sitename)) {
		$title = $vars['title'];
} else {
		$title = $vars['config']->sitename . ": " .	$vars['title'];
}
?>

<?php echo elgg_view('page_elements/header', $vars);  ?>

<!-- display horizontal menu-->
<?php echo elgg_view('page_elements/elgg_topbar', $vars); ?>

<!-- display any system messages -->
<?php echo elgg_view('messages/list', array('object' =>	$vars['sysmessages']));  ?>

<!-- SEASHELLS: display header with logo and right-side menu -->
<?php echo elgg_view('page_elements/header_contents', $vars); ?>

<!-- display horizontal menu-->
<?php echo elgg_view('page_elements/seashells_topbar', $vars); ?>


<!-- main contents -->
<!-- canvas -->
<div id="layout_canvas"> 
	<?php echo	$vars['body'];  ?>
	<div class="clearfloat"></div>
</div><!-- /#layout_canvas -->

<!-- Google Ads 2 -->
<?php 
	$googleads2position = get_plugin_setting('googleads2position', 'theme_seashells');
	if ($googleads2position !== 'off') {
		echo elgg_view('premium/google_ads2');
	}
?>

<!-- spotlight -->
<?php
	$displayspotlight = get_plugin_setting('displayspotlight', 'theme_seashells');
	if(isloggedin()){ 
		if ($displayspotlight !== 'off') {
			echo elgg_view('page_elements/spotlight', $vars);
		}
	}
?>
<div class="clearfloat"></div>

<!-- footer -->
<?php echo elgg_view('page_elements/footer', $vars); ?>
<div class="clearfloat"></div>