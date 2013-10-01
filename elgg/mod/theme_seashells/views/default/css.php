<?php
/* * * Seashells Theme for Elgg
* (c) Ismayil Khayredinov (ismayil.khayredinov@gmail.com)
*
* CASCADE STYLE SHEET
*/
// Get plugin settings
$headerwidth = get_plugin_setting('headerwidth', 'theme_seashells');
$canvaswidth = get_plugin_setting('canvaswidth', 'theme_seashells');
$pagebg = get_plugin_setting('pagebg', 'theme_seashells');
$maincolor = get_plugin_setting('maincolor', 'theme_seashells');
$canvasbg = get_plugin_setting('canvasbg', 'theme_seashells');
$midbg = get_plugin_setting('midbg', 'theme_seashells');
$columnnumber = get_plugin_setting('columnnumber', 'theme_seashells');
$tdwidget = round((int) get_plugin_setting('canvaswidth', 'theme_seashells') / 3 - 10, 0);
$tdprofilemiddle = (int) get_plugin_setting('canvaswidth', 'theme_seashells') - 300;
?>

/* ***************************************
GLOBAL SELECTORS
*************************************** */

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-weight:inherit;
    font-style:inherit;
    font-family:inherit;
    vertical-align:baseline;
    word-wrap:break-word;
}

<?php
$separators = array('table', 'img', 'input', 'blockquote', 'label', 'object', 'embed', 'iframe');
$selector2cols = "#two_column_left_sidebar_maincontent";
$width2cols = (int) $canvaswidth * 0.65;
$selector3cols = "#three_column_maincontent";
$width3cols = (int) $canvaswidth * 0.40;
$selectorwidgets = "#widget_table";
$widthwidgets = (int) $canvaswidth * 0.20;

foreach ($separators as $separator) {
    echo $selector2cols . ' ' . $separator . "{max-width:" . (string) $width2cols . "px;}";
    echo $selector3cols . ' ' . $separator . "{max-width:" . (string) $width3cols . "px;}";
    echo $selectorwidgets . ' ' . $separator . "{max-width:" . (string) $widthwidgets . "px;}";
}
?>

:focus {
    outline:0;
}
ol, ul {
    list-style:none;
}
em, i {
    font-style:italic;
}
table {
    border-collapse:separate;
    border-spacing:0;
}
caption, th, td {
    text-align:left;
    font-weight:normal;
    vertical-align:top;
}
blockquote:before, blockquote:after, q:before, q:after {
    content:""; }
blockquote, q {
    quotes:"" ""; }
.clearfloat {
    clear:both;
    height:0;
    font-size:1px;
    line-height:0;
}
body {
    background:<?php echo $pagebg ?>;
    text-align:left;
    margin:0 auto;
    padding:0;
    font:80%/1.4 Arial, Helvetica, Tahoma, sans-serif;
    color:#000000;
}
a {
    color:<?php echo $maincolor ?>;
    text-decoration:none;
    outline:none;
}
a:hover {
    color:#ff941a;
    text-decoration:none;
}
p {
    margin:0 0 15px 0;
}
img {
    border:none;
}
ul, ol {
    margin:5px 0 15px;
    padding-left:20px;
}
ul li {
    margin:0;
}
form {
    margin:0;
    padding:0;
}
small {
    font-size:75%;
    margin-left:10px;
}
h1, h2, h3, h4, h5, h6 {
    font-weight:bold;
    line-height:normal;
}
h1 {
    font-size:1.8em}
h2 {
    font-size:1.5em}
h3 {
    font-size:1.2em}
h4 {
    font-size:1em}
h5 {
    font-size:0.9em}
h6 {
    font-size:0.8em}
dt {
    margin:0;
    padding:0;
    font-weight:bold;
}
dd {
    margin:0 0 1em 1em;
    padding:0;
}
pre, code {
    font-family:Monaco, "Courier New", Courier, monospace;
    font-size:1em;
    background:#ebf5ff;
    overflow:auto;
    white-space:pre-wrap;
}
code {
    padding:2px 3px;1
}
pre {
    padding:3px 15px;
    margin:0 0 15px 0;
    line-height:1.3em;
}
blockquote {
    font-size:0.9em;
    margin:5px;
    padding:15px;
    background:<?php echo $canvasbg ?>;
}
blockquote p {
    margin:0 0 5px 0;
    font-size:1em;
}

/* ***************************************
PAGE LAYOUT
*************************************** */

