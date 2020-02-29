<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Coby's Site | <?php wp_title();?></title>
</head>

<body>	
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	  <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>
	
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet"  />
    <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:300,500"
      rel="stylesheet"
    />
	  
	  
	  
  </head>
	<header>
      <div class="headerContent">
        <figure class="logo">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
            srcset="
              <?php echo get_template_directory_uri(); ?>/images/logo1x.png 1x,
              <?php echo get_template_directory_uri(); ?>/images/logo2x.png 2x,
              <?php echo get_template_directory_uri(); ?>/images/logo3x.png 3x"
          />
        </figure>
        <h3><a href="tel:1-800-555-1234">1-800-555-1234</a></h3>
      </div>
      <title>Cabot Cruises | <?php echo $title; ?></title>
    </header>
	<div id="navWrapper">
		<nav class="clearfix">
			<div class="navi">
				<button id="hamburgerBtn">&#9776</button>
				<div class="search-container searchy">
				  <form action="" method="get">
					<input type="search" placeholder="Search.." class="search" name="s">
					<button type="submit"><i class="fa fa-search"></i></button>
				  </form>
				</div>		
				<?php wp_nav_menu()?>				
			</div>
			<div class="search-container searchy1">
			  <form action="" method="get">
				<input type="search" placeholder="Search.." class="search" name="s">
				<button type="submit"><i class="fa fa-search"></i></button>
			  </form>
			</div>						
		</nav>    
	</div>
	
<!--
    <nav>
      <section class="navContainer">
        <label for="drop" class="toggle active">Menu</label>
        <input type="checkbox" id="drop" />
        
        
      </section>
    </nav>
-->
    <main>