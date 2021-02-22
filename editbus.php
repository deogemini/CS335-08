<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;		
		$record = mysqli_query($db, "SELECT * FROM buses1 WHERE id=$id");
		
        if (count(array($record) )) {
			$n = mysqli_fetch_array($record);
			$busid = $n['busID'];
			$class = $n['category'];
			$company = $n['company'];
			$time = $n['departureTime'];
			$photo = $n['busPhoto'];
			$start = $n['startFrom'];
			$terminate = $n['termination'];
			$date = $n['date'];
			$fare = $n['fare'];
			}
	}	
	?>

<!DOCTYPE html>
<html>
<head>
	<title>edit bus deatails</title>
	<link rel="stylesheet" type="text/css" href="editbusstyles.css">
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
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM buses1"); ?>

<table>
	<thead>
		<tr>
			<th>Bus photo</th>
			<th>Plate Number</th>
			<th>Class</th>
			<th>Bus Name</th>
			<th>Departuture time</th>
			<th>From</th>
			<th>To</th>
			<th>Date</th>
			<th>Fare</th>
			
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['busPhoto']; ?></td> 
			<td><?php echo $row['busID']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['company']; ?></td>
			<td><?php echo $row['departureTime']; ?></td>
			<td><?php echo $row['startFrom']; ?></td>
			<td><?php echo $row['termination']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['fare']; ?></td>
			<td>
				<a href="editbus.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
   <div class="all-form">  
	<form method="post" action="server.php">
		<div class="input-group">
		
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
			<label>Bus Photo</label>
			<input type="text" name="file" value="<?php echo $photo; ?>">
		</div>
		<div class="input-group">
			<label>Plate number</label>
			<input type="text" name="number" value="<?php echo $busid; ?>">
		</div>
		<div class="input-group">
			<label>Class</label>
			<input type="text" name="category" value="<?php echo $class; ?>">
		</div>
		<div class="input-group">
			<label>Company</label>
			<input type="text" name="company" value="<?php echo $company; ?>">
		</div>
		<div class="input-group">
			<label>Departure time</label>
			<input type="time" name="departure-time" value="<?php echo $time; ?>">
		</div>
		<div class="input-group">
			<label>From</label>
			<input type="text" name="start-from" value="<?php echo $start; ?>">
		</div>
		<div class="input-group">
			<label>To</label>
			<input type="text" name="terminates" value="<?php echo $terminate; ?>">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="<?php echo $date ?>">
		</div>
		<div class="input-group">
			<label>Fare</label>
			<input type="text" name="fare" value="<?php echo $fare ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
	              <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                 <?php else: ?>
	              <button class="btn" type="submit" name="save" >Save</button>
            <?php endif ?>
		</div>
	</form>
	</div>
</body>
</html>