<?php
/* * * Seashells Theme for Elgg
 * (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
 *
 * HEADER MENU
 */
if (get_plugin_setting('disable_topbar', 'theme_seashells') == 'no') {

    if (isloggedin ())
        $userpanel = elgg_view('premium/userpanel');
?>
    <script>
        $(document).ready(function() {
            $('a.toggle_userpanel').click( function() {
                $('div#userpanel').toggle();
            });
        });
    </script>

    <div id="elgg_seashells_topbar">
        <div id="menu_wrapper">
            <div class="floatleft">
                <div id="seashells_menu">
                    <ul class="menu">
<?php if (isloggedin() && $userpanel) { ?>
                            <li><a href="#" class="toggle_userpanel">
                                    <span><img class="user_mini_avatar" style="display:block; float:none; padding:2px 0 0;" src="<?php echo get_loggedin_user()->getIcon('topbar'); ?>" alt="User avatar" /></span></a></li>
<?php
    }
    echo elgg_view("navigation/seashells_topbar_tools");
?>    
                </ul>
            </div>
        </div>
        <div class="floatright">
<?php
    if (is_plugin_enabled('search')) {
        echo elgg_view('page_elements/searchbox');
    }
?>
        </div>
    </div>
    <div class="clearfloat"></div>
<?php
    if (isloggedin ()) {
        if ($userpanel)
            echo $userpanel;
    } ?>
</div>
<div class="clearfloat"></div>

<?php
}
?>