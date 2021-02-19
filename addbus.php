<?php include_once('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<title>Add bus details</title>
<link rel="stylesheet" href="styles.css">

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

  <select name="start-from" id="" >
       <option value="dar es salaam">Dar es salaam</option> 
       <option value="mbeya">Mbeya</option> 
       <option value="iringa">Iringa</option> 
       <option value="songwe">Songwe</option> 
       <option value="katavi">Katavi</option> 
       <option value="kagera">Kagera</option> 
       <option value="geita">Geita</option> 
       <option value="kigoma">Kigoma</option> 
       <option value="mwanza">Mwanza</option> 
       <option value="shinyanga">Shinyanga</option> 
       <option value="mara">Mara</option> 
       <option value="manyara">Manyara</option> 
       <option value="arusha">arusha</option> 
       <option value="kilimanjaro">Kilimanjaro</option> 
       <option value="tanga">Tanga</option> 
       <option value="morogoro">Morogoro</option> 
       <option value="tabora">Tabora</option> 
       <option value="singida">Singida</option> 
       <option value="ruvuma">Ruvuma</option> 
       <option value="lindi">Lindi</option> 
       <option value="mtwara">Mtwara</option> 
       <option value="Dodoma">Dodoma</option>
       <option value="Rukwa">Rukwa</option> 
</select>
  <br>

  <label for="to">To:</label><br>
  
  <select name="destinates" id="" >
       <option value="dodoma">Dodoma</option> 
       <option value="iringa">Iringa</option> 
       <option value="mbeya">Mbeya</option> 
       <option value="songwe">Songwe</option> 
       <option value="katavi">Katavi</option> 
       <option value="kagera">Kagera</option> 
       <option value="geita">Geita</option> 
       <option value="kigoma">Kigoma</option> 
       <option value="mwanza">Mwanza</option> 
       <option value="shinyanga">Shinyanga</option> 
       <option value="mara">Mara</option> 
       <option value="manyara">Manyara</option> 
       <option value="arusha">Arusha</option> 
       <option value="kilimanjaro">Kilimanjaro</option> 
       <option value="tanga">Tanga</option> 
       <option value="morogoro">Morogoro</option> 
       <option value="tabora">Tabora</option> 
       <option value="singida">Singida</option> 
       <option value="ruvuma">Ruvuma</option> 
       <option value="lindi">Lindi</option> 
       <option value="mtwara">Mtwara</option> 
       <option value="Dar es salaam">Dar es salaam</option>
       <option value="Rukwa">Rukwa</option> 
</select>
<br>
<br>
  </div>
  
  <div class="bus-details-form">
  <h1 class="bus-heading">Bus details</h1><br>
  <label for="date">Bus No:</label><br>
  <input type="text" id="date" placeholder="Bus number (T434CWX)" name="number" required><br>
  <label for="from">Class:</label><br>
  <select name="class" id="">
      <option value="Luxury">Luxury </option>
      <option value="Luxury">Semi-Luxury</option>
      <option value="Luxury">Ordinary </option>
</select>    
      <br>
  
  <label for="to">Company:</label> <br>
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
