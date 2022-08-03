<?php

	$response = array();
	include('db_connect.php');
	
	$db = new DB_CONNECT();
	$con = $db->connect();
	
	$Email=$_GET['email'];
	$Pwd=$_GET['pwd'];
	
	$result=mysqli_query($con, "select * from signup where s_email='".mysqli_real_escape_string($con,$Email)."' && s_pwd='".mysqli_real_escape_string($con,$Pwd)."'");
	
	if(mysqli_num_rows($result) > 0)
	{
		$response['data'] = array();
		
		while($row = mysqli_fetch_array($result))
		{
			$product = array();
			
			$product['s_id'] = $row['s_id'];
			$product['s_name'] = $row['s_name'];
			$product['s_email'] = $row['s_email'];
			$product['s_pwd'] = $row['s_pwd'];
			$product['s_gender'] = $row['s_gender'];
			$product['s_mno'] = $row['s_mno'];
			$product['s_image'] = $row['s_image'];
			$product['created_at'] = $row['created_at'];
			$product['s_status'] = $row['s_status'];
		
			array_push($response['data'],$product);
		}
		
		$response['success'] = 1;
		
		echo json_encode($response);
			
	}else{
		$response['success'] = 0;
		$response['message'] = " NO DATA FOUND";
		
		echo json_encode($response);
		
	}
?>