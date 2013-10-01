<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* CANVAS LAYOUT FOR SEASHELLS THEME
	* TWO/THREE COLUMN LAYOUT
	*/

	// Get plugin settings
	$columnnumber = get_plugin_setting('columnnumber', 'theme_seashells');
	$ownerblockposition = get_plugin_setting('ownerblockposition', 'theme_seashells');

        if (get_context() == 'profile') $columnnumber = '2columns';

        // Widgets
        

	if ($columnnumber == '2columns') {?>

        <!-- 2 COLUMN LAYOUT -->

    	<div id="two_column_left_sidebar">
    		<?php
	        	echo elgg_view('page_elements/owner_block',array('content' => $vars['area1']));
				if (isset($vars['area3'])) echo	$vars['area3'];

				echo elgg_view('canvas/layouts/left_modules_twocolumns');
			?>
	    </div>

	    <div id="two_column_left_sidebar_maincontent">
			<?php if (isset($vars['area2'])) echo $vars['area2']; ?>
	     </div>

    <?php } else { ?>

    	<!-- 3 COLUMN LAYOUT -->

        <div id="two_column_left_sidebar">
			<?php
				if ($ownerblockposition == 'left') {
					echo elgg_view('page_elements/owner_block',array('content' => $vars['area1']));
				}
				if (isset($vars['area3'])) echo	$vars['area3'];

				echo elgg_view('premium/left_modules');
			?>
		</div>

        <div id="three_column_maincontent">
			<?php
				if (isset($vars['area2'])) echo	$vars['area2'];
			?>
        </div>

        <div id="two_column_right_sidebar">
        	<?php
            	if ($ownerblockposition == 'right') {
					echo elgg_view('page_elements/owner_block',array('content' => $vars['area1']));
				}
				echo elgg_view("premium/right_modules");

				if (isset($vars['area4'])) echo	$vars['area4'];
				if (isset($vars['area5'])) echo	$vars['area5'];
			?>
        </div>

	<?php } ?>