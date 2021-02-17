<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Sign In</title>
<link rel="stylesheet" href="signinstyle.css">
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
  
 <form  class="form-inline" action="addbus.html" method="POST" enctype="multipart/from-data" >
  <h1 class="root-heading">Sign in details</h1><br>
  <label for="date">Username:</label><br>
  <input type="text" id="date" placeholder="username" name="user-name"><br><br>
  <label for="from">Password:</label><br>
  <input type="password" id="from" placeholder="password" name="Password"><br>
  <button class="submit-button" type="submit">Submit details</button> 
 </form>

   <div class="remember-me">
  <label><input type="checkbox" checked="checked" name="remember"> Remember me.</label>
  </div>
  
  <div class="password-forget">                      
    <a href="#forget.php" class="signup-image-link">Forget Password?</a>
  </div>

</body>
</html> 
