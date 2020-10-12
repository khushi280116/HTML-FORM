<html>
<head><center>
	<h1>Data Form</h1></center>
	

</head>

<link href="css/style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="ajax1.js"></script>

<body><form id="vedformid" method="post" class="a" onsubmit="return validate()">
	<table>
		<tr><td><b>Name:</b></td></tr>
		<tr><td><input type="text" name="name" class="txt"
			placeholder="Name" id="name" required="true"></td></tr>
			<span id="username"></span>
		<tr><td><b>City:</b></td></tr>
		<tr><td><input type="text" name="city" class="txt"placeholder="City"id="city" required="true"></td></tr>
		<tr><td><b>Occupation:</b></td></tr>
		<tr><td ><input type="text" name="occupation" class="txt"placeholder="Occupation" required="true"  id="occupation"></td></tr>


	</table><br>
	<input type="submit" value="ADD DATA" id="insertbtn" class="button" style="background-color:green;color:white;height:35px;
	width:100px;">
		


</form>
<div id="messagedis" style="color:1px solid "></div></center>

<?php 
include("ajax.js");
?>
<script>
		


function validate()
{
 var c=checkName();
 if(c==false) 
   return false; 

}
function checkName()
{
 var i;
 var name=document.getElementById("name").value;
 if(name.length==0)
  {
   alert("incorrect name");
   return false;
  }
  for(i=0;i<name.length;i++)
  
  {
   if(!((name.charCodeAt(i)>=65&&name.charCodeAt(i)<=90)||(name.charCodeAt(i)>=97&&name.charCodeAt(i)<=122)||(name.charCodeAt(i==32))))
   {
    alert("incorrect");
	return false;
  }
}
}
</script>
</body>
</html> 