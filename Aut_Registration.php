<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<?php include'conn.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;500&display=swap" rel="stylesheet">
	</head>
	<style>
		*{
			font-family: "Times New Roman", Times, serif;
		}
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.form-group{
			background: #D5CEB4;
			border: 7px solid #D5CEB4; 
		}
		input{
			margin: 10px auto;
		}
		p{
			font-size: 2.5vw;
		}

	</style>
	<body>
		<?php
		if(isset($_POST['submit'])){
			header('location:Aut_Login.php');
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
			$pass = password_hash($password, PASSWORD_BCRYPT);
			$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
			$usernamequery = "select * from registration where username = '$username' ";
			$query = mysqli_query($con, $usernamequery);
			$usernamecount= mysqli_num_rows($query);
			if($usernamecount>0){
		?>
		<script>
			alert('username already Exists!!!');
		</script>
		<?php
		}
		else{
		if($password === $cpassword){
			$insertquery = " INSERT INTO registration (username, password, cpassword) VALUES ('$username', '$pass', '$cpass') ";
			$iquery = mysqli_query($con, $insertquery);
		}
		else{
		?>
		<script>
			alert('Password didnot match');
		</script>
		<?php
		}
		}
		}
		?>
		<!-- <div class="container">
			<div class="main_div">
				<div class="box">
					<h1>Registration Form</h1>
					<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="inputbox">
							<input type="text" name="username"   autocomplete="off" required>
							<label>Username</label>
						</div>
						
						<div class="inputbox">
							<input type="password" name="password"   autocomplete="off" required>
							<label>Create Password</label>
						</div>

						<div class="inputbox">
							<input type="password" name="cpassword"   autocomplete="off" required>
							<label>Confirm Password</label>
						</div>

						<input type="submit" name="submit">
					</form>
				</div>
			</div>
			
		</div> -->






		<div class="container">
			<div class="form-group">
				<p>Registration Form</p>
					<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<input type="text" name="username"   autocomplete="off" class="form-control" placeholder="Username" required>
							
							<input type="password" name="password"   autocomplete="off" class="form-control" placeholder="Password" required>
							
							<input type="password" name="cpassword"   autocomplete="off" class="form-control" placeholder="Confirm Password" required>
							<button type="submit" class="btn btn-primary" name="submit">Create Account</button>
					</form>
			</div>	
		</div>
		
		
	</body>
</html>