<?php
SESSION_START();
	if(!empty($_SESSION["adminName"]) && (!empty($_SESSION["adminEmail"]))){//Admin User
		$error = "";
		$fname = "";
		$mname = "";
		$lname = "";
		$uname = "";
		$email = "";
		$pass = "";
		$cpass = "";
		
		if(isset($_POST["btnSubmit"])){
			
			require_once("connection.php");
			require_once("encryptDecrypt.php");
			
			$fname = $conn->real_escape_string($_POST['txtFName']);
			$mname = $conn->real_escape_string($_POST['txtMName']);
			$lname = $conn->real_escape_string($_POST['txtLName']);
			$uname = $conn->real_escape_string($_POST['txtUName']);
			
			
			$email = $conn->real_escape_string($_POST['txtEmail']);
			$pass = $conn->real_escape_string($_POST['txtPWord']);
			//$cpass = $conn->real_escape_string($_POST['txtCPWord']);
			
			
			$sql = "SELECT * FROM tblAdmin WHERE adminEmail = '$email' OR adminName ='$uname'";
			$result = $conn->query($sql);
			if($result->num_rows > 0){ //Account Exist
				
				while($row = $result->fetch_assoc()){
					if($uname == $row['adminName']){
						$error = "Username Already Taken. Try a different Username!!!";
					}
					if($email == $row['adminEmail']){
						$error .= "Account Already Registered with this Email. <a href='adminLogin.php'>Click Here to Login</a>";
					}
				}
			}else{//Register Account
				try{
					$pass = Encrypt($pass);
					$sql = "INSERT INTO tblAdmin (adminEmail, adminFName, adminMName, adminLName, adminPWord) VALUES ('$email','$fname','$mname', '$lname', '$pass')";
					$result = $conn->query($sql);
					$error = "Admin Registration Successfull!!!";
				}catch(Exception $e){
					
					$error = "Registration Error. Try Again!!!";
				}
				
			}
		}
	}else{
		header("location:adminLogin.php");
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
        include_once("adminHeader.php");
    ?>
    <div class="row">
        <div class="col-3">
            
        </div>
    
        <div class="col-9">
            <div class="mainContainer formDive">
                
                <form action="addAdmin.php" method="POST" id="frmRegister">
                    <div class="row">
                        <h1>New Admin Registration </h1>
						<h3 style="color:red;">
						<?php
							print($error);
						?>
                        </h3>
                        <input type = "text" id="txtFName" name="txtFName" placeholder="First Name Here" required>
						<input type = "text" id="txtMName" name="txtMName" placeholder="Middle Name Here" >
						<input type = "text" id="txtLName" name="txtLName" placeholder="Last Name Here" required>
						<input type = "text" id="txtUName" name="txtUName" placeholder="Username Here" required>
						<input type = "email" id="txtEmail" name="txtEmail" placeholder="Email Here" required>
						<input type = "password" id="txtPWord" name="txtPWord" placeholder="Password Here" required>
						
                        <input type="submit" value="Submit" name='btnSubmit' id='btnSubmit'>
						
                    </div>
                    
                </form>
            </div>
        </div>

        <div class="col-2">
            
		</div>
    </div>

    
    <?php
        require_once('footer.php')
    ?>
	
</body>
</html>

