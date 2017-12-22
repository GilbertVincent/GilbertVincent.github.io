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
										<h3>Your License key is mentioned below</h3>
										<p>Note that Key is case sensitive<br />
										</a></p>
										
										<?php
								          $firstname = $_REQUEST['fname'];
								          $lastname = $_REQUEST['lname'];
								          $emailid = $_REQUEST['email'];
								          $birthyear = $_REQUEST['byear'];
								          
								echo strtoupper(substr($lastname, 0, 3));
								echo strtoupper(substr($firstname, 0, 3));
								echo strtoupper(substr($birthyear, 0, 3));
								echo strtoupper(substr($emailid, 0, 3));
								        ?>
									</header>
									
									
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