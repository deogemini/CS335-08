<?php
session_start();
$server = 'localhost';
$database = 'online_bus_booking';
$passwd = '';
$use = 'root';

$conn = mysqli_connect($server, $use, $passwd, $database);

if (isset($_POST['search'])) {
	search();
}

// LOGIN USER
function search(){
	global $conn,$start,$destinates,$date, $errors;

	// grap form values
	$start = ($_POST['start-from']);
	$destinates = ($_POST['destinates']);
	$date = ($_POST['date']);
	
				 
	  $results = mysqli_query($conn, "SELECT * FROM buses1 WHERE startFrom='$start' AND termination='$destinates' AND date='$date'");
	  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
			
	}
	
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Bus available</title>
	<link rel="stylesheet" type="text/css" href="editbusstyles.css">
	
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Image Preview and Upload</title>
 
	
	<style>
table {
    width:90%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
th {
	background-color:#2E8B57;
	text-align:center;
}
</style>
</head>
<body>
<?php $results = mysqli_query($conn, "SELECT * FROM buses1 WHERE startFrom='$start' AND termination='$destinates' AND date='$date'"); ?>
<table class="table table-bordered">
         <thead>
			<tr>
				<th>Bus image</th>
				<th>Plate Number</th>
				<th>Bus class</th>
				<th>Bus Name</th>
				<th>Departure time</th>
				<th>Travelling from</th>
				<th>Travelling to</th>
				<th>Journey date</th>
				<th>Fare</th>
				<th>Book</th>
			</tr>
	    </thead>
          <tbody>
		  <?php $users = mysqli_fetch_all($results, MYSQLI_ASSOC); ?>
            <?php foreach ($users as $user): ?>
              <tr>
                <td> <img src="<?php echo 'images/' . $user['busPhoto'] ?>" width="130" height="90" alt=""> </td>
				<td><?php echo $user['busID']; ?></td>
				<td><?php echo $user['category']; ?></td>
				<td><?php echo $user['company']; ?></td>
				<td><?php echo $user['departureTime']; ?></td>
				<td><?php echo $user['startFrom']; ?></td>
				<td><?php echo $user['termination']; ?></td>
				<td><?php echo $user['date']; ?></td>
				<td><?php echo $user['fare']; ?></td>
                
				
				<td>
				<a href="Book.php" <?php echo $user['busID']; ?> class="edit_btn" >Book now</a>
			</td>
				
				
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
</body>
</html>

