<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$res=array();
	include('connect.php');
	$email=$_GET['email'];
	$pass=$_GET['pass'];
	
	$ss=mysqli_query($con,"select * from tbl_login where uname='$email' and pass='$pass' and user_type='donor'");
	if(mysqli_num_rows($ss)>0)
	{
		$as=mysqli_fetch_array($ss,MYSQLI_ASSOC);
		$q1=mysqli_query($con,"select*from tbl_doner where lid=".$as['login_id']." and status=1");
		$r1=mysqli_fetch_array($q1,MYSQLI_ASSOC);
		if(mysqli_num_rows($q1)>0)
		{
			$res["status"]="1";
			$res["lid"]=$as['login_id'];
		}
		else
		{
			$res["status"]="0";
		}
		
	}
	else
	{
		$res["status"]="0";
		
	}
	echo json_encode($res);
?>