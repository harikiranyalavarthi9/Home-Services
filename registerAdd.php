<html>
<body>
	<?php
	$name=$_POST["name"];
	$phno=$_POST["phno"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$usertype=$_POST["usertype"];
	
	$con=mysqli_connect("localhost","root","","services");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO user(name,phno,address,email,username,password,usertype)
VALUES ('$name','$phno','$address','$email','$username','$password','$usertype')";
if ($con->query($sql) === TRUE) {
    echo "New record created..... ";
	echo '<script type="text/javascript"> window.location=\'index.php\';</script>';
}
mysqli_close($con);
echo "Successfully Resgistered.\n";

	?>
</body>
</html>