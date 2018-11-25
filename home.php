<?php 

session_start();
if (!isset($_SESSION['username'])) {
	header('location:Login.php');
} else {
	
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
 </head>
 <body>
 		<div class="container">
	 		<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
	 		<a href="logout.php">LOGOUT</a>
 		</div>
 </body>
 </html>