<?php
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* FOOTER
	*/

	// get the tools menu
	$menu = get_register('menu');

?>

<div class="clearfloat"></div>
	<div id="layout_footer">
		<?php echo elgg_view('footer/links');?>
    	<?php echo get_plugin_setting('footercontent', 'theme_seashells'); ?>
		<div class="clearfloat"></div>
	</div>
</div>
<?php echo elgg_view('footer/analytics');?>
</body>
</html>