<?php
/**
 * The Wire English language file
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'thewire' => "Shares",
	'thewire:everyone' => "All shares",
	'thewire:ranking' => "Shares Ranking",
	'thewire:user' => "%s's shares",
	'thewire:friends' => "Follows' shares",
	'thewire:reply' => "Reply",
	'thewire:replying' => "Replying to %s (@%s) who wrote",
	'thewire:thread' => "Thread",
	'thewire:charleft' => "characters remaining",
	'thewire:tags' => "Shares tagged with '%s'",
	'thewire:noposts' => "No shares yet",
	'item:object:thewire' => "Shares",
	'thewire:update' => 'Update',
	'thewire:by' => 'Shares by %s',

	'thewire:previous' => "Previous",
	'thewire:hide' => "Hide",
	'thewire:previous:help' => "View previous share",
	'thewire:hide:help' => "Hide previous share",

	/**
	 * The wire river
	 */
	'river:create:object:thewire' => "%s posted to the %s",
	'thewire:wire' => 'share',

	/**
	 * Wire widget
	 */
	'thewire:widget:desc' => 'Display your latest shares',
	'thewire:num' => 'Number of shares to display',
	'thewire:moreposts' => 'More shares',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Your message was successfully posted to shares.",
	'thewire:deleted' => "The shares was successfully deleted.",
	'thewire:blank' => "Sorry, you need to enter some text before we can share this.",
	'thewire:notfound' => "Sorry, we could not find the specified shares.",
	'thewire:notdeleted' => "Sorry. We could not delete this share.",

	/**
	 * Notifications
	 */
	'thewire:notify:subject' => "New share",
	'thewire:notify:reply' => '%s responded to %s on shares:',
	'thewire:notify:post' => '%s posted on shares:',

);

add_translation("en", $english);
