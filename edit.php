<?php 
	
	session_start();

	include('conn.php');
	include('functions.php');

	$user_data = check_login($conn);

	if(isset($_POST['submit'])){
		$id = $_SESSION['user_id'];
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$query = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', password = '$password' WHERE user_id = '$id'";

		if(mysqli_query($conn, $query)){
			echo 'Data update successful';
			header('Location: settings.php');
		} else {
			echo 'ERROR:'. mysqli_error($conn);
		}
	}

	// $id = mysqli_real_escape_string($conn, $_GET['id']);

	// $query = "SELECT * FROM users WHERE id = ".$id;
	// $result = mysqli_query($conn, $query);
	// $user = mysqli_fetch_assoc($result);
	// mysqli_free_result($result);

	// //close connection;
	// mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Account Details</title>
</head>
<body>
	<h1>EDIT YOUR ACCOUNT DETAILS HERE</h1>
	<div class="form">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="fname">
				<label>First Name</label>
				<input type="text" name="fname" value="<?php echo $user_data['fname']; ?>">
			</div>
			<div class="lname">
				<label>Last Name</label>
				<input type="text" name="lname" value="<?php echo $user_data['lname']; ?>">
			</div>
			<div class="email">
				<label>EMAIL</label>
				<input type="text" name="email" value="<?php echo $user_data['email']; ?>">
			</div>
			<div class="password">
				<label>Password</label>
				<input type="password" name="password" value="<?php echo $user_data['password']; ?>">
			</div>
		</form>
		<div style="left: 200px;">
			<input type="submit" name="submit" value="EDIT DETAILS">
			<!-- <input type="hidden" name="new_id" value="<?php echo $user['id']; ?>"> -->
		</div>
	</div>
</body>
</html>