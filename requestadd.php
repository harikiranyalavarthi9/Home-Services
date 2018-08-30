<html>
<body>
	<?php
	$custid=$_POST["custid"];
	$reqtype=$_POST["reqtype"];
	//$address=$_POST["address"];
	//$email=$_POST["email"];
	//$username=$_POST["username"];
	//$password=$_POST["password"];
	$reqtime=$_POST["reqtime"];
	
	$con=mysqli_connect("localhost","root","","services");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO custreq(custid,reqtype,reqtime)
VALUES ('$custid','$reqtype','$reqtime')";
if ($con->query($sql) === TRUE) {
    echo "Request to a service is successfully created..... ";
	//echo '<script type="text/javascript"> window.location=\'index.php\';</script>';
}
//$sql1="UPDATE service,custreq set custno=custno+1 where servicetype=reqtype";
mysqli_close($con);


	?>
	<H2 align="right"><a href="logout.php">logout</a></H2>
</body>
</html>