<?php
SESSION_START();
	$error = "";
	if(isset($_POST["btnSubmit"])){
		
		require_once("connection.php");
		require_once("encryptDecrypt.php");
		
		$email = $conn->real_escape_string($_POST['txtEmail']);
		
		
		$sql = "SELECT * FROM tblUsersLogin WHERE userEmail = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			
			$vcode = Encrypt($email);
			$subject = "User Verification: Hyamda Learning Platform";
			$body = "Dear <b>User</b>,<p>Your Email: $email was used for registration on the Hyamda Learning Platform. 
					We require you to verify you account by clicking on the following link:</P><p><a href='https://hamsystems.herokuapp.com/verify.php?typ=user&id=$email&vcode=$vcode'>Click Here to Verify Account</a></p>
					<p>Note you may also copy and paste the following link (URL) on your browser address bar, send (press enter key on your keyboard) to verify you account.<br 
					https://hamsystems.herokuapp.com/verify.php?typ=user&id=$email&vcode=$vcode</p>
					<p>Thank you and best regards,<br /><br />Hyamda Team";
			include_once("sendEmail.php");
			$error = "A verification Email has been sent your email account. Complete your verification from there.";
		}
		$error = "Account Retrieval. Try Again!!!";
		
	}
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dictionary Web App</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php
        include_once("header.php");
    ?>
    <div class="row">
        
		<div class="col-3">
		
		</div>
        <div class="col-9">
            <div class="mainContainer formDive">
                
                <form action="getVerificationCode.php" method="POST" id="frmLogin">
                    <div class="row">
                        <h1> Retrieve User Verification Code </h1>
						<h3 style="color:red;">
						<?php
							print($error);
						?>
                        </h3>
						<input type = "email" id="txtEmail" name="txtEmail" placeholder="Email Here" required>
						
                        <input type="submit" value="Submit" name='btnSubmit' id='btnSubmit'>
						<h4>Do not have an account yet? <a href="register.php">Register Here</a></h4>
						<h4>Already have an account? <a href="login.php">Login Here</a></h4>
                    </div>
                    
                </form>
            </div>
        </div>

        
    </div>

    
    <?php
        require_once('footer.php')
    ?>
	<div class="col-2">
		
	</div>
	
	<script>
		
	</script>
</body>
</html>

