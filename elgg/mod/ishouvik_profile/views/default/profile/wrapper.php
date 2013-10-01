<?php
/**
 * Left and middle column of the profile page
 */
$user = elgg_get_page_owner_entity();
?>
<div class="profile elgg-col-2of3">
	<div class="elgg-inner clearfix">
		<div class="ishouvik_profile_wrapper">
			<?php echo "<h2>{$user->name}</h2>"; ?>
			<?php echo elgg_view("profile/status", array("entity" => $user)); ?>
			<?php echo elgg_view('profile/midwidgets'); ?>
		</div> <!-- / ishouvik_profile_wrapper -->
		<?php echo elgg_view('profile/owner_block'); ?>
	</div> <!-- / .elgg-inner clearfix -->
</div> <!-- / .profile elgg-col-2of3 -->
