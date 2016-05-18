<?php/*Template Name: courses */ ?>
<?php get_header('courses'); ?>

      <!--COMMENCE TOP SECTION-->
       
    <section>
        
        <span id='on_click'>
            <a href="Click here to checkout our STEM Summer Programs!">Button</a>
        </span>
        
        
        <div id="geekwise">
           <!-- <p>-->
           <!--<em>Geekwise Academy Courses are super-fast-paced and specifically designed to ensure that you’re learning what we’re teaching. Each course begins with a crash course in “How to Geekwise,” which will give you strategies for getting every ounce of benefit you can out of your Geekwise Academy experience. Geekwise Academy Courses deploy a social learning process that is intended to provide you with workplace communication training to go alongside the technology skill you signed up for. Courses include regular assessments to evaluate your progress and to make sure no one gets left behind. Finally, each course wraps up with a final project that is actual real world work</em>-->
           <!--</p>-->
        </div> 
    </section>
     
     <main>
         
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
 
<!--       COMMENCE TABLE -->
     
        <section id="align_left">
            
              <!--COMMENCE CODE-->
    
   <!--new code below-->
   
                 <!--<tr class="top_table">-->
                 <!--     <th id="topic" >Topic</th>-->
                 <!--     <th >Duration</th>-->
                 <!--     <th >Day/Time</th>-->
                 <!--     <th >Fee</th>-->
                 <!--     <th >Instructor</th>-->
                 <!--     <th id="sign">Sign&#45;up</th>-->
                 <!--   </tr>-->
                    
    <!--<h1><?php the_titile(); ?></h1>-->

   <!--NEW CODE ENDS HERE-->
    
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
 
 <!--NEW CODE ENDS HERE-->
    
            <table id="table">
            
      
                    
                    <tr>
                        <td class="work"><u></u> <br>
                        <br></td>
                        <td><b></b></td>
                        <td> <b> </b></td>
                        <td><b></b></td>
                        <td></td>-->
                        <td class="sig"><a href="signup.html" class="rtsign"></a></td>
                </tr>
                    
                    <tr>
                        <td class="work"><u></u><br><br></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b></b><br></td>
                        <td></td>
                        <td class="sig"><a href="signup.html" class="rtsign">enroll</a></td>
                    </tr>
                    
                    
                    <!-- <tr>-->
                    <!--    <td class="work"><u>Database Design - Starts April 4, 2016</u> <br>For those with intermediate Excel experience. Design and build SQL databases. Schema <br> creation and modification, stored procedures, and data access control.</td>-->
                    <!--    <td> <b>6 Weeks</b>April 4 thru May 11</td>-->
                    <!--    <td><b>Monday and Wednesday</b>6:00p-9:00p</td>-->
                    <!--    <td> <b>$250</b> <br>36 hrs. in-person instruction</td>-->
                    <!--    <td>TBD</td>-->
                    <!--    <td class="sig"><a href="signup.html" class="rtsign">enroll</a></td>-->
                    <!--</tr>-->
                    
                    <!-- <tr>-->
                    <!--    <td class="work"><u>Mobile-First Websites - Starts April 5, 2016</u> <br>Building on Websites for Beginners, Part II of II. Build responsive <br> websites. Learn responsive web concepts, CSS frameworks, advanced layout techniques with Flexbox and introduction <br> to Photoshop.</td>-->
                    <!--    <td> <b>6 Weeks</b>April 5 thru May 12</td>-->
                    <!--    <td><b>Tuesday and Thursday</b>6:00p-9:00p</td>-->
                    <!--    <td> <b>$250</b> <br>36 hrs. in-person instruction</td>-->
                    <!--    <td>TBD</td>-->
                    <!--    <td class="sig"><a href="signup.html" class="rtsign">enroll</a></td>-->
                    <!--</tr>-->
                    
                    <!-- <tr>-->
                    <!--    <td class="work"><u>Intro to AngularJS - Starts April 5, 2016</u> <br>For intermediate Javascript programmers. Build applications using the AngularJS <br>framework.</td>-->
                    <!--    <td> <b>6 Weeks</b>April 5 thru May 12</td>-->
                    <!--    <td><b>Tuesday and Thursday</b>6:00p-9:00p</td>-->
                    <!--    <td> <b>$250</b>36 hrs. in-person instruction</td>-->
                    <!--    <td>TBD</td>-->
                    <!--    <td class="sig"><a href="signup.html" class="rtsign">enroll</a></td>-->
                    <!--</tr>-->
                    
                </table>
                
            </section>
            
<!--            TABLE ***END***-->
    
    </main>
    
<!--    MAIN END-->
