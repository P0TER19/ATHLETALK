<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>
<body id="login_body">
	<style>
		body{
			font-family:'Poppins';}
	</style>
<div class="container">
		<div class="signup_logo"><img src="./logo.png" id="logo_img"></div>
		<div class="signup_form">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password">
		<p><a href="index_signup.php">Create an account</a></p>
     	<button type="submit">Login</button>
		 <br>
				<br>
     </form>
		</div></div>
</body>
</html>