<?php
/*
*
* Elgg thewire CSS extender
* 
* @package ElggTheWire
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* @author Curverider <info@elgg.com>
* @copyright Curverider Ltd 2058-2059
* @link http://elgg.com/
*/

?>

/* widget */

.thewire-singlepage {margin:10px;
border-bottom: 1px solid <?php echo $midbg ?>;
border-top: 1px solid <?php echo $midbg ?>;
border-left: 5px solid <?php echo $midbg ?>;
margin: 10px 0px;
padding: 12px 19px;
background:#ffffff;
}
.thewire-singlepage:hover {
border-bottom: 1px solid <?php echo $midbg ?>;
border-top: 1px solid <?php echo $midbg ?>;
border-left: 5px solid <?php echo $maincolor ?>;
margin: 10px 0px;
padding: 12px 19px;
background:<?php echo $canvasbg ?>;
}
.thewire-singlepage .note_body {
}
.collapsable_box_content .note_body {line-height:1.2em;
}
.thewire-singlepage .thewire-post {margin-bottom:5px;
}
.thewire-post {margin-bottom:10px;
}
.thewire-post .note_date {font-size:90%;
color:#666666;
padding:0;
}
.thewire_icon {float:left;
margin:0 8px 4px 2px;
}
.note_body {margin:0;
padding:6px 4px 4px 4px;
min-height: 40px;
line-height: 1.4em;
}
.thewire_options {float:right;
width:35px;
margin:0 0 0 20px;
}
.thewire-post .reply {color: #000;
cursor: pointer;
display:block;
font-size:11px;
font-weight: bold;
padding: 2px;
width: 35px;
background: <?php echo	
$canvasbg ?>;
text-align:center;
border: 1px solid <?php echo	
$canvasbg ?>;
}
.thewire-post .reply:hover {background: <?php echo $maincolor ?>;
border: 1px solid <?php echo $maincolor ?>;
color:#ffffff;
text-decoration: none;
}
.thewire-post .delete_note {}
.thewire-post .delete_note a {display:block;
text-align:center;
padding: 2px;
font-size:10px;
font-weight: bold;
color: <?php echo $maincolor ?>;
cursor: pointer;
border: 1px solid <?php echo	
$canvasbg ?>;
	width:35px;
}
.thewire-post .delete_note a:hover {background: <?php echo $maincolor ?>;
color:#fff;
border: 1px solid <?php echo $maincolor ?>;
	}
/* IE 6 fix */* html .thewire-post .delete_note a { background-position-y: 2px;
 }* html .thewire-post .delete_note a:hover { background-position-y: -14px;
 }
.post_to_wire {background: #ffffff;
margin:0 10px 10px 10px;
padding:10px;
	}
.post_to_wire input[type="submit"] {margin:0;
}
/* reply form */textarea#thewire_large-textarea {
width: 100%;
height: 50px;
font-family: Arial, 'Trebuchet MS','Lucida Grande', sans-serif;
font-size: 100%;
color:#666666;
}
/* IE 6 fix */* html textarea#thewire_large-textarea { width: 642px;
}input.thewire_characters_remaining_field { color:#333333;
border:none;
font-size: 100%;
font-weight: bold;
padding:0 2px 0 0;
margin:0;
text-align: right;
background: #ffffff;
}input.thewire_characters_remaining_field:focus {border:none;
background:#ffffff;
}
.thewire_characters_remaining {text-align: right;
} 