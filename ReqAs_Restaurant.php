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
	</head>
	<style>
		*{
			font-family: "Times New Roman", Times, serif;
		}
		.main-form{
			background: #2B8BFF;
			font-size: 1.5vw;
			padding: 3vw;
			margin: auto;
			border-radius: 3vw;
			box-shadow: 5px 10px 8px 10px #888888;
		}
		label{
			color: white;
			font-size: 1.5vw;
		}
		input{
			font-size: 1.5vw;
		}
		.ttl p{
			font-size: 2vw;
		}
		.createtxttt{
			background: #2B8BFF;
			color: #fff;
			font-size: 1.5vw;
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
		.img{
			margin: 1vw;
		}
	</style>
	<body>
		<div class="container-fluid d-flex justify-content-end">
			<a href="index.php"><button class="btn back">Home</button></a>
			<a href="manage.php"><button class="btn back">Back to Manage</button></a>
		</div>
		<div class="container-fluid">
			<div class="ttl">
				<p align="center" class="createtxttt">Create Your Profile</p>
			</div>
			<form action="uploadRestaurant.php" method="post" enctype="multipart/form-data">
				
				<div class="row">
					
					<div class="col-2"></div>
					<div class="col-8">
						<div class="main-form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder=" Restaurant Name" value="" style="margin-right: 10vw;"  autocomplete="off" required  >
							</div>
							<div class="form-group">
								<div class="form-inline">
									<input type="text" name="mobile" class="form-control" placeholder="Contct No." value="" style="margin-right: 10vw;"  autocomplete="off" required  >
									<input type="email" name="email" class="form-control" placeholder="Official Email Address" value="" autocomplete="off" required  >
								</div>
							</div>
							
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" class="form-control" autocomplete="off" required  ></textarea>
							</div>
							<div class="form-group">
								<input type="text" name="availibility" class="form-control" placeholder="Availibility For Upcoming 7 days" value="" style="margin-right: 10vw;"  autocomplete="off" required  >
							</div>
							<div class="form-group">
								<input type="text" name="capacity" class="form-control" placeholder="Capacity" value="" style="margin-right: 10vw;"  autocomplete="off" required  >
							</div>
							<div class="form-group">
								<label>Offers</label>
								<textarea name="offers" class="form-control" autocomplete="off" required  ></textarea>
							</div>
							

							

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp1" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp2" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp3" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp4" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp5" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp6" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp7" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp8" class="form-control" autocomplete="off" required  placeholder=""  value=""/>
								</div>
							</div>


							<button type="submit" name = "submit" class="btn btn-success">Create Account</button>
						</div>
					</div>
					<div class="col-2"></div>
				</div>
			</form>
		</div>
		
	</body>
</html>