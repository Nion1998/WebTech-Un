<!DOCTYPE html>
<html>
<head>
	<title> Test Index </title>

<style> 
		#helloPanel, #slideDown {
	  	padding: 5px;
	  	text-align: center;
	  	background-color: #e5eecc;
	  	border: solid 1px #c3c3c3;
	}

		#helloPanel {
	 	 padding: 50px;
	 	 display: none;
	}
	h3{
		color: red;
		text-align: center;
	}

</style>

</head>
<body>
<h3>Final Term Lab Test.<br>To complete this test do not change any element of html and css part. <br>Keep css and html as it is. change only in jquery part to get the output as demonstrated. just fill up the comments accordingly</h3>

<div id="slideDown">Click to slide toggle name and id panel</div>
<div id="helloPanel">Hasan Md. Mehedi 19-41743-3</div>

<p>Click to hide this.</p>
<p>Click to hide this also</p>

<h2 style="background-color:whitesmoke;">Heading 2 </h2>
<button id="button1"> click button to change bg-color of heading 2 to yellow</button><br><br>

Name: <input type="text" name="fullname"><br>
Email: <input type="text" name="email"><br><br>

<button id="button2">click button to see fadein effect</button><br><br>

<div id="div1" style="width:100px;height:100px;display:none;background-color:blue;"></div><br><br>
<div id="div2" style="width:100px;height:100px;display:none;background-color:green;"></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
	 // wirte correct selector for the blank   (1)
	
		$(document).ready(function(){
      $("#slideDown").click(function(){
        $("#helloPanel").slideDown("slow");
     });
			    
    
// wirte correct selector for the blank  so that by clicking on  hello world div will be  will be shown  (3)
			  $("p").click(function(){
              $("p").toggle();
  });   
                

			  
			 $("#button1").click(function(){
			  	 //wirte correct code change to background-color of h2 to yellow (5)
				   $("h2").css("color", "yellow");
			  });

			  $("input").focus(function(){
			  	 //wirte code to change background color to yellow of input upon on mouse in (6)
				   $(":focus").css("background-color", "yellow");
			    
			  });

			  //wirte code to change background color to white of input upon on mouse out (7)
			  $("input").blur(function(){
			    $(this).css("background-color", "white");
			    
			  });

			  $("#button2").click(function(){

			    //$("#div1").______; wirte correct code to fadein in 3000 milisecond (8)
			    $("#div1").________;

			    //_______.fadeIn(slow); wirte correct selector to fadein slow for the div with id div2 (9)
			    _______.fadeIn("slow");
			  });

		});
</script>

</body>
</html>