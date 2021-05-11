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
	<title>CHATROOM</title>
	<script src="https://kit.fontawesome.com/e3adba1bee.js" crossorigin="anonymous"></script>
	<link type="text/css" rel="stylesheet" href="style.css">
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

			<li class="selected">
				<a href="index.html"><i class="fas fa-home"></i> Home</a>
			</li>
			<li>
				<a href="#"><i class="fas fa-door-open"></i> Rooms</a>
			</li>
			<li>
				<a href="settings.php"><i class="fas fa-cogs"></i> Settings</a>
			</li>
			
			<li>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
			</li>
		
			</div>
		</ul>
	</div>
	<!-- Main -->
	<div id="main-container" style="background: #76dede;">
		>
		
		<div class="inner-container">
			
			<h3>chat/ <?php echo $user_data['fname']; ?></h3>
			<hr>
			<h2></h2>
			<div class="intro-container">
				<p style="color: black;">This is a question and answer site for professional and enthusiast programmers. 
					It is a privately held website, the flagship site of the Stack Exchange Network, 
					created in 2021 by Branson Mwashimba. 
					It features questions and answers on a wide range of topics in computer programming</p>	
			</div>
			<hr>
		</div>
	</div>
	<!-- Projects -->
	<div id="projects">
		<h1>Coding Rooms</h1>
		<div class="proj-container">
			<img src="img/book1.jpeg" alt="">
			<p><a href="">Java object and classes</a></p>
			
			
		</div>
		<div class="proj-container">
			<img src="img/book2.jpeg" alt="">
			<p><a href="">Numpy and scipy</a></p>
			

		</div>
		<div class="proj-container">
			<img src="img/book3.jpeg" alt="">
			<p> <a href="">Php static methods and properties</a></p>
		</div>
		<div class="proj-container">
			<h1>Php Rooms</h1>
			<p>1/ Lorem ipsum dolor sit amet.</br>
			2/ Lorem ipsum dolor sit amet.</br>
			3/ Lorem ipsum dolor sit amet.</br>
			4/ Lorem ipsum dolor sit amet.</br>
			5/ Lorem ipsum dolor sit amet.</br>
			6/ Lorem ipsum dolor sit amet.</p>
		</div>
		<div class="proj-container">
			<h1>Java Rooms</h1>
			<p>1/ Lorem ipsum dolor sit amet.</br>
			2/ Lorem ipsum dolor sit amet.</br>
			3/ Lorem ipsum dolor sit amet.</br>
			4/ Lorem ipsum dolor sit amet.</br>
			5/ Lorem ipsum dolor sit amet.</br>
			6/ Lorem ipsum dolor sit amet.</p>
		</div>
		<div class="proj-container">
			<h1>Python Rooms</h1>
			<p>1/ Lorem ipsum dolor sit amet.</br>
			2/ Lorem ipsum dolor sit amet.</br>
			3/ Lorem ipsum dolor sit amet.</br>
			4/ Lorem ipsum dolor sit amet.</br>
			5/ Lorem ipsum dolor sit amet.</br>
			6/ Lorem ipsum dolor sit amet.</p>
		</div>
	</div>
	<!-- Footer -->
	<div id="footer">
		<!-- Logo -->
		<a href="index.php" class="footer-logo"><img src="img/bg.jpeg" style="position: relative; height:180px; width: 100px;" alt=""></a>
		<div class="footer-link">
			<h2>LINKS</h2>
			<p><a href="index.php"><i class="fas fa-home"></i> Home</a></p>
			<p><a href="rooms.php"><i class="fas fa-door-open"></i> Rooms</a></p>
			<p><a href="settings.php"><i class="fas fa-cogs"></i> Settings</a></p>
			<p><a href="about.php"><i class="fas fa-envelope-open"></i> Contact us</a></p>
		</div>
		<div class="footer-link">
			<h2>INFO</h2>
			<p><a href="index.html">Privacy Policy</a></p>
			<p><a href="index.html">Disclaimer</a></p>
		</div>
	</div>
	<!-- Copyright -->
	<div id="copyright">
		&copy; Copyright 2021. All Rights Reserved | Designed by Branson Mwashimba
	</div>	
</body>

</html>