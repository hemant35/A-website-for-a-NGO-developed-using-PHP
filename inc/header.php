<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Diamond Fantasis | An Indian NGO </title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="index.html"><img alt="" src="images/logo1.jpg"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">

	               <li class=<?php if($currentPage==1) echo "current" ?>><a href="index.php">Home</a></li>
	               <li class=<?php if($currentPage==2) echo "current" ?>><span><a href="aboutUs.php">About us</a></span>
                     <ul>
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Vision and Mission </a></li>
                     </ul>
                  </li>
                  <li class=<?php if($currentPage==3) echo "current" ?>><span><a href="#">Our Work</a></span>
                     <ul>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Health</a></li>
						<li><a href="#">Disaster Response</a></li>
                     </ul>
                  </li>
				  <li class=<?php if($currentPage==4) echo "current" ?>><a href="#">Donate now</a></li>
	               <li class=<?php if($currentPage==5) echo "current" ?>><a href="#">Campaign</a></li>
                  <li class=<?php if($currentPage==6) echo "current" ?>><a href="#">Happening</a></li>
                  <li class=<?php if($currentPage==7) echo "current" ?>><a href="contact.php">Contact Us</a></li>

               </ul> <!-- end #nav -->

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->

