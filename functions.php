<?php
//add main resources
function add_css_resources(){
      
	wp_enqueue_style( 'frontend', get_template_directory_uri().'/css/frontend.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );	    
}
add_action('wp_enqueue_scripts','add_css_resources');


//navigation menus
register_nav_menus( array(
        'primary' => __( 'Primary Menu'),
        'footer' => __('Footer Menu'),
));


/* Add our widgets */
function WidgetsInitialization() { 
   
  register_sidebar(array(  
    'name' => 'Sidebar Widgets',  
    'id'   => 'sidebar-widgets',
    'before_widget' => '<div class="sidebar-widget-item " id="%1$s">',
    'after_widget' => '</div>',   
    'before_title' => '<h4 class="widget-item-header">',
    'after-title' => '</h4>',
    'description'   => 'Widget Area'   
    ));  
  
  register_sidebar(array(  
    'name' => 'Footer_1',  
    'id'   => 'footer_1',  
    'before_widget' => '<div class="footer-widget-item">',
    'after_widget' => '</div>',   
    'before_title' => '<h4 class="my-specialclass">',
    'after-title' => '</h4>',
    'description'   => 'Widget Area'   
    ));   
}
add_action('widgets_init','WidgetsInitialization');



/* myThemeClass */
if(!class_exists('myThemeClass'))
{
    class myThemeClass {
	     /**
		 * PHP 4 Compatible Constructor 
		 */
	     function myThemeClass(){ $this->__construct();}
		  /**
		 * PHP 5 Constructor 
		 */
		 function __construct() {
          	 add_action('wp_enqueue_scripts', array(&$this,'js_init'));
		     add_action('wp_enqueue_scripts', array(&$this,'add_pagejs'));            			 
		  } 
		 
		  function js_init() {
              if (is_admin()) return;  
              wp_enqueue_script('jscript_init', get_stylesheet_directory_uri().'/js/init.js', array("jquery","wp-ajax-response"));
		  }
		
		 
		  //add pages js logic
		  function add_pagejs(){    
                if(is_page('nodejs'))
	            wp_enqueue_script('jscript_pageslogic', get_stylesheet_directory_uri().'/js/pages-logic.js');       
          }

	}	//End Class myPluginClass
}
/* WPGrinsClass */
if(class_exists('myThemeClass')){
         $myClassVar = new myThemeClass();	
}


?>

