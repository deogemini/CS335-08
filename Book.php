<?php
    $db = mysqli_connect("localhost", "root", "", "online_bus_booking");
    if(!$db){
        echo "error ".mysqli_connect_error();
    }
    if(isset($_POST["elly"])){
    $seat = $_POST["Seat"];
    $name = $_POST["Name"];
    $from = $_POST["From"];
    $to = $_POST["To"];
    $date = $_POST["Date"];
    $number = $_POST["Contact"];
	
	

    $query ="INSERT INTO customers(seat, name, travelFrom, travelTo, travelDate, contacts) values('$seat', '$name', '$from', '$to', '$date', '$number')";
    $result = mysqli_query($db, $query);
	header('location: controlnumber.php');
    if(!$result){
        echo "error ".mysqli_error($db);

    }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Booking page</title>
		<link rel="stylesheet" href="homestyle.css">
        <style>
		
        body{
            background-image: url('images/paper.jpg');
			 background-repeat: repeat;
        }

        .seatPlan{
            width:325px;
            margin:auto;
            height:auto;
            background:white;
            padding:15px;
			margin-left:65%;
			margin-top:-35%;
			border-radius:18px;
        }

        input[type=button]{
            background:skyblue;
            width:70px;
            padding:1px;
            font-size:22px;
            font-weight:strong;
            border-radius:5px;
        }

        input[type=text]{
            width:320px;
            padding:1px;
            font-size:22px;
            font-weight:strong;
            margin-top:10px;
            border-radius:5px;
        }

        
        input[type=date]{
            width:320px;
            padding:1px;
            font-size:22px;
            font-weight:strong;
            margin-top:20px;
            border-radius:5px;
        }
            
        input[type=number]{
            width:320px;
            padding:1px;
            font-size:22px;
            font-weight:strong;
            margin-top:10px;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            font-size:22px;
            font-weight:strong;
            margin-top:10px;
            border-radius:5px;
            background:#2a5a68;
            color:white;
        }

        
		
		.information{
			margin-left:25%;
			background-color:#2E8B57;
			padding:20px;
			width:32%;
			margin-top:-43%;
			border-radius:18px;
		}
		
		
		
		
        </style>
    </head>
    <body>
				  <div class="title">
		<div class="logo"><img src="images/obtms-logo.png"></div>
		<div class="heading"><h1 >Online Bus Ticketing System</h1></div>
		 </div>
		 <div class="btn-group">
	<br>
        <a href="home.php"class="button"> Home </a>
        <a href="#signin.php" class="button">Sign in </a>
        <a href="#" class="button"> Print ticket</a>
        <a href="ContactUs.php" class="button">Contact us</a>
        <a href="HowToPay.php" class="button">How to pay </a>
		<br><br><br><br>
    </div>
	
<div class="container">
  <div class="overlay">Explore the World, Enjoy the World</div>
</div>
		  
        <div class="information">
		<h2 align="center">Fill out the information</h2>
         <form action="Book.php" method="POST" name="info">
             <input type="button" value="Seat" style="width:100px;"><input type="text" name="Seat" id="text1" required><br><br>
             <input type="button" value="Name" style="width:100px;"><input type="text" name="Name" id="text2" required><br><br>
             <select name="From" id ="region" style="width:100%; height: 30px; font-size: 24px; border-radius: 5px; margin-top:20px; font-weight:strong;">
            <option value ="region">From:</option>
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
        </select><br><br>
        <select name="To" id ="region" style="width:100%; height: 30px; font-size: 24px; border-radius: 5px; margin-top:20px; font-weight:strong;">
            <option value ="region">To:</option>
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
        </select><br><br>
             <input type="button" value="Date" style="width:100px;"><input type="date" name="Date" id="text5" required><br><br>
             <input type="button" value="Contact" style="width:100px;"><input type="number" name="Contact" id="text6" required><br><br>
             <button style="Submit" value="Book"  name="elly" >Book</button>
         </form>   
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="seatPlan">
           
            <h2 align="center">Click to select your seat</h2>
            <form>
                <input type="button" value="A1" id="A1" onclick="info.text1.value+='A1' ; document.getElementById('A1').style.backgroundColor='#F19481';">
                <input type="button" value="A2" id="A2" onclick="info.text1.value+='A2' ; document.getElementById('A2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="A3" id="A3" onclick="info.text1.value+='A3' ; document.getElementById('A3').style.backgroundColor='#F19481';">
                <input type="button" value="A4" id="A4" onclick="info.text1.value+='A4' ; document.getElementById('A4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="B1" id="B1" onclick="info.text1.value+='B1' ; document.getElementById('B1').style.backgroundColor='#F19481';">
                <input type="button" value="B2" id="B2" onclick="info.text1.value+='B2' ; document.getElementById('B2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="B3" id="B3" onclick="info.text1.value+='B3' ; document.getElementById('B3').style.backgroundColor='#F19481';">
                <input type="button" value="B4" id="B4" onclick="info.text1.value+='B4' ; document.getElementById('B4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="C1" id="C1" onclick="info.text1.value+='C1' ; document.getElementById('C1').style.backgroundColor='#F19481';">
                <input type="button" value="C2" id="C2" onclick="info.text1.value+='C2' ; document.getElementById('C2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="C3" id="C3" onclick="info.text1.value+='C3' ; document.getElementById('C3').style.backgroundColor='#F19481'; ">
                <input type="button" value="C4" id="C4" onclick="info.text1.value+='C4' ; document.getElementById('C4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="D1" id="D1" onclick="info.text1.value+='D1' ; document.getElementById('D1').style.backgroundColor='#F19481';">
                <input type="button" value="D2" id="D2" onclick="info.text1.value+='D2' ; document.getElementById('D2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="D3" id="D3" onclick="info.text1.value+='D3' ; document.getElementById('D3').style.backgroundColor='#F19481';">
                <input type="button" value="D4" id="D4" onclick="info.text1.value+='D4' ; document.getElementById('D4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="E1" id="E1" onclick="info.text1.value+='E1' ; document.getElementById('E1').style.backgroundColor='#F19481';">
                <input type="button" value="E2" id="E2" onclick="info.text1.value+='E2' ; document.getElementById('E2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="E3" id="E3" onclick="info.text1.value+='E3' ; document.getElementById('E3').style.backgroundColor='#F19481';">
                <input type="button" value="E4" id="E4" onclick="info.text1.value+='E4' ; document.getElementById('E4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="F1" id="F1" onclick="info.text1.value+='F1' ; document.getElementById('F1').style.backgroundColor='#F19481';">
                <input type="button" value="F2" id="F2"  onclick="info.text1.value+='F2' ; document.getElementById('F2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="F3" id="F3" onclick="info.text1.value+='F3' ; document.getElementById('F3').style.backgroundColor='#F19481';">
                <input type="button" value="F4" id="F4" onclick="info.text1.value+='F4' ; document.getElementById('F4').style.backgroundColor='#F19481';">
                
                

            </form>
            
        </div>
        <script src="book.js" alt="desktop"></script>
    </body>
</html>