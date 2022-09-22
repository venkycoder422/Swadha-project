<?php 
$servername = "localhost";
$username = "wwebhelp_spashtam";
$password = "amS6&)xC68?I";
$dbname = "wwebhelp_spashtamm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!$conn)
{
  echo 'database not connected';
}
$id = $_GET['id'];
$q = "DELETE FROM cropinfo WHERE id = $id;";
		$conn->query($q);
header('location:threshold-value-update.php');

?>