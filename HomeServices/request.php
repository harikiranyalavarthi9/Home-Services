
<html>
<head>
<title>Service Request</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<body style="background-color:green">
<marquee style="background-color:white;font-size:30px;"behavior="alternate" direction="left"><FONT COLOR="0000ff">WELCOME TO Home E-Services</FONT></marquee>
</head>
<body>
<H2 align="right"><a href="logout.php">logout</a></H2>

	<div class="container">
		
		<div class="form-bg" align="center">
			<form name="form1"method="post" action="requestadd.php">
				<p><input type="text" placeholder="Customer Id" name="custid"></p>
				<p><input type="radio" name="reqtype" value="Carpenter">Carpenter</p>
				<p><input type="radio" name="reqtype" value="Automobile">Automobile</p>
				<p><input type="radio" name="reqtype" value="House Painting">House Painting</p>
				<p><input type="radio" name="reqtype" value="Plumbing">Plumbing</p>
				<p><input type="radio" name="reqtype" value="Electrical">Electrical</p>
				<p><input type="date" name="reqtime" placeholder="Date(yy/mm/dd)"></p>

				<p><input type="submit" value="submit request"></p>
				
			</form>
		</div>
		</div>
<body style="background-color:orange">
</body>
</html>
