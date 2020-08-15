<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$res=array();
	include('connect.php');
	$lid=$_GET['lid'];
	$q2=mysqli_query($con,"select * from tbl_doner where lid='$lid'");
	if($q2){
		$res1=mysqli_fetch_array($q2,MYSQLI_ASSOC);
		$res['status']='1';
		$res['name']=$res1['name'];
		$res['phone']=$res1['phone_no'];
		$res['email']=$res1['email'];
		$res['gender']=$res1['gender'];
		$res['bg']=$res1['blood_group'];
		$res['disc']=$res1['district'];
		
	}else{
		$res['status']='0';
	}
	echo json_encode($res);
?>