#page_container {
    margin:0;
    padding:0;
}
#page_wrapper {
    margin: 0px auto;
    width: <?php echo $headerwidth ?>px;
    padding: 0px 20px 15px;
    height: 100px;
}
#layout_canvas {
    margin:7px auto;
    padding:20px;
    min-height:360px;
    border:2px solid <?php echo $midbg ?>;
    background:<?php echo $canvasbg ?>;
    width:<?php echo $canvaswidth ?>px;
}
#one_column {
    width:95%;
    margin:0;
    min-height:360px;
    background:#fff;
    padding:20px;
    border:1px solid <?php echo $midbg ?>;
}
#two_column_left_sidebar {
    width:22%;
    margin:0 2% 20px 0;
    float:left;
    padding:0;
}
#two_column_left_sidebar_maincontent {
    width:71%;
    margin:0;
    float:left;
    background:#fff;
    padding:20px;
    border:1px solid <?php echo $midbg ?>;
}
#three_column_maincontent {
    width:47%;
    margin:0;
    float:left;
    background:#fff;
    padding:20px;
    float:left;
    border:1px solid <?php echo $midbg ?>;
}
#two_column_left_sidebar_maincontent_boxes {
    margin:0 0 20px 0;
    padding:20px;
    width:71%;
    background:#fff;
    border:1px solid <?php echo $midbg ?>;
    float:left;
}
#two_column_left_sidebar_boxes {
    width:22%;
    margin:0 2% 0 0;
    float:left;
    padding:0;
}
#two_column_left_sidebar_boxes .sidebarBox {
    margin:0 0 20px 0;
    background:#fff;
    padding:15px;
    border:1px solid <?php echo $midbg ?>;
}
#dashboard_editor_button {
    width:100%;
    text-align:right;
    margin-bottom:20px;
}
#dashboard_editor_submitbuttons {
    width:100%;
    text-align:right;
    right:20px;
}
#two_column_left_sidebar_maincontent .contentWrapper .theme_seashells_categories, #two_column_left_sidebar_maincontent .contentWrapper .blog_post .theme_seashells_categories {
    background:<?php echo $canvasbg ?>;
    border:none;
    float:right;
    font-size:0.7em;
    font-weight:bold;
    margin-right:5px;
    padding:5px;
    text-transform:uppercase;
}
p.theme_seashells_categoriestitle {
    color:#333333;
    font-weight:bold;
}
.theme_seashells_categories label  {
    font-weight:none;
}
#two_column_left_sidebar_maincontent label {
    font-size:1em;
}
#owner_block h2, #index_welcome h2, .index_box h2 {
    border-bottom: 2px solid <?php echo $midbg ?>;
    color: <?php echo $maincolor ?>;
    font-family: Arial, Helvetica, Tahoma, sans-serif;
    font-size: 1.3em;
    line-height: 1.2em;
    margin: 0px 10px 5px;
    padding: 7px;
}
#two_column_left_sidebar_boxes .sidebarBox h3 {
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:1em;
    line-height:1.2em;
    padding:4px;
    margin:5px 5px 15px 5px;
    border-bottom:2px solid <?php echo $midbg ?>;
}
#two_column_left_sidebar_boxes .sidebarBox input[type="text"] {
    width: 73%;
    height: 15px;
    font-size: 11px;
    margin: 0px 0px 20px 7px;
}
#two_column_right_sidebar {
    width:22%;
    margin:0 0 0 2%;
    float:left;
}
#dashboard_editor_button {
    width:100%;
    text-align:right;
    margin-bottom:20px;
}
#dashboard_editor_submitbuttons {
    width:100%;
    text-align:right;
    right:20px;
}
#two_column_left_sidebar_maincontent .contentWrapper .theme_seashells_categories, #two_column_left_sidebar_maincontent .contentWrapper .blog_post .theme_seashells_categories {
    background:<?php echo $canvasbg ?>;
    border:none;
    float:right;
    font-size:0.7em;
    font-weight:bold;
    margin-right:5px;
    padding:5px;
    text-transform:uppercase;
}
#two_column_left_sidebar_maincontent label {
    font-size:1em;
}
.contentWrapper {
    background:#ffffff;
    padding:10px;
    margin:0 10px 10px 10px;
}
.contentWrapper form {
    margin:10px;
    padding:20px;
    border:1px solid <?php echo $midbg ?>;
    background: <?php echo $canvasbg ?>;
}
.contentWrapper form .contentWrapper {
    background:none;
}
span.contentIntro p {
    background:<?php echo $canvasbg ?>;
    margin:5px;
    padding:20px;
}
.notitle {
    margin-top:10px;
}
}
widget_area {
    width :100%;
}
#widget_area_col1-2 {
    width:66%;
    margin:0 2% 0 0;
    float:left;
}
#widget_area_col3 {
    width:32%;
    margin:0;
    float:right;
}
#widgets_left {
    width:<?php echo (string) $tdwidget ?>px;
    margin:5px;
    padding:0;
    float:left;
}
#widgets_middle {
    width:<?php echo (string) $tdwidget ?>px;
    margin:5px;
    padding:0;
    float:left;
}
#widgets_right {
    width:<?php echo (string) $tdwidget ?>px;
    margin:5px;
    float:left;
    padding:0;
    min-height:100px;
}
#widget_table {
    width:100%;
}
#widget_table td {
    border:0;
    padding:0;
    margin:0;
    text-align:left;
    vertical-align:top;
}
* html #widgets_right {
    float:none;
}
* html #profile_info_column_left {
    margin:0 20px 0 0;
}
* html #dashboard_info {
    width:850px;
}
*:first-child + html #profile_info_column_left {
    width:200px;
}
#layout_header {
}
#wrapper_header {
    margin: 0 auto;
    min-width: 890px;
    width: 100%;
}
.left-side {
    float:left;
    width:40%;
    padding-top:25px;
}
.right-side {
    float:right;
    text-align:right;
    width:60%;
    padding-top:20px;
}
p.loginbox a {
    height:10px;
    padding-left:5px;
    padding-right:5px;
    color:<?php echo $maincolor ?>;
    text-decoration:none;
}
p.loginbox a:hover {
    color:#fff;
    background:<?php echo $maincolor ?>;
    padding:5px;
}
form#searchform {
    display:block;
    position:relative;
    padding: 2px 0px 0px 30px;
    height: 27px;
    margin-top: 5px;
    width:120px;
    vertical-align:middle;
    background:url(<?php echo
        $vars['url'] ?>mod/theme_seashells/graphics/search.png) no-repeat left top;
}
#wrapper_header h1, #wrapper_header h2 {
    margin:0;
}
#wrapper_header h1 a {
    color: <?php echo $maincolor ?>;
    font-family: 'Trebuchet MS';
    font-size: 38px;
    line-height: 25px;
}
#wrapper_header h2 a {
    margin-left:50px;
    color: <?php echo $maincolor ?>;
    font-family: 'Trebuchet MS';
    font-size:1.3em;
    line-height:0px;
}
#menu_wrapper {
    position:relative;
    height:32px;
    background:<?php echo $canvasbg ?>;
    min-width:890px;
    max-width:<?php echo $headerwidth ?>px;
    margin:0 auto;
}
#seashells_menu {
    position:relative;
    height:32px;
    background:<?php echo $canvasbg ?>;
}
#seashells_menu .menu {
    list-style:none;
}
#seashells_menu * {
    list-style:none;
    border:0;
    padding:0;
    margin:0;
}
#seashells_menu a {
    display:block;
    padding:7px 10px 7px 10px;
    white-space:nowrap;
    background:<?php echo $canvasbg ?>;
}
#seashells_menu a:active {
    background:#fff;
}
#seashells_menu li {
    float:left;
}
#seashells_menu li li {
    float:none;
}
#seashells_menu div {
    visibility:hidden;
    position:absolute;
    border:2px solid <?php echo $midbg ?>;
    border-top:0;
    width:200px;
}
#seashells_menu div img {
    display:block;
    float:left;
    margin-right:10px;
}
#seashells_menu div.search {
    text-align: center;
    background:<?php echo $canvasbg ?>;
}
#seashells_menu div.messages {
    width:400px;
    background:<?php echo $canvasbg ?>;
}
#seashells_menu div div {
    margin:-24px 0 0 -1px;
    left:100%;
}
#seashells_menu li:hover > div {
    visibility:visible;
}
#seashells_menu a {
    text-decoration:none;
    color:#000;
    position:relative;
}
#seashells_menu img{
    display:none;
    float:left;
}
#seashells_menu a:hover, #seashells_menu a:active {
    background:<?php echo $pagebg ?>;
    color:<?php echo $maincolor ?>;
}
#seashells_menu a:hover img, #seashells_menu a:active img {
    display:block;
    padding-right:5px;
}
#seashells_menu a:hover span {
    color:<?php echo $maincolor ?>;
}
#seashells_menu > ul > li:hover > a {
    background:#fff;
    color:<?php echo $maincolor ?>;
}
#seashells_menu > ul > li:hover > a span {
    color:<?php echo $maincolor ?>;
}
#seashells_menu span {
    color:#333;
    font:normal normal normal 11px/18px 'Trebuchet MS', Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    text-transform:uppercase;
}
#seashells_menu li {
    background:none;
}
#seashells_menu li li a {
    padding:0;
    position:static;
}
#seashells_menu li li a:hover {
    background:<?php echo $maincolor ?>;
}
#seashells_menu li li a span {
    color:#000;
}
#seashells_menu li li a:hover span {
    color:#fff;
}
#seashells_menu li li a.parent:hover span {
    background-position:right -49px;
}
* + html #seashells_menu li li a.parent:hover span {
    background-position:right -48px;
}
#seashells_menu li li span {
    display:block;
    text-transform:none;
    line-height:16px;
    padding:5px 80px 5px 10px;
    font-size:1em;
    min-height:25px;
}
div#seashells_menu li.back {
    width:10px;
    height:32px;
    position:absolute;
}
div#seashells_menu li.back .left {
    width:auto;
    height:32px;
    float:none;
    position:relative;
    top:0;
    left:0;
    visibility:visible;
}
#seashells_message_box {
    float:right;
    padding:5px;
}
#layout_spotlight {
    background: <?php echo $canvasbg ?>;
    border: 2px solid <?php echo $midbg ?>;
    margin: 0px auto 20px;
    width: <?php echo $canvaswidth ?>px;
    padding: 20px;
}
#wrapper_spotlight {
    margin:0;
    padding:0;
    height:auto;
}
#wrapper_spotlight #spotlight_table h2 {
    color:<?php echo $maincolor ?>;
    font-size:1.25em;
    line-height:1.2em;
}
#wrapper_spotlight #spotlight_table li {
    list-style:square;
    line-height:1.2em;
    margin:5px 20px 5px 0;
    color:<?php echo $maincolor ?>;
}
#wrapper_spotlight .collapsable_box_content {
    margin:0;
    padding:5px 10px 5px 10px;
    background:none;
    min-height:60px;
    border:none;
}
#spotlight_table {
    margin:0 0 2px 0;
}
#spotlight_table .spotlightRHS {
    float:right;
    width:270px;
    margin:0 0 0 50px;
}
*:first-child + html #wrapper_spotlight .collapsable_box_content {
    width:958px;
}
#layout_spotlight .collapsable_box_content p {
    padding:0;
}
#wrapper_spotlight .collapsable_box_header {
    border:none;
    background:none;
}
#layout_footer {
    height: 80px;
    margin: 20px auto;
    width: <?php echo $canvaswidth ?>px;
    font-size:11px;
}
#layout_footer table {
}
#layout_footer a, #layout_footer p {
    color:#333333;
    margin:0;
}
#layout_footer .footer_toolbar_links {
    float: right;
    font-size:1.2em;
}
#layout_footer .footer_legal_links {
    font-size:.8em;
}
.footer_elgg_img {
}

/* ***************************************
SEASHELLS TOPBAR
*************************************** */

#elgg_seashells_topbar {
    background: <?php echo $canvasbg ?>;
    border: 2px solid <?php echo $midbg ?>;
    height: 32px;
    margin: 0px auto;
    width:<?php echo $headerwidth ?>px;
    position:relative;
    padding: 0 20px;
}
#elgg_seashells_topbar_container_right a:hover {
    background-position:right -21px;
}

