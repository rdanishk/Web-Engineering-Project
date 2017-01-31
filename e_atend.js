var xmlhttp;
 
 /////////////////////////////////////////////////////
function GetXmlHttpObject()
{
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

 //===========ADMIN====================== 
 
function redirect()
{
	var check = document.getElementById('mesage').innerHTML;
	if(check == "Logged In")
		window.location = 'adminpanel.php';
	else
		alert("You are not Logged In !");
}

function admin()
{
	document.getElementById('stealth').style.visibility = 'visible';
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	{
		alert ("Browser does not support HTTP Request");
		return;
	}
	var x = document.getElementById('one').value;
	var y = document.getElementById('two').value;
	var url = "e_atend_ajax.php";
	url = url + "?func=members&name="+x+"&pass="+y;	
	
	//url=url+"&sid="+Math.random();
//	alert(url);
	xmlhttp.onreadystatechange=sub_form_jv_callback;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
}

 //===========COMMENTS===================
 
 function comment()
 {	 		 
 	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	{
		alert ("Browser does not support HTTP Request");
		return;
	}
	var name = document.getElementById("name").value;	
	var comment = document.getElementById("comments").value;	
	if(name == "")
	{
		alert("Please Enter your Name !");
		return;
	}
	else if(comment == "")
	{
		alert("Please Enter Comments !");
		return;
	}
	else
		alert("Thankyou for your feedback.");
	var url = "e_atend_ajax.php";
	url = url + "?func=comment&name="+name+"&comment="+comment;	
	
	//url=url+"&sid="+Math.random();
	//alert(url);

	xmlhttp.onreadystatechange=sub_form_jv_callback;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
 }
 
 //===========SEARCH=====================

function khoj()
{
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	{
		alert ("Browser does not support HTTP Request");
		return;
	}
	var login = document.getElementById("login").value;	
	var password = document.getElementById("pass").value;	
	var url = "e_atend_ajax.php";
	url = url + "?func=search&login="+login+"&password="+password;	
	
	//url=url+"&sid="+Math.random();
	//alert(url);

	xmlhttp.onreadystatechange=sub_form_jv_callback;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
}
 
 //======================================

function sub_form()
{
	
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	  {
	  alert ("Browser does not support HTTP Request");
	  return;
	  }
	  
	var username = document.getElementById('login').innerHTML;
	var password = document.getElementById('password').innerHTML;
	var from = document.getElementById('from').innerHTML;
	var to = document.getElementById('to').innerHTML;
	var departure = document.getElementById('departure').innerHTML;
	var arrival = document.getElementById('arrival').innerHTML;
	var seat = document.getElementById('seat').innerHTML;
	
	var url = "e_atend_ajax.php";
	url = url + "?func=insert&username="+username+"&password="+password+"&from="+from+"&to="+to+"&departure="+departure+"&arrival="+arrival+"&seat="+seat;
	
	url=url+"&sid="+Math.random();
	
	
	xmlhttp.onreadystatechange=sub_form_jv_callback;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
} 

function sub_form_jv_callback()
{
if (xmlhttp.readyState==4)
{ 
// document.getElementById("quantity").value="";
//document.getElementById("pp").value="";
//document.getElementById("total_p").value="";
//document.getElementById("gst_p").value="";
//document.getElementById("gst").value="";	 
//document.getElementById("total_p2").value="";
 

var responce= xmlhttp.responseText;
//alert(responce);
document.getElementById("mesage").innerHTML=responce;
//
// getall();
//document.getElementById("res").innerHTML=xmlhttp.responseText;
//document.getElementById("prin").style.display="";

// 
// document.getElementById("name").select();

}

}


//=================================================================//

	

////////////////////GET ALL RECORDS STARTS  /////////////

function getall()
{

xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
{
alert ("Browser does not support HTTP Request");
return;
}
// if (pages==0){pages=1;}
var url = "e_atend_ajax.php";
url = url + "?func=getall";

url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=getall_callback;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function getall_callback()
{
if (xmlhttp.readyState==4)
{
//var responce= xmlhttp.responseText;
// alert(responce);
 document.getElementById("res").innerHTML=xmlhttp.responseText;
 document.getElementById("print").style.display="";
 
}
}
///////////////////////////////////// update record///////////////////////////////////////
function update_rec()
{

xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var at_id =document.getElementById("at_id").value;
var e_workshop = document.getElementById("e_workshop").value;
var date = document.getElementById("inputField").value;
var role = document.getElementById("role").value;
var organized = document.getElementById("organized").value;
var country = document.getElementById("country").value;

			 
				
var url = "e_atend_ajax.php";
url = url + "?func=update&at_id="+at_id+"&e_workshop="+e_workshop+"&date="+date+"&role="+role+"&organized="+organized+"&country="+country;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=update_callback;
 
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
       
}

function update_callback()
{
if (xmlhttp.readyState==4)
{
 //document.getElementById("name").value= "";
//document.getElementById("price").value= "";
//document.getElementById("desc").style.display ="";
 	//var response =xmlhttp.responseText;
alert(xmlhttp.responseText);
location.reload();
// getall();
}
}

///////////////////////================================///////////////////////////////
function jv_summary(){
	var e_workshop = document.getElementById("e_workshop").value;

	window.location = "jvs.php?e_workshop="+e_workshop;
	
	}
/////////////////////////////////////////////delete////////////////////////////////////
function delete_i(at_id){
	
	xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
	
	if (confirm("    Are you sure to delete record !")) {	 
	
	var url = "e_atend_ajax.php";
url = url + "?func=delete_item&at_id="+at_id;


url=url+"&sid="+Math.random();

xmlhttp.onreadystatechange=deleteP_callback1;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
	}
	else{
		exit;
		}
}
function deleteP_callback1()
{
if (xmlhttp.readyState==4)
{

var p=xmlhttp.responseText;

	
	alert(p);
	location.reload();
	
// document.getElementById("res").innerHTML=xmlhttp.responseText;


}
}
function print_rec(){
	var e_workshop=document.getElementById("e_workshopv").value;
	window.location = "credit_report.php?e_workshop="+e_workshop;


}
//////////////////////////////////////////////////Edit record///////////////////////////////////////////////
function edit(at_id,e_workshop,role,organized,date,country){ 

document.getElementById("at_id").value=at_id;
 document.getElementById("e_workshop").value=e_workshop;
 document.getElementById("role").value=role;
  document.getElementById("organized").value=organized;
  document.getElementById("inputField").value=date;
  document.getElementById("country").value=country;
 document.getElementById("save").style.display="none";
  document.getElementById("update").style.display="";
 
}