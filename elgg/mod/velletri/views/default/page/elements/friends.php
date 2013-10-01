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

$owner = elgg_get_page_owner_entity();
$title = elgg_echo('Friends');
$num = 20;
$box_view = elgg_get_plugin_setting('view_riverbox', '');

if (elgg_instanceof($owner, 'user')) {
	$friend = $owner->listFriends('', $num, array(
		'size' => 'tiny',
		'pagination' => FALSE,
		'list_type' => 'gallery',
                'gallery_class' => 'elgg-gallery-users',
                'count' => TRUE
            ));
	if (($friend)&& ($friend >10)) {
		$river_body = $friend;
                $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.$vars["url"].'friends/'.$_SESSION['user']->username.'"><b>View More</b></a></p>';
	}else if (($friend) && ($friend <10)){
                $river_body = $friend;
                $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.$vars["url"].'members"><b>Add Friends</b></a></p>';
        }else {
            
            $river_body = elgg_echo ('You have no friends');
            $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.$vars["url"].'members"><b>Add Friends</b></a></p>';
        }
}
       
        echo elgg_view_module($box_view, $title, $river_body);
?>
</br>
</br>