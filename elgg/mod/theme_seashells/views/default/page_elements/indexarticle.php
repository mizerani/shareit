<?php	
	
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* CUSTOM ARTICLE ON THE INDEX PAGE
	*/
	
	$content = get_plugin_setting('indexarticlecontent','theme_seashells');
	
	if ($content !== '') {
		echo $content;
	} else {
		echo "Please add your custom article content in the theme settings";	
	}

?>