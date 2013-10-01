<?php
	/* Elgg login form
	* @package Elgg
	* @subpackage Core
	* @author Curverider Ltd
	* @link http://elgg.org/
	*
	* EDITED FOR SEASHELLS THEME BY ISMAYIL KHAYREDINOV
	*/

	global $CONFIG;	

	$form_body = "<label>" . elgg_view('input/text', array('internalname' => 'username', 'class' => 'login-textarea')) . "</label>";	
	$form_body .="<label>" . elgg_view('input/password', array('internalname' => 'password', 'class' => 'login-textarea')) . "</label>";	
	
	$form_body .= elgg_view('login/extend');	
	
	$form_body .= elgg_view('input/submit', array('value' => elgg_echo('login'))) . " <div class=\"extras\"><label><input type=\"checkbox\" name=\"persistent\" value=\"true\" />".elgg_echo('user:persistent')."</label>";

	//$form_body .= (!isset($CONFIG->disable_registration) || !($CONFIG->disable_registration)) ? "<a href=\"{$vars['url']}pg/register/\">" . elgg_echo('register') . "</a> | " : "";	
	
	$form_body .= "<a href=\"{$vars['url']}account/forgotten_password.php\" class=\"forgotten\">" . elgg_echo('user:password:lost') . "</a></div>";	

	$login_url = $vars['url'];

	if ((isset($CONFIG->https_login)) && ($CONFIG->https_login)) {
		$login_url = str_replace("http", "https", $vars['url']);
	}
?>

	<div id="login-box">
    	<?php echo elgg_view('input/form', array('body' => $form_body, 'action' => "{$login_url}action/login"));?>
    </div>
	
	<script type="text/javascript">
		$(document).ready(function() {	
			$('input[name=username]').focus();
		 });
	</script>