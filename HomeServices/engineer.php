<html>
<body>
<center><h1>Engineer Home Page</h1></center>
<br><br><br><br>
<H2 align="right"><a href="logout.php">logout</a></H2><br><br>
<div id="wrapper">
	<div id="header">
	<?php
	echo "<h1>"."Welcome Mr." . $_SESSION["username"]."</h1>";
	$us=$_SESSION["username"];
$sql1="select  custid from user where username='$us'";
$result = $con->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<h3>"."Engineer ID: ".$row["custid"]."</h3>"."<h2>Please remember your Id*</h2>";
}
}
?>
<h2>These are the services  <span>You can provide</span></h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM service";
$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><th>   service id     </th><th>  service type    </th></tr>";

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>";
	echo $row["serviceid"]; 
    echo "</td><td>";
	echo $row["servicetype"];
	echo "</td><tr>";
	}
echo "</table>";



   }
 else {
    echo "0 results";
}
/*$ser="SELECT protype FROM engg WHERE enggid='$sql1'";
$sql = "SELECT * FROM custreq WHERE reqtype='$ser'";
$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><th>   customer id     </th><th>  service request type    </th></tr>";

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>";
	echo $row["custid"]; 
    echo "</td><td>";
	echo $row["reqtype"];
	echo "</td><tr>";
	}
echo "</table>";



   }
 else {
    echo "0 results";
}
*/


mysqli_close($conn);
?>
 <!--<center><a href=viewservice.php><input type="button" value="Our Services"</a></center><br><br>-->
 <center><a href=provide.php><input type="button" value="Provide a Service"</a></center><br><br>
<center><a href=showreq.php><input type="button" value="see service request"></a></center>
 </div>
 </div>
<body style="background-color:yellow">
</body>
</html>