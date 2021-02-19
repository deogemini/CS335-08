<?php

$msg = "";
$msg_class = "";
$server = "localhost";
$database = "online_bus_booking";
$passwd = "";
$user = "root";


$conn = mysqli_connect($server, $user, $passwd, $database);
	
	  if (isset($_POST['submit'])) {
    // for the database
	    $busid = $_POST['number'];
	    $class = $_POST['class'];
	    $company = $_POST['company'];
		$time = $_POST['departure-time'];		
		$start = $_POST['start-from'];
		$terminate = $_POST['destinates'];
		$date = $_POST['date'];
		$fare = $_POST['fare'];		
 		$busImageName = time() . '-' . $_FILES["bus-photo"]["name"];
		// For image upload
		$target_dir = "images/";
		$target_file = $target_dir . basename($busImageName);
	
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['bus-photo']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["bus-photo"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO buses1 (busID,category,company,departureTime,busPhoto,startFrom,termination,date,fare) VALUES ('$busid','$class','$company','$time','$busImageName','$start','$terminate','$date','$fare')";
         $msgs="You successifully added informations";
		if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
		  //header('location: editbus.php');
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an error uploading the file";
        $msg = "alert-danger";
      }
    }
  }

?>