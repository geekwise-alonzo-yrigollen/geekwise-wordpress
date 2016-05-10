<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    
    	<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <link href="<?php echo get_template_directory_uri(); ?>/cohort.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
    
  </head>
  <body>
      
       <body>
<!--      COMMENCE HEADER ELEMENT-->
       <header>
<!--       COMMENCE NAV BAR -->
        <nav>
        
        <span class="logo">
            <a href="index.html">
                <img id="imag" src="http://i.imgur.com/EXCIxXZ.png">
            </a>
        </span>
          
           <ul>
                
               <li>
                   <a href="about.html">About</a>
               </li>
               <li>
                   <a href="courses.html">Courses</a>
               </li>
               <li>
                   <a href="workshops.html">Workshops</a>
               </li>
               <li id="cohort_active">
                   <a href="cohort.html">Cohort</a>
               </li>
               <li>
                   <a href="team.html">Team</a>
               </li>
               <li>
                   <a href="contact.html">Contact</a>
               </li>
               <li class="active">
                   <a href="signup.html">Sign Up</a>
               </li>
                
           </ul>
             
        </nav>
        
<!--        NAV BAR ***END***-->
        
        
<!--        COMMENCE UPPER RIGHT LOGO-->
        
       <span id="img_logo">
           <img src="http://i.imgur.com/nROlUCJ.png">
       </span>
       
<!--       UPPER RIGHT LOGO ***END***-->
       
       </header>
       
<!--       HEADER ELEMENT ***END***-->
      
      
      
      
      