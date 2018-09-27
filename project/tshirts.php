<?php

?>

<!DOCTYPE html>
<html>
<title>T shirts</title>
<style>
#img{
border:10px solid green;
}
h1 { color: green; font-family: 'Helvetica Neue', sans-serif; font-size: 70px; font-weight: bold; 
letter-spacing: -1px; line-height: 1; text-align: center; }
body
{
background-image:url("background.jpg");
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content #white {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline;
}


.dropdown-content #b1 {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline;
}

.dropdown-content #b2 {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline;
}
.dropdown-content #p {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline;
}
.dropdown-content #w {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline;
}
.dropdown-content #p:hover {background-color: purple}
.dropdown-content #b1:hover {background-color: blue}
.dropdown-content #b2:hover {background-color: black}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

div.proceed a {
    display: inline-block;
    color: white;
    text-align: center;
    padding:25px;
    text-decoration: none;
	background-color:green;
	opacity:0.5;

</style>
<body>
</form>

<form method="GET" action="tshirts2.php">
<center><h1>CHOOSE YOUR T SHIRT TEMPLATE</h1></center>
<center><div id="preview"><img src="white.jpg" id="img" height="372px" width="600px"></div></center>
<br>
<br>
<center>
<div class="dropdown">
  <button class="dropbtn">Color</button>
  <div class="dropdown-content">
	<tr>
	<td>
     <input type="button" name="color" id="b1" value="Blue" onclick="blue(this.id)">
    <input type="button" name="color" id="b2" value="Black" onclick="black(this.id)">
	 <input type="button" name="color" id="w" value="White" onclick="r()">
	</td>
	</tr>
  </div>
</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>

</form>




</body>

<script>


function black(id)
{
document.getElementById("preview").innerHTML="<img src='black.jpg' id='img' height='470px' width='600px'>"
alert("Scroll Down to see available design");
var d=document.createElement("div");
var d1=document.createElement("span");
var d2=document.createElement("span");
var d3=document.createElement("span");
d1.setAttribute("onmouseover","displayb1()");
d2.setAttribute("onmouseover","displayb2()");
d3.setAttribute("onmouseover","displayb3()");
d1.setAttribute("onclick","cart(this.id)");
d2.setAttribute("onclick","cart(this.id)");
d3.setAttribute("onclick","cart(this.id)");

d1.innerHTML="<img src='black1.jpg' id='img' height='250px' width='300px'>";
d2.innerHTML="<img src='black2.jpg' id='img' height='250px' width='300px'>";
d3.innerHTML="<img src='black3.jpg' id='img' height='250px' width='300px'>";
d.appendChild(d1);
d.appendChild(d2);
d.appendChild(d3);

document.body.appendChild(d);
}

function blue(id)
{
document.getElementById("preview").innerHTML="<img src='blue.jpg' id='img' height='470px' width='600px'>"
alert("Scroll Down to see available design");
var d=document.createElement("div");
var d1=document.createElement("span");
var d2=document.createElement("span");
var d3=document.createElement("span");

d1.setAttribute("onmouseover","displaybb1()");
d2.setAttribute("onmouseover","displaybb2()");
d3.setAttribute("onmouseover","displaybb3()");

d1.setAttribute("onclick","cart(this.id)");
d2.setAttribute("onclick","cart(this.id)");
d3.setAttribute("onclick","cart(this.id)");


d1.innerHTML="<img src='blue1.jpg' id='img' height='250px' width='300px'>";
d2.innerHTML="<img src='blue2.jpg' id='img' height='250px' width='300px'>";
d3.innerHTML="<img src='blue3.jpg' id='img' height='250px' width='300px'>";

d.appendChild(d1);
d.appendChild(d2);
d.appendChild(d3);

document.body.appendChild(d);
}
function r()
{
document.getElementById("preview").innerHTML="<img src='white.jpg' id='img' height='470px' width='600px'>"
alert("Scroll Down to see available design");
var d=document.createElement("div");
var d1=document.createElement("span");
var d2=document.createElement("span");
var d3=document.createElement("span");
var d4=document.createElement("span");

d1.setAttribute("onmouseover","displayw1()");
d2.setAttribute("onmouseover","displayw2()");
d3.setAttribute("onmouseover","displayw3()");
d4.setAttribute("onmouseover","displayw4()");

d1.setAttribute("onclick","cart(this.id)");
d2.setAttribute("onclick","cart(this.id)");
d3.setAttribute("onclick","cart(this.id)");


d1.innerHTML="<img src='clumsy.jpg' id='img' height='250px' width='300px'>";
d2.innerHTML="<img src='childish.jpg' id='img' height='250px' width='300px'>";
d3.innerHTML="<img src='wife.jpg' id='img' height='250px' width='300px'>";
d4.innerHTML="<img src='interrupt.jpg' id='img' height='250px' width='300px'>";

d.appendChild(d1);
d.appendChild(d2);
d.appendChild(d3);
d.appendChild(d4);
document.body.appendChild(d);
}

function displayb1(id)
{
document.getElementById("preview").innerHTML="<img src='black1.jpg' id='img' height='470px' width='600px'>"
}
function displayb2(id)
{
document.getElementById("preview").innerHTML="<img src='black2.jpg' id='img' height='470px' width='600px'>"
}
function displayb3(id)
{
document.getElementById("preview").innerHTML="<img src='black3.jpg' id='img' height='470px' width='600px'>"
}
function displaybb3(id)
{
document.getElementById("preview").innerHTML="<img src='blue3.jpg' id='img' height='470px' width='600px'>"
}
function displaybb2(id)
{
document.getElementById("preview").innerHTML="<img src='blue2.jpg' id='img' height='470px' width='600px'>"
}
function displaybb1(id)
{
document.getElementById("preview").innerHTML="<img src='blue1.jpg' id='img' height='470px' width='600px'>"
}
function displayw1(id)
{
document.getElementById("preview").innerHTML="<img src='clumsy.jpg' id='img' height='470px' width='600px'>"
}
function displayw2(id)
{
document.getElementById("preview").innerHTML="<img src='childish.jpg' id='img' height='470px' width='600px'>"
}
function displayw3(id)
{
document.getElementById("preview").innerHTML="<img src='wife.jpg' id='img' height='470px' width='600px'>"
}
function displayw4(id)
{
document.getElementById("preview").innerHTML="<img src='interrupt.jpg' id='img' height='470px' width='600px'>"
}

</script>
</html>
