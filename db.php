<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "codingclub";
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn) {
//echo "success";	
}
else {
	die("error". mysql_connect_error());
}

?>