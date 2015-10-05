<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foster Family Dental - Evergreen, Colorado</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="_scripts/custom-modernizr.js?<?php echo time(); ?>"></script>
	<link rel="stylesheet" href="_css/under-construction-styles.css?<?php echo time(); ?>">	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lora|Tangerine' rel='stylesheet' type='text/css'>

</head>
<body onload="document.forms[0].name.focus();">
<div id="bg-div-one">
  <img src="_images/under-construction-opacity.png" alt="Under Construction">
</div>
<div id="wrapper">
<header>
	<h1>Foster Family Dental</h1>
	<img src="_images/under-construction-ffd.png" alt="Under Construction">
</header>
<section id="left-side">

<h2>Dr. P. Jenny Foster</h2>
	<ul>
	<li>We are excited to announce the opening of Foster Family Dental (formally Zanichelli Dental Hygiene).  Dr. Foster is excited to provide comprehensive dental care for the residents of Evergreen and the surrounding areas.</li>
	<li>Please join Dr. Foster, Chelsea, and Ellen at our open house Wednesday, October 21st from 5-8pm at our office in historic downtown Evergreen.</li>
	<li>We are accepting new patients and happily bill most dental insurances.</li>
	</ul>

</section>
<section id="right-side">
	<p>While our Website is under construction please feel free to contact us for more information.</p>
    <form action="formmail.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li>
            <input id="send" type="submit" value="Send" tabindex="40" /><!-- <input id="clear" type="button" value="Clear" onClick="rUSure()" tabindex="50" /> -->
        </li>
        
    </ul> 
    
    </form>

</section>

<footer>
	<div id="left">
		<p>Foster Family Dental</p>
	</div>
	<div id="center">
		<p><i class="fa fa-map-marker"></i> 27905 Meadow Drive #5<br>Evergreen, CO 80439</p>
	</div>
	<div id="right">
		<p><i class="fa fa-phone-square"></i> <a class="tel" tabIndex="-1" href="tel:(303) 674-1373">303.674.1373</a></p>
	</div>
	<div class="copyright"><p>&copy; 2015 Foster Family Dental | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p></div>
</footer>
</div><!-- #wrapper -->

<script type="text/javascript" src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>