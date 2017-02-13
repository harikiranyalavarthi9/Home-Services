<html>
<body>
	<?php
	$custid=$_POST["custid"];
	//$reqtype=$_POST["reqtype"];
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
  

//$sql = "INSERT INTO engg(enggid,protype)
//VALUES ('$custid','$reqtype')";
//if ($con->query($sql) === TRUE) {
  //  echo "service request is successfully seen..... ";
	//echo '<script type="text/javascript"> window.location=\'index.php\';</script>';
//}

//$sql1="UPDATE service,custreq set custno=custno+1 where servicetype=reqtype";
$reqtype="SELECT protype FROM engg WHERE enggid=$custid";
$id="SELECT custid FROM custreq WHERE reqtype='$reqtype'";
$sql="SELECT * FROM user WHERE custid=$id";
$result = mysqli_query($con, $sql);
echo "<table>";
echo "<tr><th>   customer id     </th><th>  name    </th> <th>  phone number  </th><th>  Address  </th></tr>";

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>";
	echo $row["custid"]; 
    echo "</td><td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["phno"];
	echo "</td><td>";
	echo $row["Address"];
	echo "</td><tr>";
	}
echo "</table>";
}
 else {
    echo "0 results";
}
mysqli_close($con);


	?>
	<H2 align="right"><a href="logout.php">logout</a></H2>
</body>
</html>