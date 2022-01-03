<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
	  .currency-modification-container{
		  display: flex;
		  align-items: center;
		  justify-content: space-evenly;
		  height: 100vh;
		  width: 100%;
		  margin: 0 auto;
		  text-align: center;
	  }
	  .big-title{
         font-size: 1.5rem;
         margin-bottom: .8rem;
         color: crimson;
      }
	    th{
         padding: 2rem;
         font-size: 1.6rem;
         color: black;
      }
      td{
        font-size: 1.4rem;
		     color: black;
      }

	 .btn-edit{
		 padding: 1rem 2rem;
		 background-color: crimson;
		 color: white;
		 border: none;
		 cursor: pointer;
		 border-radius: 5px;

	 }
	 .btn-del{
		 padding: 1rem 2rem;
		 background-color: black;
		 color: white;
		 border: none;
		 cursor: pointer;
		 text-decoration: none;
		 border-radius: 5px;
	 }
   .btn-cancel{
     padding: 1rem 2rem;
		 background-color: black;
		 color: white;
		 border: none;
		 cursor: pointer;
		 text-decoration: none;
		 border-radius: 5px;
     text-align: center;
     margin-top: 1rem;
     width: 45%;
   }
   .currency-container{
     flex-basis: 70%;
   }
	 .control-currency{
		 display: flex;
		 align-items: left;
		 justify-content: space-between;
     text-align: center;
     flex-direction: column;
		 text-align: left;
     flex-basis: 20%;
     height: 65%;
	 }
	 input{
		 background: transparent;
		 border: 2px solid crimson;
		 outline: none;
		 margin-bottom: .5rem;
		 border-radius: 5px;
		 padding: .5rem;
	 }
   .currency-modification-container{
    position: absolute;
    left: 63%;
    top: 50%;
    transform: translate(-55%,-50%);
    width: 75%;
    height: 80vh;
    text-align: center;
   }
 

</style>
<body>
    <?php
      include("admin-nav.php");
    ?>
  <main role="main">

    <section class="currency-modification-container">
        <div class="currency-container">
          <h3 class="big-title">Currency Information </h3>
          <table class="table"></table>
        </div> 
  
      <div class="control-currency">
<!-----
          <div class="addCurrency">
            <h3 class="big-title">Add New Currency</h3>
        
             <form id="inputForm">
                
                 <div class="form-group">
                    <input type="currencyName" class="form-control" placeholder="Enter Currency Name" id="currencyName">
                 </div>

                  <div class="form-group">
                    <input type="buyPrice" class="form-control" placeholder="Enter Buy Price" id="buyPrice">
                 </div>

                  <div class="form-group">
                    <input type="sellPrice" class="form-control" placeholder="Enter Sell Price" id="sellPrice">
                 </div>

                  <div class="form-group">
                    <input type="submit" class="btn-edit" value="Submit" />
                 </div>

              </form> 
         </div>
  --->

         <div class="addCurrency">
            <h3 class="big-title">Update Ex Currency</h3>
            <form id="editForm">
              <div class="form-group">
                <input type="currencyName" class="form-control" placeholder="Currency Name" currency="currencyName">
              </div>
              <div class="form-group">
                <input type="buyPrice" class="form-control" placeholder="Enter Buy Price" currency="buyPrice">
              </div>
              <div class="form-group">
                <input type="sellPrice" class="form-control" placeholder="Enter Sell Price" currency="sellPrice">
              </div>
              <input currency="id" hidden>
              <div class="form-group">
                <button type="submit" class="btn-edit">Update</button>
              </div>	
            </form>
         </div>
         <a class="btn-cancel" href="admin-currency-rate.php">Back</a>
      </div>
    
  </main>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>
 
var storedUsers = [];	
var user_id = 0; 
var i = 0;

function editCurrency(i) {
var storedUsers = JSON.parse(localStorage.getItem('currencyData'));

$("#editForm").find('input[currency="currencyName"]').val(storedUsers[i]["currencyName"]);
$("#editForm").find('input[currency="buyPrice"]').val(storedUsers[i]["buyPrice"]);
$("#editForm").find('input[currency="sellPrice"]').val(storedUsers[i]["sellPrice"]);
$("#editForm").find('input[currency="id"]').val(i);
}	


function deleteCurrency(i) {
var storedUsers = JSON.parse(localStorage.getItem('currencyData'));
storedUsers.splice(i,1);
if(storedUsers.length==0) 
$('table').remove();
window.localStorage.setItem('currencyData',JSON.stringify(storedUsers));
window.location.reload();
}


$(document).ready(function() {
if (localStorage.getItem("currencyData") !== null) {
storedUsers = JSON.parse(localStorage.getItem("currencyData"));

if (localStorage.getItem("currencyData").length !== 2) {
$('table').append('<tr><th>ID</th><th> Currency Name </th><th> Buy Price </th><th> Sell Price </th><th> Edit </th><th> Delete </th></tr>');
}

for(i=0; i<storedUsers.length; i++){
var id = i+1;
$('table').append('<tr><td>' + id + '</td><td>' + storedUsers[i]['currencyName'] + '</td><td>' + storedUsers[i]['buyPrice'] + '</td><td>' + storedUsers[i]['sellPrice'] + '</td> <td> <button type=\"submit\" class=\"btn-edit\" onclick=\"editCurrency(' + i + ')\">Edit</button></td>' + '</td> <td> <button type=\"submit\" class=\"btn-del\" onclick=\"deleteCurrency(' + i + ')\">Delete</button></td> </tr>');		
}
}

console.log(storedUsers[0]['currencyName']);
console.log(storedUsers[1]['buyPrice']*80);
});


$('#inputForm').on('submit', function (e) {
e.preventDefault();

if (localStorage.getItem("currencyData") !== null) {
storedUsers = JSON.parse(localStorage.getItem("currencyData"));
}

if (localStorage.getItem("currencyData") === null){
$('table').append('<tr><th> currencyName </th><th> buyPrice </th><th> sellPrice </th></tr>');
}
  
var n = $('#inputForm').find('input[type="currencyName"]').val();

var e = $('#inputForm').find('input[type="buyPrice"]').val();

var s = $('#inputForm').find('input[type="sellPrice"]').val();

const user = {
currencyName: n,
buyPrice: e,
sellPrice: s
}


storedUsers.push(user);

window.localStorage.setItem('currencyData',JSON.stringify(storedUsers));

$(this).closest('form').find("input[type=currencyName]").val("");
$(this).closest('form').find("input[type=buyPrice]").val("");
$(this).closest('form').find("input[type=sellPrice]").val("");
window.location.reload();

});

$('#editForm').on('submit', function (e) {
e.preventDefault();

storedUsers = JSON.parse(localStorage.getItem("currencyData"));

var i = $('#editForm').find('input[currency="id"]').val();

var n = $('#editForm').find('input[type="currencyName"]').val();

var e = $('#editForm').find('input[type="buyPrice"]').val();

var s = $('#editForm').find('input[type="sellPrice"]').val();

storedUsers[i]["currencyName"] = n;	
storedUsers[i]["buyPrice"] = e;
storedUsers[i]["sellPrice"] = s;


window.localStorage.setItem('currencyData',JSON.stringify(storedUsers));

window.location.reload();

});

</script>
  
  
</body>
</html>