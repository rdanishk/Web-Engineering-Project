// JavaScript Document
function confirm()
{
	alert("Your booking has been confirmed !");
}


function checkDate()
{
	var one = document.getElementById('departure').value;
	var two = document.getElementById('departure').value;
	if(one > two)
		alert("Departure Date cannot be greater than arrival date");
}
