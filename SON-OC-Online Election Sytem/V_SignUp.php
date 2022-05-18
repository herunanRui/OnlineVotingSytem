<?php  
if (isset($_POST['create'])) 	
	{
	include 'config.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname = validate($_POST['Fname']);
	$lname = validate($_POST['Lname']);
	$age = validate($_POST['age']);
	$city = validate($_POST['city']);
	$barangay = validate($_POST['barangay']);
	$user = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($fname) || empty($lname)) {
		header("Location: create.html");
	}else {

		$sql = "Call signUp('$fname', '$lname', '$age', '$city', '$barangay', '$user', '$pass')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "<script> alert('Your data was sent to database successfully!'); </script>";
		}else {
			echo "<script> alert('Your data could not be sent!'); </script>";
		}
	}

}else {
	header("Location: create.html");
}