/* ***************************************
HORIZONTAL ELGG TOPBAR
*************************************** */
#elgg_topbar {
    background:#333333 url(<?php echo $vars['url']; ?>_graphics/toptoolbar_background.gif) repeat-x top left;
    color:#eeeeee;
    border-bottom:1px solid #000000;
    min-width:998px;
    position:relative;
    width:100%;
    height:24px;
    z-index: 9000; /* if you have multiple position:relative elements, then IE sets up separate Z layer contexts for each one, which ignore each other */
}
#elgg_topbar_container_left {
    float:left;
    height:24px;
    left:0px;
    top:0px;
    position:absolute;
    text-align:left;
    width:60%;
}
#elgg_topbar_container_right {
    float:right;
    height:24px;
    position:absolute;
    right:0px;
    top:0px;
    /* width:120px;*/
    text-align:right;
}
#elgg_topbar_container_search {
    float:right;
    height:21px;
    /*width:280px;*/
    position:relative;
    right:120px;
    text-align:right;
    margin:3px 0 0 0;
}
#elgg_topbar_container_left .toolbarimages {
    float:left;
    margin-right:20px;
}
#elgg_topbar_container_left .toolbarlinks {
    margin:0 0 10px 0;
    float:left;
}
#elgg_topbar_container_left .toolbarlinks2 {
    margin:3px 0 0 0;
    float:left;
}
#elgg_topbar_container_left a.loggedinuser {
    color:#eeeeee;
    font-weight:bold;
    margin:0 0 0 5px;
}
#elgg_topbar_container_left a.pagelinks {
    color:white;
    margin:0 15px 0 5px;
    display:block;
    padding:3px;
}
#elgg_topbar_container_left a.pagelinks:hover {
    background: #4690d6;
    text-decoration: none;
}
#elgg_topbar_container_left a.privatemessages {
    background:transparent url(<?php echo $vars['url']; ?>_graphics/toolbar_messages_icon.gif) no-repeat left 2px;
    padding:0 0 4px 16px;
    margin:0 15px 0 5px;
    cursor:pointer;
}
#elgg_topbar_container_left a.privatemessages:hover {
    text-decoration: none;
    background:transparent url(<?php echo $vars['url']; ?>_graphics/toolbar_messages_icon.gif) no-repeat left -36px;
}
#elgg_topbar_container_left a.privatemessages_new {
    background:transparent url(<?php echo $vars['url']; ?>_graphics/toolbar_messages_icon.gif) no-repeat left -17px;
    padding:0 0 0 18px;
    margin:0 15px 0 5px;
    color:white;
}
/* IE6 */
* html #elgg_topbar_container_left a.privatemessages_new { background-position: left -18px; }
/* IE7 */
*+html #elgg_topbar_container_left a.privatemessages_new { background-position: left -18px; }

#elgg_topbar_container_left a.privatemessages_new:hover {
    text-decoration: none;
}

#elgg_topbar_container_left a.usersettings {
    margin:0 0 0 20px;
    color:#999999;
    padding:3px;
}
#elgg_topbar_container_left a.usersettings:hover {
    color:#eeeeee;
}
#elgg_topbar_container_left img {
    margin:0 0 0 5px;
}
#elgg_topbar_container_left .user_mini_avatar {
    border:1px solid #eeeeee;
    margin:0 0 0 20px;
}
#elgg_topbar_container_right {
    padding:3px 0 0 0;
}
#elgg_topbar_container_right a {
    color:#eeeeee;
    margin:0 5px 0 0;
    background:transparent url(<?php echo $vars['url']; ?>_graphics/elgg_toolbar_logout.gif) no-repeat top right;
    padding:0 21px 0 0;
    display:block;
    height:20px;
}
/* IE6 fix */
* html #elgg_topbar_container_right a {
    width: 120px;
}
#elgg_topbar_container_right a:hover {
    background-position: right -21px;
}
#elgg_topbar_panel {
    background:#333333;
    color:#eeeeee;
    height:200px;
    width:100%;
    padding:10px 20px 10px 20px;
    display:none;
    position:relative;
}


/* ***************************************
TOP BAR - VERTICAL TOOLS MENU
*************************************** */
/* elgg toolbar menu setup */
ul.topbardropdownmenu, ul.topbardropdownmenu ul {
    margin:0;
    padding:0;
    display:inline;
    float:left;
    list-style-type: none;
    z-index: 9000;
    position: relative;
}
ul.topbardropdownmenu {
    margin:0pt 20px 0pt 5px;
}
ul.topbardropdownmenu li {
    display: block;
    list-style: none;
    margin: 0;
    padding: 0;
    float: left;
    position: relative;
}
ul.topbardropdownmenu a {
    display:block;
}
ul.topbardropdownmenu ul {
    display: none;
    position: absolute;
    left: 0;
    margin: 0;
    padding: 0;
}
/* IE6 fix */
* html ul.topbardropdownmenu ul {
    line-height: 1.1em;
}
/* IE6/7 fix */
ul.topbardropdownmenu ul a {
    zoom: 1;
}
ul.topbardropdownmenu ul li {
    float: none;
}
/* elgg toolbar menu style */
ul.topbardropdownmenu ul {
    width: 150px;
    top: 24px;
    border-top:1px solid black;
}
ul.topbardropdownmenu *:hover {
    background-color: none;
}
ul.topbardropdownmenu a {
    padding:3px;
    text-decoration:none;
    color:white;
}
ul.topbardropdownmenu li.hover a {
    background-color: #4690d6;
    text-decoration: none;
}
ul.topbardropdownmenu ul li.drop a {
    font-weight: normal;
}
/* IE7 fixes */
*:first-child+html #elgg_topbar_container_left a.pagelinks {

}
*:first-child+html ul.topbardropdownmenu li.drop a.menuitemtools {
    padding-bottom:6px;
}
ul.topbardropdownmenu ul li a {
    background-color: #999999;/* menu off state color */
    font-weight: bold;
    padding-left:6px;
    padding-top:4px;
    padding-bottom:0;
    height:22px;
    border-bottom: 1px solid white;
}
ul.topbardropdownmenu ul a.hover {
    background-color: #333333;
}
ul.topbardropdownmenu ul a {
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.messages, .messages_error {
    background:<?php echo $maincolor ?>;
    color:#fff;
    font-weight:bold;
    z-index:8000;
    margin:0;
    position:fixed;
    width:100%;
    cursor:pointer;
    padding-left:20px;
}
.closeMessages {
    float:right;
    margin-top:17px;
    margin-right:30px;
}
.closeMessages a {
    color:#fff;
    cursor:pointer;
    text-decoration:none;
    font-size:80%;
    font-weight:bold;
}
.closeMessages a:hover {
    color:black;
}
.collapsable_box {
    margin:0 0 10px 0;
    background:#fff;
    padding:15px;
    border:1px solid <?php echo $midbg ?>;
    min-width:260px;
}
* html .collapsable_box {
    height:10px;
}
.collapsable_box_header h1 {
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:1.3em;
    line-height:1.2em;
    padding:7px;
    margin:10px 10px 5px 10px;
    border-bottom:2px solid <?php echo $midbg ?>;
}
.collapsable_box_content {
    padding:10px;
}
#widget_area textarea, input[type="text"] {
    width:95%;
}

