<?php
require 'session.php';

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$user_id=mysqli_real_escape_string($con,$_POST['user_id']);
$image=mysqli_real_escape_string($con,$_POST['image']);
$added_on = date("d-m-y h:i:s");

$_SESSION['USER_ID']=$user_id;
print_r($user_id);
$res=mysqli_query($con,"select * from google_user where google_email='$email'");
$check=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$_SESSION['NAME']=$row['Name'];
$_SESSION['EMAIL']=$row['google_email'];
        
if($check>0){
}else{
        mysqli_query($con,"insert into google_user(clint_id,Name,google_email,picture_link,status,added_on) values('$user_id','$name','$email','$image',1,'$added_on')");
        $_SESSION['NAME']=$name;
        $_SESSION['EMAIL']=$email;

}
?>