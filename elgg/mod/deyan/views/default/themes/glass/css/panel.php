<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme glass
 * @css panel
 *
 * This file holds the styles of the panel(topbar)
 * 
 **/ 
?> 

/* ***************************************
	PANEL LEFT
*****************************************/
.deyan-panel-left {
	float: left;
}
.deyan-panel-left .deyan-panel-item {
	float: left;
}


/* ***************************************
	PANEL RIGHT
*****************************************/
.deyan-panel-right {
	float: right;
}
.deyan-panel-right .deyan-panel-item {
	float: right;
}

/* ***************************************
	PANEL ITEMS
*****************************************/
/* Normal links */
.deyan-panel-item .elgg-button-normal {
	padding:9px 13px 0 13px;
	float: left;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border: none;
	border-left: 2px solid transparent;
	border-radius: 0;
	box-shadow: 0 0 0;
	height: 26px;
}
.deyan-panel-item .elgg-button-normal:hover {
	background: none;
	text-decoration:none;
}

/* Dropdown links */
.deyan-panel-item .elgg-button-dropdown {
	padding:9px 6px 0 6px;
	float: left;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border: none;
	border-top: 2px solid transparent;
	border-left: 2px solid transparent;
	border-radius: 0;
	box-shadow: 0 0 0;
	height: 24px;
}
.deyan-panel-item .elgg-button-dropdown:hover {
	background: none;
	text-decoration:none;
}

.deyan-panel-item .elgg-button-dropdown.elgg-state-active {
	background: rgb(35, 35, 35);
	outline: none;
	color: #ccc;
	border-top:2px solid rgb(29, 29, 29);
	border-left:2px solid rgb(29, 29, 29);
	border-radius: 5px;
}

/* full size modules*/
.deyan-panel-module-full {
	background: rgba(0, 0, 0, .9);
	position: fixed;
	display: none;
	border: none;
	width: 100%;
	height: 110%;
	margin-bottom: -20px;
	
}

.deyan-panel-module-full-inner {
	background: <?php echo $vars['theme']['panel_background']; ?>;
	border: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-radius: 5px;
	width: 800px;
	margin: 130px auto 0 auto;
	padding: 5px;
	text-shadow: 0px 0px 5px #000;
}
.deyan-panel-module-full-inner label {
	color: #fff;
}

/* small size modules*/
.deyan-panel-module-small {
	background: none;
	position: fixed;
	display: none;
	border: none;
	width: 320px;
	z-index: 9999;
	
}

.deyan-panel-module-small-inner {
	position: absolute;
	background: <?php echo $vars['theme']['panel_background']; ?>;
	border: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-radius: 5px;
	margin: 10px 0 0 0;
	padding: 5px;
	width: 300px;
	text-shadow: 0px 0px 5px #000;
	box-shadow: 0px 10px 5px <?php echo $vars['theme']['shadow']; ?>;

}
.deyan-panel-module-small-inner label {
	color: #fff;
}

/* ***************************************
	USER MENU
*****************************************/
.elgg-menu-user {
	padding: 10px;
}

.elgg-menu-user a {
	display: block;
	color: #fff;
	text-shadow: 0px 0px 5px #fff;
	border-radius: 5px;
	padding: 5px;
}
.elgg-menu-user a:hover {
	
	text-decoration: none;
	font-weight: bold;
	background: #666;
	color: #000;
}
.elgg-menu-user li.elgg-state-selected > a {
	background: rgb(35, 35, 35);
	outline: none;
	color: #fff;
	font-weight: bold;
	border: none;
	border-top:2px solid rgb(29, 29, 29);
	border-left:2px solid rgb(29, 29, 29);
	border-radius: 5px;
}
#deyan-panel-module-id-user-menu {
	width: 170px;
}
#deyan-panel-module-id-user-menu .deyan-panel-module-small-inner {
	width: 150px;
}

/* ***************************************
	START MENU
*****************************************/
.elgg-menu-start {
	float: left;
}

.elgg-menu-start > li {
	float: left;
}

.elgg-menu-start > li > a {
	padding: 15px;
	color: #fff;
	margin: 10px;
	width: 80px;
	height: 80px;
	text-align: center;
	border: 1px solid <?php echo $vars['theme']['border']; ?>;
	border-radius: 5px;
}

.elgg-menu-start > li > a:hover {
	color: #000;
	background: <?php echo $vars['theme']['hover']; ?>;
	font-weight: bold;
	text-decoration: none;
}




/**********************************

 PANEL MODULES

***********************************/

/**********************************
Search mod
***********************************/
.deyan-panel-right .elgg-search {
	float: right;
	margin: 5px 10px 0 10px;
}
.deyan-panel-right .elgg-search input[type=text] {
	width: 230px;
}
.deyan-panel-right .elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	border-radius: 5px;
	
	border: 1px solid #333;
	border-bottom: 2px groove #333;
	color: white;
	font-size: 12px;
	font-weight: bold;
	padding: 3px 4px 3px 26px;
	background: #777 url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 2px -718px;
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	background-color: #eef;
	background-position: 2px -700px;
	border: 1px solid white;
	color: #0054A7;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}


/********************************
 Messages
********************************/
.message.unread {
	font-weight: bold;
	text-shadow: none;
}