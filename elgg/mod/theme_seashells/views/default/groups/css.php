<?php
/*** Elgg Groups css* * @package groups* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2* @author Curverider Ltd <info@elgg.com>* @copyright Curverider Ltd 2008-2010* @link http://elgg.com/*/$pagebg = get_plugin_setting('pagebg', 'theme_seashells');
$maincolor = get_plugin_setting('maincolor', 'theme_seashells');
$canvasbg = get_plugin_setting('canvasbg', 'theme_seashells');
$midbg = get_plugin_setting('midbg', 'theme_seashells');
?>#content_area_group_title h2 {border-bottom: 2px solid <?php echo $midbg ?>;
color: <?php echo $maincolor ?>;
font-family: Arial, Helvetica, Tahoma, sans-serif;
font-size: 1.3em;
line-height: 1.2em;
margin: 0px 10px 5px;
padding: 7px;
}
#topic_posts #content_area_group_title h2 {margin:0 0 0 0;
}
#two_column_left_sidebar_maincontent #owner_block_content {margin:0 0 10px 0 !important;
}
#groups_info_column_left {margin: 10px 0px;
}
#groups_info_column_left ul {margin-left:25px;
}
#groups_info_column_left .odd {background:<?php echo
$canvasbg ?>;
padding:4px 10px;
}
#groups_info_column_left .even {background:<?php echo
$canvasbg ?>;
padding:4px 10px;
}
#groups_info_column_left p {margin:0 0 7px 0;
padding:5px 15px;
}
#groups_info_column_right {float: right;
margin: 19px 12px;
text-align: right;
border: 2px solid <?php echo $midbg ?>;
background:#fff;
text-align:center;
}

#groups_info_column_right img {
margin:3px;}
#groups_info_wide p {padding-left: 10px;
	text-align: left;
}
#groups_info_wide p a {background: <?php echo $maincolor ?>;
border: 1px solid <?php echo $maincolor ?>;
color: #ffffff;
cursor: pointer;
font: normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
font-weight: bold;
margin: 10px 0px;
padding: 5px;
width: auto;
}
#groups_info_wide p a:hover {background: #fff;
border: 1px solid <?php echo $maincolor ?>;
color: <?php echo $maincolor ?>;
}
#group_stats {background: <?php echo
$canvasbg ?>;
padding: 5px;
}
#group_stats p {margin:0;
}
#group_members {padding : 20px;
border: 1px solid <?php echo $midbg ?>;
background:#ffffff;
margin-bottom:20px;
}
#group_members h2 {
color: <?php echo $maincolor ?>;
font-family: Arial, Helvetica, Tahoma, sans-serif;
font-size: 1.1em;
line-height: 1.2em;
margin: 0px 10px 5px;
padding: 7px;
}
<?php if (get_plugin_setting('columnnumber', 'theme_seashells') == '2columns') {  ?>
#right_column {
width:48%;
float:right;
}
#left_column {
width:48%;
float:left;
}
<?php } else { ?>
#right_column {
width:100%;
}
#left_column {
width:100%;
}
<?php } ?>

.group_widget {
margin:0 0 5px;
border:1px solid <?php echo $midbg ?>;
border-top:0px;
}
/* IE 6 fixes */* html #left_column { margin:0 0 0 5px;
}* html #right_column { margin:0 5px 0 0;
}
#right_column h2,#left_column h2,#fullcolumn h2 {
font-family: Arial, Helvetica, Tahoma, sans-serif;
font-size: 1.1em;
line-height: 1.2em;
padding: 7px;
background: <?php echo $midbg ?>
}
#fullcolumn {
background: #ffffff;
margin: 20px 0px;
border: 1px solid <?php echo $midbg ?>;
border-top:0px;
}
#right_column, #left_column {
background: #ffffff;
}


