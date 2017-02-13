<html>
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
echo "<tr><th>   service id     </th><th>  service type    </th><th>   no of engineers   </th><th>   no of customers requests    </th></tr>";

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>";
	echo $row["serviceid"]; 
    echo "</td><td>";
	echo $row["servicetype"];
	echo "</td><td>";
	echo $row["enggno"];
	echo "</td><td>";
	echo $row["custno"];
	echo "</td><tr>";
	}
echo "</table>";



   }
 else {
    echo "0 results";
}

mysqli_close($conn);
?>
<a href="customer.html">back</a>
<body style="background-color:orange">
</body>
</html>