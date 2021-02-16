<!DOCTYPE html>
<html>
    <head>
        <title>Book seat</title>
        <link rel="stylesheet" href="bookstyle.css">
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
        <a href="contactUs.php" class="button">Contact us</a>
        <a href="howToPay.php" class="button">How to pay </a>
    <br><br><br><br>
            </div>

    <div class="information">
        <form action="booking.php" method="POST" name="info">
            <input type="button" value="Seat" style="width:100px;"><input type="text" name="Seat" id="text1"><br><br>
            <input type="button" value="Name" style="width:100px;"><input type="text" name="Name" id="text2"><br><br>
            <input type="button" value="Contact" style="width:100px;"><input type="text" name="From" id="text3"><br><br>
            <input type="button" value="Email"style="width:100px; "><input type="text" name="To" id="text4"><br><br>
            <button style="Submit" value="Book" onclick="book()">Save details and request control number</button>
        </form>   
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        
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
            <p align="center">After selecting, fill the details and proceed</p>
        </div>

        <div class="container">
            <div class="overlay">Explore the World, Enjoy the World</div>
        </div>
        <script src="book.js" alt="desktop"></script>
    </body>
</html>