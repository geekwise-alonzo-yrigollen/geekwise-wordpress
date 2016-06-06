<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    
    	<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('Geekwise Academy'); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <link href="<?php echo get_template_directory_uri(); ?>/workshops.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        
        <link href="<?php echo get_template_directory_uri(); ?>/fonts.css" rel="stylesheet">

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


<body <?php body_class(); ?>>
     
     <header id="header">
       
           <span class="logo">
              <a href="/index.php?page_id=29">
                  <img id="imag" src="http://i.imgur.com/EXCIxXZ.png">
              </a>
           </span>
       
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
            
           <!--<label class="fa fa-bars list" for="bars"></label>-->
           
<!--          <input type="checkbox" id="bars">-->
    
          <!--<div class="parent">-->
          <!--    <div class="item">-->
          <!--        <a href="about.html">About</a>-->
          <!--    </div>-->
          <!--    <div class="item">-->
          <!--        <a href="courses.html">courses</a>-->
          <!--    </div>-->
          <!--    <div class=" item active_page">-->
          <!--        <a href="workshops.html">workshops</a>-->
          <!--    </div>-->
          <!--    <div class="item">-->
          <!--        <a href="cohort.html">cohort</a>-->
          <!--    </div>-->
          <!--    <div class="item">-->
          <!--        <a href="team.html">team</a>-->
          <!--    </div>-->
          <!--    <div class="item">-->
          <!--        <a href="contact.html">contact</a>-->
          <!--    </div>-->
       
          <!--    <div class="item sign">-->
          <!--        <a href="signup.html">sign up</a>-->
          <!--    </div>-->
          <!--</div>  -->

         
<!--         COMMENCE TEXT SECTION-->
         
          <span>
              <p>
                <em>
                    no fluff. we teach skills that you can use to make money.
                </em>
              </p>
          </span>
          
<!--          MAIN SECTION ***END***-->
        
      </header>