<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$id=$_GET['id'];
	include('connect.php');
	if(mysqli_query($con,"update ninam.tbl_doner set status=1 where lid=$id;") )	
	{
		$res['status']='1';
	}
	else
	{
		$res['status']='0';
	}
	echo json_encode($res);
?>