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
	$file1= $_FILES['pp1'];
	$file2= $_FILES['pp2'];
	$file3= $_FILES['pp3'];
	$file4= $_FILES['pp4'];
	$file5= $_FILES['pp5'];

	// print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	$file1= $_FILES['pp1'];
	$filename1 = $file1['name'];
	$filepath1 = $file1['tmp_name'];
	$fileerror1 = $file1['error'];

	$file2= $_FILES['pp2'];
	$filename2 = $file2['name'];
	$filepath2 = $file2['tmp_name'];
	$fileerror2 = $file2['error'];

	$file3= $_FILES['pp3'];
	$filename3 = $file3['name'];
	$filepath3 = $file3['tmp_name'];
	$fileerror3 = $file3['error'];

	$file4= $_FILES['pp4'];
	$filename4 = $file4['name'];
	$filepath4 = $file4['tmp_name'];
	$fileerror4 = $file4['error'];

	$file5= $_FILES['pp5'];
	$filename5 = $file5['name'];
	$filepath5 = $file5['tmp_name'];
	$fileerror5 = $file5['error'];



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
