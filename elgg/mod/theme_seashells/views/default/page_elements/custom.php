<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* CUSTOM MODULE DISPLAY
	*/

?>

<div id="owner_block">
	<?php	
		$content = get_plugin_setting('custommodulecontent','theme_seashells');
		if ($content == '') {
			if (is_plugin_enabled('externalpages')) {
				echo elgg_view('expages/front_left');
			} else {
				echo "Please add content to your custom module in the theme settings or enable external pages";
			}
		} else {
			echo $content;
}
?>
</div>