<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

// link back to main site.
echo '<table class = "shareit-header"> 
	<tr> 
		<td>';
			echo elgg_view('page/elements/header_logo', $vars);
echo '		</td>
		<td>';
echo elgg_view('search/search_box', array('class' => 'elgg-search-header'));
echo '		</td>
	</tr>
      </table>';
// insert site-wide navigation
echo elgg_view_menu('site');
