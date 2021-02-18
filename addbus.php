<?php include_once('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<title>Add bus details</title>
<link rel="stylesheet" href="styles.css">
<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<body>
<div class="title">
<div class="logo"><img src="images/obtms-logo.png"></div>
<div class="heading"><h1 >Online Bus Ticketing System</h1></div>
 </div>
    <div class="btn-group">
	<br>
        <a href="home.php"class="button"> Home </a>
        <a href="editbus.php" class="button">Edit buses </a>
        <a href="passengers.php" class="button"> View passengers</a>
        <a href="#ContactUs.php" class="button">Contact us</a>
        <a href="logout.php" class="button">Log out</a>
		<br><br><br><br>
    </div>
	
<div class="container">
  <div class="overlay">Explore the World, Enjoy the World</div>
</div>

  
  <form  class="whole-form" action="addbus.php" method="POST" enctype="multipart/form-data" >
  
  
  <div class="form-inline">
  <h1 class="root-heading">Route details</h1><br>
  <label for="date">Date:</label><br>
  <input type="Date" id="date" placeholder="DD/MM/YYYY" name="date" required><br>
  <label for="from">From:</label><br>
  <input type="text" id="from" placeholder="Travelling from?" name="start-from" required><br>
  <label for="to">To:</label><br>
  <input type="text" id="to" placeholder="Where to?" name="terminates" required><br> <br>
  </div>
  
  <div class="bus-details-form">
  <h1 class="bus-heading">Bus details</h1><br>
  <label for="date">Bus No:</label><br>
  <input type="text" id="date" placeholder="Bus number (T4342CWX)" name="number" required><br>
  <label for="from">Class:</label><br>
  <input type="text" id="from" placeholder="Bus class" name="category" required><br>
  <label for="to">Company:</label><br>
  <input type="text" id="to" placeholder="Bus company" name="company" required><br>
  <label for="to">Departure time:</label><br>
  <input type="time" id="to" placeholder="HH/MM/SS" name="departure-time" required><br><br>
  </div>
  
  
  
  <h2 class="upload-title">Upload bus photo</h2>
  <input class="file-button" type="file" name="bus-photo" required><br><br>

  
  <button class="submit-button" type="submit" name="submit">Save details</button> 
  
</form>

</body>
</html> 