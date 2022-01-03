$(document).ready(function() {
    if (localStorage.getItem("currencyData") !== null) {
        storedUsers = JSON.parse(localStorage.getItem("currencyData"));
    
        if (localStorage.getItem("currencyData").length !== 2) {
            $('table').append('<tr><th>ID</th><th> Currency Name </th><th> Buy Price </th><th> Sell Price </th></tr>');
        }
  
        for(i=0; i<storedUsers.length; i++){
            var id = i+1;
            $('table').append('<tr><td>' + id + '</td><td>' + storedUsers[i]['currencyName'] + '</td><td>' + storedUsers[i]['buyPrice'] + '</td><td>' + storedUsers[i]['sellPrice'] + '</td></tr>');		
        }
    }
  });
  