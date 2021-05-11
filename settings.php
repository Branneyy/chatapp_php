<?php 
	session_start();

	include('conn.php');
	include('functions.php');
	$user_data = check_login($conn);
	

?>

<!DOCTYPE html>

<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stackroom</title>
	<script src="https://kit.fontawesome.com/e3adba1bee.js" crossorigin="anonymous"></script>
	<link type="text/css" rel="stylesheet" href="style.css">
	<link type="text/css" rel="stylesheet" href="sett.css">
</head>

<body>
	<!-- Navbar -->
	<div id="navbar">
		<!-- Logo -->
		<a href="home.php" class="logo"><img src="img/bg.jpeg" style="position: relative; height:55px; width: 30px;" alt=""></a>
		<!-- Navigation -->
		<ul id="navigation">
				<!-- <li>
				<p style="margin: 5px; background-color:#e6e6e6 ; border-radius: 2px;">Hello <?php echo $user_data['fname']; ?></p>
			</li> -->

			<li >
				<a href="index.php"><i class="fas fa-home"></i> Home</a>
			</li>
			<li>
				<a href="#"><i class="fas fa-door-open"></i> Rooms</a>
			</li>
			<li class="selected">
				<a href="settings.php"><i class="fas fa-cogs"></i> Settings</a>
			</li>
			<li>
				<a href="#"><i class="fas fa-envelope-open"></i> Contact us</a>
			</li>
		
			</div>
		</ul>
	</div>
	<div style="display: flex; 
							flex-wrap: wrap; 
							background-color: white; 
							 ">
	<div class="side" style="width: 15%;
							 height:400px;
							 border-right:0.5px solid;
							 border-radius: 1px;">
		<ul>
			<li class="selected"><a href="#">Account Info</a></li><br><br>
			<li><a href="">Room Settings</a></li><br><br>
			<li><a href="">Chat</a></li><br><br>
			<li><a href="">Log Out</a></li><br><br>
		</ul>
	</div>

	<div class="main" style="
							 margin: 20px;
							 background-color: white;">
				<h3 style="font-family: cursive;color: #33cccc;">ACCOUNT INFORMATION</h3>
				<hr>
				<div class="form">
			<form action="<?php $_SERVER['PHP_SELF'];?> " method="post">
				<label>NAME</label><br>
				<input type="text" value="<?php echo $user_data['fname']; echo $user_data['lname']; ?>" readonly="readonly"><br><br>
				
				<label>EMAIL</label><br>
				<input type="text" value="<?php echo $user_data['email']; ?>" readonly="readonly"><br><br>
				<label for="">PASSWORD</label><br>
				<input type="password" value="<?php echo $user_data['password']; ?>" readonly="readonly"><br><br>
			</form>
			<a href="edit.php" class="edit-btn" style="text-decoration-line: none; 
														padding: 10px;
														border-style: hidden;
														border-radius: 2px;
														background-color: #00e600;
														color: white;
														float: right;
														font-family: cursive;">EDIT</a>
		</div>
	</div>
	</div>
	<div id="footer">
		<!-- Logo -->
		<a href="index.php" class="footer-logo"><img src="img/bg.jpeg" style="position: relative; height:180px; width: 100px;" alt=""></a>
		<div class="footer-link">
			<h2>LINKS</h2><br><br>
			<p><a href="index.php"><i class="fas fa-home"></i> Home</a></p><br>
			<p><a href="rooms.php"><i class="fas fa-door-open"></i> Rooms</a></p><br>
			<p><a href="settings.php"><i class="fas fa-cogs"></i> Settings</a></p><br>
			<p><a href="about.php"><i class="fas fa-envelope-open"></i> Contact us</a></p>
		</div>
		<div class="footer-link">
			<h2>INFO</h2><br><br>
			<p><a href="index.html">Privacy Policy</a></p><br>
			<p><a href="index.html">Disclaimer</a></p>
		</div>
	</div>
	<!-- Copyright -->
	<div id="copyright">
		&copy; Copyright 2021. All Rights Reserved | Designed by Branson Mwashimba
	</div>	
</body>

</html>
