<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>
<body id="signup_body">
	<style>
		body{
			font-family:'Poppins';}
	</style>
	<div class="container">
		<div class="signup_logo"><img src="./logo.png" id="logo_img"></div>
		<div class="signup_form">
			<form action="signup.php" method="post">
				<h2>SIGN UP</h2>
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<label>User Name</label>
				<input type="text" name="uname" placeholder="User Name"><br>
	   
				<label>Password</label>
				<input type="password" name="password" placeholder="Password"><br>
				<label>Confirm Password</label>
				<input type="password" name="cpassword" placeholder="Confirm Password"><br>
				<button type="submit">Sign up</button>
				<br>
				<br>
			</form>
		   </div></div>
</body>
</html>