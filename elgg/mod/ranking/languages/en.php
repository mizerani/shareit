<?php
/**
 * Likes English language file
 */

$english = array(
	'likes:this' => 'sponsored this',
	'likes:deleted' => 'Your sponsorship has been removed',
	'likes:see' => 'See who sponsored this',
	'likes:remove' => 'Unsponsor this',
	'likes:notdeleted' => 'There was a problem removing your sponsorship',
	'likes:likes' => 'You now sponsors this item',
	'likes:failure' => 'There was a problem sponsoring this item',
	'likes:alreadyliked' => 'You have already sponsored this item',
	'likes:notfound' => 'The item you are trying to sponsor cannot be found',
	'likes:likethis' => 'Sponsor this',
	'likes:userlikedthis' => '%s sponsor',
	'likes:userslikedthis' => '%s sponsors',
	'likes:river:annotate' => 'sponsor',
	'likes:delete:confirm' => 'Are you sure you want to delete this sponsorship?',

	'river:likes' => 'sponsor %s %s',

	// notifications. yikes.
	'likes:notifications:subject' => '%s sponsor your idea "%s"',
	'likes:notifications:body' =>
'Hi %1$s,

%2$s sponsor your idea "%3$s" on %4$s

See your original idea here:

%5$s

or view %2$s\'s profile here:

%6$s

Thanks,
%4$s
',
	
);

add_translation('en', $english);
