<?php
	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* THEME CONFIGURATION/SETTINGS PAGE
	*/

	$plugin = 'theme_seashells';
	
//	$defaults = "/defaults.php";	
	$premium = "/premium/premium.php";
//	include(dirname(__FILE__) . $defaults);
	include(dirname(dirname(dirname(__FILE__))) . $premium);	

	$columnnumber_label = 'Select theme layout (number of columns). Save settings after changing the layout to see additional theming options';	
	$displaylogo_label = 'Display logo (or sitename). The logo needs to be placed in the graphics folder with a name logo.png';	
	$indexdisplay_label = 'Style of the latest activity';
	$indexarticlecontent_label = 'Content of the custom article';	
	$custommoduleposition_label = 'Position of the 1st Custom Module';	
	$custommodulecontent_label = 'Content of the 1st Custom Module. Examples may include PayPal Donations, Facebook widgets etc. If nothing is specified, Left External Page will be displayed';	
	$sitemessage_label = 'Display site announcements module';	
	$googleads1position_label = 'Google Ads (sidebar) position';	
	$googleads1content_label = 'Google Adsense Code';	
	$googleads2position_label = 'Google Ads (spotlight)';	
	$googleads2content_label = 'Google Adsense Code';	
	$onlinenowposition_label = 'Display online now module';	
	$latesteventsposition_label = 'Display latest events module';	
	$custommodule2position_label = 'Custom module 2 position';	
	$custommodule2content_label = 'Content of the custom module. Examples may include PayPal Donations, Facebook widgets etc. If nothing is specified, External Right Page will be displayed';	
	$displayspotlight_label = 'Hide spotlight';	
	$spotlightcontent_label = 'Edit default spotlight';
	$headerwidth_label = 'Header and menu bar width (default and minimum is 890)';	
	$canvaswidth_label = 'Canvas width (default and minimum is 890)';	
	$pagebg_label = 'Page background color (default is #FFFFFF)';	
	$maincolor_label = 'Main (dark) color (default is #00539F)';	
	$canvasbg_label = 'Canvas background (light) color (default is #F4F4F4)';	
	$midbg_label = 'Additional accessory color color (default is #E8E8E8)';	
	$footercontent_label = "Replace footer contents";
        $elgg_topbar_label = 'Display Elgg\'s native topbar';
        $elgg_default_profile_label = 'Enable Elgg\'s default profile & widgets view (such views may not always be compatible with the functionalities of the Seashells theme, inclusive of the fluid width)';
        $disable_topbar_label = 'Disable vertical tools menu?';
	
	// Site name logo/text	
	$displaylogo = elgg_view('input/radio', array(
		'internalname' => 'params[displaylogo]',
		'value' => $vars['entity']->displaylogo,
		'options' => array('Logo' => 'yes', 'Sitename' => 'no')));

	// Index page content display
	$indexdisplay = elgg_view('input/radio', array(
		'internalname' => 'params[indexdisplay]',
		'value' =>	$vars['entity']->indexdisplay,
		'options' => array('River' => 'river', 'Widgets' => 'widgets', 'Custom article' => 'custom')));

	$indexarticlecontent = elgg_view('input/longtext', array(
	'internalname' => 'params[indexarticlecontent]',
	'value' =>$vars['entity']->indexarticlecontent));


	//Custom Module Position
	if (get_plugin_setting('columnnumber', $plugin) == '3columns') {
		$custommoduleposition = elgg_view('input/radio', array(
			'internalname' => 'params[custommoduleposition]',
			'value' => $vars['entity']->custommoduleposition,
			'options' => array('Don\'t Display' => 'off', 'Right' => 'right', 'Left' => 'left')));
	} else {
		$custommoduleposition = elgg_view('input/radio', array(
			'internalname' => 'params[custommoduleposition]',
			'value' => $vars['entity']->custommoduleposition,
			'options' => array('Don\'t Display' => 'off', 'Left' => 'left')));
	}
	
	$custommodulecontent = elgg_view('input/longtext', array(
		'internalname' => 'params[custommodulecontent]',
		'value' => $vars['entity']->custommodulecontent));
		
	//Site Announcements Module
	if (is_plugin_enabled('riverdashboard')) {
		if (get_plugin_setting('columnnumber', $plugin) == '3columns') {
			$sitemessage = elgg_view('input/radio', array(
				'internalname' => 'params[sitemessage]',
				'value' => $vars['entity']->sitemessage,
				'options' => array('Don\'t Display' => 'off', 'Right' => 'right', 'Left' => 'left')));
		} else {
			$sitemessage = elgg_view('input/radio', array(
				'internalname' => 'params[sitemessage]',
				'value' => $vars['entity']->sitemessage,
				'options' => array('Don\'t Display' => 'off', 'Left' => 'left')));
		}
	} else {
		$sitemessage = 'Riverdashboard plugin is disabled';
	}


	//Google Ads 1 Position
	if (get_plugin_setting('columnnumber', $plugin) == '3columns') {
		$googleads1position = elgg_view('input/radio', array(
			'internalname' => 'params[googleads1position]',
			'value' =>	$vars['entity']->googleads1position,
			'options' => array('Don\'t Display' => 'off', 'Right' => 'right', 'Left' => 'left')));
	} else {
		$googleads1position = elgg_view('input/radio', array(
			'internalname' => 'params[googleads1position]',
			'value' =>	$vars['entity']->googleads1position,
			'options' => array('Don\'t Display' => 'off', 'Left' => 'left')));
	}
	
	$googleads1content = elgg_view('input/longtext', array(
		'internalname' => 'params[googleads1content]',
		'value' => $vars['entity']->googleads1content));

	
	//Online Now Module
	if (is_plugin_enabled('members')) {
		if (get_plugin_setting('columnnumber', $plugin) == '3columns') {
			$onlinenowposition = elgg_view('input/radio', array(
				'internalname' => 'params[onlinenowposition]',
				'value' => $vars['entity']->onlinenowposition,
				'options' => array('Don\'t Display' => 'off', 'Right' => 'right', 'Left' => 'left')));
		} else {
			$onlinenowposition = elgg_view('input/radio', array(
				'internalname' => 'params[onlinenowposition]',
				'value' =>	$vars['entity']->onlinenowposition,
				'options' => array('Don\'t Display' => 'off', 'Left' => 'left')));
		}
	} else {
		$onlinenowposition = "Members plugin is disabled";
	}


	//Latest Events Module
	if (is_plugin_enabled('event_calendar')) {
		if (get_plugin_setting('columnnumber', $plugin) == '3columns') {
			$latesteventsposition = elgg_view('input/radio', array(
				'internalname' => 'params[latesteventsposition]',
				'value' => $vars['entity']->latesteventsposition,
				'options' => array('Don\'t Display' => 'off', 'Right' => 'right', 'Left' => 'left')));
		} else {
			$latesteventsposition = elgg_view('input/radio', array(
				'internalname' => 'params[latesteventsposition]',
				'value' => $vars['entity']->latesteventsposition,
				'options' => array('Don\'t Display' => 'off', 'Left' => 'left')));
		}
	} else {	
		$latesteventsposition = 'event_calendar plugin is disabled';
 	}
	
        // Elgg Topbar
        $elgg_topbar = elgg_view('input/radio', array(
				'internalname' => 'params[elgg_topbar]',
				'value' => $vars['entity']->elgg_topbar,
				'options' => array('Don\'t Display' => 'off', 'Display' => 'on')));

        $elgg_default_profile = elgg_view('input/radio', array(
				'internalname' => 'params[elgg_default_profile]',
				'value' => $vars['entity']->elgg_default_profile,
				'options' => array('Seashells' => 'seashells', 'Default' => 'default')));

        $disable_topbar = elgg_view('input/radio', array(
                                'internalname' => 'params[disable_topbar]',
                                'value' => $vars['entity']->disable_topbar,
                                'options' => array('Disable' => 'yes', 'Enable' => 'no')));

        // Limited version settings
	$limited = "This option is not available in the limited edition";
	if (get_plugin_setting('version', $plugin) !== 'premium') {
		$ownerblocksettings = $limited;	
		$columnnumber = $limited;	
		$googleads2position = $limited;	
		$googleads2content = $limited;	
		$custommodule2position = $limited;	
		$custommodule2content = $limited;	
		$displayspotlight = $limited;	
		$headerwidth = $limited;	
		$canvaswidth = $limited;	
		$pagebg = $limited;	
		$maincolor = $limited;	
		$canvasbg = $limited;	
		$midbg = $limited;
		$footercontent = $limited;
		$displayspotlight = $limited;
	}
	
