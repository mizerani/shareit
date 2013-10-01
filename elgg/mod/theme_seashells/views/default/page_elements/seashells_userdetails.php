<?php
/*
 * * Elgg user display (details)
 * * @package ElggProfile
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider Ltd <info@elgg.com>
 * @copyright Curverider Ltd 2008-2010
 * @link http://elgg.com/
 * * @uses $vars['entity'] The user entity
 *
 * MODIFIED FOR SEASHELLS THEME
 *
 */

if ($vars['full'] == true) {
    $iconsize = "medium";
} else {
    $iconsize = "medium";
}
?>

<div id="seashells_profile_info">
    <table cellspacing="0" width="100%">
        <tr>
            <td>
                <div id="seashells_profile_info_column_left">
                    <div id="seashells_profile_icon_wrapper">
<?php
echo elgg_view("profile/icon", array(
    'entity' => $vars['entity'],
    'size' => $iconsize, 'override' => true));

echo elgg_view("profile/status", array("entity" => $vars['entity']));
?>
                        <div class="clearfloat"></div>
                    </div>
                    <div class="clearfloat"></div>
                </div>
            </td>
            <td>
                <div id="seashells_profile_info_column_middle">
<?php
// Simple XFN
$rel = "";
if (page_owner() == $vars['entity']->guid)
    $rel = 'me';
else if (check_entity_relationship(page_owner(), 'friend', $vars['entity']->guid)
    )$rel = 'friend';
echo "<h2><a href=\"" . $vars['entity']->getUrl() . "\" rel=\"$rel\">" . $vars['entity']->name . "</a></h2>";

    echo elgg_view('output/longtext', array('value' => $vars['entity']->description));
    if ($vars['full'] == true) {
        $even_odd = null;
        if (is_array($vars['config']->profile) && sizeof($vars['config']->profile) > 0)
            foreach ($vars['config']->profile as $shortname => $valtype) {
                if ($shortname != "description") {
                    $value = $vars['entity']->$shortname;
                    if (!empty($value)) {
                        $even_odd = ( 'odd' != $even_odd ) ? 'odd' : 'even';
?><p class="<?php echo $even_odd; ?>"> <b>
                        <?php echo elgg_echo("profile:{$shortname}"); ?>: </b>
                        <?php
                            $options = array('value' => $vars['entity']->$shortname);
                            if ($valtype == 'tags') {
                                $options['tag_names'] = $shortname;
                            }
                            echo elgg_view("output/{$valtype}", $options);
                        ?></p>
<?php }
                    }
                }
    } ?>
                </div>
            </td>

            <td>
                <div id="seashells_profile_info_column_right">
                                                             <?php if ($vars['entity']->isBanned()) {
 ?>
                        <div id="seashells_profile_banned"><?php echo elgg_echo('profile:banned'); ?></div>
<?php } else { ?>
<?php if ($vars['entity']->canEdit()) { ?>
                            <p class="seashells_profile_info_edit_buttons"> <a href="<?php echo $vars['url']; ?>pg/profile/<?php echo
                                                                     $vars['entity']->username; ?>/edit/"><?php echo elgg_echo("profile:edit"); ?></a> </p>
<?php
                                                                 }
                                                                 echo elgg_view("profile/profilelinks", array("entity" => $vars['entity']));
                                                                 //echo autop(filter_tags($vars['entity']->description));
?>
<?php } ?>
                </div><!-- /#profile_info_column_right -->
            </td>
        </tr>
    </table>
</div><!-- /#profile_info --> 