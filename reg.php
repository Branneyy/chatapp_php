<?php 
	session_start();
	include('conn.php');
	include('functions.php');



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){

		
			$user_id = random_num(20);
			
			$query = "INSERT INTO users (user_id, fname, lname, email, password) VALUES ('$user_id', '$fname', '$lname', '$email', $password)";
			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		
	} else {
		echo "Fill in all fields";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/e3adba1bee.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="login.css">
	<title>SIGN UP</title>
</head>
<body>
	<div style="margin-top: -380px; margin-right: 10px;"><h1>SIGN UP</h1><i class="fas fa-user-plus"></i></div>
		<div class="box">
			<div class="hello">
				<i class="fas fa-handshake"></i>
				<p><strong>HELLO</strong></p>
			</div>
			<form action="" method="post">
				
				<!-- <label for="user_id">USER ID</label><br>
				<input type="text" name="user_id" placeholder="name" style="border-radius: 5px; padding: 5px; "> -->
				<div class="login">
					<label for="fname">First Name</label><br>
					<input type="text" name="fname" placeholder="first name" style="border-radius: 5px; padding: 5px; ">
					<br>
					<label for="lname">Last Name</label><br>
					<input type="text" name="lname" placeholder="last name" style="border-radius: 5px; padding: 5px; ">
					<br>
					<label for="name">Email</label><br>
					<input type="text" name="email" placeholder="email" style="border-radius: 5px; padding: 5px; ">
					<br>
					<label for="password">Password</label><br>
					<input type="password" name="password" placeholder="password" required style="border-radius: 5px; padding: 5px; "><br>
					<label for="myInput" style="font-family: arial;">Show passoword</label>
					<input type="checkbox" onclick ="myFunction()">
					

					<script>
						
						function myFunction(){
							var x=
							document.getElementById("myInput");
							if(x.type ==="password")
							{
								x.type="text";
							}
							else
							{
								x.type="password";
							}
						}
					</script>
					<div class="login-btn" >
						<input type="submit" value="Signup"><br><br>
					</div>
					<p>Already have an account? <a href="login.php" style="text-decoration-line: none;">LOG IN</a></p>
					<hr>
					<br>
					<a href="home.php" style="justify-content: center; text-decoration-line: none;font-family: 'Arial';padding: 10px;border-top-left-radius: 5px;border-top-right-radius: 5px;background-color: #97b89e; color: black; margin-top: 10px;">View Site</a>
				</div>

			</form>

		</div>

	
</body>
</html>