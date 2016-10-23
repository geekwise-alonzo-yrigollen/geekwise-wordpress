<?php/*Template Name: Home */ ?>
<?php get_header(); ?>

   <div class="bottom">
       
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    
    
    
       <h2>
           fast. no fluff.
       </h2>
       
       <h3>
            <span class='teach'>
               we teach technology skills that you can use to make money
            </span><hr>   
       </h3>
       
       <!--MAIN TEXT ENDS HERE THAT IS BELOW THE IMAGE-->
       
       <div class="lower">
       
       <!--ICONS BEGINS HERE FOR THE LEARN MORE, SIGNUP AND WHY GEEKWISE-->
       
       <span class="icons">
           <img src="http://i.imgur.com/qgz2qoN.png" alt="Learn More"><br>learn more
       </span>
           
       <span class="icons center">
           <img src="http://i.imgur.com/pFznYsH.png" alt="Signup"><br>signup
       </span>
       
       <span class="icons">
           <img src="http://i.imgur.com/aUv0YKB.png" alt="Why Geekwise?"><br>why geekwise
       </span>
       
       <!--ICONS END HERE -->
       
        </div>
        
   </div>
   
</main>
    
    
    <!--below is div end for loop-->
    
<!--   </div>-->
   


