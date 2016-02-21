<?php $thisPage="index"; ?>
<?php include '_includes/header.php'; ?> 

</head>
<body id="index04-body" onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<?php include_once("google-analytics-tracking.php") ?>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php include '_includes/navigation.php'; ?>

<div class="intro">
<div class="top-block cf">&nbsp;</div>
	<div class="intro-wrap">

		<div class="info cf">
			<img src="_images/ffd-logo-01.png">
			<div class="info-txt">
				<p><i class="fa fa-phone-square ph"></i> <a class="tel" tabIndex="-1" href="tel:(303)%20674-1373">(303) 674-1373</a></p>
				<p><i class="fa fa-clock-o"></i> Monday - Friday 8 AM - 5 PM</p>
				<p><i class="fa fa-map-marker ep"></i> 27905 Meadow Drive, Evergreen, CO 80439</p>
			</div>
		</div>

		<p class="title">Foster Family Dental</p>
		<ul id="intro-menu">
			<li><a class="no-default" href="#our-practice">Our Practice</a></li>
			<li><a class="no-default" href="#our-staff">Our Staff</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");' class="about-contact">Contact</a></li>
		</ul>
	</div><!-- .intro-wrap -->
	<div class="btm-block cf">&nbsp;</div>
</div> <!-- .intro -->     
<div id="our-practice" class="our-practice target cf">
	<div class="our-practice-container">
		<h1>Our Practice</h1>
		<div class="short-txt">
			<img src="_images/our-dental-practice.png">
			<h2>About Our Dental Practice</h2>
			<p>Dr. Foster and her team are committed to providing comprehensive, conservative care with compassion. We recognize every patient presents with unique needs and conditions; we promise to personalize your treatment and involve you in every aspect of your care. Thank you for allowing us to take care of your dental needs and we look forward to serving you!</p>
		</div>
		<div class="short-txt">
			<img src="_images/education-prevention.png">
			<h2>Education &amp; Prevention</h2>
			<p>At Foster Family Dental, prevention and education is the core of our beliefs.  Thorough dental exams – checking the overall health of your teeth and gums, performing oral cancer exams, and taking x-rays when necessary, are our primary focus.  Routine cleanings, flossing, sealants, and fluoride are all helpful in preventing dental disease as well.  Every effort is made to review detailed oral hygiene instructions so that our patients are successful in maintaining optimum oral health. We recognize that to succeed in creating a beautiful smile, a healthy foundation must be established. </p>
		</div>
		<div class="short-txt">
			<img src="_images/high-standards.png">
			<h2>Our Promise</h2>
			<p>We promise to work effortlessly to restore and maintain your teeth to their most natural state.  Dr. Foster is receptive to those looking for dental care that integrates science with a more natural approach; our facility is mercury-free and we follow safe mercury-removal practice and we offer a large selection of natural, fluoride-free products to help sustain ideal oral health.</p>

			<p>We will never charge you for a second opinion should you have a concern that needs to be addressed.  Dr. Foster is available to see emergencies the same day.
			</p>
		</div>
	</div>

</div>


<div id="our-staff" class="our-staff target cf">
	<div class="staff-wrap">
		<h1>Our Staff</h1>
		<div class="staff01">
			<!-- <img src="_images/female-dr-avatar.png"> -->
			<h3>P. Jenny Foster DDS</h3>
			<p>Dr. Foster is excited to return to the Evergreen and Conifer area.  Having spent the last two years in her native Missouri, Dr. Foster purchased Zanichelli Dental Hygiene in October 2015 and expanded into Foster Family Dental, a full-service dental office.</p>

			<p>Dentistry runs in Dr. Foster’s family, as her father has been a general dentist for 43 years.   Since the age of 8, Dr. Foster has been involved in every aspect of the dental field- from scrubbing instruments, attending to patients in reception, to assisting chairside.  She is honored to continue in the path of her mentor and provide beautiful, healthy smiles in beautiful Colorado.</p>

			<p>Dr. Foster received her Bachelor of Arts degree in biological sciences from the University of Missouri-Columbia and her Doctorate of Dental Surgery degree from the University of Missouri-Kansas City.  She is married to her husband, Cody, who is a financial advisor with his own company, Foster Financial, in Conifer, Colorado.  They are the proud parents of two toddlers- 3 year-old Madeline and 2 year-old Jackson.   They have enjoyed immersing themselves in the Evergreen community and exploring the Rockies.</p>  

			<p>Dr. Foster has devoted herself to be a life-long student, completing well over the required number of hours of continuing dental education every year.  She is a member of the Academy of General Dentistry and Colorado Prosthodontic Society.  Dr. Foster participates in Give Kids A Smile and the Colorado Mission of Mercy, programs designated to provide free dental services to those in need.   Locally, Dr. Foster is involved in the Evergreen Chamber of Commerce, Downtown Evergreen Association, and Blue Spruce Kiwanis.</p>

		</div>
		<div class="staff02">
			<!-- <img src="_images/female-dr-avatar.png"> -->
			<h3>Chelsea Zanichelli</h3>
			<p>Chelsea is a native to Evergreen, Colorado and brings a wealth of dental knowledge and experience to Foster Family Dental.  Chelsea has over 10 years of experience in the dental field and we are excited to have her operating our front office as well as assisting Dr. Foster.</p>  

			<p>Chelsea enjoys being outdoors, mountain climbing, and spending time with her boyfriend Kyle and her golden retriever Riley.</p>
		</div>
	</div>

</div>

<?php include '_includes/footer.php'; ?>
<?php require_once('_includes/contactform-code.php'); ?>  

<script type="text/javascript" src="js/scripts.js?<?php echo time(); ?>"></script>
<script type="text/javascript" src="js/nav.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>

