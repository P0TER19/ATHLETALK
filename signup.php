<?php 
session_start(); 
$showAlert = false; 
$showError = false; 
$exists=false; 
	
if($_SERVER["REQUEST_METHOD"] == "POST") { 
	
	// Include file which makes the 
	// Database Connection. 
	include 'db_conn.php'; 
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
     $username = validate($_POST['uname']);
     $password = validate($_POST['password']);
	$cpassword = validate($_POST["cpassword"]); 
			
	
	$sql = "Select * from users where user_name='$username'"; 
	
	$result = mysqli_query($conn, $sql); 
	
	$num = mysqli_num_rows($result); 
	
	// This sql query is use to check if
	// the username is already present 
	// or not in our Database 
	if($num == 0) { 
		if(($password == $cpassword) && $exists==false) { 
	
			$hash = password_hash($password, 
								PASSWORD_DEFAULT); 
				
			// Password Hashing is used here. 
			$sql = "INSERT INTO `users` ( `user_name`, 
				`password`) VALUES ('$username', 
				'$hash')"; 
	
			$result = mysqli_query($conn, $sql); 
	
			if ($result) { 
				header("Location: after_signup.php");
		        exit();
			} 
		} 
		else { 
            header("Location: index_signup.php?error=Passwords do not match");
		    exit();
		}	 
	}// end if 
	
if($num>0) 
{ 
    header("Location: index_signup.php?error=Username not available");
	exit(); 
} 
	
}//end if 
	
?> 
