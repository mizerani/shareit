<?php

	/*** Seashells Theme for Elgg
	* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
	*
	* UPCOMING EVENTS MODULE
	*/

?>

<div id="owner_block">
 	<h2><?php echo elgg_echo('seashells:upcomingevents') ?></h2>
	<?php
		$num = 5;
		// Get the upcoming events
		$start_date = time(); // now
		$end_date =	$start_date + 60*60*24*31; // maximum is one month from now
		$events = event_calendar_get_events_between($start_date,$end_date,false,$num,0,page_owner());

		// If there are any events to view, view them
		if (is_array($events) && sizeof($events) > 0) {
			// echo '<p><a href="'.$vars['url'].'pg/event_calendar/group/'.page_owner().'">'.elgg_echo('event_calendar:view_calendar').'</a></p>';
			foreach($events as $event) {
				echo elgg_view("object/event_calendar",array('entity' => $event));
			}
		} else {
			echo elgg_echo('seashells:noevents');
		}
	?>
</div>