select {
    padding: 5px;
    width: 97%;
    border:1px solid <?php echo $midbg ?>;
}
.collapsable_box_content .messageboard {
    background:#fff;
    border-top:1px solid <?php echo $midbg ?>;
    margin:5px 10px 10px;
    padding:0;
}
.collapsable_box_content .contentWrapper {
    margin-bottom:5px;
    padding:0;
}
.collapsable_box_editpanel {
    display:none;
    background:<?php echo $midbg ?>;
    padding:10px 10px 5px 10px;
    border-left:1px solid #ffffff;
    border-bottom:1px solid #ffffff;
}
.collapsable_box_editpanel p {
    margin:0 0 5px 0;
}
.collapsable_box_header a.toggle_box_contents {
    color:<?php echo $maincolor ?>;
    cursor:pointer;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:20px;
    font-weight:bold;
    text-decoration:none;
    float:right;
    margin:0;
    margin-top:-7px;
}
.collapsable_box_header a.toggle_box_edit_panel {
    color:<?php echo $maincolor ?>;
    cursor:pointer;
    font-size:9px;
    text-transform:uppercase;
    text-decoration:none;
    font-weight:normal;
    float:right;
    margin:3px 10px 0 0;
}
.collapsable_box_editpanel label {
    font-weight:normal;
    font-size:100%;
}
.display_none {
    display:none;
}
.no_space_after {
    margin:0 0 0 0;
}
label {
    font-weight:bold;
    color:#333333;
    font-size:120%;
}
input {
    font:120% Arial, Helvetica, Tahoma, sans-serif;
    padding:5px;
    border:1px solid <?php echo $midbg ?>;
    max-width:95%;
    color:#666666;
}
input[type="checkbox"] {
    padding:1px;
    border-style:none;
}
textarea {
    font:120% Arial, Helvetica, Tahoma, sans-serif;
    border:1px solid <?php echo $midbg ?>;
    padding:5px;
    color:#666666;
    max-width: 95%;
    min-width:70%;
}
textarea:focus, input[type="text"]:focus {
    border:1px solid <?php echo $maincolor ?>;
    background-color:#e4ecf5;
    color:#333333;
}
input[type="text"] {
    max-width:95%;
}
input[type="file"] {
    width:95%;
}
.submit_button {
    font:12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    color:#ffffff;
    background:<?php echo $maincolor ?>;
    border:1px solid <?php echo $maincolor ?>;
    width:auto;
    height:25px;
    padding:2px 6px 2px 6px;
    margin:10px 0 10px 0;
    cursor:pointer;
}
.submit_button:hover, input[type="submit"]:hover {
    background:#fff;
    border-color:<?php echo $maincolor ?>;
    color:<?php echo $maincolor ?>;
}
input[type="submit"] {
    font:12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    color:#ffffff;
    background:<?php echo $maincolor ?>;
    border:1px solid <?php echo $maincolor ?>;
    width:auto;
    height:25px;
    padding:2px 6px 2px 6px;
    margin:10px 0 10px 0;
    cursor:pointer;
}
.cancel_button {
    font:12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    color:#999999;
    background:#dddddd;
    border:1px solid #999999;
    width:auto;
    height:25px;
    padding:2px 6px 2px 6px;
    margin:10px 0 10px 10px;
    cursor:pointer;
}
.cancel_button:hover {
    background:<?php echo $midbg ?>;
}
.input-textarea {
    height:200px;
    width:95%;
}
#login-box {
    height: 56px;
    padding: 0;
    text-align:center;
}
html * #login-box {
    width:300px;
}
#login-box h2 {
    color:<?php echo $maincolor ?>;
}
#login-box .login-textarea {
    width:100px;
    display:inline;
}
#login-box .submit_button {
    font-size: 0.8em;
    height: 21px;
    margin-left: 5px;
    padding: 3px;
}
#login-box input {
    margin:0;
}
p.loginbox {
    margin:0px;
}
#login-box label {
    font-size: 0.7em;
    color: gray;
    padding: 2px;
}
#register-box label {
    font-size:1em;
    color:gray;
    padding:2px;
}
#register-box input[type="text"], #register-box input[type="password"] {
    margin-bottom:10px;
    margin-left:10px;
    width:200px;
}
#login-box-openid h2, #register-box h2, #add-box h2, #forgotten_box h2 {
    color:<?php echo $maincolor ?>;
}
#register-box {
    background:#fff;
    padding:20px;
    border:1px solid <?php echo $midbg ?>;
}
#register-box h2 {
    border-bottom:2px solid <?php echo $midbg ?>;
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:1.3em;
    line-height:1.2em;
    margin:0 10px 5px;
    padding:7px;
}
#register-box form {
    padding:20px;
}
#login-box .extras {
    margin:15px;
}
#login-box .extras input {
    padding-top:3px;
    margin-right:3px;
    vertical-align:top;
}
#login-box .extras label {
}
#login-box .forgotten {
    font-size:0.7em;
    padding-left: 10px;
}
#persistent_login label {
    font-weight:normal;
}
#two_column_left_sidebar #login-box {
    width:auto;
    background:none;
}
#two_column_left_sidebar #login-box form {
    width:auto;
    padding:5px 0 5px 10px;
}
#two_column_left_sidebar #login-box h2 {
    color:<?php echo $maincolor ?>;
}
#two_column_left_sidebar #login-box .login-textarea {
    width:90%;
}
#two_column_right_sidebar #login-box {
    width:auto;
    background:none;
}
#two_column_right_sidebar #login-box form {
    width:auto;
    margin:10px 10px 0 10px;
    padding:5px 0 5px 10px;
}
#two_column_right_sidebar #login-box h2 {
    color:<?php echo $maincolor ?>;
}
#two_column_right_sidebar #login-box .login-textarea {
    width:158px;
}

/* ***************************************
SEASHELLS PROFILE
*************************************** */

#seashells_profile_info {
    background: #ffffff;
    border: 1px solid <?php echo $midbg ?>;
    margin: 0 0 10px;
    padding: 15px;
}
#seashells_profile_info_column_left {
    margin: 0px 2px 0px 0px;
    padding: 15px 10px 40px;
    width: 100px;
    overflow:hidden;
}
#seashells_profile_info_column_middle {
    border-right: 1px solid <?php echo $canvasbg ?>;
    float: left;
    min-height: 400px;
    min-width: 550px;
    padding-right: 10px;
    width: <?php echo (string) $tdprofilemiddle ?>px;
}
#seashells_profile_info_column_right {
    width:100px;
    margin: 30px 0px 0px 10px;
}
#dashboard_info {
    background: #ffffff;
    border: 1px solid <?php echo $midbg ?>;
    margin: 10px;
    padding: 15px;
}
#seashells_profile_info_column_right #profile_menu_wrapper {
    text-align:right;
    margin:0;
    width:auto;
}
#seashells_profile_info_column_right #profile_menu_wrapper p {
    border:0px;
}
#seashells_profile_info_column_right #profile_menu_wrapper p:first-child {
    border:0px;
}
#seashells_profile_info_column_right #profile_menu_wrapper a {
    display:block;
    padding:3px;
}
#seashells_profile_info_column_right #profile_menu_wrapper a:hover {
    color:#ffffff;
    background:<?php echo $maincolor ?>;
    text-decoration:none;
}
#seashells_profile_info_column_right p.user_menu_friends, p.user_menu_seashells_profile, p.user_menu_removefriend, p.user_menu_friends_of {
    margin:0;
}
#seashells_profile_info_column_right #profile_menu_wrapper .user_menu_admin {
    border-top:none;
}
#seashells_profile_info_column_middle p {
    margin:0px 20px;
    padding:5px;
}
#seashells_profile_info_column_middle p.seashells_profile_info_edit_buttons {
    float:right;
}
#seashells_profile_info_column_middle h2 {
    border-bottom: 2px solid <?php echo $midbg ?>;
    color: <?php echo $maincolor ?>;
    font-family: Arial, Helvetica, Tahoma, sans-serif;
    font-size: 1.5em;
    line-height: 1.2em;
    margin: 10px 10px 5px;
    padding: 7px;
    text-align: left;
}
#seashells_profile_info_column_left .profile_status {
    padding: 10px;
    font-weight: bold;
    background: <?php echo $canvasbg ?>;
    border:1px solid <?php echo $midbg ?>;
    word-wrap: break-word;
}
.search_listing_info .profile_status {
    word-wrap:break-word;
}
#seashells_profile_info_column_left .profile_status span {
    color: #666;
    display: block;
    font-size: 80%;
    padding: 5px 0px 0px 5px;
}
#seashells_profile_info_column_left a.status_update {
    padding: 5px;
    font-size: .8em;
}
#seashells_profile_info_column_middle .odd, #seashells_profile_info_column_middle .even {
    border-top:1px dashed <?php echo $midbg ?>
}

#seashells_profile_info_column_middle .odd:hover, #seashells_profile_info_column_middle .even:hover {
    background:<?php echo $canvasbg ?>;
}



#seashells_profile_info_column_right p {
}
#seashells_profile_info_column_right .seashells_profile_aboutme_title {
    margin:0;
    padding:0;
    line-height:1em;
}
.seashells_profile_info_edit_buttons {
    text-align: right;
}
.seashells_profile_info_edit_buttons a {
    background: <?php echo $maincolor ?>;
    border: 1px solid <?php echo $maincolor ?>;
    color: #ffffff;
    cursor: pointer;
    font: normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight: bold;
    margin: 10px 0px;
    padding: 5px;
    width: auto;
}
.seashells_profile_info_edit_buttons a:hover {
    background: #fff;
    border: 1px solid <?php echo $maincolor ?>;
    color: <?php echo $maincolor ?>;
}
#seashells_profile_info_column_right .seashells_profile_status {
    background: #fff;
    border: 1px solid <?php echo $midbg ?>;
    margin: 0px 0px 20px;
    padding: 10px;
}
#seashells_profile_info_column_right .seashells_profile_status span {
    color: #666;
    display: block;
    font-size: 80%;
    padding: 5px 0px 0px 5px;
}
#seashells_profile_info_column_right a.status_update {
    float: right;
    margin: 0px 5px;
    padding: 5px;
}
#seashells_profile_info_column_right .on_my_mind {
    font-weight: bold;
    margin-bottom: 8px;
}

/* ***************************************
PROFILE
*************************************** */
#profile_info {
    background: #ffffff;
    border: 1px solid <?php echo $midbg ?>;
    margin: 0 0 10px;
    padding: 15px;
}
#profile_info_column_left {
    float:left;
    padding: 0;
    margin:0 20px 0 0;
}
#profile_info_column_middle {
    float:left;
    width:365px;
    padding: 0;
}
#profile_info_column_right {
    width:578px;
    margin:0 0 0 0;
    background:#dedede;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    padding:4px;
}
#dashboard_info {
    margin:0px 0px 0 0px;
    padding:20px;
    border-bottom:1px solid #cccccc;
    border-right:1px solid #cccccc;
    background: #bbdaf7;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
}
#profile_menu_wrapper {
    margin:10px 0 10px 0;
    width:200px;
}
#profile_menu_wrapper p {
    border-bottom:1px solid #cccccc;
}
#profile_menu_wrapper p:first-child {
    border-top:1px solid #cccccc;
}
#profile_menu_wrapper a {
    display:block;
    padding:0 0 0 3px;
}
#profile_menu_wrapper a:hover {
    color:#ffffff;
    background:#4690d6;
    text-decoration:none;
}
p.user_menu_friends, p.user_menu_profile,
p.user_menu_removefriend,
p.user_menu_friends_of {
    margin:0;
}
#profile_menu_wrapper .user_menu_admin {
    border-top:none;
}

