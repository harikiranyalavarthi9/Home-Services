<html>
<body>
<?php
/*session_start();
$con=mysqli_connect("localhost","root","","services");
 Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
*/
$us=$_SESSION["username"];
$sql="select  custid from user where username='$us'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<h3>"."Customer ID: ".$row["custid"]."</h3>";
}



}
?>

<body style="background-color:orange">
</body>
</html>