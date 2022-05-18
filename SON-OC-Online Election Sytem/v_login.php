<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['V_uname'])) {
    header("Location: voters.html");
}

if (isset($_POST['V_login'])) {
	$user = $_POST['V_uname'];
	$password =($_POST['V_upass']);

	$sql = "Call V_login('$user', '$password')";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['V_uname'] = $row['username'];
		header("Location: voters.html");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		echo '<h2><a href="index.html">back</a></h2>';
	}
}

?>