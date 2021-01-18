<!-- <?php?> -->
<?php
// session_start();
// if(!isset($_SESSION['username'])){
// header('location:login.php');
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			*{
				font-family: "Times New Roman", Times, serif;
			}
			.back{
				background-color: black;
				color: white;
				font-size: 1.5vw;
				margin-top: 1vw;
				margin-bottom: 1vw;
			}

			button.btn-success{
				font-size: 1.5vw;
				margin-top: 1vw;
				margin-bottom: 1vw;
			}
			button.btn-success:hover{
				background: white;
				color: red;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<a href="index.php"><button class="btn back">Back to Home</button></a>
			<div class="row">
				<div class="col-6">
					<img class="img-fluid rounded" src="images/EMS1.jpeg" alt="">
				</div>
				<div class="col-6 opt">
					<div><button class="btn btn-success">Community Centre</button></div>
					<div><button class="btn btn-success">Restaurant</button></div>
					<div><a href="ReqAsCameraman.php"><button class="btn btn-success">Photography</button></a></div>
					<div><button class="btn btn-success">Catering Services</button></div>
				</div>
			</div>
		</div>
		
	</body>
</html>