$settings = <<<__HTML

	<div>
	<div><b>Please disable htmlawed plugin while and before configuring this plugin.</b> For some changes to take effect, you may need to disable and re-enable the theme.</div><br>
		
	<div><h3>Theme Layout</h3></div>
	<div><i>$columnnumber_label</i> <br>$columnnumber</div><br>
	<div><i>$displaylogo_label</i><br>$displaylogo</div><br>
	<div><i>$indexdisplay_label</i><br>$indexdisplay</div><br>
	<div><i>$indexarticlecontent_label</i><br>$indexarticlecontent</div><br>
	$ownerblocksettings<br>
        <div><i>$elgg_topbar_label</i><br>$elgg_topbar</div><br>
        <div><i>$disable_topbar_label</i><br>$disable_topbar</div><br>
        <div><i>$elgg_default_profile_label</i><br>$elgg_default_profile</div><br>
        
	
	<div><h3>Custom Module</h3></div>
	<div><i>$custommoduleposition_label</i> <br>$custommoduleposition</div><br>
	<div><i>$custommodulecontent_label</i> <br>$custommodulecontent</div><br>
	
	<div><h3>Site Announcements Module</h3></div>
	<div><i>$sitemessage_label</i> <br>$sitemessage</div><br>
	
	<div><h3>Sidebar Google Ads Module</h3></div>
	<div><i>$googleads1position_label</i> <br>$googleads1position</div><br>
	<div><i>$googleads1content_label</i> <br>$googleads1content</div><br>
	
	<div><h3>Online Now Module</h3></div>
	<div><i>$onlinenowposition_label</i> <br>$onlinenowposition</div><br>
	
	<div><h3>Latest Events Module</h3></div>
	<div><i>$latesteventsposition_label</i> <br>$latesteventsposition</div><br>
	
	<div><h3>Custom Module 2</h3></div>
	<div><i>$custommodule2position_label</i> <br>$custommodule2position</div><br>
	<div><i>$custommodule2content_label</i> <br>$custommodule2content</div><br>
	
	<div><h3>Spotlight Google Ads Module</h3></div>
	<div><i>$googleads2position_label</i> <br>$googleads2position</div><br>
	<div><i>$googleads2content_label</i> <br>$googleads2content</div><br>
	
	<div><h3>Spotlight</h3></div>
	<div><i>$displayspotlight_label</i> <br>$displayspotlight</div><br>
	<div><i>$spotlightcontent_label</i><br>$spotlightcontent</div><br>
	
	<div><h3>Canvas Dimensions</h3> </div>
	<div>$note</div><br>
	<div><i>$headerwidth_label</i> <br>$headerwidth</div><br>
	<div><i>$canvaswidth_label</i> <br>$canvaswidth</div><br>
	
	<div><h3>Styling</h3> </div>
	<div><i>$pagebg_label</i><br>$pagebg</div><div class="pagebg"></div><br>
	<div><i>$maincolor_label</i><br>$maincolor</div><br>
	<div><i>$canvasbg_label</i><br>$canvasbg</div><br>
	<div><i>$midbg_label</i><br>$midbg</div><br>
	
	<div><h3>Footer</h3> </div>
	<div><i>$footercontent_label</i><br>$footercontent</div>
	</div>
__HTML;

echo $settings;
set_plugin_setting('version', 'limited', $plugin);
?>
