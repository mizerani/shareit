<?php
	
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* HEADER SETTINGS
	*/
	
	
	$displaylogo = get_plugin_setting('displaylogo', 'theme_seashells');

?>
<script>
	$(document).ready(function() {
		$('a.toggle_loginform').click( function() {
			$('div.headerloginform').toggle();
		});
		});
</script>

<div id="page_container">
	<div id="page_wrapper">
    	<div id="layout_header">
        	<div id="wrapper_header"> 
            	<div class="left-side">
					<?php if($displaylogo == 'no') { ?>
                    	<h1><a href="<?php echo	$vars['url']; ?>"><?php echo $vars['config']->sitename;  ?></a></h1><br />
                        <h2><a href="<?php echo	$vars['url']; ?>"><?php echo $vars['config']->sitedescription; ?></a></h2>
					<?php } else { ?>
                    	<h1><a href="<?php echo	$vars['url']; ?>"><img src="<?php echo $vars['url']; ?>mod/theme_seashells/graphics/logo.png"/></a></h1>
					<?php }?>
                </div>
                <div class="right-side">
                	<div class="floatright">
						<?php if(isloggedin()) { ?>
                        	<div class="uppermenuitem"> 
                            	<a href="<?php echo	$vars['url'];  ?>pg/dashboard/" class="parent">      	
                                    	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/dashboard.png"/><br />
										<?php echo elgg_echo('seashells:dashboard'); ?>
                                </a> 
                            </div>
							<?php 
								if(is_plugin_enabled('messages')) {
									if (count_unread_messages() > 0) { ?>
                                    	<div class="uppermenuitem">
                                        	<a href="<?php echo	$vars['url']; ?>pg/messages/inbox/<?php echo get_loggedin_user()->username; ?>">
                                                	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/mail_new.png"/><br />
													<?php echo elgg_echo('messages:inbox'); ?>                                  
                                            </a>
                                        </div>
									<?php } else { ?>
                                    	<div class="uppermenuitem">
                                        	<a href="<?php echo	$vars['url']; ?>pg/messages/inbox/<?php echo get_loggedin_user()->username; ?>">
                                                	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/mail.png"/><br />
													<?php echo elgg_echo('messages:inbox'); ?>								
											</a>
                                       </div>
								<?php }}?>
								<?php if (is_plugin_enabled('profile')) { ?>
                                	<div class="uppermenuitem"> 
                                    	<a href="<?php echo	$_SESSION['user']->getURL();  ?>">
                                            	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/profile.png"/><br />
												<?php echo elgg_echo('seashells:myprofile'); ?>
										</a> 
                                   	</div>
								<?php } ?>
                                <div class="uppermenuitem"> 
                                	<a href="<?php echo $vars['url'];  ?>pg/settings/" >
                                        	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/settings.png"/><br />
											<?php echo elgg_echo('settings');  ?>
                                    </a> 
                                </div>
								<?php // The administration link is for admin or site admin users only
									if ($vars['user']->isAdmin()) { ?>
                                    	<div class="uppermenuitem"> 
                                        	<a href="<?php echo	$vars['url']; ?>pg/admin/">
                                                	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/administration.png"/><br />
													<?php echo elgg_echo("admin"); ?>
                                             </a>
                                       	</div>
                                <?php } ?>
                                <div class="uppermenuitem"> 
                                	<a href="<?php echo $vars['url'] ?>action/logout">
                                    	<img src="<?php echo $vars['url'];  ?>mod/theme_seashells/graphics/logout.png" /><br />
										<?php echo elgg_echo('logout') ?>
                                    </a>
                                </div>
							<?php } else { ?>
                            	<div class="uppermenuitem"> 
                                	<a href="#" class="toggle_loginform">
                                    	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/login.png"/><br />
										<?php echo elgg_echo('login'); ?> 
                                    </a> 
                                </div>
                                <div class="headerloginform">
                                	<div class="uppermenuitem">
										<?php echo elgg_view('account/forms/login');?>
                                    </div>
                                </div>
                                <div class="uppermenuitem"> 
                                	<a href="<?php echo	$vars['url'] ?>pg/register/">
                                    	<img src="<?php echo $vars['url'] ?>mod/theme_seashells/graphics/register.png"/><br />
										<?php echo elgg_echo('register'); ?> 
                                    </a> 
                        	 
                           </div>
						<?php } ?>
					<div class="clearfloat"></div>
				</div>
            </div>
    	</div>
	</div>
</div>
