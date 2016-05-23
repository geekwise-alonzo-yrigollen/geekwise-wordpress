<?php/*Template Name: Home */ ?>
<?php get_header(); ?>

   <div class="bottom">
       
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    
   </div>
   
</main>

