
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Home</title>
<link rel="stylesheet" href="homestyle.css">
</head>

<body>
<div class="title">
<div class="logo"><img src="images/obtms-logo.png"></div>
<div class="heading"><h1 >Online Bus Ticketing System</h1></div>
 </div>
    <div class="btn-group">
	<br>
        <a href="home.php"class="button"> Home </a>
        <a href="signin.php" class="button">Sign in </a>
        <a href="#" class="button"> Print ticket</a>
        <a href="ContactUs.php" class="button">Contact us</a>
        <a href="HowToPay.php" class="button">How to pay </a>
		<br><br><br><br>
    </div>
	
<div class="container">
  <div class="overlay">Explore the World, Enjoy the World</div>
</div>

  <div id="main"></div>
  
<form class="form-inline" action="search.php" method="POST">
  <label for="date">Date:</label>
  <input type="Date" id="date" placeholder="DD/MM/YYYY" name="date">
  <label for="from">From:</label>
  <select name="start-from" id="" >
       <option value="dar es salaam">Dar es salaam</option> 
       <option value="mbeya">Mbeya</option> 
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
       <option value="Dodoma">Dodoma</option>
       <option value="Rukwa">Rukwa</option> 
</select>
  
  <label for="to">To:</label>

  <select name="destinates" id="" >
       <option value="dodoma">Dodoma</option> 
       <option value="mbeya">Mbeya</option> 
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
       
      
  <button type="submit" name="search">Search</button>
</form>


<div id="main"></div>

</body>
</html> 
