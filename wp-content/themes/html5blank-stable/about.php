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
        
<!--        COMMENCE FIRST ARTICLE-->
        
        <!-- <article>-->
             
        <!--     <div id="columnLeft">-->
                 
        <!--     <h2>WHAT</h2>-->
                 
        <!--     <p>Geekwise Academy is an accelerated training program for current and aspiring technologists. Geekwise Academy teaches trainees hard skills in the technology industry in only six weeks. Each course is fast-paced, rigorous, and narrowly focused on a hard skill that is presently in-demand in the technology industry.</p>-->

        <!--     <h2>WHY</h2>-->
        <!--     <p>We need more geeks. Lots of them. And good ones. It’s no secret that software and information technology are among the fastest growing industries on the planet. Despite that truth, there simply aren’t enough technologists to keep up with the demand. Not to mention that these industries offer promising careers and have mountains of jobs that are available today. Geekwise Academy exists to fill that demand by rapidly producing high quality technologists, and then connecting those same technologists to real world opportunities.</p>-->
        <!--     </div>-->
             
        <!--</article>-->
     

<!--       FIRST ARITCLE ***END***-->
       
<!--        COMMENCE SECOND ARTICLE-->
    <!--    <article>-->
            
    <!--     <div id="columnRight">-->
             
    <!--          <h2>HOW</h2>-->
             
    <!--          <p>The subject matter for each course is selected by an employer who wants to recruit technologists right out of the Geekwise Academy classroom. Geekwise Academy then works with the employer to build a curriculum specifically designed to effectively teach that skill. Each course is then taught by an industry-expert lecturer. Every second of every course is designed to provide you with the skills that technology employers and clients need you to have.</p>-->

    <!--          <h2>DETAILS</h2>-->
             
    <!--        <span id="p"><b>Length:</b>Each course lasts 6 weeks-->

    <!--        <b>Time:</b>Each course meets from 6:00-9:00p, two nights per week-->

    <!--        <b>Location:</b>All Classes meet at Bitwise Mural District (2210 San Joaquin St., Fresno, CA 93721)-->

    <!--        <b>Cost:</b>Each class costs only $250</span>-->
    
    <!--      </div>-->
    
    <!--</article>-->
    
<!--    SECOND ARTICLE ***END***-->
    
   </section>  
 
<!-- SECTION ***END***-->
  </main>
<!--  MAIN ELEMENT ***END***-->

<!--COMMENCE FOOTER ELEMENT-->


</body>
