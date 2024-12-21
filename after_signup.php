<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
     
     
</head>
<body id="after_signup_body">
<style>
		body{
			font-family:'Poppins';}
	</style>
     <h1 id="after_signup_welcome">Welcome, <?php echo $_SESSION['user_name']; ?> to ATHLETALK, The Best Individual Sports News Wesbsite
    in the world, You may pick your favourite sports to follow !</h1>
     <a href="./main/home/index.html" id="homelink">Continue</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>