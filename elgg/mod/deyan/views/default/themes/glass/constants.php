<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme glass
 * @constants
 * This is the default/example theme for deyan shell. This file contains the constants wich will be passed to css files
 * You can declare any constant you want, and you would use it in the css like $vars['theme'][$constant]
 * 
 **/ 
 
$imagesurl = elgg_get_site_url() . 'mod/' . deyan_get_theme_plugin($theme) . "/views/default/themes/$theme/images/";
$vars = array(

	/*********************
	      MAIN
	*********************/

	'background' 	=> "url($imagesurl\wallpaper.jpg)",
	'shadow' 	=> '#000',
	'border' 	=> 'rgba(255, 255, 255, .9)',


	/*********************
	      WINDOWS
	*********************/
	'window_background' 	=> 'rgba(100, 100, 100, .2)',
	'window_main' 		=> 'rgba(255, 255, 255, .9)',
	'window_module' 	=> 'rgba(0, 0, 0, .4)',



	/*********************
	      PANEL
	*********************/
	'panel_background' 	=> 'rgba(100, 100, 100, .7)',


	/*********************
	      MISC
	*********************/
	'aviable' 	=> '#aea',
	'unaviable' 	=> '#555',
	'hover' 	=> '#fff',

	);