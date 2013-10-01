<?php
 
function velletri_init() {
    // Extend system CSS with our own styles
    
	elgg_extend_view('page/elements/elgg','page/elements/header_logo');
	elgg_extend_view('page/elements/elgg','page/elements/sidebar');
	elgg_extend_view('css/elements/elgg','css/elements/layout');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	
	
	
	
	
	
	
    // Replace the default index page
	
	
	
	
	
	
	//Start Three Column Layout
	if (elgg_is_logged_in() && elgg_get_context() == 'activity'){
	
			elgg_extend_view('css/elgg', 'velletri/css');
		
	

			
	
			

	
			

		
			
			elgg_extend_view('page/elements/sidebar_alt', 'page/elements/profile','700');
			
			
			
			
			

	
	
}
 }
function new_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/velletri/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','velletri_init');
?>