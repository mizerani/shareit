<?php
	/**
	 * Mothers day theme for Elgg
	 * @package: Mothers day theme for Elgg
	 * @license: GPLV2
	 * @author Dr Sanu P Moideen for Team Webgalli
	 * @copyright Team Webgalli
	 * @link www.Webgalli.com
	 */
     if (isloggedin()) {
?>

<div id="elgg_topbar">

<div id="elgg_topbar_container_left">
	<div class="toolbarimages">
		<a href="http://www.elgg.org" target="_blank"><img src="<?php echo $vars['url']; ?>mod/ThemeFarmOrkut/graphics/elgg.png" /></a>
		
		<a href="<?php echo $_SESSION['user']->getURL(); ?>"><img class="user_mini_avatar" src="<?php echo $_SESSION['user']->getIcon('topbar'); ?>"></a>
		
	</div>
	<div class="toolbarlinks">
		<a href="<?php echo $vars['url']; ?>pg/dashboard/" class="pagelinks"><?php echo elgg_echo('dashboard'); ?></a>
	</div>
        <?php

	        echo elgg_view("navigation/topbar_tools");

        ?>
        	
        	
        <div class="toolbarlinks2">		
		<?php
		//allow people to extend this top menu
		echo elgg_view('elgg_topbar/extend', $vars);
		?>
		
		<a href="<?php echo $vars['url']; ?>pg/settings/" class="usersettings"><?php echo elgg_echo('settings'); ?></a>
		
		<?php
		
			// The administration link is for admin or site admin users only
			if ($vars['user']->admin || $vars['user']->siteadmin) { 
		
		?>
		
			<a href="<?php echo $vars['url']; ?>pg/admin/" class="usersettings"><?php echo elgg_echo("admin"); ?></a>
		
		<?php
		
				}
		
		?>
	</div>


</div>


<div id="elgg_topbar_container_right">
		<small>
			<?php echo elgg_view('output/url', array('href' => "{$vars['url']}action/logout", 'text' => elgg_echo('logout'), 'is_action' => TRUE)); ?>
		</small>
</div>

<div id="elgg_topbar_container_search">
<?php echo elgg_view('page_elements/searchbox'); ?>
</div>

</div><!-- /#elgg_topbar -->

<div class="clearfloat"></div>

<?php
    } else {
?>
<div id="elgg_topbar">

<div id="elgg_topbar_container_left">
	<div class="toolbarimages">
	</div>
        		<div class="toolbarlinks">
		<a href="#" class="pagelinks"><?php echo elgg_echo('Welcome Guest'); ?></a>
	</div>
</div>
<div id="elgg_topbar_container_reg">
		<a href="<?php echo $vars['url']; ?>account/register.php"><small><?php echo elgg_echo('Register Now'); ?></small></a>
</div>
<div id="elgg_topbar_container_search">
<?php echo elgg_view('page_elements/searchbox'); ?>
</div>
</div>
<!-- /#topbar -->
<div class="clearfloat"></div>
<?php
	}
?>
