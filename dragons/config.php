
<?php
//Tell PHP to log errors
 ini_set('log_errors', 'On');
//Tell PHP to not display errors
 ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
 ini_set('error_reporting', E_ALL );

$servername = "localhost";
$database = "dragon";
$username = "root";
$password = "";
$datepost = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];
$domain = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
//echo "Connected successfully";
//mysqli_close($conn);
?>
