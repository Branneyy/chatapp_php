<?php 
	session_start();
	include('conn.php');
	include('functions.php');

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		
		$password = $_POST['password'];

		if(!empty($email) && !empty($password)){
			
			$query = "SELECT * FROM users WHERE email = '$email' limit 1";
			$result = mysqli_query($conn, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password){
					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}
			}

		echo "Wrong email or Password";
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
	<title>LOG IN</title>
</head>
<body>
	<!-- <center> -->
		<div style="margin-top: -380px; margin-right: 10px;"><h1>LOG IN</h1><i class="fas fa-sign-in-alt"></i></div>
		<br>
		<div class="box">
			<div class="hello">
				<i class="fas fa-handshake"></i>
				<p><strong>HELLO</strong></p>
			</div>
			<form action="" method="post">
				<!-- <div style="font-size: 20px; margin: 8px;">LOG IN</div> -->
				<div class="login">
				<label for="name">EMAIL</label><br>
				<input type="text" name="email" placeholder="email address" style="border-radius: 5px; padding: 5px; ">
				<br>
				<label for="password">Password</label><br>
				<input type="password" name="password" placeholder="password" id="myInput" required style="border-radius: 5px; padding: 5px; "><br>
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
					<input type="submit" value="LOGIN"><br><br>
				</div>
				<br>
				<p>Don't have an account? <a class="btn" href="reg.php">SIGN UP</a></p>
				<hr>
				<br>
				<a href="home.php" style="justify-content: center; text-decoration-line: none;font-family: 'Arial';padding: 10px;border-top-left-radius: 5px;border-top-right-radius: 5px;background-color: #97b89e; color: black; margin-top: 10px;">View Site</a>

				</div>
			</form>
		</div>
	<!-- </center> -->
	
</body>
</html>