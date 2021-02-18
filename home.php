
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
  <select name="region" id="region">
      <option value="dar es salaam">dar es salaam</option>
      <option value="morogoro">morogoro</option>
      <option value="mbeya">mbeya</option>
      <option value="mwanza">mwanza</option>
      <option value="tanga">tanga</option>
      <option value="dodoma">dodoma</option>
      <option value="shinyanga">shinyanga</option>
      <option value="kagera">kagera</option>
      <option value="kigoma">kigoma</option>
      <option value="geita">geita</option>
      <option value="lindi">lindi</option>
      <option value="mtwara">mtwara</option>
      <option value="tabora">tabora</option>
      <option value="singida">singida</option>
      <option value="songwe">songwe</option>
      <option value="arusha">arusha</option>
      <option value="manyara">manyara</option>
      <option value="rukwa">Rukwa</option>
      <option value="kilimanjaro">Kilimanjaro</option>
      <option value="pwani">Pwani</option>
      <option value="iringa">Iringa</option>
      <option value="Simiyu">Simiyu</option>
      <option value="katavi">Kativi</option>
      <option value="ruvuma">Ruvuma</option>
      <option value="Mara">Mara</option>
      <option value="Njombe">Njombe</option>
  </select>
      
  <label for="to">To:</label>

  <select name="region" id="region">
      <option value="dar es salaam">dar es salaam</option>
      <option value="morogoro">morogoro</option>
      <option value="mbeya">mbeya</option>
      <option value="mwanza">mwanza</option>
      <option value="tanga">tanga</option>
      <option value="dodoma">dodoma</option>
      <option value="shinyanga">shinyanga</option>
      <option value="kagera">kagera</option>
      <option value="kigoma">kigoma</option>
      <option value="geita">geita</option>
      <option value="lindi">lindi</option>
      <option value="mtwara">mtwara</option>
      <option value="tabora">tabora</option>
      <option value="singida">singida</option>
      <option value="songwe">songwe</option>
      <option value="arusha">arusha</option>
      <option value="manyara">manyara</option>
      <option value="rukwa">Rukwa</option>
      <option value="kilimanjaro">Kilimanjaro</option>
      <option value="pwani">Pwani</option>
      <option value="iringa">Iringa</option>
      <option value="Simiyu">Simiyu</option>
      <option value="katavi">Kativi</option>
      <option value="ruvuma">Ruvuma</option>
      <option value="Mara">Mara</option>
      <option value="Njombe">Njombe</option>
</select>

  <button type="submit" name="search">Search</button>
</form>


<div id="main"></div>

</body>
</html> 
