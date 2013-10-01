<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* GOOGLE ADS MODULE
	*/

?>
<div id="owner_block"> 
	<?php 
		$content = get_plugin_setting('googleads1content', 'theme_seashells');
		if ($content == '') {
			echo "Please add your adsense code in the theme settings";	
		} else {
			echo $content;
		}
	?>
</div>
