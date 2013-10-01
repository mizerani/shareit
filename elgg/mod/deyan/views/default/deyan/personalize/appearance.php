<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/appearance/custom
 * The usersettings page for custom appearance
 * 
 **/  

// Display an input field to let user's override the theme background image with a custom one

$form_vars = array('id' => 'deyan-background-form');
echo elgg_view_form('deyan/background', $form_vars);


