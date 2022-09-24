<?php
session_start();
include 'config.php';
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
if(isset($_SESSION['nom_prenom'])){
$theuser = $_SESSION['nom_prenom'];
$email = $_SESSION['email'];
$user_id = $_SESSION['id'];
 //echo ' '.$theuser;
//$queryuser = mysqli_query($conn, "SELECT * FROM user WHERE name = '$theuser'");
//$rowuser = $queryuser->fetch_assoc();

}else{
header('location:index.php');
}
?>