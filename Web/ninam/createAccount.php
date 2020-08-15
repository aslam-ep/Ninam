<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$res=array();
	include('connect.php');
	$name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$bg=$_GET['bg'];
	$gender=$_GET['gender'];
	$disc=$_GET['disc'];
	$pass=$_GET['pass'];
	$q1=mysqli_query($con,"insert into ninam.tbl_login(uname,pass,user_type) values('$email','$pass','donor'); ");
	$q2=mysqli_query($con,"select * from ninam.tbl_login where uname='$email' and pass='$pass'");
	$r2=mysqli_fetch_array($q2,MYSQLI_ASSOC);
	$lid=$r2["login_id"];
	if(mysqli_query($con,"insert into ninam.tbl_doner(name,email,phone_no,gender,blood_group,lid,district,status) values('$name','$email','$phone','$gender','$bg','$lid','$disc',0);"))	
	{
		$res['status']='1';
		$res['lid']=$lid;
	}
	else
	{
		$res['status']='0';
	}
	echo json_encode($res);
?>