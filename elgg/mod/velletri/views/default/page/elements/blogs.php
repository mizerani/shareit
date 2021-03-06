<?php 
	/*
	 * 3 Column River Acitivity
	 *
	 * @package ElggRiverDash
	 * Full Creadit goes to ELGG Core Team for creating a beautiful social networking script
	 *
         * Modified by Satheesh PM, BARC, Mumbai, India..
         * http://satheesh.anushaktinagar.net
         *
	 * @author ColdTrick IT Solutions
	 * @copyright Coldtrick IT Solutions 2009
	 * @link http://www.coldtrick.com/
	 * @version 1.0
         *
         */

?>

<?php
        $title = elgg_echo('Blogs');
	$num =  4;
        $box_view = elgg_get_plugin_setting('view_riverbox', '');
        
	$latest_blogs = elgg_get_entities_from_metadata(array(
		"type" => "object",
		"subtype" => "blog",
                "limit" => $num,
		"full_view" => false,
		"pagination" => false,
		"view_type_toggle" => false
        ));
	
        if ($latest_blogs) {
                elgg_push_context('widgets');
                $river_body = '';
                foreach ($latest_blogs as $latest_blog) {
                        $river_body .= elgg_view_entity($latest_blog, array('full_view' => false));
                }
                elgg_pop_context();
                $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.$vars["url"].'blog/all"><b>View More</b></a></p>';
                echo elgg_view_module($box_view, $title, $river_body);

        }else {
            $river_body = elgg_echo ('No Blogs');
            echo elgg_view_module($box_view, $title, $river_body);
        }
        
?>
