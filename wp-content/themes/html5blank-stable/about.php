<?php/*Template Name: about */ ?>
<?php get_header('about'); ?>


    
    
    <!--COMMENCE OWN IMAGE-->
    <span id='own'>
        
        <img src="http://i.imgur.com/ur0IVmP.png"></img>
        
    </span>
    
    
    
<main id="main_section">
     
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    
<!--     COMMENCE FIRST SECTION LEFT-->
     
      <section>
        

    
   </section>  
 
<!-- SECTION ***END***-->
  </main>
<!--  MAIN ELEMENT ***END***-->

<!--COMMENCE FOOTER ELEMENT-->


