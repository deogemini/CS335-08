
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'online_bus_booking');
		$record = mysqli_query($db, "SELECT * FROM customers");

			$n = mysqli_fetch_array($record);
			$id = $n['customerID'];
			$seat = $n['seat'];
			$name = $n['name'];
			$from = $n['travelFrom'];
			$to = $n['travelTo'];
			$date = $n['travelDate'];
			$phone = $n['contacts'];
			
		
	
	
	//<input type="hidden" name="id" value="<?php echo $id; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Passenger lists</title>
	<link rel="stylesheet" type="text/css" href="editbusstyles.css">
	<style>

table {
    
    border-collapse: collapse;
    width: 80%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
th {
	background-color:green;
}
</style>
</head>
<body>

<?php $results = mysqli_query($db, "SELECT * FROM customers"); ?>

<table>
	<thead>
		<tr>
			<th>S/N</th>
			<th>Seat number</th>
			<th>Customer name</th>
			<th>Traveling from</th>
			<th>Traveling to</th>
			<th>Traveling date</th>
			<th>Contact No.</th>			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['customerID']; ?></td> 
			<td><?php echo $row['seat']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['travelFrom']; ?></td>
			<td><?php echo $row['travelTo']; ?></td>
			<td><?php echo $row['travelDate']; ?></td>
			<td><?php echo $row['contacts']; ?></td>
			
			
		</tr>
	<?php } ?>
</table>	
</body>
</html>