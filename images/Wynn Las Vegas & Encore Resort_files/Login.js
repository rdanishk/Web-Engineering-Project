var xmlhttp;
 
 /////////////////////////////////////////////////////
function GetXmlHttpObject() {
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}
 //=======================================
 /*
 function availabity()
 {
	 alert("shit");
 }*/

 //===========Approve=====================

function Approve()
{
	document.getElementById('abc').style.visibility = 'visible';
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
{
	alert ("Browser does not support HTTP Request");
	return;
}
	var usrname = document.getElementById("usrname").value;
	var pasword = document.getElementById("pasword").value;
	var url = "Login_ajax.php";
	url = url + "?func=Search&u_usrname="+usrname+"&p_pasword="+pasword;
	//url=url+"&sid="+Math.random();
	//alert(url);

	xmlhttp.onreadystatechange=sub_form_jv_callback;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
	
}

//=======================================
function redirect()
{
var check =document.getElementById('mesage').innerHTML;
	if(check == "Logged In")
		window.location = 'AdminPanel.php';
	else
		alert("you are not logged In");
}
 
 //======================================

function sub_form_jv_callback()
{
if (xmlhttp.readyState==4)
{
var responce= xmlhttp.responseText;
document.getElementById("mesage").innerHTML=responce;
}

}