<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$res=array();
	include('connect.php');
	$lid=$_GET['lid'];
	$name=$_GET['name'];
	$phone=$_GET['phone'];
	$bg=$_GET['bg'];
	$gender=$_GET['gender'];
	$disc=$_GET['disc'];
	if(mysqli_query($con,"update ninam.tbl_doner set name='$name',phone_no='$phone',gender='$gender',blood_group='$bg',district='$disc' where lid=$lid ;"))	
	{
		$res['status']='1';
	}
	else
	{
		$res['status']='0';
	}
	echo json_encode($res);
?>