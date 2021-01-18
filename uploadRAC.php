<?php
include 'conn.php';
if(isset($_POST['submit'])){
	header('location:ReqAsCameraman.php');
	$username = $_POST['username'];
	$age = $_POST['age'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$experience = $_POST['experience'];
	$di = $_POST['di'];
	$accessories = $_POST['accessories'];
	$earlier_works = $_POST['earlier_works'];
	$file= $_FILES['pp'];
	// print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];
	if($fileerror == 0){
		$destfile = 'upload/'.$filename;
		// echo "$destfile";
		move_uploaded_file($filepath, $destfile);
		$insertquery = " INSERT INTO `photography`(username, age, mobile, email, address, experience, di, accessories, earlier_works, pp) VALUES('$username', '$age', '$mobile', '$email', '$address', '$experience', '$di', '$accessories', '$earlier_works', '$destfile')";
		
		$query = mysqli_query($con, $insertquery);
		if($query){
			?>
			<script>
				alert('Account created');
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert('Something is wrong!');
			</script>
			<?php
		}
	}
}
?>