#profile_info_column_middle p {
    margin:7px 0 7px 0;
    padding:2px 4px 2px 4px;
}
/* profile owner name */
#profile_info_column_middle h2 {
    padding:0 0 14px 0;
    margin:0;
}
#profile_info_column_middle .profile_status {
    background:#bbdaf7;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    padding:2px 4px 2px 4px;
    line-height:1.2em;
}
#profile_info_column_middle .profile_status span {
    display:block;
    font-size:90%;
    color:#666666;
}
#profile_info_column_middle a.status_update {
    float:right;
}
#profile_info_column_middle .odd {
    background:#dedede;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
}
#profile_info_column_middle .even {
    background:#dedede;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
}
#profile_info_column_right p {
    margin:0 0 7px 0;
}
#profile_info_column_right .profile_aboutme_title {
    margin:0;
    padding:0;
    line-height:1em;
}
/* edit profile button */
.profile_info_edit_buttons {
    float:right;
    margin:0  !important;
    padding:0 !important;
}
.profile_info_edit_buttons a {
    font: 12px/100% Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #ffffff;
    background:#4690d6;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    width: auto;
    padding: 2px 6px 2px 6px;
    margin:0;
    cursor: pointer;
}
.profile_info_edit_buttons a:hover {
    background: #0054a7;
    text-decoration: none;
    color:white;
}




#river, .river_item_list {
    overflow:hidden;
    width:97%;
}
.river_item p {
    margin:0;
    padding:0 0 0 21px;
    line-height:1.1em;
    min-height:17px;
}
.river_item {
    border-bottom: 1px solid <?php echo $midbg ?>;
    border-top: 1px solid <?php echo $midbg ?>;
    border-left: 5px solid <?php echo $midbg ?>;
    margin: 10px 0px;
    padding: 12px 19px;
    background:#ffffff;
}
.river_item:hover {
    border-bottom: 1px solid <?php echo $midbg ?>;
    border-top: 1px solid <?php echo $midbg ?>;
    border-left: 5px solid <?php echo $maincolor ?>;
    margin: 10px 0px;
    padding: 12px 19px;
    background:<?php echo $canvasbg ?>;
}
.river_item_time {
    font-size:90%;
    color:#666666;
}
.river_item .river_item_useravatar {
    float:left;
    margin:0 5px 0 0;
}
* html .river_item p {
    padding:3px 0 3px 20px;
}
*:first-child + html .river_item p {
    min-height:17px;
}
.river_user_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_profile.gif) no-repeat left -1px;
}
.river_object_user_profileupdate {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_profile.gif) no-repeat left -1px;
}
.river_object_user_profileiconupdate {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_profile.gif) no-repeat left -1px;
}
.river_object_annotate {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_bookmarks_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_bookmarks.gif) no-repeat left -1px;
}
.river_object_bookmarks_comment {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_status_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_status.gif) no-repeat left -1px;
}
.river_object_file_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_files.gif) no-repeat left -1px;
}
.river_object_file_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_files.gif) no-repeat left -1px;
}
.river_object_file_comment {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_widget_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_plugin.gif) no-repeat left -1px;
}
.river_object_forums_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_forum.gif) no-repeat left -1px;
}
.river_object_forums_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_forum.gif) no-repeat left -1px;
}
.river_object_widget_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_plugin.gif) no-repeat left -1px;
}
.river_object_blog_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_blog.gif) no-repeat left -1px;
}
.river_object_blog_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_blog.gif) no-repeat left -1px;
}
.river_object_blog_comment {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_forumtopic_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_forum.gif) no-repeat left -1px;
}
.river_user_friend {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_friends.gif) no-repeat left -1px;
}
.river_object_relationship_friend_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_friends.gif) no-repeat left -1px;
}
.river_object_relationship_member_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_forum.gif) no-repeat left -1px;
}
.river_object_thewire_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_thewire.gif) no-repeat left -1px;
}
.river_group_join {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_forum.gif) no-repeat left -1px;
}
.river_object_groupforumtopic_annotate {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_groupforumtopic_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_forum.gif) no-repeat left -1px;
}
.river_object_sitemessage_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_blog.gif) no-repeat left -1px;
}
.river_user_messageboard {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_page_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_pages.gif) no-repeat left -1px;
}
.river_object_page_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_pages.gif) no-repeat left -1px;
}
.river_object_page_top_create {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_pages.gif) no-repeat left -1px;
}
.river_object_page_top_update {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_pages.gif) no-repeat left -1px;
}
.river_object_page_top_comment {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.river_object_page_comment {
    background:url(<?php echo $vars['url']; ?>_graphics/river_icons/river_icon_comment.gif) no-repeat left -1px;
}
.search_listing, .contentWrapper .search_listing {
    border-bottom: 1px solid <?php echo $midbg ?>;
    border-top: 1px solid <?php echo $midbg ?>;
    border-left: 5px solid <?php echo $midbg ?>;
    margin: 10px 0px;
    padding: 12px 19px;
    background:#ffffff;
}

.search_listing:hover, .contentWrapper .search_listing:hover {
    border-bottom: 1px solid <?php echo $midbg ?>;
    border-top: 1px solid <?php echo $midbg ?>;
    border-left: 5px solid <?php echo $maincolor ?>;
    margin: 10px 0px;
    padding: 12px 19px;
    background:<?php echo $canvasbg ?>;
}

.search_listing_icon {
    float:left;
}
.search_listing_icon img {
    width:40px;
}
.search_listing_icon .avatar_menu_button img {
    width:15px;
}
.search_listing_info {
    margin-left:50px;
    min-height:40px;
}
* html .search_listing_info {
    height:40px;
}
.search_listing_info p {
    margin:0 0 3px 0;
    line-height:1.2em;
}
.search_listing_info p.owner_timestamp {
    color: #666;
    font-size: 90%;
    margin: 3px 5px;
    padding: 0px;
    text-transform:capitalize;
}
table.entity_gallery {
    border-spacing:10px;
    margin:0 auto;
}
.entity_gallery td {
    border:1px solid <?php echo $midbg ?>;
}
.entity_gallery_item {
    background:#ffffff;
    width:170px;
}
.entity_gallery_item:hover {
    background: <?php echo $canvasbg ?>;
    color:#ffffff;
}
.entity_gallery_item .search_listing {
    background:none;
    text-align:center;
}
.entity_gallery_item .search_listing_header {
    text-align:center;
}
.entity_gallery_item .search_listing_icon {
    position:relative;
    text-align:center;
}
.entity_gallery_item .search_listing_info {
    margin:5px;
}
.entity_gallery_item .search_listing_info p {
    margin:5px;
    margin-bottom:10px;
}
.entity_gallery_item .search_listing {
    background:none;
    text-align:center;
}
.entity_gallery_item .search_listing_icon {
    position:absolute;
    margin-bottom:20px;
}
.entity_gallery_item .search_listing_info {
    margin:5px;
}
.entity_gallery_item .search_listing_info p {
    margin:5px;
    margin-bottom:10px;
}
#widget_friends_list {
    display:table;
    width:100%;
    padding:8px 0 4px 8px;
    background:#ffffff;
}
.widget_friends_singlefriend {
    float:left;
    margin:0 5px 5px 0;
}
.plugin_details {
    margin:0 10px 5px 10px;
    padding:0 7px 4px 10px;
}

