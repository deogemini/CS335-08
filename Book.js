let value = 1
let previous_id = "A1"

function book(id){
    
    if (previous_id != id ){
        document.getElementById(previous_id).style.backgroundColor = "#87ceeb";
        value = 1;
    }
    if (value == 1){
        document.getElementById(id).style.backgroundColor = "#F19481";
        
        // 
    } else{ 
        document.getElementById(id).style.backgroundColor = "#87ceeb";
    }
    changeValue()
    previous_id = id

    // alert(id)
    // var info1 = document.getElementById('A1').value = document.getElementById('A3').value;
   var info1= document.getElementById("text1").value = id;

    // var info1 = document.getElementById('text1').value ;
    var info2 = document.getElementById('text2').value;
    var info3 = document.getElementById('text3').value;
    var info4 = document.getElementById('text4').value;
    var info5 = document.getElementById('text5').value;
    var info6 = document.getElementById('text6').value;
    alert("Seat: "+info1+"\n Names: "+info2+"\n From: "+info3+"\n To: "+info4+"\n Date: "+info5+"\n Contact: "+info6);
}



function changeValue(){
    value = !value 
}