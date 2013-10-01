<?php
/*** Elgg Messages CSS extender* * @package ElggMessages* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2* @author Curverider Ltd <info@elgg.com>* @copyright Curverider Ltd 2008-2010* @link http://elgg.com/*/?>/*-------------------------------MESSAGING PLUGIN-------------------------------*/#messages {margin: 10px auto;
width: 90%;
}
.actiontitle {font-weight: bold;
font-size: 110%;
margin: 0 0 10px 0;
}
#messages .pagination {margin:5px 0 5px 0;
}
#messages input[type="checkbox"] {margin:0;
padding:0;
border:none;
}
.messages_buttonbank {background:#ffffff;
margin:5px 10px;
padding:5px;
text-align: right;
}
.messages_buttonbank input {margin:0 0 0 10px;
}
.messages_buttonbank input[type="button"] {font: 12px/100% Arial, Helvetica, sans-serif;
font-weight: bold;
color: <?php echo $maincolor ?>;
background:#dddddd;
border: 1px solid #999999;
width: auto;
height: 25px;
padding: 2px 6px 2px 6px;
margin:0 0 0 10px;
cursor: pointer;
}
.messages_buttonbank input[type="button"]:hover {background: <?php echo $maincolor ?>;
border: 1px solid <?php echo $maincolor ?>;
color:#ffffff;
}
#messages td {text-align: left;
vertical-align:middle;
padding: 5px;
}
#messages .message_notread {margin-bottom:	 5px;
padding: 10px;
background: #ffffff;
border: 2px solid <?php echo $maincolor ?>;
}
#messages .message_read, .message_sent {background: <?php echo	
$canvasbg ?>;
border: 2px solid <?php echo	
$canvasbg ?>;
margin-bottom: 5px;
padding: 10px;
}
#messages .message_notread td {}
#messages .message_read td {}
#messages .delete_msg a {display:block;
cursor: pointer;
width:14px;
height:14px;
margin:0;
background: url("<?php echo $vars['url'];  ?>_graphics/icon_customise_remove.png") no-repeat right 0;
text-indent: -9000px;
float:right;
}
#messages .delete_msg a:hover {background-position: right -16px;
}
/* IE6 */* html #messages .delete_msg a { background-position: right 4px;
 }* html #messages .delete_msg a:hover { background-position: right 4px;
 }
#messages .usericon,#messages .groupicon {float: left;
margin: 0 15px 0 0;
}
#messages .msgsender {color:#666666;
line-height: 1em;
margin:0;
padding:0;
float:left;
}
#messages .msgsender small {color:#AAAAAA;
}
#messages .msgsubject {line-height: 100%;
margin-left: 50px;
}
.msgsubject {font-weight:bold;
}
.messages_single_icon  {float: left;
width:110px;
}
.messages_single_icon .usericon,.messages_single_icon .groupicon {float: left;
margin: 0 10px 10px 0;
}
.messages_to {float: left;
margin-right: 10px;
}
/* view and reply to message view */.message_body {margin-left: 120px;
}
.message_body .messagebody {padding:0;
margin:10px 0 10px 0;
font-size: 120%;
border-bottom:1px solid #cccccc;
}
/* drop down message reply form */#message_reply_form { display:none;
 }
.new_messages_count {color:#666666;
}
/* tinyMCE container */#message_reply_editor #message_tbl {width:680px !important;
}
/* IE6 */* html #message_reply_editor #message_tbl { width:676px !important;
}
#messages_return {margin:4px 0 4px 10px;
}
#messages_return p {margin:0;
}
.messages_single {background: #ffffff;
margin:0 10px 10px 10px;
padding:10px;
	}
/* when displaying original msg in reply view */.previous_message {background:<?php echo	
$midbg ?>;
padding:10px;
margin:0 0 20px 0;
}
.previous_message p {padding:0;
margin:0 0 5px 0;
font-size: 100%;
}
#notificationstable td.sitetogglefield {width:50px;
text-align: center;
vertical-align: middle;
}
#notificationstable td.sitetogglefield input {margin-right:36px;
margin-top:5px;
}
#notificationstable td.sitetogglefield a {width:46px;
height:24px;
cursor: pointer;
display: block;
outline: none;
}
#notificationstable td.sitetogglefield a.sitetoggleOff {background: url(<?php echo $vars['url'];  ?>mod/messages/graphics/icon_notifications_site.gif) no-repeat right 2px;
}
#notificationstable td.sitetogglefield a.sitetoggleOn {background: url(<?php echo $vars['url'];  ?>mod/messages/graphics/icon_notifications_site.gif) no-repeat right -36px;
} 