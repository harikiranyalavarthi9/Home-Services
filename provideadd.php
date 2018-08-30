<html>
<body>
	<?php
	$custid=$_POST["custid"];
	$reqtype=$_POST["reqtype"];
	//$address=$_POST["address"];
	//$email=$_POST["email"];
	//$username=$_POST["username"];
	//$password=$_POST["password"];

	
	$con=mysqli_connect("localhost","root","","services");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//$sql="SELECT * engg WHERE enggid='$custid'";
//$result=mysqli_query($con,$sql);
//if (mysqli_num_rows($result) > 0) {
//   echo "already created";
		  
//}
//else
//if(mysqli_query($con, $sql)==TRUE)
//{
//$sql = "INSERT INTO engg(enggid,protype)
//VALUES ('$custid','$reqtype')";

  //$engname="SELECT username FROM user WHERE custid='$custid'";
  

$sql = "INSERT INTO engg(enggid,protype)
VALUES ('$custid','$reqtype')";
if ($con->query($sql) === TRUE) {
    echo "service request is successfully seen..... ";
	//echo '<script type="text/javascript"> window.location=\'index.php\';</script>';
}

//$sql1="UPDATE service,custreq set custno=custno+1 where servicetype=reqtype";
mysqli_close($con);


	?>
	<H2 align="right"><a href="logout.php">logout</a></H2>
</body>
</html>