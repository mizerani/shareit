<?php
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* ONLINE NOW MODULE
	*/

	$onlineusers = find_active_users(600,30);	
	$totalonline = count($onlineusers);
	
?>
<?php
	if (is_plugin_enabled('members')) { ?>
		<div id="owner_block">
		<h2><?php echo elgg_echo('seashells:onlineusers');?></h2>
		<?php if($totalonline > 0){
			echo "<div class=\"membersWrapper\">";
			foreach($onlineusers as $user){
				echo "<div class=\"member_icon\">";
				echo elgg_view("profile/icon",array(
					'entity' =>	$user, 
					'size' => 'small')) . "</div>";
			} 
			echo "</div>";
		} else {
			echo elgg_echo('seashells:noonlineuser');
		} ?>
	   <div class="clearfloat"></div></div>     
	<?php } ?>