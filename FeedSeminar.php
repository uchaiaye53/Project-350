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
		.infos{
			box-shadow: 1vw 1vw 1.5vw black;
		}
		.interior{
			margin-bottom: 0.7vw;
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
				$sq = " select * from seminar where address like '%$searchKey%' ";
			}
			else{
				$sq = " select * from seminar ";
				$searchKey = "";
			}
			$query = mysqli_query($con, $sq);
			$total = "select count(id) as ttl from  seminar";
			$t = mysqli_query($con, $total);
			$values = mysqli_fetch_assoc($t);
			$num_rows = $values['ttl'];
			
		?>
		<div class="container">
			<div class="d-flex justify-content-end">
				<p class="total_photographer">Total Seminar Venues:<?php echo $num_rows;?></p>
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
			// $selectquery = "select * from seminar";
			// $query = mysqli_query($con, $selectquery);
			// $res = mysqli_fetch_array($query);
			while($res = mysqli_fetch_array($query)) {
			?>
			<div class="container-fluid">
				
				<div class="d-flex">
					<p style="background: red;color: white;padding: 0.3vw;"><?php echo $res['name']; ?></p>
				</div>

				<a href="Profile_Seminar.php?id=<?php echo $res['id']; ?>"><button class="btn btn-success">visit</button></a>


			</div>
			
			
			
			
			
			
			<hr style="background-color: orange;height: .1vw;">
			
			
			<?php
			
			}
			?>
		</div>
		
	</body>
</html>
