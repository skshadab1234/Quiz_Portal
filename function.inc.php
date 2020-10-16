<?php 
date_default_timezone_set('Asia/Kolkata'); 
	
    function pr($arr){
        echo '<pre>';
        print_r($arr);
    }

    function prx($arr){
        echo '<pre>';
        print_r($arr);
        die();
    }

    function get_safe_value($str){
        global $con;
        $str=mysqli_real_escape_string($con,$str);
        return $str;

    }


    function getProject_of_admin_uses_By_Role($role_num)
	{
		global $con;
		$prj_Arr = array();
		$sql = "SELECT * FROM projects LEFT JOIN google_user ON google_user.id = projects.prj_added_by WHERE google_user.role = {$role_num} and projects.status = 1 ORDER BY  RAND()";
		$res = mysqli_query($con,$sql);

		while($row=mysqli_fetch_assoc($res)){
		$prj_Arr[]=$row;
		}

		 return $prj_Arr;
	}


    function getProject_details_page_data($slug_name)
    {
        global $con;
        $sql = "SELECT * FROM projects LEFT JOIN google_user ON google_user.id = projects.prj_added_by WHERE project_code = '".$slug_name."'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
        return $row;
    }



    function fetchlikeuserbyproject_code($project_code)
    {
        global $con;
        $user_email = $user['google_email'];
        $sql = "Select * from projects_likes where project_code = '$project_code' and user_email = '$user_email' and status = 1";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
            
        if (mysqli_num_rows($res) > 0) {
            $liked_prj_by_user =  $row['project_code'];
        }

        return $liked_prj_by_user;
    }

     
	function timeAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}


function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}

function number_format_short( $n, $precision = 1 ) {
    if ($n < 900) {
        // 0 - 900
        $n_format = number_format($n, $precision);
        $suffix = '';
    } else if ($n < 900000) {
        // 0.9k-850k
        $n_format = number_format($n / 1000, $precision);
        $suffix = 'K';
    } else if ($n < 900000000) {
        // 0.9m-850m
        $n_format = number_format($n / 1000000, $precision);
        $suffix = 'M';
    } else if ($n < 900000000000) {
        // 0.9b-850b
        $n_format = number_format($n / 1000000000, $precision);
        $suffix = 'B';
    } else {
        // 0.9t+
        $n_format = number_format($n / 1000000000000, $precision);
        $suffix = 'T';
    }
  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat( '0', $precision );
        $n_format = str_replace( $dotzero, '', $n_format );
    }
    return $n_format . $suffix;
}



?>