<?php
include 'conn.php';
if(isset($_POST['submit'])){
	header('location:ReqAsCameraman.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$availibility = $_POST['availibility'];
	$capacity = $_POST['capacity'];
	$extra_facilities = $_POST['extra_facilities'];
	$avg_exp = $_POST['avg_exp'];

	$file= $_FILES['pp'];
	// print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	$file1= $_FILES['pp1'];
	$filename1 = $file['name'];
	$filepath1 = $file['tmp_name'];
	$fileerror1 = $file['error'];

	$file2= $_FILES['pp2'];
	$filename2 = $file['name'];
	$filepath2 = $file['tmp_name'];
	$fileerror2 = $file['error'];

	$file3= $_FILES['pp3'];
	$filename3 = $file['name'];
	$filepath3 = $file['tmp_name'];
	$fileerror3 = $file['error'];

	$file4= $_FILES['pp4'];
	$filename4 = $file['name'];
	$filepath4 = $file['tmp_name'];
	$fileerror4 = $file['error'];

	$file5= $_FILES['pp5'];
	$filename5 = $file['name'];
	$filepath5 = $file['tmp_name'];
	$fileerror5 = $file['error'];



	if($fileerror == 0 && $fileerror1 == 0 && $fileerror2 == 0 && $fileerror3 == 0 && $fileerror4 == 0 && $fileerror5 == 0){
		$destfile = 'upload/'.$filename;
		$destfile1 = 'upload/'.$filename1;
		$destfile2 = 'upload/'.$filename2;
		$destfile3 = 'upload/'.$filename3;
		$destfile4 = 'upload/'.$filename4;
		$destfile5 = 'upload/'.$filename5;
		// echo "$destfile";
		move_uploaded_file($filepath, $destfile);
		move_uploaded_file($filepath1, $destfile1);
		move_uploaded_file($filepath2, $destfile2);
		move_uploaded_file($filepath3, $destfile3);
		move_uploaded_file($filepath4, $destfile4);
		move_uploaded_file($filepath5, $destfile5);


		$insertquery = " INSERT INTO `cc`(`name`, `email`, `mobile`, `address`, `availibility`, `capacity`, `extra_facilities`, `avg_exp`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`) VALUES('$name', '$email', '$mobile', '$address', '$availibility', '$capacity', '$extra_facilities', '$avg_exp', '$destfile', '$destfile1', '$destfile2', '$destfile3', '$destfile4', '$destfile5')";
		
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