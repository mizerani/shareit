<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* SEARCHBOX WITHOUT A BUTTON
	*/
	
	if (array_key_exists('value', $vars)) {
		$value = $vars['value'];
	} elseif ($value = get_input('q', get_input('tag', NULL))) {
		$value = $value;
	} else {
		$value = elgg_echo('search');
	}
	
	$value = stripslashes($value);
?>
<span>
	<form id="searchform" action="<?php echo $vars['url'];  ?>pg/search/" method="get">
    	<input type="text" size="21" name="q" value="<?php echo	$value;  ?>" onclick="if (this.value=='<?php echo elgg_echo('search');
 ?>') { this.value='' }" class="search_input" />
 	</form>
</span> 