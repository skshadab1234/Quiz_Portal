<?php


require 'session.php';

if (isset($_POST['code']) and isset($_POST['views']) and  !empty($_POST['code']) and !empty(isset($_POST['views']))) {
	$code = get_safe_value($_POST['code']);
	$current_view = get_safe_value($_POST['views']);
	$logg_user = get_safe_value($_POST['logg_user']);

	if ($user['Name'] == $logg_user) {
		# code...
	}
	else{
		$current_view++;
		$sql = "update projects set views_count = '$current_view' where project_code = '$code'";
		$res = mysqli_query($con,$sql);

		$sql_get_views = "select views_count from projects";
		$res_views = mysqli_query($con,$sql_get_views);

		$row = mysqli_fetch_assoc($res_views);
	}

	$total = array("view" => number_format($row['views_count']))." views";

	echo json_encode($total);
}