<?php $thisPage="services"; ?>
<?php include '_includes/services-header.php'; ?> 

</head>
<body class="services" onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<div id="top-of-page">&nbsp;</div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php include '_includes/navigation.php'; ?>
<img class="services-header-img" src="_images/services.jpg">
<div class="service-body">
	<div class="service-header">
		<h1>Summary of services</h1>
		<p>At Foster Family Dental we offer a full range of dental services. Please find additional information on your specific interests below. If we can answer further question please do not hesitate to call or email anytime.</p>
	</div>
	<a class="anchor-box-wrap" href="preventative.php">
	<div class="service-box">
		<h3>Preventative</h3>
		<p>Comprehensive Exams</p>
		<p>Dental Cleanings</p>
		<p>X-rays</p>
		<p>Flouride</p>
		<p>Sealants</p>

	</div></a>
	<a class="anchor-box-wrap" href="restorative.php">
	<div class="service-box">
		<h3>Restorative Dentistry</h3>
		<p>Composite (tooth-colored) Fillings</p>
		<p>Crowns</p>
		<p>Bridges</p>
		<p>Dentures &amp; Partials</p>

	</div></a>
	<a class="anchor-box-wrap" href="root-canal-extractions.php">
	<div class="service-box">
		<h3>Root Canal &amp; Extractions</h3>
		<p>Root Canal Treatment</p>
		<p>Extraction Procedures</p>

	</div></a>
	<a class="anchor-box-wrap" href="cosmetic.php">
	<div class="service-box">
		<h3>Cosmetic Dentistry</h3>
		<p>Veneers</p>
		<p>Whitening</p>

	</div></a>
	<a class="anchor-box-wrap" href="patient-information.php">
	<div class="service-box">
		<h3>Patient Information</h3>
		<p>Insurance/Payment Details</p>
		<p>Dental Savings Plan</p>

	</div></a>
</div>

<?php include '_includes/footer.php'; ?>
<?php require_once('_includes/contactform-code.php'); ?>    

<script type="text/javascript" src="js/scripts.js?<?php echo time(); ?>"></script>

<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>