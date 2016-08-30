<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
        <title> <?php bloginfo('name'); ?> </title>
        <?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
<div class="container">

<!-- site-header -->
<header class="site-header">
 
        <div id="bar">  
            <a href="<?php echo home_url(); ?>" id="home"> Dmitri Belyakov </a>	
        
		    <!-- hd-search -->
            <div class="hd-search">
		      <?php get_search_form(); ?> 
		     
   

		    </div> <!-- /hd-search --> 
		
		</div> 


		<image class="bg-image"/>

		   	      	
        
		<div id="site-info">   </div>  
		
        <nav class="site-nav">
              <?php
                    $args = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $args ); 
              ?>
        </nav>			
</header>  <!-- /site header -->