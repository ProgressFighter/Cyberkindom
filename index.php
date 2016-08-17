<?php
   get_header();
?>

<!-- site content -->
<div class="site-content clearfix">
   <!-- main column --> 
   <div class="main-column">
      
          <?php
          if(have_posts()) :
            while (have_posts()) : the_post(); 
	          
            get_template_part('templates/content', get_post_format());
	 
            endwhile;
      
          else:
            echo '<p> Not found</p>  ';
          endif; ?> 
		  
   </div> <!-- /main-columns -->    	
	
   <?php get_sidebar(); ?>
   
</div> <!-- /site content -->

<?php

 get_footer();

?>