#fullcolumn .contentWrapper {margin:0px;
padding:0px;
}
.member_icon {margin:0 0 6px 6px;
float:left;
}
/* IE6 */* html #topic_post_tbl { width:676px !important;
}
/* all browsers - force tinyMCE on edit comments to be full-width */.edit_forum_comments .defaultSkin table.mceLayout {width: 636px !important;
}
/* topics overview page */#forum_topics {padding:10px;
margin:0 10px 0 10px;
background:#ffffff;
}
/* topics individual view page */#topic_posts {margin:0 10px 5px 10px;
}
#topic_posts #pages_breadcrumbs {margin:2px 0 0 0px;
}
#topic_posts form {padding:10px;
margin:30px 0 0 0;
background:#ffffff;
}
.topic_post {padding:10px;
margin:0 0 5px 0;
background:#ffffff;
}
.topic_post .post_icon {float:left;
margin:0 8px 4px 0;
}
.topic_post h2 {margin-bottom:20px;
}
.topic_post p.topic-post-menu {margin:0;
}
.topic_post p.topic-post-menu a.collapsibleboxlink {padding-left:10px;
}
.topic_post table, .topic_post td {border:none;
}
/* group latest discussions widget */#latest_discussion_widget {margin:0 0 20px 0;
background:#ffffff;
}
/* group files widget */#filerepo_widget_layout {margin:0 0 20px 0;
padding: 0 0 5px 0;
background:#ffffff;
}
/* group pages widget */#group_pages_widget {margin:0 0 20px 0;
padding: 0 0 5px 0;
background:#ffffff;
}
#group_pages_widget .search_listing {}
#right_column .filerepo_widget_singleitem {background: <?php echo
$midbg ?> !important;
margin:0 10px 5px 10px;
}
#left_column .filerepo_widget_singleitem {background: <?php echo
$midbg ?> !important;
margin:0 10px 5px 10px;
}
.forum_latest {margin:5px auto;
padding:5px;
width:92%border-bottom:1px solid <?php echo $midbg ?>;
}
.forum_latest:hover {background: <?php echo
$canvasbg ?>;
}
.forum_latest .topic_owner_icon {float:left;
}
.forum_latest .topic_title {margin-left:35px;
}
.forum_latest .topic_title p {line-height: 1.0em;
padding:0;
margin:0;
font-weight: bold;
}
.forum_latest p.topic_replies {padding:3px 0 0 0;
margin:0;
color:#666666;
}
.add_topic {background:#ffffff;
margin:5px 10px;
padding:10px 10px 10px 6px;
}a.add_topic_button {background: <?php echo $maincolor ?>;
border: 1px solid <?php echo $maincolor ?>;
color: #ffffff;
cursor: pointer;
font: normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
font-weight: bold;
margin: 10px 0px;
padding: 5px;
width: auto;
}a.add_topic_button:hover {background: #fff;
border: 1px solid <?php echo $maincolor ?>;
color: <?php echo $maincolor ?>;
}
/* latest discussion listing */.latest_discussion_info {float:right;
width:300px;
text-align: right;
margin-left: 10px;
}
.groups .search_listing br {height:0;
line-height:0;
}span.timestamp {color:#666666;
font-size: 90%;
}
.latest_discussion_info .timestamp {font-size: 0.85em;
}
/* new groups page */.groups .search_listing {}
.groups .search_listing:hover {background:<?php echo
$canvasbg ?>;
}
.groups .group_count {font-weight: bold;
color: #666666;
margin:0 0 5px 4px;
}
.groups .search_listing_info {color:#666666;
}
.groupdetails {float:right;
}
.groupdetails p {margin:0;
padding:0;
line-height: 1.1em;
text-align: right;
}
#groups_closed_membership {margin:0 10px 20px 10px;
padding: 3px 5px 5px 5px;
background:<?php echo $canvasbg ?>;
}
#groups_closed_membership p {margin:0;
}
/* groups membership widget */.groupmembershipwidget .contentWrapper {margin:0 10px 5px 10px;
}
.groupmembershipwidget .contentWrapper .groupicon {float:left;
margin:0 10px 0 0;
}
.groupmembershipwidget .search_listing_info p {color: #666666;
}
.groupmembershipwidget .search_listing_info span {font-weight: bold;
}
/* groups sidebar */.featuredgroups .contentWrapper {margin:0 0 10px 0;
}
.featuredgroups .contentWrapper .groupicon {float:left;
margin:0 10px 0 0;
}
.featuredgroups .contentWrapper p {margin: 0;
line-height: 1.2em;
color:#666666;
}
.featuredgroups .contentWrapper span {font-weight: bold;
}
#groupssearchform {border-bottom: 1px solid #cccccc;
margin-bottom: 10px;
}
#groupssearchform input[type="submit"] {padding:2px;
height:auto;
margin:4px 0 5px 0;
}
.sidebarBox #owner_block_submenu {margin:5px 0 0 0;
}
/* delete post */.delete_discussion {}
.delete_discussion a {display:block;
float:right;
cursor: pointer;
width:14px;
height:14px;
margin:0;
background: url("<?php echo $vars['url'];  ?>_graphics/icon_customise_remove.png") no-repeat 0 0;
}
.delete_discussion a:hover {background-position: 0 -16px;
text-decoration: none;
}
/* IE6 */* html .delete_discussion a { font-size: 1px;
 }
/* IE7 */*:first-child+html .delete_discussion a { font-size: 1px;
 }
/* delete group button */#delete_group_option input[type="submit"] {background:<?php echo
$midbg ?>;
border-color:<?php echo
$midbg ?>;
color:#333333;
 margin:0;
float:right;
clear:both;
}
#delete_group_option input[type="submit"]:hover {background:red;
border-color:red;
color:#ffffff;
}
#groupsearchform .search_input {width:176px;
}