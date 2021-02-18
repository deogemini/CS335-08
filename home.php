
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

  <input type="text" id="from" placeholder="Travelling from?" name="start-from">
  <label for="to">To:</label>
  <input type="text" id="to" placeholder="Where to?" name="destinates">

  <button type="submit" name="search">Search</button>
</form>


<div id="main"></div>

</body>
</html> 
