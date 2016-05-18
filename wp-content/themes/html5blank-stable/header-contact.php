<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    
    	<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <link href="<?php echo get_template_directory_uri(); ?>/contact.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!--COMMENTED OUT THIS PHP SNIPPET AS IT WAS INTERFERRING WITH MULTIPLE PAGES-->
		
		<!--<?php wp_head(); ?>-->
		<script>
        // conditionizr.com
        // configure environment tests
        
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
    
  </head>





<!--   COMMENCE HEADER HERE-->
   
   <header>
      
<!--      COMMENCE LOGO IMAGE-->
      
           <span class="logo">
              <a href="/index.php?page_id=29">
                  <img id="imag" src="http://i.imgur.com/EXCIxXZ.png">
              </a>
           </span>
       
<!--       LOGO IMAGE ***END***-->
       
<!--       COMMENCE NAV BAR ELEMENT-->

       <nav class="nav" role="navigation">
            	<?php html5blank_nav(); ?>
            	 <a href="/index.php?page_id=4"></a>
            	 <a href="/courses.php?page_id=6"></a>
            	 <a href="/workshops.php?page_id=8"></a>
            	 <a href="/cohort.php.php?page_id=10"></a>
            	 <a href="/signup.php.php?page_id=12"></a
            	 <a href="/team.php?page_id=14"></a>
            	 <a href="/contact.php?page_id=16"></a>
            </nav>
    
    
        
        <!-- <nav>-->
       
        <!--   <ul>-->
               
        <!--       <li>-->
        <!--           <a href="about.html">About</a>-->
        <!--       </li>-->
        <!--       <li>-->
        <!--           <a href="courses.html">Courses</a>-->
        <!--       </li>-->
        <!--       <li>-->
        <!--           <a href="workshops.html">Workshops</a>-->
        <!--       </li>-->
        <!--       <li>-->
        <!--           <a href="cohort.html">Cohort</a>-->
        <!--       </li>-->
        <!--       <li>-->
        <!--           <a href="team.html">Team</a>-->
        <!--       </li>-->
        <!--       <li id="active_contact">-->
        <!--           <a href="contact.html">Contact</a>-->
        <!--       </li>-->
        <!--       <li class="active">-->
        <!--           <a href="signup.html">Sign Up</a>-->
        <!--       </li>-->
               
        <!--   </ul>-->
             
        <!--</nav>-->
       
<!--       NAV BAR ELEMENT ***END***-->
       
   </header>