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

$start = elgg_get_plugin_setting('start_date',  '');
$box_view = elgg_get_plugin_setting('view_riverbox', '');

$text = "have passed since the debut of our ".elgg_get_site_entity()->name." Site and has ";


$title = elgg_echo(Date("d, F Y"));
$users = get_number_users();
$total = get_number_users(true);

$now = strtotime ("now");
$then = strtotime ("$start");
$difference = $now - $then ;
$num = $difference/31557600;
$years = intval ($num);
$num2 = ($num-$years)*12;
$months = intval ($num2);
$num3 = ($num2 - $months)*30.45833;
$days = intval($num3);
$num4 = ($num3 - $days)*24;
$hours = intval($num4);
$num5 = ($num4 - $hours)*60;
$mins = intval($num5);
$num6 = ($num5 - $mins)*60;
$secs = intval($num6);

$river_body = elgg_echo( "<div align='justify'><b>".$years." years, ".$months." months, ".$days." days, ".$hours." hours, ".$mins." minutes and ".$secs." seconds</b> ".$text."<b>".$users."</b> active users and total members of this site till now is <b>".$total."</b>.</div>" );
$river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.$vars["url"].'invite"><b>Invite Friends</b></a></p>';
echo elgg_view_module($box_view, $title, $river_body);
?>
