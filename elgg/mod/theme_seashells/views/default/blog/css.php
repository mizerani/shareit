<?php
	/*** Elgg blog CSS extender
	* @package ElggBlog
	* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	* @author Curverider Ltd <info@elgg.com>
	* @copyright Curverider Ltd 2008-2010
	* @link http://elgg.com/
	*
	* EDITED FOR SEASHELLS THEME BY ISMAYIL KHAYREDINOV
	*/
?>

#blogs .pagination {
margin:5px 10px 0 10px;
padding:5px;
display:block;
}
#blogs #two_column_left_sidebar_maincontent {
padding-bottom:10px;
}
.singleview {
border-bottom: 1px solid <?php echo $midbg ?>;
border-top: 1px solid <?php echo $midbg ?>;
border-left: 5px solid <?php echo $midbg ?>;
margin: 10px 0px;
padding: 12px 19px;
background:#ffffff;
}
.singleview:hover {
border-bottom: 1px solid <?php echo $midbg ?>;
border-top: 1px solid <?php echo $midbg ?>;
border-left: 5px solid <?php echo $maincolor ?>;
margin: 10px 0px;
padding: 12px 19px;
background:<?php echo $canvasbg ?>;
}

.blog_post_icon {
float:left;
margin:3px 0 0 0;
padding:0;
}
.blog_post h3 {
font-size: 150%;
margin:0 0 10px 0;
padding:0;
}
.blog_post h3 a {
text-decoration: none;
}
.blog_post p {margin: 0 0 5px 0;
}
.blog_post .strapline {
margin: 0 0 0 35px;
padding:0;
color: #aaa;
line-height:1em;
}
.blog_post p.tags {
background:transparent url(<?php echo $vars['url'];  ?>_graphics/icon_tag.gif) no-repeat scroll left 2px;
margin:0 0 7px 35px;
padding:0pt 0pt 0pt 16px;
min-height:22px;
}
.blog_post p.options {text-align:right}
.blog_post .options a{
background: <?php echo $maincolor ?>;
border: 1px solid <?php echo $maincolor ?>;
color: #ffffff;
cursor: pointer;
font: normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
font-weight: bold;
height: 25px;
margin: 10px 0px;
padding: 2px 6px;
width: auto;
}
.blog_post .options a:hover{
background: #fff;
border: 1px solid <?php echo $maincolor ?>;
color: <?php echo $maincolor ?>;
cursor: pointer;
font: normal normal normal 12px/100% Arial, Helvetica, Tahoma, sans-serif;
font-weight: bold;
height: 25px;
margin: 10px 0px;
padding: 2px 6px;
width: auto;
}
.blog_post_body {
border-left: 2px solid <?php echo $midbg ?>;
margin: 10px 20px;
padding: 5px 20px;
}
.blog_post_body img[align="left"] {
margin: 10px 10px 10px 0;
float:left;
}
.blog_post_body img[align="right"] {
margin: 10px 0 10px 10px;
float:right;
}
.blog_post_body img {
margin: 10px !important;
}
.blog-comments h3 {
font-size: 150%;
margin-bottom: 10px;
}
.blog-comment {
margin-top: 10px;
margin-bottom:20px;
border-bottom: 1px solid #aaaaaa;
}
.blog-comment img {
float:left;
margin: 0 10px 0 0;
}
.blog-comment-menu {
margin:0;
}
.blog-comment-byline {
background: #dddddd;
height:22px;
padding-top:3px;
margin:0;
}
.blog-comment-text {margin:5px 0 5px 0;
}
/* New blog edit column */#blog_edit_page {
/* background: <?php echo $canvasbg ?>;
 */margin-top:-10px;
}
#blog_edit_page #content_area_user_title h2 {}
#blog_edit_page #blog_edit_sidebar #content_area_user_title h2 {
border-bottom: 2px solid <?php echo $midbg ?>;
color: <?php echo $maincolor ?>;
font-family: Arial, Helvetica, Tahoma, sans-serif;
font-size: 1em;
line-height: 1.2em;
margin: 5px 5px 15px;
padding: 4px;
}
#blog_edit_page #blog_edit_sidebar {
background: #ffffff;
border: 1px solid <?php echo $midbg ?>;
padding:20px;
margin-bottom: 10px;
}
#blog_edit_page form {
margin:20px;
}
#blog_edit_page #two_column_left_sidebar_210 {
margin: 0px 2% 0px 0px;
padding: 0px;
width: 28%;
float:left;
}
#blog_edit_page #two_column_left_sidebar_maincontent {
background: #ffffff;
float: left;
margin: 0px 0px 20px;
padding: 20px;
width: 65%;
border: 1px solid <?php echo $midbg ?>;
}
/* unsaved blog post preview */.blog_previewpane {
border:1px solid #D3322A;
background:#F7DAD8;
padding:10px;
margin:10px;
}
.blog_previewpane p {
margin:0;
}
#blog_edit_sidebar .publish_controls,#blog_edit_sidebar .blog_access,#blog_edit_sidebar .publish_options,#blog_edit_sidebar .publish_blog,#blog_edit_sidebar .allow_comments,#blog_edit_sidebar .categories {
margin: 0px 5px 5px;
padding: 0px 10px;
}
#blog_edit_sidebar input[type="text"] {width:75%}
#blog_edit_page ul {
padding-left:0px;
margin:5px 0 5px 0;
list-style: none;
}
#blog_edit_page p {
margin:5px 0 5px 0;
}
#blog_edit_page #two_column_left_sidebar_maincontent p {
margin:0 0 15px 0;
}
#blog_edit_page .publish_blog input[type="submit"] {
}
#blog_edit_page .preview_button a {
font: 12px/100% Arial, Helvetica, sans-serif;
font-weight: bold;
background:#ffffff;
border: 1px solid #d00;
color: #d00;
padding: 5px;
margin:-10px -10px 5px 10px;
cursor: pointer;
float:right;
}
#blog_edit_page .preview_button a:hover {
background: #D00;
color: white;
text-decoration: none;
border: 1px solid #D00;
}
#blog_edit_page .allow_comments label {
font-size: 100%;
}