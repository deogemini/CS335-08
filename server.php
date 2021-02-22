<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'online_bus_booking');

	// initialize variables
	
	$busid = "";
	$class = "";
	$company = "";
	$time = "";
	$photo = "";
	$start = "";
	$terminate = "";
	$date = "";
	$fare = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$busid = $_POST['number'];
		$class = $_POST['category'];
		$company = $_POST['company'];
		$time = $_POST['departure-time'];
		$photo = $_POST['file'];
		$start = $_POST['start-from'];
		$terminate = $_POST['terminates'];
		$date = $_POST['date'];
		$fare = $_POST['fare'];

		mysqli_query($db, "INSERT INTO buses1 (busID, category, company, departureTime, startFrom, termination, date, busPhoto,fare) VALUES ('$busid', '$class', '$company', '$time', '$start', '$terminate', '$date', '$photo', '$fare')"); 
		$_SESSION['message'] = "Informations saved"; 
		header('location: editbus.php');
	}

// ...
// ... 

if (isset($_POST['update'])) {
	    $id = $_POST['id'];
	    $busid = $_POST['number'];
		$class = $_POST['category'];
		$company = $_POST['company'];
		$time = $_POST['departure-time'];
		$photo = $_POST['file'];
		$start = $_POST['start-from'];
		$terminate = $_POST['terminates'];
		$date = $_POST['date'];
		$fare = $_POST['fare'];

	mysqli_query($db, "UPDATE buses1 SET busID='$busid', category='$class', company='$company', departureTime='$time', startFrom='$start', termination='$terminate', date='$date', busPhoto='$photo',fare='$fare' WHERE id=$id");
	
	$_SESSION['message'] = "Informations updated!"; 
	header('location: editbus.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM buses1 WHERE id=$id");
	$_SESSION['message'] = "Informations deleted!"; 
	header('location: editbus.php');
}