<?php/*Template Name: Team */ ?>
<?php get_header('team'); ?>


    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    
       <!--COMMENCE MAIN ELEMENT-->
             
       <main>
   
           <p= id='content'>
             Geekwise Academy was founded on the belief that we, as in the world, can do a whole lot better than we presently are in educating technologists. To accomplish that, we needed to assemble a team of people who know what they’re talking about. Here’s what we came up with.
           </p>
       
       </main>
       
       <!--END ***MAIN ELEMENT***-->
      
       <!--COMMENCE BOTTOM IMAGES-->
       
      <section class="pics">
       
       <!--JAKE LOGO-->
       
           <span  class="aplus">
               <a href="teamJake.html">
                   <img src="http://i.imgur.com/qwUah37.jpg">
                   <p class="names">JAKE A. SOBERAL</p>
               </a>
               
           </span>
           
      <!--     JAKE LOGO ***END***-->
      
      <!--IRMA LOGO-->
       
           <span class="aplus">
               <a  href="irmaTeam.html">
                   <img src="http://i.imgur.com/khbd2Cq.jpg">
                   <p class="names">IRMA L. OLGUIN JR.</p>
               </a>
               
           </span>
           
          <!-- IRMA LOGO ***END***-->
          
          <!--BETH LOGO-->
           
           <span class="aplus">
               <a href="bethTeam.html">
                   <img src="http://i.imgur.com/VdjYDCH.jpg">
                   <p class="names">BETH E. MILY</p>
               </a>
               
           </span>
           
      <!--     BETH LOGO ***END***-->
      
      <!--TERRY LOGO-->
       
           <span class="aplus">
               <a href="terryTeam.html">
                   <img src="http://i.imgur.com/99RFgUT.jpg">
                   <p class="names">TERRY I. SOLIS</p>
               </a>
                  
           </span>
           
       <!--TERRY LOGO ***END***-->
      
       </section>
