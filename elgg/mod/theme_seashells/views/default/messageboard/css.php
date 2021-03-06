<?php
/*** Elgg Messageboard CSS extender * * @package ElggMessageBoard* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2* @author Curverider Ltd <info@elgg.com>* @copyright Curverider Ltd 2008-2010* @link http://elgg.com/*/?>/* input msg area */#mb_input_wrapper {margin:0 10px 5px 10px;
padding:5px;
background: #ffffff;
}
#mb_input_wrapper .input_textarea {width:100%;
}
.collapsable_box_content #mb_input_wrapper .input_textarea {width:100%;
}
.message_item_timestamp {color: #666;
font-size: 80%;
}p.message_item_timestamp {margin-bottom: 10px;
}
/* wraps each message */.messageboard {margin:0 10px 5px 10px;
padding:0;
background: #ffffff;
}
.messageboard .message_sender {float:left;
margin: 5px 10px 0 5px;
}
/* IE6 */* html .messageboard { width: 280px;
 } * html #two_column_left_sidebar_maincontent .messageboard { width: 100%;
 }* html .messageboard .message_sender { margin: 5px 10px 0 2px;
 }* html #mb_input_wrapper .input_textarea { width:100%;
 }
/* IE7 */*:first-child+html .messageboard { width: 100%;
 } *:first-child+html #two_column_left_sidebar_maincontent .messageboard { width: 100%;
 }*:first-child+html .messageboard .message_sender { margin: 5px 10px 0 2px;
 }
.messageboard .message p {line-height: 1.2em;
background:<?php echo	
$canvasbg ?>;
padding:10px;
overflow-y:hidden;
overflow-x:auto;
}
.message_buttons {padding:0 0 3px 4px;
margin:0;
font-size: 90%;
color:#666666;
}
.messageboard .delete_message a {display:block;
float:right;
cursor: pointer;
width:14px;
height:14px;
margin:0 3px 3px 0;
background: url("<?php echo $vars['url'];  ?>_graphics/icon_customise_remove.png") no-repeat 0 0;
text-indent: -9000px;
}
.messageboard .delete_message a:hover {background-position: 0 -16px;
}