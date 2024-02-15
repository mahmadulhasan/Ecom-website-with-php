<?php

include "lib/config.php";
if (isset($_POST['username']) ){


	$username= addslashes($_POST['username']);

	$password= addslashes($_POST['password']);

	$sql = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";

	$res = $db->query($sql);
	$num = $res->num_rows;

	if($num>0){

		$row = $res->fetch_object();
		$_SESSION['admin_login'] =  true;
		$_SESSION['admin_id'] 	 =  $row->id;
		$_SESSION['username'] 	 = $row->fullname;

		$time = time();

		$sqlI = "INSERT INTO `admin_login_history`(`admin_login_history_id`, `admin_id`, `ip`, `user_agent`, `timestamp`) VALUES (NULL,'$row->id','$_SERVER[REMOTE_ADDR]','$_SERVER[HTTP_USER_AGENT]','$time')";

		$db->query($sqlI);

		header("location:home.php");


	}
	else{
		header("location:index.php?msg=Invalid Details");
	}
	

	
}


?>