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
<style>
		body{
			font-family:'Poppins';}
	</style>
<body id="home_body">
     <h1 id="home_h1">Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php" id="homelink">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>