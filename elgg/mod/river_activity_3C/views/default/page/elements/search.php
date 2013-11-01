<?php
/**
 * Share IT search box
 */

// link back to main site.

if (elgg_is_active_plugin('search')) {

echo elgg_view('search/search_box', array('class' => 'elgg-search-header'));

}
