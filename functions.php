<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'online_bus_booking');

// variable declaration
$username = "";
$email    = "";
$errors   = array();


function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}
//prevent homepage appearence by url when not logged in
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked


// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = ($_POST['user-name']);
	$password = ($_POST['Password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {	

		$query = "SELECT * FROM company_personel WHERE username='" . $_POST["user-name"] . "' and password = '". $_POST["Password"]."'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user registerd
			$row = mysqli_fetch_assoc($results);
			    if(is_array($row)){
					
				$_SESSION['userID'] = $row['userID'];
				$_SESSION['password']  = $row['password'];
				header('location: addbus.php');
				}
			}
		else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>
