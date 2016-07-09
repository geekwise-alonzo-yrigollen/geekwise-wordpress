<?php get_header('courses') ?>

    <!--COMMENCE TOP SECTION-->
       
  
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>

    <table>
        
    <div id='on_click'>
        <a href="Click here to checkout STEM Summer Programs">Click here to checkout STEM Summer Programs!</a>
    </div>
    
        <tr>
          <th id="topic" >Topic</th>
          <th >Duration</th>
          <th >Day/Time</th>
          <th >Fee</th>
          <th >Instructor</th>
          <th id="sign">Sign&#45;up</th>
        </tr>
        
        <?php query_posts('post_type=geekwise_courses'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
        <tr>
            <td><u><?php the_title(); ?></u><i><?php the_content(); ?></i></td>
            <td><?php the_field('duration'); ?></td> 
            <td><?php the_field('day_time'); ?></td>
            <td><?php the_field('fee'); ?></td>
            <td><?php the_field('instructors'); ?></td>
            <td><button class="btn">Enroll</button></td>
        </tr>
        
     <?php endwhile; ?>
     
    </table>
 
 <!--NEW CODE ENDS HERE-->
    
0