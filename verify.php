<?php
require_once("connection.php");
require_once("encryptDecrypt.php");
$type = $_GET['typ'];
$email = $_GET['id'];
$vcode = $_GET['vcode'];
if ($ype == "user"){
	$sql = "SELECT * FROM tblUsersLogin WHERE userEmail = '$email'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){ //Account Exist
		if($email == Decrypt($vcode)){//Verification successfull
			//update verification status
			$sql = "UPDATE tblUsersLogin SET userStatus = 1 WHERE userEmail = '$email'";
			$result = $conn->query($sql);
			print("<h1>User Account Verification Successfull. <a href='https://hamsystems.herokuapp.com/'>Click Here to Continue</a></h1>"
		}else{
			
			print("<h1>User Account Verification Unsuccessfull. <a href='https://hamsystems.herokuapp.com/getVerificationCode.php'>Click Here to Receive Verification Code</a></h1>"
		}
		
	}else{
		print("<h1>User Account Verification Unsuccessfull. <a href='https://hamsystems.herokuapp.com/getVerificationCode.php'>Click Here to Receive Verification Code</a></h1>"
	}
}
?>