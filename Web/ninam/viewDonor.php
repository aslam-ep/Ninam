<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
 
	$res=array();
	include('connect.php');
	$bg=$_GET['bg'];
	$lid=$_GET['lid'];
	$q2=mysqli_query($con,"select * from tbl_doner where lid='$lid'");
	$re=mysqli_fetch_array($q2,MYSQLI_ASSOC);
	$disc=$re['district'];
	$q1=mysqli_query($con,"select * from tbl_doner where blood_group='$bg' and district='$disc';");
	if(mysqli_num_rows($q1)>0) {
		$res['status']="1";
		$res["data"]=array();
		while($res1=mysqli_fetch_array($q1,MYSQLI_ASSOC)) {
			$a=array();
			$a['name']=$res1['name'];
			$a['phone']=$res1['phone_no'];
			$a['email']=$res1['email'];
			array_push($res["data"],$a);
		}
	}
	else{
		$res['status']="2";
	}
	echo json_encode($res);
?>