<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    
    	<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        
        <link href="<?php echo get_template_directory_uri(); ?>/fonts.css" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
        
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
    
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="https://geekwiseacademy.com/img/geekwise-favicon.png">

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
   
  <header>
<!--      LABEL BEGINS HERE FOR THE FA BARS MENU OPTION-->
      
       <label class="fa fa-bars list" for="bars"></label>
       
       <input type="checkbox" id="bars">
        
<!--        LABEL BEGINS ENDS HERE FOR THE FA BARS MENU OPTION-->
        
<!--        NAV BAR LIST BEGINS HERE-->

<nav class="nav" role="navigation">
	<?php html5blank_nav(); ?>
</nav>

        <span class="geekwise workshops">
        
            <img src="http://i.imgur.com/p8H5Xv7.jpg" alt="#">
        
        </span>
        
       
   </header>