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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			*{
			font-family: "Times New Roman", Times, serif;
		}
		p{
			font-size: 1.5vw;
		}
		.img-fluid{
			margin-top: .2vw;
			box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
		}
		.infos{
			background: green;
		}
		.infos p{
			color: white;
		}
		button.back{
			background:black;
			color: white;
			font-size: 1.5vw;
			margin-right: 1vw;
			margin-top: 1vw;
			margin-bottom: 1vw;
		}
		button.back:hover{
			background: white;
			color: red;
			border-style: outset;
			border-color: green;
		}
		.total_photographer{
			font-size: 1.5vw;
			color: #fff;
			background: red;
			margin-bottom: .7vw;
			padding:.5vw;
			box-shadow: 1vw 1vw 1.5vw black;
		}
		
		</style>
	</head>
	<body>
		<div class="container-fluid d-flex justify-content-end">
			<a href="index.php"><button class="btn back">Home</button></a>
			<a href="explore.php"><button class="btn back">Back to Explore</button></a>
		</div>
		<?php
			include'conn.php';
			if(isset($_POST['search'])){
				$searchKey = $_POST['search'];
				$sq = " select * from photography where address like '%$searchKey%' ";
			}
			else{
				$sq = " select * from photography order by address ";
				$searchKey = "";
			}
			$query = mysqli_query($con, $sq);
			$total = "select count(id) as ttl from  photography";
			$t = mysqli_query($con, $total);
			$values = mysqli_fetch_assoc($t);
			$num_rows = $values['ttl'];
			
		?>
		<div class="container">
			<div class="d-flex justify-content-end">
				<p class="total_photographer">Total Photographer :<?php echo $num_rows;?></p>
			</div>
			<form action="" method="POST">
				<div class="row">
					<div class="col-6">
						<input type="text" name="search" class="form-control" placeholder="Search by location" value="<?php echo $searchKey ?>" autocomplete="off"  style="font-size: 1.5vw; margin-top: .5vw;">
						<br>
					</div>
					
					<div class="col-6">
						<button class="btn btn-success" style="font-size: 1.5vw; margin-top: .5vw;">Search</button>
					</div>
					<br><br>
				</div>
			</form>
		</div>
		<div class="container-fluid">
			<?php
			include 'conn.php';
			// $selectquery = "select * from photography";
			// $query = mysqli_query($con, $selectquery);
			// $res = mysqli_fetch_array($query);
			while($res = mysqli_fetch_array($query)) {
			?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<p class="img-fluid"><img src="<?php echo $res['pp']; ?>" class="img-fluid" ></p>
					</div>
					<div class="col-4"></div>
				</div>
				<div class="row">
					<div class="col-2"></div>
					<div class="col-8 infos">
						<p>Name : <?php echo $res['username']; ?></p>
						<p>Age : <?php echo $res['age']; ?></p>
						<p>Mobile : <?php echo $res['mobile']; ?></p>
						<p>Email : <?php echo $res['email']; ?></p>
						<p>Experience : <?php echo $res['experience']; ?></p>
						<p>Device Information : <?php echo $res['di']; ?></p>
						<p>Accessories : <?php echo $res['accessories']; ?></p>
						<p>Earlier Works : <?php echo $res['earlier_works']; ?></p>
						<p>address : <?php echo $res['address']; ?></p>
					</div>
					<div class="col-2"></div>
				</div>
			</div>
			
			
			
			
			
			
			<hr style="color: orange; height: 2vw;">
			
			
			<?php
			
			}
			?>
		</div>
		
	</body>
</html>