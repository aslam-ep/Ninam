<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$id=$_GET['id'];
	$pass=$_GET['pass'];
	include('connect.php');
	if(mysqli_query($con,"update tbl_login set pass='$pass' where login_id='$id';") )	
	{
		$res['status']='1';
	}
	else
	{
		$res['status']='0';
	}
	echo json_encode($res);
?>