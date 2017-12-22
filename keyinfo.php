<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Priority antivirus</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/logo.jpg" alt="" /></span>
					
					//javscript function to check for empty fields
					<script>
						function checkforblank()
						{
							if(document.getElementById('ffname').value=="" || document.getElementById('llname').value=="" || document.getElementById('bbyear').value=="" || document.getElementById('eemail').value=="" ||
							  document.getElementById('ffname').value.length < 3 || document.getElementById('llname').value.length < 3 || document.getElementById('eemail').value.length < 3 ||document.getElementById('bbyear').value.length < 3 )
								{
										alert("Please fill all fields, empty fields are not allowed and minimum length of each filed is 3");
									    return false;
								}
						}
					</script>
					
					<h1 id="logo"><a href="#">Priority Antivirus</a></h1>
					<p>Working for your security</p>
				</header>
				
				
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										
										
										<h4>Make sure to fill each textbox similar to Registration form in Antivirus</h4>
										<h5>Keep your key in safe place and key is case sensitive</h5>
										
										<!--checkforblank is javascript function to restrict submission of emtpy fields.-->
										<form action="key.php" method="post" onSubmit=" return checkforblank()">
											First Name: <input type="text" name="fname" id="ffname" ></br>
											Last Name: <input type="text" name="lname" id="llname"></br>
											Email: <input type="text" name="email" id="eemail" ></br>
											Birth Year: <input type="text" name="byear" id="bbyear" ></br>
											<input type="submit" name="Get Key">
										</form>
										
										
									
									
									</header>
									<p></p>
								</div>
							</section>

					
						
						

				

					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Priority Antivirus. All rights reserved.</li><li>Zanis Ali (zanisali888@gmail.com) <a href="http://html5up.net"></a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>