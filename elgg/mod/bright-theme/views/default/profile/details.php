<?php
/**
 * Elgg user display (details)
 * @uses $vars['entity'] The user entity
 */

$user = elgg_get_page_owner_entity();

$profile_fields = elgg_get_config('profile_fields');

echo '<div id="profile-details" class="elgg-body pll">';
echo "<h2>{$user->name}</h2>";

$even_odd = null;
if (is_array($profile_fields) && sizeof($profile_fields) > 0) {
	foreach ($profile_fields as $shortname => $valtype) {
		
	if ($shortname == "description" || $shortname == "mobile" || $shortname == "phone" || $shortname == "website" || $shortname == "skills" || $shortname == "twitter") {
			// skip about me and put at bottom
			continue;
		}
		$value = $user->$shortname;

		if (!empty($value)) {

			// fix profile URLs populated by https://github.com/Elgg/Elgg/issues/5232
			// @todo Replace with upgrade script, only need to alter users with last_update after 1.8.13
			if ($valtype == 'url' && $value == 'http://') {
				$user->$shortname = '';
				continue;
			}

			// validate urls
			if ($valtype == 'url' && !preg_match('~^https?\://~i', $value)) {
				$value = "http://$value";
			}

			// this controls the alternating class
			$even_odd = ( 'odd' != $even_odd ) ? 'odd' : 'even';
			?>
			<div class="<?php echo $even_odd; ?>">
				<b><?php echo elgg_echo("profile:{$shortname}"); ?>: </b>
				<?php
					echo elgg_view("output/{$valtype}", array('value' => $value));
				?>
			</div>

			<?php
		}
	}
}

 echo elgg_view_form('messageboard/add', array('name' => 'elgg-messageboard')); 

if (!elgg_get_config('profile_custom_fields')) {
	if ($user->isBanned()) {
		echo "<p class='profile-banned-user'>";
		echo elgg_echo('banned');
		echo "</p>";
	} 
}

echo '</div>';
