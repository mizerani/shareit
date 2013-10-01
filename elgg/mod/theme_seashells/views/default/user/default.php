<?php

/**
 * Elgg user display
 *
 * @package Elgg
 * @subpackage Core
 */
if ($vars['full']) {
    if (get_plugin_setting('elgg_default_profile', 'theme_seashells') == 'default') {
        echo elgg_view("profile/userdetails", $vars);
    } else {
        echo elgg_view("page_elements/seashells_userdetails", $vars);
    }
} else {
    if (get_input('search_viewtype') == "gallery") {
        echo elgg_view('profile/gallery', $vars);
    } else {
        echo elgg_view("profile/listing", $vars);
    }
}
