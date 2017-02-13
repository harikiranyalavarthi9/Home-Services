<?php
session_start();
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

</head>
<body>

	<div class="notice">
		<a href="" class="close">close</a>
		<h1 align="center">Welcome to E-Services</h1>
	</div>



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg" align="center">
			<form name="form1"method="post" action="checkuser.php">
				<h2>Login to Home E-Services </h2>
				<p><input type="text" placeholder="Username" name="username"></p>
				<p><input type="password" placeholder="Password" name="password"></p>

				<p><input type="submit" value="Login"></p>
				<p><a href="register.php">New User?</a></p>
			<form>
		</div>

	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>