.plugin_details h3 {
    margin:0px;
}
.admin_plugin_reorder {
    float:right;
    width:200px;
    text-align:right;
}
.admin_plugin_reorder a {
    padding-left:10px;
    font-size:80%;
    color:#999999;
}
.plugin_details a.pluginsettings_link {
    cursor:pointer;
    font-size:80%;
}
.active {
    background:<?php echo $canvasbg ?>;
}
.not-active {
    border:2px solid <?php echo $canvasbg ?>;
}
.plugin_details p {
    margin:0;
    padding:0;
}
.plugin_details a.manifest_details {
    cursor:pointer;
    font-size:80%;
}
.manifest_file {
    background:<?php echo $canvasbg ?>;
    padding:5px 10px 5px 10px;
    margin:4px 0 4px 0;
    display:none;
}
.admin_plugin_enable_disable {
    width:150px;
    margin:10px 0 0 0;
    float:right;
    text-align:right;
}
.contentIntro .enableallplugins, .contentIntro .disableallplugins {
    float:right;
    margin:30px 20px 0;
}
.contentIntro .enableallplugins {
    margin-left:10px;
}
.contentIntro .enableallplugins, .not-active .admin_plugin_enable_disable a {
    font:12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    color:#ffffff;
    background:<?php echo $maincolor ?>;
    border:1px solid <?php echo $maincolor ?>;
    width:auto;
    padding:4px;
    cursor:pointer;
}
.contentIntro .enableallplugins:hover, .not-active .admin_plugin_enable_disable a:hover {
    background:<?php echo $maincolor ?>;
    border:1px solid <?php echo $maincolor ?>;
    text-decoration:none;
}
.contentIntro .disableallplugins, .active .admin_plugin_enable_disable a {
    font:12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    color:#ffffff;
    background:#999999;
    border:1px solid #999999;
    width:auto;
    padding:4px;
    cursor:pointer;
}
.contentIntro .disableallplugins:hover, .active .admin_plugin_enable_disable a:hover {
    background:#333333;
    border:1px solid #333333;
    text-decoration:none;
}
.pluginsettings {
    margin:15px 0 5px 0;
    background:<?php echo $midbg ?>;
    padding:10px;
    display:none;
}
.pluginsettings h3 {
    padding:0 0 5px 0;
    margin:0 0 5px 0;
    border-bottom:1px solid #999999;
}
#updateclient_settings h3 {
    padding:0;
    margin:0;
    border:none;
}
.input-access {
    margin:5px 0 0 0;
}
.generic_comment_owner {
    font-size:90%;
    color:#666666;
}
.generic_comment {
    background:#ffffff;
    padding:10px;
    margin:0 10px 10px 10px;
}
.generic_comment_icon {
    float:left;
}
.generic_comment_details {
    margin-left:60px;
}
.generic_comment_details p {
    margin:0 0 5px 0;
}
.generic_comment_owner {
    color:#666666;
    margin:0;
    font-size:90%;
    border-top:1px solid #aaaaaa;
}
* html #generic_comment_tbl {
    width:676px !important ;
}
#owner_block, #index_welcome, .index_box {
    padding:20px;
    border: 1px solid <?php echo $midbg ?>;
    background:#ffffff;
    margin-bottom:20px;
}
#index_welcome {
    border:none;
    background:#ffffff;
    margin-bottom: 20px;
}
#owner_block_icon {
    float:left;
    margin:0 10px 0 0;
}
#owner_block_rss_feed, #owner_block_odd_feed {
    padding:5px 0 0 0;
}
#owner_block_rss_feed a {
    font-size:90%;
    color:#999999;
    padding:0 0 4px 20px;
    background:url(<?php echo $vars['url']; ?>_graphics/icon_rss.gif) no-repeat left top;
}
#owner_block_odd_feed a {
    font-size:90%;
    color:#999999;
    padding:0 0 4px 20px;
    background:url(<?php echo $vars['url']; ?>_graphics/icon_odd.gif) no-repeat left top;
}
#owner_block_rss_feed a:hover, #owner_block_odd_feed a:hover {
    color:<?php echo $maincolor ?>;
}
#owner_block_desc {
    padding:8px 0;
    margin:0 0 10px;
    line-height:1.2em;
    border-bottom:1px solid <?php echo $midbg ?>;
    color:#666666;
}
#owner_block_content {
    margin:0 0 4px 0;
    padding:0;
    min-height:35px;
    font-weight:bold;
}
#owner_block_content a {
    line-height:1em;
}
.ownerblockline {
    padding:0;
    margin:0;
    border-bottom:1px solid <?php echo $midbg ?>;
    height:1px;
}
#owner_block_submenu {
    margin:20px 0 20px 0;
    padding:0;
    width:100%;
}
.theme_seashells_categories {
    text-transform:capitalize;
    margin-left: 10px;
    margin-right: 10px;
}
#owner_block_submenu ul, .theme_seashells_categories ul, .menulist ul {
    list-style:none;
    padding:0;
    margin:0;
}
#owner_block_submenu ul li.selected a, .theme_seashells_categories ul li.selected a, .menulist ul li.selected a  {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
}
#owner_block_submenu ul li.selected a:hover, .theme_seashells_categories ul li.selected a:hover, .menulist ul li.selected a:hover {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
}
#owner_block_submenu ul li a, .theme_seashells_categories ul li a {
    text-decoration:none;
    display:block;
    margin:2px 0 0 0;
    color:<?php echo $maincolor ?>;
    padding:5px 10px;
    font-weight:bold;
    line-height:1.1em;
    font-size:.9em;
}
.menulist ul li a {
    padding: 5px;
    font-size: 11px;
    text-decoration:none;
    display:block;
    margin:2px 0 0 0;
    color:#333333;
    padding:5px 10px;
    font-weight:bold;
    line-height:1.1em;
    font-size:.9em;
}
.menulist ul li a.read {
    font-weight:normal;
    color:#333;
}
#owner_block_submenu ul li a:hover, .theme_seashells_categories ul li a:hover {
    color:#ffffff;
    background:<?php echo $maincolor ?>;
}
.menulist ul li a:hover {
    color :#ffffff;
    background:#333333;
}
* html #owner_block_submenu ul li.selected a {
    background-position:left 10px;
}
*:first-child + html #owner_block_submenu ul li.selected a {
    background-position:left 8px;
}
#owner_block_submenu .submenu_group {
    border-bottom:1px solid <?php echo $midbg ?>;
    margin:10px 0 0 0;
    padding-bottom:10px;
}
#owner_block_submenu .submenu_group .submenu_group_filter ul li a, #owner_block_submenu .submenu_group .submenu_group_filetypes ul li a {
    color:#666666;
}
#owner_block_submenu .submenu_group .submenu_group_filter ul li.selected a, #owner_block_submenu .submenu_group .submenu_group_filetypes ul li.selected a {
    background:#999999;
    color:#ffffff;
}
#owner_block_submenu .submenu_group .submenu_group_filter ul li a:hover, #owner_block_submenu .submenu_group .submenu_group_filetypes ul li a:hover {
    color:#ffffff;
    background:#999999;
}
.pagination {
    background:#ffffff;
    margin:5px 10px 5px 10px;
    padding:5px;
}
.pagination .pagination_number {
    display:block;
    float:left;
    background:#ffffff;
    border:1px solid <?php echo $maincolor ?>;
    text-align:center;
    color:<?php echo $maincolor ?>;
    font-size:1em;
    font-weight:normal;
    margin:0 6px 0 0;
    padding:0 4px;
    cursor:pointer;
}
.pagination .pagination_number:hover {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
    text-decoration:none;
}
.pagination .pagination_more {
    display:block;
    float:left;
    background:#ffffff;
    border:1px solid #ffffff;
    text-align:center;
    color:<?php echo $maincolor ?>;
    font-size:1em;
    font-weight:normal;
    margin:0 6px 0 0;
    padding:0 4px;
}
.pagination .pagination_previous, .pagination .pagination_next {
    display:block;
    float:left;
    border:1px solid <?php echo $maincolor ?>;
    color:<?php echo $maincolor ?>;
    text-align:center;
    font-size:1em;
    font-weight:normal;
    margin:0 6px 0 0;
    padding:0 4px;
    cursor:pointer;
}
.pagination .pagination_previous:hover, .pagination .pagination_next:hover {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
    text-decoration:none;
}
.pagination .pagination_currentpage {
    display:block;
    float:left;
    background:<?php echo $maincolor ?>;
    border:1px solid <?php echo $maincolor ?>;
    text-align:center;
    color:#ffffff;
    font-size:1em;
    font-weight:bold;
    margin:0 6px 0 0;
    padding:0 4px;
    cursor:pointer;
}
ul#friends_collections_accordian {
    margin:0 0 0 0;
    padding:0;
}
#friends_collections_accordian li {
    margin:0 0 0 0;
    padding:0;
    list-style-type:none;
    color:#666666;
}
#friends_collections_accordian li h2 {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
    padding:4px 2px 4px 6px;
    margin:10px 0 10px 0;
    font-size:1.2em;
    cursor:pointer;
}
#friends_collections_accordian li h2:hover {
    background:#333333;
    color:#ffffff;
}
#friends_collections_accordian .friends_picker {
    background:#ffffff;
    padding:0;
    display:none;
}
#friends_collections_accordian .friends_collections_controls {
    font-size:70%;
    float:right;
}
#friends_collections_accordian .friends_collections_controls a {
    color:#999999;
    font-weight:normal;
}
.friendsPicker_container h3 {
    font-size:4em !important ;
    text-align:left;
    margin:0 0 10px 0 !important ;
    color:#999999 !important ;
    background:none !important ;
    padding:0 !important ;
}
.friendsPicker .friendsPicker_container .panel ul {
    text-align:left;
    margin:0;
    padding:0;
}
.friendsPicker_wrapper {
    margin:0;
    padding:0;
    position:relative;
    width:100%;
}
.friendsPicker {
    position:relative;
    overflow:hidden;
    margin:0;
    padding:0;
    width:100%;
    height:auto;
    background:#dcdcdc;
}
.friendspicker_savebuttons {
    background:#ffffff;
    margin:0 10px 10px 10px;
}
.friendsPicker .friendsPicker_container {
    position:relative;
    left:0;
    top:0;
    width:100%;
    list-style-type:none;
}
.friendsPicker .friendsPicker_container .panel {
    float:left;
    height:100%;
    position:relative;
    width:678px;
    margin:0;
    padding:0;
}
.friendsPicker .friendsPicker_container .panel .wrapper {
    margin:0;
    padding:4px 10px 10px 10px;
    min-height:230px;
}
.friendsPickerNavigation {
    margin:0 0 10px 0;
    padding:0;
}
.friendsPickerNavigation ul {
    list-style:none;
    padding-left:0;
}
.friendsPickerNavigation ul li {
    float:left;
    margin:0;
}
.friendsPickerNavigation a {
    font-weight:bold;
    text-align:center;
    color:#999999;
    text-decoration:none;
    display:block;
    padding:0;
    width:20px;
}
.tabHasContent {
    background:#ffffff;
    color:#333333 !important ;
}
.friendsPickerNavigation li a:hover {
    background:#333333;
    color:#ffffff !important ;
}
.friendsPickerNavigation li a.current {
    background:<?php echo $maincolor ?>;
    color:#ffffff !important ;
}
.friendsPickerNavigationAll {
    margin:0 0 0 20px;
    float:left;
}
.friendsPickerNavigationAll a {
    font-weight:bold;
    text-align:left;
    font-size:0.8em;
    background:#ffffff;
    color:#999999;
    text-decoration:none;
    display:block;
    padding:0 4px 0 4px;
    width:auto;
}
.friendsPickerNavigationAll a:hover {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
}
.friendsPickerNavigationL, .friendsPickerNavigationR {
    position:absolute;
    top:46px;
    text-indent:-9000em;
}
.friendsPickerNavigationL a, .friendsPickerNavigationR a {
    display:block;
    height:43px;
    width:43px;
}
.friendsPickerNavigationL {
    right:48px;
    z-index:1;
}
.friendsPickerNavigationR {
    right:0;
    z-index:1;
}
.friendsPickerNavigationL {
    background:url("<?php echo $vars['url']; ?>_graphics/friends_picker_arrows.gif") no-repeat left top;
}
.friendsPickerNavigationR {
    background:url("<?php echo $vars['url']; ?>_graphics/friends_picker_arrows.gif") no-repeat -60px top;
}
.friendsPickerNavigationL:hover {
    background:url("<?php echo $vars['url']; ?>_graphics/friends_picker_arrows.gif") no-repeat left -44px;
}
.friendsPickerNavigationR:hover {
    background:url("<?php echo $vars['url']; ?>_graphics/friends_picker_arrows.gif") no-repeat -60px -44px;
}
.friends_collections_controls a.delete_collection {
    display:block;
    cursor:pointer;
    width:14px;
    height:14px;
    margin:2px 3px 0 0;
    background:url("<?php echo $vars['url']; ?>_graphics/icon_customise_remove.png") no-repeat 0% 0%;
}
.friends_collections_controls a.delete_collection:hover {
    background-position:0% -16px;
}
.friendspicker_savebuttons .submit_button, .friendspicker_savebuttons .cancel_button {
    margin:5px 20px 5px 5px;
}
#collectionMembersTable {
    background:#dcdcdc;
    margin:10px 0 0 0;
    padding:10px 10px 0 10px;
}
a.toggle_customise_edit_panel {
    background:<?php echo $maincolor ?>;
    border:1px solid <?php echo $maincolor ?>;
    color:#ffffff;
    cursor:pointer;
    font:normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
    font-weight:bold;
    margin:5px 0;
    padding:5px;
    width:auto;
    float:right;
}
a.toggle_customise_edit_panel:hover {
    background:#fff;
    border:1px solid <?php echo $maincolor ?>;
    color:<?php echo $maincolor ?>;
}
#customise_editpanel {
    display:none;
    margin:20px 0;
    padding:10px;
    background:#fff;
    border:1px solid <?php echo $midbg ?>;
}
.customise_editpanel_instructions {
    width:73%;
    padding:0 0 10px 0;
}
.customise_editpanel_instructions h2 {
    border-bottom:2px solid <?php echo $midbg ?>;
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    margin:0 10px 5px;
    padding:7px;
}
.customise_editpanel_instructions p {
    margin:0 0 5px 0;
    line-height:1.4em;
}
#customise_editpanel_rhs {
    background:<?php echo $canvasbg ?>;
    border:1px solid <?php echo $midbg ?>;
    float:right;
    padding:5px;
    width:25%;
}
#customise_editpanel #customise_editpanel_rhs h2 {
    border-bottom:2px solid <?php echo $midbg ?>;
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:1.3em;
    line-height:1.2em;
    margin:0 10px 5px;
    padding:7px;
}
#widget_picker_gallery {
    padding:10px;
    overflow:scroll;
    height:350px;
    overflow-x:hidden;
}
#customise_page_view {
    width:73%;
    background:#ffffff;
}
#customise_page_view h2 {
    border-bottom:2px solid <?php echo $midbg ?>;
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:1.3em;
    line-height:1.2em;
    margin:0 10px 5px;
    padding:7px;
}
#profile_box_widgets {
    width:93%;
    margin:5px auto;
    padding:5px 5px 0 5px;
    min-height:50px;
    border:1px solid <?php echo $midbg ?>;
    background:#dcdcdc;
}
#customise_page_view h2.profile_box {
    width:93%;
    color:#999999;
}
#profile_box_widgets p {
    color:#999999;
}
#dashboard_editor_leftwidgetcolumn {
    width:31%;
    margin:0 2% 0 0;
    float:left;
    background:<?php echo $canvasbg ?>;
    border:1px solid <?php echo $midbg ?>;
    max-height:285px;
    overflow:scroll;
}
#dashboard_editor_middlewidgetcolumn {
    width:31%;
    margin:0 2% 0 0;
    float:left;
    background:<?php echo $canvasbg ?>;
    border:1px solid <?php echo $midbg ?>;
    max-height:285px;
    overflow:scroll;
}
#dashboard_editor_rightwidgetcolumn {
    width:31%;
    float:left;
    background:<?php echo $canvasbg ?>;
    border:1px solid <?php echo $midbg ?>;
    max-height:285px;
    overflow:scroll;
}
#leftcolumn_widgets, #middlecolumn_widgets, #rightcolumn_widgets {
    padding:10px;
    margin:5px;
    min-height:220px;
    min-width:180px;
    border: 1px solid #CCC;
}
#rightcolumn_widgets.long {
}
* html #leftcolumn_widgets {
    height:200px;
}
* html #middlecolumn_widgets {
    height:200px;
}
* html #rightcolumn_widgets {
    height:190px;
}
* html #rightcolumn_widgets.long {
    height:338px;
}
#customise_editpanel table.draggable_widget {
    background:<?php echo $midbg ?>;
    margin:10px 0 0;
    width:100%;
}
#widget_picker_gallery table.draggable_widget {
    background:<?php echo $midbg ?>;
    margin:10px 0 0;
    width:100%;
}
#customise_editpanel table.draggable_widget h3 {
    line-height:1.1em;
    overflow:hidden;
    padding:4px;
}
#widget_picker_gallery table.draggable_widget h3 {
    width:145px;
    line-height:1.1em;
    overflow:hidden;
    padding:4px;
}
#customise_editpanel img.more_info {
    background:url(<?php echo $vars['url']; ?>_graphics/icon_customise_info.gif) no-repeat left top;
    cursor:pointer;
}
#customise_editpanel img.drag_handle {
    background:url(<?php echo $vars['url']; ?>_graphics/icon_customise_drag.gif) no-repeat left top;
    cursor:move;
}
#customise_editpanel img {
    margin-top:4px;
}
#widget_moreinfo {
    position:absolute;
    border:1px solid <?php echo $midbg ?>;
    background:<?php echo $midbg ?>;
    color:#333333;
    padding:5px;
    display:none;
    width:200px;
    line-height:1.2em;
}
.droppable-hover {
    background:#bbe3fd;
}
.placeholder {
    border:2px dashed #aaa;
    width:196px !important ;
    margin:10px 0 10px 0;
}
.ui-sortable-helper {
    background:<?php echo $maincolor ?>;
    color:#ffffff;
    padding:4px;
    margin:10px 0 0 0;
    width:200px;
}
* html .placeholder {
    margin:0;
}
*:first-child + html .placeholder {
    margin:0;
}
* html .ui-sortable-helper h3 {
    padding:4px;
}
* html .ui-sortable-helper img.drag_handle, * html .ui-sortable-helper img.remove_me, * html .ui-sortable-helper img.more_info {
    padding-top:4px;
}
*:first-child + html .ui-sortable-helper h3 {
    padding:4px;
}
*:first-child + html .ui-sortable-helper img.drag_handle, *:first-child + html .ui-sortable-helper img.remove_me, *:first-child + html .ui-sortable-helper img.more_info {
    padding-top:4px;
}
#pages_breadcrumbs {
    font-size:80%;
    color:#bababa;
    padding:0;
    margin:2px 0 0 10px;
}
#pages_breadcrumbs a {
    color:#999999;
    text-decoration:none;
}
#pages_breadcrumbs a:hover {
    color:<?php echo $maincolor ?>;
    text-decoration:underline;
}
#content_area_user_title h2 {
    color:<?php echo $maincolor ?>;
    font-family:Arial, Helvetica, Tahoma, sans-serif;
    font-size:1.3em;
    line-height:1.2em;
    padding:7px;
    margin:0 10px 5px 10px;
    border-bottom:2px solid <?php echo $midbg ?>;
}
.collapsible_box {
    margin:0 0 10px 0;
    background:#fff;
    padding:15px;
    border:1px solid <?php echo $midbg ?>;
    display:none;
}
a.collapsibleboxlink {
    cursor:pointer;
}
.object_tag_string {
    background:url(<?php echo $vars['url']; ?>_graphics/icon_tag.gif) no-repeat left 2px;
    padding:0 0 0 14px;
    margin:0;
}
#profile_picture_form {
    display:inline-block;
}
#current_user_avatar {
    float:left;
    width:160px;
    height:130px;
    margin:20px;
}
#profile_picture_croppingtool {
    margin: 70px -8px;
}
#profile_picture_croppingtool #user_avatar {
    float:left;
    margin-right:20px;
}
#profile_picture_croppingtool #user_avatar_preview {
    float:left;
    position:relative;
    overflow:hidden;
    width:100px;
    height:100px;
}
.admin_statistics, .admin_users_online, .usersettings_statistics, .admin_adduser_link, #add-box, #search-box, #logbrowser_search_area {
    background:#ffffff;
    margin:0 10px 10px 10px;
    padding:10px;
}
.usersettings_statistics h3, .admin_statistics h3, .admin_users_online h3, .user_settings h3, .notification_methods h3, h3.settings {
    background:<?php echo $canvasbg ?>;
    color:<?php echo $maincolor ?>;
    font-size:1.1em;
    line-height:1em;
    margin:0 0 10px 0;
    padding:5px 15px;
}
.admin_users_online .profile_status {
    background: <?php echo $canvasbg ?>;
    margin: 0px;
    padding: 10px;
}
.admin_users_online p.owner_timestamp {
    padding-left:3px;
}
.admin_debug label, .admin_usage label {
    color:#333333;
    font-size:100%;
    font-weight:normal;
}
.admin_usage {
    border-bottom:1px solid <?php echo $midbg ?>;
    padding:0 0 20px 0;
}
.usersettings_statistics td, .admin_statistics td {
    padding:2px 10px;
    border-bottom:1px solid <?php echo $midbg ?>;
}
.usersettings_statistics td.column_one, .admin_statistics td.column_one {
    width:200px;
}
.usersettings_statistics table, .admin_statistics table {
    width:100%;
}
.usersettings_statistics table, .admin_statistics table {
    border-top:1px solid <?php echo $midbg ?>;
}
.usersettings_statistics table tr:hover, .admin_statistics table tr:hover {
    background:<?php echo $canvasbg ?>;
}
.mceLayout {
    width:683px;
}
p.longtext_editarea {
    margin:0 !important ;
}
.toggle_editor_container {
    margin:0 0 15px 0;
}
a.toggle_editor {
    display:block;
    float:right;
    text-align:right;
    color:#666666;
    font-size:1em;
    font-weight:normal;
}
div.ajax_loader {
    background:#ffffff url(<?php echo $vars['url']; ?>_graphics/ajax_loader.gif) no-repeat center 30px;
    width:auto;
    height:100px;
    margin:0 10px 0 10px;
}
#elgg_horizontal_tabbed_nav {
    margin:0 0 5px 0;
    padding:0;
    border-bottom:2px solid <?php echo $midbg ?>;
    display:table;
    width:100%;
}
#elgg_horizontal_tabbed_nav ul {
    list-style:none;
    padding:0;
    margin:0;
}
#elgg_horizontal_tabbed_nav li {
    float:left;
    border:2px solid <?php echo $midbg ?>;
    border-bottom-width:0;
    margin:0 0 0 10px;
}
#elgg_horizontal_tabbed_nav a {
    color: <?php echo $maincolor ?>;
    display: block;
    font-weight: bold;
    height: 24px;
    padding: 3px 10px 0px;
    text-align: center;
    text-decoration: none;
}
* html #elgg_horizontal_tabbed_nav a {
    display:inline;
}
#elgg_horizontal_tabbed_nav a:hover {
    color:#fff;
    background:<?php echo $maincolor ?>;
}
#elgg_horizontal_tabbed_nav .selected {
    border-color:<?php echo $midbg ?>;
    background:#ffffff;
}
#elgg_horizontal_tabbed_nav .selected a {
    position:relative;
    top:2px;
    background:#ffffff;
    color:<?php echo $maincolor ?>;
}
* html #elgg_horizontal_tabbed_nav .selected a {
    top:3px;
}
.ac_results {
    padding:0;
    border:1px solid black;
    background-color:#ffffff;
    overflow:hidden;
    z-index:99999;
}
.ac_results ul {
    width:100%;
    list-style-position:outside;
    list-style:none;
    padding:0;
    margin:0;
}
.ac_results li {
    margin:0;
    padding:2px 5px;
    cursor:default;
    display:block;
    font:menu;
    font-size:1em;
    line-height:16px;
    overflow:hidden;
}
.ac_loading {
    background:#ffffff url(<?php echo $vars['url']; ?>_graphics/indicator.gif) no-repeat right center;
}
.ac_odd {
    background-color:#eee;
}
.ac_over {
    background-color:#0a246a;
    color:#ffffff;
}
.autocomplete {
    width:300px;
}
.ac_results strong {
    font-weight:bold;
}
.user_picker .user_picker_entry {
    clear:both;
    padding:1em;
}
.livesearch_icon {
    float:left;
    padding-right:1em;
}
.draggable {
    cursor:move;
}
#profile_icon_wrapper {
    text-align:center;
    width:100px;
}
#profile_icon_wrapper img {
}
#two_column_left_sidebar_maincontent .input-textarea {
    width:95%;
}
.highlight {
    text-transform:capitalize;
    color: #333333;
}
.myprofile {
    width:100px;
    float:left;
    height: 100%;
    margin-right:20px;
}
.publish {
    width:120px;
    float:left;
    height: 100%;
    margin-right:20px;
}
.status {
    width:35%;
    float:left;
    height: 100%;
    margin-right:20px;
}
.inboxmessages {
    width:30%;
    float:left;
    height: 100%;
    margin-right:20px;
}
#userpanel {
    display:none;
    height:275px;
    background: <?php echo $canvasbg ?> url('<?php echo $vars['url'] ?>mod/theme_seashells/graphics/userpanelbg.png') repeat-x;
    padding:0 20px;
}
#userpanel_wrapper {
    position:relative;
    height:32px;
    min-width:890px;
    max-width:<?php echo $headerwidth ?>px;
    margin:0 auto;
    height:275px;
    padding-top: 13px;
}
#userpanel .userprofile img{
}
#userpanel .profile_status {
    color: <?php echo $maincolor ?>;
    background: #ffffff;
    padding: 5px 20px;
    margin: 5px;
    border: 1px solid <?php echo $midbg ?>;
}
#userpanel .profile_status span {
    color: #666;
    font-size: 10px;
    padding: 10px;
}

