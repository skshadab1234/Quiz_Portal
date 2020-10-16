<?php 
session_start();
$con=mysqli_connect('fdb30.awardspace.net','3583267_shadabzone','skshadab12345','3583267_shadabzone');
$email = $_SESSION['EMAIL'];
if (isset($_SESSION['USER_ID'])) {
	$sql = "SELECT * FROM google_user where google_email = '$email'";
	$res = mysqli_query($con,$sql);
	$user = mysqli_fetch_assoc($res);
}

require 'function.inc.php';
require 'constant.inc.php';
?>