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
		 
		 //Get Settings
		

										
						
						
						
						
$num = 10;
$title = elgg_echo('groups:widget:membership');
$box_view = elgg_get_plugin_setting('view_riverbox', '');

        $membership_groups = elgg_get_entities_from_relationship(array(
            'type' => 'group',
            "limit" => $num,
            'relationship' => 'member',
            'relationship_guid' => elgg_get_page_owner_guid(),
            "view_type_toggle" => false,
            'pagination' => FALSE
        ));

        if ($membership_groups) {
                elgg_push_context('widgets');
                $river_body = '';
                foreach ($membership_groups as $group) {
                        $river_body .= elgg_view_entity($group, array('full_view' => false));
                }
                elgg_pop_context();
                $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.$vars["url"].'groups/member/'.$_SESSION['user']->username.'"><b>View More</b></a></p>';
                echo elgg_view_module($box_view, $title, $river_body);

        }else {
           $river_body = elgg_echo ('No Recent Groups');
           echo elgg_view_module($box_view, $title, $river_body);
        } 

?>
</br>
</br>

