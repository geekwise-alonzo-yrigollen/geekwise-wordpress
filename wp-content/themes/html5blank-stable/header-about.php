<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    
    	<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <link href="<?php echo get_template_directory_uri(); ?>/about.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		
		<!--COMMENTED OUT THIS PHP SNIPPET AS IT WAS INTERFERRING WITH MULTIPLE PAGES-->
	
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
<!--       COMMENCE HEADER TAG-->
       
       
    <header>
       
        <!--<nav>-->
        
<!--        COMMENCE LOGO-->
        
          <span class="logo">
              <a href="index.html">
                  <img id="imag" src="http://i.imgur.com/EXCIxXZ.png">
              </a>
           </span>
            <nav class="nav" role="navigation">
            	<?php html5blank_nav(); ?>
            </nav>
    
<!--           LEFT LOGO ***END***-->
          
<!--          COMMENCE NAV BAR ELEMENTS-->

           
           <!--<ul>-->
           <!--    <li id="active_about" >-->
                
           <!--        <a href="about.html">About</a>-->
           <!--    </li>-->
           <!--    <li>-->
           <!--        <a href="courses.html">Courses</a>-->
           <!--    </li>-->
           <!--    <li>-->
           <!--        <a href="workshops.html">Workshops</a>-->
           <!--    </li>-->
           <!--    <li>-->
           <!--        <a href="cohort.html">Cohort</a>-->
           <!--    </li>-->
           <!--    <li class="active">-->
           <!--        <a href="signup.html">Sign Up</a>-->
           <!--    </li>-->
           <!--    <li>-->
           <!--        <a href="team.html">Team</a>-->
           <!--    </li>-->
           <!--    <li>-->
           <!--        <a href="contact.html">Contact</a>-->
           <!--    </li>-->
               
           <!--</ul>-->
             
        <!--</nav>-->
        
<!--        NAV BAR ELEMENTS ***END***-->
       
<!--
       <span>
           <img id="logo" src="http://i.imgur.com/2bJ6w9W.png">
       </span>
-->

<!--            BELOW IS THE ACTIVE BUTTON-->

               <span id="active">
                   <a href="signup.html">Sign Up</a>
               </span>
               
<!--               ACTIVE BUTTON ***END***-->
             
<!--             COMMENCE MAIN TEXT-->
              
            <span> 
                <h1>
                    Learn a real world technology skill. Fast.
                </h1>
            </span>
             
<!--             MAIN TEXT ***END***-->
              
      </header>
      
<!--      HEADER ***ENDS***-->
