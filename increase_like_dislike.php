<?php

require 'session.php';


if (isset($_POST['post_like'])) {
	$code = get_safe_value($_POST['codes']);
	$user_email = get_safe_value($_POST['user_email']);
	
	$check_user_like = "Select * from projects_likes where project_code = '$code' and user_email = '$user_email' and status = 1";
	$check_user_like_res = mysqli_query($con,$check_user_like);

	if (mysqli_num_rows($check_user_like_res) > 0)
	{

	}
	else
	{
		$insert_like = "INSERT INTO projects_likes (project_code,user_email,status) VALUES('$code','$user_email',1) ";
		$res_like = mysqli_query($con,$insert_like);
	}

	$sql = "Select COUNT(*) as total_like from projects_likes where project_code = '$code' and user_email = '$user_email' and status = 1";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);

	$update_like_on_prj = "update projects set likes = ".$row['total_like']." where project_code = '$code'";
 	mysqli_query($con,$update_like_on_prj);

	$like_arr = array("total_like"=> number_format_short($row['total_like']));
	echo json_encode($like_arr);

}