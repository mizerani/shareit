.searchtype {background: #FFFACD;
color: black;
}
.searchtypes {border: 1px #EEEEEE solid;
padding: 4px;
margin: 6px;
}
.searchListing {display: block;
margin-bottom: 2em;
}
.searchMatch {background-color: #FFFF66;
}
.searchMatchColor1 {background-color: #FFFF66;
}
.searchMatchColor2 {background-color: #A0FFFF;
}
.searchMatchColor3 {background-color: #FF9999;
}
.searchMatchColor4 {background-color: #FF66FF;
}
.searchMatchColor5 {background-color: #99FF99;
}
.searchTitle {text-decoration: underline;
}
#searchform input.search_input {background-color:#FFFFFF;
border:1px solid <?php echo $midbg ?>;
color:<?php echo $maincolor ?>;
font-size:12px;
height: 18px;
padding: 2px 5px;
width: 100%;
margin-top:-3px;
}
#searchform input.search_input:focus {outline:1;
}
#searchform input.search_submit_button {background: <?php echo $maincolor ?>;
border: 1px solid <?php echo $maincolor ?>;
color: #ffffff;
cursor: pointer;
font: normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
font-weight: bold;
height: 25px;
margin: 10px 0px;
padding: 1px 4px;
width: auto;
}
#searchform input.search_submit_button:hover {background: #ffffff;
border: 1px solid <?php echo $maincolor ?>;
color: <?php echo $maincolor ?>;
}
.search_listing {}
.entity_gallery_item .search_listing {background: none;
text-align: center;
}
/* override the entity container piece */.search_listing .search_listing {
background: transparent;
margin: 0;
padding: 0;
}
/* formatting for the search results */.search_listing .item_timestamp {font-style: italic;
} 