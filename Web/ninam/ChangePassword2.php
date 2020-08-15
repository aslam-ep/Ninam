<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$id=$_GET['lid'];
	$current=$_GET['current'];
	$pass=$_GET['pass'];
	include('connect.php');
	$q1=mysqli_query($con,"select * from tbl_login where login_id='$id'");
	$res1=mysqli_fetch_array($q1,MYSQLI_ASSOC);
	if($res1['pass']==$current){		
	if(mysqli_query($con,"update tbl_login set pass='$pass' where login_id='$id';") )	
	{
		$res['status']='2';
	}
	else
	{
		$res['status']='0';
	}
	}else{
		$res['status']='1';
	}
	echo json_encode($res);
?>