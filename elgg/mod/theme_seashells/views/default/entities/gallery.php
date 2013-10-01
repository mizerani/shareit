<?php
/**
 * Elgg gallery view
 *
 * @package Elgg
 * @subpackage Core
 */

$entities = $vars['entities'];
if (is_array($entities) && sizeof($entities) > 0) {

?>

<table class="entity_gallery">

<?php

	$col = 0;
	foreach($entities as $entity) {
		if ($col == 0) {

			echo "<tr>";

		}
		echo "<td class=\"entity_gallery_item\">";
		echo elgg_view_entity($entity);
		echo "</td>";
		$col++;
		
		if (get_plugin_setting('columnnumber', 'theme_seashells') == '3columns') {
			if ($col > 1) {
				echo "</tr>";
				$col = 0;
			}
                } elseif (get_plugin_setting('canvaswidth', 'theme_seashells') < 1065) {
                        if ($col > 2) {
				echo "</tr>";
				$col = 0;
			}
                } else {
			if ($col > 3) {
			echo "</tr>";
			$col = 0;
		}
	}
	}
	if ($col > 0) echo "</tr>";

?>

</table>

<?php

}