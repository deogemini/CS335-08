<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Home</title>
<link rel="stylesheet" href="homestyle.css">
</head>

<body>
<div class="title">
<div class="logo"><img src="obtms-logo.png"></div>

<div class="heading"><h1 >Online Bus Ticketing System</h1></div>
 </div>
    <div class="btn-group">
	<br>
        <a href="home.php"class="button"> Home </a>
        <a href="signin.php" class="button">Sign in </a>
        <a href="#" class="button"> Print ticket</a>
        <a href="contactUs.php" class="button">Contact us</a>
        <a href="howToPay.php" class="button">How to pay </a>
		<br><br><br><br>
    </div>
	
<div class="container">
  <div class="overlay">Explore the World, Enjoy the World</div>
</div>

  <div id="main"></div>
<form class="form-inline" action="action_page.php" method="GET">
  <label for="date">Date:</label>
  <input type="Date" id="date" placeholder="DD/MM/YYYY" name="date">


  <label for="from">From:</label>
  <select id="region" >    
    <option value="dar es salaam">Dar es Salaam</option>
    <option value="mbeya">Mbeya</option>
    <option value="morogoro">Morogoro</option>
    <option value="iringa">Iringa</option>
    <option value="tanga">Tanga</option>
    <option value="kilimanjaro">Kilimanjaro</option>
    <option value="arusha">Arusha</option>

</select>


  <label for="to">To:</label>
  <select id="region">
            <option value ="Tabore">Tabora</option>
            <option value ="Mwanza">Mwanza</option>
            <option value ="kigoma">kigoma</option>
            <option value ="iringa">Iringa</option>
            <option value ="tanga">Tanga</option>
            <option value ="Dar es Salaam">Dar es salaam</option>
            <option value ="arusha">Arusha</option>
  </select>

  
  <button type="submit">Search</button>
</form>


<div id="main"></div>

</body>
</html> 