#userpanel .profile_status a.status_update {
    display:none;
}
#userpanel .thewire_characters_remaining {
    text-align: right;
    float: right;
    font-size: 10px;
}
#userpanel .post_to_wire {
    margin: 5px;
    padding: 5px 15px;
    background:none;
}
#userpanel .post_to_wire input[type="submit"] {
    margin: 3px;
    height: 22px;
    color: #fff;
    background: #666;
    border:1px solid #666;
    cursor: pointer;
    font-size: 10px;
    padding: 2px 4px;
}
#userpanel .post_to_wire input[type="submit"]:hover {
    color:#666;
    background: #fff;
}
#userpanel h3 {
    font-size:1em;
    color: #666;
}
.bar_header {
    height: 18px;
    padding: 4px;
    color: #333333;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    margin-bottom:2px;
    border-bottom: 2px solid <?php echo $midbg ?>;
}
.bar_header a {
    color:#333333;
}
.bar_header a:hover {
    color:<?php echo $maincolor ?>;
}
.index_members {
    float:left;
    margin:2pt 5px 3px 0pt;
}
.index_members .usericon{
    width:40px;
    padding:2px;
    border:1px solid transparent;
}
.index_members .usericon:hover {
    border:1px solid <?php echo $maincolor ?>;
    background: <?php echo $midbg ?>;
}
#seashells_menu .menu .user_mini_avatar	 {
    padding-top:2px;
}
.uppermenuitem {
    padding:10px;
    text-align:center;
    float:left;
}
.uppermenuitem:hover {
    background:<?php echo $canvasbg ?>
}
.uppermenuitem a {
    text-transform:uppercase;
    font-size:11px;
    font-weight:bold;
    padding-top:2px;
}

.floatright {
    float:right;
}
.floatleft {
    float:left;
}
.headerloginform {
    float:left;
    border:1px solid <?php echo $midbg ?>;
    display:none;
}