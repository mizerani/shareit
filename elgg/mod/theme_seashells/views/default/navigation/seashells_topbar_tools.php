<?php

	/*** Seashells Theme for Elgg 
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* HORIZONTAL MENU
	*/

	$menu = get_register('menu');

	//var_export($menu);
	if (is_array($menu) && sizeof($menu) > 0) {
		$alphamenu = array();
		foreach($menu as $item) {
			$alphamenu[$item->name] =	$item;
		}
		ksort($alphamenu);

		foreach($alphamenu as $item) {
			echo "<li><a href=\"{$item->value}\" class=\"parent\"><span><img src=\"" .	$vars['url'] . "mod/theme_seashells/graphics/" . $item->name . "_icon.png\" />" . $item->name . "</span></a></li>";
		}
	} else {
		echo "<li></li>";
	}
?>