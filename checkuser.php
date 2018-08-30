<html>
<body>
<div id="wrapper"><?php
session_start();
$con=mysqli_connect("localhost","root","","services");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$myusername=$_POST["username"];
$mypassword=$_POST["password"];
$result = mysqli_query($con,"SELECT * FROM user WHERE username='$myusername' and password='$mypassword'") or die("error");
// If result matched $myusername and $mypassword, table row must be 1 row
//$numrows =mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
   {
  $_SESSION["username"] = $myusername;
  //$_SESSION["password"] = $mypassword;
   while($row = mysqli_fetch_assoc($result)) {
        // $row["type"];
		if(strcmp($row["usertype"],"engineer"))
		  //header("location:customer.html");
		  include('C:\wamp\www\web\customer.php');
		else
           //header("location:engineer.html");
		   include('C:\wamp\www\web\engineer.php');
		  //header("location:home.php") ;
		 // i
    }

 }
  else
  {

	   echo "Wrong Username or Password";
    } 


mysqli_close($con);
?>
</div>
</body>
</html>