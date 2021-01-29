<?php
include 'conn.php';
if(isset($_POST['submit'])){
	header('location:ReqAs_Photography.php');
	$username = $_POST['username'];
	$age = $_POST['age'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$experience = $_POST['experience'];
	$di = $_POST['di'];
	$accessories = $_POST['accessories'];
	$earlier_works = $_POST['earlier_works'];


	$file0= $_FILES['pp0'];
	$filename0 = $file0['name'];
	$filepath0 = $file0['tmp_name'];
	$fileerror0 = $file0['error'];


	$file= $_FILES['pp'];
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

	$file6= $_FILES['pp6'];
	$filename6 = $file6['name'];
	$filepath6 = $file6['tmp_name'];
	$fileerror6 = $file6['error'];

	$file7= $_FILES['pp7'];
	$filename7 = $file7['name'];
	$filepath7 = $file7['tmp_name'];
	$fileerror7 = $file7['error'];

	$file8= $_FILES['pp8'];
	$filename8 = $file8['name'];
	$filepath8 = $file8['tmp_name'];
	$fileerror8 = $file8['error'];

	$file9= $_FILES['pp9'];
	$filename9 = $file9['name'];
	$filepath9 = $file9['tmp_name'];
	$fileerror9 = $file9['error'];

	$file10= $_FILES['pp10'];
	$filename10 = $file10['name'];
	$filepath10 = $file10['tmp_name'];
	$fileerror10 = $file10['error'];

	$file11= $_FILES['pp11'];
	$filename11 = $file11['name'];
	$filepath11 = $file11['tmp_name'];
	$fileerror11 = $file11['error'];

	




	if($fileerror0 == 0 && $fileerror == 0 && $fileerror1 == 0 && $fileerror2 == 0 && $fileerror3 == 0 && $fileerror4 == 0 && $fileerror5 == 0 && $fileerror6 == 0 && $fileerror7 == 0 && $fileerror8 == 0 && $fileerror9 == 0 && $fileerror10 == 0 && $fileerror11 == 0 ){
		$destfile = 'upload/'.$filename;
		$destfile0 = 'upload/'.$filename0;
		$destfile1 = 'upload/'.$filename1;
		$destfile2 = 'upload/'.$filename2;
		$destfile3 = 'upload/'.$filename3;
		$destfile4 = 'upload/'.$filename4;
		$destfile5 = 'upload/'.$filename5;
		$destfile6 = 'upload/'.$filename6;
		$destfile7 = 'upload/'.$filename7;
		$destfile8 = 'upload/'.$filename8;
		$destfile9 = 'upload/'.$filename9;
		$destfile10 = 'upload/'.$filename10;
		$destfile11 = 'upload/'.$filename11;
		// echo "$destfile";
		move_uploaded_file($filepath0, $destfile0);
		move_uploaded_file($filepath, $destfile);
		move_uploaded_file($filepath1, $destfile1);
		move_uploaded_file($filepath2, $destfile2);
		move_uploaded_file($filepath3, $destfile3);
		move_uploaded_file($filepath4, $destfile4);
		move_uploaded_file($filepath5, $destfile5);
		move_uploaded_file($filepath6, $destfile6);
		move_uploaded_file($filepath7, $destfile7);
		move_uploaded_file($filepath8, $destfile8);
		move_uploaded_file($filepath9, $destfile9);
		move_uploaded_file($filepath10, $destfile10);
		move_uploaded_file($filepath11, $destfile11);



		$insertquery = " INSERT INTO `photographer`(username, age, mobile, email, address, experience, di, accessories, earlier_works, pp, pp0, pp1, pp2, pp3, pp4, pp5, pp6, pp7, pp8, pp9, pp10, pp11) VALUES('$username', '$age', '$mobile', '$email', '$address', '$experience', '$di', '$accessories', '$earlier_works', '$destfile', '$destfile0', '$destfile1', '$destfile2', '$destfile3', '$destfile4', '$destfile5', '$destfile6', '$destfile7', '$destfile8', '$destfile9', '$destfile10', '$destfile11')";
		
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