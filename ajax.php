<?php

if(isset($_GET['call_type']))
{
	$call_type = $_GET['call_type'];

	if($call_type == "login")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'login',
			'description' => 'Login',
			'url' => $call_type.'.php',
			'data'=>file_get_contents('login.php'),
		));
	}
	else if($call_type == "home")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Quiz Portal',
			'description' => 'Quiz Portal',
			'url' => '',
			'data'=>file_get_contents('index.php')
		));
	}
}